@extends(' layouts.app')
 
@section('contenu')
<style>
    #img {
        width: 300px;
    }

    .rotate {
        animation: infinite-rotation 2s linear infinite; /* Animation infinie */
    }

    @keyframes infinite-rotation {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }
    @keyframes infinite-rotation {from {transform: rotate(0deg);}to {transform: rotate(360deg);}}
</style>








    <!-- banner-section start -->    <!-- banner-section end -->


    <a href="#" class="scrollToTop"><img src="{{ asset('assets/images/aeroplane.png') }}" alt="image"></a>

     <!-- breadcrumb-section start -->
     <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home/dons</a></li>
                <li class="breadcrumb-item active" aria-current="page">Status</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->

{{--   @if (session('status')) 
  <div id="ul_alert_error" class="row d-flex justify-content-center align-items-center">
    <div class="col-8 d-flex justify-content-center align-items-center alert alert-danger">
     {{session('status')}}
     <script type="text/javascript">setTimeout(function() {
     document.getElementById('ul_alert_error').innerHTML = "";},8000);</script>
    </div>
  </div>
  @endif --}}


    <!-- register-section start -->
    <section class="register-section pt-5 pb-120 ">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">

                    <div style="display: none;" class="register-form-area account-area change-form color_success p-5" id="succeful">

                        <h3 id="etatPay" style="text-transform: none;">Felicitation !</h3>
                            <?=$name?>, votre don de <b><?=$montant?>F</b> a bien été reçu. <br><br>
                        ONG REFUGE DES ENFANTS vous remercie pour votre geste !<br>
                        
                        <img class="" style="width:60px" src="{{ asset('assets/images/propeller.png') }}" alt="image"><br>
                        <a href="{{route('home')}}"><button type="button"  hre style="width:200px"  class="btn btn-primary m-0 mt-3">Retour à l'accueil</button></a>
                    </div>

                    <div style="display: none;" class="register-form-area account-area change-form color_failed p-5" id="echec">

                        <h3 id="etatPay" style="text-transform: none;">Oups !</h3>
                            La transaction n'a pas été validée !<br>
                            <img class="" style="width:60px" src="{{ asset('assets/images/propeller.png') }}" alt="image"><br>
                            <a href="{{route('home')}}"><button type="button"  hre style="width:200px"  class="btn btn-primary m-0 mt-3">Retour à l'accueil</button></a>
                        

                    </div>

                    @if ($status == 'encours')
                        <div class="register-form-area account-area change-form color_enttente p-5" id="encours" >

                            <h3 id="etatPay" style="text-transform: none;">Encours...</h3>
                            <span id="etatPayText"></span>
                                <?=$name?>, votre don de <b><?=$montant?>F</b> a bien été initié. <br>
                            Merci de valider s'il vous plaît.<br>
                            
                            <img class="rotate" style="width:60px" src="{{ asset('assets/images/propeller.png') }}" alt="image"><br>
                        </div>
                    @else
                        <div class="register-form-area account-area change-form color_failed p-5" id="failed">

                            <h3 style="text-transform: none;">Dédolé !</h3>
                            <?=$name?>, votre  transaction n'a pas abouti. <br>
                            Merci de contactez <span style="text-transform: none; display: inline; color: black;"><b>refugesdesenfantsong@gmail.com</b> pour plus d'informations.

                            <a href="{{route('home')}}"><button type="button"  hre style="width:200px"  class="btn btn-primary m-0 mt-3">Retour à l'accueil</button></a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
    <!-- register-section end -->


<script> 

const checkInterval = 2000; // Intervalle de vérification en millisecondes (2 secondes)
            const maxDuration = 2.5 * 60 * 1000; // Durée maximale de 3 minutes en millisecondes
            let checking = true;
                console.log('OKOK');

            // Arrêter la vérification après 3 minutes
            setTimeout(() => {
                checking = false;
            }, maxDuration);

            function checkDbStatus() {
                if (!checking) return; // Arrête l'exécution si la durée maximale est atteinte


                    const xhr = new XMLHttpRequest();
                    xhr.open('GET', '/api/getPayement', true);
                    // xhr.open('GET', 'http://localhost/refuge-enfant/public/api/getPayement', true);
                    // Assure que les cookies (y compris le cookie de session) sont inclus dans la requête
                    xhr.withCredentials = true;
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            const data = JSON.parse(xhr.responseText);
                            console.log('Données reçues:', data);
                            if (data.status == 200) {
                                document.getElementById("succeful").style.display = "";
                                document.getElementById("encours").style.display = "none";
                                checking = false;
                            } else if(data.status == 420) {
                                document.getElementById("echec").style.display = "";
                                document.getElementById("encours").style.display = "none";
                                checking = false;
                            } else {
                                setTimeout(checkDbStatus, checkInterval); // Re-vérifie après l'intervalle
                            }
                        } else if (xhr.readyState === 4) {
                            console.error('Erreur de requête:', xhr.status);
                        }
                    };
                    xhr.send();
            }

            // checkDbStatus();
            // Démarrer la vérification après le chargement de la page et un délai de 2 secondes
            @if ($status == 'encours')
                setTimeout(checkDbStatus, 2000);
            @endif

    </script>


@endsection
