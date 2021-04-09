<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Soclial clinic</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/socialc-fav.png')}}">
    <!-- <meta property="og:image" content="images/socialc-fav.png" /> -->
    <link href="{{asset('css/new_homepage.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}"> -->
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href=“https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css”/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142464576-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-142464576-1');
        gtag('config', 'AW-665818196');
    </script>

    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-665818196/-d44CKW-4-IBENSovr0C'
        });
    </script>

    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-665818196/-d44CKW-4-IBENSovr0C'
        });
    </script>
</head>

<body class="sb-nav-fixed">
        @include('dashboard.header')
    <div id="layoutSidenav">
        @include('dashboard.sidebar')
        <div id="layoutSidenav_content">
            <main>
               @section('content')

               @show
            </main>
            @include('dashboard.footer')
        </div>
    </div>
    <div class="modal fade" id="alert_modal" tabindex="-1" role="dialog" aria-labelledby="alert_modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Notification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        Welcome to the social clinic
                        No. 1 Nigerian/African Social Media Service Provider From as Low as ₦400
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{asset('assets/demo/datatables-demo.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#notification').summernote({
                tabsize: 2,
                height: 400
            });
        });

        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
    </script>
    <!-- <script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script> -->
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>

    @section('js')

    @show
    
</body>

</html>