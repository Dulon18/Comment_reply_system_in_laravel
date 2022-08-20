@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h4 class="text-center">Manage Posts</h4>
            <a href="{{ route('posts.create') }}" class="btn btn-success btn-sm mb-2" style="float: right"><i class="fas fa-plus"> Add </i></a>
            <table class="table table-bordered table-hover">
                <thead>
                    <th width="80px">No.</th>
                    <th>Title</th>
                    <th width="150px">Action</th>
                </thead>
                <tbody>
                @foreach($posts as $key=>$post)
                <tr>
                    <td>{{ $key+1}}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                            <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
   
            </table>
        </div>
    </div>
</div>
@endsection