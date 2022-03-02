<?php

namespace App\Http\Controllers;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Hospital $model)
    {
        return view('hospitals.index', [
            'hospitals' => $model->paginate(
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
        $hospital = new Hospital();
        return view('hospitals.edit', compact('hospital'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hospital = new Hospital();

        $data = $request->only($hospital->getFillable());
        $hospital->fill($data);
        $hospital->save();
        return back()->withStatusSuccess(__('hospital created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {

        return view('hospitals.view', ["hospital" => $hospital]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        return view('hospitals.edit', compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  hospital $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital)
    {
        $data = $request->only($hospital->getFillable());

        $hospital->fill($data);
        $hospital->save();

        return back()->withStatusSuccess(__('hospital Updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  hospital $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return redirect()->route('hospital.index')->withStatusSuccess(__('hospital deleted successfully.'));
    }
}
