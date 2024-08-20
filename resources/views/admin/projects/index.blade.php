@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr class="">
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Type</th>
                    <th scope="col">Technologies</th>
                    <th scope="col">Client</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($projects as $project)
                    <tr>
                        {{-- <th scope="row">{{ $project->id }}</th> --}}
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->user->name }}</td>
                        <td>{{ $project->type->name }}</td>
                        <td>
                            {{-- @php
                                dd($project->technologies);
                            @endphp --}}
                            @forelse ( $project->technologies as $technology )
                                {{ $technology->name }}
                                @if (!$loop->last), @endif
                            @empty
                                -----
                            @endforelse
                        </td>
                        <td>{{ $project->client }}</td>
                        <td>{{ $project->creation_date }}</td>
                        <td>
                            <a href="{{ route("admin.projects.show", $project) }}" class="btn btn-primary btn-sm">
                                Show
                            </a>
                            <a href="{{ route("admin.projects.edit", $project) }}" class="btn btn-success btn-sm">
                                Edit
                            </a>
                            <form action="{{ route("admin.projects.destroy", $project) }}" method="post" class="d-inline-block form-destroyer" data-project-name="{{ $project->title }}">
                                @method("delete")
                                @csrf
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete"/>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section("additional-scripts")
    @vite(["resources/js/projects/delete-index-confirmation.js"])
@endsection
