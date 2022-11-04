@extends('layouts.admin.master')

@section('content')

<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Manage Kategori</h3>
                <p class="text-subtitle text-muted">List Kategori</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Kategori</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCategory">
                    Tambah Kategori
                </button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th style="width: 20%">Nama Kategori</th>
                            <th>Deskripsi</th>
                            <th style="width: 15%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editCategory{{ $category->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteCategory{{ $category->id }}">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                            @include('admin.categories.modal-edit', ['category' => $category])
                            @include('admin.categories.modal-delete', ['category' => $category])
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@include('admin.categories.modal-create')

@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('vendors/simple-datatables/style.css') }}">
    <style>
    .table>:not(caption)>*>* {
        background: transparent;
    } 
    </style>
@endpush

@push('script')
    <script src="{{ asset('vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
@endpush