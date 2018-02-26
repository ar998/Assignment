@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-3 pr-3">
        <div class="card-title"><h1>Signup</h1>
            <p class="lead">Please use this form to Signup</p></div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="inputEmail3">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputname3" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @endsection