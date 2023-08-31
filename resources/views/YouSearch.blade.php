
@extends('Layout.Layout')


@section('contents')


@if(count($posts) == count($tbls))

<center>
    <form action="{{route('search')}}" method="GET">
        <div class="logo" >
             <img alt="Google" src="/AssetsIMG/sdologo.png">
        </div>
        <div class="bar">
            <input class="searchbar" type="text" title="Search" name="search">
            <button type="submit"> <img class="voice" src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png" title="Search by Voice"></button>
        </div>
        <div class="buttons">
            <button class="button" type="button">LEGAL & INVESTIGATION SECTION</button>  
        </div>
    </form>

@elseif ($posts->isNotEmpty())

    <form action="{{ route('search') }}" method="GET">
      
        <div class=" gloki"> 
            <div class="bars">
                <input class="searchbars" type="text" title="Search" name="search">
                <button type="submit"> <img class="voices" src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png" title="Search by Voice"></button>
            </div>
            
            <div class="logos">
               <a href="{{ route('search') }}">  <img alt="Google" src="/AssetsIMG/sdologo.png"> </a>
           </div>
        </div>
    </form>

    <div class="popcon">
        <div class="post-list">
            <p><b>Case No.</b></p>
            <p><b>School.</b></p>
            <p><b>Complainant.</b></p>
            <p><b>Respondent.</b></p>
        </div>
    </div>
    @foreach ($posts as $post)
    <div class="popcon">
        <a href="{{route('search.show',$post->id)}}" class="post-list">
            <p>{{$post->case_no}}</p>
            <p>{{$post->school}}</p>
            <p>{{$post->complainantfname}} {{$post->complainantmname}} {{$post->complainantlname}} {{$post->complainantsuffix}}</p>
            <p>{{$post->respondentfname}} {{$post->respondentmname}} {{$post->respondentlname}} {{$post->respondentsuffix}}</p>        
        </a>
    </div>
    @endforeach

    <div style="height: 300px"></div>
    <div class="whatif">
       <h3>WHO MAY FILE A COMPLAINT:</h5>
       <p class="cbs">Any person who has a cause of action may file an administrative complaint against any of the following:</p>
       <p class="cb"> <b>a.</b>  Non-teaching employee</p>
       <p class="cb"> <b>b.</b> Teaching/teaching related employee.</p> 
    </div>
    <div class="whatif">
        <h3>WHERE TO FILE</h5>
        <p class="cbsk">Complaint against non-teaching employee = <b>  Division Office. </b></p>
        <p class="cbsk">Complaint against non-teaching employee = <b>  Division Office or Regional Office. </b></p>
     </div>
     <div class="whatif">
        <h3>WHAT ARE THE REQUIREMENTS:</h5>
        <p class="cbs"> <b>1.</b> Verified Affidavit of Complaint in 4 copies containing the following:</p>
        <p class="cb"> <b>a.</b> Full name and address of the complainant</p>
        <p class="cb"> <b>b.</b> Full name and address of the person complained of, as well as his/her position and office in the Department of Education</p> 
        <p class="cb"> <b>c.</b>  Verified Affidavit of Complaint in 4 copies containing the following:</p>
        <p class="cb"> <b>d.</b> Certified true copies of documentary evidence and affidavits of his/her witnesses, if any.</p> 
        <p class="cbs"> <b>2.</b> Certificate of Non-Forum Shopping</p>
     </div>
@else
    <div style="align-items: ce">
        <h2>No posts found</h2>
    </div>
@endif

@endsection