@include('header')
<main id="content">
<section class="position-relative">
<div class="pt-2 page-title bg-overlay bg-cover" style="background-image: url('{{asset('homeassets/images/bg-title-3.jpg')}}');">
<div class="container">
<nav aria-label="breadcrumb">
<ol class="breadcrumb text-light mb-0 p-0">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Agents</li>
</ol>
</nav>
<h1 class="fs-32 mb-0 text-white font-weight-500 text-center pt-10 pb-9 lh-17 mxw-478" data-animate="fadeInDown">Meet All Account Managers</h1>
</div>
</div>
<div class="bg-secondary">
<div class="container">
<div class="py-2">
<form class="d-none d-md-flex row no-gutters px-n1 flex-wrap align-items-end">
<div class="form-group py-1 col-md-2 px-1 mb-0">
<label for="language01" class="sr-only">Language</label>
<select class="form-control selectpicker" name="language" id="language01" title="Language" data-style="bg-white btn-lg rounded-lg">
<option>English</option>
<option>France</option>
</select>
</div>
<div class="form-group py-1 col-md-2 px-1 mb-0">
<label for="company" class="sr-only">Company</label>
<select class="form-control selectpicker" name="company" id="company" title="Company" data-style="bg-white btn-lg rounded-lg">
<option>Google</option>
<option>Facebook</option>
<option>Apple</option>
</select>
</div>
<div class="form-group py-1 col-md-2 px-1 mb-0">
<label for="region01" class="sr-only">Region</label>
<select class="form-control selectpicker" name="region" id="region01" title="Region" data-style="bg-white btn-lg rounded-lg">
<option>Austin</option>
<option>Boston</option>
<option>Chicago</option>
<option>Denver</option>
<option>Los Angeles</option>
<option>New York</option>
<option>San Francisco</option>
</select>
</div>
<div class="form-group py-1 col-md-4 px-1 mb-0">
<label for="search01" class="sr-only">Search</label>
<div class="input-group input-group-lg">
<div class="input-group-prepend mr-n1">
<span class="fs-18 input-group-text bg-white border-0"><i class="fal fa-search"></i></span>
</div>
<input type="text" id="search01" class="form-control border-0 bg-white shadow-none" placeholder="Search by agent???s name???" name="search">
</div>
</div>
<div class="col-md-2 py-1 px-1">
<button type="submit" class="btn btn-primary btn-lg btn-block">
Search
</button>
</div>
</form>
<form class="d-block d-md-none">
<div class="d-flex align-items-center">
<a class="text-white hover-primary d-inline-block fs-24 lh-1 mr-5" data-toggle="collapse" href="#collapseMobileSearch-01" role="button" aria-expanded="false" aria-controls="collapseMobileSearch-01">
<i class="fal fa-cog"></i>
</a>
<div class="form-group mb-0 w-100">
<label for="search03" class="sr-only">Search</label>
<div class="input-group input-group-lg">
<input type="text" id="search03" class="form-control border-0 bg-white shadow-none" placeholder="Search by agent???s name???" name="search">
<div class="input-group-append ml-n1">
<span class="fs-18 input-group-text bg-white border-0"><i class="fal fa-search"></i></span>
</div>
</div>
</div>
</div>
<div class="collapse" id="collapseMobileSearch-01">
<div class="card card-body border-0 pr-0 pl-8 bg-transparent">
<div class="form-group">
<label for="language02" class="sr-only">Language</label>
<select class="form-control selectpicker" name="language" id="language02" title="Language" data-style="bg-white btn-lg rounded-lg">
<option>English</option>
<option>France</option>
</select>
</div>
<div class="form-group">
<label for="company02" class="sr-only">Company</label>
<select class="form-control selectpicker" name="company" id="company02" title="Company" data-style="bg-white btn-lg rounded-lg">
<option>Google</option>
<option>Facebook</option>
<option>Apple</option>
</select>
</div>
<div class="form-group">
<label for="region03" class="sr-only">Region</label>
<select class="form-control selectpicker" name="region" id="region03" title="Region" data-style="bg-white btn-lg rounded-lg">
<option>Austin</option>
<option>Boston</option>
<option>Chicago</option>
<option>Denver</option>
<option>Los Angeles</option>
<option>New York</option>
<option>San Francisco</option>
</select>
</div>
<button type="submit" class="btn btn-primary btn-lg btn-block">
Search
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</section>
<section class="pt-8 pb-13 bg-gray-01">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="row align-items-sm-center mb-7">
<div class="col-sm-6 mb-6 mb-sm-0">
<h2 class="fs-15 text-dark mb-0">We found <span class="text-primary">45</span> agents available
for
you
</h2>
</div>
<div class="col-sm-6 ml-auto">
<div class="d-flex align-items-center justify-content-sm-end">
<div class="input-group border rounded input-group-lg w-auto mr-6">
<label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sort
by:</label>
<select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0" id="inputGroupSelect01" name="sortby">
<option selected>Alphabet</option>
<option value="1">Random</option>
<option value="1">Rating</option>
<option value="1">Number of property</option>
</select>
</div>
<div class="d-none d-md-block list-layout">
<a class="fs-sm-18 text-muted" href="agents-list.html">
<i class="fas fa-list"></i>
</a>
<span class="fs-sm-18 text-muted ml-5 active">
<i class="fa fa-th-large"></i>
</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-6">
<div class="card border-0 shadow-hover-3 px-6">
<div class="card-body text-center pt-6 pb-2 px-0">
<a href="agent-details-1.html" class="d-inline-block mb-2">
<img src="{{asset('homeassets/images/agent-1.jpg')}}" alt="Oliver Beddows">
</a>
<a href="agent-details-1.html" class="d-block fs-16 lh-214 text-dark mb-0 font-weight-500 hover-primary">Oliver Beddows</a>
<p class="mb-0">Sales Excutive</p>
<ul class="list-inline mb-0">
<li class="list-inline-item fs-13 text-heading font-weight-500">4.8/5
</li>
<li class="list-inline-item fs-13 text-heading font-weight-500 mr-1">
<ul class="list-inline mb-0">
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
</ul>
</li>
<li class="list-inline-item fs-13 text-gray-light">(67 reviews)</li>
</ul>
</div>
<div class="card-footer bg-white px-0 pt-1 pb-6">
<ul class="list-group list-group-no-border pb-1">
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Office</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Mobile</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Fax</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">1-323 900 6800</span>
</li>
<li class="list-group-item d-flex align-items-sm-center row m-0 px-0 pt-2 pb-0">
<span class="col-sm-4 p-0 fs-13 lh-114">Email</span>
<span class="col-sm-8 p-0">oliverbeddows@homeid.com</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Social</span>
<ul class="col-md-8 list-inline text-gray-lighter m-0 p-0 z-index-2">
<li class="list-inline-item m-0">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-twitter"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-facebook-f"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-instagram"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-linkedin-in"></i></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="col-md-6 mb-6">
<div class="card border-0 shadow-hover-3 px-6">
<div class="card-body text-center pt-6 pb-2 px-0">
<a href="agent-details-1.html" class="d-inline-block mb-2">
<img src="{{asset('homeassets/images/agent-30.jpg')}}" alt="Christopher Stevenson">
</a>
<a href="agent-details-1.html" class="d-block fs-16 lh-214 text-dark mb-0 font-weight-500 hover-primary">Christopher Stevenson</a>
<p class="mb-0">Sales Excutive</p>
<ul class="list-inline mb-0">
<li class="list-inline-item fs-13 text-heading font-weight-500">4.8/5
</li>
<li class="list-inline-item fs-13 text-heading font-weight-500 mr-1">
<ul class="list-inline mb-0">
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
</ul>
</li>
<li class="list-inline-item fs-13 text-gray-light">(67 reviews)</li>
</ul>
</div>
<div class="card-footer bg-white px-0 pt-1 pb-6">
<ul class="list-group list-group-no-border pb-1">
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Office</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Mobile</span>
 <span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Fax</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">1-323 900 6800</span>
