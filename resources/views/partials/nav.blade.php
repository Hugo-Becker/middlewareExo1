<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/articles">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/back">Back</a>
          </li>
          
         
          @if (Route::has('login'))
            
          @auth
          <li class="nav-item">

            <a  href="{{ url('/home') }}" class="nav-link ">Home</a>

          </li>
          @else

          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link ">Log in</a>

          </li class="nav-item">

              @if (Route::has('register'))

              <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link ">Register</a>

              </li>
              @endif
                @endauth
      
             @endif


        </ul>
      </div>
    </div>
    
       
    
  </nav>





