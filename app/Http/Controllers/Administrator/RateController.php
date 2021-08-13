<?php

namespace App\Http\Controllers\Administrator;

use App\Rate;
use App\Courier;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class RateController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','role:administrator']);
    }

    public function index(){
        $rates = Rate::all();
        return view('administrator.rates.index')->with('rates',$rates);
    }

    public function create(){
        $couriers = Courier::all();
        $locations = Location::all();
        return view('administrator.rates.create')
            ->with(['couriers' => $couriers,
                    'locations' => $locations]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'courier' => ['required',
                         Rule::unique('rates', 'courier_id')->where(function ($query) use($request) {
                        return $query->where('weight', $request->weight)
                                    ->where('location_id', $request->location);
                             })
        ], 
            'weight' => 'required|numeric',
            'location' => 'required',
            'cost' => 'required|numeric',
            'hub_cost' => 'required|numeric'
        ],
        [
           'courier.unique' => 'The courier,weight and location already exist in the table'
        ]);

        $rate = new Rate();
        $rate->courier_id = $request->courier;
        $rate->weight = $request->weight;
        $rate->cost = $request->cost;
        $rate->hub_cost = $request->hub_cost;
        $rate->location_id = $request->location;

        $rate->save();

        return redirect()->route('admin.rates.index');

    }

    public function edit(Rate $rate){

        //dd($rate);
        return view('administrator.rates.edit')->with('rate',$rate);
    }

    public function update(Request $request,Rate $rate){
        $validated = $request->validate([
            'courier' => 'required',
            'weight' => 'required|numeric',
            'location' => 'required',
            'cost' => 'required|numeric',
            'hub_cost' => 'required|numeric'
        ]);

        $rate->update(['cost' => $request->cost,'hub_cost' =>$request->hub_cost]);

        return redirect()->route('admin.rates.index');
    }

    public function destroy(Rate $rate){
        //dd($rate);
        $rate->delete();

        return back();
    }
}