</li>
<li class="list-group-item d-flex align-items-sm-center row m-0 px-0 pt-2 pb-0">
<span class="col-sm-4 p-0 fs-13 lh-114">Email</span>
<span class="col-sm-8 p-0">oliverbeddows@homeid.com</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Social</span>
<ul class="col-md-8 list-inline text-gray-lighter m-0 p-0 z-index-2">
<li class="list-inline-item m-0">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-twitter"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-facebook-f"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-instagram"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-linkedin-in"></i></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="col-md-6 mb-6">
<div class="card border-0 shadow-hover-3 px-6">
<div class="card-body text-center pt-6 pb-2 px-0">
<a href="agent-details-1.html" class="d-inline-block mb-2">
<img src="{{asset('homeassets/images/agent-31.jpg')}}" alt="Kenneth Floyd">
</a>
<a href="agent-details-1.html" class="d-block fs-16 lh-214 text-dark mb-0 font-weight-500 hover-primary">Kenneth Floyd</a>
<p class="mb-0">Sales Excutive</p>
<ul class="list-inline mb-0">
<li class="list-inline-item fs-13 text-heading font-weight-500">4.8/5
</li>
<li class="list-inline-item fs-13 text-heading font-weight-500 mr-1">
<ul class="list-inline mb-0">
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
 <li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
