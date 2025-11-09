<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;
use App\Models\Article;

class WriterController extends Controller
{
    public function writers() {
        $writers = Writer::with(['articles'])->get();
        return view('writers.writers', compact('writers'));
    }

    public function profile($profile_id) {
        $writer = Writer::with(['articles'])->findOrFail($profile_id);
        return view('writers.profile', compact('writer'));
    }
}
