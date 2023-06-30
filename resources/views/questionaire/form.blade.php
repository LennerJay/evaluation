@extends('layout.app')

@section('content')

<form action="{{isset($questionaire) ? route('questionaire.update',['questionaire'=>$questionaire->id]) :route('questionaire.store') }}" method="POST">
    @csrf 
    @isset($questionaire)
        @method('PUT')
    @endisset
    <div class="mb-4">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" 
            @class(['border-red-500'=>$errors->has('title')])
            value="{{ $questionaire->title ?? old('title') }}">
        @error('title')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5"
            @class(['border-red-500'=>$errors->has('title')])>{{ $questionaire->description ?? old('description') }}
        </textarea>
        @error('description')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4 flex gap-2 items-center">
        <button class="btn" type="submit"> {{ isset($questionaire) ? 'Update Task': 'Add Task' }}</button>
        <a class="btn" href="{{ route('questionaire.index') }}"> Cancel</a>
    </div>
</form>
@endsection