<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
   
    public function releaseModules(){
        $modules = Module::all();
        foreach($modules as $module){
            $module->available = true;
            $module->save();
        }
        return response($modules , 200);
    }

    public function putBusyModules(){
        $modules = Module::all();
        foreach($modules as $module){
            $module->available = false;
            $module->save();
        }
        return response($modules , 200);
    }
}
