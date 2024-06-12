<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<table class="table">
    <thead style="background-color: slategrey">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nilai</th>
            <th>Kriteria</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 0;
        @endphp
        {{-- @dd($data) --}}
        @forelse ($data as $item )

        <tr>
            <td>{{$i+1}}</td>
            <td>{{$item['Nama']}}</td>
            <td>{{$item['Email']}}</td>
            <td>{{$item['Nilai']}}</td>
            <td>{{$item['Kriteria']}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center">Tidak ada data</td>
        </tr>
        @endforelse
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
