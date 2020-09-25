<?php

namespace App\Http\Controllers\api;

use App\DTOs\ErrorDTO;
use App\Http\Controllers\Controller;
use App\Http\Resources\ErrorResource;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BaseApiController extends Controller
{
    /**
     * @var Request
     */
    public $request;

    protected $paginate;

    /**
     * ApiControllerBase constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
        if ($request['paginate'] !== null && is_integer(intval($request['paginate']))) {
            $this->paginate = $request['paginate'];
        }
    }

    public function handleException(Exception $ex)
    {
        $code = $ex->getCode();

        $error = new ErrorDTO();
        $error->code = $code > 0 ? $code : Response::HTTP_INTERNAL_SERVER_ERROR;
        $error->message = $ex->getMessage();
        $error->details = $ex->getFile().' ---> line '.$ex->getLine();

        return (new ErrorResource($error))->response()->setStatusCode(Response::HTTP_BAD_REQUEST);
    }
}
