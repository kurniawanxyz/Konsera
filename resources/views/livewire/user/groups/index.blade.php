<div>
    {{-- Header --}}
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Grup</h4>
                <p class="mb-0">Daftar Grup Anda</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#join-group">Bergabung</button>
        </div>
    </div>
    {{-- Header --}}

    {{-- Modal --}}
    <div class="modal fade" id="join-group" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bergabung dengan Grup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <label class="form-label" for="group-code">Masukkan Kode Grup
                            <span class="{{ $this->class }}">{{ $this->text }}</span>
                    </label>
                    <input type="text" class="form-control" wire:model.live="groupCode">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" wire:click="store">Gabung</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal --}}

    {{-- Group List --}}
    <livewire:user.groups.group-list />
    {{-- Group List --}}
</div>
