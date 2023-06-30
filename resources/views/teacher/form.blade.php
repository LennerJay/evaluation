@extends('layout.app')

@section('content')

<form action="{{ route('teachers.store') }}" method="POST">
    @csrf 
    @isset($teacher)
        @method('PUT')
    @endisset
    <div class="mb-4">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" 
            @class(['border-red-500'=>$errors->has('name')])
            value="{{ $teacher->name ?? old('name') }}">
        @error('name')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="department">Department: </label>
        <input type="text" name="department" id="department" rows="5" value="{{ $teacher->department ?? old('department') }}"
            @class(['border-red-500'=>$errors->has('department')])>
        @error('department')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4 flex gap-2 items-center">
        <button class="btn" type="submit"> {{ isset($teacher) ? 'Update Task': 'Add Task' }}</button>
        <a class="btn" href="{{ route('teachers.index') }}"> Cancel</a>
    </div>
</form>
@endsection