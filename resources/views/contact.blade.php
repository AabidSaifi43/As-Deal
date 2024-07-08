@include('header')


<div class="Contact col-sm-12">
    <div
        class="title col-sm-12 col-lg-12 col-md-12 d-flex flex-column justify-content-center align-items-center text-center p-0 m-0">
        <h1>Contact Us</h1>
        <h2>SAY HELLO TO US.!</h2>
        <p>info@example.com</p>
        <button>CONTACT NOW</button>
    </div>
</div>

<div class="container text-center team my-5 p-0">
    <div class="col-sm-12 text-center p-4 jhj contac">
        <h2>Have Any Queries ?</h2>
        <h1>We Are Here To Help you</h1>
    </div>

    <div class="col-sm-12 d-flex justify-content-center align-items-center p-0">
        <div class="row d-flex justify-content-center align-items-center w-100 h-100 mt-4">
            <div class="col-sm-6 col-lg-3 col-md-4">
                <div class="col-sm-12  p-4 mb-4 sale">
                    <h1>Sales</h1>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                    <h2>1800 123 4567</h2>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-md-4">
                <div class="col-sm-12  p-4 mb-4 sale">
                    <h1>Complaints</h1>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                    <h2>1900 223 8899</h2>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-md-4">
                <div class="col-sm-12  p-4 mb-4 sale">
                    <h1>Returns</h1>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                    <h2>returns@mail.com</h2>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-md-4">
                <div class="col-sm-12  p-4 mb-4 sale">
                    <h1>Marketing</h1>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                    <h2>1700 444 5578</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container p-0">
    <div class="row d-flex justify-content-center align-items-center m-0">
        <div class="col-lg-6 col-md-12 p-0">
            <div class="col-sm-12 p-4 contact-content">
                <h2>Don't be a stranger!</h2>
                <h1>You tell us. We listen.</h1>
                <p>Cras elementum finibus lacus nec lacinia. Quisque non convallis nisl, eu condimentum sem. Proin
                    dignissim
                    libero lacus, ut eleifend magna vehicula et. Nam mattis est sed tellus.</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="col-sm-12 p-4 jhj">
                <form class="contact-form p-4 jhj" action="{{ route('submit.form') }}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" placeholder="Message" rows="4" required></textarea>
                    <button type="submit">Send Message</button>
                </form>

            </div>
        </div>
    </div>
</div>




@include('footer')
