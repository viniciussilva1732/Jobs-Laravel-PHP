@props(['active' => false])


<a aria-current="{{ $active ? 'page': 'false'}}" class="{{ $active ? 'bg-gray-950/50 text-white': 'text-gray-300 hover:bg-white/5 hover:text-white'}} px-3 py-2 text-sm font-medium" {{ $attributes }}> 
{{ $slot }} 
</a>