</ul>
</li>
<li class="list-inline-item fs-13 text-gray-light">(67 reviews)</li>
</ul>
</div>
<div class="card-footer bg-white px-0 pt-1 pb-6">
<ul class="list-group list-group-no-border pb-1">
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Office</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Mobile</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Fax</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">1-323 900 6800</span>
</li>
<li class="list-group-item d-flex align-items-sm-center row m-0 px-0 pt-2 pb-0">
<span class="col-sm-4 p-0 fs-13 lh-114">Email</span>
<span class="col-sm-8 p-0">oliverbeddows@homeid.com</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Social</span>
<ul class="col-md-8 list-inline text-gray-lighter m-0 p-0 z-index-2">
<li class="list-inline-item m-0">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-twitter"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-facebook-f"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-instagram"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-linkedin-in"></i></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="col-md-6 mb-6">
<div class="card border-0 shadow-hover-3 px-6">
<div class="card-body text-center pt-6 pb-2 px-0">
<a href="agent-details-1.html" class="d-inline-block mb-2">
<img src="{{asset('homeassets/images/agent-32.jpg')}}" alt="Landon Allison">
</a>
<a href="agent-details-1.html" class="d-block fs-16 lh-214 text-dark mb-0 font-weight-500 hover-primary">Landon Allison</a>
<p class="mb-0">Sales Excutive</p>
<ul class="list-inline mb-0">
<li class="list-inline-item fs-13 text-heading font-weight-500">4.8/5
</li>
<li class="list-inline-item fs-13 text-heading font-weight-500 mr-1">
<ul class="list-inline mb-0">
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
</ul>
</li>
<li class="list-inline-item fs-13 text-gray-light">(67 reviews)</li>
</ul>
</div>
<div class="card-footer bg-white px-0 pt-1 pb-6">
<ul class="list-group list-group-no-border pb-1">
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Office</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Mobile</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Fax</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">1-323 900 6800</span>
</li>
<li class="list-group-item d-flex align-items-sm-center row m-0 px-0 pt-2 pb-0">
<span class="col-sm-4 p-0 fs-13 lh-114">Email</span>
<span class="col-sm-8 p-0">oliverbeddows@homeid.com</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Social</span>
<ul class="col-md-8 list-inline text-gray-lighter m-0 p-0 z-index-2">
<li class="list-inline-item m-0">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-twitter"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-facebook-f"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-instagram"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-linkedin-in"></i></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="col-md-6 mb-6">
<div class="card border-0 shadow-hover-3 px-6">
<div class="card-body text-center pt-6 pb-2 px-0">
<a href="agent-details-1.html" class="d-inline-block mb-2">
<img src="{{asset('homeassets/images/agent-33.jpg')}}" alt="Irene Wallace">
</a>
<a href="agent-details-1.html" class="d-block fs-16 lh-214 text-dark mb-0 font-weight-500 hover-primary">Irene Wallace</a>
<p class="mb-0">Sales Excutive</p>
<ul class="list-inline mb-0">
<li class="list-inline-item fs-13 text-heading font-weight-500">4.8/5
</li>
<li class="list-inline-item fs-13 text-heading font-weight-500 mr-1">
<ul class="list-inline mb-0">
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
</ul>
</li>
<li class="list-inline-item fs-13 text-gray-light">(67 reviews)</li>
</ul>
</div>
<div class="card-footer bg-white px-0 pt-1 pb-6">
<ul class="list-group list-group-no-border pb-1">
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Office</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Mobile</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Fax</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">1-323 900 6800</span>
</li>
<li class="list-group-item d-flex align-items-sm-center row m-0 px-0 pt-2 pb-0">
<span class="col-sm-4 p-0 fs-13 lh-114">Email</span>
<span class="col-sm-8 p-0">oliverbeddows@homeid.com</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Social</span>
<ul class="col-md-8 list-inline text-gray-lighter m-0 p-0 z-index-2">
<li class="list-inline-item m-0">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-twitter"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-facebook-f"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-instagram"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-linkedin-in"></i></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="col-md-6 mb-6">
<div class="card border-0 shadow-hover-3 px-6">
<div class="card-body text-center pt-6 pb-2 px-0">
<a href="agent-details-1.html" class="d-inline-block mb-2">
<img src="{{asset('homeassets/images/agent-34.jpg')}}" alt="Tillie Clark">
</a>
<a href="agent-details-1.html" class="d-block fs-16 lh-214 text-dark mb-0 font-weight-500 hover-primary">Tillie Clark</a>
<p class="mb-0">Sales Excutive</p>
<ul class="list-inline mb-0">
<li class="list-inline-item fs-13 text-heading font-weight-500">4.8/5
</li>
<li class="list-inline-item fs-13 text-heading font-weight-500 mr-1">
<ul class="list-inline mb-0">
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
<li class="list-inline-item mr-0">
<span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
</li>
</ul>
</li>
<li class="list-inline-item fs-13 text-gray-light">(67 reviews)</li>
</ul>
</div>
<div class="card-footer bg-white px-0 pt-1 pb-6">
<ul class="list-group list-group-no-border pb-1">
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Office</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Mobile</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Fax</span>
<span class="col-sm-8 p-0 text-heading font-weight-500">1-323 900 6800</span>
</li>
<li class="list-group-item d-flex align-items-sm-center row m-0 px-0 pt-2 pb-0">
<span class="col-sm-4 p-0 fs-13 lh-114">Email</span>
<span class="col-sm-8 p-0">oliverbeddows@homeid.com</span>
</li>
<li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
<span class="col-sm-4 p-0 fs-13 mb-1 mb-sm-0">Social</span>
<ul class="col-md-8 list-inline text-gray-lighter m-0 p-0 z-index-2">
<li class="list-inline-item m-0">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-twitter"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-facebook-f"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-instagram"></i></a>
</li>
<li class="list-inline-item mr-0 ml-2">
<a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-linkedin-in"></i></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
<nav class="mt-4">
<ul class="pagination rounded-active justify-content-center">
<li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-double-left"></i></a>
</li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item active"><a class="page-link" href="#">2</a></li>
<li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
<li class="page-item">...</li>
<li class="page-item"><a class="page-link" href="#">6</a></li>
<li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-double-right"></i></a></li>
</ul>
</nav>
<div class="text-center mt-2">8-14 of 45 Results</div>
</div>
<div class="col-lg-4 primary-sidebar sidebar-sticky" id="sidebar">
<div class="primary-sidebar-inner">
<div class="card mb-4">
<div class="card-body px-6 pt-5 pb-6">
<h4 class="card-title fs-16 lh-2 text-dark mb-3">Search</h4>
<form>
<div class="form-group mb-2">
<select class="form-control border-0 shadow-none selectpicker" name="company" title="Company" data-style="btn-lg px-3">
<option>Google</option>
<option>Facebook</option>
</select>
</div>
<div class="form-row mb-2">
<div class="col-6 form-group">
<select class="form-control selectpicker border-0" name="language" title="Language" data-style="btn-lg rounded-lg px-3">
<option>English</option>
<option>France</option>
</select>
</div>
<div class="col-6 form-group">
<select class="form-control selectpicker border-0" name="region" title="Region" data-style="btn-lg rounded-lg px-3">
<option>Austin</option>
<option>Boston</option>
<option>Chicago</option>
<option>Denver</option>
<option>Los Angeles</option>
<option>New York</option>
 <option>San Francisco</option>
