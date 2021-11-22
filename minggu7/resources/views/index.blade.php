<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/all.min.css">
    <title>Bagas Blog</title>
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
                <h2 class="mb-5">BLOG</h2>
            </div>
        </div>
        @foreach ($blogs as $blog)
        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-center">
                
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="{{$blog->gambar}}" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">{{$blog->judul}}</h4>
                      <p>. . .</p>
                      <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-primary">See Detail..</a>
                    </div>
                </div>
                <ul class="nav">
                    <li class="dropdown">
                        <a class="" href="#" data-bs-toggle="dropdown" style="color:rgb(138, 136, 136);font-size:30px;padding-left:7px;"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('blog.edit', $blog->id) }}">Edit</a></li>
                            <li>
                              <form action="{{route('blog.destroy', $blog->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                  <button type="submit" class="dropdown-item">Delete</button>
                              </form>
                              
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        @endforeach
    </div>
    
</body>

<script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</html>