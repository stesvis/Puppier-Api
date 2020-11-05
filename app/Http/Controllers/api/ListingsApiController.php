<?php

namespace App\Http\Controllers\api;

use App\Http\Requests\StoreListingRequest;
use App\Http\Resources\ListingResource;
use App\Http\Resources\ListingResourceCollection;
use App\Models\Listing;
use App\Services\Listings\ListingsServiceInterface;
use Exception;
use Illuminate\Http\JsonResponse;
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
     * @return JsonResponse|Response|object
     */
    public function index()
    {
        try {
            $keywords = $this->request->query('keywords');
            $where = $this->request->query('where');
            $category_id = $this->request->query('category_id');

            $listings = $this->service
                ->search($keywords, $where, $category_id)
                ->sortByDesc('created_at');

            if ($this->paginate !== null) {
                $listings = $listings->paginate($this->paginate);
            }

            return new ListingResourceCollection($listings);
        } catch (Exception $ex) {
            return parent::handleException($ex);
        }
    }

    /**
     * @return ListingResourceCollection|JsonResponse|object
     */
    public function featured()
    {
        try {
            $listings = $this->service->featured();
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
     * @param StoreListingRequest $request
     * @return ListingResource|JsonResponse|object
     */
    public function store(StoreListingRequest $request)
    {
        try {
            $data = $request->validated();

            $data['user_id'] = $request->user()->id;

            $listing = $this->service->create($data);

            return new ListingResource($listing);
        } catch (Exception $ex) {
            return parent::handleException($ex);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return JsonResponse|Response|object
     */
    public function show($id)
    {
        try {
//            $listing = $this->service->get($id, ['listingCategory', 'user']);
            $listing = $this->service->get($id);
            $listing->views_count++;
            $listing->save();

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
