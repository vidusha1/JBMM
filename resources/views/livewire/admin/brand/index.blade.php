<!-- Content Header (Page header) -->
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5>Brands</h5>
                            <a href="{{ route('brand.create') }}" class="btn btn-sm btn-primary">Create Brand</a>
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
                                    @forelse ($brands as $brand)
                                        <tr>
                                            <td>{{ $brand->id }}</td>
                                            <td>{{ ucfirst($brand->name) }}</td>
                                            <td>{{ $brand->slug }}</td>
                                            <td>
                                                @if ($brand->category)
                                                    {{ ucfirst($brand->category->title) }}
                                                @else
                                                    <span>No Category</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($brand->status == 0)
                                                    <span class="badge badge-info">Visible</span>
                                                @else
                                                    <span class="badge badge-danger">Hidden</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/brand/' . $brand->id . '/edit') }}">
                                                    <i class="fa-solid fa-eye text-primary mx-1"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa-solid fa-trash text-danger mx-1"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <span>No Brand Found!</span>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="d-flex float-end">
                                {{ $brands->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
