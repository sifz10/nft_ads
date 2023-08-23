@extends('layouts.dashboard')
@section('page_title')
Trendings
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Your ads</h4>
                <a href="{!! route('trendings.create') !!}" class="btn btn-primary">Create Trendings</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table id="example4" class="display min-w850">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($trendings as $trending)
                            <tr>
                                <td>{{ $trending->trending_name }}</td>
                                <td>{{ $trending->link }}</td>
                                <td>{{ $trending->status }}</td>
                                <td>
                                    <a href="{{ route('trendings.show', $trending->id) }}" class="btn btn-sm btn-info">View</a>
                                    <a href="{{ route('trendings.edit', $trending->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('trendings.destroy', $trending->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
  </div>
</div>
@endsection
