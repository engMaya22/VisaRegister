@extends('layout.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('visa.create.step.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
  
                <div class="card">
                    <div class="card-header">Step 1: Personal Info</div>
  
                    <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" >Your Name:</label>
                                <input type="text" class="form-control" value="{{ $user->name ?? '' }}" id="name"  name="name">
                                @if ($errors->has('name'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('name') }}.</strong>
                                    </span>
                               @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" >Your Email:</label>
                                <input type="email" class="form-control" value="{{ $user->email ?? '' }}" id="email"  name="email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('email') }}.</strong>
                                    </span>
                               @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" >Your Password:</label>
                                <input type="password" class="form-control" value="{{ $user->password ?? '' }}" id="password"  name="password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('password') }}.</strong>
                                    </span>
                               @endif
                            </div>
                        </div>
  
                    <div class="card-footer  text-end" >
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection