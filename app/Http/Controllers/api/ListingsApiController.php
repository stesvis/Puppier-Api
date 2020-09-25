<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\ListingResource;
use App\Http\Resources\ListingResourceCollection;
use App\Http\Resources\VehicleResource;
use App\Models\Listing;
use App\Services\Listings\ListingsServiceInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ListingsApiController extends BaseApiController
{
    /**
     * @var ListingsServiceInterface
     */
    private $service;

    public function __construct(Request $request, ListingsServiceInterface $service)
    {
        parent::__construct($request);
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        try {
            $listings = $this->service->all();
            if ($this->paginate !== null) {
                $listings = $listings->paginate($this->paginate);
            }

            return new ListingResourceCollection($listings);
        } catch (Exception $ex) {
            return parent::handleException($ex);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        try {
            $listing = $this->service->get($id);

            return new ListingResource($listing);
        } catch (Exception $ex) {
            return parent::handleException($ex);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Listing $listing
     * @return Response
     */
    public function update(Request $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Listing $listing
     * @return Response
     */
    public function destroy(Listing $listing)
    {
        //
    }
}
