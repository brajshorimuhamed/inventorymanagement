<!DOCTYPE html>
<html>
    <head>
        <title>Stocks</title>
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
                    <li><a href="#">Stocks</a></li>
                    <li><a href="{{ url('/account/logout') }}">Logout</a></li>
                </ul>
            </div>
        </nav>
        <br />
        <div class="container">
            <h1 align="center">Stock Management</h1>
            <br />

            <a class="btn btn-primary" href="/stocks/create">Add New Stock</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                        @foreach ($stocks as $stock)
                            <tr>
                                <td>{{$stock->product_id}}</td>
                                <td><a href="/stocks/{{$stock->id}}">{{$stock->quantity}}</a></td>
                            </tr>
                        @endforeach
                   </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>