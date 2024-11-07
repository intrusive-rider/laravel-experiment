\@props(['label', 'name'])

<div>
    @if ($label)
        <x-forms.label :$name :$label />
    @endif

    <div class="mt-2">
        {{ $slot }}

        
    </div>
</div>