<?php

namespace App\Http\Controllers\Photographer;

use OpenApi\Annotations as OA;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Photographer;

/**
 * @OA\Tag(
 *   name="Photographer",
 *   description="Operation for Photographer",
 * )
 */
class PhotographerController extends BaseController
{
  /**
   * @OA\Get(
   *   tags={"Photographer"},
   *   path="/api/photographer/random",
   *   summary="Get photographers in random",
   *   description="Get photographers in random",
   *   operationId="getPhotographerRandom",
   *   @OA\Parameter(
   *     name="count",
   *     in="query",
   *     description="Count of random",
   *     required=true,
   *     @OA\Schema(
   *       type="number"
   *     )
   *   ),
   *   @OA\Response(
   *     response="200",
   *     description="List of photographer",
   *     @OA\JsonContent(
   *       type="array",
   *       @OA\Items(ref="#/components/schemas/Photographer")
   *     )
   *   ),
   *   deprecated=false
   * )
   */
  public function getPhotographerRandom(Request $request)
  {
    $validator = Validator::make($request->all(), [
      "count" => "required|integer",
    ]);

    if ($validator->fails()) {
      return response(
        $validator->errors(),
        400
      );
    }

    $result = Photographer::inRandomOrder()
    ->limit($request->count)
    ->get();

    return response()->json([
      'status' => true,
      'message' => 'success',
      'result' => $result,
    ]);
  }

  /**
   * @OA\Post(
   *   tags={"Photographer"},
   *   path="/api/photographer/list",
   *   summary="Get photographers",
   *   description="Get photographers",
   *   operationId="getPhotographer",
   *   @OA\RequestBody(
   *     description="Get photographer",
   *     required=true,
   *     @OA\MediaType(
   *       mediaType="multipart/form-data",
   *       @OA\Schema(
   *         @OA\Property(
   *           property="pageIndex",
   *           type="number"
   *         ),
   *         @OA\Property(
   *           property="pageSize",
   *           type="number"
   *         ),
   *         @OA\Property(
   *           property="sortBy",
   *           type="string"
   *         ),
   *         @OA\Property(
   *           property="sortOrder",
   *           type="string"
   *         ),
   *       )
   *     )
   *   ),
   *   @OA\Response(
   *     response="200",
   *     description="List of photographer",
   *     @OA\JsonContent(
   *       type="array",
   *       @OA\Items(ref="#/components/schemas/Photographer")
   *     )
   *   ),
   *   @OA\Response(response=404, description="Not Found"),
   *   deprecated=false
   * )
   */
  public function getPhotographer(Request $request)
  {
    // search
    $result = Photographer::where([
    ])->get();

    $total = $result->count();

    // sort
    $sortBy = empty($request->sortBy) ? 'created_at' : $request->sortBy;
    $sortOrder = empty($request->sortOrder) ? 'desc' : $request->sortOrder;

    $sortedResult = $result->sortBy([
      [$sortBy, $sortOrder]
    ]);

    // paginate
    $pageIndex = empty($request->pageIndex) ? 1 : $request->pageIndex;
    $pageSize = empty($request->pageSize) ? 10 : $request->pageSize;

    $paginatedResult = $sortedResult->forPage($pageIndex, $pageSize)->values()->all();

    return response()->json([
      'status' => true,
      'message' => 'success',
      'result' => [
        'total' => $total,
        'data' => $paginatedResult
      ]
    ]);
  }
}
