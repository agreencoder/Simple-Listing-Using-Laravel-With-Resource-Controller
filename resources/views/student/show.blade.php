@extends('layouts.app')
@section('content')

    <section>
        <div class="container">
            
            <a href="{{ route('student.index') }}" class="btn btn-success mb-4"><i class="fa fa-home" aria-hidden="true"></i></a>

            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

@endsection
