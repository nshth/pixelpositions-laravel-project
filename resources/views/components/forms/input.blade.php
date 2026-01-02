@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'value' => old($name)
    ];

    $type = $attributes->get('type', $defaults['type']);

    if ($type === 'file') {
        // compact container + Tailwind file: utilities for the file button (works with modern Tailwind)
        $defaults['class'] = 'bg-white/5 border border-white/10 px-5 py-4 rounded-xl w-full max-w-2xl text-white placeholder-white/25 outline-none focus:ring-1 focus:ring-white/20 text-sm file:bg-white file:text-black file:px-3 file:py-1 file:rounded-md file:border-none';
    } else {
        $defaults['class'] = 'bg-white/5 border border-white/10 px-5 py-4 rounded-xl w-full max-w-2xl text-white placeholder-white/25 outline-none focus:ring-1 focus:ring-white/20';
    }
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>