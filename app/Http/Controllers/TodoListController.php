<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listitem;

class TodoListController extends Controller
{
    //
    public function index(){
        
        return view('welcome', ['listItems' => ListItem::where('is_complete', 0)->get()]);
    }

    public function mark($id){
        $listItem = ListItem::find($id);
        $listItem->is_complete = 1;
        $listItem->save();
        return redirect('/');
    }

    public function saveItem(Request $req){
        $newListItem = new ListItem;
        $newListItem->name = $req->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();
        
        return redirect('/');
    }

    
}
