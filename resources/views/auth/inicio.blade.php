@extends('layouts.login')
@section('title') Inicio de sesión @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="card text-white bg-primary mb-3">
                      
                      <div class="card-body my-0 py-5">
                        <h2>Login to Gaadiexpert</h2>
                        <p>Lorem ipsum please login with your ID</p>
                        <hr>
                        <ul >
                            <li>1. Benefits with us</li>
                            <li>1. Benefits with us</li>
                            <li>1. Benefits with us</li>
                            <li>1. Benefits with us</li>
                            <li>1. Benefits with us</li>
                        </ul>
                      </div>
                    </div>
                    
                </div>
                
                <div class="col-md-6">
                    <div class="card text-white bg-primary mb-3">
                      
                      <div class="card-body my-0 py-3">
                             <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Login to our site</h3>
                                    <p>Enter your username and password to log on:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn">Sign in!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                      </div>
                    </div>                    
                </div>
                
            </div>
        </div>
    </div>
</div>



@endsection
