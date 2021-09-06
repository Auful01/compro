<footer class="footer-wrapper">
    <div class="footer-container container">
        <div class="footer-column three columns" id="footer-widget-1">
            <div id="text-5" class="widget widget_text gdlr-item gdlr-widget">
                <h3 class="gdlr-widget-title">About Us</h3>
                <div class="clear"></div>
                <div class="textwidget">
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Morbi leo risus, porta.</p>
                    <p><img src="upload/logo-light.png" style="width: 150px;" alt="" /></p>
                </div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-2">
            <div id="recent-posts-5" class="widget widget_recent_entries gdlr-item gdlr-widget">
                <h3 class="gdlr-widget-title">Recent Posts</h3>
                <div class="clear"></div>
                <ul>
                    <li>
                        <a href="#">Sem Porta Mollis Parturi</a>
                    </li>
                    <li>
                        <a href="#">Nullam Lorem Mattis Purus</a>
                    </li>
                    <li>
                        <a href="#">Nibh Sem Sit Ullamcorper</a>
                    </li>
                    <li>
                        <a href="#">Donec luctus imperdiet</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-3">
            <div id="gdlr-recent-portfolio2-widget-6"
                class="widget widget_gdlr-recent-portfolio2-widget gdlr-item gdlr-widget">
                <h3 class="gdlr-widget-title">Recent Works</h3>
                <div class="clear"></div>
                <div class="gdlr-recent-port2-widget">
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_244487860-150x150.jpg" alt="" width="150"
                                height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_179829281-150x150.jpg" alt="" width="150"
                                height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_166099589-150x150.jpg" alt="" width="150"
                                height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/photodune-6191983-kitchen-m-150x150.jpg" alt="" width="150"
                                height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_21271114-150x150.jpg" alt="" width="150"
                                height="150" /></a>
                    </div>
                    <div class="recent-port-widget-thumbnail">
                        <a href="#"><img src="upload/shutterstock_125357699-150x150.jpg" alt="" width="150"
                                height="150" /></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-4">
            <div id="text-9" class="widget widget_text gdlr-item gdlr-widget">
                <h3 class="gdlr-widget-title">Contact Info</h3>
                <div class="clear"></div>
                <div class="textwidget">Address: 184 Main Collins Street West Victoria 8007

                    <span class="clear"></span><span class="gdlr-space"
                        style="margin-top: 10px; display: block;"></span>

                    <i class="gdlr-icon fa fa-phone"
                        style="vertical-align: middle; color: #fff; font-size: 16px; "></i> +1800-222-3333

                    <span class="clear"></span><span class="gdlr-space"
                        style="margin-top: 10px; display: block;"></span>

                    <i class="gdlr-icon fa fa-mobile"
                        style="vertical-align: middle; color: #fff; font-size: 20px; "></i> +1833-232-3443

                    <span class="clear"></span><span class="gdlr-space"
                        style="margin-top: 10px; display: block;"></span>

                    <i class="gdlr-icon fa fa-envelope-o"
                        style="vertical-align: middle; color: #fff; font-size: 16px; "></i>
                    contact@totalbusinesstheme.com
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="copyright-wrapper">
        <div class="copyright-container container">

            <div class="copyright-left">
                <a href="#">
                    <i class="gdlr-icon fa fa-facebook"
                        style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i>
                </a>
                <a href="#">
                    <i class="gdlr-icon fa fa-twitter"
                        style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i>
                </a>
                <a href="#">
                    <i class="gdlr-icon fa fa-dribbble"
                        style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i>
                </a>
                <a href="#">
                    <i class="gdlr-icon fa fa-pinterest"
                        style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i>
                </a>
                <a href="#">
                    <i class="gdlr-icon fa fa-google-plus"
                        style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i>
                </a>
                <a href="#">
                    <i class="gdlr-icon fa fa-instagram"
                        style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i>
                </a>
            </div>

            <div class="copyright-right">
                Copyright 2021&copy;MRXTech, All Right Reserved </div>
            <div class="clear"></div>
        </div>
    </div>
</footer>

<!-- Button trigger modal -->


  <!-- Modal Edit Produk-->
  <div class="modal fade" id="editProdukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" class="url" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" class="id" hidden>
                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg nama" name="nama" id="nama" placeholder="ID">
                    </div>
                </div>

                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">

                        <input type="file" class="form-control produk" name="gambar" id="gambar">
                        <input type="hidden" class="produk" value="" name="gambarlama" id="">
                        <img src="" class="gambar" name="gbrlama" style="height: 150px;" alt="">
                        {{-- <div class="custom-file">

                          </div> --}}
                    </div>

                </div>
                <div class="form-group row mt-5">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" placeholder="Nama">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi" id="deskripsi" class="desc" cols="300" rows="10"></textarea>
                    </div>
                </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Change</button>
        </form>

        </div>
      </div>
    </div>
  </div>

  {{-- Input Target Modal --}}
  <div class="modal fade" id="inputTargetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Misi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h1>Tambah Visi</h1>
            <form action="{{route('target.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Target</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" name="kategori" id="kategori" placeholder="Target">
                    </div>
                </div>

                <div class="form-group mt-5" style="text-align: right;">
                    <!-- <div class="col-sm-10"> -->
                    <button type="submit" class="btn btn-primary" name="simpan">Edit</button>
                    <a href="{{route('product.index')}}" class="btn btn-danger">Kembali</a>
                    <!-- </div> -->
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  {{-- Input misi Modal --}}
  <div class="modal fade" id="inputMisiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Misi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h1>Tambah Misi</h1>
            <form action="{{route('misi.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Misi</label>
                    <div class="col-sm-10">
                        {{-- <input type="text" class="form-control form-control-lg" name="kategori" id="kategori" placeholder="Target"> --}}
                        <textarea name="misi" id="misi" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="form-group mt-5" style="text-align: right;">
                    <!-- <div class="col-sm-10"> -->
                    <button type="submit" class="btn btn-primary" name="simpan">Tambah</button>
                    <a href="{{route('product.index')}}" class="btn btn-danger">Kembali</a>
                    <!-- </div> -->
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

{{-- Edit Misi Modal --}}
  <div class="modal fade" id="editMisiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Misi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h1>Edit Misi</h1>
            <form action="{{route('misi.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Misi</label>
                    <div class="col-sm-10">
                        {{-- <input type="text" class="form-control form-control-lg" name="kategori" id="kategori" placeholder="Target"> --}}
                        <textarea name="misi" id="misi" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="form-group mt-5" style="text-align: right;">
                    <!-- <div class="col-sm-10"> -->
                    <button type="submit" class="btn btn-primary" name="simpan">Tambah</button>
                    <a href="{{route('product.index')}}" class="btn btn-danger">Kembali</a>
                    <!-- </div> -->
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>


{{-- Edit Visi Modal  --}}

<div class="modal fade" id="editVisiModal" tabindex="0" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Visi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h1>Edit Visi</h1>
            <form action="{{route('misi.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Target</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="idtarget" id="idtarget">
                            <option>Choose...</option>
                            @foreach ($target as $t)
                                <option value="{{$t->id}}">{{$t->kategori}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Misi</label>
                    <div class="col-sm-10">
                        {{-- <input type="text" class="form-control form-control-lg" name="kategori" id="kategori" placeholder="Target"> --}}
                        <textarea name="misi" id="misi" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="form-group mt-5" style="text-align: right;">
                    <!-- <div class="col-sm-10"> -->
                    <button type="submit" class="btn btn-primary" name="simpan">Tambah</button>
                    <a href="{{route('product.index')}}" class="btn btn-danger">Kembali</a>
                    <!-- </div> -->
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

