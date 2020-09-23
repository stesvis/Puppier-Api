<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\UserResource;
use App\Http\Resources\UserResourceCollection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersApiController extends BaseApiController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return UserResourceCollection|\Illuminate\Http\JsonResponse|object
     */
    public function index()
    {
        try {
            $users = User::all();
            if ($this->paginate !== null) {
                $users = $users->paginate($this->paginate);
            }

            return new UserResourceCollection($users);
        } catch (\Exception $ex) {
            return parent::handleException($ex);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return UserResource|\Illuminate\Http\JsonResponse|object
     */
    public function show(User $user)
    {
        try {
            return new UserResource($user);
        } catch (\Exception $ex) {
            return parent::handleException($ex);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User         $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return Response
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * @return UserResource|\Illuminate\Http\JsonResponse|object
     */
    public function me()
    {
        try {
            return new UserResource($this->request->user());
        } catch (\Exception $ex) {
            return parent::handleException($ex);
        }
    }
}
