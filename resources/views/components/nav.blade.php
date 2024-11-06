{{-- <nav
    class="navbar flex items-center justify-between bg-base-100 shadow-lg top-0 sticky z-10">
    <div class="space-x-6 font-bold">
        <a href="/">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" class="inline-block">
        </a>
        <a href="/">Jobs</a>
        <a href="/">Careers</a>
        <a href="/">Salaries</a>
        <a href="/">Companies</a>
    </div>
    @auth
        <div class="flex space-x-6 font-bold">
            @can('create')
                <a href="/jobs/create">Post a Job</a>
            @endcan
            <button type="submit" form="logout">Log out</button>
        </div>
    @endauth
    @guest
        <a href="/login" class="font-bold">Sign in</a>
    @endguest
</nav>

<x-forms.form action="/logout" :method="'DELETE'" class="hidden" id="logout"></x-forms.form> --}}

<div class="navbar bg-base-100">
    <a href="/" class="navbar-start">
        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
    </a>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="/">Jobs</a></li>
            <li><a href="/">Careers</a></li>
            <li><a href="/">Diversity</a></li>
            <li><a href="/">CSRs</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        <a href="/login" class="btn">Log in</a>
    </div>
</div>
