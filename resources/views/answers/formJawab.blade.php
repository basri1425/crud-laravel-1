@extends('layouts.master')

@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">Form Pertanyaan</h3>
      </div>
      <!-- /.card-header -->
      @foreach($tanya as $tanya)
      <div class="card-body">
          <form role="form" id="tambahPertanyaan" method="Post" action="{{url('/jawaban')}}" >
            @csrf
            <div class="form-group">
              <label for="judul">Judul</label>
              <input placeholder="masukkan Judul Pertanyaan" id="judul" type="text" class="form-control" name="judul" value="{{$tanya->judul}}" readonly>
              @error('judul') <div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
              <label for="isi">Isi Pertanyaan</label>
              <textarea class="form-control" rows="3" name="isi" readonly>{{$tanya->isi}}</textarea>
              @error('isi') <div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
              <label for="isiJawab">Isi Pertanyaan</label>
              <textarea class="form-control" rows="3" name="isiJawab" placeholder="ini jawaban di sini ..."></textarea>
              @error('isiJawab') <div class="invalid-feedback">{{$message}}</div>@enderror
              <input type="hidden" class="form-control" name="pertanyaan_id" value="{{$tanya->id}}" readonly>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
      </div>
      @endforeach
      <!-- /.card-body -->
</div>

@endsection