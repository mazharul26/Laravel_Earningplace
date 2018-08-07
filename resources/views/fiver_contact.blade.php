
@extends("master")
@section("content")
<!-- contact -->
<div id="contact" class="contact jarallax">
    <div class="container">
        <h3 class="agileits-title">Contact Us</h3>
        <div class="clearfix"></div>
        <div class="gal-btm">
            <div class="map-home">
                <div class="col-md-6 drop-pad sign-gd-two">
                    <h3>Contact Info</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.Perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                        doloremque laudantium, totam rem.</p>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><strong>Address</strong> : Park Avenue, Tin Gardens, <span>Paris.</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><strong>Email</strong>  : <a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><strong>Phone </strong> : +027 654 321</li>
                    </ul>
                </div>
                <div class="col-md-6 login-pad">
                    <h3>Drop Us A Message</h3>
                    <form action="#" method="get" name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked><i> </i>Subscribe to our Newsletter</label>
                        <div class="control-group form-group">
                            <div class="controls">
                                <textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary">Send Message</button>
                        <div class="clearfix"></div>	
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- //contact -->
<!-- Map -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.94722640373!2d2.27751730651281!3d48.85883773940494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1488544982675"></iframe>
</div>
<!-- //Map -->
@endsection