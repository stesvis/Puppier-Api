<?php


namespace App\Services\Listings;


use App\Services\BaseServiceInterface;

interface ListingsServiceInterface extends BaseServiceInterface
{
    public function featured();

    public function search($keywords, $where, $category_id);
}
