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
        @auth
            <div class="flex space-x-6 font-bold">
                @role('employer')
                    <a href="/jobs/create" class="btn btn-ghost">Post a Job</a>
                @endrole
                <button type="submit" form="logout" class="btn btn-ghost">Log out</button>
            </div>
        @endauth
        @guest
            <a href="/login" class="btn btn-primary">Log in</a>
        @endguest
    </div>
</div>

<x-forms.form action="/logout" :method="'DELETE'" class="hidden" id="logout"></x-forms.form>