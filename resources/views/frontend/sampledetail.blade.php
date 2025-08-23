@extends('layouts.frontend')

@section('content')
<section class="detailpage-section" >
    <div class="container">
    	<div class="detail-header">
    		<span>Lorem ipsum</span>
    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    	</div>

    	<div class="detail-body">
    		<div class="left">
    			<img src="{{ asset('frontend/images/detail_page_img.jpg') }}" width="400" height="420">
    			<div class="row col-md-12">
    				<p><span>Center :</span>Lorem ipsum</p>
    			</div>
    			<div class="row col-md-12">
    				<p><span>Category :</span>Lorem ipsum</p>
    			</div>
    			<div class="row col-md-12">
    				<p><span>Patent :</span>Lorem ipsum</p>
    			</div>
    			<div class="row col-md-12">
    				<p><span>Inventor :</span>Lorem ipsum consectetur adipiscing elit.</p>
    			</div>
    			<div class="row col-md-12">
    				<p class="link-text"> <a>NASA Technology Page</a> </p>
    			</div>
    			<br>
    		</div>
    		<div class=" right">
    			<span>Invention Overview :</span>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet ornare nunc ut interdum. Vestibulum aliquam ullamcorper dui, in cursus felis consequat finibus. In fringilla dictum turpis eu placerat. Sed nisl odio, auctor quis dignissim vitae, placerat vitae turpis. Duis sed ipsum volutpat, blandit dui ultricies, rhoncus justo. Sed a neque nec eros mattis dapibus eget sed felis. Nunc elit turpis, vehicula sed turpis non, cursus mollis metus.</p>
    			<br>
    			<span>Stage :</span>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet ornare nunc ut interdum. Vestibulum aliquam ullamcorper dui, in cursus felis consequat finibus. In fringilla dictum turpis eu placerat. Sed nisl odio, auctor quis dignissim vitae, placerat vitae turpis.</p>
    			<br>
    			<span>Application(s) :</span>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet ornare nunc ut interdum.</p>

    			<br>
    			<span>Differentiators :</span>
    			<ul>
    				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet ornare nunc ut interdum.</li>
    				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet ornare nunc ut interdum.</li>
    				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet ornare nunc ut interdum.</li>
    			</ul>
    			<br>
    			<span>Invention Disadvantages and Possible Mitigation :</span>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet ornare nunc ut interdum.</p>
    		</div>
    	</div>



    	
    	

    	
        
    </div>
</section>
@endsection