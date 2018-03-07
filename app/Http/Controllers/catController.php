<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Database\QueryException;

class catController extends Controller
{
    protected $category;

    public function __construct(Category $category){
    $this->category = $category;
  }

    function getCats(){
      $data = $this->category->get();

      try{
        return response()->json($data);
      }
      catch(QueryException $a){
        return response('nope', 400)->header('Content-Type','text/plain');
      }
    }

    function insertCat(Request $request){
      $newStuff = [
        "name" => $request->name
      ];

      try{
        $newStuff = $this->category->create($newStuff);
        return response()->json($newStuff);
      }
      catch(QueryException $a){
        return response('nope', 400)->header('Content-Type','text/plain');
      }
    }

    function getCat($id){
      $data = $this->category->where('id',$id)->get();

      try{
        return response()->json($data);
      }
      catch(QueryException $a){
        return response('nope', 400)->header('Content-Type','text/plain');
      }
    }

    function changeCat(Request $request){
      $newStuff = [
        "name" => $request->name
      ];
      $pt = $request->id;

      try{
        $newStuff = $this->category->where('id', $pt)->update($newStuff);
        return response()->json($newStuff);
      }
      catch(QueryException $a){
        return response('nope', 400)->header('Content-Type','text/plain');
      }
    }

    function delCat($id){
      try{
        $this->category->where('id',$id)->delete();
      }
      catch(QueryException $a){
        return response('nope', 400)->header('Content-Type','text/plain');
      }
    }
}
