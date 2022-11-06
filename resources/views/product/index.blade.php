@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="mb-3">
            <a href="{{route('product.create')}}" class="btn btn-primary">Add Product</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">Serial No.</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$product->title}}</td>
                <td>${{$product->price}}</td>
                <td width='60%'>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary mb-1">Edit</a>
                    <form action="{{route('product.destroy',$product->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
    </div>
@endsection
