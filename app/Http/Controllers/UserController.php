<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(Request $request, User $model)
    {
    
        if($request->role) {
            $model=  $model->where('role', $request->role);
        }
        return view('users.index', ['users' => $model->paginate(
            $request->has('per_page') ?
                $request->input('per_page') :
                config('app.global.record_per_page')
        )]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Receptor $receptor
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->withStatusSuccess(__('User deleted successfully.'));
    }


        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   


    public function edit($id)
    {
        // get the user
        $user = User::find($id);
        

        // show the edit form and pass the shark
        return view('users.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $data = $request->only($user->getFillable());

        $user->fill($data);
        $user->save();

        return back()->withStatusSuccess(__('User Updated successfully.'));
    }
}

