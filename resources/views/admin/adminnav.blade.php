<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<style>
  @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
    font-family: 'Poppins', sans-serif;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

#sidebar {
    /* don't forget to add all the previously mentioned styles here too */
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: #7386D5;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}
ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

</style>
<div class="blog_left_sidebar">
  <aside class="single_sidebar_widget post_category_widget">
    <div class="wrapper">
      <!-- Sidebar -->
      <nav id="sidebar">
          <div class="sidebar-header">
              <h3>Admin</h3>
          </div>
  
          <ul class="list-unstyled components">
              <li>
                  <a href="/admin">Home</a>
              </li>
              <li>
                  <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                  <ul class="collapse list-unstyled" id="pageSubmenu">
                      <li>
                          <a href="/postjob">Post Job</a>
                      </li>
                      <li>
                          <a href="/admin/joblist">Job List</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="/admin/profile">Manager Profile</a>
              </li>
              <li>
                  {{-- <a href="#">Contact</a> --}}
              </li>
          </ul>
      </nav>
  
  </div>
  </aside>
</div>