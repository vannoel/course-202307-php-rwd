<?php

namespace App\Http\Controllers\System;

use OpenApi\Annotations as OA;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *   name="System",
 *   description="Operation for System",
 * )
 */
class SystemController extends BaseController
{
  /**
   * @OA\Get(
   *   tags={"System"},
   *   path="/api/system/checkAlive",
   *   summary="Check server is alive.",
   *   description="Check server is alive.",
   *   operationId="checkAlive",
   *   @OA\Response(
   *     response=200,
   *     description="OK",
   *     @OA\MediaType(
   *       mediaType="text/html",
   *       @OA\Schema(
   *         type="string",
   *         example="Server is alive."
   *       )
   *     )
   *   ),
   *   deprecated=false
   * )
   */
  public function checkAlive(Request $request)
  {
    return response('Server is alive.');
  }
}
