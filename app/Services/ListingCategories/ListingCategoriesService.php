<?php


namespace App\Services\ListingCategories;


use App\Models\ListingCategory;
use App\Services\BaseService;

class ListingCategoriesService extends BaseService implements ListingCategoriesServiceInterface
{
    public function __construct(ListingCategory $modelClass)
    {
        parent::__construct($modelClass);
    }

    public function validationRules(): array
    {
        // TODO: Implement validationRules() method.
    }
}
