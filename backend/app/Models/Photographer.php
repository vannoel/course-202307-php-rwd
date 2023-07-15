<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photographer extends Model
{
    use SoftDeletes;

    protected $table = 'photographers';
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'integer',
        'uid' => 'string',
        'name' => 'string',
        'email' => 'string',
        'gender' => 'string',
        'age' => 'integer',
        'country' => 'string',
        
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'deleted_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function PhotoGrapherHasManyPictures()
    {
        return $this->hasMany(Picture::class);
    }
}
