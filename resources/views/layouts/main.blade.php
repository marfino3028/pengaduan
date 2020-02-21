<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Aplikasi Penggaduan Santri</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   <!-- Your custom styles (optional) -->
   <link href="{{('mdbpro/css/style.css')}}" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="{{('mdbpro/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{('mdbpro/css/mdb.min.css')}}" rel="stylesheet">
 


</head>
<body class="fixed-sn light-skin">
  @include('layouts.menu')
  @include('layouts.sidebar')
  <!--Main layout-->
  <main>

    <div class="container-fluid">

      @yield('content')

    </div>

  </main>
  <!--/Main layout-->
  @include('layouts.footer')

</body>

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="{{('mdbpro/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{('mdbpro/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{('mdbpro/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{('mdbpro/js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{('mdbpro/js/main.js')}}"></script>
<script type="text/javascript" src="{{('sweetalert2/package/dist/sweetalert2.all.min.js')}}"></script>


<script>
  const tomboldelete = document.querySelector('#tomboldelete');
  tomboldelete.addEventListener('click', function(){
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
  });
</script>
<script>
	$(document).ready(function(){
		$('#datatable').DataTable();
    $('.dataTables_length').addClass('bs-select');
	});
</script>
</html>