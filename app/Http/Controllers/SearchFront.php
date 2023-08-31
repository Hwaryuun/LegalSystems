<?php

namespace App\Http\Controllers;
use App\Models\FrontTableModel;
use Illuminate\Http\Request;

class SearchFront extends Controller
{
    public function search(Request $request){
   
        $search = $request->input('search');
    
        $posts = FrontTableModel::query()
            ->where('complainantfname', 'LIKE', "%{$search}%")
            ->orWhere('complainantlname', 'LIKE', "%{$search}%")
            ->orWhere('respondentfname', 'LIKE', "%{$search}%")
            ->orWhere('respondentlname', 'LIKE', "%{$search}%")
            ->get();
    
      
        $tbls = FrontTableModel::get();

        return view('YouSearch', ['posts'=>$posts, 'tbls' => $tbls]);
    }

    public function show($id){
        $pendings = FrontTableModel::findorFail($id);

        return view('TableFront.SearchRes', ['pendings'=>$pendings]);

    }

}
