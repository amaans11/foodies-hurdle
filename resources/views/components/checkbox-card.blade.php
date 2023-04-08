<label class="{{ $attributes->get('label-class') }}">
    <input
        name="{{ $attributes->get('name') }}"
        type="{{ $attributes->get('type') }}"
        class="hidden btn-checkbox"
        wire:model.lazy="{{ $attributes->get('name') }}"
        value="{{ $attributes->get('value') }}"
        checked="{{ $attributes->get('checked') }}"
    >
    <div class="w-full bg-white rounded-lg text--secondary py-3 px-1 text-xl font-bold flex justify-center text-center items-center cursor-pointer {{ $attributes->get('class') }}" style="{{ $attributes->get('style') }}">
        {{ $slot }}
    </div>
</label>
