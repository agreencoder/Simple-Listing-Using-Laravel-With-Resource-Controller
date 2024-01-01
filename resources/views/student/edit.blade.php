@extends('layouts.app')

@section('content')

    <div class="container">

        <a href="{{ route('student.index') }}" class="btn btn-success mb-4"><i class="fa fa-home" aria-hidden="true"></i></a>
        
        <form action="{{ route('student.update', $student->id ) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputEmail1">Enter Full Name</label>
              <input type="text" class="form-control" name="name" value="{{ $student->name }}" placeholder="Full Name">
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Enter Email Address</label>
              <input type="email" class="form-control" name="email" value="{{ $student->email }}" placeholder="Email Address">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Enter Password</label>
                <input type="password" class="form-control" name="password" value="{{ $student->password }}" placeholder="Password">
              </div>

            <button type="submit" class="btn btn-primary mt-4 w-100">Update</button>
          </form>
    </div>

@endsection