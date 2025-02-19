@props(['highlightRed' => false])
@props(['highlightGold' => false])
@props(['highlightGreen' => false])
@props(['highlightBlue' => false])
@props(['isInactive' => false])

<div @class(['text-red-500' => $isInactive, 'highlight-red' => $highlightRed, "card", "highlight-gold" => $highlightGold, "highlight-green" => $highlightGreen, "highlight-blue" => $highlightBlue])>
    {{ $slot }}
    <a {{ $attributes }} class="btn"> View Details </a>
</div>