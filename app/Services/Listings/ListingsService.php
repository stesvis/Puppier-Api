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

    /**
     * @return mixed
     */
    public function featured()
    {
        return Listing::inRandomOrder()->limit(5)->get();
    }

    /**
     * @param $keywords
     * @param $where
     * @param $category_id
     * @return mixed
     */
    public function search($keywords, $where, $category_id)
    {
        $query = $this->modelClass;

        if (!empty($keywords)) {
            $query = $query->where('title', 'like', '%'.$keywords.'%');
        }
        if (!empty($where)) {
            $query = $query->where('address', 'like', '%'.$where.'%');
        }
        if (!empty($category_id)) {
            $query = $query->where('listing_category_id', $category_id);
        }

        return $query->get();
    }
}
