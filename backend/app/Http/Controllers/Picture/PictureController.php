<?php

namespace App\Http\Controllers\Picture;

use OpenApi\Annotations as OA;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Picture;

/**
 * @OA\Tag(
 *   name="Picture",
 *   description="Operation for Picture",
 * )
 */
class PictureController extends BaseController
{
  /**
   * @OA\Get(
   *   tags={"Picture"},
   *   path="/api/picture/random",
   *   summary="Get pictures in random",
   *   description="Get pictures in random",
   *   operationId="getPictureRandom",
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
   *     description="List of picture",
   *     @OA\JsonContent(
   *       type="array",
   *       @OA\Items(ref="#/components/schemas/Picture")
   *     )
   *   ),
   *   deprecated=false
   * )
   */
  public function getPictureRandom(Request $request)
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

    $result = Picture::inRandomOrder()
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
   *   tags={"Picture"},
   *   path="/api/picture/list",
   *   summary="Get pictures",
   *   description="Get pictures",
   *   operationId="getPicture",
   *   @OA\RequestBody(
   *     description="Get picture",
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
   *     description="List of picture",
   *     @OA\JsonContent(
   *       type="array",
   *       @OA\Items(ref="#/components/schemas/Picture")
   *     )
   *   ),
   *   @OA\Response(response=404, description="Not Found"),
   *   deprecated=false
   * )
   */
  public function getPicture(Request $request)
  {
    // search
    $result = Picture::where([
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
