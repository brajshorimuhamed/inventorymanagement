<!DOCTYPE html>
<html>
    <head>
        <title>Login System in Laravel PHP</title>
        @extends('layout.head')
        <head>
            <style type="text/css">
                .box{
                    width:600px;
                    margin:0 auto;
                    border:1px solid #ccc;
                }
            </style>
        </head>
    </head>
    <body>
        <br />
        <div class="container box">
            <h3 align="center">Login System in Laravel PHP</h3>
            <br />
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif            
            <form method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Enter Email</label>
                    <input type="email" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" class="btn btn-primary" value="Login" />
                    <input type="reset" name="Clear" class="btn btn-danger" value="Clear"/>
                </div>
            </form>
        </div>
    </body>
</html>