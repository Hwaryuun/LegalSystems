@extends('Layout.Layout')

@section('front')
    {{$pendings->count()}}
@endsection

@section('contents')

    
<div  class = "M-Table">
    <div class="Table-1" >
        <div class="Table-con">
            <div class="Cnt">
                <H3 class="ORP">PENDING INVESTIGATION</H3>
                <p class="DY">Legal and Investigation Section</p>
            </div>
            <div class="Cnt2">                       
                <div class = "A-DD">
                    <a  href="{{route('PendingArchives')}}" class ="ARCC">  <i class="fa-solid fa-box-archive"></i></a> 
                </div> 
                <div class = "A-DD">
                    <a  href="{{route('front.create')}}" class ="Add-P">  <i class="fa-solid fa-plus"></i> <span> New </span></a>
                </div>                   
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
                                <a class="EditsT" href ="{{route('front.show',$pending->id)}}" > <i class="fa-solid fa-eye"></i> <span> VIEW </span>  </a>      
                                <a class="Edits" href ="{{route('front.edit',$pending->id)}}" > <i class="fa-solid fa-pen-to-square"></i>  <span> EDIT </span>  </a>  
                                <button class="Dlts"  onclick="deleteData({{$pending->id}})" type="submit"><i class="fa-solid fa-trash"></i>  <span> ARCHIVE </span>   </button>                      
                                <form id ="delete-form-{{$pending->id}}" action="{{Route('front.destroy', $pending->id)}}"  method = "POST">  @csrf @method('DELETE')  </form>  
                            </td>
                        </tr>
                     @endforeach
                </tbody>
            </table>          
        </div>                  
    </div>
</div>


  
@endsection