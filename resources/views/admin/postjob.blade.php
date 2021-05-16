<!doctype html>
<html lang="zxx">

<head>
<meta charset="utf-8">
<meta name="author" content="">
<meta name="description" content="">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Jobz-post-job</title>

<script src="js/4n2NXumNjtg5LPp6VXLlDicTUfA.js"></script><link rel="apple-touch-icon" href="{{asset('adminform/images/apple-touch-icon.html')}}">
<link rel="shortcut icon" type="image/ico" href="{{asset('adminform/images/favicon.html')}}" />

<link rel="stylesheet" href="{{asset('adminform/css/bootstrap.min.css')}}">

<link href="{{asset('adminform/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

<link href="{{asset('adminform/css/matrialize.css')}}" rel="stylesheet">

<link href="{{asset('adminform/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{asset('adminform/css/jquery-ui.min.css')}}">

<link rel="stylesheet" href="{{asset('adminform/css/style.css')}}">
</head>
<body class="background-color-white">

<header class="header">

<div class="top_bar background-color-orange">
<div class="top_bar_container">
<div class="container">
<div class="row">
<div class="col">
<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
<ul class="top_bar_contact_list">
<li>
<i class="fa fa-phone coll" aria-hidden="true"></i>
<div class="contact-no">0123 4567 8912</div>
</li>
<li>
<i class="fa fa-envelope coll" aria-hidden="true"></i>
<div class="email"><a href="https://demo.technosarjan.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a7f627b776a767f5a7075786e7f747e34797577">[email&#160;protected]</a></div>
</li>
</ul>
<div class=" ml-auto ">
<div class="search_button search"><i class="large material-icons search-icone">search</i></div>
<div class="hamburger menu_mm  search_button transparent search display"><i class="large material-icons font-color-white  search-icone  menu_mm ">menu</i></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="header_container background-color-orange-light">
<div class="container">
<div class="row">
<div class="col">
<div class="header_content d-flex flex-row align-items-center justify-content-start">
<div class="logo_container">
<a href="index.html">
<img src="imags/logo.png" class="logo-text" alt="">
</a>
</div>
<nav class="main_nav_contaner ml-auto">
<ul class="main_nav">
<li class="dropdown ">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Home
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="index.html">Home variation 1</a></li>
 <li><a href="index2.html">Home variation 2</a></li>
</ul>
</li>
<li class="dropdown ">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Job
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="job_category.html">Job List</a></li>
<li><a href="job_detail.html">Job Detail</a></li>
</ul>
</li>
<li><a href="blog_page.html"> Blog</a></li>
<li><a href="about_us.html">About</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
<div class=" Post-Jobs">
<a href="post_job.html" class="">
Post Jobs
</a>
</div>
<div class="hamburger menu_mm menu-vertical">
<i class="large material-icons font-color-white menu_mm menu-vertical">menu</i>
</div>
</nav>
</div>
</div>
</div>
</div>
</div>

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
<div class="menu_close_container">
<div class="menu_close">
<div></div>
<div></div>
</div>
</div>
<div class="search">
<form action="#" class="header_search_form menu_mm">
<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
<i class="fa fa-search menu_mm " aria-hidden="true"></i>
</button>
</form>
</div>
<nav class="menu_nav">
<ul class="menu_mm">
<li class="dropdown menu_mm">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Home
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="index.html">Home 1</a></li>
<li><a href="index2.html">Home 2</a></li>
</ul>
</li>
<li class="dropdown menu_mm">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Job
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="job_category.html">Job List</a></li>
<li><a href="job_detail.html">Job Detail</a></li>
</ul>
</li>
<li class="menu_mm"><a href="blog_page.html">Blog</a></li>
<li class="menu_mm"><a href="about-us.html">About</a></li>
<li class="menu_mm"><a href="contact.html">Contact</a></li>
</ul>
</nav>
</div>
</header>


<section id="post_job">
    <div class="vertical-space-100"></div>
    <div class="vertical-space-101"></div>
        <div class="container">
            <div class="list-box">
                <a href="#" class="font-color-black margin-right">Job </a> > <a href="#" class="font-color-orange margin-left"> Post job</a>
        </div>
        <a href="#" class="Save">Save</a>
        <div class="vertical-space-60">
            
        </div>
<div class="job-post-box">
            <form method="post" action="{{route('postjob')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <label for="exampleInputJobtitle">Job Position</label>
                        <input type="text" name="position" class="form-control" placeholder="Enter your job position" required />
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="exampleInputJobtitle">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Address" required />
                    </div>
                </div>
                
            </div>
            <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputCompany">Application Email</label>
                            <input type="email" name="application_email" class="form-control" id="exampleInputCompany" placeholder="Email" required />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group ">
                            <label for="sel1">Country</label>
                            <select  class="form-control" name="province">
                            @foreach ($province as $location )
                            <option value="{{$location->id}}">{{$location->name}}</option>
                            @endforeach
                            </select>
                        </div>                  
                 </div>
                    
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <label for="sel1">Company:</label>
                        <select class="form-control" name="company">
                            @foreach ($companies as $company )
                            <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach      
                        </select>
                    </div>                  
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <label for="sel1">Career:</label>
                        <select class="form-control" name="career">
                            @foreach ($careers as $career )
                            <option value="{{$career->id}}">{{$career->name}}</option>
                            @endforeach                   
                        </select>
                    </div>                  
    </div>
            </div>
            <div class="row">
                    <div class="col-lg-6 col-md-6">
                                <div class="form-group ">
                                    <label>Company Logo</label>
                                    <div class="box text-center">
                                        <label for="img">Select image:</label>
                                        <input type="file" id="img" name="image" accept="image/*">
                                    </div>
                                </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputLoction">Details</label>
                            <textarea name="details" class="form-control small" id="exampleInputShortDescription" placeholder="Write short description" rows="3" required></textarea>
                        </div>
                    </div>
            </div>

            <div class="form-group">
                <label for="exampleInputShortDescription">Amount</label>
                <input type="number" name="amount" />
            </div>
            <div class="form-group">
                <label for="exampleInputLongDescription">Experiences</label>
                 <input type="number" name="experience" />
            </div>
            <div class="row">
                    <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="sel1">Job Type:</label>
                                        <select class="form-control" name="jobtype_list">
                                        <option value="FullTime">FullTime</option>
                                        <option value="PartTime">PartTime</option>
                                        <option value="Remote">Remote</option>
                                        <option value="FreeLancer">FreeLancer</option>
                                        </select>
                                    </div>                  
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <input class="form-control" name="work_time" type="number" value="" placeholder="Time to Work" id="example-number-input">
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <input class="form-control" name="due_to_apply" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                     </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="form-group">
                    <label for="sel1">Salary Min:</label>
                    <select class="form-control" name="salary_min">
                    <option value="0">0</option>
                    <option value="500">500</option>
                    <option value="1000">1000</option>
                    <option value="2500">2500</option>
                    </select>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="form-group">
                    <label for="sel1">Salary Max:</label>
                    <select class="form-control" name="salary_max">
                    <option value="1000">1000</option>
                    <option value="3000">3000</option>
                    <option value="3500">3500</option>
                    <option value="4000">4000</option>
                    </select>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12">
                    <div class="form-group">
                    <label for="sel1">Salary Unit:</label>
                    <select class="form-control" name="salary_unit">
                    <option value="VND">VND</option>
                    <option value="$">$</option>
                    <option value="¥">¥</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputLoction">Requirement</label>
                        <textarea name="requirements" class="form-control small" placeholder="" rows="3" required></textarea>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputLoction">Education</label>
                        <textarea name="education" class="form-control small" placeholder="" rows="3" required></textarea>
                    </div>
                </div>
            </div>
                    <button type="submit" class="btn Post-Job-Offer">Post Job Offer</button>
            </form>
            </div>
            </div>
            </section>


            <footer id="footer" class="background-color-white">
            <div class="container">
            <div class="vertical-space-100"></div>
            <div class="row">
            <div class="col-lg-4 col-md-6 vertical-space-2">
            <h5>About Us</h5>
            <p class="paregraf">Tristique velit phasellus sed auctor leo eros luctus nibh fermentu ad impediet rhonus dolor habitant purus velit aliquet donecurna ut in turpis faucibus</p>
            <a href="#">
            <i class="fa fa-facebook social-icon"></i></a>
            <a href="#">
            <i class="fa fa-twitter social-icon"></i></a>
            <a href="#">
            <i class="fa fa-pinterest-p social-icon"></i></a>
            <a href="#">
            <i class="fa fa-map-marker social-icon"></i></a>
            </div>
            <div class="col-lg-2 col-md-6 vertical-space-2">
            <h5>Company</h5>
            <div class="text">
            <a href="#">About</a>
            <a href="#">Support</a>
            <a href="#">Tems</a>
            <a href="#">Privacy</a>
            </div>
            </div>
            <div class="col-lg-2 col-md-6 vertical-space-2">
            <h5>Supports</h5>
            <div class="text">
            <a href="#">About</a>
            <a href="#">Support</a>
            <a href="#">Tems</a>
            <a href="#">Privacy</a>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 vertical-space-2">
            <h5>Subscribe Us</h5>
            <p>Get latest update and newsletter</p>
            <div class="vertical-space-30"></div>
            <form>
            <input type="email" class="email " placeholder="Email Address " required="">
            <span class="fa fa-envelope email-icone "></span>
            <input type="submit" class="Subscribe" value="Subscribe">
            </form>
            </div>
            </div>
            <div class="vertical-space-60"></div>
            </div>
            <div class="container-fluid background-color-orange main-footer">
            <div class="container text-center">
            <div class="vertical-space-30"></div>
            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
            </div>
            </div>
</footer>


<script data-cfasync="false" src="{{asset('adminform/js/email-decode.min.js')}}"></script><script src="{{asset('adminform/js/jquery.min.js')}}"></script>
<script src="{{asset('adminform/js/bootstrap.min.js')}}"></script>
<script src="{{asset('adminform/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('adminform/js/jquery-ui.min.js')}}"></script>

<script src="js/custom.js"></script>
<script>
        (function(e, t, n) {
            var r = e.querySelectorAll("html")[0];
            r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2");
        })(document, window, 0);
    </script>
</body>

</html>