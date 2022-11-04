<div class="modal fade text-left" id="detailBook{{ $book->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Detail Buku</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('storage/books/' . $book->photo) }}" alt=""
                            width="150px">
                    </div>
                    <div class="col-9">
                        <dl class="row">
                            <dt class="col-sm-3">ISBN</dt>
                            <dd class="col-sm-9">{{ $book->isbn }}</dd>

                            <dt class="col-sm-3">Judul Buku</dt>
                            <dd class="col-sm-9">{{ $book->title }}</dd>

                            <dt class="col-sm-3">Kategori Buku</dt>
                            <dd class="col-sm-9">{{ $book->category->name }}</dd>

                            <dt class="col-sm-3">Deskripsi</dt>
                            <dd class="col-sm-9">{{ $book->description }}</dd>

                            <dt class="col-sm-3">Pengarang</dt>
                            <dd class="col-sm-9">{{ $book->author }}</dd>

                            <dt class="col-sm-3">Penerbit</dt>
                            <dd class="col-sm-9">{{ $book->publisher }}</dd>

                            <dt class="col-sm-3">Tahun Terbit</dt>
                            <dd class="col-sm-9">{{ $book->release_year }}</dd>

                            <dt class="col-sm-3">Harga</dt>
                            <dd class="col-sm-9">{{ 'Rp ' . number_format($book->price, 0, ',', '.') }}</dd>

                            <dt class="col-sm-3">Stok</dt>
                            <dd class="col-sm-9">{{ $book->stok }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Batal</span>
                </button>
            </div>
        </div>
    </div>
</div>
