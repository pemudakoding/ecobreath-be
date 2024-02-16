@extends('layouts.base')

@section('content')
    <!-- Volunteer Section start -->
    <section class="volunteer padding-tb" style="background-image: url(css/main/images/volunteer-bg.jpg); background-size: cover;">
        <div class="container">
            <div class="section-header" data-aos="fade-up" data-aos-duration="700">
                <h2>Meet Our Team</h2>
            </div>
            <div class="section-wrapper" data-aos="fade-up" data-aos-duration="700">
                <div class="volunteer-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="post-item">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img src="images/volunteer/01.jpg" alt="volunteer"></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-header">
                                            <h4><a href="#">Stiven Stefanus Triski Katuuk</a></h4>
                                            <p>Anggota Kelompok ICT-101</p>
                                        </div>
                                        <div class="post-body">
                                            <p>Developer</p>
                                            <ul class="icon-style-list">
                                                <li><i class="fas fa-envelope"></i>stivenstef06@student.unsia.ac.id</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="post-item">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img src="images/volunteer/02.jpg" alt="volunteer"></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-header">
                                            <h4><a href="#">Muhammad</a></h4>
                                            <p>Anggota Kelompok</p>
                                        </div>
                                        <div class="post-body">
                                            <p>Developer, Pembuat Jurnal</p>
                                            <ul class="icon-style-list">
                                                <li><i class="fas fa-envelope"></i>muhammadbawazier58@gmail.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="post-item">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img src="images/volunteer/03.jpg" alt="volunteer"></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-header">
                                            <h4><a href="#"> Rama Dinasty Abdillah</a></h4>
                                            <p>Anggota Kelompok</p>
                                        </div>
                                        <div class="post-body">
                                            <p>Penulis, Presenter, Support</p>
                                            <ul class="icon-style-list">
                                                <li><i class="fas fa-phone-square"></i>+880 1234 567 890</li>
                                                <li><i class="fas fa-envelope"></i>williamkhanna@gmail.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="volunteer-pagination"></div>
            </div>
        </div>
    </section>
    <!-- Volunteer Section ending -->
@endsection
