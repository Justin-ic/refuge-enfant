@extends(' layouts.app')
 
@section('contenu')


    <!-- banner-section start -->    <!-- banner-section end -->


     <!-- breadcrumb-section start -->
     <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Account</li>
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
                        <a href="#0" class="cmn-btn-active account-control-button">Login</a>
                        <a href="#0" class="cmn-btn account-control-button ml-3">Registration</a>
                        <h3 class="title">well come to Flio</h3>
                        <p>Maecenas mollis dictum aliquam Velit sapien  </p>
                        <form class="create-account-form" method="POST" action="{{route('store')}}">
                            @csrf
                            <div class="form-group">
                                <input required name="nom" type="text" placeholder="Nom">
                            </div>
                            <div class="form-group">
                                <input required name="prenom" type="text" placeholder="Prénom">
                            </div>
                            <div class="form-group">
                                <input required name="email" type="text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input required name="passe" type="password" id="myInput" placeholder="Mot de passe">
                                <a href="#0" id="show-pass-one" class="show-pass"><i class="fas fa-eye"></i></a>
                            </div>
                            <div class="form-group">
                                <input required name="passConfirme" type="password" id="myInputTwo" placeholder="Confirmez le mot de passe">
                                <a href="#0" id="show-pass-two" class="show-pass"><i class="fas fa-eye"></i></a>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-wrapper d-flex align-items-center">
                                    <div class="checkbox-item " >
                                        <input type="checkbox" style="width:20px; margin:5px;" id="c1" name="remember">
                                        <label for="c1"> I Wish To Receieve All News & Update?</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Créer mon compte">
                            </div>
                        </form>
                        <ul class="sign-up-option justify-content-center">
                            <li>
                                <a href="{{route('socialite_redirect',['google'])}} " class="facebook">
                                    <img src="{{ asset('assets/images/google.png') }}" alt="google" style="height: 30px; border-radius: 10px solide white;"> OOGLE</a>
                                </li>
                            </ul>
                        <ul class="sign-up-option justify-content-center">
                            <li>
                                <a href="#0" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                            </li>
                        </ul>
                    </div>
                    <div class="login-form-area account-area">
                        <a href="#0" class="cmn-btn account-control-button">Login</a>
                        <a href="#0" class="cmn-btn-active account-control-button ml-3">Registration</a>
                        <h3 class="title">well come to Flio</h3>
                        <p>Maecenas mollis dictum aliquam Velit sapien  </p>
                        <form class="create-account-form" method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" placeholder="User Email" name="UserEmail">
                            </div>
                            <div class="form-group">
                                <input type="password" id="myInputTwo" placeholder="Password" name="Password">
                                <a href="#0" id="show-pass-two" class="show-pass"><i class="fas fa-eye"></i></a>
                            </div>
                            <ul class="lost-pass">
                                <li>
                                    <a href="#0">Forget Password?</a>
                                </li>
                                <li>
                                    <div class="form-group form-group--style">
                                        <input type="submit" value="Login">
                                    </div>
                                </li>
                            </ul>
                        </form>
                        <ul class="sign-up-option justify-content-center">
                            <li>
                                <a href="#0" class="google"><i class="fab fa-google"></i> google</a>
                            </li>
                            <li>
                                <a href="#0" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#0" class="twitter"><i class="fab fa-twitter"></i>Twitter</a>
                            </li>
                        </ul>
                        <div class="terms-area">
                            <p class="terms-and-conditions"><a href="#0">Tream & Condition & Privacy?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- register-section end -->

@endsection


