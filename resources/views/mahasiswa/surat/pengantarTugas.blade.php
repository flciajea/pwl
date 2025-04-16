@extends('layouts.app')


@section('content')
<div class="container">
  <h3>Surat Pengantar Tugas Mata Kuliah</h3>
  <form action="{{ route('mahasiswa.surat.pengantar-tugas') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="matkul" class="form-label">Ditujukan Kepada</label>
      <input type="text" name="matkul" id="matkul" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="dosen" class="form-label">Mata Kuliah</label>
      <input type="text" name="dosen" id="dosen" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="dosen" class="form-label">Kode Mata Kuliah</label>
      <input type="text" name="dosen" id="dosen" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="dosen" class="form-label">Semester</label>
      <input type="text" name="dosen" id="dosen" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="dosen" class="form-label">Tujuan</label>
      <input type="text" name="dosen" id="dosen" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="dosen" class="form-label">Topik</label>
      <input type="text" name="dosen" id="dosen" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajukan</button>
  </form>
</div>
@endsection
