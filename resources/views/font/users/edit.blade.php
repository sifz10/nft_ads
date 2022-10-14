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
                      <h4 class="card-title">Users Edit </h4>
                      <a href="{!! route('index.users') !!}" class="btn btn-sm btn-danger">Back</a>
                  </div>
                  <script>
                    var loadFileOutput = function(event) {
                      var editoutput = document.getElementById('editoutput');
                      editoutput.src = URL.createObjectURL(event.target.files[0]);
                      editoutput.onload = function() {
                        URL.revokeObjectURL(editoutput.src) // free memory
                      }
                    };
                  </script>
                  <div class="card-body">
                    <form action="{!! route('users.update') !!}" method="post" enctype="multipart/form-data">
                      @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <label for="">Name</label>
                    <input type="text" class="form-control mb-3" name="name" value="{{ $user->name }}">
                    <label for="">Email</label>
                    <input type="text" disabled class="form-control mb-3" name="email" value="{{ $user->email }}">
                    <img id="editoutput" src="{!! asset($user->profile_picture) !!}" width="140" height="140" style="border: 1px solid black;border-radius: 50%">
                    <br>
                    <br>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" name="avatar" onchange="loadFileOutput(event)" class="custom-file-input">
                            <label class="custom-file-label">Profile Image</label>
                        </div>
                    </div>
                    @php
                      $user_social = $user->socialmedia;
                    @endphp

                    <label for="">Wallet</label>
                    <input type="text" class="form-control mb-3" name="wallet" value="@if($user_social) {{ $user_social->wallet }} @endif">
                    <label for="">Instagram</label>
                    <input type="text" class="form-control mb-3" name="instagram_link" value="@if($user_social) {{ $user_social->instagram_link }} @endif ">
                    <label for="">Twitter</label>
                    <input type="text" class="form-control mb-3" name="twitter_link" value="@if($user_social) {{ $user_social->twitter_link }} @endif">
                    <label for="">Facebook</label>
                    <input type="text" class="form-control mb-3" name="facebook_link" value="@if($user_social) {{ $user_social->facebook_link }} @endif">
                    <button type="submit" class="btn btn-primary mt-3" name="button">Update</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
