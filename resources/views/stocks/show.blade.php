<!DOCTYPE html>
<html>
    <head>
        <title>Show Stock</title>
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
            <h1 align="center">Show Stock</h1>
            <br />

            <div style="color: darkred">
    	        <strong>{{$stock->product_id}}</strong>
                <br />
    	        <strong>{{$stock->quantity}}</strong>
            </div>

            <a href="/stocks/{{$stock->id}}/edit">Edit Stock</a>
        </div>
    </body>
</html>