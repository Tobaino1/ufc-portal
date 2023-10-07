
@extends('layouts.landing')

@section('content')

          @section('content')
<body>
<div class="mt-10 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-6">
                        <!-- <div class="p-2"> -->
                            <div align="center">
                                <img src="{{ 'storage/UFC LOGO.jpg'}}" height="130" width="130" />  
                                <h6 style="color: blue"> UNIFICATION FOOTBALL CLUB PLAYER TRYOUT REGISTRATION FORM </h6>  
                                <div class="card-body">

  

                        @if(Session::has('success'))

                            <div class="alert alert-success">

                                {{Session::get('success')}}

                            </div>

                        @endif

                     

                        <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">

                            {{ csrf_field() }}

                              

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <strong>Name:</strong>

                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">

                                        @if ($errors->has('name'))

                                            <span class="text-danger">{{ $errors->first('name') }}</span>

                                        @endif

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <strong>Email:</strong>

                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))

                                            <span class="text-danger">{{ $errors->first('email') }}</span>

                                        @endif

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <strong>Phone Number:</strong>

                                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ old('phone') }}">

                                        @if ($errors->has('phone'))

                                            <span class="text-danger">{{ $errors->first('phone') }}</span>

                                        @endif

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <strong>Gender (Male / Female):</strong>

                                        <input type="text" name="subject" class="form-control" placeholder="Gender" value="{{ old('subject') }}">

                                        @if ($errors->has('subject'))

                                            <span class="text-danger">{{ $errors->first('subject') }}</span>

                                        @endif

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <strong>Address:</strong>

                                        <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>

                                        @if ($errors->has('message'))

                                            <span class="text-danger">{{ $errors->first('message') }}</span>

                                        @endif

                                    </div>  

                                </div>

                            </div>

                     

                            <div class="form-group text-center">

                                <button class="btn btn-success btn-submit">Submit</button>
                            </div>

                        </form>

                   

</body>

        @include ('layouts.footer') 
        @endsection