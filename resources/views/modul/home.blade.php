@include('layouts.includes.header')
@extends('master')
@section('content')
        <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-3 col-sm-4">
                <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                    <img src="http://localhost:8000/asset/img/icon/television.svg" height="50" width="50">
                            </div>
                            <div class="col-md-9">
                                <p><font size="4"><b>Trending Channel</b></font></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-inline">
                                        <div class="input-group w-100">
                                          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Cari Channel" >
                                          <div class="input-group-append"><button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button></div>
                                        </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                {{-- <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action" >Teknik Infrormatika UG</a>
                                    <a href="#" class="list-group-item list-group-item-action">Ilmu Komputer UI</a>
                                    <a href="#" class="list-group-item list-group-item-action">STIE ITB</a>
                                  </div> --}}
                                  <ul class="" >
                                        <li>Teknik Infrormatika UG</li>
                                        <li>Ilmu Komputer UI</li>
                                        <li>STIE ITB</li>
                                      </ul>
                                <a href="">Lihat Channel</a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fa fa-2x fa-hashtag" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-9">
                                <p><font size="4"><b>Tag Popular</b></font></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-inline">
                                        <div class="input-group w-100">
                                          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Cari Tag" >
                                          <div class="input-group-append"><button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button></div>
                                        </div>
                                </form>
                            </div>
                        </div>
                        {{-- <br> --}}
                        <div class="row">
                            <div class="col-md-12">
                                    <span class="badge badge-primary">UG</span>
                                    <span class="badge badge-primary">Teknik</span>
                                    <span class="badge badge-primary">Fakultas Teknologi Industri</span>
                                    <span class="badge badge-primary">HTML</span>
                                    <span class="badge badge-primary">Pengantar Web</span>
                            </div>
                        </div>
                        <br>
                        <br>
                </div>
                        
        </div>
        <div class="col-lg-6 col-sm-8">
                <form action="#" class="search-wrap">
                    <div class="input-group w-100">
                        <input type="text" class="form-control" style="width:40%;" placeholder="Cari Pertanyaan">
                    
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="submit">
                            <i class="fa fa-search"></i>
                          </button>
                        </div>
                    </div>

                    {{-- <div class="row"> --}}
                            {{-- <div class="mx-auto col-md-7"> --}}
                              <hr>
                              <p style="text-align:center;"><b><i>"Karena setiap masalah pasti memiliki jalan keluar"</i></b></p>
                              <hr>
                            {{-- </div> --}}
                          {{-- </div> --}}
                </form> <!-- search-wrap .end// -->
        </div> <!-- col.// -->
        <div class="col-lg-3 col-sm-4">
            <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                    <img src="http://localhost:8000/asset/img/icon/graduate-student-avatar.svg" height="50" width="50">
                            </div>
                            <div class="col-md-9">
                                <p><font size="4"><b>Mahasiswa of The Month</b></font></p>
                            </div>
                        </div>
                        
                        <div class="container">
                                <div class="row">
                                  <div class="col-md-3">
                                        <img src="http://localhost:8000/asset/img/icon/gold-medal.svg" height="35" width="35">
                                  </div>
                                  <div class="col-md-9">
                                    <div class="row">
                                      <div class="col-md-12">
                                            <p><font color="blue">I Made Sabda Putra</font></p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                            <p style="font-size :80%; text-align: center;margin-top: -20px;">1290</p>
                                            <p style="font-size :40%; text-align: center;margin-top: -10px;">Pertanyaan Dijawab</p>
                                      </div>
                                      <div class="col-md-6">
                                            <p style="font-size :80%; text-align: center;margin-top: -20px;">670</p>
                                            <p style="font-size :40%; text-align: center;margin-top: -10px;">Pertanyaan Direkomedasikan</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-3">
                                              <img src="http://localhost:8000/asset/img/icon/silver-medal.svg" height="35" width="35">
                                        </div>
                                        <div class="col-md-9">
                                          <div class="row">
                                            <div class="col-md-12">
                                                  <p><font color="blue">Yusnika Nur Afiana</font></p>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                  <p style="font-size :80%; text-align: center;margin-top: -20px;">1118</p>
                                                  <p style="font-size :40%; text-align: center;margin-top: -10px;">Pertanyaan Dijawab</p>
                                            </div>
                                            <div class="col-md-6">
                                                  <p style="font-size :80%; text-align: center;margin-top: -20px;">487</p>
                                                  <p style="font-size :40%; text-align: center;margin-top: -10px;">Pertanyaan Direkomedasikan</p>
                                            </div>
                                          </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-3">
                                              <img src="http://localhost:8000/asset/img/icon/gold-medal.svg" height="35" width="35">
                                        </div>
                                        <div class="col-md-9">
                                          <div class="row">
                                            <div class="col-md-12">
                                                  <p><font color="blue">I Made Sabda Putra</font></p>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                  <p style="font-size :80%; text-align: center;margin-top: -20px;">1118</p>
                                                  <p style="font-size :40%; text-align: center;margin-top: -10px;">Pertanyaan Dijawab</p>
                                            </div>
                                            <div class="col-md-6">
                                                  <p style="font-size :80%; text-align: center;margin-top: -20px;">487</p>
                                                  <p style="font-size :40%; text-align: center;margin-top: -10px;">Pertanyaan Direkomedasikan</p>
                                            </div>
                                          </div>
                                        </div>
                                </div>
                              </div>
                        <div class="row">
                                <div class="col-md-3">
                                        <img src="http://localhost:8000/asset/img/icon/form.svg" height="50" width="50">
                                </div>
                                <div class="col-md-9">
                                    <p><font size="4"><b>Pertanyaan Popular</b></font></p>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-inline">
                                        <div class="input-group w-100">
                                          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Cari Tag" >
                                          <div class="input-group-append"><button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button></div>
                                        </div>
                                </form>
                            </div>
                        </div>
                        {{-- <br> --}}
                        <div class="row">
                            <div class="col-md-12">
                                    <ul class="" >
                                            <li>Lorem Ipsum</li>
                                            <p style="font-size :50%; text-align: right;margin-top: -20px;">(30 Jawaban )</p>
                                            <p style="font-size :80%;margin-top: -10px; color:blue">Rekayasa Komputasional</p>
                                            <li>Lorem Ipsum</li>
                                            <p style="font-size :50%; text-align: right;margin-top: -20px;">(25 Jawaban )</p>
                                            <p style="font-size :80%;margin-top: -10px; color:blue">Sistem Basis Data 2</p>
                                          </ul>
                            </div>
                        </div>
            </div>            
        </div>
                    
    </div>
        </div> <!-- col.// -->
    </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
@endsection