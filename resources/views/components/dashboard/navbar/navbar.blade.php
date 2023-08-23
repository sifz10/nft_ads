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
                        <li><a href="{!! route('create.ads') !!}">Create Ads</a></li>
                        <li><a href="{!! route('dashboard.index.ads') !!}">View Ads</a></li>
                    </ul>
                </li>
                @if (Auth::user()->role == "Admin")

                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-controls-3"></i>
                        <span class="nav-text">Settings</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{!! route('settings.index') !!}">Generel Settings</a></li>
                        <li><a href="{!! route('trendings.index') !!}">Trending Chains</a></li>
                        <li><a href="{!! route('index.ads') !!}">Ads</a></li>
                        <li><a href="{!! route('index.users') !!}">Users</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="{!! route('ads.code') !!}" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" style="color: black" viewBox="" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                        <span class="nav-text">Ads Code</span>
                    </a>
                    </li>
                    @endif

        </ul>
        <div class="copyright">
            <p><strong>{{ env('APP_NAME') }} Dashboard</strong><br />© All Rights Reserved</p>
        </div>
    </div>
</div>
