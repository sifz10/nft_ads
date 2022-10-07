@extends('layouts.dashboard')
@section('content')
  <div class="content-body">
      <!-- row -->
      <div class="container-fluid">
          <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
              <div class="mr-auto d-none d-lg-block">
                  <h2 class="text-black font-w600 mb-1">Dashboard</h2>
                  <p class="mb-0">Welcome to Eclan Ads Campaign Dashboard</p>
              </div>
              <div class="d-none d-lg-flex align-items-center">
                  <div class="text-right">
                      <h3 class="fs-20 text-black mb-0">09:62 AM</h3>
                      <span class="fs-14">Monday, 3 Augusut 2020</span>
                  </div>
                  <a class="ml-4 text-black p-3 rounded border text-center width60" href="#">
                      <i class="las la-cog scale5"></i>
                  </a>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-8 col-xxl-12">
                  <div class="row">
                      <div class="col-lg-6 col-sm-6">
                          <div class="card widget-stat ">
                              <div class="card-body p-4">
                                  <div class="media align-items-center">
                                      <div class="media-body">
                                          <p class="fs-18 mb-2 wspace-no">Total Campaign</p>
                                          <h1 class="fs-36 font-w600 text-black mb-0">67,124</h1>
                                      </div>
                                      <span class="ml-3 bg-primary text-white">
                                          <i class="flaticon-381-promotion"></i>
                                      </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                          <div class="card widget-stat">
                              <div class="card-body p-4">
                                  <div class="media align-items-center">
                                      <div class="media-body">
                                          <p class="fs-18 mb-2 wspace-no">Total Audience</p>
                                          <h1 class="fs-36 font-w600 d-flex align-items-center text-black mb-0">412,531</h1>
                                      </div>
                                      <span class="ml-3 bg-warning text-white">
                                          <i class="flaticon-381-user-7"></i>
                                      </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-12">
                          <div class="card">
                              <div class="card-body d-flex flex-wrap p-0">
                                  <div class="col-lg-6 col-sm-6  media spending-bx">
                                      <div class="spending-icon mr-4">
                                          <i class="fa fa-caret-up" aria-hidden="true"></i>
                                          <span class="fs-14">+5%</span>
                                      </div>
                                      <div class="media-body">
                                          <p class="fs-18 mb-2">Spends Today</p>
                                          <span class="fs-34 font-w600">$5,245</span>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-sm-6 media spending-bx pl-2">
                                      <div class="media-body text-right">
                                          <p class="fs-18 mb-2">Spends Yesterday</p>
                                          <span class="fs-34 font-w600">$4,567</span>
                                      </div>
                                      <div class="spending-icon ml-4">
                                          <i class="fa fa-caret-down" aria-hidden="true"></i>
                                          <span class="fs-14">-2%</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-12">
                          <div class="card" id="user-activity">
                              <div class="card-header pb-0 d-block d-sm-flex border-0">
                                  <h3 class="fs-20 text-black mb-0">Overview</h3>
                                  <div class="card-action card-tabs mt-3 mt-sm-0">
                                      <ul class="nav nav-tabs" role="tablist">
                                          <li class="nav-item">
                                              <a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">
                                                  Monthly
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" data-toggle="tab" href="#weekly" role="tab">
                                                  Weekly
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" data-toggle="tab" href="#today" role="tab">
                                                  Today
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <div class="tab-content" id="myTabContent">
                                      <div class="tab-pane fade show active" id="user" role="tabpanel">
                                          <canvas id="activity" class="chartjs"></canvas>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-12">
                          <div class="card">
                              <div class="card-header border-0 pb-0">
                                  <h3 class="fs-20 text-black mb-0">Goal Statistic</h3>
                                  <div class="dropdown ml-auto">
                                      <div class="btn-link" data-toggle="dropdown">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                  <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                  <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                              </g>
                                          </svg>
                                      </div>
                                      <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item text-black" href="javascript:;">Info</a>
                                          <a class="dropdown-item text-black" href="javascript:;">Details</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="card-body pt-3">
                                  <div class="mb-3" id="chartCircle"></div>
                                  <div class="row">
                                      <div class="col-sm-4 mb-sm-0 mb-3 media">
                                          <i class="lab la-instagram gs-icon border border-secondary text-secondary mr-3"></i>
                                          <div class="media-body">
                                              <p class="mb-1 font-w600">Instagram</p>
                                              <span class="fs-34 text-black font-w500">73%</span>
                                          </div>
                                      </div>
                                      <div class="col-sm-4 mb-sm-0 mb-3 media">
                                          <i class="lab la-facebook-f gs-icon border border-info text-info mr-3"></i>
                                          <div class="media-body">
                                              <p class="mb-1 font-w600">Facebook</p>
                                              <span class="fs-34 text-black font-w500">64%</span>
                                          </div>
                                      </div>
                                      <div class="col-sm-4 mb-sm-0 mb-3 media">
                                          <i class="lab la-twitter gs-icon border border-success text-success mr-3"></i>
                                          <div class="media-body">
                                              <p class="mb-1 font-w600">Twitter</p>
                                              <span class="fs-34 text-black font-w500">48%</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-xxl-12">
                  <div class="row">
                      <div class="col-lg-12 col-md-6 col-xxl-6">
                          <div class="card">
                              <div class="card-header border-0 pb-0">
                                  <h3 class="fs-20 text-black mb-0">Social Network Stats</h3>
                                  <div class="dropdown ml-auto">
                                      <div class="btn-link" data-toggle="dropdown">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                  <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                  <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                              </g>
                                          </svg>
                                      </div>
                                      <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item text-black" href="javascript:;">Info</a>
                                          <a class="dropdown-item text-black" href="javascript:;">Details</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <div class="media mb-4 align-items-center">
                                      <i class="lab la-instagram social-icon bg-secondary text-white mr-3"></i>
                                      <div class="media-body">
                                          <span class="text-black font-w600">Instagram</span>
                                          <div class="progress mt-3" style="height:10px;">
                                              <div class="progress-bar bg-secondary progress-animated" style="width: 55%; height:10px;" role="progressbar">
                                                  <span class="sr-only">55% Complete</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="media mb-4 align-items-center">
                                      <i class="lab la-facebook-f social-icon bg-info text-white mr-3"></i>
                                      <div class="media-body">
                                          <span class="text-black font-w600">Facebook</span>
                                          <div class="progress mt-3" style="height:10px;">
                                              <div class="progress-bar bg-info progress-animated" style="width: 40%; height:10px;" role="progressbar">
                                                  <span class="sr-only">40% Complete</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="media align-items-center">
                                      <i class="lab la-twitter social-icon bg-success text-white mr-3"></i>
                                      <div class="media-body">
                                          <span class="text-black font-w600">Twitter</span>
                                          <div class="progress mt-3" style="height:10px;">
                                              <div class="progress-bar bg-success progress-animated" style="width: 90%; height:10px;" role="progressbar">
                                                  <span class="sr-only">90% Complete</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="card-footer pt-0 text-center border-0">
                                  <a href="social-network-campaign.html">Show more<i class="fa fa-caret-down ml-3" aria-hidden="true"></i></a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-12 col-md-6 col-xxl-6">
                          <div class="card">
                              <div class="card-header border-0 pb-0">
                                  <h3 class="fs-20 text-black mb-0">Ads Engagement</h3>
                                  <div class="dropdown ml-auto">
                                      <div class="btn-link" data-toggle="dropdown">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                  <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                  <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                              </g>
                                          </svg>
                                      </div>
                                      <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item text-black" href="javascript:;">Info</a>
                                          <a class="dropdown-item text-black" href="javascript:;">Details</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="card-body px-2 pt-2">
                                  <div id="columnChart"></div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-12 col-md-12">
                          <div class="card">
                              <div class="card-header border-0  pb-0">
                                  <h3 class="fs-20 text-black mb-0">Summary Goal</h3>
                                  <div class="dropdown ml-auto">
                                      <div class="btn-link" data-toggle="dropdown">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                  <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                  <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                              </g>
                                          </svg>
                                      </div>
                                      <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item text-black" href="javascript:;">Info</a>
                                          <a class="dropdown-item text-black" href="javascript:;">Details</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <div>
                                      <div class="d-flex align-items-center pb-3 mb-3 border-bottom">
                                          <i class="lab la-instagram gs-icon bgl-secondary text-secondary mr-3"></i>
                                          <span class="text-black fs-16 font-w600">Instagram</span>
                                      </div>
                                      <div class="fs-14 mb-4">
                                          <ul class="d-flex justify-content-between pb-2">
                                              <li class="font-w500 text-dark">Ad Campaign</li>
                                              <li>6,788/8,000</li>
                                          </ul>
                                          <ul class="d-flex justify-content-between pb-2">
                                              <li class="font-w500 text-dark">Comments</li>
                                              <li>452/800</li>
                                          </ul>
                                          <ul class="d-flex justify-content-between pb-2">
                                              <li class="font-w500 text-dark">Likes</li>
                                              <li>8,325/10,000</li>
                                          </ul>
                                          <ul class="d-flex justify-content-between pb-2">
                                              <li class="font-w500 text-dark">Bookmarked</li>
                                              <li>5,622/5,000</li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex align-items-center pb-3 mb-3 border-bottom">
                                          <i class="lab la-facebook-f gs-icon bgl-info text-info mr-3"></i>
                                          <span class="text-black fs-16 font-w600">Facebook</span>
                                      </div>
                                      <div class="fs-14 mb-4">
                                          <ul class="d-flex justify-content-between pb-2">
                                              <li class="font-w500 text-dark">Ad Campaign</li>
                                              <li>6,788/8,000</li>
                                          </ul>
                                          <ul class="d-flex justify-content-between pb-2">
                                              <li class="font-w500 text-dark">Comments</li>
                                              <li>452/800</li>
                                          </ul>
                                          <ul class="d-flex justify-content-between pb-2">
                                              <li class="font-w500 text-dark">Likes</li>
                                              <li>8,325/10,000</li>
                                          </ul>
                                          <ul class="d-flex justify-content-between pb-2">
                                              <li class="font-w500 text-dark">Bookmarked</li>
                                              <li>5,622/5,000</li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="d-flex align-items-center pb-3 mb-3 border-bottom">
                                          <i class="lab la-twitter gs-icon bgl-success text-success mr-3"></i>
                                          <span class="text-black fs-16 font-w600">Twitter</span>
                                      </div>
                                      <div class="fs-14">
                                          <ul class="d-flex justify-content-between pb-2">
                                              <li class="font-w500 text-dark">Ad Campaign</li>
                                              <li>6,788/8,000</li>
                                          </ul>
                                          <ul class="d-flex justify-content-between pb-2">
                                              <li class="font-w500 text-dark">Comments</li>
                                              <li>452/800</li>
                                          </ul>
                                          <ul class="d-flex justify-content-between pb-2">
                                              <li class="font-w500 text-dark">Likes</li>
                                              <li>8,325/10,000</li>
                                          </ul>
                                          <ul class="d-flex justify-content-between pb-2">
                                              <li class="font-w500 text-dark">Bookmarked</li>
                                              <li>5,622/5,000</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="card-footer pt-0 border-0 text-center">
                                  <a href="social-network-campaign.html" class="text-primary">See More Reviews</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
