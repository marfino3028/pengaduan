@extends('layouts.main')

@section('content')
    <!-- Material form subscription -->
<div class="card">

    <h5 class="card-header danger-color white-text text-center py-4">
        <strong>Tambah Data Kategori</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-sm-5">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="#!">

        

            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" id="materialSubscriptionFormPasswords" class="form-control">
                <label for="materialSubscriptionFormPasswords">ID</label>
            </div>

            <!-- E-mai -->
            <div class="md-form">
                <input type="email" id="materialSubscriptionFormEmail" class="form-control">
                <label for="materialSubscriptionFormEmail">Nama</label>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-outline-danger btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Submit</button>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form subscription -->
@endsection