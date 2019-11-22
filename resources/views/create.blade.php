@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listing <span class="float-right"><a class="btn btn-secondary" href="/home">Go Back</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="/listings">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address">
                        </div>
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="text" class="form-control" name="website" id="website" placeholder="Enter your website">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter your phone">
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio:</label>
                            <input type="text" class="form-control" name="bio" id="bio" placeholder="Enter your bio">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
@endsection