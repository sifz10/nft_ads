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
                                        <th>Website </th>
                                        <th>Status </th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Tiger Nixon</td>
                                        <td>#54605</td>
                                        <td>Library</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2011/04/25</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Garrett Winters</td>
                                        <td>#54687</td>
                                        <td>Library</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2011/07/25</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Ashton Cox</td>
                                        <td>#35672</td>
                                        <td>Tuition</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2009/01/12</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Cedric Kelly</td>
                                        <td>#57984</td>
                                        <td>Annual</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2012/03/29</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Airi Satou</td>
                                        <td>#12453</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2008/11/28</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>Brielle Williamson</td>
                                        <td>#59723</td>
                                        <td>Tuition</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2012/12/02</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>Herrod Chandler</td>
                                        <td>#98726</td>
                                        <td>Tuition</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2012/08/06</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>Rhona Davidson</td>
                                        <td>#98721</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2010/10/14</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>09</td>
                                        <td>Colleen Hurst</td>
                                        <td>#54605</td>
                                        <td>Annual</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2009/09/15</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Sonya Frost</td>
                                        <td>#98734</td>
                                        <td>Tuition</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2008/12/13</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Jena Gaines</td>
                                        <td>#12457</td>
                                        <td>Tuition</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2008/12/19</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Quinn Flynn</td>
                                        <td>#36987</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2013/03/03</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Charde Marshall</td>
                                        <td>#98756</td>
                                        <td>Tuition</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2008/10/16</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Haley Kennedy</td>
                                        <td>#98754</td>
                                        <td>Library</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2012/12/18</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>#65248</td>
                                        <td>Annual</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2010/03/17</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Michael Silva</td>
                                        <td>#75943</td>
                                        <td>Tuition</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2012/11/27</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Paul Byrd</td>
                                        <td>#87954</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2010/06/09</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Gloria Little</td>
                                        <td>#98746</td>
                                        <td>Tuition</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2009/04/10</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Bradley Greer</td>
                                        <td>#98674</td>
                                        <td>Annual</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2012/10/13</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Dai Rios</td>
                                        <td>#69875</td>
                                        <td>Tuition</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2012/09/26</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Jenette Caldwell</td>
                                        <td>#54678</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2011/09/03</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Yuri Berry</td>
                                        <td>#98756</td>
                                        <td>Tuition</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2009/06/25</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Caesar Vance</td>
                                        <td>#86754</td>
                                        <td>Tuition</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2011/12/12</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Doris Wilder</td>
                                        <td>#34251</td>
                                        <td>Annual</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2010/09/20</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Angelica Ramos</td>
                                        <td>#65874</td>
                                        <td>Tuition</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2009/10/09</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Gavin Joyce</td>
                                        <td>#54605</td>
                                        <td>Female</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2010/12/22</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Jennifer Chang</td>
                                        <td>#54605</td>
                                        <td>Tuition</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2010/11/14</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Brenden Wagner</td>
                                        <td>#45687</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2011/06/07</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Fiona Green</td>
                                        <td>#23456</td>
                                        <td>Tuition</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2010/03/11</td>
                                        <td><strong>120$</strong></td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Shou Itou</td>
                                        <td>#54605</td>
                                        <td>Annual</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2011/08/14</td>
                                        <td><strong>120$</strong></td>
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
