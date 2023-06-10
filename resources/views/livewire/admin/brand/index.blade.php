<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (session('message'))
                <h2 class="alert alert-secondary">{{ session('message') }}</h2>
                @endif
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Brands</h1>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<section class="content">
    @include('livewire.admin.brand.modal-form')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>Brands Lists
                        <a href="" class="btn btn-sm btn-primary float-end" data-bs-toggle="modal"
                            data-bs-target="#addBrandModal">Add Brands</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped mt-4">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Slug</td>
                                <td>Category</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener('close-modal', event => {
        $('#addBrandModal').modal('hide');
        $('#editBrandModal').modal('hide');
        $('#deleteBrandModal').modal('hide');
    });
</script>