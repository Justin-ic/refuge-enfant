

<!-- preloader -->
<div class="preloader" id="preloader">
    <div class="preloader-thumb">
        <img src="{{ asset('assets/images/propeller.png') }}" alt="image">
    </div>
</div>

<!-- header-section start -->
<header class="header-section">
    <div class="header-top d-none d-xl-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="header-wrapper">
                        <div class="header-info">
                            <div class="info-item">
                                <div class="info-thumb">
                                    <i class="flaticon-placeholder"></i>
                                </div>
                                <div class="info-content">
                                 <h6 class="title">localisation</h6>
                                 <span> Abidjan, <br>
                                 Bingerville Santai</span></div>
                            </div>
                            <div class="info-item">
                                <div class="info-thumb">
                                    <i class="flaticon-message"></i>
                                </div>
                                <div class="info-content">
                                    <h6 class="title">Email </h6>
                                    <span style="text-transform: none;">refugesdesenfantsong@gmail.com</span>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-thumb">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="info-content">
                                    <h6 class="title">Contacts&nbsp;</h6>
                                    <span>( +225 ) 01 02 31 99 32 <br>
                                    ( +225 ) 05 45 36 65 28</span>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="language-select-list d-flex flex-wrap"></div>
                </div>
            </div>
        </div>
    <div class="header-bottom">
      <div class="container">
        <div class="row align-items-center justify-content-between">
            <a class="site-logo site-title" href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="site-logo"></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <nav class="navbar navbar-expand-lg p-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav main-menu ml-auto">
                       <li class="menu_has_children"><a href="{{route('home')}}">Acceuil</a> </li>

                       <li class="menu_has_children"><a href="{{route('apropos')}}">A Propos De Nous<i class="fas fa-caret-down"></i></a>
                          <ul class="sub-menu">
                            <li><a href="{{route('trainer')}}">Notre Equipe </a></li>
                        </ul>
                    </li>
                    <li class="menu_has_children"><a href="{{route('gallery')}}">Nos Actions</a> </li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
                <div class="header-action d-flex flex-wrap align-items-center">
                    <a href="{{route('loginRegister')}} " class="cmn-btn">Faite Vos Dons </a>
                    {{-- <a href="{{route('loginRegister')}} " class="cmn-btn">Faite Vos Dons </a> --}}

                        {{-- <button type="button" class="cmn-btn" data-bs-toggle="modal" data-bs-target="#ajoutNiveauModal">
                            <i class="fas fa-plus "></i>
                            Ajouter Groupe
                        </button>faire_don 

                    <a href="qqq" class="cmn-btn text-white" data-bs-toggle="modal" data-bs-target="#faire_don">Faite Vos Dons </a>


                        --}}

                    </div>                    
                </div>
            </nav>
        </div>
    </div>
    </div>
{{-- 
<h1>Compte à rebours : <span id="timer">10</span> secondes</h1>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            const timerElement = document.getElementById('timer');
            let timeLeft = 10; // durée en secondes
            const interval = setInterval(() => {
                timeLeft- -;
                timerElement.textContent = timeLeft;

                if (timeLeft <= 0) {
                    clearInterval(interval);
                    checkUrlStatus();
                }
            }, 1000);

            function checkUrlStatus() {
                fetch('/check-url-status')
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 200) {
                            alert('Réponse reçue de l\'URL : ' + data.body);
                        } else {
                            alert('Erreur ou réponse non valide.');
                        }
                    })
                    .catch(() => {
                        alert('Erreur lors de la requête.');
                    });
            }
        });
    </script>

 --}}











</header>
<!-- header-section end -->
<a href="#" class="scrollToTop"><img src="{{ asset('assets/images/aeroplane.png') }}" alt="image"></a>
