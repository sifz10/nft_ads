@extends('layouts.dashboard')
@section('page_title')
Dashboard
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
    <div class="col-12">
    <h1>Create New Trending</h1>
    <form action="{{ route('trendings.store') }}" method="POST">
        @csrf
        <label for="trending_name">Trending Name:</label>
        <input type="text" class="form-control mb-3" name="trending_name" required>

        <label for="link">Link:</label>
        <input type="url" class="form-control mb-3" name="link">

        <label for="status">Status:</label>
        <select name="status" class="form-control mb-3" id="">
            <option value="">Active</option>
            <option value="">Inactive</option>
        </select>

        <button type="submit" class="btn btn-primary">Create Trending</button>
    </form>
</div>
</div>
</div>
@endsection
