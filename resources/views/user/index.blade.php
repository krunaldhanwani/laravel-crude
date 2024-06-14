@extends('template.layout')
@section('content')
<table class="table table-bordered">
    <tr>
        <thead>
            <th>
                id 
            </th>
            <th>
                email 
            </th>
            <th>
                password 
            </th>
        </thead>
       
    </tr>
    <tbody>
        @forelse($data as $item)
        <tr>
            <td>
                {{$item->id}}
            </td>
            <td>
                {{$item->email}}
            </td>
            <td>
                {{$item->password}}
            </td>
            <td>
                {{-- <a href="{{route('student.destroy' ,$item->id) }}" class="btn btn-danger">Delete</a> --}}
                <form method="POST" action="{{route('student.destroy', $item->slug)}}">
                    @csrf
                    @method('Delete')
                    <input type="submit" class="btn btn-danger" value="delete">
                </form>
                
            </td>
            <td>
                <a href="{{route('student.edit' ,$item->slug) }}" class="btn btn-danger">Edit</a>
                {{-- <form method="POST" action="{{route('student.destroy', $item->id)}}">
                    @csrf
                    @method('Delete')
                    <input type="submit" class="btn btn-danger" value="edit">
                </form> --}}
                
            </td>
            <td>
                <a href="{{route('student.show' ,$item->slug) }}" class="btn btn-danger">Show</a>
                {{-- <form method="POST" action="{{route('student.destroy', $item->id)}}">
                    @csrf
                    @method('Delete')
                    <input type="submit" class="btn btn-danger" value="edit">
                </form> --}}
                
            </td>
        </tr>
    @empty
        <h1>data is empty</h1>
    @endempty
    </tbody>
    
</table>
@endsection