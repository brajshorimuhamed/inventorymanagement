<!DOCTYPE html>
<html>
    <head>
        <title>Create Category</title>
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
            <h1 align="center">Create Category</h1>
            <br />

            <form method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="category_name">Enter Name</label>
                    <input type="text" name="category_name" class="form-control input-md"/>
                </div>
                <div class="form-group">
                    <label for="category_status">Enter Status</label>
                    <select id="category_status" name="category_status" for="category_status">
                        <option value="#">Zgjedh statusin</option>

                        <option>TRUE</option>
                        <option>FALSE</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="Add Category" class="btn btn-primary" value="Add Category" />
                    <input type="reset" name="Clear" class="btn btn-danger" value="Clear"/>
                </div>
            </form>
        </div>
    </body>
</html>