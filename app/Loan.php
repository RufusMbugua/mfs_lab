<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
class Loan extends Model
{
    use SoftDeletes;

    protected $fillable = ['customer_id','amount'];

      /**
     * Boot the Model.
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($instance) {
            $instance->id = (string)Str::uuid();
        });
    }

    function customer(){
        return $this->belongsTo('App\Customer');
    }
}
