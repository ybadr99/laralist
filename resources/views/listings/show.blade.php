@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$listing->name}} <span class="float-right"><a href="{{route('listings.index')}}" class="btn btn-secondary btn-sm">Go Back</a></span></div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">{{$listing->address}}</li>
                        <li class="list-group-item">{{$listing->email}}</li>
                        <li class="list-group-item">{{$listing->phone}}</li>
                    </ul>
                    <hr>
                    <div class="well">
                        {{$listing->bio}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
