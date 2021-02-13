<!DOCTYPE html>
<html>
    <head>
        <title>Edit Stock</title>
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
            <h1 align="center">Edit Stock</h1>
            <br />

            <form class="form-horizontal" method="post" action="/stocks/{{$stock->id}}">
                {{ csrf_field() }}
                @method('put')
                <div class="form-group">
                    <label for="product_id">Product ID</label>
                    <select id="" name="product_id" class="form-control">
                        <option value="#">Zgjedh produktin</option>

                        @foreach ($productList as $product)
                            <option value="{{$product->id}}" {{$product->id == $stock->product_id ? 'selected' : ''}}>{{$product->product_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" value="{{$stock->quantity}}" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="Update" class="btn btn-primary" value="Update" />
                </div>
            </form>

            <form class="form-horizontal" method="post" action="/stocks/{{$stock->id}}">
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