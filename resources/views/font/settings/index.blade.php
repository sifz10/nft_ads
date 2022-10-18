@extends('layouts.dashboard')
@section('page_title')
 General settings
@endsection
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<div class="content-body">
    <div class="container-fluid">

        <div class="form-head d-flex mb-2 mb-sm-3 mb-lg-5 align-items-center">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600">Settings </h2>
                <div>
                  <a href="{!! route('dashboard') !!}" class="fs-18 text-primary font-w600">Dashboard / </a>
                    <a href="javascript:void(0);" class="fs-18">General Settings</a>
                </div>
            </div>
            <form action="{!! route('settings.save') !!}" method="post" enctype="multipart/form-data">
            <div>
                <button type="submit" class="btn btn-primary ml-3">Save</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                          @csrf
                            <div class="form-row">
                                <div class="form-group col-xl-12">
                                    <label class="text-black font-w500 mb-3">Sitename</label><span class="text-danger ml-1">*</span>
                                    <input type="text" class="form-control" name="sitename" placeholder="Site Name" value="@if(!empty($settings->site_name)) {{ $settings->site_name }}@endif">
                                    <label class="text-black font-w500 mb-3">Meta Title</label><span class="text-danger ml-1">*</span>
                                    <input type="text" class="form-control" name="meta_title" placeholder="Meta title" value="@if(!empty($settings->meta_title)) {{ $settings->meta_title }} @endif">
                                    <label class="text-black font-w500 mb-3">Meta Description</label><span class="text-danger ml-1">*</span>
                                    <input type="text" class="form-control" name="meta_desc" placeholder="Meta Description" value="@if(!empty($settings->meta_desc)) {{ $settings->meta_desc }} @endif">
                                    <label class="text-black font-w500 mb-3">Tutorial Link</label><span class="text-danger ml-1">*</span>
                                    <input type="text" class="form-control" name="tutorial_link" placeholder="Tutorial Link" value="@if(!empty($settings->tutorial_link)) {{ $settings->tutorial_link }} @endif">
                                    <label class="text-black font-w500 mb-3">Favicons</label><span class="text-danger ml-1">*</span>
                                    <input type="file" class="form-control" name="favicons">
                                    <label class="text-black font-w500 mb-3">Logo</label><span class="text-danger ml-1">*</span>
                                    <input type="file" class="form-control" name="logo">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<script>
    var loadBanner = function(event) {
        var banner = document.getElementById('banner');
        banner.src = URL.createObjectURL(event.target.files[0]);
        banner.onload = function() {
            URL.revokeObjectURL(banner.src) // free memory
        }
    };
</script>
@endsection
