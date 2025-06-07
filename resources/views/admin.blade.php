<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Manage Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>Admin Panel - Manage Products</h1>
                    <div>
                        <button class="btn btn-info me-2" onclick="location.reload()">
                            <i class="fas fa-refresh"></i> Refresh
                        </button>
                        <a href="{{ url('/') }}" class="btn btn-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Form Tambah Produk -->
        <div class="card mb-5">
            <div class="card-header">
                <h3><i class="fas fa-plus"></i> Add New Product</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('/admin/products') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="price" class="form-label">Price (Rp)</label>
                                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-plus"></i> Add Product
                    </button>
                </form>
            </div>
        </div>

        <!-- Daftar Produk -->
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-list"></i> Product List</h3>
            </div>
            <div class="card-body">
                @if(isset($products) && count($products) > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" 
                                             style="width: 50px; height: 50px; object-fit: cover;" class="rounded">
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>${{ number_format($product->price, 2) }}</td>
                                    <td>{{ Str::limit($product->description ?? '', 50) }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-sm btn-warning" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#editModal{{ $product->id }}">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>

                                            <!-- Form Delete -->
                                            <form method="POST" action="{{ route('products.destroy', $product->id) }}" 
                                                  style="display: inline;" 
                                                  onsubmit="return confirm('Are you sure you want to delete this product?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal Edit untuk setiap produk -->
                                <div class="modal fade" id="editModal{{ $product->id }}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Product: {{ $product->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <!-- Form Edit di Modal -->
                                            <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="edit_name{{ $product->id }}" class="form-label">Product Name</label>
                                                        <input type="text" class="form-control" id="edit_name{{ $product->id }}" 
                                                               name="name" value="{{ $product->name }}" required>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="mb-3">
                                                                <label for="edit_quantity{{ $product->id }}" class="form-label">Quantity</label>
                                                                <input type="number" class="form-control" id="edit_quantity{{ $product->id }}" 
                                                                       name="quantity" value="{{ $product->quantity }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="mb-3">
                                                                <label for="edit_price{{ $product->id }}" class="form-label">Price ($)</label>
                                                                <input type="number" step="0.01" class="form-control" id="edit_price{{ $product->id }}" 
                                                                       name="price" value="{{ $product->price }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="edit_description{{ $product->id }}" class="form-label">Description</label>
                                                        <textarea class="form-control" id="edit_description{{ $product->id }}" 
                                                                  name="description" rows="3">{{ $product->description }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Current Image</label>
                                                        <div class="mb-2">
                                                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" 
                                                                 style="width: 100px; height: 100px; object-fit: cover;" class="rounded">
                                                        </div>
                                                        <label for="edit_image{{ $product->id }}" class="form-label">Update Image (optional)</label>
                                                        <input type="file" class="form-control" id="edit_image{{ $product->id }}" 
                                                               name="image" accept="image/*">
                                                        <small class="text-muted">Leave empty to keep current image</small>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fas fa-save"></i> Update Product
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-info text-center">
                        <i class="fas fa-info-circle"></i> No products found. Add your first product above.
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>