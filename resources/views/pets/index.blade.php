@extends('base.cliente')
@section('content')
<!-- header-section-ends -->
    <div class="banner">
	<div class="slider">	  
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">
				 <li>
					 <img src="images/3.jpg" alt=""/>
					  <div class="caption">
						<h2>Como cuidar a tu mascota</h2>
						<a class="more" href="#">Leer mas</a>
					  </div>
				 </li>
				 <li>
					 <img src="images/2.jpg" alt=""/>
					  <div class="caption">
						<h2>Como puedo ayudar</h2>
						<a class="more" href="#">Leer mas</a>
					  </div>
				 </li>
				 <li>
					 <img src="images/1.jpg" alt=""/>
					  <div class="caption">
						<h2>Como ser voluntario</h2>
						<a class="more" href="#">Leer mas</a>
					  </div>
				 </li>
			  </ul>	      
		  </div>
	</div>
	</div>
	<!-- content-section-starts -->
		<div class="content">
			<div class="welcome-section">
				<div class="container">
					<div class="col-md-6 welcome-grid text-center">
						<h3>Bienvenido</h3>
						<h5>Duis autem vel eum iriure dolor in hendrerit in vulputa</h5>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
						<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. littera gothica.</p>
					</div>
					<div class="col-md-6 images">
						<div class="img1">
							<img src="images/a1.jpg" class="img-responsive" alt="" />
						</div>
						<div class="img2">
						<img src="images/a2.jpg" class="img-responsive" alt="" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="about-section text-center">
				<div class="container">
					<h2>Nosotros</h2>
					<div class="col-md-6 about-section-grid text-left">
						<h4>Mision</h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio</p>
					</div>
					<div class="col-md-6 about-section-grid text-left">
						<h4>Vision</h4>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio</p>
					</div>
					<div class="clearfix"></div>
					<a href="{{url('/about')}}" class="btn btn-1 btn-1c">leer mas</a>
				</div>
			</div>
			<div class="textimonials-section text-center">
				<div class="container">
					<img src="images/t.png" alt="" />
					<h5>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram</h5>
					<p>Duis autem vel eum iriure dolor</p>
					<a href="" class="btn btn-1 btn-1d">Testimonios</a>
				</div>
			</div>
		</div>
	<!-- content-section-ends -->
	
	<div class="main-map">
		    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28837.479613495467!2d-57.13671466387495!3d-25.38187319920515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spy!4v1522882521419" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

@endsection