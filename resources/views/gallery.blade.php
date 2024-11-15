@extends(' layouts.app')
 
@section('contenu')

{{-- @endsection --}}
    <!-- banner-section start -->    <!-- banner-section end -->


    <a href="#" class="scrollToTop"><img src="assets/images/aeroplane.png" alt="image"></a>

     <!-- breadcrumb-section start -->
     <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nos Actions</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->


    <!-- portfolio-section start -->
    <div class="portfolio-section pt-120 pb-120">
        <div class="container">
              <div class="button-group filter-btn-group">
                    <button class="active" data-filter="*">Tous</button>
                    <button data-filter=".desigen">Education et formation</button>
                    <button data-filter=".marketing">Assistance alimentaire aux familles</button>
                    <button data-filter=".analysis">Protection Enfants</button>
                    <button data-filter=".research">Loisir</button>
		            <button data-filter=".seminaire">Seminaire</button>
                </div>
                <div class="grid">
									
					
					<div class="grid-item desigen">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-70.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-70.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-70.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item desigen">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-71.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-71.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-71.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item desigen">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-72.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-72.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-72.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
															
					<div class="grid-item desigen">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-74.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-74.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-74.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
										
					<div class="grid-item desigen">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-76.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-76.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-76.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item desigen">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-77.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-77.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-77.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>			
				
						<div class="grid-item desigen">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-78.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-78.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-78.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>			
					
					
						<div class="grid-item desigen">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-79.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-79.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-79.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>			
				
					
						<div class="grid-item desigen">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-80.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-80.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-80.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>			
				
				
													
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-50.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-50.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-50.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-51.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-51.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-51.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-52.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-52.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-52.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>					
							
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-54.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-54.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-54.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-55.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-55.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-55.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-111.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-111.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-111.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-112.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-112.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-112.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-113.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-113.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-113.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-114.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-114.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-114.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-115.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-115.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-115.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-116.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-116.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-116.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-117.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-117.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-117.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-118.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-118.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-118.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-119.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-119.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-119.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-120.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-120.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-120.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-121.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-121.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-121.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-122.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-122.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-122.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-123.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-123.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-123.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-124.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-124.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-124.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-125.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-125.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-125.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-126.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-126.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-126.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
					<div class="grid-item marketing ">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-127.png" alt="Assistance Au Famille">
                            <div class="hover">
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-127.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Assistance Au Famille" href="assets/images/portfolio-127.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>	
					
										
					 <div class="grid-item analysis">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-130.png" alt="Protection Des Enfants">
                            <div class="hover">
                                <a class="image-popup" title="Protection Des Enfants" href="assets/images/portfolio-130.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Protection Des Enfants" href="assets/images/portfolio-130.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					 <div class="grid-item analysis">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-131.png" alt="Protection Des Enfants">
                            <div class="hover">
                                <a class="image-popup" title="Protection Des Enfants" href="assets/images/portfolio-131.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Protection Des Enfants" href="assets/images/portfolio-131.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					  <div class="grid-item analysis">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-132.png" alt="Protection Des Enfants">
                            <div class="hover">
                                <a class="image-popup" title="Protection Des Enfants" href="assets/images/portfolio-132.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Protection Des Enfants" href="assets/images/portfolio-132.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					 <div class="grid-item analysis">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-133.png" alt="Protection Des Enfants">
                            <div class="hover">
                                <a class="image-popup" title="Protection Des Enfants" href="assets/images/portfolio-133.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Protection Des Enfants" href="assets/images/portfolio-133.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					 <div class="grid-item analysis">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-134.png" alt="Protection Des Enfants">
                            <div class="hover">
                                <a class="image-popup" title="Protection Des Enfants" href="assets/images/portfolio-134.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="Protection Des Enfants" href="assets/images/portfolio-134.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
									
					
                    <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-30.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-30.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-30.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
					  <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-31.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-31.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-31.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
					  <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-32.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-32.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-32.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
					  <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-33.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-33.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-33.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
					  <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-34.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-34.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-34.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
					  <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-35.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-35.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-35.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
					
					  <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-36.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-36.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-36.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
					  <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-37.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-37.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-37.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
					  <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-40.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-40.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-40.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
					  <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-41.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-41.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-41.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
					  <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-42.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-42.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-42.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
					  <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-43.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-43.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-43.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
					  <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-44.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-44.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-44.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
					  <div class="grid-item research">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-45.png" alt="portfolio image">
                            <div class="hover">
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-45.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="portfolio image" href="assets/images/portfolio-45.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>		
					
                    <div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-90.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-90.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-90.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-21.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-21.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-21.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-22.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-22.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-22.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-23.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-23.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-23.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-24.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-24.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-24.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-25.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIREe" href="assets/images/portfolio-25.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-25.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-26.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-26.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-26.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-91.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-91.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-91.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					 
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-92.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-92.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-92.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-93.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-93.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-93.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-94.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-94.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-94.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-95.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-95.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-95.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-96.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-96.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-96.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-97.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-97.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-97.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-98.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-98.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-98.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-99.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-99.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-99.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-100.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-100.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-100.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-101.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-101.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-101.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
					<div class="grid-item seminaire">
                        <div class="posrt-thumb">
                            <img src="assets/images/portfolio-102.png" alt="SEMINAIRE">
                            <div class="hover">
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-102.png"><i class="fas fa-search"></i></a>
                                <a class="image-popup" title="SEMINAIRE" href="assets/images/portfolio-102.png"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
					
                </div>
            </div>
</div>
    </div>
    <!-- portfolio-section end -->


    
    
    <section class="contact-us-area pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <div class="contact-us-content">
              <h2 class="title">ONG REFUGE DES ENFANTS<br>
                LUTTE CONTRE LA PAUVRETE</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact-us-area end -->


@endsection