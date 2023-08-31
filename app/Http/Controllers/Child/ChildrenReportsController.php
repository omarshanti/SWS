<?php

namespace App\Http\Controllers\Child;

use App\Http\Controllers\Controller;
use App\Models\ChildIdentification;
use App\Models\ChildSummaryReport;
use Illuminate\Http\Request;

class ChildrenReportsController extends Controller
{
    //

    public function create_report($id)
    {
        $child = ChildIdentification::find($id);
        $child_fullName_en = explode(" ", $child->child_fullName_en);
        $child_fullName_ar = explode(" ", $child->child_fullName_ar);
        $mother_fullName_en = explode(" ", $child->mother_fullName_en);
        $mother_fullName_ar = explode(" ", $child->mother_fullName_ar);
        $father_fullName_en = explode(" ", $child->father_fullName_en);
        $father_fullName_ar = explode(" ", $child->father_fullName_ar);
        $guardian_fullName_en = explode(" ", $child->guardian->guardian_fullName_en);
        $guardian_fullName_ar = explode(" ", $child->guardian->guardian_fullName_ar);
        $json_data = $child->family->relatives;
        $lessons = $child->education->intensive_lessons;
        $lessonsArray = explode(',', $lessons);

        $hobbies = $child->education->hobbies;
        $hobbiesArray = explode(',', $hobbies);

        $json_patients = $child->health->patients;
        $residentNeedsArray = explode(',', $child->resident->resident_needs);

        return view('child-reports.create-child', compact(
            'child',
            'child_fullName_en',
            'child_fullName_ar',
            'mother_fullName_en',
            'mother_fullName_ar',
            'father_fullName_en',
            'father_fullName_ar',
            'guardian_fullName_en',
            'guardian_fullName_ar',
            'json_data',
            'json_patients',
            'lessonsArray',
            'hobbiesArray',
            'residentNeedsArray'
        ));
    }


    public function summary_report($id)
    {
        $child = ChildIdentification::find($id);
        return view('child-reports.summary-report', compact('child'));
    }

    public function summary_report_store(Request $request)
    {
        $request->validate([
            'family_situation' => 'required|string'
        ]);
        ChildSummaryReport::create([
            'child_id' => $request->child_id,
            'family_situation' => $request->family_situation
        ]);
        dd("Hello, the report storing successfully, print the report pdf or physical copy");
    }
}
