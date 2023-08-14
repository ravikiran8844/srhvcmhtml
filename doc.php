<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name') }} - Doctors</title>
  @include('header')
  <script>
	// $("#myTab1").on('click', 'li', function () {
		// var liId = $(this).closest('li').prop('id');
		// alert(liId);
	// });
	function my_val() {
		//var liId = $('#mytab1').closest('li').prop('id');
		var liId = $('#specialitying').val();
		console.log(liId);
	}
</script>
<style>
	.hp_uppercase{
		text-transform:capitalize; 
		/* uppercase */
	}
	
</style>
</head>

<body>                                                                                               
	<section class="inner-headerimg">                                                                  
		<div class="custom-container pad-30">                                                          
			<div class="back-page">                                                
				<a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.10296 9.99994L14.3799 16.0773L13.1627 17.2559L5.66856 9.99994L13.1627 2.74401L14.3799 3.92252L8.10296 9.99994Z" fill="#6A3E98"/>
</svg></a>                                                              
			</div>                                                             
			<div class="main-heading">Choose a Doctor</div>
		</div>
	</section>                                 
	<section class="categories-tabslider">
	<div class="custom-container pad-30">
	<div class="search-field pad-30">
		<form>
		<div class="input-group mb-3">   
			<span class="srchicn"><i class="fa fa-search"></i></span> 
			<input type="text" class="form-control srchfld" placeholder="Search Doctor’s name / Specialities"> 
		</div>  
		</form>
	</div>
	<div class="cathead">
		<div class="main-heading">Categories</div>
	</div>
    <ul class="nav nav-tabs pad-30">
        <div class="owl_1 owl-carousel owl-theme">
            <div class="item">
                <li class="active catgry d-flex justify-content-center align-items-center  w-95 p-3 mx-3"><a class="text-decoration-none" data-toggle="tab" href="#home">
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6489 4.32605L10.7039 4.08605C10.8089 3.64005 10.9809 2.98405 11.3359 2.33805C11.6979 1.68005 12.2589 1.01305 13.1389 0.574053C14.0159 0.137053 15.1149 -0.0259467 16.4739 0.154053C17.9739 0.354053 20.9869 0.850053 23.6489 2.20405C26.3259 3.56605 28.8339 5.90905 28.8339 9.81105C28.8339 11.8271 28.0539 13.9901 27.2979 15.4001C26.9349 16.0781 26.5039 16.7261 26.0719 17.0751C25.9729 17.1551 25.8319 17.2551 25.6569 17.3251C25.1768 18.9026 24.2213 20.2934 22.9208 21.3073C21.6204 22.3212 20.0385 22.9087 18.3915 22.9894C16.7445 23.0702 15.1128 22.6403 13.7194 21.7585C12.326 20.8767 11.2389 19.5861 10.6069 18.0631L10.5829 18.0671L10.2279 17.6361L10.9999 17.0001L10.2279 17.6361L10.2269 17.6341L10.2249 17.6321L10.2199 17.6251L10.2029 17.6051C10.1173 17.4985 10.0349 17.3895 9.95586 17.2781C9.73993 16.9786 9.53642 16.6703 9.34586 16.3541C8.87586 15.5761 8.30886 14.4681 7.94586 13.1751C7.58386 11.8821 7.41786 10.3661 7.79786 8.80205C8.16786 7.28005 9.04086 5.78205 10.6219 4.44405L10.6489 4.32605ZM12.3289 16.9641C12.7626 18.2113 13.5954 19.2807 14.6984 20.0067C15.8014 20.7327 17.1131 21.0748 18.4301 20.9799C19.7472 20.885 20.9963 20.3585 21.9838 19.4819C22.9714 18.6053 23.6424 17.4276 23.8929 16.1311L24.0059 16.1691C24.0019 16.1125 23.9999 16.0558 23.9999 15.9991C23.9999 14.3441 23.7699 13.1891 23.5559 12.4691C23.5141 12.3289 23.4677 12.1902 23.4169 12.0531L23.3759 12.0551H23.3359C22.5881 12.0712 21.8406 12.0143 21.1039 11.8851C19.3869 11.5951 17.0619 10.8711 14.3239 9.19405C14.2639 9.32805 14.2039 9.47905 14.1439 9.64705C13.9479 10.2021 13.7869 10.8611 13.6479 11.5571C13.5249 12.1701 13.4239 12.7871 13.3279 13.3651L13.2909 13.5931C13.1879 14.2131 13.0849 14.8221 12.9649 15.2631C12.7549 16.0291 12.5409 16.5731 12.3289 16.9631V16.9641ZM10.9289 15.1011C10.4772 14.3258 10.1225 13.4979 9.87286 12.6361C9.57386 11.5701 9.46386 10.4161 9.74186 9.27505C10.0119 8.16505 10.6649 6.99805 12.0079 5.89205C12.2499 5.72805 12.3599 5.50805 12.3899 5.44905V5.44805C12.4424 5.33993 12.4846 5.2271 12.5159 5.11105C12.5479 4.99705 12.5829 4.84105 12.6159 4.70105L12.6509 4.54405C12.7459 4.14105 12.8689 3.70205 13.0889 3.30105C13.3029 2.91305 13.5959 2.58105 14.0319 2.36405C14.4699 2.14505 15.1479 1.99505 16.2099 2.13705C17.6629 2.33005 20.3959 2.79305 22.7419 3.98705C25.0719 5.17205 26.8339 6.96605 26.8339 9.81105C26.8339 11.1211 26.3939 12.6111 25.8639 13.7861C25.7639 13.0201 25.6199 12.3941 25.4719 11.8981C25.3687 11.5436 25.24 11.197 25.0869 10.8611C25.0291 10.7366 24.9657 10.6148 24.8969 10.4961L24.8799 10.4691L24.8739 10.4591L24.8709 10.4541L24.8689 10.4511L24.0289 10.9911L24.8689 10.4511L24.4989 9.87705L23.8369 10.0101L23.8229 10.0131L23.7259 10.0261C23.577 10.0426 23.4276 10.0526 23.2779 10.0561C22.6613 10.068 22.0451 10.0197 21.4379 9.91205C19.8249 9.64005 17.4549 8.89905 14.5759 6.98205L13.8759 6.51505L13.2969 7.12505C12.8199 7.62705 12.4959 8.31205 12.2589 8.97905C12.0169 9.66405 11.8339 10.4291 11.6869 11.1631C11.565 11.7877 11.4543 12.4145 11.3549 13.0431L11.3169 13.2671C11.2099 13.9181 11.1229 14.4151 11.0349 14.7371C11.002 14.8591 10.9667 14.9805 10.9289 15.1011ZM24.8099 15.5231L24.8139 15.5211L24.8099 15.5231ZM24.8139 15.5211L24.8099 15.5231L24.8129 15.5211H24.8139Z" fill="#6A3E98"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M11.914 23.8551C11.702 23.4331 11.441 22.9121 11 23.0131C5.596 24.2431 0 27.7941 0 31.5701V37.0001H36V31.5701C36 28.5961 32.528 25.7611 28.413 24.0901L28.408 24.0801C28.4034 24.071 28.3988 24.062 28.394 24.0531L28.361 24.0691C27.268 23.6291 26.13 23.2691 25 23.0131C24.497 22.8981 23.977 23.5901 23.75 24.0231H12C11.972 23.9711 11.944 23.9131 11.914 23.8551ZM25.403 25.1751C25.84 25.2961 26.275 25.4321 26.704 25.5821C26.716 25.9241 26.69 26.3281 26.634 26.7401C26.577 27.1666 26.486 27.588 26.362 28.0001H25C24.8143 28.0002 24.6324 28.052 24.4745 28.1496C24.3166 28.2473 24.189 28.387 24.106 28.5531L23.106 30.5531C23.0365 30.6918 23.0002 30.8449 23 31.0001V33.0001C23 33.2653 23.1054 33.5197 23.2929 33.7072C23.4804 33.8947 23.7348 34.0001 24 34.0001H26V32.0001H25V31.2361L25.618 30.0001H28.382L29 31.2361V32.0001H28V34.0001H30C30.2652 34.0001 30.5196 33.8947 30.7071 33.7072C30.8946 33.5197 31 33.2653 31 33.0001V31.0001C30.9998 30.8449 30.9635 30.6918 30.894 30.5531L29.894 28.5531C29.811 28.387 29.6834 28.2473 29.5255 28.1496C29.3676 28.052 29.1857 28.0002 29 28.0001H28.434C28.5576 27.4709 28.6405 26.933 28.682 26.3911C29.657 26.8521 30.563 27.3811 31.348 27.9531C33.27 29.3551 34 30.6671 34 31.5701V35.0001H2V31.5701C2 30.6671 2.73 29.3551 4.652 27.9531C5.618 27.2481 6.771 26.6101 8.007 26.0821C8.04133 26.879 8.16921 27.6691 8.388 28.4361L8.396 28.4641C7.79816 28.8423 7.35321 29.4196 7.13974 30.094C6.92626 30.7685 6.95799 31.4967 7.22932 32.15C7.50066 32.8033 7.99414 33.3397 8.62261 33.6645C9.25107 33.9893 9.97409 34.0815 10.664 33.9249C11.3538 33.7683 11.9662 33.373 12.3928 32.8087C12.8195 32.2444 13.033 31.5475 12.9957 30.8411C12.9584 30.1346 12.6726 29.4641 12.1889 28.9479C11.7051 28.4317 11.0545 28.1031 10.352 28.0201C10.2242 27.6017 10.1306 27.1736 10.072 26.7401C10.0163 26.3524 9.99324 25.9607 10.003 25.5691C10.0059 25.4943 10.0109 25.4196 10.018 25.3451C10.138 25.3081 10.258 25.2721 10.378 25.2381L10.793 26.0241H24.957L25.403 25.1761V25.1751ZM10 32.0161C10.538 32.0161 11 31.5761 11 31.0011C11 30.4271 10.538 29.9861 10 29.9861C9.462 29.9861 9 30.4261 9 31.0011C9 31.5751 9.462 32.0161 10 32.0161Z" fill="#6A3E98"/>
				</svg>
				<div class="catgry-name">All Doctors</div>
				</a></li>       
            </div>
			@php
				{{ $speciality = App\Models\tbl_doctor_speciality::orderBy("id","Asc")->select('id', 'speciality','speciality_image')->where('status', '=', 'Active')->get(); }}
			@endphp
			
			@foreach($speciality as $speciali)
				@php
					$srr_n = str_replace(' ', '-',$speciali->speciality);
					$sr_na = str_replace('.', '-',$srr_n);
					$srr_naa = str_replace('-', '-',$sr_na);
					$sr_naa = str_replace('(', '-',$srr_naa);
					$rr_naa = str_replace(')', '-',$sr_naa);
					$srr_na = str_replace('&', '-',$rr_naa);
				@endphp

                
				<div class="item">
					<li class="catgry d-flex justify-content-center align-items-center w-95 p-3 mx-3">
					  <a class="text-decoration-none" data-toggle="tab" href="#{{ $srr_na}}">
					    <img class="catgry_svg" src="{{ env('DESKTOP_APP_URL') }}/assets/images/new/{{$speciali->speciality}}.svg" style="max-height: 60px;max-width: 60px;margin: 0 auto;">
					    <div class="catgry-name">{{ $speciali->speciality }}</div>
					  </a>
					</li>                                
				</div>
			@endforeach
            
        </div>         
    </ul>
    <div class="tab-content bg-clr-none">
        <div id="home" class="tab-pane fade in active">
			<div id="Chooseadoctorsec-list" class="owl-carousel owl-theme doctorldtwb">
				<!-- <div class="item"> -->
				@php
					{{ $speciality = App\Models\tbl_doctor_speciality::orderBy("id","Asc")->select('id', 'speciality')->where('status', '=', 'Active')->get(); }}
					$ii = 0;
				@endphp

				@foreach($speciality as $speciali)
					@php
						{{ $s_doctors = App\Models\doctor_add::orderBy("id","desc")->select('*')->where('status', '=', 'Active')->where('specialities', '=', $speciali->id)->get(); }}
					@endphp
					
					@foreach($s_doctors as $s_doctor)
						@php
							if($ii == 0){   
								echo'<div class="item"><div class="row">';
							}
							$kk = 1;
							$ii++;
						@endphp
					<!-- <div class="row">  -->
						<div class="col-lg-12">          
							<div class="doctor-box">    
								<div class="star-rating">   
									<span><img src="{{ env('DESKTOP_APP_URL') }}/assets/images/icons/Star.svg"></span>	
									<span class="no-rating">4.9</span>
								</div>
								<div class="common-content row">
								<div class="col-5">											
									<div class="doctor-box-img">
										@php
											$ff_file = "storage/app/public/uploads/".$s_doctor->file;
										@endphp
										<img data_src="{{env('DESKTOP_APP_URL')}}" src="https://vc.brightbridge.co/{{ $ff_file }}">
									</div> 
								</div>
								<div class="col-7 d-a-d-p">     
								<div class="ten-yrs-exp">      
									<div class="higt-bld">{{$s_doctor->Years_of_Serveices}} Years <br/><span class="non-highlight">of Service</span></div>
								</div>   
								<div class="dct-list-sec">
									@php
										$drr_n = str_replace(' ', '-',$s_doctor->name);
										$drr_na = str_replace('.', '-',$drr_n);
										$uu_url = "doctor/".$speciali->id."/".$s_doctor->id."/".$drr_na;
									@endphp
									<div class="doctor-box-name">
									{{$s_doctor->name}}
									</div>				   						
									<div class="doctor-box-sub-name">     
									@php
									echo $s_doctor->Qualification
									@endphp</div>    
									<div class="doctor-box-sub-name">Consulting Language :<span class="clr-orange">@php
																			echo str_replace('<li></li>', '', $s_doctor->Languages);
																		@endphp </span></div>
									<div class="doctor-box-btn">     
										<a href="{{ url($uu_url) }}"><button class="doctors-view-btn">{{$speciali->speciality}}</button></a>
									</div>    
								</div>
								</div>
								</div>
								<div class="doctor-box-fot"> 
									<div class="row">										
										<div class="col-5 bor-right">
										@php
											$drr_n = str_replace(' ', '-',$s_doctor->name);
											$drr_na = str_replace('.', '-',$drr_n);
											$vv_url = "consult-on-video/".$speciali->id."/".$s_doctor->id."/".$drr_na;
											//$askAquery = "#askAquery_".$speciali->id."_".$s_doctor->id;
											
											$doc_tor_id = $s_doctor->id;
											$ciphering = "AES-256-CTR";
											$iv_length = openssl_cipher_iv_length($ciphering);
											$options = 0;
											$encryption_iv = '1234567890510960';
											$encryption_key = "HP_password_by_Hari";
											
											$sdoctor_iid = openssl_encrypt($doc_tor_id, $ciphering,$encryption_key, $options, $encryption_iv);
											//$speciality_id = openssl_encrypt($speciali->id, $ciphering,$encryption_key, $options, $encryption_iv);
											//$askAquery = $speciality_id."_".$sdoctor_iid;
											$askAquery = $sdoctor_iid;
										@endphp
											<!-- <a data-bs-toggle="modal" data-bs-target="#askAquery"><div class="doctor-box-fot-txt"><span><img src="{{ url('assets/images/icons/envelopeicn.svg') }}"></span>Ask a query</div>	</a>									 -->
											<a class="doctor-box-fot-txt btn doctors-view-btn btn-popup" data-bs-toggle="modal" data-bs-target="#askAquery" data-id="{{$askAquery}}"><span><img src="{{ url('assets/images/icons/envelopeicn.svg') }}"></span> ASK A QUERY</a>
										</div>
										<div class="col-7">
											<a href="{{ url($vv_url) }}"><div class="doctor-box-fot-txt"><span><img src="{{ url('assets/images/icons/Videoicn.svg') }}"></span>Consult on Video</div></a>										
										</div>		 									
									</div>
								</div>
							</div>
						</div>
					<!-- </div> -->
					@php
							if($ii == 0){
								echo '</div></div>';
								$kk = 0;
							}elseif($ii == 2){
								echo '</div></div>';
								$ii = 0;
								$kk = 0;
							}
						@endphp
						@endforeach
					@endforeach
					@php
						if($kk == 1){
							echo '</div></div>';
							$kk = 0;
						}
					@endphp
					<!-- <div class="row">	
						<div class="col-lg-12">   
							<div class="doctor-box">
								<div class="star-rating">
									<span><img src="./assets/images/icons/Star.svg"></span>	
									<span class="no-rating">4.9</span>
								</div>
								<div class="common-content row">
								<div class="col-5">				     							
									<div class="doctor-box-img">       
										<img src="./assets/images/doctors/DrAnandBharathan.png">									
									</div>        
								</div>
								<div class="col-7 d-a-d-p">     
								<div class="ten-yrs-exp">      
									<div class="higt-bld">10 Years <br/><span class="non-highlight">of Service</span></div>
								</div>
								<div class="dct-list-sec">
									<div class="doctor-box-name">
										Dr. Anand Bharathan
									</div>										
									<div class="doctor-box-sub-name">
										M.S., DNB.,SURGICAL GASTROENTEROLOGY</div>
									<div class="doctor-box-sub-name">Consulting Language :<span class="clr-orange"> English </span></div>
									<div class="doctor-box-btn">
										<a href="individual-doctors.html"><button class="doctors-view-btn">Surgical Gastroenterologist</button></a>
									</div> 
								</div>
								</div>
								</div>
								<div class="doctor-box-fot">
									<div class="row">										
										<div class="col-5 bor-right">
											<a data-bs-toggle="modal" data-bs-target="#askAquery"><div class="doctor-box-fot-txt"><span><img src="./assets/images/icons/envelopeicn.svg"></span>Ask a query</div>	</a>									
										</div>
										<div class="col-7">
											<a href="consult-on-video.html"><div class="doctor-box-fot-txt"><span><img src="./assets/images/icons/Videoicn.svg"></span>Consult on Video</div></a>										
										</div>		 									
									</div>
								</div>
							</div>
						</div>
					</div> -->
				<!-- </div>        -->
				<!-- <div class="item">   
					<div class="row"> 
						<div class="col-12">
							<div class="doctor-box">
								<div class="star-rating">
									<span><img src="./assets/images/icons/Star.svg"></span>	
									<span class="no-rating">4.9</span>
								</div>
								<div class="common-content row">
								<div class="col-5">											
									<div class="doctor-box-img">
										<img src="./assets/images/doctors/DrAnandBharathan.png">									
									</div> 
								</div>
								<div class="col-7 d-a-d-p">
								<div class="ten-yrs-exp"> 
									<div class="higt-bld">10 Years <br/><span class="non-highlight">of Service</span></div>
								</div>
								<div class="dct-list-sec">
									<div class="doctor-box-name">
										Dr. Anand Bharathan
									</div>										
									<div class="doctor-box-sub-name">
										M.S., DNB.,SURGICAL GASTROENTEROLOGY</div>
									<div class="doctor-box-sub-name">Consulting Language :<span class="clr-orange"> English </span></div>
									<div class="doctor-box-btn">
										<a href="individual-doctors.html"><button class="doctors-view-btn">Surgical Gastroenterologist</button></a>
									</div> 
								</div>
								</div>            
								</div>        
								<div class="doctor-box-fot">
									<div class="row">										
										<div class="col-5 bor-right">
											<a data-bs-toggle="modal" data-bs-target="#askAquery"><div class="doctor-box-fot-txt"><span><img src="./assets/images/icons/envelopeicn.svg"></span>Ask a query</div>	</a>									
										</div>
										<div class="col-7">
											<a href="consult-on-video.html"><div class="doctor-box-fot-txt"><span><img src="./assets/images/icons/Videoicn.svg"></span>Consult on Video</div></a>										
										</div>		 									
									</div>
								</div>
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col-12">
							<div class="doctor-box">
								<div class="star-rating">
									<span><img src="./assets/images/icons/Star.svg"></span>	
									<span class="no-rating">4.9</span>
								</div>
								<div class="common-content row">                 
								<div class="col-5">					     						
									<div class="doctor-box-img">    
										<img src="./assets/images/doctors/DrAnandBharathan.png">									
									</div>      
								</div>
								<div class="col-7 d-a-d-p">      
								<div class="ten-yrs-exp"> 
									<div class="higt-bld">10 Years <br/><span class="non-highlight">of Service</span></div>
								</div>  
								<div class="dct-list-sec">
									<div class="doctor-box-name">
										Dr. Anand Bharathan                  
									</div>										
									<div class="doctor-box-sub-name">
										M.S., DNB.,SURGICAL GASTROENTEROLOGY</div>
									<div class="doctor-box-sub-name">Consulting Language :<span class="clr-orange"> English </span></div>
									<div class="doctor-box-btn">
										<a href="individual-doctors.html"><button class="doctors-view-btn">Surgical Gastroenterologist</button></a>
									</div>     
								</div>       
								</div>       
								</div>              
								<div class="doctor-box-fot">       
									<div class="row">			    							
										<div class="col-5 bor-right">
											<a data-bs-toggle="modal" data-bs-target="#askAquery"><div class="doctor-box-fot-txt"><span><img src="./assets/images/icons/envelopeicn.svg"></span>Ask a query</div>	</a>									
										</div>
										<div class="col-7">
											<a href="consult-on-video.html"><div class="doctor-box-fot-txt"><span><img src="./assets/images/icons/Videoicn.svg"></span>Consult on Video</div></a>										
										</div>		 									
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div> -->
			</div>	
        </div>





		@php
			{{ $speciality = App\Models\tbl_doctor_speciality::orderBy("id","Asc")->select('id', 'speciality')->where('status', '=', 'Active')->get(); }}
		@endphp
	
		@foreach($speciality as $speciali)
			@php
			$ii = 0;
				{{ $s_doctors = App\Models\doctor_add::orderBy("id","desc")->select('*')->where('status', '=', 'Active')->where('specialities', '=', $speciali->id)->get(); }}
			@endphp
			@php
				$srr_n = str_replace(' ', '-',$speciali->speciality);
				$sr_na = str_replace('.', '-',$srr_n);
				$srr_naa = str_replace('-', '-',$sr_na);
				$sr_naa = str_replace('(', '-',$srr_naa);
				$rr_naa = str_replace(')', '-',$sr_naa);
				$srr_na = str_replace('&', '-',$rr_naa);
			@endphp
        <div id="{{$srr_na}}" class="tab-pane fade">
			<div id="cardiologyslider" class="owl-carousel owl-theme doctorldtwb">		 	
				<!-- <div class="item"> -->
					<!-- <div class="row"> -->
					@foreach($s_doctors as $s_doctor)
						@php
							if($ii == 0){
								echo'<div class="item"><div class="row">';
							}
							$kk = 1;
							$ii++;
						@endphp
						<div class="col-lg-12">          
							<div class="doctor-box">    
								<div class="star-rating">   
									<span><img src="{{ url('assets/images/icons/Star.svg') }}"></span>	
									<span class="no-rating">4.9</span>
								</div>
								<div class="common-content row">
								<div class="col-5">											
									<div class="doctor-box-img">
									@php
									$ff_file = "storage/app/public/uploads/".$s_doctor->file;
									@endphp
									<img data_src="{{env('DESKTOP_APP_URL')}}" src="https://vc.brightbridge.co/{{ $ff_file }}">									
									</div> 
								</div>
								<div class="col-7 d-a-d-p">     
								<div class="ten-yrs-exp">      
									<div class="higt-bld">{{$s_doctor->Years_of_Serveices}} Years <br/><span class="non-highlight">of Service</span></div>
								</div>   
								<div class="dct-list-sec">
								@php
									$drr_n = str_replace(' ', '-',$s_doctor->name);
									$drr_na = str_replace('.', '-',$drr_n);
									$uu_url = "doctor/".$speciali->id."/".$s_doctor->id."/".$drr_na;
									@endphp
									<div class="doctor-box-name">    
										{{$s_doctor->name}}
									</div>				   						
									<div class="doctor-box-sub-name">     
									@php
										echo $s_doctor->Qualification
										@endphp</div>    
									<div class="doctor-box-sub-name">Consulting Language :<span class="clr-orange"> @php
																			echo str_replace('<li></li>', '', $s_doctor->Languages);
																		@endphp </span></div>
									<div class="doctor-box-btn">     
										<a href="{{ url($uu_url) }}"><button class="doctors-view-btn">{{$speciali->speciality}}</button></a>
									</div>    
								</div>
								</div>
								</div>
								<div class="doctor-box-fot"> 
									<div class="row">
									@php
										$drr_n = str_replace(' ', '-',$s_doctor->name);
										$drr_na = str_replace('.', '-',$drr_n);
										$vv_url = "consult-on-video/".$speciali->id."/".$s_doctor->id."/".$drr_na;
										//$askAquery = "#askAquery_".$speciali->id."_".$s_doctor->id;
										
										$doc_tor_id = $s_doctor->id;
										$ciphering = "AES-256-CTR";
										$iv_length = openssl_cipher_iv_length($ciphering);
										$options = 0;
										$encryption_iv = '1234567890510960';
										$encryption_key = "HP_password_by_Hari";
										
										$sdoctor_iid = openssl_encrypt($doc_tor_id, $ciphering,$encryption_key, $options, $encryption_iv);
										//$speciality_id = openssl_encrypt($speciali->id, $ciphering,$encryption_key, $options, $encryption_iv);
										//$askAquery = $speciality_id."_".$sdoctor_iid;
										$askAquery = $sdoctor_iid;
									@endphp
										<div class="col-5 bor-right">
											<!-- <a data-bs-toggle="modal" data-bs-target="#askAquery"><div class="doctor-box-fot-txt"><span><img src="{{ url('assets/images/icons/envelopeicn.svg') }}"></span>Ask a query</div>	</a> -->
											<button data-bs-toggle="modal" data-bs-target="#askAquery" class="doctor-box-fot-txt btn doctors-view-btn btn-popup" data-id="{{$askAquery}}"><span><img src="{{ url('assets/images/icons/envelopeicn.svg') }}"></span> ASK A QUERY</button> <!--  //Rs.{{$s_doctor->Ask_A_query_Fee}}/- -->
										</div>
										<div class="col-7">
											<a href="{{ url($vv_url) }}"><div class="doctor-box-fot-txt"><span><img src="{{ url('assets/images/icons/Videoicn.svg') }}"></span>Consult on Video</div></a>										
										</div>		 									
									</div>
								</div>
							</div>
						</div>
						@php
												if($ii == 0){
													echo '</div></div>';
													$kk = 0;
												}elseif($ii == 2){
													echo '</div></div>';
													$ii = 0;
													$kk = 0;
												}
											@endphp

										@endforeach

										@php
											if($kk == 1){
												echo '</div></div>';
												$kk = 0;
											}
										@endphp
									
							
							@endforeach
					<!-- </div> -->
					<!-- <div class="row">	
						<div class="col-lg-12">   
							<div class="doctor-box">
								<div class="star-rating">
									<span><img src="./assets/images/icons/Star.svg"></span>	
									<span class="no-rating">4.9</span>
								</div>
								<div class="common-content row">
								<div class="col-5">				     							
									<div class="doctor-box-img">       
										<img src="./assets/images/doctors/DrAnandBharathan.png">									
									</div>        
								</div>
								<div class="col-7 d-a-d-p">     
								<div class="ten-yrs-exp">      
									<div class="higt-bld">10 Years <br/><span class="non-highlight">of Service</span></div>
								</div>
								<div class="dct-list-sec">
									<div class="doctor-box-name">
										Dr. Anand Bharathan
									</div>										
									<div class="doctor-box-sub-name">
										M.S., DNB.,SURGICAL GASTROENTEROLOGY</div>
									<div class="doctor-box-sub-name">Consulting Language :<span class="clr-orange"> English </span></div>
									<div class="doctor-box-btn">
										<a href="individual-doctors.html"><button class="doctors-view-btn">Surgical Gastroenterologist</button></a>
									</div> 
								</div>
								</div>
								</div>
								<div class="doctor-box-fot">
									<div class="row">										
										<div class="col-5 bor-right">
											<a data-bs-toggle="modal" data-bs-target="#askAquery"><div class="doctor-box-fot-txt"><span><img src="./assets/images/icons/envelopeicn.svg"></span>Ask a query</div>	</a>									
										</div>
										<div class="col-7">
											<a href="consult-on-video.html"><div class="doctor-box-fot-txt"><span><img src="./assets/images/icons/Videoicn.svg"></span>Consult on Video</div></a>										
										</div>		 									
									</div>
								</div>
							</div>
						</div>
					</div> -->
				<!-- </div>  -->
			</div>	
        </div>
        <!-- <div id="menu2" class="tab-pane fade">    
            <h3>3</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>       
        <div id="menu3" class="tab-pane fade">
            <h3> 4</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
        <div id="menu4" class="tab-pane fade">
            <h3>5</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>                                                                                -->
    </div>       
	</div>                                                                         
	</section>                 
                       
	<section class="ask-a-doctor">
		<div class="custom-container pad-30">                    
			<div class="main-heading">Ask a Doctor Online</div>
			<div class="row marlftrgt">
				<div class="col-6">
					<div class="image-qury">
						<img src="./assets/images/ask a docctor.png">
					</div> 
				</div>
				<div class="col-6">
					<form>						
						<textarea class="form-control contct-form" rows="6" id="comment" name="message" placeholder="Elaborate your health query with symptoms, current medication, gender, age, height and weight"></textarea><br/>
						<button type="submit" class="btn btn-primary subfrmbtn">Submit</button>  	 					
					</form>  
				</div>
			</div>
		</div>
	</section>

		<section>
		<footer class="main-footer">
			<div class="sc-bottom-bar">
				<a onclick="window.location.href='/'" class="sc-menu-item"><span class="fotmnu"><i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
