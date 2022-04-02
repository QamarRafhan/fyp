<?php

namespace App\Http\Controllers;
use App\Models\Blood;
use Illuminate\Http\Request;

class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Blood $model)
    {
        return view('blood.index', [
            'blood' => $model->paginate(
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
        $blood = new Blood();
        return view('blood.edit', compact('blood'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blood = new Blood();

        $data = $request->only($blood->getFillable());
        $blood->fill($data);
        $blood->save();
        return back()->withStatusSuccess(__('Blood created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blood $blood)
    {

        return view('blood.view', ["blood" => $blood]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blood $blood)
    {
        return view('blood.edit', compact('blood'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Blood $blood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blood $blood)
    {
        $data = $request->only($blood->getFillable());

        $blood->fill($data);
        $blood->save();

        return back()->withStatusSuccess(__('Blood Updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Blood $blood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blood $blood)
    {
        $blood->delete();
        return redirect()->route('blood.index')->withStatusSuccess(__('Blood deleted successfully.'));
    }

    public function bloodrequest()
    {
        dd("asdfjsdfsdlfsdlf");
    }
}
