<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Klinik Aulia Khalik | {{ $title }} Page</title>

</head>
<body>
    <div class="container">
    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/img/LOGO KLINIK.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Klinik Aulia Khalik
          </a>
        </div>
      </nav>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama</th>
            <th scope="col">NIK</th>
            <th scope="col">Keluhan</th>
            <th scope="col">Diagnosa</th>
            <th scope="col">Tindakan</th>
            <th scope="col">Obat</th>
            <th scope="col">Poli</th>
            <th scope="col">Rujukan</th>            
          </tr>
        </thead>
        <tbody>
          @foreach ($mr as $mr)               
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $mr->created_at->format('d/m/Y') }}</td>            
            <td>{{ $mr->user->biodata->name ?? 'Data Tidak Ditemukan' }}</td>            
            <td>{{ $mr->user->biodata->nik ?? 'Data Tidak Ditemukan' }}</td>            
            <td>{{ $mr->complaint }}</td>            
            <td>{{ $mr->diagnosis }}</td>            
            <td>{{ $mr->action }}</td>            
            <td>{{ $mr->medicine->name ?? 'Data Tidak Ditemukan' }}</td>            
            <td>{{ $mr->poly }}</td>            
            <td>{{ $mr->refferal }}</td>            
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
   

<script>
    window.print()
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>        
</body>
</html>