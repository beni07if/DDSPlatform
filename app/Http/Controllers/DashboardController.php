<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mill;
use App\Models\Agriplot;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $millss = Mill::all();
        $agriplots = Agriplot::all();
        $mills = DB::table('mills')
            ->count();
        $facilities = DB::table('refineries')
            ->count();
        $refineries = DB::table('refineries')
            ->where('facility_type', 'like', '%Refinery%')
            ->count();

        $millRegion = DB::table('mills')
        ->select('region', DB::raw('COUNT(*) as count'))
        ->groupBy('region')
        ->get();
        $millRegionArray = $millRegion->toArray();

        $millRegion2 = DB::table('mills')
        ->select('region', DB::raw('COUNT(*) as count'))
        ->groupBy('region')
        ->get();
        $millRegionArray2 = $millRegion2->toArray();

        $millType = DB::table('mills')
        ->select('mill_type', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_type')
        ->get();
        $millTypeArray = $millType->toArray();

        $millType2 = DB::table('mills')
        ->select('mill_type', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_type')
        ->get();
        $millTypeArray2 = $millType2->toArray();

        $millRspoCertified = DB::table('mills')
        ->select('rspo_certified', DB::raw('COUNT(*) as count'))
        ->groupBy('rspo_certified')
        ->get();
        $millRspoCertifiedArray = $millRspoCertified->toArray();

        $millRspoCertified2 = DB::table('mills')
        ->select('rspo_certified', DB::raw('COUNT(*) as count'))
        ->groupBy('rspo_certified')
        ->get();
        $millRspoCertifiedArray2 = $millRspoCertified2->toArray();

        $millNdpe = DB::table('mills')
        ->select('ndpe', DB::raw('COUNT(*) as count'))
        ->groupBy('ndpe')
        ->get();
        $millNdpeArray = $millNdpe->toArray();

        $agriplotRspoCertified = DB::table('agriplots')
        ->select('rspo_certified', DB::raw('COUNT(*) as count'))
        ->groupBy('rspo_certified')
        ->get();
        $agriplotRspoCertifiedArray = $agriplotRspoCertified->toArray();

        $agriplotGroup = DB::table('agriplots')
        ->select('group', DB::raw('COUNT(*) as count'))
        ->groupBy('group')
        ->get();
        $agriplotGroupArray = $agriplotGroup->toArray();

        $agriplotRegionArray = DB::table('agriplots')
        ->select('region', DB::raw('COUNT(*) as count'))
        ->groupBy('region')
        ->get();
        $agriplotRegionArrayArray = $agriplotRegionArray->toArray();
        
        return view('dds2.dashboard', compact('millRegionArray', 'millRegionArray2', 'millTypeArray', 'millTypeArray2', 'millRspoCertifiedArray', 'millRspoCertifiedArray2', 'millNdpeArray', 'agriplotGroupArray', 'agriplotRegionArray', 'agriplotRspoCertifiedArray', 'mills', 'millss', 'facilities', 'refineries', 'agriplots'));
        
        
    }
    public function index2()
    {
        return view('dds.index2');
    }
    public function index3()
    {
        return view('dds.index3');
    }
    public function millInfo()
    {
        return view('dds.millInfo');
    }
    public function millAgriplotStats()
    {
        return view('dds.millAgriplotStats');
    }
    public function millSupplierInfo()
    {
        return view('dds.millSupplierInfo');
    }
    public function user()
    {
        return view('dds.user');
    }
    public function setting()
    {
        return view('dds.setting');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
