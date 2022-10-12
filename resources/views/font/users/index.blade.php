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
                                        <th>Status </th>
                                        <th>Wallet </th>
                                        <th>Active Ads</th>
                                        <th>Joined At</th>
                                        <th rowspan="2" class="d-flex justify-content-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="m-auto">
                                    @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        @if ($user->email_varified_at)
                                        <td><span class="badge light badge-success">Verified</span></td>
                                        @else
                                        <td><span class="badge light badge-danger">Not Verified</span></td>
                                        @endif
                                        <td>0x4.0x558572A544f6d6030b9a23C98d689D48D2EF4d9a</td>
                                        <td>3</td>
                                        <td>{{ $user->created_at->format('Y-m-d') }}</td>
                                        <td>
                                            <a href="#" class="btn btn-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="feather feather-edit">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                              </a>

                                          </td>
                                          <td>
                                            <a href="#" class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                  class="feather feather-trash-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                              </a>
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
