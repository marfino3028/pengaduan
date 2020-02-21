@extends('layouts.main')
@php
    
@endphp
@section('content')
<!-- Table with panel -->
<div class="card card-cascade narrower">

  <!--Card image-->
  <div
    class="view view-cascade gradient-card-header danger-color-dark narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">



    <a href="" class="white-text mx-3">Table Data Kategori</a>

    <div>
      <a type="button" href="#" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal"
        data-target="#modalSubscriptionForm">
        <i class="fa fa-plus mt-0"></i>
      </a>
    </div>

  </div>
  <!--/Card image-->

  <div class="px-4">

    <div class="table-responsive table-wrapper">
      <!--Table-->
      <table class="table table-hover mb-0">

        <!--Table head-->
        <thead>
          <tr>

            <th class="th-lg">
              <a>No

              </a>
            </th>
            <th class="th-lg">
              <a href="">Nama

              </a>
            </th>
            <th class="th-lg">
              <a href="">Action

              </a>
            </th>
          </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
          @foreach($kategori as $k)
          <tr>

            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->nama }}</td>
            <td>
            <a class="btn btn-yellow btn-sm" data-toggle="modal" data-target="#edit" id="edit_kategori" href="{{ action('KategoriController@edit',['id'=>$k->id]) }}">
                <i class="fas fa-edit mr-1"></i>Edit</a>
              <a id="tomboldelete" href="/kategori/hapus/{{ $k->id }}" class="btn btn-red btn-sm" >
                <i class="fas fa-trash mr-1" ></i>Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
        <!--Table body-->
      </table>
      <!--Table-->
    </div>

  </div>

</div>
<!-- Table with panel -->
<form action="/kategori/store" method="post">
  @csrf
<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Kategori</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-id-badge prefix grey-text"></i>
        <input type="text" id="form3" value="{{( time() )}}" class="form-control validate disabled">
          <label data-error="wrong" data-success="right" for="form3">ID</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-map prefix grey-text"></i>
          <input type="text" id="form2" class="form-control validate" name="nama">
          <label data-error="wrong" data-success="right" for="form2">Nama Asal</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn danger-color text-light">Submit <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>
</form>

@foreach($kategori as $k)
<form action="/kategori/update" method="post">
  @csrf
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Kategori</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3" id="modal_edit_kategori">
        <div class="md-form mb-5">
          <i class="fas fa-id-badge prefix grey-text"></i>
          <input type="text" id="form3" name="id" class="form-control validate" name="id" value="{{($k -> id)}}">
          <label data-error="wrong" data-success="right" for="form3">ID</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-window-restore prefix grey-text"></i>
          <input type="text" id="form2" name="nama" class="form-control validate" name="nama" value="{{($k -> nama)}}">
          <label data-error="wrong" data-success="right" for="form2">Nama Asal</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn danger-color text-light">Edit <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>
</form>
@endforeach

<script type="text/javascript">
  $(document).on("click", "#edit_kategori", function(){
      var idktg      = $(this).data('idktg');
      var ktg    = $(this).data('ktg');
      
      $(".modal-body#modal_kategori_jenis #id").val(idktg);             
      $(".modal-body#modal_kategori_jenis #nama").val(ktg);
     })
</script>
@endsection

