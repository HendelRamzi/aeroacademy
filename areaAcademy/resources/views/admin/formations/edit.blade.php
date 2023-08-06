@extends('admin.layouts.admin')

@push('title')
    Formations
@endpush




@push('custom-css')
@livewireStyles

<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"
/>

@endpush


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h3>modifer une formations</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">modifier une formations</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      
          <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @livewire('formation.edit', ['formation' => $formation])
        </div>
    </section>
@endsection

@push('custom-js')
@livewireScripts

<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>


    @vite([
        "resources/js/admin/plugins/jquery.js",
        "resources/js/admin/plugins/bootstrap.bundle.js",
        "resources/js/admin/adminLte.js",
    ])
@endpush