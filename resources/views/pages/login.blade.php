@extends('layouts.app')
@extends('layouts.nav')
@section('content')
<div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="Submit" name="Submit" class="btn btn-info btn-md" value="Submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="calander">
            <div class="row border">
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Mon 1/27</b>
                    </div>
                    <div class="day-content">
                        <div class="test" style="border-color: #0f6674">
                            World History
                        </div>
                        <div class="test" style="border-color: #990066">
                            Latin
                        </div>
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Tue 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Wed 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Thu 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Fri 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
            </div>
            <div class="row border">
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Mon 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Tue 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Wed 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Thu 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
                <div class="col-md border bg-light">
                    <div class="day-date">
                        <b>Fri 1/27</b>
                    </div>
                    <div class="day-content">
                        test content goes here
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

