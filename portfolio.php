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

/* PROJECT CARD */

.project-card{
background:white;
border-radius:10px;
overflow:hidden;
transition:0.4s;
}

.project-card:hover{
transform:translateY(-10px);
box-shadow:0 20px 30px rgba(0,0,0,0.1);
}

.project-img{
width:100%;
height:200px;
object-fit:cover;
}

.project-content{
padding:20px;
}

</style>

<!-- HEADER -->

<section class="page-header">

<div class="container" data-aos="fade-up">

<h1>Our Projects</h1>

<p>ERP Implementations for Foundry Industries</p>

</div>

</section>

<!-- PROJECTS -->

<section class="section">

<div class="container">

<div class="row g-4">

<div class="col-md-4" data-aos="fade-up">

<div class="project-card">

<img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?w=800" class="project-img">

<div class="project-content">

<h5>Foundry ERP Implementation</h5>

<p>
Complete ERP solution for production, inventory and financial management.
</p>

</div>

</div>

</div>

<div class="col-md-4" data-aos="fade-up">

<div class="project-card">

<img src="https://images.unsplash.com/photo-1581091215367-59ab6c4d2e04?w=800" class="project-img">

<div class="project-content">

<h5>Production Tracking System</h5>

<p>
Real-time monitoring of furnace operations and casting production.
</p>

</div>

</div>

</div>

<div class="col-md-4" data-aos="fade-up">

<div class="project-card">

<img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=800" class="project-img">

<div class="project-content">

<h5>Inventory Management ERP</h5>

<p>
ERP system for managing raw materials, scrap and finished goods.
</p>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- PROJECT STATS -->

<section class="section bg-light highlight-section">

<div class="container text-center">

<h2 class="mb-5">Project Highlights</h2>

<div class="row">

<div class="col-md-3" data-aos="zoom-in">
<h2><span class="count" data-target="750">0</span>+</h2>
<p>Foundry Clients</p>
</div>

<div class="col-md-3" data-aos="zoom-in">
<h2><span class="count" data-target="21">0</span>+</h2>
<p>Years Experience</p>
</div>

<div class="col-md-3" data-aos="zoom-in">
<h2><span class="count" data-target="120">0</span>+</h2>
<p>ERP Modules Developed</p>
</div>

<div class="col-md-3" data-aos="zoom-in">
<h2><span class="count" data-target="100">0</span>%</h2>
<p>Client Satisfaction</p>
</div>

</div>

</div>

</section>

<?php include 'includes/footer.php'; ?>