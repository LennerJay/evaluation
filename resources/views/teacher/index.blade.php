@extends('layout.app')

@section('content')
<h1 class="data-title">Teachers</h1>
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
                        <div class="data-rating">
                            Rate: {{ number_format($teacher->evaluation_ratings_avg_rating,2) }}
                        </div>
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