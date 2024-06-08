<div>
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a wire:navigate href="{{ route('user.dashboard') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-home-2"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a wire:navigate href="{{ route('user-instruments.index') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-home-2"></i>
                        <span class="nav-text">Instrumen</span>
                    </a>
                </li>
                <li class="">
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-user"></i>
                        <span class="nav-text">Grup</span>
                    </a>
                    <ul aria-expanded="false">
                        @forelse ($groups as $item)
                            <li>
                                <a href="{{ route('groups.show', encrypt($item->id)) }}">{{ $item->name }}</a>
                            </li>
                        @empty
                            <li>
                                <a href="#">Tidak ada grup</a>
                            </li>
                        @endforelse
                    </ul>
                </li>
                <li><a wire:navigate href="{{ route('rekap.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-book"></i>
                    <span class="nav-text">Rekap Pengerjaan</span>
                </a>
            </li>
            </ul>
        </div>
    </div>
</div>
