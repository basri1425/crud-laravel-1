@extends('layouts.master')

@section('content')
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Detai Jawaban</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @foreach($tanya as $tanya)
        pertanyaan<br>{{$tanya->isi}}<br>
        dibuat tanggal : {{$tanya->created_at}}<br>
        Jawaban :<br>
            @foreach($jawab as $jawab)
            
            - 
            {{$jawab->isiJawab}}
            <br>dibuat tanggal : {{$jawab->created_at}}<br><br>
            @endforeach

          @endforeach

      </div>
      <!-- /.card-body -->
    </div>

@endsection

@push('scripts')
<!-- DataTables -->
<!-- DataTables -->
<script src="{{asset('/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@endpush