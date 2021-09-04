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
                <div class="col-md-6 mb-2  d-flex justify-content-center">
                  <img src="{{asset('gambar/rokok1.png')}}" style="max-width: 300px">
                </div>
                <div class="col-md-6  ">
                    <div class="desc align-middle" style="top:50%">
                        <h1>Cahaya Pro</h1><br>
                          <p class="text-justify" >This is some content from a media component. You can replace this with any content and adjust it as needed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nesciunt hic eveniet cupiditate voluptas eaque alias architecto possimus impedit suscipit voluptates, fugiat natus nam, in exercitationem labore amet repudiandae tenetur.</p> <br>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Launch demo modal
                          </button>
                    </div>
                </div>

                <div class="col-md-6 mb-2 d-flex justify-content-center">
                    <img src="{{asset('gambar/rokok1.png')}}" style="max-width: 300px">
                  </div>
                  <div class="col-md-6">
                      <div class="desc align-middle" style="top:50%">
                          <h1>Cahaya Pro</h1><br>
                            <p class="text-justify" >This is some content from a media component. You can replace this with any content and adjust it as needed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nesciunt hic eveniet cupiditate voluptas eaque alias architecto possimus impedit suscipit voluptates, fugiat natus nam, in exercitationem labore amet repudiandae tenetur.</p> <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                              Launch demo modal
                            </button>
                      </div>
                  </div>


                  <div class="col-md-6 mb-2 d-flex justify-content-center">
                    <img src="{{asset('gambar/rokok1.png')}}" style="max-width: 300px">
                  </div>
                  <div class="col-md-6 align-items-center ">
                      <div class="desc align-middle" style="top:50%">
                          <h1>Cahaya Pro</h1><br>
                            <p class="text-justify" >This is some content from a media component. You can replace this with any content and adjust it as needed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nesciunt hic eveniet cupiditate voluptas eaque alias architecto possimus impedit suscipit voluptates, fugiat natus nam, in exercitationem labore amet repudiandae tenetur.</p> <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                              Launch demo modal
                            </button>
                      </div>
                  </div>

                  @foreach ($product as $p)
                  <div class="col-md-6 mb-2  d-flex justify-content-center">
                    <img src="{{'storage/'.$p->gambar}}" style="max-width: 300px">
                  </div>
                  <div class="col-md-6  ">
                      <div class="desc align-middle" style="top:50%">
                          <h1>{{$p->nama_produk}}</h1><br>
                            <p class="text-justify" >{{$p->deskripsi}}</p> <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                              Launch demo modal
                            </button>
                      </div>
                  </div>
                  @endforeach

        </div>
    </div>

<!-- Button trigger modal -->



{{-- </div> --}}
@endsection
