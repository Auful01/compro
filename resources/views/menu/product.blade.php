@extends('layout.main')

@section('content')
{{-- <div class="container"> --}}
    <div class="gdlr-page-title-wrapper header-style-1-title-wrapper">
        <div class="gdlr-page-title-overlay gdlr-parallax-wrapper-2"></div>
        <div class="gdlr-page-title-container container">
            <h1 class="gdlr-page-title">Products</h1>
            <span class="gdlr-page-caption">Berbagai Produk kami</span>
        </div>
    </div>

    <div class="container" style="padding: 100px 0">
        <div class="row align-items-center">
            <div class="col-md-10">
                <p>MARI LIHAT BEBERAPA PRODUK KAMI</p>
                <h1 style="font-weight: 900;letter-spacing: 3px">CAHAYA PRO</h1>
            </div>
            <div class="col-md-2">
                <a href="{{url('/tambah-produk')}}" class="btn btn-primary">Tambah Produk</a>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row align-items-center">

                  @foreach ($product as $p)
                  <div class="col-md-6 mb-2  d-flex justify-content-center">
                    <img src="{{'storage/'.$p->gambar}}" id="gambar" style="max-width: 300px">
                  </div>
                  <div class="col-md-6  ">
                      <div class="desc align-middle" style="top:50%">
                          <h1>{{$p->nama_produk}}</h1><br>
                            <p class="text-justify" >{{$p->deskripsi}}</p> <br>

                            <form action="{{ route('product.destroy',$p->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <a href="" class="btn btn-sm btn-warning btn-modal-editProduk "  data-toggle="modal"  data-target="#editProdukModal" data-id="{{$p->id}}" data-nama="{{$p->nama_produk}}" data-gambar="{{'storage/'.$p->gambar}}" data-desc="{{$p->deskripsi}} " data-url="{{route('product.update', $p->id)}}" data-path="{{$p->gambar}}"><img src="https://img.icons8.com/material-outlined/24/000000/pencil--v3.png"/></a>
                                <button type="submit" class="btn btn-sm  btn-danger" onclick="return confirm('apakah anda ingin Menghapus produk ini?')"><img src="https://img.icons8.com/material-outlined/24/000000/trash--v2.png"/></button>
                            </form>
                      </div>
                  </div>
                  @endforeach

        </div>
    </div>

<!-- Button trigger modal -->



{{-- </div> --}}
@endsection
