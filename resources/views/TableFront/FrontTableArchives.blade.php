@extends('Layout.Layout')

@section('contents')

    
<div  class = "M-Table">
    <div class="Table-1" >
        <div class="Table-con">
            <div class="Cnt">
                <H3 class="ORPRED">PENDING INVESTIGATION : ARCHIVE </H3>
                <p class="DY">Legal and Investigation Section</p>
            </div>
            <div class = "A-DD">
                <a  href=" {{route ('front.index')}}"  class ="Add-P"> <i class="fa-solid fa-reply"></i> <span> Return </span></a> <!--Modal Button any -->
            </div> 

        </div>


        <div class = " Table-Section">
            <table id="Papers" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>CASE NO.</th> 
                        <th>SCHOOL</th>             
                        <th>COMPLAINANT</th>
                        <th>RESPONDENT</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($pendings as $pending)
                        <tr>
                            <td>{{$pending->case_no}}</td>
                            <td>{{$pending->school}}</td>
                            <td>{{$pending->complainantfname}} {{$pending->complainantmname}} {{$pending->complainantlname}} {{$pending->complainantsuffix}}</td>
                            <td>{{$pending->respondentfname}} {{$pending->respondentmname}} {{$pending->respondentlname}} {{$pending->respondentsuffix}}</td>                        
                            <td class="BTNS-EDTY">  
                                <button class="Dlts" onclick="deleteDataPermanent({{$pending->id}})" type="submit"><i class="fa-solid fa-trash"></i> <span> DELETE </span> </button>
                                    <form id ="deleteP-form-{{$pending->id}}" action="{{Route('PendingArchivesDestroy', $pending->id)}}" method = "POST"> @csrf @method('DELETE')  </form>
                                <button class="EditsT" onclick="resetData({{$pending->id}})" type="submit"><i class="fa-solid fa-repeat"></i> <span> RESTORE </span> </button> 
                                    <form id ="reset-form-{{$pending->id}}" action="{{Route('PendingArchivesStore', $pending->id)}}" method = "POST"> @csrf @method('PUT') </form>     
                            </td>
                        </tr>
                     @endforeach
                </tbody>
            </table>          
        </div>                  
    </div>
</div>
@endsection