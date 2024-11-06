<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class EmployerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('auth.register.employer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request['url'] = 'https://' . $request['url'];

        $userAttr = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);

        $employerAttr = $request->validate([
            'company' => ['required'],
            'url' => ['required', 'url'],
            'logo' => ['required', File::types(['png', 'jpg', 'webp'])],
        ]);

        $logo_path = 'storage/' . $request->logo->store('logos');
        
        $user = User::create($userAttr);
        $user->assignRole('employer');

        $user->company()->create([
            'name' => $employerAttr['company'],
            'url' => $employerAttr['url'],
            'logo' => $logo_path,
        ]);
        
        Auth::login($user);
        return redirect('/');
    }
}
