@extends('layouts.admin_layout')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Edit</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
                <h2>Edit about page</h2>
                <form action="{{route('pages.abouts.update',$about->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT')}}
                    <div class="row">
                        <div class="form-group col-md-3 mt-3">
                            <h3>Image</h3>
                            <img style="height: 30vh" src="{{url($about->image)}}" class="img-thumbnail">
                            <input class="mt-3" type="file" name="image">
                        </div>
                        <div class="form-group col-md-4 mt-3">
                            <div class="mb-3">
                                <label for="title"><h4>Title</h4></label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$about->title}}">
                            </div>
                        </div>
                        <div class="form-group col-md-6 mt-3">
                            <h3>Description</h3>
                            <textarea class="form-control" name="description" rows="5">{{$about->description}}</textarea>
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary my-5">
                </form>
            </div>
            <div style="height: 100vh"></div>
    </main>
    </div>
@endsection
