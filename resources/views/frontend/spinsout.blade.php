@extends('layouts.frontend')

@section('content')

<section class="col-md-12 sp-spins-out-banner-section">
    <div class="container-fluid">
        <embed src="{{ asset('frontend/pdf/NASA_Spin_Outs.pdf')}}" class="sp-spins-out"></embed>
    </div>
</section>


@endsection