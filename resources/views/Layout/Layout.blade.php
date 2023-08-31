
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LEGAL </title>


    <link rel="stylesheet" href="{{ asset('css/Overview.css')}}">
    <link rel="icon" href="{{asset('/AssetsIMG/male.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/TableM.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/Specifications.css')}}">
    <link rel="stylesheet" href="{{ asset('css/Toasted.css')}}">
    @yield('css')
 
  </head>
<body>

    <div class="main"> 

        {{-- @include('Layout.Navigation') --}}
        @yield('contents')
    
    </div>

    <script src="{{asset('js/SweetAlert.JS')}}"></script>
    <script src="{{asset('js/TBLS.JS')}}"></script>
    <script src="{{asset('js/TBLM.JS')}}"></script>
    <script src="{{asset('js/Connection.JS')}}"></script>
    <script src="{{asset('js/Preview.JS')}}"></script>
    <script src="{{asset('js/Toasted.JS')}}"></script>
    <script src="{{asset('js/Sweet.JS')}}"></script>

     

    <script>

        const Toast = Swal.mixin({           
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                width: 350,
                showCloseButton: true,
                timerProgressBar: true,
                didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
        })
      
      @if(Session::has('successAdd'))     
              
                Toast.fire({
                icon: 'success',
                title: '{{session('successAdd')}}'
        })
            
      @endif
      @if(Session::has('successdel'))  

                Swal.fire(
                   'Deleted!',
                   '{{session('successdel')}}',
                   'success'
                )
      @endif

      @if(Session::has('herror')) 
      
      Toast.fire({
              icon: 'error',
              title: '{{session('herror')}}'
      })
      @endif


      @if(Session::has('successban')) 
      
      Swal.fire(
              'Suspended !',
              '{{session('successban')}}',
              'success'
      ) 
      @endif

      @if(Session::has('successupd')) 
      
                Swal.fire(
                        'Upadated !',
                        '{{session('successupd')}}',
                        'success'
                ) 
      @endif

      @if(Session::has('restor')) 
      
                Swal.fire(
                        'Restored !',
                        '{{session('restor')}}',
                        'success'
                ) 
      @endif

      @if($errors->any())     
                Toast.fire({
                        icon: 'error',
                        title: 'Some Fields Are Empty !'
                })
      @endif
      
      
      @if(Session::has('errorss')) 
      
      Toast.fire({
              icon: 'warning',
              title: '{{session('errorss')}}'
      })

      @endif
      

        @if(Session::has('Log')) 
      
        Toast.fire({
                icon: 'success',
                title: '{{session('Log')}}'
        })

        @endif
    
        @if(Session::has('Cannot')) 

   
         Swal.fire({
          icon: 'error',
          title: 'Cannot Be Deleted',
          html: '{{session('Cannot')}}',
          backdrop: `
                rgba(0,0,123,0.4)
                url("/AssetsIMG/nyan.gif")
                left top
                no-repeat
                 `
          })
      

        @endif
  
      </script>
   

</body>
