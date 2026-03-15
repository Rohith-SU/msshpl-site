<?php include 'includes/header.php'; ?>

<style>

body{
font-family:Segoe UI;
background:#f5f7fa;
}

/* PAGE HEADER */

.page-header{
background:linear-gradient(120deg,#0d6efd,#0a2540);
color:white;
padding:100px 0;
text-align:center;
}

/* SECTION */

.section{
padding:80px 0;
}

/* CONTACT BOX */

.contact-box{
background:white;
padding:30px;
border-radius:10px;
transition:0.4s;
}

.contact-box:hover{
transform:translateY(-10px);
box-shadow:0 20px 30px rgba(0,0,0,0.1);
background:#e6f7ff; /* light blue hover color */
}

/* FORM */

.contact-form{
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 10px 20px rgba(0,0,0,0.1);
}

</style>

<!-- HEADER -->

<section class="page-header">

<div class="container" data-aos="fade-up">

<h1>Contact Us</h1>

<p>Get in touch with our team</p>

</div>

</section>

<!-- CONTACT INFO -->

<section class="section">

<div class="container">

<div class="row g-4">

<div class="col-md-4" data-aos="fade-up">

<div class="contact-box">

<h5>Address</h5>

<p>
Master Software Solution Hitech Private Limited<br>
54 Bharathi Street<br>
B.R.Puram<br>
Coimbatore – 641004<br>
India
</p>

</div>

</div>

<div class="col-md-4" data-aos="fade-up">

<div class="contact-box">

<h5>Phone</h5>

<p>0422-2574374</p>

</div>

</div>

<div class="col-md-4" data-aos="fade-up">

<div class="contact-box">

<h5>Email</h5>

<p>info@msshpl.co.in</p>

</div>

</div>

</div>

</div>

</section>

<!-- CONTACT FORM -->

<section class="section bg-light">

<div class="container">

<h2 class="text-center mb-5">Send Us a Message</h2>

<div class="row justify-content-center">

<div class="col-md-6">

<div class="contact-form" data-aos="zoom-in">

<form>

<div class="mb-3">
<input type="text" class="form-control" placeholder="Your Name">
</div>

<div class="mb-3">
<input type="email" class="form-control" placeholder="Your Email">
</div>

<div class="mb-3">
<input type="text" class="form-control" placeholder="Phone Number">
</div>

<div class="mb-3">
<textarea class="form-control" rows="4" placeholder="Message"></textarea>
</div>

<button class="btn btn-primary w-100">Send Message</button>

</form>

</div>

</div>

</div>

</div>

</section>

<!-- GOOGLE MAP -->

<section class="section">

<div class="container">

<h2 class="text-center mb-4">Our Location</h2>

<iframe 
src="https://maps.google.com/maps?q=coimbatore&t=&z=13&ie=UTF8&iwloc=&output=embed"
width="100%" height="400" style="border:0;">
</iframe>

</div>

</section>

<?php include 'includes/footer.php'; ?>