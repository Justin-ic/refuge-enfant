@extends(' layouts.app')
 
@section('contenu')


    <!-- banner-section start -->    <!-- banner-section end -->


    <a href="#" class="scrollToTop"><img src="{{ asset('assets/images/aeroplane.png') }}" alt="image"></a>

     <!-- breadcrumb-section start -->
     <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home/dons</a></li>
                <li class="breadcrumb-item active" aria-current="page">en attente</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->


    <!-- register-section start -->
    <section class="register-section pt-5 pb-120 ">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">

                    @if ($status == 'success')
                        <div class="register-form-area account-area change-form color_success p-5">

                            <h3 style="text-transform: none;">Félicitaition !</h3>
                            <?=$name?>, votre don de <b><?=$montant?>F</b> a bien été initié. <br>
                            Merci de valider s'il vous plaît.<br>
                            <a href="{{route('home')}}"><button type="button"  hre style="width:200px"  class="btn btn-primary m-0 mt-5">Retour à l'accueil</button></a>
                        </div>
                    @else
                        <div class="register-form-area account-area change-form color_failed p-5">

                            <h3 style="text-transform: none;">Dédolé !</h3>
                            <?=$name?>, votre  transaction n'a pas abouti. <br>
                            Merci de contactez <span style="text-transform: none; display: inline; color: black;"><b>refugesdesenfantsong@gmail.com</b> pour plus d'informations. <br>
                            <a href="{{route('home')}}"><button type="button"  hre style="width:200px"  class="btn btn-primary m-0 mt-3">Retour à l'accueil</button></a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
    <!-- register-section end -->


@endsection
