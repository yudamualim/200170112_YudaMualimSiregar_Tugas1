<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h2>Form Tambah Data Matakuliah</h2>
        <form action="{{ route('DataMahasiswa.update', ['DataMahasiswa' => $DataMahasiswa->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama </label>
                <input type="text" class="form-control" name="nama" placeholder="nama_matkul" value="{{ $DataMahasiswa->nama }}">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">kelas</label>
                <input type="text" class="form-control" name="kelas" placeholder="kelas_matkul" value="{{ $DataMahasiswa->kelas }}">
            </div>
            <div class="mb-3">
                <label for="kode_kelas" class="form-label">Kode_Kelas</label>
                <input type="text" class="form-control" name="kode_kelas" placeholder="kode_matkul" value="{{ $DataMahasiswa->kode_kelas }}">
            </div>
            <div class="mb-3">
                <label for="sks" class="form-label">sks_Kelas</label>
                <input type="number" class="form-control" name="sks" placeholder="sks_matkul" value="{{ $DataMahasiswa->sks }}">
            </div>
            <div class="mb-3">
                <label for="dosen_kelas" class="form-label">Dosen_Kelas</label>
                <input type="text" class="form-control" name="dosen_kelas" placeholder="dosen_matkul" value="{{ $DataMahasiswa->dosen_kelas }}">
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>