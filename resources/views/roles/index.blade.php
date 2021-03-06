@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>roles</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('roles.create') }}">
                        Add New role
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>
           <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bordered" >
                        <thead>
                            <tr>
                                <th scope="row">S/N</th>
                                <th scope="col">Role</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Permission</th>
                                <th scope="col" colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->slug }}</td>
                                <td>{{ $role->roles_permissions }}</td>
                                <td width="120">
                                    {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        <a href="{{ route('roles.show', $role->id) }}" class='btn btn-default btn-xs'>
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="{{ route('roles.edit', $role->id) }}" class='btn btn-default btn-xs'>
                                            <i class="far fa-edit"></i>
                                        </a>
                                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix float-right">
                <div class="float-right">
                    
                </div>
            </div>
        </div>

    </div>
</div>

@endsection