<path d="M10.3857 2.81322L10.3856 2.81317C10.2774 2.72075 10.1408 2.67033 10 2.67033C9.85921 2.67033 9.72264 2.72075 9.61441 2.81317L9.61436 2.81321L2.86441 8.5726C2.7976 8.62966 2.7437 8.70094 2.70661 8.78157C2.66954 8.86218 2.65019 8.95011 2.65 9.03923V18.4526H6.475V13.2768C6.475 12.8342 6.64832 12.4092 6.95752 12.0956C7.26678 11.7818 7.68669 11.6052 8.125 11.6052H11.875C12.3133 11.6052 12.7332 11.7818 13.0425 12.0956C13.3517 12.4092 13.525 12.8342 13.525 13.2768V18.4526H17.35V9.03904C17.35 8.94969 17.3307 8.86147 17.2936 8.78061C17.2566 8.69977 17.2026 8.62831 17.1357 8.57113L10.3857 2.81322ZM10.3857 2.81322L17.1356 8.57108L10.3857 2.81322ZM8.45519 1.42089L8.45516 1.42092L1.70519 7.17804C1.43725 7.40645 1.22196 7.69141 1.07428 8.01286C0.926613 8.33431 0.850088 8.68454 0.85 9.03901V9.03904V18.6034C0.85 19.046 1.02332 19.471 1.33252 19.7846C1.64178 20.0984 2.06169 20.275 2.5 20.275H6.625C7.06331 20.275 7.48322 20.0984 7.79248 19.7846C8.10168 19.471 8.275 19.046 8.275 18.6034V13.4276H11.725V18.6034C11.725 19.046 11.8983 19.471 12.2075 19.7846C12.5168 20.0984 12.9367 20.275 13.375 20.275H17.5C17.9383 20.275 18.3582 20.0984 18.6675 19.7846C18.9767 19.471 19.15 19.046 19.15 18.6034V9.0398V9.03977C19.1499 8.6853 19.0734 8.33507 18.9257 8.01363C18.778 7.69217 18.5628 7.40721 18.2948 7.1788L11.5448 1.42092L11.5448 1.42089C11.1124 1.05232 10.5654 0.85 10 0.85C9.43457 0.85 8.88756 1.05232 8.45519 1.42089Z" stroke="#B0B0B0"/> 
</svg></i></span><div class="promnu">Home</div></a>
				<a onclick="window.location.href='/doctors'" class="sc-menu-item sc-current"><span class="doctormnu"><i><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
