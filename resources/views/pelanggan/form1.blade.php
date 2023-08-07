<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Belajar Laravel 10</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<main style="margin-top: 70px">
    <div class="container">
        @if (count($errors)>0)
        <div class ="allert alert-danger">
            <b>Perhatian</b>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <form action="{{url('pelanggan/create', @$pelanggan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="nomor" class="col-sm-2 col-form-label">Nomor</label>
                        <div class="col-sm-5">
                            <input value="{{ old('nomor', @$pelanggan->nomor) }}" type="text" class="form-control" name="nomor" id="nomor" placeholder="nomor">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="uraian" class="col-sm-2 col-form-label">Uraian</label>
                        <div class="col-sm-5">
                            <input value="{{ old('uraian', @$pelanggan->uraian) }}" type="text" class="form-control" name="uraian" id="uraian" placeholder="Uraian">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="kode" class="col-sm-2 col-form-label">kode</label>
                        <div class="col-sm-5">
                            <input value="{{ old('kode', @$pelanggan->kode) }}" type="text" class="form-control" name="kode" id="kode" placeholder="Kode">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                        <div class="col-sm-5">
                            <input value="{{ old('satuan', @$pelanggan->satuan) }}" type="text" class="form-control" name="satuan" id="satuan" placeholder="Satuan">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="koefisien" class="col-sm-2 col-form-label">koefisien</label>
                        <div class="col-sm-5">
                            <input value="{{ old('koefisien', @$pelanggan->koefisien) }}" type="text" class="form-control" name="koefisien" id="koefisien" placeholder="koefisien">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-5">
                            <input value="{{ old('harga', @$pelanggan->harga) }}" type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jumlah_harga" class="col-sm-2 col-form-label">Jumlah Harga</label>
                        <div class="col-sm-5">
                            <input value="{{ old('jumlah_harga', @$pelanggan->jumlah_harga) }}" type="text" class="form-control" name="jumlah_harga" id="jumlah_harga" placeholder="Jumlah_Harga">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-5 offset-sm-2">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>