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
   *   path="/system/checkAlive",
   *   summary="Check server is alive.",
   *   tags={"System"},
   *   description="Check server is alive.",
   *   operationId="1",
   *   @OA\Response(
   *     response=200,
   *     description="Server is alive.",
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
