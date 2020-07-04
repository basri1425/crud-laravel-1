@extends('layouts.master')

@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">Form Pertanyaan</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
          <form role="form" id="updatePertanyaan" name="updatePertanyaan" method="Post" action="{{url('/pertanyaan')}}/{{$pertanyaan->id}}" >
          @method('patch')
            @csrf
            <div class="form-group">
              <label for="judul">Judul</label>
              <input  id="judul" type="text" class="form-control" name="judul" value="{{$pertanyaan->judul}}" required="">
              @error('judul') <div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
              <label for="isi">Isi Pertanyaan</label>
              <textarea class="form-control" rows="3" name="isi" >{{$pertanyaan->isi}}</textarea>
              @error('isi') <div class="invalid-feedback">{{$message}}</div>@enderror
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
      </div>
      <!-- /.card-body -->
</div>

@endsection