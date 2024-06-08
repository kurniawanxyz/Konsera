<div>
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a wire:navigate href="{{ route('user.dashboard') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-home-2"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="mm-active">
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-user-3"></i>
                        <span class="nav-text">Grup</span>
                    </a>
                    <ul aria-expanded="false">
                        @forelse ($groups as $item)
                            <li>
                                <a href="{{ route('user-groups.show', ['user_group' => encrypt($item->id)]) }}"
                                    wire:navigate @if (request()->routeIs('user-groups.show', ['user_group' => encrypt($item->id)])) class="mm-active" @endif>
                                    {{ $item->name }}
                                </a>
                            </li>
                        @empty
                            <li>
                                <a href="#">Tidak ada grup</a>
                            </li>
                        @endforelse
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
