@extends("admin.projects.layouts.create-or-edit-form")

@section("form-action")
    {{ route("admin.projects.store") }}
@endsection

@section("form-method")
    @method("POST")
@endsection

@section("create-form-button")
    Add new project
@endsection
