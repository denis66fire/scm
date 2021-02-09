<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarketplaceInventory;
use App\http\Resources\MarketplaceInventoryResource;
use Illuminate\Support\Facades\Validator;
class MarketplaceInventoryController extends Controller
{
    //

    public function index()
    {
        $dealer = MarketplaceInventory::all();
        return response([ 'dealer' => MarketplaceInventoryResource::collection($dealer), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'dealer_id' => 'required',
            'oem_spec_id' => 'required',
            'km_on_odometer' => 'required',
            'scratches' => 'required',
            'original_paint' => 'required',
            'no_accident' => 'required',
            'no_pre_buyer' => 'required',
            'place_of_registration' => 'required',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $item = MarketplaceInventory::create($data);

        return response(['dealer' => new MarketplaceInventoryResource($item), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(MarketplaceInventory $item)
    {
        return response(['dealer' => new MarketplaceInventoryResource($item), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MarketplaceInventory $item)
    {
        //return $request->all();
        $item->update($request->all());

        return response(['dealer' => new MarketplaceInventoryResource($item), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(MarketplaceInventory $item)
    {
        $item->delete();

        return response(['message' => 'Deleted']);
    }
}
