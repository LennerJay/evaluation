@extends('layout.app')

@section('content')
<div class="flex flex-wrap items-center justify-between mb-4">
    <h1 class="data-title ">Teachers</h1>
    <a href="{{ route('teachers.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
        Add Teacher
      </a>
</div>

<ul>
    @forelse ($teachers as $teacher)
        <li class="mb-4">
            <div class="data-item">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="w-full flex-grow sm:w-auto">
                        <a href="{{ route('teachers.show',$teacher->id) }}" class="data-title">{{ $teacher->name }}</a>
                        <span class="data-description">{{ $teacher->department }}</span>
                    </div>
                    <div>
                        <x-Rating :rating="$teacher->evaluation_ratings_avg_rating" />
                    </div>
                </div>
            </div>
        </li>
    @empty
        <li class="mb-4">
            <div class="empty-data-item">
                <p class="empty-text">No data found</p>
            </div>
        </li>
    @endforelse
</ul>
@endsection