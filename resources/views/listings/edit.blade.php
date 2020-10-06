@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Create Listings</div>
                <div class="card-body">
                    <form action="{{ route('listings.update',$listing->id) }}" method="post" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="form-group sm">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$listing->name}}">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{$listing->email}}">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="{{$listing->address}}">
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" name="phone" class="form-control" value="{{$listing->phone}}">
                            </div>

                            <div class="form-group">
                                <label>Bio</label>
                                <textarea class="form-control" name="bio" >{{$listing->bio}}</textarea>
                            </div>

                            {{-- <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" >
                            </div> --}}

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Edit</button>
                            </div>
                        </form><!-- end of form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
