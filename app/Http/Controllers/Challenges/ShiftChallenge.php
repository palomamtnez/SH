<?php

namespace App\Http\Controllers\Challenges;

use App\Models\Steps;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ShiftChallenge extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saveSteps(Request $request){
        $request->validate([
            'steps' => 'required|max:50000|min:1|numeric'
        ]);

        // Commented as it doesnt really store it in the DB.
//        $step = new Steps();
//        $step->number = $request->input('steps');
//        $step->user   = $request->user();
//        $step->save();

        return response()->json('Your records have been saved successfully.');
    }
}
