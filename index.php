<?php include 'includes/header.php'; ?>

<style>

html{
scroll-behavior:smooth;
}

body{
font-family:Segoe UI;
background:#f5f7fa;
}

/* HERO */

.hero{
background:linear-gradient(120deg,#0d6efd,#0a2540);
color:white;
padding:140px 0;
text-align:center;
}

.hero h1{
font-size:48px;
font-weight:700;
}

/* BUTTON */

.btn-main{
background:#ff6b00;
color:white;
padding:12px 30px;
border-radius:30px;
transition:0.3s;
}

.btn-main:hover{
background:#ff8c42;
transform:scale(1.05);
}

/* SECTION */

.section{
padding:90px 0;
}

/* CARD */

.card-box{
background:white;
padding:30px;
border-radius:10px;
transition:0.4s;
}

.card-box:hover{
transform: translateY(-12px) scale(1.02);
box-shadow:0 20px 30px rgba(0,0,0,0.1);
}

/* COUNTER */

.counter{
font-size:42px;
font-weight:bold;
color:#0d6efd;
}

/* FOOTER */

.footer{
background:#0a2540;
color:white;
padding:40px;
text-align:center;
}

</style>

</head>

<body>

<!-- HERO -->

<section class="hero">

<div class="container" data-aos="fade-up">

<h1>ERP Solutions for Foundry Industries</h1>

<p>Oracle SQL • Oracle Forms • Oracle Reports</p>

<a href="contact.php" class="btn-main">Request Demo</a>

</div>

</section>

<!-- ABOUT -->

<section class="section">

<div class="container">

<div class="row align-items-center">

<div class="col-md-6" data-aos="fade-right">

<h2>About Our Company</h2>

<p>

Master Software Solution Hitech Private Limited is a specialized ERP software company based in Coimbatore.  
Since 2005 we have been delivering ERP systems designed specifically for foundry industries.

</p>

</div>

<div class="col-md-6" data-aos="zoom-in">

<img src="https://images.unsplash.com/photo-1581091215367-59ab6c4d2e04?w=800" class="img-fluid rounded">

</div>

</div>

</div>

</section>

<!-- SERVICES -->

<section class="section bg-light">

<div class="container">

<h2 class="text-center mb-5">Foundry ERP Modules</h2>

<div class="row g-4">

<div class="col-md-4" data-aos="fade-up">

<div class="card-box">

<h5>Production Management</h5>

<p>Track furnace operations and casting production workflow.</p>

</div>

</div>

<div class="col-md-4" data-aos="fade-up">

<div class="card-box">

<h5>Inventory Management</h5>

<p>Manage raw materials, scrap and finished goods stock.</p>

</div>

</div>

<div class="col-md-4" data-aos="fade-up">

<div class="card-box">

<h5>Quality Control</h5>

<p>Casting inspection and defect analysis reports.</p>

</div>

</div>

</div>

</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
AOS.init();
</script>

<?php include 'includes/footer.php'; ?>