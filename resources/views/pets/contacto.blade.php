@extends('base.cliente')
@section('content')
<!-- content-section-starts -->
	<div class="content">
		<div class="main">
			<div class="container">
			         <div class="contact-form">
				  	   <h2>Contactanos</h2>
					     <form method="post" action="contact-post.html" class="left_form">
					    	<div>
						    	<span><label>NOMBRE</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Fax</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
					    </form>
					    <form class="right_form">
					        <div>					    	
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit" class="myButton"></span>
						  </div>
					    </form>
					    <div class="clearfix"></div>
				  </div>
				 <div class="content_bottom">
				 	<div class="company_address">
				     	<h2>UBICACION</h2>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span><a href="mailto:info@mycompany.com">info(at)mycompany.com</a></span></p>
				   		<p>Follow on: <span><a href="#">Facebook</a></span>, <span><a href="#">Twitter</a></span></p>
				     </div>
				       <div class="contact_info">
    	 				<h2>BUSCANOS</h2>
					    	  <div class="map">
							   	    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28837.479613495467!2d-57.13671466387495!3d-25.38187319920515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spy!4v1522882521419" width="100%" height="185" frameborder="0" style="border:0" allowfullscreen></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#8C8061;text-align:left;font-size:1em">View Larger Map</a></small>
							  </div>
      				     </div>
				      <div class="clearfix"></div>
	                </div>	
	             </div>  
	          </div>

		</div> 
	</div>
	<!-- content-section-ends -->
@endsection