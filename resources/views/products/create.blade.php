<!DOCTYPE html>
<html>
    <head>
        <title>Create Product</title>
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
            <h1 align="center">Create Product</h1>
            <br />

            <form class="form-horizontal" method="post" action="/products">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="product_name">Name</label>
                    <input type="text" name="product_name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="category_id">Category ID</label>
                    <select id="" name="category_id" class="form-control">
                        <option value="#">Zgjedh kategorine</option>

                        @foreach ($categoryList as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="sales_price">Sales Price</label>
                    <input type="text" name="sales_price" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="purchase_price">Purchase Price</label>
                    <input type="text" name="purchase_price" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="Add Product" class="btn btn-primary" value="Add Product" />
                    <input type="reset" name="Clear" class="btn btn-danger" value="Clear"/>
                </div>
            </form>
        </div>
    </body>
</html>