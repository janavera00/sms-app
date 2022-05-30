<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BCS|School Management System</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Button-modal-ecommerce-1.css">
    <link rel="stylesheet" href="assets/css/Button-modal-ecommerce.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---2-Simple-Registration-Section.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=586c735e7520cbf90c3332a83006de3c">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css?h=ef9efa29ed5490562c2ff272112d2e97">
    <link rel="stylesheet" href="/assets/css/listgridview.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=470f3c1ffdb13785176364e4c38d1fb9">
    <link rel="stylesheet" href="https:/nk" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
</head>
<body>
    @yield ('content')

</body> 
@include('sweetalert::alert')
@if (Session::has('error'))
    <script>
    alert('{{Session::get('error')}}')
        Swal.fire(
            'An Error occured!',
            '{{Session::get('error')}}',
            'error'
        )
    </script>
@endif
@if (Session::has('success'))
    <script>
        Swal.fire(
            'Success!',
            '{{Session::get('success')}}',
            'success'
        )
    </script>
@endif
{{session::forget('success')}}
{{session::forget('error')}}
</html>