</select>
</div>
</div>
<div class="form-group mb-4">
<input type="text" class="form-control form-control-lg border-0" name="search" placeholder="Search by agent???s name...">
</div>
<button type="submit" class="btn btn-primary btn-lg btn-block">
Search
</button>
</form>
</div>
</div>
<div class="card mb-4">
<div class="card-body text-center pt-7 pb-6 px-0">
<img src="{{asset('homeassets/images/contact-widget.jpg')}}" alt="Want to become an Estate Agent ?">
<div class="text-dark mb-6 mt-n2 font-weight-500">Want to become an
<p class="mb-0 fs-18">Estate Agent?</p>
</div>
<a href="#" class="btn btn-primary">Register</a>
</div>
</div>
<div class="card property-widget mb-4">
<div class="card-body px-6 pt-5 pb-6">
<h4 class="card-title fs-16 lh-2 text-dark mb-3">Featured Properties</h4>
<div class="slick-slider mx-0" data-slick-options='{"slidesToShow": 1, "autoplay":true}'>
<div class="box px-0">
<div class="card border-0">
<img src="{{asset('homeassets/images/feature-property-01.jpg')}}" class="card-img" alt="Villa on Hollywood Boulevard">
<div class="card-img-overlay d-flex flex-column bg-gradient-3 rounded-lg">
<div class="d-flex mb-auto">
<a href="#" class="mr-1 badge badge-orange">featured</a>
<a href="#" class="badge badge-indigo">for Rent</a>
</div>
<div class="px-2 pb-2">
<a href="single-property-1.html" class="text-white"><h5 class="card-title fs-16 lh-2 mb-0">Villa on Hollywood
Boulevard</h5>
</a>
<p class="card-text text-gray-light mb-0 font-weight-500">1421 San
Predro
St, Los Angeles</p>
<p class="text-white mb-0"><span class="fs-17 font-weight-bold">$2500 </span>/month
</p>
</div>
</div>
</div>
</div>
<div class="box px-0">
<div class="card border-0">
<img src="{{asset('homeassets/images/feature-property-01.jpg')}}" class="card-img" alt="Villa on Hollywood Boulevard">
<div class="card-img-overlay d-flex flex-column bg-gradient-3 rounded-lg">
<div class="d-flex mb-auto">
<a href="#" class="mr-1 badge badge-orange">featured</a>
<a href="#" class="badge badge-indigo">for Rent</a>
</div>
<div class="px-2 pb-2">
<a href="single-property-1.html" class="text-white"><h5 class="card-title fs-16 lh-2 mb-0">Villa on Hollywood
Boulevard</h5>
</a>
<p class="card-text text-gray-light mb-0 font-weight-500">1421 San
Predro
St, Los Angeles</p>
<p class="text-white mb-0"><span class="fs-17 font-weight-bold">$2500 </span>/month
</p>
</div>
</div>
</div>
</div>
<div class="box px-0">
<div class="card border-0">
<img src="{{asset('homeassets/images/feature-property-01.jpg')}}" class="card-img" alt="Villa on Hollywood Boulevard">
<div class="card-img-overlay d-flex flex-column bg-gradient-3 rounded-lg">
<div class="d-flex mb-auto">
<a href="#" class="mr-1 badge badge-orange">featured</a>
<a href="#" class="badge badge-indigo">for Rent</a>
</div>
<div class="px-2 pb-2">
<a href="single-property-1.html" class="text-white"><h5 class="card-title fs-16 lh-2 mb-0">Villa on Hollywood
Boulevard</h5>
</a>
<p class="card-text text-gray-light mb-0 font-weight-500">1421 San
Predro
St, Los Angeles</p>
<p class="text-white mb-0"><span class="fs-17 font-weight-bold">$2500 </span>/month
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-body px-6 py-4">
<h4 class="card-title fs-16 lh-2 text-dark mb-3">Latest Posts</h4>
<ul class="list-group list-group-flush">
<li class="list-group-item px-0 pt-0 pb-3">
<div class="media">
<div class="position-relative mr-3">
<a href="blog-details-1.html" class="d-block w-100px rounded pt-11 bg-img-cover-center" style="background-image: url('images/post-02.jpg')">
</a>
<a href="blog-grid-with-sidebar.html" class="badge text-white bg-dark-opacity-04 m-1 fs-13 font-weight-500 bg-hover-primary hover-white position-absolute pos-fixed-top">
creative
</a>
</div>
<div class="media-body">
<h4 class="fs-14 lh-186 mb-1">
<a href="blog-details-1.html" class="text-dark hover-primary">
Retail banks wake up to digital lending this year
</a>
</h4>
<div class="text-gray-light">
Dec 16, 2018
</div>
</div>
</div>
</li>
<li class="list-group-item px-0 pt-2 pb-3">
<div class="media">
<div class="position-relative mr-3">
<a href="blog-details-1.html" class="d-block w-100px rounded pt-11 bg-img-cover-center" style="background-image: url('images/post-04.jpg')">
</a>
<a href="blog-grid-with-sidebar.html" class="badge text-white bg-dark-opacity-04 m-1 fs-13 font-weight-500 bg-hover-primary hover-white position-absolute pos-fixed-top">
rental
</a>
</div>
<div class="media-body">
<h4 class="fs-14 lh-186 mb-1">
<a href="blog-details-1.html" class="text-dark hover-primary">
Within the construction industry as their overdraft
</a>
</h4>
<div class="text-gray-light">
Dec 16, 2018
</div>
</div>
</div>
</li>
<li class="list-group-item px-0 pt-2">
<div class="media">
<div class="position-relative mr-3">
<a href="blog-details-1.html" class="d-block w-100px rounded pt-11 bg-img-cover-center" style="background-image: url('images/post-07.jpg')">
</a>
<a href="blog-grid-with-sidebar.html" class="badge text-white bg-dark-opacity-04 m-1 fs-13 font-weight-500 bg-hover-primary hover-white position-absolute pos-fixed-top">
rental
</a>
</div>
<div class="media-body">
<h4 class="fs-14 lh-186 mb-1">
<a href="blog-details-1.html" class="text-dark hover-primary">
Future Office Buildings: Intelligent by Design
</a>
</h4>
<div class="text-gray-light">
Dec 16, 2018
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
@include('footer')
