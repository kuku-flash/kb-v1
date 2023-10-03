<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\User;



class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->increment('views');
        $vehicle->refresh();
        ($vehicle->views);
        return view('vehicle', compact('vehicle'));
    }

    public function add_to_favourites(Request $request, $vehicleId)
{
    $user = auth()->user();
    $favorite = Favorite::where([
        'user_id' => $user->getAuthIdentifier(),
        'vehicle_id' => $vehicleId,
    ])->first();

    if ($favorite) {
        // If the vehicle is already a favorite, remove it
        $favorite->delete();
    } else {
        // If the vehicle is not a favorite, add it
        $favorite = new Favorite([
            'user_id' => $user->getAuthIdentifier(),
            'vehicle_id' => $vehicleId,
        ]);
        $favorite->save();
    }
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}

