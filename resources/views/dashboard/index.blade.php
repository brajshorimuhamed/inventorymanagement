<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
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
                    <li><a href="/products">Products</a></li>
                    <li><a href="#">Stocks</a></li>
                    <li><a href="{{ url('/account/logout') }}">Logout</a></li>
                </ul>
            </div>
        </nav>
        <br />
        <div class="container">
            <h1 align="center">Inventory Management</h1>
            <br />

            <h3>Ky sistem mundeson menaxhimin e produkteve si dhe ne nxjerrjen e fitimit duke llogaritur ndryshimin (zbritjen)
            ne mes te cmimit te shitjes dhe cmimit te blerjes.</h3>

            <h3>Po ashtu ky sistem mundeson menaxhimin e stokut dhe mundeson regjistrimin e kategorive per produktet</h3>
        </div>
    </body>
</html>