<div class="modal fade text-left" id="editBook{{ $book->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Edit Buku</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">ISBN <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" name="isbn" class="form-control" value="{{ $book->isbn }}" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Judul Buku <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label">Deskripsi Buku</label>
                            <div class="form-group">
                                <textarea name="description" class="form-control" style="resize: none">{{ $book->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Kategori Buku <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" class="text-capitalize" {{ $book->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Pengarang <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" name="author" class="form-control" value="{{ $book->author }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Penerbit <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" name="publisher" class="form-control" value="{{ $book->publisher }}" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Tahun Terbit <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" name="release_year" class="form-control" value="{{ $book->release_year }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Harga <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="number" name="price" class="form-control" value="{{ $book->price }}" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Stok <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="number" name="stok" class="form-control" value="{{ $book->stok }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label">Cover Buku <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="file" name="photo" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
