@extends('layouts.app')
@extends('main.components.import')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Edit project</h4>
        </div>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <a href="{{ route('product.index') }}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
            All project
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="mt-2 alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('product.update', $projects->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Project name <span class="text-danger">*</span></label>
                    <input value="{{ $projects->name }}" id="name" name="name" type="text" class="form-control" placeholder="Project name">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Project image <span class="text-danger">*</span></label>
                    <input id="image" name="image" type="file" class="form-control" placeholder="Project image">
                    <img src="{{ $projects->image }}" alt="image" class="mt-2" width="300px;">
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Project link <span class="text-danger">*</span></label>
                    <input value="{{ $projects->link }}" id="link" name="link" type="text" class="form-control" placeholder="Project link">
                </div>
                <div>
                    <button type="submit" class="btn btn-success btn-icon-text mb-2 mb-md-0">
                        Save project data
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection