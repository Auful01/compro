@extends('layout.main')

@section('content')


<div class="gdlr-content">

    <!-- Above Sidebar Section-->

    <!-- Sidebar With Content Section-->
    <div class="with-sidebar-wrapper">
        <section id="content-section-1">
            <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-3" data-bgspeed="0" style="background-image: url('{{asset('upload/rokok3.jpg')}}'); padding-top: 225px; padding-bottom: 205px; ">
                <div class="container">
                    <div class="gdlr-title-item">
                        <div class="gdlr-item-title-wrapper gdlr-item  gdlr-center gdlr-extra-large ">
                            <div class="gdlr-item-title-container container">
                                <div class="gdlr-item-title-head">
                                    <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Tentang Kami</h3>
                                    <div class="gdlr-item-title-caption gdlr-skin-info">PT. Sehat Selalu Banyak Rejeki</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <section id="content-section-2">
            <div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 75px; padding-bottom: 50px; ">
                <div class="container">
                    <div class="six columns">
                        <div class="gdlr-item gdlr-about-us-item gdlr-plain">
                            <div class="about-us-title-wrapper">
                                <h3 class="about-us-title">Misi Perusahaan</h3>
                                <div class="about-us-title-divider"></div>
                            </div>
                            <div class="about-us-content-wrapper">
                                <div class="about-us-content gdlr-skin-content">
                                    <ul style="left: 0;margin-left: -5px">
                                        @foreach ($misi as $m)
                                            <li>{{$m->misi}}</li>
                                            <a href="#" class="btn btn-sm btn-danger"><img src="https://img.icons8.com/material-outlined/24/000000/trash--v2.png"/></a>
                                            <a href="" class="btn btn-sm btn-warning"><img src="https://img.icons8.com/material-outlined/24/000000/pencil--v3.png"/></a>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputMisiModal">
                                Tambah Misi
                              </button>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="six columns">
                        <div class="gdlr-item gdlr-about-us-item gdlr-plain">
                            <div class="about-us-title-wrapper">
                                <h3 class="about-us-title">Visi Perusahaan</h3>
                                <div class="about-us-title-divider"></div>
                            </div>
                            <div class="about-us-content-wrapper">
                                <div class="about-us-content gdlr-skin-content">
                                    @foreach ($vimi as $v)
                                        <h3>{{$v->target->kategori}}</h3>
                                        <p>{{$v->visi}}</p>
                                        <a href="" class="btn btn-sm btn-danger"><img src="https://img.icons8.com/material-outlined/24/000000/trash--v2.png"/></a>
                                        <a href="" class="btn btn-sm btn-warning"><img src="https://img.icons8.com/material-outlined/24/000000/pencil--v3.png"/></a>
                                        <br>
                                    @endforeach
                                </div>
                            </div>
                            <a href="{{route('vimi.create')}}" class="btn btn-primary">Tambah Visi</a>

                            {{-- <a href="{{route('vimi.create')}}" class="btn btn-primary">Tambah Misi</a> --}}
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <section id="content-section-3">
            <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-2" data-bgspeed="0" style="background-image: url('{{asset('upload/rokok3.jpg')}}'); padding-top: 135px; padding-bottom: 105px; ">
                <div class="container">
                    <div class="gdlr-stunning-item-ux gdlr-ux">
                        <div class="gdlr-item gdlr-stunning-item gdlr-button-on gdlr-stunning-center">
                            <h2 class="stunning-item-title">It’s The Best WordPress Theme.</h2>
                            <div class="stunning-item-caption gdlr-skin-content">
                                <p>This theme comes with many awesome features and it suits to any kind of businesses. You will love it!</p>
                            </div><a class="stunning-item-button gdlr-button " href="#" target="_blank">Learn More</a><a class="stunning-item-button gdlr-button" href="#" target="_blank">Buy Now!</a></div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <section id="content-section-4">
            <div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 70px; padding-bottom: 30px; ">
                <div class="container">
                    <div class="four columns">
                        <div class="gdlr-ux column-service-ux">
                            <div class="gdlr-item gdlr-column-service-item gdlr-type-2" style="margin-bottom: 45px;">
                                <div class="column-service-image"><img src="upload/icon-service-1.png" alt="" width="70" height="70" /></div>
                                <div class="column-service-content-wrapper">
                                    <h3 class="column-service-title">Commodo Fringilla Nibh</h3>
                                    <div class="column-service-content gdlr-skin-content">
                                        <p>Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Cras mattis consecte.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="gdlr-ux column-service-ux">
                            <div class="gdlr-item gdlr-column-service-item gdlr-type-2" style="margin-bottom: 45px;">
                                <div class="column-service-image"><img src="upload/icon-service-2.png" alt="" width="70" height="70" /></div>
                                <div class="column-service-content-wrapper">
                                    <h3 class="column-service-title">Mattis Sollicitudin</h3>
                                    <div class="column-service-content gdlr-skin-content">
                                        <p>Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Cras mattis consecte.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="gdlr-ux column-service-ux">
                            <div class="gdlr-item gdlr-column-service-item gdlr-type-2" style="margin-bottom: 45px;">
                                <div class="column-service-image"><img src="upload/icon-service-4.png" alt="" width="70" height="70" /></div>
                                <div class="column-service-content-wrapper">
                                    <h3 class="column-service-title">Ultricies Purus Tristique</h3>
                                    <div class="column-service-content gdlr-skin-content">
                                        <p>Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Cras mattis consecte.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="four columns">
                        <div class="gdlr-ux column-service-ux">
                            <div class="gdlr-item gdlr-column-service-item gdlr-type-2" style="margin-bottom: 45px;">
                                <div class="column-service-image"><img src="upload/icon-service-3.png" alt="" width="70" height="70" /></div>
                                <div class="column-service-content-wrapper">
                                    <h3 class="column-service-title">Tristique Egestas Dolor</h3>
                                    <div class="column-service-content gdlr-skin-content">
                                        <p>Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Cras mattis consecte.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="gdlr-ux column-service-ux">
                            <div class="gdlr-item gdlr-column-service-item gdlr-type-2" style="margin-bottom: 45px;">
                                <div class="column-service-image"><img src="upload/icon-service-5.png" alt="" width="70" height="70" /></div>
                                <div class="column-service-content-wrapper">
                                    <h3 class="column-service-title">Amet Tristique Magna</h3>
                                    <div class="column-service-content gdlr-skin-content">
                                        <p>Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Cras mattis consecte.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="gdlr-ux column-service-ux">
                            <div class="gdlr-item gdlr-column-service-item gdlr-type-2" style="margin-bottom: 45px;">
                                <div class="column-service-image"><img src="upload/icon-service-6.png" alt="" width="70" height="70" /></div>
                                <div class="column-service-content-wrapper">
                                    <h3 class="column-service-title">Ornare Cras Ultricies</h3>
                                    <div class="column-service-content gdlr-skin-content">
                                        <p>Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Cras mattis consecte.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <section id="content-section-5">
            <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all no-skin" id="gdlr-parallax-wrapper-3" data-bgspeed="0.1" style="background-repeat: no-repeat; background-image: url('{{asset('gambar/SSBR.png')}}');padding-top: 100px; padding-bottom: 70px;">
                <div class="container" style="font-weight: 800">
                    <div class="three columns" >
                        <div class="gdlr-skill-item-wrapper gdlr-skin-content gdlr-item gdlr-style-1">
                            <div class="gdlr-skill-item-title" style="color: #000;">350</div>
                            <div class="gdlr-skill-item-divider" style="border-color: #000;"></div>
                            <div class="gdlr-skill-item-caption" style="color: #000;">Employees</div>
                        </div>
                    </div>
                    <div class="three columns">
                        <div class="gdlr-skill-item-wrapper gdlr-skin-content gdlr-item gdlr-style-1">
                            <div class="gdlr-skill-item-title" style="color: #000;">12000</div>
                            <div class="gdlr-skill-item-divider" style="border-color: #000;"></div>
                            <div class="gdlr-skill-item-caption" style="color: #000;">Square Feet</div>
                        </div>
                    </div>
                    <div class="three columns">
                        <div class="gdlr-skill-item-wrapper gdlr-skin-content gdlr-item gdlr-style-1">
                            <div class="gdlr-skill-item-title" style="color: #000;">2400</div>
                            <div class="gdlr-skill-item-divider" style="border-color: #000;"></div>
                            <div class="gdlr-skill-item-caption" style="color: #000;">Happy Clients</div>
                        </div>
                    </div>
                    <div class="three columns">
                        <div class="gdlr-skill-item-wrapper gdlr-skin-content gdlr-item gdlr-style-1">
                            <div class="gdlr-skill-item-title" style="color: #000;">350</div>
                            <div class="gdlr-skill-item-divider" style="border-color: #000;"></div>
                            <div class="gdlr-skill-item-caption" style="color: #000;">Employees</div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </section>
    </div>
    <!-- Below Sidebar Section-->

</div>
<!-- gdlr-content -->
<div class="clear"></div>

@endsection
