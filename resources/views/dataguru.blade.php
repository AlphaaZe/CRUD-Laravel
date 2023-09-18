<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi jurnal Mengajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <center><h1>Data Guru</h1></center>
    <table class="table">
        <a href="/tambahguru" class="btn btn-primary" >Tambah Guru</a>
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Guru</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>

            @php
              $no = 1;
            @endphp

            @foreach ($data as $row)
          <tr>
            <th scope="col">{{ $no++ }}</th>
            <td>{{ $row->kodeguru }}</td>
            <td>{{ $row->namaguru }}</td>
            <td>{{ $row->mapel }}</td>
            <td>
                <a href="/tampilguru/{{ $row->id }}" type="button" class="btn btn-warning">Edit</a>
                <a href="/hapus/{{ $row->id }}" type="button" class="btn btn-danger">hapus</a>
          </tr>
        </tbody>

        @endforeach
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
