@section('css')

@endsection
<div id="infoslider1" class="container clearfix">
<div id="section-nextgen" class="page-section bottommargin-lg">
	<div class="row clearfix">

		<div class="col-lg-7 center pf-icons pf-illustrations alt">
      <!-- IMAGE -->
      <div class="portfolio-image">
					@if($info_slider_images->count() > 1)
					<div class="fslider" data-arrows="true" data-speed="400" data-pause="4000">
					@else
					<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
					@endif
          <div class="flexslider">
            <div class="slider-wrap">
              @foreach($info_slider_images as $images)
              <div class="slide"><img src="{{ 'storage/' . $images->image }}" alt="Morning Dew"></div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <!-- /IMAGE -->
		</div>

		<div class="col-lg-5">
			<div class="emphasis-title bottommargin-sm">
				<h2 style="font-size: 42px;" class="font-body ls1 t400">{!! $info_slider_texts[0]->title !!}</h2>
			</div>
			<p style="color: #777;" class="lead">{!! $info_slider_texts[0]->contenido !!}</p>
			<a href="{{ $info_slider_texts[0]->link }}" class="section-more-link">{!! $info_slider_texts[0]->button !!}<i class="icon-angle-right"></i></a>
		</div>

	</div>
</div>

</div>
