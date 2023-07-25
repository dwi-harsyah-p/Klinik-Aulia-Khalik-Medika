@extends('dashboard.layouts.main')

@section('container')
    
<h2> {{ $date }}</h2>                

                        {{-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>                                                 --}}        
               
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-4 mx-auto">
                        <div class="card shadow border">
                            <div class="card-body d-flex flex-column align-items-center">   
            <h1 class="mt-4 text-center">Nomor Antrian  @if ($qd->isEmpty())
                <br>
                {{ 0 }}
            @else
            <br>
            {{ $qd[0]->queue }}</h1>
            @endif 
        </div>
    </div>
              </div>
          </div>
      </div>

      @can('admin')  
      <div class="container">
            <div class="row">
                <div class="col my-3 text-center">                
                    <form action="/antrian" method="post">
                        @csrf
                        @if ($queues->isEmpty())
                            <button type="submit" class="btn btn-primary" disabled>Panggil Antrian Selanjutnya</button>                            
                        @else
                            <input type="hidden" name="q" value="{{ $queues[0]->id }}">                            
                            <button type="submit" class="btn btn-primary">Panggil Antrian Selanjutnya</button>                            
                        @endif                        
                    </form>                     
                </div>            
            </div>   
        </div>
            @endcan   

            {{-- <div class="card justify-content-center" style="width: 18rem;">
                <div class="card-body"> --}}
                {{-- <div class="container">
                    <div class="row align-items-center">
                        <div class="col-4 mx-auto">
                            <div class="card shadow border">
                                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title">Daftar Antrian Pasien</h5>                  
                  @foreach ($queues as $queue)                      
                      <h3>
                        {{ $queue->queue }}
                        </h3>
                  @endforeach
                </div>
              </div>
                        </div>
                    </div>
                </div> --}}
                @can('admin')
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-4 mx-auto">
                            <div class="card shadow border">
                            <div class="card-body d-flex flex-column align-items-center">   
                    <div class="card-body">
                      <h3 class="card-title d-flex flex-column align-items-center">Daftar Antrian Pasien</h3> <br>                 
                      @foreach ($queues as $q)                      
                          <b class="ms-4 fs-4">
                            {{ $q->queue }}
                            </b>
                      @endforeach
                    </div>
                  </div>
                    </div>
                </div>
            </div>
        </div>
        @endcan

        @can('onlypasien')
        <div class="container my-4">
            <div class="row align-items-center">
                <div class="col-4 mx-auto">
                    <div class="card shadow border">
                    <div class="card-body d-flex flex-column align-items-center">   
            <div class="card-body">
              <h3 class="card-title d-flex flex-column align-items-center mb-4">Nomor Antrian Saya</h3>
              @if ($queue->isEmpty())
              <h3 class="card-title d-flex flex-column align-items-center mb-4">{!! '-' !!}</h3> <br>              
          @else
          <h3 class="card-title d-flex flex-column align-items-center mb-3"><b>{{ $queue[0]->queue }}</b></h3> 
              
              @php
                  $min = max(0, 10 - $queue[0]->created_at->diff(date("Y-m-d H:i:s",time()))->i);                  
              @endphp
              @if (!$qd->isEmpty())                                                    
                  @if ($qd[0]->id >= $queue[0]->id)
                      <p class="lead fw-normal text-center my-2">Silahkan Datang Ke Klinik Sekarang</p>
                  @else
                      <p class="lead fw-normal text-center my-2">Silahkan Datang Ke Klinik <br> @if ($min != 0)
                          {{$min . " Menit Lagi"}}
                        </p>
                      @endif                         
                  @endif
              @else
                  <p class="lead fw-normal text-center my-2">Silahkan Datang Ke Klinik <br> @if ($min != 0)
                    {{$min . " Menit Lagi"}}
                </p>
                  @endif 
              @endif                       
          @endif  
          
          <div class="container">
            <div class="row">
                <div class="col my-3 text-center">
              <form action="/ambilAntrian" method="post">
                  @csrf
                  <button class="btn btn-primary" type="submit">Ambil Antrian</button> 
              </form>
            </div>
            </div>
            </div>
            </div>
          </div>
            </div>
        </div>
    </div>
</div>
        @endcan

@endsection