<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Berita</title>
    @include('admin.css')

    <style>
         label{
            display: inline-block;
            width: 200px;
            padding: 20px;
        }

        .judul {
            font-size: 48px;
            font-weight: bold;
            padding: 20px;
        }
        
        .submit {
            margin: 20px;
        }

        .input {
            width: 50%;
        }
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div>
                    <h1 class="judul">
                        Tambah Berita
                    </h1>
                </div>

        <form action="{{ route('admin.simpanBerita') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label>Judul Berita</label>
                <input type="text" name="judul" class="input" required>
            </div>

            <div>
                <label >Penulis</label>
                <input type="text" name="author" class="input" required>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar Berita</label>
                 <input type="file" name="gambar" class="input" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="input" required></textarea>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="input" required>
            </div>

            <div class="form-group">
                <label for="link">Link Berita</label>
                <input type="url" name="link" class="input">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
            </div>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>