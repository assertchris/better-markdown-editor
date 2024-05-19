@props([
    'slot',
    'property',
    'label',
])
<span x-show="{{ $property }} > 0" class="flex flex-row items-center justify-center gap-2">
    <span
        {{ $attributes->merge([
            'class' => 'inline-flex rounded-full overflow-hidden shadow-inner',
            'style' => 'width: 14px; height: 14px',
        ]) }}
    >&nbsp;</span>
    <span x-text="{{ $property }}"></span>
    <span>{{ __($label) }}</span>
</span>
