<div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @foreach ($questions as $i => $item)
        <li style="cursor: pointer" @if ($currentIndex == $i) class="bg-primary" @endif>
            <a wire:click="changeQuestion('{{ $i }}')" class="ai-icon" aria-expanded="false">
                @if (in_array($item->id, $results))
                    <i class="fa fa-check-circle text-success"></i>
                @else
                    <i class="fa fa-times-circle"></i>
                @endif
                <span @if ($currentIndex == $i) class="text-white nav-text" @endif
                    class="nav-text">{{ $i + 1 }}{{ ')' }} Pernyataan {{ $i + 1 }}</span>
            </a>
        </li>
    @endforeach
</div>
