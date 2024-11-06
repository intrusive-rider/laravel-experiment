<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class JobSeekerController extends Controller
{
   /**
    * Show the form for creating a new resource.
    */
   public function create(): View
   {
      return view('auth.register.job-seeker');
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request): RedirectResponse
   {
      $userAttr = $request->validate([
         'name' => ['required'],
         'email' => ['required', 'email', 'unique:users,email'],
         'password' => ['required', 'confirmed', Password::min(6)],
      ]);

      $user = User::create($userAttr);
      $user->assignRole('job-seeker');

      Auth::login($user);
      return redirect('/');
   }
}
