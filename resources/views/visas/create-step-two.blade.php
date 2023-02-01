@extends('layout.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('visa.create.step.two.post') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">Residence Prefernces:</div>
  
                    <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="type">Room Type:</label><br>
                                <select name="type" id="type">
                                    <option value="work">For Work</option>
                                    <option value="study">For Study</option>
                                    <option value="tourism">For tourism</option>
                                </select>
                                @if ($errors->has('type'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('type') }}.</strong>
                                </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" >Date Of Arrival:</label>
                                <input type="datetime-local" value="{{ $residence->arrival_date ?? '' }}"  class="form-control" id="arrival_date" name="arrival_date"/>
                                @if ($errors->has('arrival_date'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('arrival_date') }}.</strong>
                                </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date Of Departure:</label>
                                <input type="datetime-local"   class="form-control" value="{{ $residence->departure_date?? '' }}" id="departure_date" name="departure_date"/>
                                @if ($errors->has('departure_date'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('departure_date') }}.</strong>
                                    </span>
                                @endif
                            </div>
  
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('visa.create.step.one') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6  text-end" >
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