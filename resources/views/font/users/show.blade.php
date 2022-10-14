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
                        <h4 class="card-title">Users Details </h4>
                        <a href="{!! route('users.edit', $user->id) !!}" class="btn btn-sm btn-info">Edit</a>
                    </div>
                    <div class="card-body">
                        <div class="basic-list-group">
                            <ul class="list-group">
                                <li class="list-group-item active"> <b>Name : </b> {{ $user->name }} </li>
                                <li class="list-group-item"> <b> Email : </b> {{ $user->email }}  </li>
                                <li class="list-group-item"> <b> Email Varified : </b>
                                  @if ($user->email_varified_at)
                                  <span class="badge light badge-success">Verified</span>
                                  @else
                                  <span class="badge light badge-danger">Not Verified</span>
                                  @endif
                                </li>
                                <li class="list-group-item"> <b> Account Type : </b> {{ $user->socialmedia->account_type }}  </li>
                                <li class="list-group-item"> <b> Wallet  : </b> {{ $user->socialmedia->wallet }}  </li>
                                <li class="list-group-item"> <b> Facebook  : </b> {{ $user->socialmedia->facebook_link }}  </li>
                                <li class="list-group-item"> <b> Twitter  : </b> {{ $user->socialmedia->twitter_link }}  </li>
                                <li class="list-group-item"> <b> Instagram  : </b> {{ $user->socialmedia->instagram_link }}  </li>
                                <li class="list-group-item"> <b> Ads By  {{ $user->name }} : </b> <a href="{!! route('users.show.ads_by', [$user->name, $user->id]) !!}"> {{ $user->ads->count() }} Ads </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
