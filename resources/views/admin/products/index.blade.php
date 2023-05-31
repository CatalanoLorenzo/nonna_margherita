@extends('layouts.app');
@section('title','Admin:Table Products')
@section('content')

@if (session('message'))
<div class="alert alert-success" role="alert">
    <strong>{{session('message')}}</strong>
</div>
@endif

<a name="" id="" class="btn btn-primary" href="{{route('admin.products.create')}}" role="button">New Product +</a>
    <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Products</caption>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>IMAGE</th>
                    <th>IN STOCK</th>
                    <th>WEIGHT</th>
                    <th>PRODUCT CODE</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse ($products as $product)
                    <tr class="table-primary" >
                        <td scope="row">{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td><img src="{{$product->img}}" width="100" alt="{{$product->name}}"></td>
                        <td>{{$product->in_stock}}</td>
                        <td>{{$product->weight}}</td>
                        <td>{{$product->product_code}}</td>
                        <td>
                        <a name="" id="" class="btn btn-primary" href="{{route('admin.products.show',$product->id)}}" role="button">View</a>    
                        VIEW/EDIT/DELETE</td>
                    </tr>
                    @empty
                    <tr class="table-primary" >
                        <td scope="row">products are not in stock</td>
                    </tr>
                    @endforelse
                    
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
    </div>
    
@endsection