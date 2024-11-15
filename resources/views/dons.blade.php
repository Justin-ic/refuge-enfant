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
                <li class="breadcrumb-item active" aria-current="page">Faire un don</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->
  @if (session('status')) 
  <div id="ul_alert_error" class="row d-flex justify-content-center align-items-center">
    <div class="col-8 d-flex justify-content-center align-items-center alert alert-danger">
     {{session('status')}}
     <script type="text/javascript">setTimeout(function() {
     document.getElementById('ul_alert_error').innerHTML = "";},8000);</script>
    </div>
  </div>
  @endif

    <!-- register-section start -->
    <section class="register-section pt-5 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="register-form-area account-area change-form">

                        <h3 style="text-transform: none;">Je fais un don de:</h3>
                        <form class="create-account-form">
                            <div class="form-group  mt-5">
                                <label>Votre ville:</label>
                                <input required autocomplete="" class="text-center"  id="city" name="city" type="text" placeholder="Ex: Abidjan">
                            </div>
                            <div class="form-group  mt-5">
                                <label>Montant:</label>
                                <input required class="text-center" style="font-size: 40px" id="montant" name="montant" type="text" placeholder="Montant">
                            </div>
                            <div class="form-group">
                                <button type="button" style="width:200px" onclick="faire_don()" class="btn btn-primary">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- register-section end -->

<script>
    document.getElementById('montant').addEventListener('input', function (e) {
        const formater = new Intl.NumberFormat('en');
        // Permettre uniquement des chiffres
        e.target.value = formater.format(e.target.value.replace(/[^0-9]/g, '')); 

    });

    function faire_don(){
        montant = document.getElementById('montant').value;
        city = document.getElementById('city').value;
        montant = montant.replace(/[^0-9]/g, '');
        email = "<?=$email?>";
        name = "<?=$name?>";
        agency_code = "<?=$data->agency_code?>";
        secure_code = "<?=$data->secure_code?>";
        domain_name = "<?=$data->domain_name?>";
        url_on_success = "<?=$data->url_on_success?>";
        url_on_failed = "<?=$data->url_on_failed?>";

        // alert("agency_code="+agency_code+"\nsecure_code="+secure_code+"\ndomain_name="+domain_name+"\nurl_on_success="+url_on_success+"\nurl_on_failed="+url_on_failed+"\ncity="+city+"\nmontant="+montant+"\nemail="+email+"\nname="+name);
        
        if (montant > 0) {
            calltouchpay(agency_code, secure_code, domain_name, url_on_success, url_on_failed, city, montant, email,name);
        } else {
            alert('Dédolé, le montant est nul !');
        }
    }
</script>

{{-- 0504421091 --}}
@endsection
