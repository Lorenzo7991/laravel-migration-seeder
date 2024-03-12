<?php

namespace App\Http\Controllers;

use App\Models\Train;

use Illuminate\Http\Request;

class TrainDetail extends Controller
{
    public function __invoke($id)
    {
        $train = Train::findOrFail($id);
        return view('train.show', ['train' => $train]);
    }
}
