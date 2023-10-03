@extends('layouts.kingsbridge')
@section('content')
<!--================================
=            Page Title            =
=================================-->
<section class="page-title">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<!-- Title text -->
				<h3>About Us</h3>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{ asset('images/KINGSBRIDGE.png')}}"  class="img-fluid w-100 rounded" alt="">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <div class="about-content">
                    <h3 class="font-weight-bold mb-4">About Us:</h3>
                    <p>At KingsBridge, we take pride in being more than just an online car selling platform. We are your automotive hub,
                    a comprehensive destination where car enthusiasts and sellers unite.
                    Here's why you should choose us: 
                    </p>
                    <h3 class="font-weight-bold mt-5 mb-4">Mission Statement:</h3>
                    <p>Our commitment is to deliver a seamless car buying and selling experience.
                    We're dedicated to connecting car enthusiasts, empowering garage owners, 
                    and promoting car events. Learn how our mission impacts you:</p>
                        <h3 class="font-weight-bold mt-5 mb-4">Vision:</h3>
                    <p>We envision a world where buying and selling cars is a hassle-free and enjoyable experience for everyone. 
                        Our vision for KingsBridge is to create a platform that is the ultimate destination for car enthusiasts, 
                        where they can find everything they need in one place. We want to continue to innovate and provide 
                        our users with new and exciting features that make their experience with us even better. 
                        Our ultimate goal is to be the leading online car selling platform in the country.</p>
                        
                    <p>With KingsBridge, you're not just choosing a platform; you're joining a community of automotive enthusiasts. 
                    Our commitment to innovation and customer satisfaction ensures that we're your ultimate destination for all things automotive. 
                    Welcome to KingsBridge – Where Cars Find Their Kingdom!</p>    
                </div>
            </div>
        </div>
    </div>
</section>



<!--<section class="section bg-gray">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-3 col-sm-6 my-lg-0 my-3">-->
<!--                <div class="counter-content text-center bg-light py-4 rounded">-->
<!--                    <i class="fa fa-smile-o d-block"></i>-->
<!--                    <span class="counter my-2 d-block" data-count="2314">0</span>-->
<!--                    <h5>Happy Customers</h5>-->
<!--                    </script>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-sm-6 my-lg-0 my-3">-->
<!--                <div class="counter-content text-center bg-light py-4 rounded">-->
<!--                    <i class="fa fa-user-o d-block"></i>-->
<!--                    <span class="counter my-2 d-block" data-count="1013">0</span>-->
<!--                    <h5>Active Members</h5>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-sm-6 my-lg-0 my-3">-->
<!--                <div class="counter-content text-center bg-light py-4 rounded">-->
<!--                    <i class="fa fa-bookmark-o d-block"></i>-->
<!--                    <span class="counter my-2 d-block" data-count="2413">0</span>-->
<!--                    <h5>Verified Ads</h5>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-sm-6 my-lg-0 my-3">-->
<!--                <div class="counter-content text-center bg-light py-4 rounded">-->
<!--                    <i class="fa fa-smile-o d-block"></i>-->
<!--                    <span class="counter my-2 d-block" data-count="200">0</span>-->
<!--                    <h5>Happy Customers</h5>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


@endsection