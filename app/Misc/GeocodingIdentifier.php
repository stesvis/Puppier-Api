<?php


namespace App\Misc;


use App\DTOs\GeoLocationValueDTO;
use App\DTOs\LocationComponentDTO;

class GeocodingIdentifier
{
    /**
     * @param $fullAddress
     * @return array [lat: "x.xxxxxx", lon: "x.xxxxxx"]
     * @throws \Exception
     */
    public static function getCoordinates($fullAddress)
    {
        $response = \GoogleMaps::load('geocoding')
            ->setParam(['address' => $fullAddress])
            ->get();
        $response = json_decode($response);

        if (isset($response->results[0])) {
            $coordinates = [
                'lat' => $response->results[0]->geometry->location->lat,
                'lon' => $response->results[0]->geometry->location->lng,
            ];

            return $coordinates;
        } else {
            throw new \Exception("It was not possible to locate the address '".$fullAddress."' on GoogleMaps. The address must be fixed before try again.");
        }
    }

    /***
     * Converts an address to a GeoLocationValueDTO
     *
     * @param $address
     * @return GeoLocationValueDTO|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function getGeoLocationByAddress($fullAddress)
    {
        $response = \GoogleMaps::load('geocoding')
            ->setParam([
                'address' => $fullAddress,
            ])
            ->get();
        $response = json_decode($response);
        $geoLocationDTO = self::decodeResponseResult($response->results[0]);

        return $geoLocationDTO;
    }

    /***
     * @param $response
     * @return GeoLocationValueDTO|null
     */
    private static function decodeResponseResult($response): ?GeoLocationValueDTO
    {
        $geoLocationDTO = new GeoLocationValueDTO();
        $geoLocationDTO->formatted_address = $response->formatted_address;
        $geoLocationDTO->place_id = $response->place_id;
        $geoLocationDTO->latitude = $response->geometry->location->lat;
        $geoLocationDTO->longitude = $response->geometry->location->lng;

        $address_components = $response->address_components;
        foreach ($address_components as $component) {
            $types = $component->types;

            // Sometimes a location doesn't have a locality, so we need to fine the next location level for the city name
            if (in_array('locality', $types)) {
                $geoLocationDTO->city = new LocationComponentDTO();
                $geoLocationDTO->city->short_name = $component->short_name;
                $geoLocationDTO->city->long_name = $component->long_name;
            } elseif (in_array('postal_town', $types)) {
//                $geoLocationDTO->city = new LocationComponentDTO();
//                $geoLocationDTO->city->short_name = $component->short_name;
//                $geoLocationDTO->city->long_name = $component->long_name;
            } elseif (in_array('administrative_area_level_3', $types)) {
//                $geoLocationDTO->city = new LocationComponentDTO();
//                $geoLocationDTO->city->short_name = $component->short_name;
//                $geoLocationDTO->city->long_name = $component->long_name;
            } elseif (in_array('administrative_area_level_2', $types)) {
//                $geoLocationDTO->city = new LocationComponentDTO();
//                $geoLocationDTO->city->short_name = $component->short_name;
//                $geoLocationDTO->city->long_name = $component->long_name;
            }

            if (in_array('administrative_area_level_1', $types)) {
                $geoLocationDTO->region = new LocationComponentDTO();
                $geoLocationDTO->region->short_name = $component->short_name;
                $geoLocationDTO->region->long_name = $component->long_name;
            }

            if (in_array('postal_code', $types)) {
                $geoLocationDTO->postal_code = new LocationComponentDTO();
                $geoLocationDTO->postal_code->short_name = $component->short_name;
                $geoLocationDTO->postal_code->long_name = $component->long_name;
            }

            if (in_array('country', $types)) {
                $geoLocationDTO->country = new LocationComponentDTO();
                $geoLocationDTO->country->short_name = $component->short_name;
                $geoLocationDTO->country->long_name = $component->long_name;
            }

        }

        return $geoLocationDTO;
    }

    /***
     * Converts a pair of coordinates to a GeoLocationValueDTO
     *
     * @param $latitude
     * @param $longitude
     * @return GeoLocationValueDTO|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function getGeoLocationByCoordinates($latitude, $longitude): ?GeoLocationValueDTO
    {
        $response = \GoogleMaps::load('geocoding')
            ->setParamByKey('latlng', $latitude.','.$longitude)
            ->get();
        $response = json_decode($response);

        $geoLocationDTO = self::decodeResponseResult($response->results[0]);

        return $geoLocationDTO;
    }

    /***
     * Converts a place id to a GeoLocationValueDTO
     *
     * @param $place_id
     * @return GeoLocationValueDTO|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function getGeoLocationByPlaceId($place_id): ?\App\DTOs\GeoLocationValueDTO
    {
        $response = \GoogleMaps::load('geocoding')
            ->setParamByKey('place_id', $place_id)
            ->get();
        $response = json_decode($response);

        $geoLocationDTO = self::decodeResponseResult($response->results[0]);

        return $geoLocationDTO;
    }
}
