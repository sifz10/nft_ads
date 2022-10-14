@extends('layouts.dashboard')
@section('page_title')
Your Ads
@endsection
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ads Details </h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-list-group">
                            <ul class="list-group">
                                <li class="list-group-item active"> <b>Ad Name : </b> {{ $ads->ads_name }} </li>
                                <li class="list-group-item"> <b>Ad Unique ID : </b> {{ $ads->ads_id }}  </li>
                                <li class="list-group-item"> <b>Ad Title : </b> {{ $ads->ads_title }}  </li>
                                <li class="list-group-item"> <b>Ad URL : </b> {{ $ads->ads_url }}  </li>
                                <li class="list-group-item"> <b>Ad Budget : </b> {{ $ads->ads_price }} tDBD </li>
                                <li class="list-group-item"> <b>Ad Banner : </b> {{ $ads->ads_banner }}  </li>
                                <li class="list-group-item"> <b>Ad Description : </b> {{ $ads->ads_desc }}  </li>
                                <li class="list-group-item"> <b>Ad Daily Budget : </b> {{ $ads->ads_deaily_budget }} tDND </li>
                                <li class="list-group-item"> <b>Ad Daily Clicks : </b> {{ $ads->ads_deaily_clicks }}  </li>
                                <li class="list-group-item"> <b>Ad Referral Website : </b> {{ $ads->ads_referral_code }}  </li>
                                <li class="list-group-item"> <b>TxHash : </b> {{ $ads->txHash }}  </li>
                                <li class="list-group-item"> <b>Status : </b> {{ $ads->status }}  </li>
                                <li class="list-group-item"> <b>Created At : </b> {{ $ads->created_at }}  </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
