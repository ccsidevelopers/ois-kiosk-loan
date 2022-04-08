<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endorsements;
use Carbon\Carbon;
use DB;

class EndorsementsController extends Controller
{   
    public $endorsementsModel;

    public function __construct() {
        $this->endorsementsModel = new Endorsements;
    }

    public function create(Request $req) {

        $status = $this->endorsementsModel->insertEndorsement(request()->all());

        if($req->file('file')) {
            $fileUploaded = request()->file('file');
            $fileDate = Carbon::now()->format('y-m-d-h-m');
            $fileName = $fileDate . '-' . $fileUploaded->getClientOriginalName();
            $filePath = public_path('/images');
            $fileUploaded->move(public_path('images'), $fileName);
        }

        return response()->json($status);
    }
}

