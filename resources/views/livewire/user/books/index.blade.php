<div>
    {{-- Header --}}
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Buku</h4>
                <p class="mb-0">Daftar buku</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <a wire:navigate href="{{ route('user.dashboard') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    {{-- Header --}}

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
                                            wire:click="downloadBook({{ $book->id }})">Download</button>
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

            $wire.on('showPdf', () => {
                $('#pdfModal').modal('show');
            });
        </script>
    @endscript

</div>
