@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="pt-5 text-info">Products List</h3>
        <div>
            <a href="{{ route('admin.product.create') }}" class="btn btn-dark btn-sm mb-3">+ Add Product</a>
        </div>
    </div>
    <table class="table text-center">
      {{-- @dd($products) --}}
        <thead>
          <tr>
            <th scope="col">Sl No:</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Price</th>
            <th scope="col">Product Description</th>
            <th scope="col">Product Photo</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $key=>$product)
          <tr>
            <th scope="row">{{ $key+1 }}</th>
            <th>{{ $product->name }}</th>
            <td>{{ $product->price }}</td>
            <td>{{ $product->desc }}</td>
            <td>
              <img src="{{ asset('uploads/products/'.$product->photo) }}" class="img-fluid rounded" alt="..." width="150px">
            </td>
            <td>
              <a href="{{ route('admin.product.edit',$product->id) }}" class="btn btn-primary btn-sm">Edit</a>
              <a href="{{ route('admin.product.delete',$product->id) }}" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection