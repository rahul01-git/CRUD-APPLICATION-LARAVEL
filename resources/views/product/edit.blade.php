@extends('layouts.master')
@section('content')
    
    <div class="container">
        <div class="row">
            <form action="{{ route('product.update',$product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mt-5">
                    <div class="mb-3">
                        <input type="text" class="form-control" name='title' value="{{$product->title}}" placeholder="Product Name">
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name='price' value="{{$product->price}}" placeholder="Product Price">
                        @error('price')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea name="description" class="form-control"  placeholder="Description" rows="5">{{$product->description}}</textarea>
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection