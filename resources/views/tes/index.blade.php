<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mb-5">Jawaban Tes Magang!</h1>

        <h5>Menampilkan nama film dan nominasi dari nominasi yang terbesar</h5>
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

        <h5>Menampilkan nama film dan nominasi yang paling banyak mendapatkan nominasi</h5>
        <ul>
            <li>
                Nama Film = {{ $nominasis[0]->nm_film }}
            </li>
            <li>
                Jumlah Nominasi = {{ $nominasis[0]->nominasi }}
            </li>
        </ul>
        
        <h5>Menampilkan  rata2 pendapatan film keseluruhan adalah <strong>Rp. {{ $average }}</strong></h5>

        <h5>Menampilkan nama film yang huruf terakhir ‘n’ adalah :</h5>
        <ul>
            @foreach ($akhirN as $n)
                <li>
                    {{ $n->nm_film }}
                </li>
            @endforeach
            </ul>

        <h5>Menampilkan nama film dengan pendapatan terbesar mengandung huruf ‘s’ adalah :</h5>
        <ul>
            @foreach ($mengandungS as $s)
                <li>
                    {{ $s->nm_film }}
                </li>
                
            @endforeach
        </ul>

        <h5>Menampilkan nama artis yang bermain film dengan genre drama : {{ $genreDrama[0]->nm_artis }}</h5>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>