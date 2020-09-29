<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Listing extends BaseModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'price',
        'location',
        'address',
        'listing_category_id',
    ];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(ListingCategory::class, 'listing_category_id');
    }

    /**
     * @return HasMany
     */
    public function photos()
    {
        return $this->hasMany(ListingPhoto::class);
    }

    /**
     * @return HasMany
     */
    public function comments()
    {
        return $this->hasMany(ListingComment::class);
    }

    /**
     * @return string
     */
    public function getPriceAttribute($price)
    {
        return '$'.number_format($price, 2, '.', ',');
    }
}
