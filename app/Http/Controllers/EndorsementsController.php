<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endorsements;

class EndorsementsController extends Controller
{   
    public $endorsementsModel;

    public function __construct() {
        $this->endorsementsModel = new Endorsements;
    }

    public function create() {
        $status = $this->endorsementsModel->insertEndorsement(request()->all());

        return response()->json($status);
    }

}
