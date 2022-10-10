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
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status </th>
                                        <th>Wallet </th>
                                        <th>Active Ads</th>
                                        <th>Joined At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#54605</td>
                                        <td>John Dev</td>
                                        <td>example@gmail.com</td>
                                        <td><span class="badge light badge-success">Verified</span></td>
                                        <td>0x4.0x558572A544f6d6030b9a23C98d689D48D2EF4d9a</td>
                                        <td>3</td>
                                        <td>2011/04/25</td>
                                        <td>
                                          <a href="#" class="btn btn-success">Edit user</a>
                                          <a href="#" class="btn btn-danger">Block User</a>
                                        </td>
                                    </tr>
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
