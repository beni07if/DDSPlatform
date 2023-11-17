<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mill;
use App\Models\Agriplot;
use App\Models\Hscode;
use App\Models\Report;
use App\Models\Ttp;
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
        $facilities = DB::table('facilities')
            ->count();
        $refineries = DB::table('refineries')
            ->count();

        $millRegion = DB::table('mills')
        ->select('mill_country', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_country')
        ->get();
        $millRegionArray = $millRegion->toArray();

        $millRegion2 = DB::table('mills')
        ->select('mill_country', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_country')
        ->get();
        $millRegionArray2 = $millRegion2->toArray();

        $millRegion3 = DB::table('mills')
        ->select('mill_country', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_country')
        ->get();
        $millRegionArray3 = $millRegion3->toArray();

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

        $millRspo = DB::table('mills')
        ->select('mill_rspo', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_rspo')
        ->get();
        $millRspoArray = $millRspo->toArray();

        $millRspo2 = DB::table('mills')
        ->select('mill_rspo', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_rspo')
        ->get();
        $millRspoArray2 = $millRspo2->toArray();

        $millDeforestationRisk = DB::table('mills')
        ->select('mill_deforestation_risk', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_deforestation_risk')
        ->get();
        $millDeforestationRiskArray = $millDeforestationRisk->toArray();

        $agriplotRspoCertified = DB::table('agriplots')
        ->select('agriplot_rspo', DB::raw('COUNT(*) as count'))
        ->groupBy('agriplot_rspo')
        ->get();
        $agriplotRspoCertifiedArray = $agriplotRspoCertified->toArray();

        $agriplotGroup = DB::table('agriplots')
        ->select('agriplot_company_group', DB::raw('COUNT(*) as count'))
        ->groupBy('agriplot_company_group')
        ->get();
        $agriplotGroupArray = $agriplotGroup->toArray();

        $agriplotRegionArray = DB::table('agriplots')
        ->select('agriplot_country', DB::raw('COUNT(*) as count'))
        ->groupBy('agriplot_country')
        ->get();
        $agriplotRegionArrayArray = $agriplotRegionArray->toArray();
        
        return view('dds2.dashboard', compact('millRegionArray', 'millDeforestationRiskArray', 'millRegionArray2', 'millTypeArray', 'millTypeArray2', 'millRegionArray3', 'millRspoArray', 'millRspoArray2', 'agriplotGroupArray', 'agriplotRegionArray', 'agriplotRspoCertifiedArray', 'mills', 'millss', 'facilities', 'refineries', 'agriplots'));
        
        
    }
    
    public function supplierMill()
    {
        $millss = Mill::all();
        $agriplots = Agriplot::all();
        $millRegion = DB::table('mills')
        ->select('mill_country', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_country')
        ->get();
        $millRegionArray = $millRegion->toArray();

        $millType = DB::table('mills')
        ->select('mill_type', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_type')
        ->get();
        $millTypeArray = $millType->toArray();

        $millRspo = DB::table('mills')
        ->select('mill_rspo', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_rspo')
        ->get();
        $millRspoArray = $millRspo->toArray();

        $millDeforestationRisk = DB::table('mills')
        ->select('mill_deforestation_risk', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_deforestation_risk')
        ->get();
        $millDeforestationRiskArray = $millDeforestationRisk->toArray();
        
        return view('dds2.supplierMill.supplierMill', compact('millss', 'agriplots', 'millRegionArray', 'millTypeArray', 'millRspoArray', 'millDeforestationRiskArray'));
    }

    public function supplierMillDeforestationRisk()
    {
        $millss = Mill::all();
        $agriplots = Agriplot::all();
        $millRegion = DB::table('mills')
        ->select('mill_country', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_country')
        ->get();
        $millRegionArray = $millRegion->toArray();

        $millType = DB::table('mills')
        ->select('mill_type', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_type')
        ->get();
        $millTypeArray = $millType->toArray();

        $millRspo = DB::table('mills')
        ->select('mill_rspo', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_rspo')
        ->get();
        $millRspoArray = $millRspo->toArray();

        $millDeforestationRisk = DB::table('mills')
        ->select('mill_deforestation_risk', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_deforestation_risk')
        ->get();
        $millDeforestationRiskArray = $millDeforestationRisk->toArray();
        
        return view('dds2.supplierMill.supplierMill', compact('millss', 'agriplots', 'millRegionArray', 'millTypeArray', 'millRspoArray', 'millDeforestationRiskArray'));
    }

    public function supplierMillLegalPrfRisk()
    {
        $millss = Mill::all();
        $agriplots = Agriplot::all();
        $millRegion = DB::table('mills')
        ->select('mill_country', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_country')
        ->get();
        $millRegionArray = $millRegion->toArray();

        $millType = DB::table('mills')
        ->select('mill_type', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_type')
        ->get();
        $millTypeArray = $millType->toArray();

        $millRspo = DB::table('mills')
        ->select('mill_rspo', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_rspo')
        ->get();
        $millRspoArray = $millRspo->toArray();

        $millDeforestationRisk = DB::table('mills')
        ->select('mill_deforestation_risk', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_deforestation_risk')
        ->get();
        $millDeforestationRiskArray = $millDeforestationRisk->toArray();
        
        return view('dds2.supplierMill.supplierMill', compact('millss', 'agriplots', 'millRegionArray', 'millTypeArray', 'millRspoArray', 'millDeforestationRiskArray'));
    }

    public function supplierMillLegalLanduseRisk()
    {
        $millss = Mill::all();
        $agriplots = Agriplot::all();
        $millRegion = DB::table('mills')
        ->select('mill_country', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_country')
        ->get();
        $millRegionArray = $millRegion->toArray();

        $millType = DB::table('mills')
        ->select('mill_type', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_type')
        ->get();
        $millTypeArray = $millType->toArray();

        $millRspo = DB::table('mills')
        ->select('mill_rspo', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_rspo')
        ->get();
        $millRspoArray = $millRspo->toArray();

        $millDeforestationRisk = DB::table('mills')
        ->select('mill_deforestation_risk', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_deforestation_risk')
        ->get();
        $millDeforestationRiskArray = $millDeforestationRisk->toArray();
        
        return view('dds2.supplierMill.supplierMill', compact('millss', 'agriplots', 'millRegionArray', 'millTypeArray', 'millRspoArray', 'millDeforestationRiskArray'));
    }

    public function supplierMillComplexSupplybaseRisk()
    {
        $millss = Mill::all();
        $agriplots = Agriplot::all();
        $millRegion = DB::table('mills')
        ->select('mill_country', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_country')
        ->get();
        $millRegionArray = $millRegion->toArray();

        $millType = DB::table('mills')
        ->select('mill_type', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_type')
        ->get();
        $millTypeArray = $millType->toArray();

        $millRspo = DB::table('mills')
        ->select('mill_rspo', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_rspo')
        ->get();
        $millRspoArray = $millRspo->toArray();

        $millDeforestationRisk = DB::table('mills')
        ->select('mill_deforestation_risk', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_deforestation_risk')
        ->get();
        $millDeforestationRiskArray = $millDeforestationRisk->toArray();
        
        return view('dds2.supplierMill.supplierMill', compact('millss', 'agriplots', 'millRegionArray', 'millTypeArray', 'millRspoArray', 'millDeforestationRiskArray'));
    }

    public function traceToActualAgriplot_(Request $request){
        $idMill = $request->input('mill_eq_id');
        $ttps0 = DB::table('ttps')
            ->where('mill_eq_id', $idMill)
            ->get();

        $mill_eq_id = $request->input('mill_eq_id');
        // Retrieve Mill based on mill_eq_id
        $mill = Mill::where('mill_eq_id', $mill_eq_id)->first();

        if (!$mill) {
            // Handle the case where Mill is not found based on the provided mill_eq_id
            // You can redirect or display an error message
            return redirect()->route('home')->with('error', 'Mill not found');
        }

        // Retrieve Estates for the selected mill_eq_id
        $estates = $mill->estates;

        // Retrieve Agriplots for the selected mill_eq_id and count deforestation risks
        $agriplots = collect();
        foreach ($estates as $estate) {
            $agriplots->push($estate->agriplots()->withRiskCount()->get());
        }
        dd($agriplots);
    }
    
    public function traceToActualAgriplot(Request $request)
    {
        $hscodes = Hscode::select('hs_code_panjiva')->distinct()->get();
        $reports = Report::take(3)->get();

        $idMill = $request->input('mill_eq_id');
        $ttps0 = DB::table('ttps')
            ->where('mill_eq_id', $idMill)
            ->get();

        $mill_eq_id = $request->input('mill_eq_id');

        // Retrieve Ttps for the selected mill_eq_id
        $ttps = Ttp::where('mill_eq_id', $mill_eq_id)->get();
        $ttps2 = Ttp::where('mill_eq_id', $mill_eq_id)->get();

        // Retrieve Mill based on mill_eq_id
        $mill = Mill::where('mill_eq_id', $mill_eq_id)->first();

        if (!$mill) {
            // Handle the case where Mill is not found based on the provided mill_eq_id
            // You can redirect or display an error message
            return redirect()->route('home')->with('error', 'Mill not found');
        }

        // Retrieve Estates for the selected mill_eq_id
        $estates = $mill->estates;

        // Retrieve Agriplots for the selected mill_eq_id and count deforestation risks
        $agriplots = collect();
        foreach ($estates as $estate) {
            $agriplots->push($estate->agriplots()->withRiskCount()->get());
        }

        // ... rest of your code
        $millRegion = DB::table('mills')
            ->select('mill_country', DB::raw('COUNT(*) as count'))
            ->groupBy('mill_country')
            ->get();
            $millRegionArray = $millRegion->toArray();

            $millType = DB::table('mills')
            ->select('mill_type', DB::raw('COUNT(*) as count'))
            ->groupBy('mill_type')
            ->get();
            $millTypeArray = $millType->toArray();

            $millRspo = DB::table('mills')
            ->select('mill_rspo', DB::raw('COUNT(*) as count'))
            ->groupBy('mill_rspo')
            ->get();
            $millRspoArray = $millRspo->toArray();

            $millDeforestationRisk = DB::table('mills')
            ->select('mill_deforestation_risk', DB::raw('COUNT(*) as count'))
            ->groupBy('mill_deforestation_risk')
            ->get();
            $millDeforestationRiskArray = $millDeforestationRisk->toArray();

        return view('dds2.agriplot.traceToActualAgriplot', compact('hscodes', 'agriplots', 'reports', 'ttps', 'ttps2', 'ttps0', 'millRegionArray', 'millTypeArray', 'millRspoArray', 'millDeforestationRiskArray'));
        
    }


    public function traceToActualAgriplot0(Request $request)
    {
        // $millss = Mill::findOrFail('mill_eq_id',$mill_eq_id);
        $hscodes = Hscode::select('hs_code_panjiva')->distinct()->get();
        $reports = Report::take(3)->get();

        // Retrieve records from the Ttp model where mill_eq_id matches the given value
        // $ttps = Ttp::where('mill_eq_id', $mill_eq_id)->first();
        $idMill = $request->input('mill_eq_id');
        $ttps = DB::table('ttps')
            ->where('mill_eq_id', $idMill)
            ->get();
        // $ttps = Ttp::findOrFail($mill_eq_id)->get();


        $millRegion = DB::table('mills')
        ->select('mill_country', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_country')
        ->get();
        $millRegionArray = $millRegion->toArray();

        $millType = DB::table('mills')
        ->select('mill_type', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_type')
        ->get();
        $millTypeArray = $millType->toArray();

        $millRspo = DB::table('mills')
        ->select('mill_rspo', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_rspo')
        ->get();
        $millRspoArray = $millRspo->toArray();

        $millDeforestationRisk = DB::table('mills')
        ->select('mill_deforestation_risk', DB::raw('COUNT(*) as count'))
        ->groupBy('mill_deforestation_risk')
        ->get();
        $millDeforestationRiskArray = $millDeforestationRisk->toArray();
        return view('dds2.agriplot.traceToActualAgriplot', compact( 'hscodes', 'reports', 'ttps', 'millRegionArray', 'millTypeArray', 'millRspoArray', 'millDeforestationRiskArray'));
    }

    public function traceToPlots()
    {
        $millss = Mill::all();
        $agriplots = Agriplot::all();
        $agriplotCountry = DB::table('agriplots')
        ->select('agriplot_country', DB::raw('COUNT(*) as count'))
        ->groupBy('agriplot_country')
        ->get();
        $agriplotCountryArray = $agriplotCountry->toArray();

        $agriplotType = DB::table('agriplots')
        ->select('agriplot_type', DB::raw('COUNT(*) as count'))
        ->groupBy('agriplot_type')
        ->get();
        $agriplotTypeArray = $agriplotType->toArray();

        $agriplotRspo = DB::table('agriplots')
        ->select('agriplot_rspo', DB::raw('COUNT(*) as count'))
        ->groupBy('agriplot_rspo')
        ->get();
        $agriplotRspoArray = $agriplotRspo->toArray();

        $agriplotDeforestationRisk = DB::table('agriplots')
        ->select('agriplot_deforestation_risk', DB::raw('COUNT(*) as count'))
        ->groupBy('agriplot_deforestation_risk')
        ->get();
        $agriplotDeforestationRiskArray = $agriplotDeforestationRisk->toArray();
        
        return view('dds2.traceToPlots', compact('millss', 'agriplots', 'agriplotCountryArray', 'agriplotTypeArray', 'agriplotRspoArray', 'agriplotDeforestationRiskArray'));
    }

    public function report(Request $request)
    {
        $millss = Mill::all();
        $hscodes = Hscode::select('hs_code_panjiva')->distinct()->get();
        $reports = Report::take(3)->get();
        return view('dds2.report', compact('millss', 'hscodes', 'reports'));
    }
    
    public function agriplotByMill(Request $request)
    {
        $coordinates = null; // Initialize coordinates variable
        $millName = $request->input('mill_name');

        if ($millName) {
            $coordinates = DB::table('mills')->where('mill_name', $millName)->get();
        }
        
        return view('dds2.agriplotByMill', compact('coordinates'));
    }
    
    public function getProvinces($country)
    {
        $provinces = Mill::where('country', $country)->distinct()->pluck('province');
        return response()->json($provinces);
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
