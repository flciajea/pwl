@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Laporan Hasil Studi</h3>
  <form action="{{ route('mahasiswa.surat.laporan-hasil-studi') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="semester" class="form-label">Keperluan Pembuatan LHS</label>
      <input type="text" name="semester" id="semester" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajukan</button>
  </form>
</div>
@endsection
