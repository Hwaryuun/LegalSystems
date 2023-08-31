@extends('Layout.Layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/AddingCss.css')}}">
@endsection

@section('contents')

<div class="main"> 
    <div class="Add-Holder"> 
        <div class="Add-InP"> 

            <div class ="Top-Form" style="background: gray;">
                <h1 class = "M-TITTL" style="text-transform:uppercase;" >VIEW CASE : {{$pendings->case_no}}</h1>      
            </div>

                <div class ="Mid-Form"> 
                    <div class="EXSepator">
                        <div class="field">
                            <label>Case No. : </label>
                            <input type="text" disabled value="{{$pendings->case_no}}">
                        </div> 
                        <div class="field">
                            <label>School : </label>
                            <input type="text" disabled value="{{$pendings->school}}"> 
                        </div> 
                    </div>

                    <div class="EXSepator">           
                        <div class="EXSepator">
                            <div class="field">
                                <label>Complainant First Name. : </label>
                                <input type="text" disabled value="{{$pendings->complainantfname}}">
                            </div> 
                            <div class="field">
                                <label>Complainant Middle Name : </label>
                                <input type="text" disabled value="{{$pendings->complainantmname}}">  
                            </div>
                        </div>
                        <div class="EXSepator">
                            <div class="field">
                                <label>Complainant Last Name. : </label>
                                <input type="text" disabled value="{{$pendings->complainantlname}}">                
                            </div> 
                            <div class="field">
                                <label>Complainant Suffix : </label>
                                <input type="text" disabled value="{{$pendings->complainantsuffix}}">
                            </div>
                        </div>
                    </div>

                    
                    <div class="EXSepator">           
                        <div class="EXSepator">
                            <div class="field">
                                <label>Respondent First Name. : </label>
                                <input type="text" disabled value="{{$pendings->respondentfname}}">  
                            </div> 
                            <div class="field">
                                <label>Respondent Middle Name : </label>
                                <input type="text" disabled value="{{$pendings->respondentmname}}">   
                            </div>
                        </div>
                        <div class="EXSepator">
                            <div class="field">
                                <label>Respondent Last Name. : </label>
                                <input type="text" disabled value="{{$pendings->respondentlname}}">  
                            </div> 
                            <div class="field">
                                <label>Respondent Suffix : </label>
                                <input type="text"disabled  value="{{$pendings->respondentsuffix}}">  
                            </div>
                        </div>
                    </div>

                   
                  
                    <div class="field">
                        <label>Date Of Action: </label>
                        <input type="text" disabled value="{{\Carbon\Carbon::parse($pendings->dateofactions)->format('F j, Y')}}">
                    </div> 
                
                    <div class="field">
                        <label> LAST ACTION TAKEN </label>
                        <textarea type=" text" disabled> {{$pendings->actions}} </textarea>     
                    </div> 
                
                    <div class="EXSepator">

                        <div class="field">
                            <label> CHARGES </label>
                            <textarea type=" text" disabled> {{old('charges')?? $pendings->charges}} </textarea>      
                        </div> 

                        <div class="field">
                            <label> STATUS </label>
                            <textarea type=" text" disabled> {{$pendings->status}} </textarea>        
                        </div> 
                    </div>
                    <div class="BUTNS-OK">
                        <a class ="Add-ITM-B"  href="javascript:history.back()"  style="background: gray;" > <i class="fa-solid fa-circle-xmark" ></i> <span> Back </span></a>                         
                    </div>       
                </div> 

        </div> 
    </div> 
</div>
@endsection