<div class="space-y-2">
    <div>
        <div id="toolbar"
            class="rounded-t-xl bg-base-200 border border-b-0 border-white/10 px-3 py-2 w-full font-sans flex-none">
            <button type="button"
                class="ql-bold px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 font-bold">B</button>
            <button type="button"
                class="ql-italic px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 italic">I</button>
            <button type="button"
                class="ql-underline px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 underline">U</button>
            <button type="button"
                class="ql-strike px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 line-through">S</button>
            <button class="ql-list px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300"
                value="ordered" type="button">Num. list</button>
            <button class="ql-list px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300"
                value="bullet" type="button">Bullet list</button>
        </div>
        <div id="editor"
            class="rounded-b-xl bg-base-100 border border-white/10 px-3 py-2 w-full font-sans text-base h-48">
            {!! old('desc') ?? $slot !!}</div>
    </div>

    <x-forms.error error="{{ $errors->first('desc') }}" />

    <input type="hidden" name="desc" id="desc" value="{!! old('desc') ?? $slot !!}" />
</div>