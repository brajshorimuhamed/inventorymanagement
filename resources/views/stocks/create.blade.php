<!DOCTYPE html>
<html>
    <head>
        <title>Create Stock</title>
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
            <h1 align="center">Create Stock</h1>
            <br />

            <form method="post" action="/stocks">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="product_id">Product ID</label>
                    <select id="" name="product_id" class="form-control">
                        <option value="#">Zgjedh produktin</option>

                        @foreach ($productList as $product)
                            <option value="{{$product->id}}">{{$product->product_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="Add Stock" class="btn btn-success" value="Add Stock" />
                    <input type="reset" name="Clear" class="btn btn-danger" value="Clear"/>
                </div>
            </form>
        </div>
    </body>
</html>