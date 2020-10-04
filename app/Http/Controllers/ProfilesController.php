<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
    	// this will give error if user not found
    	//$user = User::find($user);
    	// much better to use it than above, it will return 404
    	$follow = 'Follow';
    	 if(auth()->user()->following->contains($user->id))
    	 	$follow = 'Unfollow';
			return view("profiles.index", ['user'=>$user, 'follow'=>$follow]);
    }
    public function edit(User $user)
    {
    	$this->authorize('update',$user->profile);
    	return view('profiles.edit',compact('user'));

    }
    public function update(User $user)
    {
    	$this->authorize('update',$user->profile);
    	$data = request()->validate(['title'=>'required', 'description'=>'required','url'=>'required']);
    	$filePath = request()->file('image')->storePublicly('profiles', 'public');

    	auth()->user()->profile->update($data);
    	return redirect('profile/'.$user->id);
    }
}
