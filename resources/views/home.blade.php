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
        <h2>Daftar Matakuliah</h2>
        <a href="{{ route('DataMahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Matakuliah</a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Kode_kelas</th>
                    <th scope="col">Dosen_kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($DataMahasiswa as $Data)
                    <tr>
                        <th scope="row">{{ $Data->id }}</th>
                        <td>{{ $Data->nama }}</td>
                        <td>{{ $Data->kelas }}</td>
                        <td>{{ $Data->kode_kelas }}</td>
                        <td>{{ $Data->dosen_kelas }}</td>
                        <td>
                            <a href="{{ route('DataMahasiswa.edit', ['DataMahasiswa' => $Data->id]) }}"
                                class="btn btn-primary">Edit</a>
                            <a href="{{ route('DataMahasiswa.show', ['DataMahasiswa' => $Data->id]) }}"
                                class="btn btn-warning">Detail</a>
                              <form action="{{ route('DataMahasiswa.destroy', ['DataMahasiswa' => $Data->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data Ini ?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>