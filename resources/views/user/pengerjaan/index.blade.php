@extends('layouts.pengerjaan')

@section('title', 'Pengerjaan')

@section('list-menu')

    @forelse ($instrumens->sub_criterias as $i => $item)
    <li class="">
        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="flaticon-381-internet"></i>
            <span class="nav-text">{{$item->text}}</span>
        </a>
        <ul aria-expanded="false">
            @forelse ($item->statements as $index => $pernyataan)
                <li>
                    <a href="#pernyataan-{{$pernyataan->id}}"> Pernyataan{{ $index+1 }}</a>
                </li>
            @empty
            @endforelse
        </ul>
    </li>
    @empty

    @endforelse
@endsection

@section('content')
    <form action="{{route('pengerjaan.store',["group_id"=>$group_id,"instrumen_id"=>$instrumens->id])}}" method="post">
        @csrf
        @php
            $index = 0;
        @endphp
        <div class="card">
            <div class="card-body">
                <div class="card-title">{{$instrumens->title}}</div>
                {{
                    $instrumens->description
                }}
            </div>
        </div>
        @forelse ($instrumens->statements as $item)
        <div class="card">
            <div class="d-flex flex-column card-body">
                <label for="" class="form-label fw-bold">{{ ++$index }}. {{ $item->text }}</label>
                <div class="d-flex gap-4">
                    @foreach ($instrumens->answer as $answer)
                        <label for="pernyataan-{{ $item->id }}">
                            <input type="radio" name="pertanyaan-{{$item->id}}" id="pernyataan-{{ $item->id }}" value="{{$answer->id}}" required>
                            <span>{{ $answer->text }}</span>
                        </label>
                        @error('pernyataan-{{ $item->id }}')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    @endforeach
                </div>
            </div>
        </div>
        @empty

        @endforelse
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit Jawaban</button>
                </div>
            </div>
        </div>
    </form>
@endsection
