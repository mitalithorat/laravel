<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class IndexController extends Controller
{
    //
   public function index()
    {
// return "one to one";
return Student::all();
    }
}
