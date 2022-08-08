<?php

namespace App\Http\Controllers;
use App\Models\Letter;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    //

    public function verify(Request $request)
{
    $id = $request->id;
    $flowid = $request->flowid;
    if ($id != "") {
        $letter = Letter::where('flowid', 'LIKE', '%' . $id . '%')->get();
        if (!empty($flowid)) {
            $letter->where('flowid', '=', $flowid);
        }

        $letter = Letter::findOrFail($letter());

        return view('validationform', compact('letter'));
    }
}

}
