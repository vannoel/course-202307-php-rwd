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
}
