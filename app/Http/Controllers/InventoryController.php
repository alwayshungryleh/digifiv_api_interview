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
        //Pessimistic Locking
        $inventories = Inventory::inRandomOrder()->lockForUpdate()->limit(3)->get();
        // return response($inventories,200);
        foreach($inventories as $inventory){
            $inventory->balance = $inventory->balance-1;
            $inventory->update();
        }
        $responses = Inventory::all();
        return response($responses,200);
    }

    public function resettoten()
    {
        $inventories = Inventory::all();
        foreach($inventories as $inventory){
            $inventory->balance = 10;
            $inventory->update();;
        }

        $responses = Inventory::all();
        return response($responses,200);
    }
}
