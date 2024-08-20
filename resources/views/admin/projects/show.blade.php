@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ( str_starts_with($project->image, "http"))
                    <img src="{{ $project->image }}" class="card-img-top" alt="{{ $project->title }}">
                @else
                    <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{
                        $project->description }}
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Author:</strong> {{ $project->user->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>Type: </strong>{{ $project->type->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>Technologies: </strong>
                            @forelse ( $project->technologies as $technology )
                                {{ $technology->name }}
                                @if (!$loop->last), @endif
                            @empty
                                -----
                            @endforelse
                        </li>
                        <li class="list-group-item">
                            <strong>Client:</strong> {{ $project->client }}
                        </li>
                        <li class="list-group-item">
                            <strong>Creation Date:</strong> {{ $project->creation_date }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
