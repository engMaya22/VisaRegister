@extends('layout.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('visa.create.step.one.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
  
                <div class="card">
                    <div class="card-header">Step 1: Visa Info</div>
  
                    <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" >NickName:</label>
                                <input type="text" class="form-control" id="nickname" value="{{ $visa->nickname ?? '' }}" name="nickname">
                                @if ($errors->has('nickname'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('nickname') }}.</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Father Name:</label>
                                <input type="text"   class="form-control" value="{{ $visa->fatherName ?? '' }}" id="fatherName" name="fatherName"/>
                                @if ($errors->has('fatherName'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('fatherName') }}.</strong>
                                    </span>
                               @endif
                            </div>
   
                            <div class="mb-3">
                                <label class="form-label" >Date Of Birth:</label>
                                <input type="datetime-local"   class="form-control" value="{{ $visa->date_of_birth ?? '' }}" id="date_of_birth" name="date_of_birth"/>
                                @if ($errors->has('date_of_birth'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('date_of_birth') }}.</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" >Date Of Arrival:</label>
                                <input type="datetime-local"   class="form-control" value="{{ $visa->arrival_date ?? '' }}" id="arrival_date" name="arrival_date"/>
                                @if ($errors->has('arrival_date'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('"arrival_date') }}.</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Personal Image:</label>
                                <input type="file"   class="form-control" id="personal_image" name="personal_image"/>
                                @if ($errors->has('personal_image'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('personal_image') }}.</strong>
                                </span>
                               @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Passport Image:</label>
                                <input type="file"   class="form-control" id="passport_image" name="passport_image"/>
                                @if ($errors->has('passport_image'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('passport_image') }}.</strong>
                                    </span>
                               @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" >Proffession:</label>
                                <input type="text"   class="form-control" id="proffession" value="{{ $visa->proffession?? '' }}"  name="proffession"/>
                                @if ($errors->has('proffession'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('proffession') }}.</strong>
                                    </span>
                                @endif
                            </div>
                          
                    </div>
  
                    <div class="card-footer text-right">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('visa.create.step') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6  text-end">
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection