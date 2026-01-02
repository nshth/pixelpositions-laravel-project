<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        $jobs = Job::where('title', 'LIKE', '%'.request('q').'%')->get();
        return view('components.results', ['jobs' => $jobs]);
    }

}