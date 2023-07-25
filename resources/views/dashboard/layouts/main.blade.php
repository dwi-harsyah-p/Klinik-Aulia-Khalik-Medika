<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Dwi Harsyah Prasetya" />
        <title>Klinik Aulia Khalik | {{ $title }} Page</title>        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.15/dist/sweetalert2.min.css">
    </head>
    <body class="sb-nav-fixed">
        @include('dashboard.layouts.header')
        @include('dashboard.layouts.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        {{-- <h2 class="mt-2 border-bottom pb-3">{{ $title }}</h2> --}}
                        @yield('container')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Tara Putri Septiani 2023</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        <!-- Tautan ke file JavaScript SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.15/dist/sweetalert2.min.js"></script>

<!-- Kode JavaScript untuk SweetAlert -->
@if (session('success'))
<script>
    // Fungsi untuk menampilkan SweetAlert saat berhasil menambah data       
        Swal.fire({
            icon: 'success',
            title: 'Data Added!',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });    
    </script>
@endif
@if (session('delete'))
<script>
    // Fungsi untuk menampilkan SweetAlert saat berhasil menghapus data       
        Swal.fire({
            icon: 'success',
            title: 'Data Deleted!',
            text: '{{ session('delete') }}',
            confirmButtonText: 'OK'
        });    
    </script>
@endif

@if (session('error'))
    <script>
    // Fungsi untuk menampilkan SweetAlert saat gagal     
        Swal.fire({
            icon: 'error',
            title: 'Failed Action!',
            text: '{{ session('error') }}',
            confirmButtonText: 'OK'
        });    
</script>
@endif

@if (session('update'))
<script>
    // Fungsi untuk menampilkan SweetAlert saat berhasil mengupdate data       
        Swal.fire({
            icon: 'success',
            title: 'Data Updated!',
            text: '{{ session('update') }}',
            confirmButtonText: 'OK'
        });    
    </script>
@endif

<script>

    function confirmDelete(event) {
      event.preventDefault(); // Menghentikan aksi delete default dari formulir
  
      Swal.fire({
        icon: 'warning',
        title: 'Apakah Kamu Yakin?',
        text: 'You are about to delete this data. This action cannot be undone.',
        showCancelButton: true,
        confirmButtonText: 'Delete',
        cancelButtonText: 'Cancel'
      }).then((result) => {
        if (result.isConfirmed) {
          // Jika konfirmasi di SweetAlert diklik "Delete", kirimkan permintaan delete ke server
          event.target.closest('form').submit();
        }
      });
    }
  </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>        
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="/js/scripts.js"></script>
        <script src="/js/datatables-simple-demo.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
