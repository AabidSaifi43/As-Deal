@include('header')


<div class="About col-sm-12">
    <div
        class="title col-sm-12 col-lg-12 col-md-12 d-flex flex-column justify-content-center align-items-center text-center p-0 m-0">
        <h1>About Us</h1>
        <h2>WE PROVIDE BEST-QUALITY!</h2>
        <p>AT AFFORDABLE PRICES</p>
        <button>SHOP NOW</button>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="col-sm-12 about_content p-4 jhj">
                <h1>Who We Are</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit similique maxime earum quaerat
                    deleniti omnis Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit similique maxime earum
                    quaerat deleniti.</p>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="col-sm-12 p-4 jhj">
                <img src="{{ asset('images/about/1.jpg') }}" alt="about" class="about_img w-100 h-100">
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="col-sm-12 p-4 jhj">
                <img src="{{ asset('images/about/2.jpg') }}" alt="about" class="about_img w-100 h-100">
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="col-sm-12 about_content p-4 jhj">
                <h1>How It Started</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit similique maxime earum quaerat
                    deleniti omnis Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit similique maxime earum
                    quaerat deleniti.</p>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="col-sm-12 about_content p-4 jhj">
                <h1>Why Choose Us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit similique maxime earum quaerat
                    deleniti omnis Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit similique maxime earum
                    quaerat deleniti.</p>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="col-sm-12 p-4 jhj">
                <img src="{{ asset('images/about/3.jpg') }}" alt="about" class="about_img w-100 h-100">
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="col-sm-12 p-4 jhj">
                <img src="{{ asset('images/about/4.jpg') }}" alt="about" class="about_img w-100 h-100">
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="col-sm-12 about_content p-4 jhj">
                <h1>How It Works</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit similique maxime earum quaerat
                    deleniti omnis Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit similique maxime earum
                    quaerat deleniti.</p>
            </div>
        </div>
    </div>
</div>

<div class="container text-center team p-0">
    <div class="col-s-12 text-center p-4 jhj">
        <h2>A Few Words About</h2>
        <h1>Our Team</h1>
        <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in
            elit.<br> Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
    </div>

    <div class="col-sm-12 d-flex justify-content-center align-items-center p-0 mt-4">
        <div class="row d-flex justify-content-center align-items-center w-100 h-100 m-0">
            <div class="col-sm-12 col-lg-4 col-md-6 team_fle">
                <div class="col-sm-12 team1 p-4 mx-4 mb-4">
                    <img src="{{ asset('images/client/1.jpg') }}" alt="client" class="">
                    <h1>Harry Potter</h1>
                    <h2>Founder - CEO</h2>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col-md-6 team_fle">
                <div class="col-sm-12 team1 p-4 mx-4 mb-4">
                    <img src="{{ asset('images/client/4.jpg') }}" alt="client" class="">
                    <h1>Tom Holland</h1>
                    <h2>Lead Developer</h2>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col-md-6 team_fle">
                <div class="col-sm-12 team1 p-4 mx-4 mb-4">
                    <img src="{{ asset('images/client/3.jpg') }}" alt="client" class="">
                    <h1>Rachel Zain</h1>
                    <h2>Markiting Head</h2>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col-md-6 team_fle">
                <div class="col-sm-12 team1 p-4 mx-4 mb-4">
                    <img src="{{ asset('images/client/5.jpg') }}" alt="client" class="">
                    <h1>Jackie Chan</h1>
                    <h2>Intern Designer</h2>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col-md-6 team_fle">
                <div class="col-sm-12 team1 p-4 mx-4 mb-4">
                    <img src="{{ asset('images/client/2.jpg') }}" alt="client" class="">
                    <h1>Jessica Pearson</h1>
                    <h2>COO</h2>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col-md-6 team_fle">
                <div class="col-sm-12 team1 p-4 mx-4 mb-4">
                    <img src="{{ asset('images/client/6.jpg') }}" alt="client" class="">
                    <h1>Mike Ross</h1>
                    <h2>Intern Designer</h2>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')
