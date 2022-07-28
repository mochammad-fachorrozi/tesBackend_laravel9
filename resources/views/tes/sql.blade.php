@extends('layouts.app')


@section('content')
    

<h1 class="text-center mb-5">Jawaban Tes Magang!</h1>

        <h5>1. Menampilkan nama film dan nominasi dari nominasi yang terbesar</h5>
        <table class="table mb-4">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Film</th>
                <th scope="col">Nominasi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($films as $key=>$film)
              <tr>
                    
                <td scope="row">{{ $key+1 }}</td>
                <td>{{ $film->nm_film }}</td>
                <td>{{ $film->nominasi }}</td>

            </tr>
            @endforeach
            </tbody>
          </table>

        <h5>2. Menampilkan nama film dan nominasi yang paling banyak mendapatkan nominasi</h5>
        <ul>
            <li>
                Nama Film = {{ $nominasis[0]->nm_film }}
            </li>
            <li>
                Jumlah Nominasi = {{ $nominasis[0]->nominasi }}
            </li>
        </ul>
        
        <h5>3. Menampilkan  rata2 pendapatan film keseluruhan adalah <strong>Rp. {{ $average }}</strong></h5>

        <h5>4. Menampilkan nama film yang huruf terakhir ‘n’ adalah :</h5>
        <ul>
            @foreach ($akhirN as $n)
                <li>
                    {{ $n->nm_film }}
                </li>
            @endforeach
            </ul>

        <h5>5. Menampilkan nama film dengan pendapatan terbesar mengandung huruf ‘s’ adalah :</h5>
        <ul>
            @foreach ($mengandungS as $s)
                <li>
                    {{ $s->nm_film }}
                </li>
                
            @endforeach
        </ul>

        <h5>8. Menampilkan nama artis yang bermain film dengan genre drama : {{ $genreDrama[0]->nm_artis }}</h5>

@endsection
