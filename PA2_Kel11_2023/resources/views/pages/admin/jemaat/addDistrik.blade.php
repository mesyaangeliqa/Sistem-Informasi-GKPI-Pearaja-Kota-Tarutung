@extends('layouts.admin.master')
@section('title', 'Dashboard')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assetss/js/vendor/forms/selects/select2.min.js')}}"></script>
<script src="{{asset('assetss/demo/pages/form_select2.js')}}"></script>
<script src="{{asset('assetss/js/jquery/jquery.min.js')}}"></script>
@section('content')
<!-- Main content -->
<div class="content-wrapper">

       <!-- Inner content -->
       <div class="content-inner">

              <!-- Page header -->
              <div class="page-header page-header-light shadow">
                     <div class="page-header-content d-lg-flex">
                            

                            
                     </div>

                     <div class="page-header-content d-lg-flex border-top py-1">
                            <div class="d-flex">
                                   <div class="breadcrumb py-2">
                                        @hasrole('admin')
								<a href="{{url('admin/')}}" class="breadcrumb-item"><i class="ph-house"></i></a>
								@else
								<a href="{{url('sek/')}}" class="breadcrumb-item"><i class="ph-house"></i></a>
								@endhasrole    
                                          <span href="#" class="breadcrumb-item">Jemaat</span>
                                          <span class="breadcrumb-item active">Data Distrik</span>
                                          <span class="breadcrumb-item active">Tambah Data Distrik</span>
                                   </div>

                                   <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                          <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                                   </a>
                            </div>

                            <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                                   <div class="d-lg-flex mb-2 mb-lg-0">
                                                 
                                   </div>
                            </div>
                     </div>
              </div>
              <!-- /page header -->


              <!-- Content area -->
              <div class="content">

                     <!-- Main charts -->
                     <div class="row">
                            <div class="col-xl-7">

                            </div>
                            
                            <div class="col-xl-5">
                                   
                            </div>
                     </div>
                     <!-- /main charts -->
                     
                     

                     <!-- Dashboard content -->
                     <div class="card">
                         <div class="card-header">
                            @if ($sek->id)
                                   <h5 class="mb-0">Edit Distrik</h5>
                            @else
                                   <h5 class="mb-0">Tambah Distrik</h5>
                                
                            @endif
                         </div>                        

                         <div class="card-body border-top">
                            @if ($sek->id)
                                   @if (Auth::user()->hasrole('admin'))
                                   <form action="{{route('admin.distrik.update', $sek->id)}}" method="POST">    
                                   @else
                                   <form action="{{route('sek.distrik.update', $sek->id)}}" method="POST">                                       
                                   @endif
                                   @csrf
                                   @method('PATCH')
                                   <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" value="{{$sek->nama}}" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama Sektor">
                                        @error('nama')                                                               
                                             <div class="invalid-feedback">{{$message}}</div>
                                                  <script>
                                                      Swal.fire(
                                                            'Gagal!',
                                                            'Silahkan input Nama!',
                                                            'error'
                                                       )
                                                   </script>
                                          @enderror
                                   </div>
                                   
                                   <div class="mb-3">
                                        <label class="form-label">Lokasi</label>
                                        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" value="{{$sek->lokasi}}" name="lokasi" placeholder="Lokasi Sektor">
                                        @error('Lokasi')                                                               
                                             <div class="invalid-feedback">{{$message}}</div>
                                                  <script>
                                                      Swal.fire(
                                                            'Gagal!',
                                                            'Silahkan input Lokasi!',
                                                            'error'
                                                       )
                                                   </script>
                                          @enderror

                                   </div>

                                   <div class="mb-3">
                                          <label class="col-form-label col-lg-3">Penatua</label>
                                          <div class="form-control-feedback">
                                               <select name="penatua" class="form-control select @error('penatua') is-invalid @enderror">
                                                    <option value="" selected disabled>Pilih Penatua</option>
                                                    @foreach ($penatua as $p)
                                                         <option value="{{$p->nama}}" {{$sek->id==$p->nama?"selected":""}}>{{ucfirst($p->nama)}}</option>
                                                    @endforeach             
                                               </select>
                                               @error('penatua')                                                               
                                                 <div class="invalid-feedback">{{$message}}</div>
                                                        <script>
                                                        Swal.fire(
                                                               'Gagal!',
                                                               'Silahkan input Penatua!',
                                                               'error'
                                                        )
                                                        </script>
                                                 @enderror
                                          </div>
                                     </div>
       
                                   <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Edit Distrik <i class="ph-paper-plane-tilt ms-2"></i></button>
                                   </div>                   
                                   </form>    
                            @else
                                   @if (Auth::user()->hasrole('admin'))
                                   <form action="{{route('admin.distrik.store')}}" method="POST">       
                                   @else
                                   <form action="{{route('sek.distrik.store')}}" method="POST">                                   
                                   @endif
                                   @csrf
                                   <div class="mb-3">
                                          <label class="form-label">Nama</label>
                                          <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama Sektor">
                                          @error('nama')                                                               
                                             <div class="invalid-feedback">{{$message}}</div>
                                                  <script>
                                                      Swal.fire(
                                                            'Gagal!',
                                                            'Silahkan input Nama!',
                                                            'error'
                                                       )
                                                   </script>
                                          @enderror
                                   </div>

                                   <div class="mb-3">
                                          <label class="form-label">Lokasi</label>
                                          <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" placeholder="Lokasi Sektor">
                                          @error('lokasi')                                                               
                                             <div class="invalid-feedback">{{$message}}</div>
                                                  <script>
                                                      Swal.fire(
                                                            'Gagal!',
                                                            'Silahkan input Lokasi!',
                                                            'error'
                                                       )
                                                   </script>
                                          @enderror
                                          
                                   </div>
                                   <div class="text-end">
                                          <button type="submit" class="btn btn-primary">Tambah Distrik <i class="ph-paper-plane-tilt ms-2"></i></button>
                                   </div>                   
                                   </form>
                            @endif
                         </div>
                    </div>
                     <!-- /dashboard content -->

              </div>
              <!-- /content area -->


              <!-- Footer -->
              <div class="navbar navbar-sm navbar-footer border-top">
               <div class="container-fluid">
                    <span>&copy; 2023 GKPI Pearaja Tarutung</span>
                    
               </div>
          </div>
              <!-- /footer -->

       </div>
       <!-- /inner content -->

</div>
@endsection
<!-- /main content -->
@section('custom_js')
<script type="text/javascript">
     @if(session()->has('success'))
		Swal.fire(
			'Berhasil!',
			'{{session('success')}}',
			'success'
		)
	@endif
	@if(session()->has('error'))
		Swal.fire(
			'Gagal!',
			'{{session('error')}}',
			'error'
		)
	@endif
	@if(session()->has('sdelete'))
		Swal.fire(
			'Berhasil!',
			'{{session('sdelete')}}',
			'success'
		)
	@endif
</script>
@endsection