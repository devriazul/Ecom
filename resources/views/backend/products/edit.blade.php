@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="pt-5 text-info">Edit Products</h3>
        <div>
            <a href="{{ route('admin.product') }}" class="btn btn-dark btn-sm mb-3">All Products</a>
        </div>
    </div>
    <form method="POST" action="{{ route('admin.product.edit', $product->id) }}">
        @csrf
        <div class="row">
            <div class="card shadow p-3 col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" id="name">
                  </div>
                  <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" value="{{ $product->price }}" name="price" id="price">
                  </div>
                  <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <textarea class="form-control" name="desc" id="" cols="30" rows="4">{{ $product->desc }}</textarea>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Product Photo</label>
                    <input name="photo" class="form-control" value="{{ $product->photo }}" type="file" id="formFile">
                  </div>
                  <div>
                    <button type="submit" class="btn btn-sm btn-warning mt-3">Update</button>
                  </div>
            </div>
        </div>
    </form>
</div>
@endsection