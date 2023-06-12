<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5>Categories</h5>
                        <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary">Create Category</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $categoryItem)
                                <tr>
                                    <td>#</td>
                                    <td>{{ $categoryItem['title'] }}</td>
                                    <td>{{ $categoryItem['slug'] }}</td>
                                    <td>{{ $categoryItem['description'] }}</td>
                                    <td>
                                        @if ($categoryItem['status'] == 0)
                                        <span class="badge badge-success">Active</span>
                                        @else
                                        <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/categories/' . $categoryItem->id . '/edit') }}">
                                            <i class="fas fa-eye text-info mx-1"></i>
                                        </a>
                                        <a href="{{ url('admin/categories/' . $categoryItem->id . '/delete') }}" onclick="return confirm('Are you sure you want to delete this category?')">
                                            <i class="fas fa-trash text-danger mx-1"></i>
                                        </a>
                                    </td>
                                </tr>                               

                                @empty
                                <span class="text-danger">No Category Found!</span>   

                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex float-end">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

