<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\View\View;

class SearchController extends Controller
{
    public function __invoke(): View
    {
        $query = request('q');
        $jobs = Job::query()
            ->with(['company', 'tags', 'region'])
            ->where('title', 'LIKE', '%' . $query . '%')
            ->orWhereHas('region', function ($q) use ($query) {
                $q->where('name', 'LIKE', '%' . $query . '%');
            })
            ->orWhereHas('company', function ($q) use ($query) {
                $q->where('name', 'LIKE', '%' . $query . '%');
            })
            ->get();

        return view('jobs.results', [
            'jobs' => $jobs,
            'query' => '"' . $query . '"',
        ]);
    }
}
