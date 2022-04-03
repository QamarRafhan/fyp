<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blood;
use App\Models\Donor;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Donor $model)
    {
        return view('donors.index', [
            'donors' => $model->paginate(
                $request->has('per_page') ?
                    $request->input('per_page') :
                    config('app.global.record_per_page')
            )
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donor = new Donor();
        $blood_groups =  Blood::all();
        return view('donors.edit', compact('donor', 'blood_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donor = new Donor();

        $data = $request->only($donor->getFillable());
        $donor->fill($data);
        $donor->save();
        return back()->withStatusSuccess(__('Donor created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {

        return view('donors.view', ["donor" => $donor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        $blood_groups =  Blood::all();
        return view('donors.edit', compact('donor', 'blood_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Donor $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        $data = $request->only($donor->getFillable());

        $donor->fill($data);
        $donor->save();

        return back()->withStatusSuccess(__('Donor Updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Donor $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        $donor->delete();
        return redirect()->route('donor.index')->withStatusSuccess(__('Donor deleted successfully.'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function donors(Request $request)
    {

        $query =  User::where('role', 'donor');
       

       if($request->group){
           $query-> whereHas('blood', function (Builder $query)use($request) {
            $query->where('group', $request->group);
        });
       }
       if($request->city){
        $query->where('city', $request->city);
    }
       $donor=$query->get();
        return view('frontend.donor', compact('donor'));
    }

    public function bloodrequest(User $donor)
    {
    
        $hospital =  Hospital::all();
        return view('frontend.bloodrequest', compact('donor', 'hospital'));
       
    }
    
}