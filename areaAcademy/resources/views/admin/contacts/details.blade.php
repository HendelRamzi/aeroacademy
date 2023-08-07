@extends('admin.layouts.admin')

@push('title')
    Formations
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
              <h3>details contact</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">details contact n°: {{$contact->id}}</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @livewire('contact.details', ['contact' => $contact])
        </div>
    </section>
@endsection

@push('custom-js')
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>

  @livewireScripts



    @vite([
        "resources/js/admin/plugins/jquery.js",
        "resources/js/admin/plugins/bootstrap.bundle.js",
        "resources/js/admin/adminLte.js",
    ])
@endpush