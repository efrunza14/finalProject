<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $editing = true;
        return view('users.edit', compact('user', 'editing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        $validated = request()->validate([
<<<<<<< HEAD
            'name' => 'required|min:3|max:40',
            'bio' => 'nullable|min:1|max:255',
            'image' => 'image'
        ]);

        if (request()->has('image')) {
            $imagePath = request()->file('image')->store('profile', 'public');
            $validated['image'] = $imagePath;
=======
            'name'=>'required|min:3|max:40',
            'bio'=>'nullable|min:1|max:255',
            'image'=>'image'
        ]);

        if(request()->has('image')){
            $imagePath = request()->file('image')->store('profile', 'public');
            $validated['image']=$imagePath;
>>>>>>> 80067199880a2d7d0349f6e0cfa005434ef4d60f
        }

        $user->update($validated);

        return redirect()->route('profile');
    }

    public function profile(User $user)
    {
        //de ce apare eroare aici?
        //return $this->show(auth()->user());
    }
}
