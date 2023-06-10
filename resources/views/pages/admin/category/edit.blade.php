@section('title', 'Create Category')
@extends('layouts.admin.app')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Category</h1>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h5>Update Category</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/categories/' . $category->id ) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Title</label>
                                            <input type="text" class="form-control form-control-sm" id="name"
                                               value="{{ $category->title }}" name="title">
                                            @error('title')<span class="text-danger" style="font-size: 14px">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Slug</label>
                                            <input type="text" class="form-control form-control-sm" id="slug"
                                                value="{{ $category->slug }}" name="slug">
                                            @error('slug')<span class="text-danger" style="font-size: 14px">{{ $message
                                                }}</span>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea type="text" class="form-control form-control-sm" id="description"
                                        name="description" rows="3">{{ $category->description }}</textarea>
                                    @error('description')<span class="text-danger" style="font-size: 14px">{{ $message
                                        }}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control form-control-sm" id="image"
                                        placeholder="Category Image" name="image" accept="image/png, image/jpeg">
                                    <img src="{{ asset($category->image) }}" alt="" class="mt-2" width="75">
                                    <span class="mt-1" style="font-size: 12px">File Allowed images: jpg, gif, png.
                                        Maximum 1 image only.</span>
                                       
                                    @error('image')<span class="text-danger" style="font-size: 14px">{{ $message
                                        }}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Status</label>
                                    <div class="form-group clearfix">

                                        @if ($category->status == 0)
                                        <div class="icheck-success d-inline">
                                            <input type="radio" id="radioPrimary1" name="0" checked="checked">
                                            <label for="radioPrimary1">Active</label>
                                        </div>
                                        
                                        <div class="icheck-danger d-inline">
                                            <input type="radio" id="radioPrimary2" name="1">
                                            <label for="radioPrimary2">Inactive</label>
                                        </div>
                                        @else
                                        <div class="icheck-success d-inline">
                                            <input type="radio" id="radioPrimary1" name="0" >
                                            <label for="radioPrimary1">Active</label>
                                        </div>

                                        <div class="icheck-danger d-inline">
                                            <input type="radio" id="radioPrimary2" name="1" checked="checked">
                                            <label for="radioPrimary2">Inactive</label>
                                        </div>
                                        @endif
                                        

                                    </div>
                                    @error('status')<span class="text-danger" style="font-size: 14px">{{ $message
                                        }}</span>@enderror
                                </div>

                                <h4 class="mt-4" style="font-weight: bold">Meta Data</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="meta_title">Meta Tile</label>
                                            <input type="text" class="form-control form-control-sm" id="meta_title"
                                                value="{{ $category->meta_title }}" name="meta_title">
                                            @error('meta_title')<span class="text-danger" style="font-size: 14px">{{
                                                $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="meta_keyword">Meta Keyword</label>
                                            <input type="text" class="form-control form-control-sm" id="meta_keyword"
                                                value="{{ $category->meta_keyword }}" name="meta_keyword">
                                            @error('meta_keyword')<span class="text-danger" style="font-size: 14px">{{
                                                $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea type="text" class="form-control form-control-sm" id="meta_description"
                                          name="meta_description"
                                        rows="3">{{ $category->meta_description }}</textarea>
                                    @error('meta_description')<span class="text-danger" style="font-size: 14px">{{
                                        $message }}</span>@enderror
                                </div>

                            </div>

                            <div class="d-flex float-right mb-3 mx-3">
                                <button type="submit" class="btn btn-sm btn-success">Update Category</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection