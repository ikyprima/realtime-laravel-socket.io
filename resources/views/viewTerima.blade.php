<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>View Terima</title>        
        {{-- Laravel Mix - JS File --}}
        <script src="{{ mix('js/app.js') }}"></script>   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
    <body>
    <div class="jumbotron text-center">
    <h1>Realtime Notifikasi Socket.io di Laravel</h1>
    <p>sebariskode.id</p> 
</div>
  
<div class="container">
  <div class="row" >
  <div class="alert alert-success" id="notif">
    <strong>Sukses!</strong> Realtime Notification Laravel 8 dan Socket.io.
    </div>
    
  </div>
</div>

    
   

    </body>
    <script>
        $(document).ready(function(){
            $("#notif").hide();
            window.Echo.channel('notifikasi-chanel')
            .listen('.listen', (e) => {
                 $("#notif").fadeTo(2000, 500).slideUp(500, function() {
                    $("#notif").slideUp(500);
                });
               
            })
        });
        
    </script>
</html>