<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Contracts\View\View;

class TagController extends Controller
{
    public function __invoke(Tag $tag): View
    {
        return view('jobs.results', [
            'jobs' => $tag->jobs,
            'query' => 'tag "' . $tag->name . '"',
        ]);
    }
}
