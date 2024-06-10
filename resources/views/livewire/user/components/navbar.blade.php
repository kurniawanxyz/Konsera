<div>
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

    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar" wire:ignore>
                            @yield('title')
                        </div>
                    </div>

                    <ul class="navbar-nav header-right">
                        <li class="nav-item">
                            {{-- Button Gabung Group --}}
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#join-group">Gabung
                                Grup</button>
                            {{-- Button Gabung Group --}}
                        </li>

                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                                <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('assets/images/avatar/default-avatar.jpg') }}"
                                    width="20" alt="" style="object-fit: cover"/>
                                <div class="header-info">
                                    <span>{{ Str::limit($user->name, 15) }}</span>
                                    <small>{{ $user->role }}</small>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a wire:navigate href="{{ route('profile.index') }}" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                        width="18" height="18" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="ms-2">Profile </span>
                                </a> 

                                <div onclick="handleLogout('formLogout')" class="dropdown-item ai-icon" style="cursor: pointer">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                        width="18" height="18" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12">
                                        </line>
                                    </svg>
                                    <span  class="ms-2">Logout </span>
                                </div>
                                <form class="d-none" id="formLogout" action="{{ route('auth.logout') }}" method="post">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
