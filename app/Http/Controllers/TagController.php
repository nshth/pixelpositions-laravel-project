<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(Tag $tag)
    {
        return view('components.results', ['jobs' => $tag->jobs]);
    }

}