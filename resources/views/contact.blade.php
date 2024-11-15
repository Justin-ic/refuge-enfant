@extends(' layouts.app')
 
@section('contenu')

{{-- @endsection --}}

    <!-- banner-section start -->    <!-- banner-section end -->

     <!-- breadcrumb-section start -->
     <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Acceuil</a></li>                
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->


    <!-- contact-section start -->
    <section class="contact-section pt-120 pb-120">
        <div class="container">
            <div class="account-wrapper">
                <div class="login-area account-area change-form">
                    <div class="row m-0">
                        <div class="col-lg-5 p-0">
                            <div class="change-catagory-area">
                                <h3 class="title">Envoyez un&nbsp; Messages</h3>
                                <form class="contact-form" id="contact_form_submit">
                                    <div class="form-group">
                                        <input type="text" id="name" name="text" placeholder="NOM">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" placeholder="EMAIL">
                                    </div>
									<div class="form-group">
                                        <input type="email" id="numero" name="numero" placeholder="NUMERO">
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Message" id="message" cols="30" rows="2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="cmn-btn.active" value="ENVOYER">

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 p-0">
                            <div class="common-form-style bg-one create-account">
                              <h3 class="title">contact</h3>
<ul class="account-item">
                  <li>
	
	</li>
                                  <li>Email : refugesdesenfantsong @ gmail.com</li>
                                  
                                  <li>( +225 ) 0 102 319 932&nbsp; &nbsp; &nbsp; &nbsp; ( +225 ) 0 787 785 724</li>
                                <li>www.ongrefugedesenfants.org</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                
                <li>&nbsp;</li>
</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

@endsection
