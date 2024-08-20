@extends("admin.projects.layouts.create-or-edit-form")

@section("form-action")
    {{ route("admin.projects.update", $project) }}
@endsection

@section("form-method")
    @method("PUT")
@endsection

@section("create-form-button")
Edit {{ $project->name }}
@endsection
