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
        <h1>Form Tambah Artis</h1>
      </div>

      <div class="py-2">
        <a href="{{ url('/project') }}" class="btn btn-secondary"><- Kembali</a>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-5">
        <form action="{{ url('/project/store') }}" method="POST">
          @csrf

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="kd_artis" name="kd_artis" required>
              <label for="kd_artis">Kode Artis</label>

              @if($errors->has('kd_artis'))
                <div class="text-danger">
                  {{ $errors->first('kd_artis')}}
                </div>
              @endif
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nm_artis" name="nm_artis" required>
              <label for="nm_artis">Nama Artis</label>

              @if($errors->has('nm_artis'))
                <div class="text-danger">
                  {{ $errors->first('nm_artis')}}
                </div>
              @endif
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="jk" name="jk" required>
              <label for="jk">Jenis Kelamin</label>

              @if($errors->has('jk'))
                <div class="text-danger">
                  {{ $errors->first('jk')}}
                </div>
              @endif
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="bayaran" name="bayaran" required>
              <label for="bayaran">Bayaran</label>

              @if($errors->has('bayaran'))
                <div class="text-danger">
                  {{ $errors->first('bayaran')}}
                </div>
              @endif
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="award" name="award" required>
              <label for="award">Award</label>

              @if($errors->has('award'))
                <div class="text-danger">
                  {{ $errors->first('award')}}
                </div>
              @endif
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="negara" name="negara" required>
              <label for="negara">Negara Artis</label>

              @if($errors->has('negara'))
                <div class="text-danger">
                  {{ $errors->first('negara')}}
                </div>
              @endif
            </div>
           
            <div class="py-2 text-end">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
      
          </form>
          </div>
      </div>


  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>