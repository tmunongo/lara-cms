@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Profile</div>

                <div class="card-body">
                    @include('partials.errors')
                    <form action="{{ route('users.update-profile') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">    
                    </div>

                    <div class="form-group">
                        <label for="about">About Me</label>
                        <textarea name="about" class="form-control" id="about" cols="5" rows="5" value="{{ $user->about }}">{{ $user->about }}</textarea>    
                    </div>

                    <button class="btn btn-success btn-md">
                        Update
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
