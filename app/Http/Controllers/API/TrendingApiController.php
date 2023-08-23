<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Trending;
use Illuminate\Http\Request;

class TrendingApiController extends Controller
{
    public function getTopActiveTrendings()
    {
        $topTrendings = Trending::where('status', 'Active')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return response()->json($topTrendings);
    }
}
