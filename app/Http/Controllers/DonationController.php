<?php

namespace App\Http\Controllers;
use App\Models\Donor;
use App\Models\Donation;
use App\Models\Hospital;
use App\Models\Receptor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Donation $model)
    {
        $user = Auth::user();
        if($user->role == 'receptor'){
            $model = $model->where('receptor_id', '=', $user->id);
        }
        else{
            if($user->role == 'donor'){
                $model = $model->where('donor_id', '=', $user->id);
            }
            
        }
        return view('donation.index', [
            'donation' => $model->paginate(
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
        $donation = new Donation();
        $hospitals =  Hospital::all();
        dd( $hospitals );
        $donors =  Donor::all();
        $receptors =  Receptor::all();
        return view('donation.edit', compact('donation','hospitals','donors','receptors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donation = new Donation();

        $data = $request->only($donation->getFillable());
        $donation->fill($data);
        $donation->save();
        return back()->withStatusSuccess(__('Donation created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        $donation - null;
        $user = Auth::user();
        if($user->role == 'donor'){
            $donation = Donation::where('donor_id', '=', $user->id)->first();
        }

        return view('donation.view', ["donation" => $donation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        return view('donation.edit', compact('donation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Donation $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        $data = $request->only($donation->getFillable());

        $donation->fill($data);
        $donation->save();

        return back()->withStatusSuccess(__('Donation Updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Donation $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        $donation->delete();
        return redirect()->route('donation.index')->withStatusSuccess(__('Donation deleted successfully.'));
    }



    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function donations(Request $request, Donation $model)
    {
        return view('frontend.donation.index', [
            'donations' => $model->paginate(
                $request->has('per_page') ?
                    $request->input('per_page') :
                    config('app.global.record_per_page')
            )
        ]);
    }
}
