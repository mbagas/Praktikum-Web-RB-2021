<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">Bagas Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('blog.create') }}">Create new Blog</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
    </nav>

    <div class="container-md mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h2>CREATE NEW BLOG</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-3">
                      <label for="email" class="form-label">Judul :</label>
                      <input type="text" class="form-control" id="email" name="judul">
                    </div>
                    <div class="mb-3">
                      <label for="pwd" class="form-label">Author :</label>
                      <input type="text" class="form-control" id="pwd" name="author">
                    </div>
                    <div class="mb-3">
                      <label for="pwd" class="form-label">isi :</label>
                      <textarea name="isi" class="form-control" id="" cols="30" rows="10" required></textarea>
                      
                    </div>
                    <div class="mb-3">
                      <label for="pwd" class="form-label">gambar :</label>
                      <input type="file" class="form-control" id="pwd" name="gambar">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
                
            </div>
        </div>
    </div>
    
</body>

<script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</html>