<path d="M8.375 2.25C8.29765 2.25 8.22346 2.28073 8.16876 2.33543C8.11406 2.39013 8.08333 2.46431 8.08333 2.54167V7.20833C8.08333 7.4404 7.99115 7.66296 7.82705 7.82705C7.66296 7.99115 7.4404 8.08333 7.20833 8.08333H2.54167C2.46431 8.08333 2.39013 8.11406 2.33543 8.16876C2.28073 8.22346 2.25 8.29765 2.25 8.375V13.625C2.25 13.786 2.38067 13.9167 2.54167 13.9167H7.20833C7.4404 13.9167 7.66296 14.0089 7.82705 14.1729C7.99115 14.337 8.08333 14.5596 8.08333 14.7917V19.4583C8.08333 19.6193 8.214 19.75 8.375 19.75H13.625C13.7024 19.75 13.7765 19.7193 13.8312 19.6646C13.8859 19.6099 13.9167 19.5357 13.9167 19.4583V14.7917C13.9167 14.5596 14.0089 14.337 14.1729 14.1729C14.337 14.0089 14.5596 13.9167 14.7917 13.9167H19.4583C19.5357 13.9167 19.6099 13.8859 19.6646 13.8312C19.7193 13.7765 19.75 13.7024 19.75 13.625V8.375C19.75 8.29765 19.7193 8.22346 19.6646 8.16876C19.6099 8.11406 19.5357 8.08333 19.4583 8.08333H14.7917C14.5596 8.08333 14.337 7.99115 14.1729 7.82705C14.0089 7.66296 13.9167 7.4404 13.9167 7.20833V2.54167C13.9167 2.46431 13.8859 2.39013 13.8312 2.33543C13.7765 2.28073 13.7024 2.25 13.625 2.25H8.375ZM6.33333 2.54167C6.33333 1.41467 7.248 0.5 8.375 0.5H13.625C14.752 0.5 15.6667 1.41467 15.6667 2.54167V6.33333H19.4583C20.5853 6.33333 21.5 7.248 21.5 8.375V13.625C21.5 14.1665 21.2849 14.6858 20.902 15.0687C20.5191 15.4516 19.9998 15.6667 19.4583 15.6667H15.6667V19.4583C15.6667 19.9998 15.4516 20.5191 15.0687 20.902C14.6858 21.2849 14.1665 21.5 13.625 21.5H8.375C7.83352 21.5 7.31421 21.2849 6.93132 20.902C6.54844 20.5191 6.33333 19.9998 6.33333 19.4583V15.6667H2.54167C2.00018 15.6667 1.48088 15.4516 1.09799 15.0687C0.715104 14.6858 0.5 14.1665 0.5 13.625V8.375C0.5 7.248 1.41467 6.33333 2.54167 6.33333H6.33333V2.54167Z" fill="#B0B0B0"/>
</svg></i></span><div class="promnu">Doctors</div></a>
				<a class="sc-nav-indicator"></a>
				<a onclick="window.location.href='/patient-dashboard'" class="sc-menu-item"><span class="fotmnu"><i><svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 22 21" fill="none">
<g clip-path="url(#clip0_576_387)"><path d="M10.1345 10.0478C12.6568 10.0478 14.7016 8.00301 14.7016 5.48067C14.7016 2.95833 12.6568 0.913574 10.1345 0.913574C7.61214 0.913574 5.56738 2.95833 5.56738 5.48067C5.56738 8.00301 7.61214 10.0478 10.1345 10.0478Z" stroke="#B0B0B0" stroke-width="1.8"/>
</g><path d="M19.834 20.0954H1.1199C0.439393 15.4189 2.82118 13.2753 4.09714 12.7881L16.8569 12.7881C18.5918 12.7882 21.1101 17.6596 19.834 20.0954Z" stroke="#B0B0B0" stroke-width="1.8"/>
<defs><clipPath id="clip0_576_387"><rect width="10.961" height="10.961" fill="white" transform="translate(4.65381)"/>
</clipPath></defs></svg></i></span><div class="promnu">Profile</div></a> 
			</div>
		</footer>
		</section>
 <!-- The Modal -->
<div class="modal" id="askAquery">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">    

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ask a query  ( Rs.380 )</h4>              
        <a class="btn-close" data-bs-dismiss="modal"></a>          
      </div> 

      <!-- Modal body -->
      <div class="modal-body">
	  <form>
		<div class="main-heading">Ask a Doctor Online</div>
		<div class="modal-body-inner">							
		<textarea class="form-control card-effect" rows="5" id="comment" name="text" 
		placeholder="Elaborate your health query with symptoms, current medication, gender, age, height and weight"></textarea>			
		</div>
        <div class="modal-inner_card">
        <ul class="nav nav-pills mt-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"                              aria-selected="true">NEW USER</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"                            aria-selected="false">EXISTING USER</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" style="opacity:1;">
                <div class="col-12 text-left p-3 shadow">
                    <div class="col-12">
                        <div class="mb-3 mt-3">
                            <label for="n_name" class="form-label">Name</label>
                            <input type="text" class="form-control newusr-form hp_uppercase" id="n_name" name="n_name" aria-describedby="name" placeholder="Enter Name">
                            <span class="error n_nameErr" style="display: none;"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="n_Email" class="form-label">Email address</label>
                            <input type="email" class="form-control newusr-form" id="n_Email" name="n_Email" aria-describedby="emailHelp" placeholder="sample@gmail.com">
                            <span class="error n_EmailErr" style="display: none;"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="n_Phone" class="form-label">Phone (Strictly used for transactional notifications) </label>
                            <input type="text" class="form-control newusr-form" id="n_Phone" name="n_Phone" aria-describedby="no" placeholder="Enter Phone No">
                            <span class="error n_PhoneErr" style="display: none;"></span>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label for="n_password" class="form-label">Password</label>
                            <div class="input-group" id="show_hide_password">
                                <input class="form-control newusr-form" placeholder="Enter Password" type="password" id="n_password" name="n_password">
                            </div>
                            <span class="error passwordErr" style="display: none;"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label for="n_Confirm_Password" class="form-label">Confirm Password</label>
                            <div class="input-group" id="show_hide_passworda">
                                <input class="form-control newusr-form" placeholder="Enter Password"  type="password" id="n_Confirm_Password" name="n_Confirm_Password">
                            </div>
                            <span class="error n_Confirm_PasswordErr" style="display: none;"></span>
                        </div>
                    </div>
                    <div class="col-12 otp" style="display:none;">
                        <div class="mb-3">
                            <label for="otp" class="form-label">OTP</label>
                            <input class="form-control newusr-form" type="text" id="otp" name="otp">
                            <span class="error otpErr" style="display: none;"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input newusr-form" type="checkbox" id="FieldsetCheck">
                                <label class="form-check-label check-fie-box" for="FieldsetCheck">
                                I agree to <a href="#">terms of use</a> and <a href="#">privacy policy</a>
                                </label>
                            </div>
                            <span class="error aler_chktTxt" style="display: none;"></span>
                        </div>
                    </div>
                    <!-- <div class="col-12 otp" style="display: none;">
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input newusr-form" type="text" id="otp" name="otp">
                            </div>
                            <span class="error aler_otpTxt" style="display: none;"></span>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" style="opacity:1;">
                <div class="col-12 text-left p-3 shadow">
                    <div class="col-12">
                        <span class="error query_errorErr" style="display: none;"></span>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control newusr-form" id="email" name="email" aria-describedby="emailHelp" placeholder="sample@gmail.com">
                            <span class="error emailErr" style="display: none;"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group" id="show_hide_password">
                                <input class="form-control newusr-form" type="password" id="password" name="password">
                            </div>
                            <span class="error passwordErr" style="display: none;"></span>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
		<div class="col-lg-12 col-md-12">                
		<div class="sub-con-btn">             
			<button class="doctors-view-btn">SUBMIT</button>	           								
		</div>	              
		</div>	   
	  </form>		 
      </div>

    </div>
  </div>
