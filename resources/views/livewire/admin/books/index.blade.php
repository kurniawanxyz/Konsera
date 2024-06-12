<div>
    {{-- Modal --}}
    <div wire:ignore.self class="modal fade" id="modalBooks" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $modal_title }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="resetModal">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label" for="judul">Judul</label>
                        <input class="form-control @error('judul') is-invalid @enderror" type="text"
                            wire:model="judul">
                        @error('judul')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="file">File</label>
                        <input class="form-control @error('file') is-invalid @enderror" type="file" accept=".pdf"
                            wire:model="file">
                        @error('file')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal"
                        wire:click="resetModal">Batal</button>
                    <button type="button" class="btn btn-primary"
                        @if ($modal_title == 'Tambah Buku') wire:click="addBook"
                    @else wire:click="updateBook" @endif>Simpan</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal --}}

    {{-- Modal PDF --}}
    <div wire:ignore.self class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="pdfModalLabel">{{ $selectedBook ? $selectedBook->title : '' }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    @if ($selectedBook)
                        <embed src="{{ asset('storage/' . $selectedBook->file) }}" type="application/pdf" width="100%"
                            height="600px" />
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- Modal PDF --}}

    {{-- Header --}}
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Buku</h4>
                <p class="mb-0">Daftar buku yang sudah di upload</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <button class="btn btn-primary" wire:click="addModal">Tambah</button>
        </div>
    </div>
    {{-- Header --}}

    {{-- Books List --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Buku</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th style="width:80px;"><strong>No.</strong></th>
                            <th><strong>Judul</strong></th>
                            <th><strong>File</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($books as $book)
                            <tr>
                                <td><strong>{{ $loop->iteration }}</strong></td>
                                <td>{{ $book->title }}</td>
                                <td>{{ basename($book->file) }}</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <button class="btn btn-primary"
                                            wire:click="showPdf({{ $book->id }})">Show</button>
                                        <button class="btn btn-warning"
                                            wire:click="editBook({{ $book->id }})">Edit</button>
                                        <button class="btn btn-danger"
                                            wire:click="deleteConfirmation({{ $book->id }})">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                    Tidak ada data.
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Books List --}}

    @script
        <script>
            $wire.on('notify', data => {
                Swal.fire({
                    title: data.title,
                    text: data.message,
                    type: data.type,
                    timer: 2e3,
                    showConfirmButton: !1,
                });
            });

            $wire.on('close-modal', () => {
                $('#modalBooks').modal('hide');
            });

            $wire.on('showPdf', () => {
                $('#pdfModal').modal('show');
            });

            $wire.on('open-modal', () => {
                $('#modalBooks').modal('show');
            });

            $wire.on('deleteConfirmation', data => {
                Swal.fire({
                    title: data.title,
                    text: data.message,
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, hapus!"
                }).then((result) => {
                    if (result.value) {
                        $wire.deleteBook(data.bookId)
                    }
                });
            })
        </script>
    @endscript
</div>
