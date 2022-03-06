<?php

namespace App\Http\Controllers;
use App\Models\Receptor;
use Illuminate\Http\Request;

class ReceptorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Receptor $model)
    {
        return view('receptor.index', [
            'receptor' => $model->paginate(
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
        $receptor = new Receptor();
        return view('receptor.edit', compact('receptor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receptor = new Receptor();

        $data = $request->only($receptor->getFillable());
        $receptor->fill($data);
        $receptor->save();
        return back()->withStatusSuccess(__('Receptor created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Receptor $receptor)
    {

        return view('receptor.view', ["receptor" => $receptor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Receptor $receptor)
    {
        return view('receptor.edit', compact('receptor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Receptor $receptor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receptor $receptor)
    {
        $data = $request->only($receptor->getFillable());

        $receptor->fill($data);
        $receptor->save();

        return back()->withStatusSuccess(__('Receptor Updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Receptor $receptor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receptor $receptor)
    {
        $receptor->delete();
        return redirect()->route('receptor.index')->withStatusSuccess(__('Receptor deleted successfully.'));
    }



}
