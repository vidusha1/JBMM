@section('title', 'Create Brand')
@extends('layouts.admin.app')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Brand</h1>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if ($errors->any())
                <div class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                    <div class="">{{ $error }}</div>
                    @endforeach
                </div>
                @endif
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h5>Create Brand</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('brand.create') }}" method="POST">
                            @csrf
                            <div class="card-body">
                              
                                <!-- Category -->
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control select2" style="width: 100%;">
                                        <option selected="selected">--Please Select Category--</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <!-- /.form group -->
                                
                                <!-- Brand -->
                                <div class="form-group">
                                    <label>Brand Name:</label>
                                    <input type="text" name="name" class="form-control my-colorpicker1 colorpicker-element"
                                        data-colorpicker-id="1" placeholder="Brand Name">
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <!-- /.form group -->
                                
                                <!-- Brand Slug -->
                                <div class="form-group">
                                    <label>Brand Slug:</label>
                                    <input type="text" name="slug" class="form-control my-colorpicker1 colorpicker-element"
                                        data-colorpicker-id="1" placeholder="Brand Status">
                                    @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <!-- /.form group -->
                                
                              <!-- Status -->
                                <div class="form-group clearfix">
                                    <label>Brand Status:</label>
                                    <div class="icheck-danger">
                                        <input type="checkbox" name="status" id="checkboxDanger1">
                                        <label for="checkboxDanger1">Checked=Hide, Uncheck=Visible</label>
                                    </div>
                                    @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <!-- /.form group -->

                            </div>

                            <div class="d-flex float-right mb-3 mx-3">
                                <button type="submit" class="btn btn-sm btn-success">Create New Brand</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection