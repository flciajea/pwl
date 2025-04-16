@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Surat Keterangan Lulus</h3>
  <form action="{{ route('mahasiswa.surat.keterangan-lulus') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="tgl_lulus" class="form-label">Tanggal Lulus</label>
      <input type="date" name="tgl_lulus" id="tgl_lulus" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajukan</button>
  </form>
</div>
@endsection
