@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"><a href="{{route('listings.create')}}" class="btn btn-success btn-sm">Add Listings</a></span></div>

                <div class="card-body">
                    <h3>Your Listings</h3>
                    @if (count($listings) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td><a href="{{route('listings.edit', $listing->id)}}" class="btn btn-secondary float-right">Edit</a></td>
                                    
                                    <td>

                                        <form action="{{route('listings.destroy', $listing->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            
                                            <button class="btn btn-danger">Delete</button>
                                            
                                        </form>
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <h3>No Listings Found</h3>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
