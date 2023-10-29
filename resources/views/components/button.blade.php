<button {{ $attributes->merge(['class' => 'preline-button']) }} {{ $bgColor }}>
    {{ $slot }}
</button>