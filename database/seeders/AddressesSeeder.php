<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = [
            [
                'id' => '1',
                'address' => 'Airdrie, AB, Canada',
                'coordinates' => '51.2926993,-114.0134073',
                'place_id' => 'ChIJAx6evGhfcVMR9WIuaZPhHwk',
                'geolocation' => '{"place_id":"ChIJAx6evGhfcVMR9WIuaZPhHwk","formatted_address":"Airdrie, AB, Canada","city":{"short_name":"Airdrie","long_name":"Airdrie"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":51.2926993,"longitude":-114.0134073}',
                'created_at' => '2020-11-11 04:45:13',
                'updated_at' => '2020-11-11 04:45:13',
                'deleted_at' => null,
            ],
            [
                'id' => '2',
                'address' => 'Beaumont, AB, Canada',
                'coordinates' => '53.3524621,-113.4154678',
                'place_id' => 'ChIJ4ZDtzcEcoFMRxR1RnHLAxXM',
                'geolocation' => '{"place_id":"ChIJ4ZDtzcEcoFMRxR1RnHLAxXM","formatted_address":"Beaumont, AB, Canada","city":{"short_name":"Beaumont","long_name":"Beaumont"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":53.3524621,"longitude":-113.4154678}',
                'created_at' => '2020-11-11 04:45:13',
                'updated_at' => '2020-11-11 04:45:13',
                'deleted_at' => null,
            ],
            [
                'id' => '3',
                'address' => 'Brooks, AB, Canada',
                'coordinates' => '50.5657456,-111.8978329',
                'place_id' => 'ChIJwYDg06ljbVMRUZrun77MON8',
                'geolocation' => '{"place_id":"ChIJwYDg06ljbVMRUZrun77MON8","formatted_address":"Brooks, AB, Canada","city":{"short_name":"Brooks","long_name":"Brooks"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":50.5657456,"longitude":-111.8978329}',
                'created_at' => '2020-11-11 04:45:14',
                'updated_at' => '2020-11-11 04:45:14',
                'deleted_at' => null,
            ],
            [
                'id' => '4',
                'address' => 'Calgary, AB, Canada',
                'coordinates' => '51.0447331,-114.0718831',
                'place_id' => 'ChIJ1T-EnwNwcVMROrZStrE7bSY',
                'geolocation' => '{"place_id":"ChIJ1T-EnwNwcVMROrZStrE7bSY","formatted_address":"Calgary, AB, Canada","city":{"short_name":"Calgary","long_name":"Calgary"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":51.04473309999999,"longitude":-114.0718831}',
                'created_at' => '2020-11-11 04:45:14',
                'updated_at' => '2020-11-11 04:45:14',
                'deleted_at' => null,
            ],
            [
                'id' => '5',
                'address' => 'Camrose, AB, Canada',
                'coordinates' => '53.0179364,-112.8259861',
                'place_id' => 'ChIJWzsbOMS7ClMRSDp_bUV84hU',
                'geolocation' => '{"place_id":"ChIJWzsbOMS7ClMRSDp_bUV84hU","formatted_address":"Camrose, AB, Canada","city":{"short_name":"Camrose","long_name":"Camrose"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":53.0179364,"longitude":-112.8259861}',
                'created_at' => '2020-11-11 04:45:14',
                'updated_at' => '2020-11-11 04:45:14',
                'deleted_at' => null,
            ],
            [
                'id' => '6',
                'address' => 'Chestermere, AB, Canada',
                'coordinates' => '51.0381612,-113.8425008',
                'place_id' => 'ChIJJXq0jbF9cVMRAW_ECJSxHFY',
                'geolocation' => '{"place_id":"ChIJJXq0jbF9cVMRAW_ECJSxHFY","formatted_address":"Chestermere, AB, Canada","city":{"short_name":"Chestermere","long_name":"Chestermere"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":51.0381612,"longitude":-113.8425008}',
                'created_at' => '2020-11-11 04:45:14',
                'updated_at' => '2020-11-11 04:45:14',
                'deleted_at' => null,
            ],
            [
                'id' => '7',
                'address' => 'Cold Lake, AB, Canada',
                'coordinates' => '54.4642591,-110.1732522',
                'place_id' => 'ChIJF_1QZSfKp1MRKPcnm0K34nI',
                'geolocation' => '{"place_id":"ChIJF_1QZSfKp1MRKPcnm0K34nI","formatted_address":"Cold Lake, AB, Canada","city":{"short_name":"Cold Lake","long_name":"Cold Lake"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":54.4642591,"longitude":-110.1732522}',
                'created_at' => '2020-11-11 04:45:14',
                'updated_at' => '2020-11-11 04:45:14',
                'deleted_at' => null,
            ],
            [
                'id' => '8',
                'address' => 'Edmonton, AB, Canada',
                'coordinates' => '53.5461245,-113.4938229',
                'place_id' => 'ChIJI__egEUioFMRXRX2SgygH0E',
                'geolocation' => '{"place_id":"ChIJI__egEUioFMRXRX2SgygH0E","formatted_address":"Edmonton, AB, Canada","city":{"short_name":"Edmonton","long_name":"Edmonton"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":53.5461245,"longitude":-113.4938229}',
                'created_at' => '2020-11-11 04:45:15',
                'updated_at' => '2020-11-11 04:45:15',
                'deleted_at' => null,
            ],
            [
                'id' => '9',
                'address' => 'Fort Saskatchewan, AB, Canada',
                'coordinates' => '53.6963182,-113.2163764',
                'place_id' => 'ChIJ-XAs1glFoFMRmld5a40CP1U',
                'geolocation' => '{"place_id":"ChIJ-XAs1glFoFMRmld5a40CP1U","formatted_address":"Fort Saskatchewan, AB, Canada","city":{"short_name":"Fort Saskatchewan","long_name":"Fort Saskatchewan"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":53.6963182,"longitude":-113.2163764}',
                'created_at' => '2020-11-11 04:45:15',
                'updated_at' => '2020-11-11 04:45:15',
                'deleted_at' => null,
            ],
            [
                'id' => '10',
                'address' => 'Grande Prairie, AB, Canada',
                'coordinates' => '55.1707126,-118.7884464',
                'place_id' => 'ChIJl5v7ZUmRkFMRCWSeDMZrcmA',
                'geolocation' => '{"place_id":"ChIJl5v7ZUmRkFMRCWSeDMZrcmA","formatted_address":"Grande Prairie, AB, Canada","city":{"short_name":"Grande Prairie","long_name":"Grande Prairie"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":55.17071259999999,"longitude":-118.7884464}',
                'created_at' => '2020-11-11 04:45:15',
                'updated_at' => '2020-11-11 04:45:15',
                'deleted_at' => null,
            ],
            [
                'id' => '11',
                'address' => 'Lacombe, AB, Canada',
                'coordinates' => '52.4684651,-113.7306644',
                'place_id' => 'ChIJs9VI_Q8EdVMRqeU9VJDetNY',
                'geolocation' => '{"place_id":"ChIJs9VI_Q8EdVMRqeU9VJDetNY","formatted_address":"Lacombe, AB, Canada","city":{"short_name":"Lacombe","long_name":"Lacombe"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":52.4684651,"longitude":-113.7306644}',
                'created_at' => '2020-11-11 04:45:15',
                'updated_at' => '2020-11-11 04:45:15',
                'deleted_at' => null,
            ],
            [
                'id' => '12',
                'address' => 'Leduc, AB, Canada',
                'coordinates' => '53.2646889,-113.5527442',
                'place_id' => 'ChIJh66-6XP5n1MRYGoBxYtf16w',
                'geolocation' => '{"place_id":"ChIJh66-6XP5n1MRYGoBxYtf16w","formatted_address":"Leduc, AB, Canada","city":{"short_name":"Leduc","long_name":"Leduc"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":53.2646889,"longitude":-113.5527442}',
                'created_at' => '2020-11-11 04:45:15',
                'updated_at' => '2020-11-11 04:45:15',
                'deleted_at' => null,
            ],
            [
                'id' => '13',
                'address' => 'Lethbridge, AB, Canada',
                'coordinates' => '49.6955856,-112.8451364',
                'place_id' => 'ChIJI81a8UqGblMRrr6VYuN4XBw',
                'geolocation' => '{"place_id":"ChIJI81a8UqGblMRrr6VYuN4XBw","formatted_address":"Lethbridge, AB, Canada","city":{"short_name":"Lethbridge","long_name":"Lethbridge"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":49.6955856,"longitude":-112.8451364}',
                'created_at' => '2020-11-11 04:45:15',
                'updated_at' => '2020-11-11 04:45:15',
                'deleted_at' => null,
            ],
            [
                'id' => '14',
                'address' => 'Lloydminster, AB, Canada',
                'coordinates' => '53.2779625,-110.0061451',
                'place_id' => 'ChIJw-2qDm6uCVMRNMbtbNqtKAY',
                'geolocation' => '{"place_id":"ChIJw-2qDm6uCVMRNMbtbNqtKAY","formatted_address":"Lloydminster, AB, Canada","city":{"short_name":"Lloydminster","long_name":"Lloydminster"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":53.2779625,"longitude":-110.0061451}',
                'created_at' => '2020-11-11 04:45:16',
                'updated_at' => '2020-11-11 04:45:16',
                'deleted_at' => null,
            ],
            [
                'id' => '15',
                'address' => 'Medicine Hat, AB, Canada',
                'coordinates' => '50.0291676,-110.7034049',
                'place_id' => 'ChIJF9T5PVYsE1MRP0eAMoxeZhM',
                'geolocation' => '{"place_id":"ChIJF9T5PVYsE1MRP0eAMoxeZhM","formatted_address":"Medicine Hat, AB, Canada","city":{"short_name":"Medicine Hat","long_name":"Medicine Hat"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":50.0291676,"longitude":-110.7034049}',
                'created_at' => '2020-11-11 04:45:16',
                'updated_at' => '2020-11-11 04:45:16',
                'deleted_at' => null,
            ],
            [
                'id' => '16',
                'address' => 'Red Deer, AB, Canada',
                'coordinates' => '52.268975,-113.8115599',
                'place_id' => 'ChIJmZIRRylUdFMRsEQWRJCjAAU',
                'geolocation' => '{"place_id":"ChIJmZIRRylUdFMRsEQWRJCjAAU","formatted_address":"Red Deer, AB, Canada","city":{"short_name":"Red Deer","long_name":"Red Deer"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":52.268975,"longitude":-113.8115599}',
                'created_at' => '2020-11-11 04:45:16',
                'updated_at' => '2020-11-11 04:45:16',
                'deleted_at' => null,
            ],
            [
                'id' => '17',
                'address' => 'Spruce Grove, AB, Canada',
                'coordinates' => '53.5411191,-113.9101291',
                'place_id' => 'ChIJ7QZh_PeOn1MRbFaUAXXZ6x4',
                'geolocation' => '{"place_id":"ChIJ7QZh_PeOn1MRbFaUAXXZ6x4","formatted_address":"Spruce Grove, AB T7X, Canada","city":{"short_name":"Spruce Grove","long_name":"Spruce Grove"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":{"short_name":"T7X","long_name":"T7X"},"country":{"short_name":"CA","long_name":"Canada"},"latitude":53.5411191,"longitude":-113.9101291}',
                'created_at' => '2020-11-11 04:45:16',
                'updated_at' => '2020-11-11 04:45:16',
                'deleted_at' => null,
            ],
            [
                'id' => '18',
                'address' => 'St. Albert, AB, Canada',
                'coordinates' => '53.653938,-113.6293586',
                'place_id' => 'ChIJtchh8XgmoFMRoiX1A8UyzUM',
                'geolocation' => '{"place_id":"ChIJtchh8XgmoFMRoiX1A8UyzUM","formatted_address":"St. Albert, AB, Canada","city":{"short_name":"St. Albert","long_name":"St. Albert"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":53.653938,"longitude":-113.6293586}',
                'created_at' => '2020-11-11 04:45:16',
                'updated_at' => '2020-11-11 04:45:16',
                'deleted_at' => null,
            ],
            [
                'id' => '19',
                'address' => 'Wetaskiwin, AB, Canada',
                'coordinates' => '52.9688194,-113.3660794',
                'place_id' => 'ChIJmSUYDjpOdVMRQHrTf9lAeBE',
                'geolocation' => '{"place_id":"ChIJmSUYDjpOdVMRQHrTf9lAeBE","formatted_address":"Wetaskiwin, AB, Canada","city":{"short_name":"Wetaskiwin","long_name":"Wetaskiwin"},"region":{"short_name":"AB","long_name":"Alberta"},"postal_code":null,"country":{"short_name":"CA","long_name":"Canada"},"latitude":52.9688194,"longitude":-113.3660794}',
                'created_at' => '2020-11-11 04:45:17',
                'updated_at' => '2020-11-11 04:45:17',
                'deleted_at' => null,
            ],
        ];

        foreach ($addresses as $address) {
            Address::create($address);
        }

//        $faker = Factory::create();
//
//        $cities = [
//            'Airdrie, AB',
//            'Beaumont, AB',
//            'Brooks, AB',
//            'Calgary, AB',
//            'Camrose, AB',
//            'Chestermere, AB',
//            'Cold Lake, AB',
//            'Edmonton, AB',
//            'Fort Saskatchewan, AB',
//            'Grande Prairie, AB',
//            'Lacombe, AB',
//            'Leduc, AB',
//            'Lethbridge, AB',
//            'Lloydminster, AB',
//            'Medicine Hat, AB',
//            'Red Deer, AB',
//            'Spruce Grove, AB',
//            'St. Albert, AB',
//            'Wetaskiwin, AB',
//        ];
//
//        foreach ($cities as $city) {
//            $geolocation = GeocodingIdentifier::getGeoLocationByAddress($city);
//
//            Address::create([
//                'address' => $geolocation->formatted_address,
//                'place_id' => $geolocation->place_id,
//                'coordinates' => $geolocation->latitude.','.$geolocation->longitude,
//                'geolocation' => json_encode($geolocation],
//            ]);
//        }
    }
}
