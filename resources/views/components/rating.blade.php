@props(['rating'])

{{-- <i class="fa-solid fa-star-half-stroke"></i>
<i class="fa-regular fa-star"></i> --}}
<p class="[&_i]:text-yellow-500">
    <span>Rating: </span>
    @for ($i = 1; $i <= 10; $i++)
        @if ($rating > $i)
            <i class="fa-solid fa-star"></i>
        @else
            @if ($rating >= $i - 1 + 0.5 && $rating < $i)
                <i class="fa-solid fa-star-half-stroke"></i>
            @else
                <i class="fa-regular fa-star"></i>
            @endif
        @endif
    @endfor
</p>
