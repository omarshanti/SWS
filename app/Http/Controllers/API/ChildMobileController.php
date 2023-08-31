<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ChildIdentification;
use App\Models\ChildLocationData;
use App\Models\ChildsAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ChildMobileController extends Controller
{
    //
    public function store_location(Request $request)
    {

        $validatedData = $request->validate([
            'child_id' => 'required|integer|exists:child_identification,id',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
        ]);

        $location = ChildLocationData::where('child_id', '=', $validatedData['child_id'])->first();

        if ($location) {
            $location->update($validatedData);
            return response()->json([
                'message' => "Updating Location Data Successfully"
            ]);
        } else {
            ChildLocationData::create($validatedData);
            return response()->json([
                'message' => "Saving Location Data Successfully"
            ]);
        }


    }

    public function search_child($code)
    {
        $child = ChildIdentification::where('child_code', $code)->with('guardian','location')->first();

        if ($child) {
            return response()->json([
                "child" => $child,
            ]);
        } else {
            return response()->json([
                "message" => 'No Results'
            ]);
        }
    }
    public function getImage($child_id) {
        $child_photo = ChildsAttachment::where('child_id', $child_id)->where('file_name', 'child_personal_photos')->first();

//        Storage::disk('local')->get('/public/uploads/children/child_personal_photos/'. $child->attachments);

        $path = '/public/uploads/children/child_personal_photos/' . $child_photo->path;
//
        $image = Storage::disk('local')
            ->get('/public/uploads/children/child_personal_photos/' . $child_photo->path);
        if ($image) {
            $fileContents = $image;
            $response = response($fileContents, 200)->header('Content-Type', 'image/jpeg');

            return $response;
        }
        return response()->json(['error' => 'Image not found'], 404);
    }
}
