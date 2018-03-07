<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Database\QueryException;

class itemController extends Controller
{
  protected $item;

  public function __construct(Item $item){
  $this->item = $item;
}

  function getItems($id){
    $data = $this->item->where("category_id",$id)->get();

    try{
      return response()->json($data);
    }
    catch(QueryException $a){
      return response('nope', 400)->header('Content-Type','text/plain');
    }
  }

  function insertItem(Request $request){
    $newStuff = [
      "category_id" => $request->category_id,
      "name" => $request->name,
      "price" => $request->price,
      "stock" => $request->stock
    ];

    try{
      $newStuff = $this->item->create($newStuff);
      response()->json($newStuff);
    }
    catch(QueryException $a){
      return response('nope', 400)->header('Content-Type','text/plain');
    }
  }

  function getItem($id){
    $data = $this->item->where("id",$id)->get();

    try{
      return response()->json($data);
    }
    catch(QueryException $a){
      return response('nope', 400)->header('Content-Type','text/plain');
    }
  }

  function changeItem(Request $request){
    $newStuff = [
      "category_id" => $request->category_id,
      "name" => $request->name,
      "price" => $request->price,
      "stock" => $request->stock
    ];
    $pt = $request->id;

    try{
      $newStuff = $this->item->where('id',$pt)->update($newStuff);
      response()->json($newStuff);
    }
    catch(QueryException $a){
      return response('nope', 400)->header('Content-Type','text/plain');
    }
  }

  function delItem($id){
    try{
      $this->item->where("id",$id)->delete();
    }
    catch(QueryException $a){
      return response('nope', 400)->header('Content-Type','text/plain');
    }
  }

}
