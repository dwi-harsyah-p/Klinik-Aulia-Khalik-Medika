@extends('dashboard.layouts.main')

@section('container')    

<!-- Button trigger modal -->

@can('kasi')
  {{-- <a href="/report" class="btn btn-primary mt-2" target="_blank">Cetak</a> --}}
  <form action="/report" method="post" target="_blank">
    @csrf
    <div class="form-row align-items-center">
      <div class="col-auto my-1">
        <label class="mr-sm-2" for="inlineFormCustomSelect"><b>Print Laporan</b></label>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="range">
          <option selected>Semua</option>
          <option value="1-month">1 Bulan</option>
          <option value="3-months">3 Bulan</option>
          <option value="6-months">6 Bulan</option>
          <option value="1-year">1 Tahun</option>
        </select>
      </div>
      <div class="col-auto my-1">
        <br>
        <button type="submit" class="btn btn-primary mt-2">Cetak</button>
      </div>
    </div>
  </form>
@endcan
<div class="card my-2 col-lg-12">
    <div class="card-header">              
            <i class="fas fa-table me-1"></i>
            Rekam Medis       
    </div>    
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>                    
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Keluhan</th>
                    <th>Diagnosa</th>
                    <th>Tindakan</th>
                    <th>Obat</th>                    
                    <th>Jumlah</th>                    
                    <th>Poli</th>
                    <th>Rujukan</th>              
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Keluhan</th>
                    <th>Diagnosa</th>
                    <th>Tindakan</th>
                    <th>Obat</th>                    
                    <th>Jumlah</th>                    
                    <th>Poli</th>
                    <th>Rujukan</th>              
                </tr>
            </tfoot>
            <tbody>                                    
                @foreach ($records as $record)                    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $record->created_at->format('d-m-Y h:i:s') }}</td>
                        <td>{{ $record->user->biodata->name ?? 'Data Tidak Ditemukan' }}</td>
                        <td>{{ $record->complaint }}</td>
                        <td>{{ $record->diagnosis }}</td>
                        <td>{{ $record->action }}</td>
                        <td>
                            {{ $record->medicine->name ?? 'Data Tidak Ditemukan' }}                            
                        </td>                        
                        <td>{{ $record->qty }}</td>
                        <td>{{ $record->poly }}</td>
                        <td>{{ $record->refferal }}</td>           
                    </tr>                                    
                @endforeach                
            </tbody>
        </table>        
    </div>
</div>

@endsection