</div>	 
<!--end popup -->		
</body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/owlcarousel/owl.carousel.min.js"></script> 
  <script src="./assets/js/custom-main.js"></script> 
  <script>
  $(' .owl_1').owlCarousel({
    loop:false,
    margin:2, 
  responsiveClass:true,autoplayHoverPause:false,
  autoplay:false,
   slideSpeed: 400,
      paginationSpeed: 400,
   autoplayTimeout:3000,
    responsive:{
        0:{
            items:3,
            nav:false,
			dots:true,
        loop:false 
        },
        600:{
            items:3,
            nav:false,
        loop:false
        },
        1000:{
            items:3,
            nav:false,
            loop:false
        }
    }
})

$(document) .ready(function(){
var li =  $(".owl-item li ");
$(".owl-item li").click(function(){
li.removeClass('active');
});
});
</script>  







  <script>
var menu_bar = document.querySelector('.sc-bottom-bar');
var menu_item = document.querySelectorAll('.sc-menu-item');
var menu_indicator = document.querySelector('.sc-nav-indicator');
var menu_current_item = document.querySelector('.sc-current');
var menu_position;

menu_position = menu_current_item.offsetLeft - 16;
menu_indicator.style.left = menu_position + "px";
menu_bar.style.backgroundPosition = menu_position-8 + 'px';
menu_item.forEach(
  function(select_menu_item){
    select_menu_item.addEventListener('click', function(e){
      e.preventDefault();
      menu_position = this.offsetLeft - 16;
      menu_indicator.style.left = menu_position + "px";
      menu_bar.style.backgroundPosition = menu_position-8 + 'px';
      [...select_menu_item.parentElement.children].forEach(
        sibling => {
          sibling.classList.remove('sc-current');
        })
      select_menu_item.classList.add('sc-current'); 
    });
  }
)
 </script>
</html>