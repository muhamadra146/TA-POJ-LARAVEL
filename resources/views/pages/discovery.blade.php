@extends('layouts.app')

@section('title')
<title>Discovery</title>
@endsection

@section('content')
<div class="section-top">
    <div class="container">
        <div class="content1">
            <div class="content-left">
                <h1>Exploring Wonderful Indonesia</h1>
                <p>At Wonderful Indonesia, we believe that travel should be an unforgettable experience, and we're dedicated to making sure that every moment you spend with us is one to remember. So why wait? Book your adventure today and discover the magic of Indonesia.</p>
                <button>Explore Now <i class="fa-regular fa-circle-right"></i></button>
            </div>
            <div class="content-right">
                <div class="border">
                    <img src="gambar/dicovery/Group 22.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-most-popular">
    <div class="container">
        <div class="content1">
            <div class="content-left">
                <p>Recommend</p>
                <h3>Most Picked Destination</h3>
            </div>
            <div class="content-right">
                <div><a href="#"><button>See all</button></a></div>
            </div>
        </div>
        <div class="content2">
            <div class="gambar">
                <img src="gambar/dicovery/Rectangle 29.png" alt="">
                <h5></h5>
                <p> <span>Nusa Penida</span> <br> Kelungkung, Bali</p>
            </div>
            <div class="gambar">
                <img src="gambar/dicovery/Rectangle 29 (1).png" alt="">
                <h5></h5>
                <p> <span>Nusa Penida</span> <br> Kelungkung, Bali</p>
            </div>
            <div class="gambar">
                <img src="gambar/dicovery/Rectangle 29 (2).png" alt="">
                <h5></h5>
                <p> <span>Nusa Penida</span> <br> Kelungkung, Bali</p>
            </div>
            <div class="gambar">
                <img src="gambar/dicovery/Rectangle 29 (3).png" alt="">
                <h5></h5>
                <p> <span>Nusa Penida</span> <br> Kelungkung, Bali</p>
            </div>
        </div>
    </div>
</div>

<div class="section-best-early">
    <div class="container">
        <div class="content1">
            <div class="content-left">
                <h1><span>The Best Early</span> <br> Travel Experience</h1>
                <p>We offer a wide range of services and have many choices of travel packages to accompany your trip. In addition, we also uphold corporate values.</p>
            </div>
            <div class="content-right">
                <div class="col1">
                    <div class="card">
                        <p><i class="fa-solid fa-heart" style="color: #e6783d;"></i> Our Ethics</p>
                        <p>Prioritizing Happy Traveling, Upholding Culture</p>
                    </div>
                </div>
                <div class="col2">
                    <div class="card">
                        <p><img src="gambar/dicovery/Group 10.png" alt=""> Our Ethics</p>
                        <p>Prioritizing Happy Traveling, Upholding Culture</p>
                    </div>
                    <div class="card">
                        <p><img src="gambar/dicovery/Group 10 (1).png" alt=""> Our Ethics</p>
                        <p>Prioritizing Happy Traveling, Upholding Culture</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-our-package">
    <div class="content1">
        <h2>Our Package</h2>
        <p>More than one destination you will visit</p>
    </div>
    <div class="content2">
        <div class="card card1">
            <p><span>1st Package</span></p>
            <h4>Private Trip</h4>
            <p>Enjoy the luxury of having your own private guide, who will take you to hidden gems and off-the-beaten-path locations that you won't find in any guidebook.</p>
            <img class="awan1" src="gambar/dicovery/awan.png" alt="">
            <img class="awan2" src="gambar/dicovery/awan.png" alt="">
            <img class="awan3" src="gambar/dicovery/awan.png" alt="">
            <img class="awan4" src="gambar/dicovery/awan.png" alt="">
            <img class="awan5" src="gambar/dicovery/awan.png" alt="">
        </div>
        <div class="card card2">
            <p>2nd Package</p>
            <h4><span>Open Trip</span></h4>
            <p>With an open trip, you'll have the opportunity to connect with travelers from all over the world, creating lifelong friendships and unforgettable memories. </p>
            <img class="awan1" src="gambar/dicovery/awan.png" alt="">
            <img class="awan2" src="gambar/dicovery/awan.png" alt="">
            <img class="awan3" src="gambar/dicovery/awan.png" alt="">
            <img class="awan4" src="gambar/dicovery/awan.png" alt="">
            <img class="awan5" src="gambar/dicovery/awan.png" alt="">
        </div>
    </div>
</div>

<div class="section-discount">
    <div class="content1">
        <div class="content-left">
            <h1>Get 15% <span>for your</span> first trip</h1>
            <p>Attention all first-time travelers! We're excited to offer an exclusive discount just for you. Book your first trip with us today and receive 10% off your entire journey.</p>
        </div>
        <div class="content-right">
            <div><button>Get Started</button></div>
        </div>
    </div>
</div>
@endsection