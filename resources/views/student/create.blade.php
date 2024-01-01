@extends('layouts.app')

@section('content')

    <section>
        <div class="container">

            <a href="{{ route('student.index') }}" class="btn btn-success mb-4"><i class="fa fa-home" aria-hidden="true"></i></a>

            <form action="{{ route('student.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter Full Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Full Name">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Enter Email Address</label>
                  <input type="email" class="form-control" name="email" placeholder="Email Address">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Enter Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>

                <button type="submit" class="btn btn-primary mt-4 w-100">Submit</button>
              </form>
        </div>
    </section>

@endsection