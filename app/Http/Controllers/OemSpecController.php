<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OemSpec;
use App\Http\Resources\OemSpecResource; 
class OemSpecController extends Controller
{
    //

    public function index()
    {
        $OemSpec = OemSpec::all();
        return response([ 'oem_spec' => OemSpecResource::collection($OemSpec), 'message' => 'Retrieved successfully'], 200);
    }

    public function store(Request $request)
    {
        
    }


    public function show($id)
    {
        //return $oem_spec->id;
        return response(['oem_spec' => new OemSpecResource(OemSpec::find($id)), 'message' => 'Retrieved successfully'], 200);
    }

   
   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OemSpec $OemSpec)
    {
        //return $request->all();
        $OemSpec->update($request->all());

        return response(['dealer' => new OemSpecResource($OemSpec), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(OemSpec $OemSpec)
    {
        
    }
}
