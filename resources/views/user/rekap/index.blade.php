
@extends("layouts.user")

@section("title","Rekap Pengerjaan")

@section("content")
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Group</th>
                <th>Instrumen</th>
                <th>Criteria</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @forelse($rekap as $item)
            {{-- @dd($item) --}}
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$item['instrumen']['title']}}</td>
                <td>{{$item['group']['name']}}</td>
                <td>{{$item['criteria']['text']}}</td>
                <td>
                    <a href="{{route('rekap.show',$item["instrumen"]["id"])}}" class="btn btn-warning">Detail</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">Data Kosong</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection