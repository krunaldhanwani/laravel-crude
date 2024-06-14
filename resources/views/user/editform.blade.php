@extends('template.layout')
@section('content')
<form method="POST" action="{{route('student.update',$data->slug)}}">
    @csrf 
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" value={{$data->email}}>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label class="form-label" >Password</label>
      <input type="password" name="password" class="form-control" value="{{$data->password}}">
    </div>
     <input type="submit" value="Update" class="btn btn-primary">
  </form>
@endsection