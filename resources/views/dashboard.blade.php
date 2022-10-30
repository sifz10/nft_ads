@extends('layouts.dashboard')
@section('page_title')
Dashboard
@endsection
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-1">Dashboard</h2>
                <p class="mb-0">Welcome <b>{{ Auth::user()->name }}</b> to {{ env("APP_NAME") }} Dashboard</p>
            </div>
            <div class="d-none d-lg-flex align-items-center">
                <div class="text-right">
                    <h3 class="fs-20 text-black mb-0">{{ \Carbon\Carbon::now()->format("h:m A") }}</h3>
                    <span class="fs-14">{{ \Carbon\Carbon::now()->format("D") }}, {{ \Carbon\Carbon::now()->format("d M Y") }}</span>
                </div>
                <a class="ml-4 text-black p-3 rounded border text-center width60" href="#">
                    <i class="las la-cog scale5"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xxl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ads Overview</h4>
                            </div>
                            <div class="card-body">
                                <div id="flotLine1" class="flot-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xxl-12">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ads Clicks</h4>
                            </div>
                            <div class="card-body">
                                <div id="line-chart-tooltips" class="ct-chart ct-golden-section chartlist-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ads Views</h4>
                            </div>
                            <div class="card-body">
                                <div id="overlapping-bars" class="ct-chart ct-golden-section chartlist-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Your ads</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                          <table id="example4" class="display min-w850">
                              <thead>
                                  <tr>
                                      <th>Ads ID</th>
                                      <th>Title</th>
                                      <th>Link</th>
                                      <th>Budget </th>
                                      <th>Status </th>
                                      <th>Date</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($ads as $key => $ad)
                                  <tr>
                                      <td>{{ $ad->ads_id }}</td>
                                      <td>{{ $ad->ads_title }}</td>
                                      <td>{{ $ad->ads_url }}</td>
                                      <td>{{ $ad->ads_price }} (tDND)</td>
                                      @if ($ad->status == "Inactive")
                                        <td>
                                          <a class="btn btn-sm btn-danger" href="{!! route('payments.ads', $ad->id) !!}">
                                            <small>Pay Now</small>
                                          </a>
                                        </td>
                                      @else
                                        <td><span class="badge light badge-success">Active</span></td>
                                      @endif
                                      <td>{{ $ad->created_at->format('Y/d/m'); }}</td>
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

<script type="text/javascript">
var flotLine1 = function(){
var newCust = [[0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0]];
var retCust = [[0, 1], [1, 2], [2, 5], [3, 3], [4, 5], [5, 6], [6, 9]];

var plot = $.plot($('#flotLine1'), [
  {
    data: newCust,
    label: 'New Customer',
    color: '#52b141'
  },
  {
    data: retCust,
    label: 'Returning Customer',
    color: '#ff285c'
  }
],
{
  series: {
    lines: {
      show: true,
      lineWidth: 1
    },
    shadowSize: 0
  },
  points: {
    show: false,
  },
  legend: {
    noColumns: 1,
    position: 'nw'
  },
  grid: {
    hoverable: true,
    clickable: true,
    borderColor: '#ddd',
    borderWidth: 0,
    labelMargin: 5,
    backgroundColor: 'transparent'
  },
  yaxis: {
    min: 0,
    max: 15,
    color: 'transparent',
    font: {
      size: 10,
      color: '#999'
    }
  },
  xaxis: {
    color: 'transparent',
    font: {
      size: 10,
      color: '#999'
    }
  }
});
}
</script>
@endsection
