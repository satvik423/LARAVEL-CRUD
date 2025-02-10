@props(['highlightRed' => false])
@props(['highlightGold' => false])
@props(['highlightGreen' => false])
@props(['highlightBlue' => false])

<div @class(['highlight-red' => $highlightRed, "card", "highlight-gold" => $highlightGold, "highlight-green" => $highlightGreen, "highlight-blue" => $highlightBlue])>
    {{ $slot }}
    <a {{ $attributes }} class="btn"> View Details </a>
</div>