<nav class="navbar navbar-expand-lg navbar-dark bg-info ">
  <nav class="navbar navbar-dark bg-primary">
    <!-- Navbar content -->
  </nav>
    <div class="container">
    
  <a class="navbar-brand" href="/">| Hotline Bencana Alam | </a> 
  
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"class="fw-bold">
        <span class="navbar-toggler-icon"></span>
        <p class="fw-bold"></p>

</button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
  </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "About Us") ? 'active' : '' }}" href="/About Us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Daftar") ? 'active' : '' }}" href="/Daftar">Daftar</a>
          </li>
         
      </div>
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
        <form class="container-fluid justify-content-start">
          <button type="button" class="btn btn-warning">Log in</button>
        </nav>
        <a class="nav-link {{ ($title === "Log in") ? 'active' : '' }}" href="/Log in"></a>
        </form>
        
      
    </div>
    
  </nav>
