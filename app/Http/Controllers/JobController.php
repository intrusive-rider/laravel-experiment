<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Region;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->with(['company', 'tags', 'region']);

        $featured_jobs = $jobs->get()->where('is_featured', '=', '1');
        $jobs = $jobs->simplePaginate(6);

        return view('jobs.index', [
            'jobs' => $jobs,
            'featured_jobs' => $featured_jobs,
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //: RedirectResponse
    {
        $formatted_desc = $request['desc'];
        $request['desc'] = strip_tags($request['desc']);

        $attr = $request->validate([
            'title' => ['required'],
            'desc' => ['required', 'max:255'],
            'salary' => ['required'],
            'region' => ['required'],
            'schedule' => ['required', Rule::in(['Part-time', 'Full-time'])],
            'expire' => ['required', 'date'],
            'tags' => ['nullable'],
        ]);

        $attr['desc'] = $formatted_desc;
        $attr['is_featured'] = $request->has('is_featured');

        $region = Region::where('name', $attr['region']);

        if (! $region->exists()) {
            Region::create(['name' => $attr['region']]);
        }

        $job = Auth::user()->company->jobs()->create(Arr::except($attr, ['tags', 'region']) + ['region_id' => $region->first()->id]);

        if ($attr['tags'] ?? false) {
            foreach (explode(',', $attr['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job): View
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job): View
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)//: RedirectResponse
    {   
        $formatted_desc = $request['desc'];
        $request['desc'] = strip_tags($request['desc']);
        
        $attr = $request->validate([
            'title' => ['required'],
            'desc' => ['required', 'max:255'],
            'salary' => ['required'],
            'region' => ['required'],
            'schedule' => ['required', Rule::in(['Part-time', 'Full-time'])],
            'expire' => ['required', 'date'],
            'tags' => ['nullable'],
        ]);
        
        $attr['desc'] = $formatted_desc;
        $attr['is_featured'] = $request->has('is_featured');
        
        $region = Region::where('name', $attr['region']);

        if (! $region->exists()) {
            $region = Region::create(['name' => $attr['region']]);
        }

        $job->update(Arr::except($attr, ['tags', 'region']) + ['region_id' => $region->first()->id]);

        if ($attr['tags'] ?? false) {
            $job->tags()->detach();
            foreach (explode(',', $attr['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/jobs/' . $job->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job): RedirectResponse
    {
        $job->delete();
        return redirect('/');
    }
}
