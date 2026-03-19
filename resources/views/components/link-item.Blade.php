@props(['active' => false])

<li><a {{ $attributes->class(['hover:text-gray-600','font-bold text-blue-600'=> $active,]) }}>{{ $slot }}</a>
</li>
