<div class="col-sm-12 p-5 jhj">
    <div class="row m-0">
        <div class="col-lg-3 col-md-6 col-sm-6 p-0">
            <div class="col-sm-12 text-center box">
                <lord-icon src="https://cdn.lordicon.com/oqhlhtfq.json" trigger="hover"
                    colors="primary:#4bb3fd,secondary:#ebe6ef" style="width:70px;height:70px;cursor: pointer;">
                </lord-icon>
                <h1>Worldwide Shipping</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo perspiciatis.!</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 p-0">
            <div class="col-sm-12 text-center box">
                <lord-icon src="https://cdn.lordicon.com/cfpuizvl.json" trigger="hover"
                    colors="primary:#f28ba8,secondary:#f9c9c0,tertiary:#ffc738"
                    style="width:70px;height:70px;cursor: pointer;">
                </lord-icon>
                <h1>Best Quality</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo perspiciatis.!</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 p-0">
            <div class="col-sm-12 text-center box">
                <lord-icon src="https://cdn.lordicon.com/liqouopv.json" trigger="hover"
                    colors="primary:#93150d,secondary:#f9c9c0" style="width:70px;height:70px;cursor: pointer;">
                </lord-icon>
                <h1>Best Offers</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo perspiciatis.!</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 p-0">
            <div class="col-sm-12 text-center box">
                <lord-icon src="https://cdn.lordicon.com/nnbhwnej.json" trigger="hover" colors="primary:#646e78"
                    style="width:70px;height:70px;cursor: pointer;">
                </lord-icon>
                <h1>Secure Payments</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo perspiciatis.!</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid banner4">
    <h1>SALE UP TO 70% OFF FOR ALL CLOTHES & FASHION ITEMS, ON ALL BRANDS.</h1>
</div>

<div class="col-sm-12 footer">
    <div class="row m-0">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="col-sm-12 ui-log">
                <img src="{{ asset('images/logo/logo.png') }}" alt="logo" class="ms-4 footer_logo">
                <h1>The best look anytime, anywhere.</h1>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="col-sm-12 him">
                <h1>HELP</h1>
                <ul>
                    <li><a href="privacy.html?section=Payments" id="paymentsLink">Payments</a></li>
                    <li><a href="privacy.html?section=Shipping" id="shippingLink">Shipping</a></li>
                    <li><a href="privacy.html?section=Cancellation" id="cancellationLink">Cancellation & Returns</a>
                    </li>
                    <li><a href="privacy.html?section=FAQ" id="faqLink">FAQ</a></li>
                    <li><a href="privacy.html?section=Report" id="reportLink">Report Infringement</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="col-sm-12 her">
                <h1>POLICY</h1>
                <ul>
                    <li><a href="privacy.html?section=Terms" id="termsLink">Terms Of Use</a></li>
                    <li><a href="privacy.html?section=Security" id="securityLink">Security</a></li>
                    <li><a href="privacy.html?section=Privacy" id="privacyLink">Privacy</a></li>
                    <li><a href="privacy.html?section=Sitemap" id="sitemapLink">Sitemap</a></li>
                    <li><a href="privacy.html?section=Grievance" id="grievanceLink">Grievance Redressal</a></li>
                    <li><a href="privacy.html?section=EPR" id="eprLink">EPR Compliance</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="col-sm-12 sub" id="subscriptionForm">
                <h1>Subscribe</h1>
                <input type="email" id="emailInput" placeholder="Your email address..." required>
                <button onclick="subscribe()" id="emailbutton">SUBSCRIBE</button>
                <div class="sub" id="thankYouMessage" style="display: none;">
                    <p>Thanks for signing up for the newsletter! We'll be in touch soon.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container copyright">
    <div class="row">
        <div class="col-lg-6">
            <div class="col-sm-12 copy d-flex justify-content-center align-items-center">
                <p>Copyright<span> © </span>2023 Axma. Powered by <span>Axma</span>.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="col-sm-12 copy-icon d-flex justify-content-center align-items-center">
                <i class="fa-brands fa-facebook-f" id="ab" class="icon1"></i>
                <i class="fa-brands fa-youtube" id="ab"></i>
                <i class="fa-brands fa-twitter" id="ab"></i>
                <i class="fa-brands fa-instagram" id="ab"></i>
                <i class="fa-brands fa-google" id="ab"></i>
            </div>
        </div>
    </div>
</div>

<script>
    const images = [
        '{{ asset('images/extra/1.jpg') }}',
        '{{ asset('images/extra/2.jpg') }}',
        '{{ asset('images/extra/3.jpg') }}'
    ];
    let currentImageIndex = 0;
    const imgElement = document.querySelector('.slideshow-img');

    function changeImage() {
        imgElement.style.opacity = 0;
        setTimeout(() => {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            imgElement.src = images[currentImageIndex];
            imgElement.style.opacity = 1;
        }, 500);
    }

    setInterval(changeImage, 3000);
</script>

<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
    integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>