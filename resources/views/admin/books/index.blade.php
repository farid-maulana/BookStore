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
                <h3>Manage Buku</h3>
                <p class="text-subtitle text-muted">List Buku</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Buku</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newBook">
                    Tambah Buku
                </button>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Cover Buku</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Harga</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/books/' . $book->photo) }}" alt="Foto Buku" width="100px">
                                </td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->publisher }}</td>
                                <td>{{ $book->price }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#detailBook{{ $book->id }}">
                                        Detail
                                    </button>
                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editBook{{ $book->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteBook{{ $book->id }}">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                            @include('admin.books.modal-detail', ['book' => $book])
                            @include('admin.books.modal-edit', ['book' => $book])
                            @include('admin.books.modal-delete', ['book' => $book])
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@include('admin.books.modal-create', ['categories' => $categories])

@endsection

@push('style')
    <style>
    .table>:not(caption)>*>* {
        background: transparent;
    } 
    </style>
@endpush