@extends('students.layout')

@section('content')
<div class="pull-left">
      <h2>student crud </h2>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('students.create')}}">create new student</a>
            </div>
        </div>
    </div>
    @if($message= \Illuminate\Support\Facades\Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Course</th>
            <th>Free</th>
            <th width="280px">Action</th>

        </tr>

    @foreach($students as $student)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$student->studname}}</td>
            <td>{{$student->course}}</td>
            <td>{{$student->free}}</td>
            <td>

                <form action="{{route('$students.destroy',$student->id)}}" method="POST">
                    <a class="btn btn-info" href="{{route('$students.show',$students->id)}}">show</a>
                    <a class="btn btn-primary"href="{{route('$students.edit',$students->id)}}">Edit</a>

                    @csrf
                    @method('Delete')

                    <button type="button" class="btn btn-danger"></button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
