<?php

namespace App\Http\Controllers\Swagger;

use Illuminate\Routing\Controller as BaseController;

class SwaggerController extends BaseController 
{
  public function getJSON()
  {
    $swagger = \OpenApi\Generator::scan([app_path('/')]);
    return response()->json($swagger, 200);
  }
}