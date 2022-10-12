@extends('layouts.dashboard')
@section('page_title')
Step 2: Targeting
@endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="content-body">
    <div class="container-fluid">
      @include('Alerts.alerts')

        <div class="form-head d-flex mb-2 mb-sm-3 mb-lg-5 align-items-center">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600">Step 2: Targeting</h2>
                <div>
                    <a href="{!! route('create.ads') !!}" class="fs-18 text-primary font-w600">Campaign / </a>
                    <a href="javascript:void(0);" class="fs-18">Targeting</a>
                </div>
            </div>
            <form action="{!! route('targeting.ads.save') !!}" method="post" >
              @csrf
              <input type="hidden" name="id" value="{{ $ads->id }}">
            <div>
                <button type="submit"  class="btn btn-primary ml-3">Next</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-xl-12">
                                    <label for="">Ad Preview</label>
                                    <img id="banner" src="{!! asset($ads->ads_banner) !!}" height="100" width="1170" style="max-width: 100%; overflow: hidden; vertical-align: middle; border: 1px black solid">
                                        <label class="text-black font-w500 mt-4">Set Daily Budget</label><span class="text-danger ml-1">*</span>
                                        <div class="col-md-12 mb-4">
                                            <label for="">Estimate Reach : </label>
                                            <p id="reach">2,000 People</p>
                                            <input type="hidden" name="ads_deaily_clicks" id="click_limits" value="2000">
                                            <div class="progress br-30">
                                              <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" id="bar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        <div class="btn-group budget-check mt-5" data-toggle="buttons">
                                            <label class="btn btn-outline-primary light btn-sm active" id="package1">
                                                <input type="radio" checked class="position-absolute invisible" name="ads_deaily_budget"  value="0.019"> Hobby 0,019 TDND
                                            </label>
                                            <label class="btn btn-outline-primary light btn-sm" id="package2">
                                                <input type="radio" class="position-absolute invisible" name="ads_deaily_budget" value="0.05">Full Ad Campaign 0,05 TDND
                                            </label>
                                            <label class="btn btn-outline-primary light btn-sm" id="package3">
                                                <input type="radio" class="position-absolute invisible" name="ads_deaily_budget" value="0.20"> Business 0,20 TDND
                                            </label>
                                            <label class="btn btn-outline-primary light btn-sm" id="package4">
                                                <input type="radio" class="position-absolute invisible" name="ads_deaily_budget" value="1"> Professional 1 TDND
                                            </label>
                                        </div>
                                     <br>
                                     <br>
                                     <br>
                                    <label class="text-black font-w500 mb-3">Referral Code</label>
                                    <input type="text" class="form-control" name="ads_referral_code" placeholder="Your add will be shown on referrer website only ...">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
$('#package1').click(function() {
  $('#bar').css({
      'width': '30%'
  });
  $('#reach').text('2,000 People');
  $('#click_limits').val('2000');
});
$('#package2').click(function() {
  $('#bar').css({
      'width': '50%'
  });
  $('#reach').text('5,000 People');
  $('#click_limits').val('5000');
});
$('#package3').click(function() {
  $('#bar').css({
      'width': '80%'
  });
  $('#reach').text('20,000 People');
  $('#click_limits').val('20000');
});
$('#package4').click(function() {
  $('#bar').css({
      'width': '100%'
  });
  $('#reach').text('50,000 People');
  $('#click_limits').val('50000');
});
</script>
@endsection
