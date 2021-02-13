<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title>
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
            <h1 align="center">Edit Product</h1>
            <br />

            <form class="form-horizontal" method="post" action="/products/{{$product->id}}">
                {{ csrf_field() }}
                @method('put')
                <div class="form-group">
                    <label for="product_name">Name</label>
                    <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="category_id">Category ID</label>
                    <select id="" name="category_id" class="form-control">
                        <option value="#">Zgjedh kategorine</option>

                        @foreach ($categoryList as $category)
                            <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : ''}}>{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="sales_price">Sales Price</label>
                    <input type="text" name="sales_price" value="{{$product->sales_price}}" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="purchase_price">Purchase Price</label>
                    <input type="text" name="purchase_price" value="{{$product->purchase_price}}" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="Update" class="btn btn-primary" value="Update" />
                </div>
            </form>

            <form class="form-horizontal" method="post" action="/products/{{$product->id}}">
    	        @csrf
    	        @method('delete')
    	            <div class="form-group">
    	    	        <label class="col-md-4 control-label" for="submit"></label>
    	    	        <div class="col-md-4">
    	    		        <button id="submit" name="submit" class="btn btn-primary">Delete</button>
    	    	        </div>
    	            </div>
            </form>
        </div>
    </body>
</html>