<nav class="navbar navbar-expand-lg navbar-dark bg-info "  style="box-shadow:0px 3px 3px grey">
  <nav class="navbar navbar-dark bg-primary">
    <!-- Navbar content -->
  </nav>
    <div class="container">
    
  <a class="navbar-brand" href="/">
    <h4 style="font-weight:bold;">HOTLINE BENCANA ALAM</h4>
  </a> 
  
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"class="fw-bold">
        <span class="navbar-toggler-icon"></span>
        <p class="fw-bold"></p>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home Page") ? 'active' : '' }}" href="/">HOME</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "About Page") ? 'active' : '' }}" href="/about">ABOUT</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "News Page") ? 'active' : '' }}" href="/news">NEWS</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "Information Page") ? 'active' : '' }}" href="/information">INFORMATION</a>
          </li>
        </ul> 

        <nav class="navbar navbar-info bg-info">
        <div class="container-fluid">
          <a class="navbar-brand"></a>
          <form class="d-flex">
            <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
           
            <button type="button" class="btn btn-dark">Search</button>
            <nav class="navbar navbar-info bg-info">
        </div>
       </nav>
      <nav class="navbar navbar-info bg-info">
      <div class="navbar-nav ml-auto action-buttons">
          <a class="nav-link {{ ($title === "Login Page") ? 'active' : '' }}" href="/login">
            <button type="button" class="btn btn-warning rounded" style="font-weight:bold;color:white;border:1px black solid;box-shadow:0px 1px 1px black;text-shadow:0px 1px 1px grey">
              Login
            </button>
          </a>
          <a class="nav-link {{ ($title === "Register Page") ? 'active' : '' }}" href="/register">
          <button type="button" class="btn btn-warning rounded" style="font-weight:bold;color:white;border:1px black solid;box-shadow:0px 1px 1px black;text-shadow:0px 1px 1px grey">
              Register
          </button>
          </a>
      </div> 
      </nav>
      </div>
        
    </div>
    
  </nav>
