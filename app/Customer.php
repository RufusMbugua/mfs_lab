<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Str;

class Customer extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['first_name', 'last_name', 'id', 'user_id'];

    protected $appends = ['name'];
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

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

    function getNameAttribute(){
        return $this->first_name . ' '. $this->last_name;
    }

}
