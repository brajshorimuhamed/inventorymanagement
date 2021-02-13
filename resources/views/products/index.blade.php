<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
        @extends('layout.head')
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">InventoryManagement</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active">
                        @if(isset(Auth::user()->email))
                            <div class="alert alert-danger success-block">
                                <strong>{{ Auth::user()->email }}</strong>
                            </div>
                        @endif
                    </li>
                    <li><a href="#">Products</a></li>
                    <li><a href="/stocks">Stocks</a></li>
                    <li><a href="{{ url('/account/logout') }}">Logout</a></li>
                </ul>
            </div>
        </nav>
        <br />
        <div class="container">
            <h1 align="center">Product Management</h1>
            <br />

            <a class="btn btn-success" href="/products/create">Add Product</a>

            <a class="btn btn-primary" href="/categories/create">Add Categories</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category ID</th>
                        <th>Profit</th>
                        <th>Sales Price</th>
                        <th>Purchase Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                        @foreach ($products as $product)
                            <tr>
                                <td><a href="/products/{{$product->id}}">{{$product->product_name}}</a></td>
                                <td>{{$product->category_id}}</td>
                                <td>{{$product->sales_price - $product->purchase_price}}</td>
                                <td>{{$product->sales_price}}</td>
                                <td>{{$product->purchase_price}}</td>
                            </tr>
                        @endforeach
                   </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>