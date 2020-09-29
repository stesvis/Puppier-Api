<?php

namespace App\Http\Controllers\api;

use App\Models\ListingComment;
use Illuminate\Http\Request;

class ListingCommentsApiController extends BaseApiController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ListingComment $listingComment
     * @return \Illuminate\Http\Response
     */
    public function show(ListingComment $listingComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request   $request
     * @param \App\Models\ListingComment $listingComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListingComment $listingComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ListingComment $listingComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListingComment $listingComment)
    {
        //
    }
}
