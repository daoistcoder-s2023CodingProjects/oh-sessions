<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{   
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('profile');
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
			
			$profile = Profile::findOrFail($id);
			$profile->name = $request->input('name');
			$profile->description = $request->input('description');

			$profile->save();

			return redirect()->back()->with('success', 'Profile updated successfully');

    }

		public function updateImage(Request $request, $id)
		{
				$profile = Profile::findOrFail($id);
		
				if ($request->hasFile('image')) {
						$image = $request->file('image');
						$imageName = time() . '.' . $image->getClientOriginalExtension();
						$image->storeAs('public/images', $imageName);
		
						// Delete old image if exists
						Storage::delete('public/images/' . basename($profile->image));
		
						$profile->image = asset('storage/images/' . $imageName);
						$profile->save();
				}
		
				return redirect()->back()->with('success', 'Profile image updated successfully');
		}
		
		

		

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
