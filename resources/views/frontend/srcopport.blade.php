@extends('layouts.frontend')

@section('content')

<section class="src-oppor">

    <div class="advance_search_head text-center">
        <ul>
            <li><a href="">Trending</a></li>
            <li><a href="">Final Countdown</a></li>
            <li><a href="">New This Week</a></li>
            <li><a href="">Most Applied</a></li>
        </ul>
    </div>

    <div class="advance_search_form">
        <h3>SEARCH OPPORTUNITIES</h3>

        <form action="">
            <label for="categories">Categories</label>
            <select name="categories" id="categories">
                <option value="All Categories">All Categories</option>
            </select>
            <label for="city">City</label>
            <input id="city" type="text" placeholder="City/Town">

            <div class="single_2half pull-left">
                <label for="state">State</label>
                <select name="state" id="categories">
                    <option value="State">State</option>
                </select>
            </div>
            <div class="single_2full  pull-right">
                <label for="country">Country</label>
                <select name="country" id="country">
                    <option value="Country">Country</option>
                </select>
            </div>
            
            <div class="clearfix"></div>
            <div class="check_box_wrap_fotoer">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    
</section>

@endsection