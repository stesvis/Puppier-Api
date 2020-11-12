<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends BaseModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address',
        'coordinates',
        'place_id',
    ];

    protected $casts = [
//        'geolocation' => Json::class,
        'geolocation' => 'array', // same as the above
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function listing()
    {
        return $this->hasOne(Listing::class);
    }
}
