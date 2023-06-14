@extends('layouts.app')
@extends('main.components.import')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Detail Product</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{route('product.index')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                All Products
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Project Name</label>
                    <input value="{{$projects->name}}" disabled id="name" name="name" type="text" class="form-control" placeholder="Project Name">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <div>
                        <img class="mt-2" src="/projects_image/{{ $projects->image }}" width="300px">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Project link</label>
                    <input value="{{$projects->link}}" disabled id="name" name="name" type="text" class="form-control" placeholder="Project Name">
                </div>

                <div>
                    <a href="{{route('product.edit',$projects->id)}}" class="btn btn-success btn-icon-text mb-2 mb-md-0">
                        Edit Product
                    </a>
                </div>

            </form>
        </div>

    </div>
@endsection
