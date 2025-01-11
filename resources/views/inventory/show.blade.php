<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
<style>
    .container {
        max-width: 800px;
        margin: 30px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 20px;
        background-color: #f9f9f9;
    }

    .card-title {
        font-size: 24px;
        margin-bottom: 10px;
        color: #007bff;
    }

    .card-text {
        font-size: 16px;
        margin-bottom: 10px;
        color: #555;
    }

    .btn {
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 14px;
        text-decoration: none;
        color: #fff;
        margin-right: 10px;
        display: inline-block;
        transition: background-color 0.3s;
    }

    .btn-warning {
        background-color: #ffc107;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }

    .btn-danger {
        background-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .btn-secondary {
        background-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    form {
        display: inline-block;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Product Details</h1>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $inventory->name }}</h2>
            <p class="card-text"><strong>Description:</strong> {{ $inventory->description }}</p>
            <p class="card-text"><strong>Price:</strong> ${{ number_format($inventory->price, 2) }}</p>
            <p class="card-text"><strong>Quantity:</strong> {{ $inventory->quantity }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('inventory.edit', $inventory->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('inventory.destroy', $inventory->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
        </form>
        <a href="{{ route('inventory.index') }}" class="btn btn-secondary">Back to Products</a>
    </div>
</div>
</body>
</html>
