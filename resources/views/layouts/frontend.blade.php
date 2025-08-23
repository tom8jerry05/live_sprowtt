<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
<title>Sprowtt Launch Pad </title>

<link rel="icon" href="{{ asset('frontend/images/fav-icon.png') }}" type="image/gif" sizes="16x16"> 

<link href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('frontend/css/stylesheet.css') }}" type="text/css" rel="stylesheet">

<link href="{{ asset('frontend/css/content-slider.css') }}" rel="stylesheet" type="text/css"/>
<!-- select2 -->
<link href="{{ asset('frontend/plugins/select2/dist/css/select2.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/plugins/select2-theme-bootstrap4/dist/select2-bootstrap.css') }}" rel="stylesheet">

<!-- Sweet Alert2 -->
<link href="{{ asset('common/plugins/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">

<!-- font-awesome -->
<link href="{{ asset('frontend/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

<link href="{{ asset('frontend/plugins/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
<!-- <script>
    window.addEventListener('DOMContentLoaded', function(){
            alert();
            if(screen.width <=768){
                document.cookie = "screen=2";
            }else if(screen.width >768){
                document.cookie = "screen=3";
            }
     });
</script> -->
</head>
<body>
	 @include('frontend.layout.header')

	 @yield('content')

	 @include('frontend.layout.footer')
</body>

<script src="{{ asset('frontend/js/jquery-3.2.1.slim.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- jQuery 3 -->
<script src="{{ asset('backend/bower_components/jquery/dist/jquery.min.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

<!-- select2 -->
<script src="{{ asset('frontend/plugins/select2/dist/js/select2.full.js') }}" ></script>

<!-- Sweet Alert2 -->
<script src="{{ asset('common/plugins/sweetalert2/dist/sweetalert2.js') }}" ></script>


<link href="{{ asset('frontend/plugins/bootstrap-select/dist/js/bootstrap-select.min.js') }}" rel="stylesheet">

@yield('script')



<script>
    $('form').on('focus', 'input[type=number]', function (e) {
        $(this).on('mousewheel.disableScroll', function (e) {
            e.preventDefault()
        })
    })

    $('form').on('blur', 'input[type=number]', function (e) {
        $(this).off('mousewheel.disableScroll')
    })



	$(document).on('submit', '#newsletter-form', function(e) {
    	e.preventDefault();
    	var data = $(this).serializeArray();
    	$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route("NewsLetterForm") }}",
            type: "POST",              
            data: data,
            success: function(result){
                if(result['success']){
                    Swal.fire(
                        'Good job!',
                        result['success'],
                        'success'
                    );
                    $("#newsletter-form").trigger("reset");
                }else if( result['errors']){
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: result['errors'],
                    })
                    $("#newsletter-form").trigger("reset");
                }
            }
        });
	});


    $(document).on('submit', '#contact-form', function(e) {
        e.preventDefault();
        var data = $(this).serializeArray();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route("ContactForm") }}",
            type: "POST",              
            data: data,
            success: function(result){
                if(result == 1){
                    Swal.fire(
                        'Good job!',
                        'Your message has been sent successfully!',
                        'success'
                    );
                    $("#contact-form").trigger("reset");
                }else if( result == 0){
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong.. Try again later!',
                    })
                    $("#contact-form").trigger("reset");
                }
            }
        });
    });

    $(document).ready(function(){
        $(".ftabt-read-more").on('click',function(){
            $('#FooterAboutReadModal').modal('show');
        });

        $('.listitems-teams').mouseover(function(){
            $(this).find('.teamsmenu').show();
            $('.aboutmenu').hide();
        });

        $('.teamsmenu').mouseout(function(){
            $(this).hide();
        });

        $('.listitems-about').mouseover(function(){
            $(this).find('.aboutmenu').show();
            $('.teamsmenu').hide();
        });
        
        $('.aboutmenu').mouseout(function(){
            $(this).hide();
        });
    });

    function openNav() {
        $('#mySidenav').css('width','50%');
    }

    function closeNav() {
        $('#mySidenav').css('width','0');
    }

</script>
</html>
