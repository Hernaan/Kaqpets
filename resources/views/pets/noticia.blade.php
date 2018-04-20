@extends('base.cliente')
@section('content')
<!-- content-section-starts -->
		<div class="content">
			<div class="main">
	<div class="container">
		<div class="blog-content">
	     <div class="blog-content-head text-left">
			<h3>Noticias</h3>
	    </div>
			<div class="section group">
				<div class="cont span_2_of_3">
					  <div class="blog_posts">
						<div class="section group example">
							<div class="col blog_1_of_2">
				                <div class="blog_img">
										<a href="single.html"></a>
				                </div>
							</div>
							@foreach($noticias as $noticia)
								<div class="col blogdata_1_of_2">
									<div class="blog_heading">
									<p><a href="single.html"><span>{{$noticia->not_titulo}}</span></a></p>
									<p class="post">{{$noticia->not_subtitulo}}</p>
							     </div>
									<div class="blog_data">
										<p>{{$noticia->not_contenido}}</p>				                     
				                    <div class="more">
				         	  		
				         	  			</div>
				                   </div>
								</div>
							@endforeach
								 <div class="clearfix"></div>	
							</div>
						 <div class="clearfix"></div>
				</div>
		 </div>
		
	</div>
	 	
</div>
	</div>
</div>			
		</div>
	<!-- content-section-ends -->
@endsection