@extends('layouts.app')
@section('main-app')
    <div class="card mt-2">
        <div class="card-header">
            <div class="mb-3">
                <h1 class="text-center">Search with relationships in laravel-10</h1>
            </div>
        </div>
        <div class="card-body">
            <div class="row py-2">
                <div class="col-md-6">
                    <div>
                        <a href="" class="btn btn-primary">Add new post</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <form action="/search" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" value="{{isset($search) ? $search : ''}}" placeholder="Search posts...">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Short Description</th>
                            <th scope="col">Post By</th>
                            <th scope="col">Post Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($posts as $key => $post )
                       <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->short_description}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->category->name}}</td>
                        <td>
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                       </tr>

                       @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- {{$posts->links()}} --}}
@endsection
