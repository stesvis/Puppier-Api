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
        'address_id',
        'listing_category_id',
        'phone',
        'email',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function address()
    {
        return $this->belongsTo(Address::class);
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
        return $this->hasMany(ListingComment::class)->orderBy('created_at');
    }

    /**
     * @return string
     */
    public function getPriceAttribute($price)
    {
        return '$'.number_format($price, 2, '.', ',');
    }

    /**
     * @return BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
