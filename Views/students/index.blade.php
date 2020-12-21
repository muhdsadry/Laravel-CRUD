@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success text-center">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">
<br />
    <h3 class="display-5 text-center">Student List</h3>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>No</td>
          <td>Name</td>
          <td>Email</td>
          <td colspan="2" class="text-center">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $count => $student)
        <tr>
            <td>{{++$count}}</td>
            <td>{{$student->first_name}} {{$student->last_name}}</td>
            <td>{{$student->email}}</td>
            <td class="text-center">
                <a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td class="text-center">
                <form action="{{ route('students.destroy', $student->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="text-center">
    <a style="margin: 19px;" href="{{ route('students.create')}}" class="btn btn-primary">New Student Details</a>
    </div>
<div>
</div>
@endsection

