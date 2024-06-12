<div>
    {{-- Header --}}
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Halo {{ $user->name }}!</h4>
                <p class="mb-0">Di halaman ini anda bisa memperbarui profil</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <a href="{{ route('user.dashboard') }}" class="btn btn-primary" wire:navigate>Kembali</a>
        </div>
    </div>
    {{-- Header --}}

    {{-- Profile Card --}}
    <div class="card">
        <div class="card-body">
            <div class="row">
                {{-- Update Profile Form --}}
                <div class="col-12">
                    <form wire:submit.prevent="updateProfile" enctype="multipart/form-data"c>
                        <div class="form-group text-center">
                            <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('assets/images/avatar/default-avatar.jpg') }}"
                                alt="Profile Image"
                                style="width: 100px; height: 100px; object-fit: cover ;cursor: pointer; object-fit: cover"
                                class="mb-2 rounded-2" @click="$refs.avatar.click()">
                            <input type="file" wire:model.live="avatar" x-ref="avatar" style="display: none;"
                                accept="image/*">
                            <p for="image">Klik avatar untuk ganti foto profil</p>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name">Nama</label>
                            <input class="form-control @error('nama') is-invalid @enderror" type="text"
                                wire:model="nama">
                            @error('nama')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email"
                                wire:model="email">
                            @error('email')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
                {{-- Update Profile Form --}}

                {{-- Update Password Form --}}
                <div class="col-12">
                    <h4>Ubah Kata Sandi</h4>
                    <form wire:submit="updatePassword">
                        <div class="form-group">
                            <label class="form-label" for="oldPassword">Kata sandi lama</label>
                            <input class="form-control @error('oldPassword') is-invalid @enderror" type="password" wire:model="oldPassword">
                            @error('oldPassword')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="newPassword">Kata sandi baru</label>
                            <input class="form-control @error('newPassword') is-invalid @enderror" type="password" wire:model="newPassword">
                            @error('newPassword')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
                {{-- Update Password Form --}}
            </div>
        </div>
    </div>
    {{-- Profile Card --}}

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
        </script>
    @endscript
</div>
