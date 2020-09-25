<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\ListingCategoryResource;
use App\Http\Resources\ListingCategoryResourceCollection;
use App\Models\ListingCategory;
use App\Services\ListingCategories\ListingCategoriesServiceInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ListingCategoryApiController extends BaseApiController
{
    /**
     * @var ListingCategoriesServiceInterface
     */
    private $service;

    public function __construct(Request $request, ListingCategoriesServiceInterface $service)
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
            $listingCategories = $this->service->all();
            if ($this->paginate !== null) {
                $listingCategories = $listingCategories->paginate($this->paginate);
            }

            return new ListingCategoryResourceCollection($listingCategories);
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
     * @param ListingCategory $listingCategory
     * @return Response
     */
    public function show($id)
    {
        try {
            $listingCategory = $this->service->get($id);

            return new ListingCategoryResource($listingCategory);
        } catch (Exception $ex) {
            return parent::handleException($ex);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request         $request
     * @param ListingCategory $listingCategory
     * @return Response
     */
    public
    function update(
        Request $request,
        ListingCategory $listingCategory
    ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ListingCategory $listingCategory
     * @return Response
     */
    public
    function destroy(
        ListingCategory $listingCategory
    ) {
        //
    }
}
