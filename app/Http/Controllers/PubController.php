<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PubController extends Controller
{
    public function getDrinks(){
        $drinks = DB::select("select * from drinks;");
        return $drinks;
    }
    public function getDrinkNames(){
        $names = DB::select("select name from drinks;");
        return $names;
    }
    public function getNameAndQuantity(){
        $data = DB::select("select name,quantity_id from drinks;");
        return $data;
    }
    public function getSelectedDrink(){
        $drink = DB::select("select name from drinks where id = 3;");
        return $drink;
    }
    public function getSelectedNumber(){
        $number = DB::select("select name from drinks where amount = 25;");
        return $number;
    }
    public function insertDrink(){
        DB::insert("insert into drinks(name, amount, type_id, quantity_id) values (?,?,?,?)",[
            "Borsodi",120,1,1
        ]);
    }
    public function modifyDrink(){
        DB::update("update drinks set name = ? where name = ?",["Soproni","Borsodi"]);
    }
    public function deleteDrink(){
        DB::delete("delete from drinks where name = ?",["Soproni"]);
    }
}
