@extends('layouts.app')
@section('title','Add new item')
@section('content')
<div class="container">
    <form action="{{route('admin.products.update',$product->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label" >Name</label>
            <input type="text" class="form-control"  name="name" id="name" aria-describedby="helpId" placeholder="product here " value="{{$product->name}}" required>
            <small id="helpId" class="form-text text-muted">insert here product' name</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="" step="0.01" value="{{$product->price}}" >
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">img url</label>
            <input type="text" class="form-control" name="img" id="img" aria-describedby="helpId" placeholder="" value="{{$product->img}}" >
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox"  id="in_stock" name="in_stock" value="{{$product->in_stock}}" checked  >
            <label class="form-check-label" for="in_stock">
                in stock?
            </label>
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">weight</label>
            <input type="number" class="form-control" name="weight" id="weight" aria-describedby="helpId" placeholder="" value="{{$product->weight}}">
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="product_code" class="form-label">product code</label>
            <input type="text" class="form-control" name="product_code" id="product_code" aria-describedby="helpId" placeholder="" value="{{$product->product_code}}">
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{$product->description}}"</textarea>
        </div>
        <button type="submit" class="btn btn-primary">send</button>
    </form>
</div>

@endsection