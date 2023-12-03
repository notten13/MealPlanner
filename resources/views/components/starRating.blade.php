@for ($i = 0; $i < 5; $i++)
    @if ($i < $rating)
        &#9733; <!-- Unicode for filled star -->
    @else
        &#9734; <!-- Unicode for empty star -->
    @endif
@endfor
