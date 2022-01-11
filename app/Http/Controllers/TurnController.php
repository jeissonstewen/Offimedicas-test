<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Turn;
use App\Models\User;
use Illuminate\Http\Request;

class TurnController extends Controller
{
    
    public function requestTurn(Request $request ){
        $user = User::whereDocumentNumberAndDocumentType($request->document_number, $request->document_type)->first();
        if($user){
            $dateOfBirth = $user->birthdate;
            $today = date("Y-m-d");
            $diff = date_diff(date_create($dateOfBirth), date_create($today));
            $age = $diff->format('%y');
            if($age > 62){
                $availableModule = Module::whereTypeAndAvailable('P', true)->first();
                if($availableModule){
                    $availableModule->available = false;
                    $availableModule->save();
                }else{
                    $availableModule = Module::whereType('P')->get()->random();
                }
            }else{
                $availableModule = Module::whereTypeAndAvailable($request->module_type, true)->first();
                if($availableModule){
                    $availableModule->available = false;
                    $availableModule->save();
                }else{
                    $availableModule = Module::whereType($request->module_type)->get()->random();
                }
            }
            $turn = Turn::create(['user_id' => $user->id, 'module_id' => $availableModule->id]);
            $turn["message"] = "$user->name su turno es $availableModule->type$availableModule->code-$turn->id";
            return response($turn, 201);
        }else{
            return response(["message" => "user not found"], 404);
        }
    }
}
