@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create role</h1>
                </div>
            </div>
        </div>
    </section>

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'roles.store']) !!}

            <div class="card-body">

                <div class="row">
                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('name', 'Role Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'required']) !!}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('slug', 'Role Slug:') !!}
                        {!! Form::text('slug', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'required']) !!}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('roles_permissions', 'Add Permission:') !!}
                        {!! Form::text('roles_permissions', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'required']) !!}
                    </div>
                </div>
            </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
