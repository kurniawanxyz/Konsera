<div>
    <div class="row">
        @forelse ($groups as $item)
            <div class="col-xl-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{ $item->name }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $item->description }}</p>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <div class="card-footer-link mb-4 mb-sm-0">
                            <p class="card-text text-dark d-inline">Bergabung pada {{ $item->pivot->created_at->diffForHumans() }}</p>
                        </div>
                        <a href="{{ route('user-groups.show', ['user_group' => encrypt($item->id)]) }}"
                            class="btn btn-primary" wire:navigate>Masuk</a>
                    </div>
                </div>
            </div>
        @empty
            anda tidak bergabung grup manapun
        @endforelse
    </div>
</div>
