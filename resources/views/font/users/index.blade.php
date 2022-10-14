@extends('layouts.dashboard')
@section('page_title')
Users Details
@endsection
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Users List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>User No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Email Verified</th>
                                        <th>Account Status</th>
                                        <th rowspan="2" class="d-flex justify-content-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="m-auto">
                                    @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        @if (!empty($user->email_verified_at))
                                        <td><span class="badge light badge-primary">Verified</span></td>
                                        @else
                                        <td><span class="badge light badge-danger">Not Verified</span></td>
                                        @endif
                                        @if ($user->user_blocked == 1)
                                        <td><span class="badge light badge-warning">Blocked</span></td>
                                        @else
                                        <td><span class="badge light badge-primary">Active</span></td>
                                        @endif
                                        <td>
                                            <div class="d-flex">
                                                <a href="{!! route('users.show', $user->id) !!}" title="Users Details" class="btn btn-info shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>

                                                <a href="{!! route('users.edit', $user->id) !!}" title="Edit Users" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-edit"></i></a>

                                                @if ($user->user_blocked == 1)
                                                  <a href="{!! route('users.blocked', $user->id) !!}" title="Unblock user" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-unlock"></i></a>
                                                @else
                                                  <a href="{!! route('users.blocked', $user->id) !!}" title="Block user" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-lock"></i></a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
