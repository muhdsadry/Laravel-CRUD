@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Update Student Details</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('students.update', $students->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" value={{ $students->first_name }} />
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" value={{ $students->last_name }} />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value={{ $students->email }} />
            </div>
            <div class="text-center">
            <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;    
            <button type="submit" class="btn btn-primary">Update Details</button>
            </div>
        </form>
    </div>
</div>
@endsection