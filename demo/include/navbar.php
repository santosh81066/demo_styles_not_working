<div class="container-fluid bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent menu">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item active">
                    <a class="nav-link <?php if($page=='Home'){echo 'active';}?>" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='About Us'){echo 'active';}?>" href="#">About Us</a>
                </li>
                <li class="nav-item <?php if($page=='Services'){echo 'active';}?>">
                    <a class="nav-link" href="#" role="button"  aria-haspopup="true" aria-expanded="false">
          Services
        </a>
                </li>
                <li class="nav-item <?php if($page=='protfolio'){echo 'active';}?>">
                    <a class="nav-link" href="#">Protfolio</a>
                </li>
                <li class="nav-item <?php if($page=='Contact Us'){echo 'active';}?>">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>

        </div>
    </nav>
</div>