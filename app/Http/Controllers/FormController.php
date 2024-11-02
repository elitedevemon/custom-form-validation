<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
  // form validation check
  public function index()
  {
    return view('welcome');
  }

  public function submit(FormRequest $request)
  {
    return $request->all();
  }
}