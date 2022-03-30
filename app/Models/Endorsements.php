<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Validator;

class Endorsements extends Model
{   

    public $table = 'endorsements';

    /**
     * store endorsement data
     * 
     * @param object $data
     * 
     * @return bool
     */
    public function insertEndorsement($data) {

        try {
            $validator = Validator::make($data, [
                //validation
                // 'applicant_lname' => "required"
            ]);

            // dd($validator->fails());

            if ($validator->fails()) {
                throw new \Exception($validator->errors()->first());
            }

            $flag = Endorsements::insert([

            ]);
            
            if (!$flag) {
                throw new \Exception('fail adding to database');
            }

            return true;

        } catch (\Exception $e) {
            return false;
        }
        
    }
}
