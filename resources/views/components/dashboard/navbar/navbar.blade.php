<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li @if(Route::is('dashboard')) class="mm-active active-no-child" @endif>
                <a class="has-arrow ai-icon" href="{!! route('dashboard') !!}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Ads</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./app-profile.html">Create Ads</a></li>
                        <li><a href="./app-profile.html">View Ads</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-controls-3"></i>
                        <span class="nav-text">Settings</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./chart-flot.html">Generel Settings</a></li>
                        <li><a href="./chart-chartjs.html">Ads</a></li>
                        <li><a href="./chart-morris.html">Users</a></li>
                        <li><a href="./chart-chartjs.html">Roles & Permissions</a></li>
                    </ul>
                </li>

        </ul>
        <div class="copyright">
            <p><strong>{{ env('APP_NAME') }} Dashboard</strong><br />© All Rights Reserved</p>
        </div>
    </div>
</div>
