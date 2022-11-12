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
var overlappingBarsChart = function(){
  //Overlapping bars on mobile
  var data = {
    labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
    series: [
      [{{ $day_today_click }}, {{ $day_one_click }}, {{ $day_two_click }}, {{ $day_three_click }}, {{ $day_four_click }}, {{ $day_five_click }}, {{ $day_six_click }}, {{ $day_seven_click }}, {{ $day_eight_click }}, {{ $day_nine_click }}],
      [{{ $day_today_view }}, {{ $day_one_view }}, {{ $day_two_view }}, {{ $day_three_view }}, {{ $day_four_view }}, {{ $day_five_view }}, {{ $day_six_view }}, {{ $day_seven_view }}, {{ $day_eight_view }}, {{ $day_nine_view }}]
    ]
    };
  var options = {
    seriesBarDistance: 10
  };
  var responsiveOptions = [
    ['screen and (max-width: 640px)', {
      seriesBarDistance: 5,
      axisX: {
      labelInterpolationFnc: function (value) {
        return value[0];
       }
      }
    }]
  ];
  new Chartist.Bar('#overlapping-bars', data, options, responsiveOptions);
}
var lineTooltipsChart = function(){
  //Line chart with tooltips

    new Chartist.Line('#line-chart-tooltips', {
    labels: ['0', '1', '2', '3', '4', '5', '6' , '7' , '8' , '9'],
    series: [
      {
      name: 'Ads Clicks',
      data: [{{ $day_today_click }}, {{ $day_one_click }}, {{ $day_two_click }}, {{ $day_three_click }}, {{ $day_four_click }}, {{ $day_five_click }}, {{ $day_six_click }}, {{ $day_seven_click }}, {{ $day_eight_click }}, {{ $day_nine_click }}]
    },
      {
      name: 'Ads View',
      data: [{{ $day_today_view }}, {{ $day_one_view }}, {{ $day_two_view }}, {{ $day_three_view }}, {{ $day_four_view }}, {{ $day_five_view }}, {{ $day_six_view }}, {{ $day_seven_view }}, {{ $day_eight_view }}, {{ $day_nine_view }}]
      }
    ]
    },
      {
    plugins: [
      Chartist.plugins.tooltip()
    ]
    }
    );

    var $chart = $('#line-chart-tooltips');

    var $toolTip = $chart
    .append('<div class="tooltip"></div>')
    .find('.tooltip')
    .hide();

    $chart.on('mouseenter', '.ct-point', function() {
    var $point = $(this),
      value = $point.attr('ct:value'),
      seriesName = $point.parent().attr('ct:series-name');
    $toolTip.html(seriesName + '<br>' + value).show();
    });

    $chart.on('mouseleave', '.ct-point', function() {
    $toolTip.hide();
    });

    $chart.on('mousemove', function(event) {
    $toolTip.css({
      left: (event.offsetX || event.originalEvent.layerX) - $toolTip.width() / 2 - 10,
      top: (event.offsetY || event.originalEvent.layerY) - $toolTip.height() - 40
    });
    });

}
var flotLine1 = function(){
  var newCust = [[0, {{ $day_nine_view }}], [1, {{ $day_eight_view }}], [2, {{ $day_seven_view }}], [3, {{ $day_six_view }}], [4, {{ $day_five_view }}], [5, {{ $day_four_view }}], [6, {{ $day_three_view }}], [7, {{ $day_two_view }}], [8, {{ $day_one_view }}], [9, {{ $day_today_view }}]];
  var retCust = [[0, {{ $day_nine_click }}], [1, {{ $day_eight_click }}], [2, {{ $day_seven_click }}], [3, {{ $day_six_click }}], [4, {{ $day_five_click }}], [5, {{ $day_four_click }}], [6, {{ $day_three_click }}], [7, {{ $day_two_click }}], [8, {{ $day_one_click }}], [9, {{ $day_today_click }}]];

  var plot = $.plot($('#flotLine1'), [
    {
      data: newCust,
      label: 'Ads View',
      color: '#52b141'
    },
    {
      data: retCust,
      label: 'Ads Clicks',
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
