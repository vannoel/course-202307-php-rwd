<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\OpenApi(
 *   @OA\Info(
 *     title="API Document",
 *     version="1.0.0",
 *     description="List APIs in swagger API Document"
 *     
 *   ),
 * 
 *   @OA\PathItem(
 *      path="/"
 *   )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
