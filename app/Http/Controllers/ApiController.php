<?php

namespace App\Http\Controllers;

use App\Models\DcpsModel;
use App\Http\Requests\StoreRequest;

class ApiController extends Controller
{
    //listing the records from table
    public function index()
    {
        $records = DcpsModel::paginate(10);
        return response()->json($records);
    }

    // for creating a record
    public function store(StoreRequest $request)
    {

        $record = DcpsModel::create($request->all());

        return response()->json([
            'message' => 'Record created successfully',
            'data' => $record
        ], 201);
    }

    // for updating the particular record 
    public function update(StoreRequest $request, $id)
    {
        $record = DcpsModel::find($id);

        if (!$record) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        $record->update($request->all());

        return response()->json([
            'message' => 'Record updated successfully',
            'data' => $record
        ], 200);
    }

    //for showing particular record 
    public function show($id)
    {
        $record = DcpsModel::find($id);

        if (!$record) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        return response()->json($record);
    }

    //Deleting the particular $id
    public function destroy($id)
    {
        $record = DcpsModel::find($id);

        if (!$record) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        $record->delete();

        return response()->json(['message' => 'Record deleted Successfully', 'deleted_id' => $id]);
    }
}
