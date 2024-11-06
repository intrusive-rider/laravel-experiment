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

<nav class="navbar border-b border-white/10 py-3">
    <div class="navbar-start">
        <a href="/" class="btn btn-ghost">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" class="inline-block scale-110">
        </a>
    </div>
    <div class="navbar-center">
        <a href="/" class="btn btn-ghost">Surveys</a>
        <a href="/" class="btn btn-ghost">Inclusivity</a>
        <a href="/" class="btn btn-ghost">Partners</a>
    </div>
    <div class="navbar-end">
        <a href="/login" class="btn btn-primary">Log in</a>
    </div>
</nav>
