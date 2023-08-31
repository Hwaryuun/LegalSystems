
<div class="cards">
    <a  href="{{route('front.index')}}" class="card" id="{{ Request::is('front') 
                                                         || Request::is('/')
                                                         || Request::is('front/create')
                                                         || Request::is('front/*/edit')
                                                         || Request::is('front/*')
                                                         || Request::is('front/PendingArchives') ? 'activecard' : ''}}">
        <div class="card-content">
            <div class="number">@yield('front')</div>
            <div class="card-name">Pending Investigation</div>
        </div>
        <div class="icon-box">
            <i class="fa-solid fa-bars-progress"></i>
        </div>
    </a>
    <a href="{{route('charges.index')}}" class="card" id="{{ Request::is('charges')
                                                          || Request::is('charges/create') 
                                                          || Request::is('charges/*/edit') ? 'activecard' : ''}}">
        <div class="card-content">
            <div class="number">@yield('charges')</div>
            <div class="card-name">Charges</div>
        </div>
        <div class="icon-box">
            <i class="fa-solid fa-file-signature"></i>
        </div>
    </a>
    <a href="{{route('actions.index')}}" class="card" id="{{ Request::is('actions')
                                                          || Request::is('actions/create') 
                                                          || Request::is('actions/*/edit') ? 'activecard' : ''}}">
        <div class="card-content">
            <div class="number">@yield('actions')</div>
            <div class="card-name">Actions </div>
        </div>
        <div class="icon-box">
            <i class="fa-regular fa-newspaper"></i>
        </div>
    </a>
    <a href="{{route('status.index')}}" class="card" id="{{ Request::is('status')
                                                         || Request::is('status/create') 
                                                         || Request::is('status/*/edit')? 'activecard' : ''}}">
        <div class="card-content">
            <div class="number">@yield('status')</div>
            <div class="card-name">Status</div>
        </div>
        <div class="icon-box">
            <i class="fa-solid fa-list-check"></i>
        </div>
    </a>
