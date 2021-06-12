<!doctype html>
<html lang="en">

<head>
    <title>1461900130</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <table class="table table-dark table-striped">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">jenis buku</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{$data->kamar_id}}</td>
                <td>{{$data->pasien_nama}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->dokter_nama}}</td>
                <td>{{$data->jabatan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{url('/')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Lebokno</label>
            <input class="form-control" type="file" id="formFile" name="file">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>