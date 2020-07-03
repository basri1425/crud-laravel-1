@extends('layouts.master')

@section('content')
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">List Pertanyaan</h3>
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Pertanyaan</th>
            <th>Tanggal Pertanyaan</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($tanya as $tanya)
          <tr>
            <td>{{$tanya->judul}}</td>
            <td>{{$tanya->isi}}</td>
            <td><a class="btn btn-small btn-info" href="jawaban/{{$tanya->id}}">Jawab</a></td>
          </tr>
          @endforeach
          </tbody>
          <tfoot>
          <tr>
          <th>Pertanyaan</th>
            <th>Tanggal Pertanyaan</th>
            <th>Action</th>
          </tr>
          </tfoot>
        </table>
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