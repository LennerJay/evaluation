@if ($rating)
    <div class="data-rating">
        Rating: {{ number_format($rating,2) }}
    </div>
@else
    <div class="data-rating">
       No Rating Yet
    </div>
@endif