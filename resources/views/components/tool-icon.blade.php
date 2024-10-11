@props(['icon', 'color' => 'white', 'tooltip'])


@php
    switch ($color) {
        case 'red':
            $colorClass = 'text-red-300 bg-red-50 hover:text-red-400 hover:bg-red-100';
            break;
        default:
            $colorClass = 'text-gray-700 bg-while hover:bg-gray-200';
            break;
    }
@endphp

<a href="#"
    class=" {{ $colorClass }} w-9 h-9 rounded-full flex items-center font-bold justify-center shadow-[0_0_64px_0_rgba(0,0,0,0.18)] group"
    title="{{ $tooltip }}">
    <i class="{{ $icon }}"></i>

</a>
