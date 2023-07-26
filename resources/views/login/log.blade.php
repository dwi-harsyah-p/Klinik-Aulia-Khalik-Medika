@extends('dashboard.layouts.main')

@section('container')    


<div class="card my-4 col-lg-12">
    <div class="card-header">              
            <i class="fas fa-table me-1"></i>
            Log Login  
    </div>    
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>                    
                    <th>Email</th>                    
                    <th>Akses</th>
                    <th>Waktu Login</th>                    
                    <th>Ip Address</th>                    
                    <th>Device Info</th>                    
                    <th>Ket</th>                    
                    <th>Status</th>                    
                    <th>Deskripsi</th>                    
                    <th>Durasi</th>                    
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Email</th>                    
                    <th>Akses</th>
                    <th>Waktu Login</th>                    
                    <th>Ip Address</th>                    
                    <th>Device Info</th>                    
                    <th>Ket</th>                    
                    <th>Status</th>                    
                    <th>Deskripsi</th>                    
                    <th>Durasi</th>                        
                </tr>
            </tfoot>
            <tbody>
                @foreach ($logs as $log)                    
                    <tr>                        
                        <td>{{ $log->email }}</td>                        
                        <td>{{ $log->user->level->name ?? 'Data Tidak Ditemukan' }}</td>
                        <td>{{ $log->login_time }}</td>
                        <td>{{ $log->ip_address }}</td>
                        <td>{{ $log->device_info }}</td>
                        <td>{{ $log->keterangan }}</td>
                        <td><b class="{{ ($log->status == 'success') ? 'text-success' : 'text-danger' }}">
                            {{ $log->status }}
                        </b></td>
                        <td>{{ $log->description }}</td>
                        <td>{{ $log->durasi }}</td>
                    </tr>
                @endforeach                            
            </tbody>
        </table>
    </div>
</div>

@endsection
