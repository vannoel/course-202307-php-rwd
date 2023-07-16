<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     description="Api response",
 *     title="Api response"
 * )
 */
class ApiResponse extends Model
{
    /**
     * @OA\Property(
     *     description="Status",
     *     title="Status",
     *     format="boolean"
     * )
     * @var boolean
     */
    private $status;

    /**
     * @OA\Property(
     *    description="Message",
     *    title="Message",
     *    format="string"
     * )
     * @var string
     */
    private $message;

    /**
     * @OA\Property(
     *     description="Result in Object or Array",
     *     title="Result",
     *     format="array | object"
     * )
     * @var string
     */
    private $result;
}
