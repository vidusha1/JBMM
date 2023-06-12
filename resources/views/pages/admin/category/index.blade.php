@section('title', 'Categories')
@extends('layouts.admin.app')
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if ($errors->any())
                    <div class="alert alert-warning">
                        @foreach ($errors->all() as $error)
                        <div class="">{{ $error }}</div>
                        @endforeach
                    </div>
                    @endif
                    @if (session('message'))
                    <h2 class="alert alert-secondary">{{ session('message') }}</h2>
                    @endif
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Categories</h1>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

<section class="content">
    <livewire:admin.categories.index />
</section>

@endsection