@extends('layouts.app')
@extends('layouts.message')
@section('content')

    <section>
        
        <div class="container">

            <a href="{{ route('student.create') }}" class="btn btn-success">Add Student</a>
            <table class="table table-striped">

                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>

                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td><a class="btn btn-primary" href="{{ route('student.show', $student->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                        <td><a class="btn btn-warning" href="{{ route('student.edit', $student->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                        <td>
                            <form action="{{ route('student.destroy', $student->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                            </form>
                            {{-- <a class="btn btn-danger" href="{{ route('student.destroy', $student->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </section>


@endsection
