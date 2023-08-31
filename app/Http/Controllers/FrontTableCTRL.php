<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrontTableModel;
use Illuminate\Validation\Rule;

class FrontTableCTRL extends Controller
{
    public function index(){

        $pendings = FrontTableModel::orderBy('case_no')->get();
        return view('TableFront.FrontTable', ['pendings' => $pendings]);
    }

    public function create(){
        return view('TableFront.FrontTableAdd');

    }

    public function store(Request $request){
 
        $this->validate($request,[
            'case_no'=>['required',Rule::unique('pending_t_b_l_s', 'case_no')],
            'school' => 'required',
            'complainantfname' => 'required',
            'complainantlname' => 'required',
            'respondentfname' => 'required',
            'respondentlname' => 'required',
            'charges' => 'required',
            'dateofactions' => 'required',
            'actions' => 'required',
            'status' => 'required',
        ]);
    
        $input = $request->all(); 
        FrontTableModel::create($input); 
        
        return back()->with('successAdd','Case Added Successfully !');
    }

    public function edit($id){

        $pendings = FrontTableModel::findorFail($id);

        return view('TableFront.FrontTableUpdate', ['pendings'=>$pendings]);

    }
    public function update(Request $request, $id){
    
        $pendings = FrontTableModel::findorFail($id);
       
        $this->validate($request,[
          'case_no'=>['required',Rule::unique('pending_t_b_l_s', 'case_no')->ignore($pendings->id)],
          'school' => 'required',
          'complainantfname' => 'required',
          'complainantlname' => 'required',
          'respondentfname' => 'required',
          'respondentlname' => 'required',
          'charges' => 'required',
          'dateofactions' => 'required',
          'actions' => 'required',
          'status' => 'required',
        ]);
       
        $input = $request->all();
        $pendings->update($input);
  
        return back()->with('successupd','Case Has Been Updated !');   
    
    }
  
    public function destroy($id){
        
        FrontTableModel::findorFail($id)->delete();
        return back()->with('successdel',"Charges Has Been Move To Archives !");
    }

    public function PendingArchives(){
        
        $pendings = FrontTableModel::orderBy('case_no')->onlyTrashed()->get();
        return view('TableFront.FrontTableArchives', ['pendings' => $pendings ]);
    }

    public function PendingArchivesDestroy($id){
        
        FrontTableModel::onlyTrashed()->findorfail($id)->forcedelete();
        return back()->with('successdel',"This Case Has Been Deleted Pemanently !");
    }
    
    public function PendingArchivesStore($id){
        
        FrontTableModel::onlyTrashed()->findorfail($id)->restore();
        return back()->with('restor',"This Case Has Restore Successfully !");
    }

    public function show($id){
        $pendings = FrontTableModel::findorfail($id);
        return view('TableFront.FrontTableView', ['pendings' => $pendings]);
    }

}
