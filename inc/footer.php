<footer class="primary footer">
    <div class="container py-5">
        <div class="row">
            <!-- Main Menu Section -->
            <div class="col-md-2 area-of-menu">
                <h5>Main Menu</h5>
                <ul class=" mt-4">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php"><i class="fa fa-plus"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="fa fa-plus"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php"><i class="fa fa-plus"></i> Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="facilities.php"><i class="fa fa-plus"></i> Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctors.php"><i class="fa fa-plus"></i> Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testimonials.php"><i class="fa fa-plus"></i> Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><i class="fa fa-plus"></i> Contact Us</a>
                    </li>

                </ul>
            </div>

            <!-- Contact Information (Head Office) -->
            <div class="col-md-4">
                <h5>Contact Information</h5>
                <div class=" mt-4">
                    <h6 class="fw-normal">Head Office Address</h6>
                    <ul>
                        <li>
                            Care Compass Hospitals <br>
                            No. 123 Main Street, Colombo, Sri Lanka. <br>
                            <strong>Phone (General):</strong> +94 123 456 789 <br>
                            <strong>Emmergency :</strong> +94 011 999 2222
                        </li>
                    </ul>
                    <h6 class="fw-normal">Email</h6>
                    <ul>
                        <li><i class="fa fa-arrow-right"></i>
                            <strong>General:</strong> <a href="mailto:info@carecompass.lk" class="text-white text-decoration-none">info@carecompass.lk</a>
                        </li>
                        <li><i class="fa fa-arrow-right"></i>
                            <strong>Support:</strong> <a href="mailto:support@carecompass.lk" class="text-white text-decoration-none">support@carecompass.lk</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Information (Branch Locations & Emails) -->
            <div class="col-md-3">
                <h5>Branch Locations</h5>
                <div class=" mt-4">
                    <ul>
                        <li>
                            Kandy <br>
                            No. 45 Lake Road, Kandy, Sri Lanka. <br>
                            <strong>Phone:</strong> +94 112 234 567
                        </li>
                        <li>
                            Colombo <br>
                            No. 123 Main Street, Colombo, Sri Lanka. <br>
                            <strong>Phone:</strong> +94 113 456 789
                        </li>
                        <li>
                            Kurunegala <br>
                            No. 78 Hospital Lane,Kurunegala,<br> Sri Lanka. <br>
                            <strong>Phone:</strong> +94 114 567 890
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <h5>References</h5>

                <div class="bg-white px-3 mt-4">

                    <img src="img/Sri-Lankas-Health-Ministry.png" class="img-fluid" alt="">

                </div>
                <h6 class="mt-2">Care Compass Hospitals is Approved by Sri Lanka Medical Health Ministry </h6>
                <div class="social-icons">
                    <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid  text-center py-3 copyright-area">
        <h4 class="fs-6 fw-light mb-0">2025 Copyright by Care Compass Hospitals. All rights reserved.</h4>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<script src="js/jquery-3.7.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    AOS.init();
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".owl-testimonails").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            items: 1,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true

        });
        $(".owl-doctor0-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            items: 4,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });
        $(".owl-doctor1-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            items: 4,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });



    });
</script>

<script src="js/main.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get current date and time to set as the minimum allowed date-time
        var now = new Date();
        var year = now.getFullYear();
        var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var day = ("0" + now.getDate()).slice(-2);
        var hours = ("0" + now.getHours()).slice(-2);
        var minutes = ("0" + now.getMinutes()).slice(-2);

        // Format the current datetime
        var datetimeNow = year + '-' + month + '-' + day + 'T' + hours + ':' + minutes;

        // Set the minimum value for datetime-local input
        document.getElementById('date').setAttribute('min', datetimeNow);
    });

    // Form validation on submit
    document.getElementById('appointmentForm').addEventListener('submit', function(event) {
        var errors = [];

        // Get form fields
        var appointmentDate = document.getElementById('date').value;
        var doctorSelect = document.getElementById('doctor');
        var note = document.getElementById('note').value.trim();

        // Reset previous errors
        document.getElementById('error-msg').innerHTML = '';
        document.getElementById('date').classList.remove('is-invalid');
        document.getElementById('doctor').classList.remove('is-invalid');
        document.getElementById('note').classList.remove('is-invalid');

        // Validate appointment date (can't be in the past)
        if (!appointmentDate || new Date(appointmentDate) < new Date()) {
            errors.push("Appointment date cannot be in the past.");
            document.getElementById('date').classList.add('is-invalid');
        }

        // Validate doctor selection
        if (!doctorSelect.value) {
            errors.push("Please select a doctor or specialty.");
            doctorSelect.classList.add('is-invalid');
        }

        // Validate note (optional but ensure it's not just whitespace)
        if (note.length === 0) {
            document.getElementById('note').classList.add('is-invalid');
        }

        // Display error messages if any
        if (errors.length > 0) {
            event.preventDefault(); // Prevent form submission
            document.getElementById('error-msg').innerHTML = errors.join('<br>');
        }
    });
</script>



</body>

</html>