@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <br />
    <h3 class="display-5 text-center">Add New Student Details</h3>
  <div>
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
      <form method="post" action="{{ route('students.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>
          <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="row justify-content-center">
          <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;                        
          <button type="submit" class="btn btn-primary text-center">Save Details</button>
          </div>
      </form>
  </div>
</div>
</div>
@endsection