<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class BaseModel extends Model
{
    public static function boot()
    {
        parent::boot();

        // create a event to happen on saving
        static::creating(function ($model) {
            $user = Auth::user();
            if ($user !== null) {
                $model->created_by = $user->id;
                $model->updated_by = $user->id;
            }
        });

        // create a event to happen on updating
        static::updating(function ($model) {
            $user = Auth::user();
            if ($user !== null) {
                $model->updated_by = $user->id;
            }
        });

        // create a event to happen on deleting
        static::deleting(function ($table) {
            $user = Auth::user();
            if ($user !== null) {
                $table->deleted_by = $user->username;
            }
        });
    }
}
