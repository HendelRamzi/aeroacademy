@extends('admin.layouts.admin')

@push('title')
    Inscriptions
@endpush




@push('custom-css')
@livewireStyles
@endpush


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Inscriptions</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Inscriptions</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      
          <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @livewire('inscription.index')
        </div>
    </section>
@endsection

@push('custom-js')
@livewireScripts

    @vite([
        "resources/js/admin/plugins/jquery.js",
        "resources/js/admin/plugins/bootstrap.bundle.js",
        "resources/js/admin/adminLte.js",
    ])
@endpush