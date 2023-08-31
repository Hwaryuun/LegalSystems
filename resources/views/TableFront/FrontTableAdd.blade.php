@extends('Layout.Layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/AddingCss.css')}}">
@endsection

@section('contents')

<div class="main"> 
    <div class="Add-Holder"> 
        <div class="Add-InP"> 

            <div class ="Top-Form">
                <h1 class = "M-TITTL">ADD CASES</h1>      
            </div>

            <form action="{{Route('front.store')}}" method="POST" enctype="multipart/form-data">
            @csrf  

                <div class ="Mid-Form"> 
                    <div class="EXSepator">
                        <div class="field">
                            <label>Case No. : </label>
                            <input type="text" @error('case_no') id="errors" @enderror  name="case_no" placeholder="EXAMPLE: P.I. No. 2023-QC-T-00" value="{{old('case_no')}}">
                            <span style="color: red;">@error('case_no') {{$message}} @enderror</span>   
                        </div> 
                        <div class="field">
                            <label>School : </label>
                            <input type="text" @error('school') id="errors" @enderror  name="school" placeholder="EXAMPLE: Hogwarts School of Magic" value="{{old('school')}}">
                            <span style="color: red;">@error('school') {{$message}} @enderror</span>   
                        </div> 
                    </div>

                    <div class="EXSepator">           
                        <div class="EXSepator">
                            <div class="field">
                                <label>Complainant First Name. : </label>
                                <input type="text" @error('complainantfname') id="errors" @enderror  name="complainantfname" placeholder="EXAMPLE: Mike" value="{{old('complainantfname')}}">
                                <span style="color: red;">@error('complainantfname') {{$message}} @enderror</span>   
                            </div> 
                            <div class="field">
                                <label>Complainant Middle Name : </label>
                                <input type="text" @error('complainantmname') id="errors" @enderror  name="complainantmname" placeholder="EXAMPLE: Wazawski" value="{{old('complainantmname')}}">
                                <span style="color: red;">@error('complainantmname') {{$message}} @enderror</span>   
                            </div>
                        </div>
                        <div class="EXSepator">
                            <div class="field">
                                <label>Complainant Last Name. : </label>
                                <input type="text" @error('complainantlname') id="errors" @enderror  name="complainantlname" placeholder="EXAMPLE: Tyson" value="{{old('complainantlname')}}">
                                <span style="color: red;">@error('complainantlname') {{$message}} @enderror</span>   
                            </div> 
                            <div class="field">
                                <label>Complainant Suffix : </label>
                                <input type="text" @error('complainantsuffix') id="errors" @enderror  name="complainantsuffix" placeholder="EXAMPLE: Jr." value="{{old('complainantsuffix')}}">
                                <span style="color: red;">@error('complainantsuffix') {{$message}} @enderror</span>   
                            </div>
                        </div>
                    </div>

                    
                    <div class="EXSepator">           
                        <div class="EXSepator">
                            <div class="field">
                                <label>Respondent First Name. : </label>
                                <input type="text" @error('respondentfname') id="errors" @enderror  name="respondentfname" placeholder="EXAMPLE: Juan" value="{{old('respondentfname')}}">
                                <span style="color: red;">@error('respondentfname') {{$message}} @enderror</span>   
                            </div> 
                            <div class="field">
                                <label>Respondent Middle Name : </label>
                                <input type="text" @error('respondentmname') id="errors" @enderror  name="respondentmname" placeholder="EXAMPLE: Bonifacio" value="{{old('respondentmname')}}">
                                <span style="color: red;">@error('respondentmname') {{$message}} @enderror</span>   
                            </div>
                        </div>
                        
                        <div class="EXSepator">
                            <div class="field">
                                <label>Respondent Last Name. : </label>
                                <input type="text" @error('respondentlname') id="errors" @enderror  name="respondentlname" placeholder="EXAMPLE: Dela Cruz" value="{{old('respondentlname')}}">
                                <span style="color: red;">@error('respondentlname') {{$message}} @enderror</span>   
                            </div> 
                            <div class="field">
                                <label>Respondent Suffix : </label>
                                <input type="text" @error('respondentsuffix') id="errors" @enderror  name="respondentsuffix" placeholder="EXAMPLE: Jr." value="{{old('respondentsuffix')}}">
                                <span style="color: red;">@error('respondentsuffix') {{$message}} @enderror</span>   
                            </div>
                        </div>
                    </div>
            
                    <div class="field">
                        <label>Date Of Action: </label>
                        <input type="date" @error('dateofactions') id="errors" @enderror  name="dateofactions"  value="{{old('dateofactions')}}">
                        <span style="color: red;">@error('dateofactions') {{$message}} @enderror</span>   
                    </div> 
                
                    <div class="field">
                        <label> LAST ACTION TAKEN </label>
                        <textarea type=" text" @error('actions') id="errors" @enderror name="actions" > {{old('actions')}} </textarea>
                        <span style="color: red;"> @error('actions') {{$message}} @enderror </span>       
                    </div> 
                
                    <div class="EXSepator">

                        <div class="field">
                            <label> CHARGES </label>
                            <textarea type=" text" @error('charges') id="errors" @enderror name="charges"> {{old('charges')}} </textarea>
                            <span style="color: red;"> @error('charges') {{$message}} @enderror </span>         
                        </div> 

                        <div class="field">
                            <label> STATUS </label>
                            <textarea type=" text" @error('status') id="errors" @enderror name="status" > {{old('status')}} </textarea>
                            <span style="color: red;"> @error('status') {{$message}} @enderror </span>         
                        </div> 
                    </div>
                    <div class="BUTNS-AD">
                        <a class ="Add-ITM-C"  href="{{Route('front.index')}}"> <i class="fa-solid fa-circle-xmark"  ></i> <span> Back </span></a>
                        <button class ="Add-ITM" type="submit"> <i class="fa-solid fa-circle-plus"></i> <span> Add </span></button>
                    </div>
                    
                    
                </div> 

            </form>

        </div> 
    </div> 
</div>

@endsection  

