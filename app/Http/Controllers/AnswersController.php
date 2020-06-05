<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswersController extends Controller
{
    public function store()
    {
        return view('answers.store');
    }
}
