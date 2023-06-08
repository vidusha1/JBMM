@section('title', 'Admin | Users')
@extends('layouts.admin.app')

@section('content')
   <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Users</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="container-fluid">
    <div class="row justify-content-center mb-2">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>All Users</h4>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#createNewUser">
                            Register New User
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Created By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>
                                        @if ($user->role == '0')
                                        <span class="badge badge-info">Customer</span>
                                        @elseif ($user->role == '1')
                                        <span class="badge badge-success">Staff</span>
                                        @elseif ($user->role == '2')
                                        <span class="badge badge-warning" style="color: black;">Admin</span>
                                        @endif
                                    </td>
                                    <td class="text-capitalize">{{ $user->created_by }}</td>
                                    <td>
                                        @if ($user->status == '0')
                                        <span class="badge badge-info">Active</span>
                                        @else
                                        <span class="badge badge-danger" style="color: black;">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#editUser">
                                            <i class="fa-solid fa-eye text-info mx-2"></i>
                                        </a>
                                        <a href="#" onclick="return confirm('Make sure you want to delete this user')">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <span>No Data Found</span>
                                @endforelse
                            </tbody>
                        </table>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

<!-- Create New User Modal -->
<div wire:ignore.self class="modal fade" id="createNewUser" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="storeUser">
                    <!-- Date dd/mm/yyyy -->
                    <div class="form-group">
                        <label>Name:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="name"
                                placeholder="Add First and and Last Name">
                        </div>
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- email -->
                    <div class="form-group">
                        <label>Email Address:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="email"
                                inputmode="text" placeholder="Email Address">
                        </div>
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- username -->
                    <div class="form-group">
                        <label>Username:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-lock"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="username"
                                inputmode="text" placeholder="Username">
                        </div>
                        @error('username')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Role -->
                    <div class="form-group">
                        <label>User Role:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <select class="form-select" wire:model.defer="role" aria-label="Default select example">
                                <option selected>--Select Role--</option>
                                <option value="0">User</option>
                                <option value="1">Staff</option>
                                <option value="2">Admin</option>
                            </select>
                        </div>
                        @error('role')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Password -->
                    <div class="form-group">
                        <label>Password:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="password"
                                inputmode="text" placeholder="Password">
                        </div>
                        <!-- /.input group -->
                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <!-- /.form group -->

                    <!-- Status -->
                    <div class="form-group d-flex">
                        <label>Status:</label>

                        <div class="form-group clearfix mx-3">
                            <div class="icheck-success d-inline">
                                <input type="radio" wire:model.defer="status" value="0" checked="" id="radioSuccess1">
                                <label for="radioSuccess1">Active</label>
                            </div>
                            <div class="icheck-danger d-inline">
                                <input type="radio" wire:model.defer="status" value="1" id="radioSuccess2">
                                <label for="radioSuccess2">Inactive</label>
                            </div>
                        </div>
                        <!-- /.input group -->
                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <!-- /.form group -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Create User</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div wire:ignore.self class="modal fade" id="editUser" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                    <label>Name:</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-sm" wire:model.defer="name"
                            placeholder="Add First and and Last Name">
                    </div>
                    @error('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- email -->
                <div class="form-group">
                    <label>Email Address:</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-sm" wire:model.defer="email"
                            inputmode="text" placeholder="Email Address">
                    </div>
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- username -->
                <div class="form-group">
                    <label>Username:</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-lock"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-sm" wire:model.defer="username"
                            inputmode="text" placeholder="Username">
                    </div>
                    @error('username')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Role -->
                <div class="form-group">
                    <label>User Role:</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <select class="form-select" wire:model.defer="role" aria-label="Default select example">
                            <option selected>--Select Role--</option>
                            <option value="0">User</option>
                            <option value="1">Staff</option>
                            <option value="2">Admin</option>
                        </select>
                    </div>
                    @error('role')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Password -->
                <div class="form-group">
                    <label>Password:</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-sm" wire:model.defer="password"
                            inputmode="text" placeholder="Password">
                    </div>
                    <!-- /.input group -->
                    @error('password')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <!-- /.form group -->

                <!-- Status -->
                <div class="form-group d-flex">
                    <label>Status:</label>

                    <div class="form-group clearfix mx-3">
                        <div class="icheck-success d-inline">
                            <input type="radio" name="r3" checked="" id="radioSuccess1">
                            <label for="radioSuccess1">Active</label>
                        </div>
                        <div class="icheck-danger d-inline">
                            <input type="radio" name="r3" id="radioSuccess2">
                            <label for="radioSuccess2">Inactive</label>
                        </div>
                    </div>
                    <!-- /.input group -->
                    @error('password')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <!-- /.form group -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
