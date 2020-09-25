<?php


namespace App\Services\Listings;


use App\Models\Listing;
use App\Services\BaseService;

class ListingsService extends BaseService implements ListingsServiceInterface
{
    public function __construct(Listing $modelClass)
    {
        parent::__construct($modelClass);
    }

    public function validationRules(): array
    {
        // TODO: Implement validationRules() method.
    }
}
