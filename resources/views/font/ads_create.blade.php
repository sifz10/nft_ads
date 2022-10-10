@extends('layouts.dashboard')
@section('page_title')
Create Ads
@endsection
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<div class="content-body">
    <div class="container-fluid">

        <div class="form-head d-flex mb-2 mb-sm-3 mb-lg-5 align-items-center">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600">Step 1: Ad Details</h2>
                <div>
                    <a href="{!! route('create.ads') !!}" class="fs-18 text-primary font-w600">Campaign / </a>
                    <a href="javascript:void(0);" class="fs-18">Add new campaign</a>
                </div>
            </div>
            <div>
                <a href="{!! route('targeting.ads') !!}" class="btn btn-primary ml-3">Next</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-xl-12">
                                    <label class="text-black font-w500 mb-3">Ad Name</label><span class="text-danger ml-1">*</span>
                                    <input type="text" class="form-control" placeholder="Promotion Ads">
                                </div>
                                <div class="form-group col-xl-12">
                                    <label class="text-black font-w500 mb-3">Ad Title</label><span class="text-danger ml-1">*</span>
                                    <input type="text" class="form-control" placeholder="Get 70% OFF Discount from Westoreid">
                                </div>
                                <div class="form-group col-xl-12">
                                    <label class="text-black font-w500 mb-3">Url</label><span class="text-danger ml-1">*</span>
                                    <input type="text" class="form-control" placeholder="https://example.com/">
                                </div>
                                <div class="form-group col-xl-12">
                                    <label class="text-black font-w500 mb-3">Price</label><span class="text-danger ml-1">*</span>
                                    <input type="text" class="form-control" placeholder="0.03 BNB">
                                </div>
                                <div class="form-group col-xl-12">
                                    <label class="text-black font-w500 mb-3">Image (1240x100)</label><span class="text-danger ml-1">*</span>
                                    <input type="file" accept="image/*" onchange="loadBanner(event)" class="form-control">
                                    <br>
                                    <label for="">Ad Preview</label>
                                    <img id="banner" height="100" width="1170" style="max-width: 100%; overflow: hidden; vertical-align: middle; border: 1px black solid">
                                </div>
                                <div class="form-group col-xl-12">
                                    <label class="text-black font-w500 mb-3">Description</label><span class="text-danger ml-1">*</span>
                                    <textarea class="form-control" rows="13" placeholder="Write your ads description..."></textarea>
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
