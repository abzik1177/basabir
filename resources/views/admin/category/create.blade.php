@extends('layouts.master')

@section('title', 'Add Category')

@section('content')
    <div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="card-header">
                <h4 class="mt-4">Add Category</h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <form action="{{ url('admin/add-category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Catogory Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>description</label>
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <h6>Seo Tags</h6>
                    <div class="mb-3">
                        <label>meta_title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>meta_description</label>
                        <textarea name="meta_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>meta_keyword</label>
                        <textarea type="file" name="meta_keyword" rows="3" class="form-control"></textarea>
                    </div>

                    <h6>Status mode</h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>navbar_status</label>
                            <input type="checkbox" name="navbar_status">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>status</label>
                            <input type="checkbox" name="status">
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Save Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




    </div>
@endsection
