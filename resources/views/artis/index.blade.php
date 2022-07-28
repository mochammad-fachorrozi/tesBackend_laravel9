<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    {{-- <h1>Hello, world!</h1> --}}

    <div class="container">

      <div class="text-center py-5">
        <h1>Data Artis</h1>
      </div>

      <div class="py-2">
        <a href="{{ url('/project/create') }}" class="btn btn-primary">[+] Tambah</a>
      </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kode Artis</th>
          <th scope="col">Nama Artis</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Bayaran</th>
          <th scope="col">Negara</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>

        @forelse ($artists as $key=>$artis)
        <tr>
          <td>{{ $key+1 }}</td>
          <td>{{ $artis->kd_artis }}</td>
          <td>{{ $artis->nm_artis }}</td>
          <td>{{ $artis->jk }}</td>
          <td>{{ $artis->bayaran }}</td>
          <td>{{ $artis->negara }}</td>
          <td>
            <a href="{{ url('/project/edit/' . $artis->kd_artis) }}" class="btn btn-sm btn-success">Edit</a>
            <a href="" class="btn btn-sm btn-danger">Hapus</a> 

          </td>
          
        </tr>
            
        @empty
        <div class="text-center">
          <h3>Not Found</h3>
        </div>
        @endforelse

      </tbody>
    </table>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>