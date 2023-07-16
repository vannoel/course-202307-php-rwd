<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @OA\Schema(
 *     description="Picture",
 *     title="Picture"
 * )
 */
class Picture extends Model
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
     *     description="Color",
     *     title="Color",
     *     format="string"
     * )
     * @var string
     */
    private $color;
    
    /**
     * @OA\Property(
     *     description="Pattern",
     *     title="Pattern",
     *     format="string"
     * )
     * @var string
     */
    private $pattern;

    /**
     * @OA\Property(
     *     description="Hair",
     *     title="Hair",
     *     format="enum: none, short, middle, long"
     * )
     * @var string
     */
    private $hair;

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
    
    protected $table = 'pictures';
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'integer',
        'uid' => 'string',
        'color' => 'string',
        'pattern' => 'string',
        'hair' => 'string',

        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'deleted_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function PicturesBelongsToPhotographer()
    {
        return $this->belongsTo(Photographer::class);
    }
}
