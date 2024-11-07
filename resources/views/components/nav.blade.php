<nav class="navbar border-b border-white/10 py-3 px-12 mb-12">
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
        @auth
            @role('employer|maintainer')
                <a href="/jobs/create" class="btn btn-ghost">Post a Job</a>
            @endrole
            <button type="submit" form="logout" class="btn btn-ghost">Log out</button>
        @endauth
        @guest
            <a href="/login" class="btn btn-primary">Log in</a>
        @endguest
    </div>
</nav>

<x-forms.form action="/logout" :method="'DELETE'" class="hidden" id="logout"></x-forms.form>