<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     description="Data table",
 *     title="Data table"
 * )
 */
class DataTable extends Model
{
    /**
     * @OA\Property(
     *     description="Page index",
     *     title="Index",
     *     format="number"
     * )
     * @var int
     */
    private $pageIndex;

    /**
     * @OA\Property(
     *    description="Paging in group size",
     *    title="Group size",
     *    format="number"
     * )
     * @var int
     */
    private $pageGroupSize;

    /**
     * @OA\Property(
     *     description="Sorting by key",
     *     title="Key",
     *     format="string"
     * )
     * @var string
     */
    private $sortKey;

    /**
     * @OA\Property(
     *    description="Sorting in order",
     *    title="Order",
     *    format="enum: asc, desc"
     * )
     * @var string
     */
    private $sortOrder;
}
