@extends('frontend.layout.app')
@section('content')

    <section class="container landmark" id="landmark">
        <div class="landmark1">
            <h1>
                Crafting<span style="color: #096CBB;">Landmark Projects</span>
                <br>
                That Redefine Living
            </h1>
            <p>Each project reflects our commitment to quality, thoughtful design, and timely execution. From <br>
                concept to completion, we focus on creating spaces that deliver lasting value and stand as <br>
                benchmarks of excellence.</p>

            <button>Inquiry Now</button>
        </div>
        <div class="landmark2">
            <img src="{{ asset('frontend/images/hero-img.png5.png') }}" alt="">
        </div>
    </section>
    <section class="ranking" id="ranking">

        <div>
            <h2>48+</h2>
            <h6>Completed Projects</h6>
        </div>
        <div>
            <h2>52+</h2>
            <h6>Projects in Development</h6>
        </div>
        <div>
            <h2>560+</h2>
            <h6>Total Area Sq</h6>
        </div>
        <div>
            <h2>1000+</h2>
            <h6>Happy Customer</h6>

        </div>

    </section>


    <section id="Projects">

        <div class="rankhead">
            <h1>Our Top Project</h1>
        </div>
        <div class="mainranking" id="mainranking">

            <div class="rankhead1">

                <img src="{{ asset('frontend/images/1769765922_main.webp') }}" alt="">


                <div class="ranking3">
                    <h4>The Royal Palms</h4>
                    <p>Palm View Homes is a premium independent housing <br> project that offers luxury, pri...</p>
                    <h5>View Details →</h5>
                </div>

            </div>

            <div class="rankhead1">

                <img src="{{ asset('frontend/images/1769765533_main.webp') }}" alt="">


                <div class="ranking3">
                    <h4>Palm View Homes</h4>
                    <p>Metro Business Park is a modern commercial development <br> designed to meet the need...</p>
                    <h5>View Details →</h5>
                </div>

            </div>

            <div class="rankhead1">

                <img src="{{ asset('frontend/images/1769765922_main.webp') }}" alt="">


                <div class="ranking3">
                    <h4>Silver Heights Apartments</h4>
                    <p>Palm View Homes is a premium independent housing <br> project that offers luxury, pri...</p>
                    <h5>View Details →</h5>
                </div>

            </div>

        </div>







    </section>
    <section>
        <div class="mainranking2">

            <div class="rankhead2">

                <img src="{{ asset('frontend/images/1769758758_main.webp') }}" alt="">


                <div class="ranking4">
                    <h4>Green Valley Residency</h4>
                    <p>Green Valley Residency is a thoughtfully designed <br> residential project located in...</p>
                    <h5>View Details →</h5>
                </div>

            </div>
            <div class="rankhead2">

                <img src="{{ asset('frontend/images/1769758758_main.webp') }}" alt="">


                <div class="ranking4">
                    <h4>Green Valley Residency</h4>
                    <p>Green Valley Residency is a thoughtfully designed <br> residential project located in...</p>
                    <h5>View Details →</h5>
                </div>

            </div>
            <div class="rankhead2">

                <img src="{{ asset('frontend/images/1769758758_main.webp') }}" alt="">


                <div class="ranking4">
                    <h4>Green Valley Residency</h4>
                    <p>Green Valley Residency is a thoughtfully designed <br> residential project located in...</p>
                    <h5>View Details →</h5>
                </div>

            </div>
        </div>
    </section>
    <section class="newrank" id="newrank">
        <div class="newrank1">
            <button>AMENITIES</button>
            <h1>Facilities That You Will Get</h1>


        </div>
        <div class="boxflex" id="boxflex">
            <div class="box">
                <img src="{{ asset('frontend/images/1769751959.webp') }}" alt="">
                <h3>Fitness</h3>
            </div>
            <div class="box">
                <img src="{{ asset('frontend/images/1769751979.webp') }}" alt="">
                <h3>Sports Court</h3>
            </div>
            <div class="box">
                <img src="{{ asset('frontend/images/1769751576.webp') }}" alt="">
                <h3>Garden</h3>
            </div>
            <div class="box">
                <img src="{{ asset('frontend/images/1769751836.webp') }}" alt="">
                <h3>Club House</h3>
            </div>
            <div class="box">
                <img src="{{ asset('frontend/images/1769751778.webp') }}" alt="">
                <h3>Jogging Track</h3>
            </div>
        </div>
        <div class="boxflex">
            <div class="box">
                <img src="{{ asset('frontend/images/1769751702.webp') }}" alt="">
                <h3>24X7 Security</h3>
            </div>
            <div class="box">
                <img src="{{ asset('frontend/images/1769751657.webp') }}" alt="">
                <h3>Community Hall</h3>
            </div>
            <div class="box">
                <img src="{{ asset('frontend/images/1769751876.webp') }}" alt="">
                <h3>Swimming Pool</h3>
            </div>
            <div class="box">
                <img src="{{ asset('frontend/images/1769751404.webp') }}" alt="">
                <h3>Shops</h3>
            </div>
            <div class="box">
                <img src="{{ asset('frontend/images/1769751239.webp') }}" alt="">
                <h3>Temple</h3>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="Directorsbtn"><button>Our Directors</button></div>

        <div class="Directors">
            <div class="Directors1">
                <img src="{{ asset('frontend/images/1769776681.webp') }}" alt="">
                <h5>Mr. R C Mirotha</h5>
            </div>
            <div class="Directors1">
                <img src="{{ asset('frontend/images/1769776711.webp') }}" alt="">
                <h5>Mr. Surendra Sharma</h5>

            </div>
            <div class="Directors1">
                <img src="{{ asset('frontend/images/1769776815.webp') }}" alt="">
                <h5>Mr. Neeraj Jain</h5>
            </div>
        </div>
    </section>
    <section id="clientttt">
        <div class="client1">
            <h6>Clients Feedbacks</h6>
            <h1>What Our Client Says</h1>
        </div>
        <div class="client">
            <div class="client2">
                <img src="{{ asset('frontend/images/testimg.png') }}" alt="">
                <div class="client3">
                    <h3>Pooja Jain</h3>
                    <p>Working Professional</p>
                    <p>Website use karna easy hai aur inquiry <br> process simple laga. Site visit ke time <br> proper
                        assistance mili. Overall experience <br> kaafi satisfying raha.</p>
                </div>
            </div>


            <div class="client2">
                <img src="{{ asset('frontend/images/testimg.png') }}" alt="">
                <div class="client3">
                    <h3>Amit Verma</h3>
                    <p>Investor</p>
                    <p>
                        Projects well-planned hain aur future <br> growth potential clearly dikhta hai. Team <br>
                        professional hai aur queries ka response <br>fast milta hai. Long-term investment ke liye <br>
                        achha option.</p>
                </div>
            </div>
            <div class="client2">
                <img src="{{ asset('frontend/images/testimg.png') }}" alt="">
                <div class="client3">
                    <h3> Neha Agarwal</h3>
                    <p>Home Buyer</p>
                    <p>Location, pricing aur documentation sab <br> kuch clearly explained tha. Jo promise kiya <br> tha
                        wahi deliver hua. First-time buyers ke <br> liye kaafi trustworthy developer hai.</p>
                </div>
            </div>

            <div class="client2">
                <img src="{{ asset('frontend/images/testimg.png') }}" alt="">
                <div class="client3">
                    <h3> Rakesh Sharma</h3>
                    <p>Business Owner</p>
                    <p>Dream Dwell Realty ke saath experience <br> kaafi smooth raha. Site par project details <br>
                        clear the aur team ne timely guidance di. <br> Overall process transparent aur hassle-free <br>
                        tha.></p>
                </div>
            </div>

        </div>

    </section>
    <section>
        <div class="headclient">
            <h1>Our Projects Gallery</h1>
        </div>
        <div class="clientflex">
            <div class="clientimg">
                <img src="{{ asset('frontend/images/1769765533_main.webp') }}" alt="">

            </div>
            <div class="clientimg">
                <img src="{{ asset('frontend/images/1769765922_main.webp') }}" alt="">

            </div>
            <div class="clientimg">
                <img src="{{ asset('frontend/images/1769765533_main.webp') }}" alt="">

            </div>
        </div>
        <div class="clientflex">
            <div class="clientimg">
                <img src="{{ asset('frontend/images/1771235635_6992e93344154_104.png') }}" alt="">

            </div>
            <div class="clientimg">
                <img src="{{ asset('frontend/images/1771235652_6992e94437f87_images_(1).jpg') }}" alt="">

            </div>
            <div class="clientimg">
                <img src="{{ asset('frontend/images/1771235671_6992e957673c0_houses_and_land-5bfc3326c9e77c0051812eb3.jpg') }}"
                    alt="">

            </div>
        </div>

    </section>
    <section id="aboutus">
        <div class="builder">
            <div class="builder1">
                <img src="{{ asset('frontend/images/about.jpg') }}" alt="">
            </div>
            <div class="builder2">
                <h2>About us</h2>
                <h1>About Our Dream Dwell Realty</h1>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <br>Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an <br> unknown printer took a galley
                    of type and scrambled it to make a type specimen book. <br> It has survived not only five centuries,
                    but also the leap into electronic typesetting,<br> remaining essentially unchanged.</p>

                <button class="builder2btn">Contact Us</button>

            </div>

        </div>
    </section>
    <section id="contactus">
        <div class="inquiry">
            <div class="inquiry1">
                <h1>
                    Any Inquiry? Feel free
                    <br>
                    To contact Us.

                </h1>
                <button class="inquirybtn">Inquiry Now</button>


            </div>
            <div class="inquiry2">

                <img src="{{ asset('frontend/images/enquiry.png') }}" alt="">

            </div>
        </div>
    </section>

@endsection