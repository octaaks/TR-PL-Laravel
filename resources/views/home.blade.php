@extends('headerhome')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0">
            <video width="100%" preload="auto" loop autoplay muted>
                <source src='{{asset('assets/media/explore.mp4')}}' type='video/mp4' />
                <source src='{{asset('assets/media/explore.webm')}}' type='video/webm' />
            </video>
            <div class="container">
                <h1 class="pt-5">
                    BERSAMA KAMI<br>
                    LIBURAN JADI MUDAH.
                </h1>
                <p class="lead">
                    Bekerja Sama Dengan Objek Wisata, Hotel dan Penginapan Seluruh Indonesia
                </p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <img src="{{ asset('assets/img/logo/daftarlisticon.png')}}"  width="100px" height="100px" alt=""> 
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    DAFTAR
                                </h4>
                                <p class="card-text">
                                    Daftar Dengan Mudah Melalui online atau Daftar Di Kantor Cabang Terdekat
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <img src="{{ asset('assets/img/logo/bayaricon.png')}}"  width="100px" height="100px" alt=""> 
                               
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    BAYAR
                                </h4>
                                <p class="card-text">
                                    Pembayaran Sangat Mudah Karena Sudah Bekerja Sama Dengan BANK terkenal Indonesia
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                               <img src="{{ asset('assets/img/logo/pesawaticon.png')}}"  width="100px" height="100px" alt=""> 
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    LIBURAN
                                </h4>
                                <p class="card-text">
                                    Saatnya anda liburan tanpa Repot, Karena Sudah Mendapatkan Tiket Masuk Objek wisata, Penginapan, dan Driver Pribadi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
