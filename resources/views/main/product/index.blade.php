@extends('layouts.app')
@extends('main.components.import')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">All project</h4>
        </div>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <a href="{{ route('product.create') }}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
            Add new project
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            @if ($message = session('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-sm  table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Project name</th>
                            <th>Project image</th>
                            <th>Project link</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($projects as $index => $val)
                             <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $val->name }}</td>
                                <td><img src="projects_image/{{ $val->image }}" alt="image" class="w-25"></td>
                                <td><a href="http://{{ $val->link }}" target="blank">{{ $val->link }}</a></td>
                                <td>{{ $val->created_at }}</td>
                                <td>
                                    <form action="{{ route('product.destroy', $val->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <a class="btn btn-sm btn-success" href="{{ route('product.show', $val->id) }}">Show</a>
                                        <a class="btn btn-sm btn-warning" href="{{ route('product.edit', $val->id) }}">Edit</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                             </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection