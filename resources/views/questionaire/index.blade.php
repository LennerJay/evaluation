@extends('layout.app')

@section('content')
<h1>Evaluation System</h1>
    <ul>
        @forelse ($questionaire as $data )
            <li class="mb-4">
                <div class="data-item">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="w-full flex-grow sm:w-auto">
                            <a href="{{ route('teachers.index') }}" class="data-title">{{ $data->title }}</a>
                            <span class="data-description">{{ $data->description }}</span>
                        </div>
                        <div>
                            <a href="{{ route('questionaire.edit',$data->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                Edit
                              </a>
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
    <a href="{{ route('questionaire.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
        Create
      </a>
@endsection