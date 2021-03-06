<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Module;
class BaseController extends Controller
{
  public function index($id)
  {
      $bid = (int)($id);
      $courses = Course::all();
      $modules = Module::all();

      return view('user.base')->with([
        'courses' => $courses,
        'modules' => $modules,
        'bid' => $bid
      ]);
  }
}
