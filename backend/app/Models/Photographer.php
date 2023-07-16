<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @OA\Schema(
 *     description="Photographer",
 *     title="Photographer"
 * )
 */
class Photographer extends Model
{
    use SoftDeletes;

    /**
     * @OA\Property(
     *     description="Id",
     *     title="Id",
     *     format="int"
     * )
     * @var int
     */
    private $id;

    /**
     * @OA\Property(
     *    description="Uuid",
     *    title="Uuid",
     *    format="string"
     * )
     * @var string
     */
    private $uid;

    /**
     * @OA\Property(
     *     description="Name",
     *     title="Name",
     *     format="string"
     * )
     * @var string
     */
    private $name;
    
    /**
     * @OA\Property(
     *     description="Email",
     *     title="Email",
     *     format="string"
     * )
     * @var string
     */
    private $email;

    /**
     * @OA\Property(
     *     description="Gender",
     *     title="Gender",
     *     format="enum: male, female"
     * )
     * @var string
     */
    private $gender;

    /**
     * @OA\Property(
     *     description="Age",
     *     title="Age",
     *     format="int"
     * )
     * @var int
     */
    private $age;

    /**
     * @OA\Property(
     *     description="ountry Code",
     *     title="Country",
     *     format="string"
     * )
     * @var string
     */
    private $country;

    /**
     * @OA\Property(
     *     description="Created at",
     *     title="Created At",
     *     format="datetime:Y-m-d H:i:s"
     * )
     * @var string
     */
    private $created_at;

    /**
     * @OA\Property(
     *     description="Updated at",
     *     title="Updated At",
     *     format="datetime:Y-m-d H:i:s"
     * )
     * @var string
     */
    private $updated_at;

    /**
     * @OA\Property(
     *     description="Deteled at",
     *     title="Deteled At",
     *     format="datetime:Y-m-d H:i:s"
     * )
     * 
     * @var string
     */
    private $deleted_at;

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
