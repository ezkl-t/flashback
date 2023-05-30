@extends('layout/aplikasi')

@section('konten')

    <title>Materi</title>
</head>
<body>
    <a href="/materi/create" class="btn btn-primary ">+Tambahkan Materi</a>
    
      <div class="container ">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($data as $item)
            <div class="col-md-4">
              <div class="card shadow-lg ">
                @if ($item->foto)
                  <img class="mx-auto card-img-top img-thumbnail" style="max-width: 250px;max-height: 450px;
                  " src="{{ url('img').'/'.$item->foto }}">
                  @endif
                    <div class="card-body">
                    <p class="card-text"><b>Judul: </b>{{$item->judul_bab}}</p>
                    <p class="card-text"><b>Sinopsis: </b>{{$item->sinopsis}} ...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <form action='{{ url('/materi/'.$item->id) }}'>
                            <button class="btn btn-sm btn-outline-secondary">Detail</button>
                        </form>  
                        <form action='{{url('/materi/'.$item->id."/edit")}}'>
                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                        </form>                               
                        </div>
                        
                        <form onsubmit='return confirm("Ingin menghapus data ini?")' class='d-inline' action="{{ '/materi/'.$item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class='btn btn-sm btn-outline-secondary' type='submit'>Hapus</button>
                        </form>
                    </div>
                    </div>
              </div>
            </div>
            @endforeach
        </div>
      </div>
    {{$data->links()}}
@endsection
