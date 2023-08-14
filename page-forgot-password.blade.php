<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{config('app.name')}}</title>
	@include('header')  
     <script>
 // crude way to check that the screen is at 1024x768
 if (window.screen.width > 501) {
   // resolution is below 10 x 7
   window.location.reload();
   window.location = 'https://vc.brightbridge.co/page-forgot-password'; //for example    
 }
  </script>
</head>
<body class="signup-bgimg   ">
	<div class="container">
        <div class="row">
        <div class="col-12 col-lg-6 p-3 mx-auto">
                    <div class="row">
                      <div class="col-12">
                        <div class="logo my-5">
                          <a href="/login"><img class="w-100" src="{{url('assets/images/logo.png')}}" alt="srh vc logo"></a>
                        </div>
                                  
                      <div class="col-lg-12 col-md-12">
                        <h4 class="text-center mb-4">Forgot Password ?</h4>

                        <div class="bg-white py-5 px-3" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 30px;">
                            <form action="https://vc.brightbridge.co/forgot_password" method="post">
                                <div>
                                    <p>If you have forgotten your password you can reset it here.</p>
    
                                </div>
                                        <input type="hidden" name="_token" value="Ezv1l7TtQ7u7mInIyJypDrNhq2S7PizVfEQQevYz">                              <div class="form-group">
                                <label class="form-label"><strong>Email</strong></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
                              </div>
                              <div class="text-center my-4">
                                <button type="submit" class="btn btn-outline-secondary">Send Password</button>
                              </div>
                            </form>
                        </div>
                        
                       
                      </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/owlcarousel/owl.carousel.min.js"></script> 
  <script src="./assets/js/custom-main.js"></script> 
</body>
</html>