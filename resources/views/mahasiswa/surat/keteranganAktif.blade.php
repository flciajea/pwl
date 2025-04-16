@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Surat Keterangan Lulus</h3>
  <form action="{{ route('mahasiswa.surat.keterangan-lulus') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="semester" class="form-label">Alamat</label>
      <input type="text" name="semester" id="semester" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="semester" class="form-label">Keperluan Pengajuan</label>
      <input type="text" name="semester" id="semester" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajukan</button>
  </form>
</div>
@endsection
