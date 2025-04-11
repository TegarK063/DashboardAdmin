@extends('layout.app')
@section('content')
    <div class="container-tambah-pekerjaan d-flex flex-column p-2">
        <form action="{{ url('jobs') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <legend class="text-center">Tambah Data Lowongan Pekerjaan</legend>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Nama Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="perusahaan" class="form-label">Perusahaan</label>
                    <input type="text" name="perusahaan" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="gaji" class="form-label">Gaji</label>
                    <input type="text" name="gaji" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="jumlah_pelamar" class="form-label">Jumlah Pelamar</label>
                    <input type="number" name="jumlah_pelamar" class="form-control" value="0">
                </div>

                <div class="mb-3">
                    <label for="tipe_pekerjaan" class="form-label">Tipe Pekerjaan</label>
                    <select name="tipe_pekerjaan" id="tipe_pekerjaan" class="form-control">
                        <option value="">Pilih Tipe Pekerjaan</option>
                        <option value="full_time">On-Site</option>
                        <option value="part_time">Part Time</option>
                        <option value="freelance">Freelance</option>
                        <option value="internship">Internship</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Pekerjaan</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="jenis_pekerjaan[]" value="Full-time"
                            id="fulltime">
                        <label class="form-check-label" for="fulltime">Full-time</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="jenis_pekerjaan[]" value="Walk-in Interview"
                            id="walkin">
                        <label class="form-check-label" for="walkin">Walk-in Interview</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="jenis_pekerjaan[]" value="1 Lowongan Tersisa"
                            id="tersisa">
                        <label class="form-check-label" for="tersisa">1 Lowongan Tersisa</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="manfaat" class="form-label">Manfaat</label>
                    <textarea name="manfaat" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="kualifikasi" class="form-label">Kualifikasi</label>
                    <textarea name="kualifikasi" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Skill Yang Harus Dimiliki</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="skill_dimiliki[]" value="Skill Komunikasi"
                            id="komunikasi">
                        <label class="form-check-label" for="komunikasi">Skill Komunikasi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="skill_dimiliki[]" value="Teamwork"
                            id="teamwork">
                        <label class="form-check-label" for="teamwork">Teamwork</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="skill_dimiliki[]" value="Analyst Data"
                            id="analyst">
                        <label class="form-check-label" for="analyst">Analyst Data</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary"
                        onclick="window.location.href='{{ url('jobs') }}'">Kembali</button>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
