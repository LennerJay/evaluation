@extends('layout.app')

@section('content')

    <h1 class="data-title">Prof. {{ $teacher_name }}</h1>
    @forelse ($criteria as $c )
        <div class="flex flex-wrap items-center justify-between">
            <div class="w-full flex-grow sm:w-auto">
                <p class="data-title">Criteria: {{ $c->description }}</p>
            </div>
            <div class="mt-4">
                <div class="data-rating">
                    Rating: {{ number_format($c->evaluation_ratings_avg_rating,2) }}
                </div>
            </div>
        </div>
        <div class="mt-3">
            {{-- {{ dd($questions) }} --}}
            <ul>
                @forelse ( $questions as $key => $question)
                <li class="mb-4">
                    <div class="data-item">
                        <div class="flex flex-wrap items-center justify-between">
                            <div class="w-full flex-grow sm:w-auto">
                                <a href="" class="data-title">{{ $key+1 }}. {{ rtrim($question->question,'.')}} ?</a>
                            </div>
                            <div>
                                <div class="data-rating">
                                    Rating: {{ number_format($question->evaluation_ratings_avg_rating,2) }}
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
        </div>
    @empty  
        
    @endforelse
@endsection