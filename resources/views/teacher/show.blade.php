@extends('layout.app')

@section('content')
    @foreach ($teacher as $t )
        @php
            $teacher_name = $t->name;
            $teacher_id = $t->id;
        @endphp
        <h1 class="data-title">Prof. {{ $t->name }}</h1>
        <p class="data-description mt-4 mb-4">{{ $t->department }} Department</p>
        <div>
            <div class="data-rating">
                Total Rating: {{ number_format($t->evaluation_ratings_avg_rating,2) }}
            </div>
        </div>
    @endforeach
    <div class="mt-3">
        <ul>
            @forelse ( $criterias as $criteria)
            <li class="mb-4">
                <div class="data-item">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="w-full flex-grow sm:w-auto">
                            <a href="{{ route('criteria.show',[$criteria->id,'teacher_id'=>$teacher_id,'teacher_name'=>$teacher_name])}}" class="data-title">{{ $criteria->description }}</a>
                        </div>
                        <div>
                            <div class="data-rating">
                                Rating: {{ number_format($criteria->evaluation_ratings_avg_rating,2) }}
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
@endsection