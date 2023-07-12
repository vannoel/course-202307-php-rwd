<?php

namespace App\Http\Controllers\System;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class SystemController extends BaseController
{
  /**
   * Check serve is alive.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function checkAlive(Request $request)
  {
    return response('Server is alive.');
  }
}
