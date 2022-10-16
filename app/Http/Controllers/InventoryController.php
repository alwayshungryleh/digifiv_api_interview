<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function getinventories()
    {
        $inventories = Inventory::all();
        
        $responses = $inventories;
        return response($responses,200);
    }

    public function remove3randominventory()
    {
        $inventories = Inventory::all()->shuffle();
        $counter = 3;
        foreach($inventories as $inventory){
            if($counter>0){
                $inventory->balance = $inventory->balance-1;
                $inventory->update([
                    'balance' =>$inventory->balance
                ]);
                $counter--;
            }
        }
        $responses = Inventory::all();
        return response($responses,200);
    }
}
