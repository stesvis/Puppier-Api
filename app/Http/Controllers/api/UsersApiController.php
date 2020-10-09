<?php

namespace App\Http\Controllers\api;

use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserResourceCollection;
use App\Models\User;
use App\Services\Users\UsersServiceInterface;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersApiController extends BaseApiController
{
    /**
     * @var UsersServiceInterface
     */
    private $service;

    public function __construct(Request $request, UsersServiceInterface $service)
    {
        parent::__construct($request);
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return UserResourceCollection|JsonResponse|object
     */
    public function index()
    {
        try {
            $users = $this->service->all();
            if ($this->paginate !== null) {
                $users = $users->paginate($this->paginate);
            }

            return new UserResourceCollection($users);
        } catch (Exception $ex) {
            return parent::handleException($ex);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserRequest $request
     * @return UserResource|JsonResponse|object
     */
    public function store(StoreUserRequest $request)
    {
        try {
            $data = $request->validated();

            $user = $this->service->create($data);

            return new UserResource($user);
        } catch (Exception $ex) {
            return parent::handleException($ex);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return UserResource|JsonResponse|object
     */
    public function show($id)
    {
        try {
            $user = $this->service->get($id);

            return new UserResource($user);
        } catch (Exception $ex) {
            return parent::handleException($ex);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User    $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return Response
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * @return UserResource|JsonResponse|object
     */
    public function me()
    {
        try {
            return new UserResource($this->request->user());
        } catch (Exception $ex) {
            return parent::handleException($ex);
        }
    }
}
