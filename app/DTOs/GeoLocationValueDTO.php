<?php


namespace App\DTOs;


class GeoLocationValueDTO
{
    public $place_id;
    public $formatted_address;
    public $city;
    public $region;
    public $postal_code;
    public $country;

    public $latitude;
    public $longitude;
}
