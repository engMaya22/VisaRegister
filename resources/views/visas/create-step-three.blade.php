@extends('layout.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('visa.create.step.three.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Review Details</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Your Name:</td>
                                    <td><strong>{{$user->name}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Your Email:</td>
                                    <td><strong>{{$user->email}}</strong></td>
                                </tr>
                                <tr>
                                    <td>NickName:</td>
                                    <td><strong>{{$visa->nickname}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Father Name:</td>
                                    <td><strong>{{$visa->fatherName}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Date Of Birth:</td>
                                    <td><strong>{{$visa->date_of_birth}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Date Of Arrival:</td>
                                    <td><strong>{{$visa->arrival_date}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Personal Image:</td>
                                    <td>
                                     <div>
                                        <img src="{{ asset($visa->personal_image)}}"  width="100" height="100"   alt="picture"/>
                                     </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Passport Image:</td>
                                    <td>
                                     <div>
                                        <img  src="{{ asset($visa->passport_image)}}" width="100" height="100" alt="picture"/>
                                     </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Proffession:</td>
                                    <td><strong>{{$visa->proffession}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Room Type:</td>
                                    <td><strong>{{$residence->type}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Date Of Arrival:</td>
                                    <td><strong>{{$residence->arrival_date}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Date Of Departure:</td>
                                    <td><strong>{{$residence->departure_date}}</strong></td>
                                </tr>
                            </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('visa.create.step.two') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6  text-end" >
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection