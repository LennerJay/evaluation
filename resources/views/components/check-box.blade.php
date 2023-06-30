<div>
    @for ($i = 0; $i <5; $i++)
    <input class="radio" type="radio" name="radio{{ $i }}" id="radio{{ $i }}" value="{{ $i }}">
    <label clas="label" for="radio{{ $i }}"></label>
    @endfor
</div>