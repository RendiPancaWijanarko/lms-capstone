@extends('layouts.front')

@section('content')
    <section class="home" id="home">
        <div class="home-container container grid">
            <div class="home-img-bg">
                {{-- in the style.css --}}
            </div>

            <div class="home-data">
                <h1 class="home-title">
                    We Teach You <br />
                    Everything You Need To Know
                </h1>
                <p class="home-description">
                    Discover the way you learn & take control of your life and make
                    something useful for others.
                </p>
                <div class="home-btns">
                    <a href="{{ route('courses.index') }}" class="button btn-gray btn-small"> My Course </a>
                    <a href="#course" class="button button-home">Reach Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="story section container">
        <div class="story-container grid">
            <div class="story-data">
                <h2 class="section-title story-section-title">Our Goals</h2>
                <h1 class="story-title">
                    Enjoy learning without any pressure
                </h1>

                <p class="story-description">
                    Learn to make something with real-world projects that help you increase creativity.
                </p>
                <a href="#course" class="button btn-small">Reach us</a>
            </div>
            <div class="story-images">
                <img src="{{ asset('frontend/assets/images/goals.jpg') }}" alt="" class="story-img" />
                <div class="story-square"></div>
            </div>
        </div>
    </section>

    <section class="testimonial section container">
        <div class="testimonial grid">
            <div class="swiper testimonial-swipper">
                <div class="swiper-wrapper">

                    <!-- Testimonial Card 1 -->
                    <div class="testimonial-card swiper-slide" style="text-align: center;">
                        <div class="testimonial-quote">
                            <i class="bx bxs-quote-alt-left"></i>
                        </div>
                        <p class="testimonial-description">
                            Di balik setiap pencapaian dan setiap langkah maju,
                            ada sosok-sosok visioner yang menjadi pionir, membimbing kita melalui tantangan,
                            dan memimpin kita menuju masa depan yang lebih baik.
                        </p>
                        <h3 class="testimonial-date">December 19, 2023</h3>

                        <div class="testimonial-profile" style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                            <img src="{{ asset('frontend/assets/images/Rendi GDSC.png') }}" alt="" class="testimonial-profile-img" />

                            <div class="testimonial-profile-data">
                                <span class="testimonial-profile-name">Rendi P Wijanarko</span>
                                <span class="testimonial-profile-detail">Founder of FlyHigh Corp.</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Card 2 -->
                    <div class="testimonial-card swiper-slide" style="text-align: center;">
                        <div class="testimonial-quote">
                            <i class="bx bxs-quote-alt-left"></i>
                        </div>
                        <p class="testimonial-description">
                            Pemimpin adalah individu yang memulai perjalanan ini dengan visi besar,
                            ketekunan tanpa batas, dan tekad untuk menciptakan dampak positif.
                        </p>
                        <h3 class="testimonial-date">December 20, 2023</h3>

                        <div class="testimonial-profile" style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                            <img src="{{ asset('frontend/assets/images/testimonial1.jpg') }}" alt="" class="testimonial-profile-img" />

                            <div class="testimonial-profile-data">
                                <span class="testimonial-profile-name">Yusrizal Anastya Tomo</span>
                                <span class="testimonial-profile-detail">CEO of Modern LMS</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Testimonial Slider Navigation -->
                <div class="swiper-button-next" style="right: 30%;left: initial;top: initial;bottom: 3rem;">
                    <i class="bx bx-right-arrow-alt"></i>
                </div>
                <div class="swiper-button-prev" style="right: initial;left: 30%;top: initial;bottom: 3rem;">
                    <i class="bx bx-left-arrow-alt"></i>
                </div>
            </div>
        </div>
    </section>
@endsection
