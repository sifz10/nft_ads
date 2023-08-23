@extends('layouts.dashboard')
@section('page_title')
Dashboard
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
    <div class="col-12">
    <h1>Trending Details</h1>
    <p><strong>Name:</strong> {{ $trending->trending_name }}</p>
    <p><strong>Link:</strong> {{ $trending->link }}</p>
    <p><strong>Status:</strong> {{ $trending->status }}</p>
    <a href="{{ route('trendings.edit', $trending->id) }}" class="btn btn-sm btn-info">Edit</a>
    <form action="{{ route('trendings.destroy', $trending->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    </form>
</div>
</div>
</div>
@endsection
