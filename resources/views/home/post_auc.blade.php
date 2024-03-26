@extends('layout')
@section('title','Add Properties')
@section('body')
    @include('include.header')
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('home/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">Add Auction</h1>
          </div>  
        </div>
      </div>
    </section>
    <section>
        <form action="{{ route('added_auction') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="div_center">
                <label>Title</label> 
                <input type="text" name="title">
            </div>
            <div class="div_center">
                <label>Address</label> 
                <input type="text" name="address">
            </div>
            <div class="div_center">
                    <label>Number of Bedroom</label> 
                    <input type="text" name="bedroom">
            </div>
            <div class="div_center">
                <label>Number of Bathroom</label> 
                <input type="text" name="bathroom">
            </div>
            <div class="div_center">
                <label>Number of Garage</label> 
                <input type="text" name="garage">
            </div>
            <div class="div_center">
                <label>Floor Area</label> 
                <input type="text" name="area">
            </div>
            <div class="div_center">
                <label>Stories</label> 
                <input type="text" name="stories">
            </div>
            <div class="div_center">
                <label>Base Price</label> 
                <input type="text" name="base">
            </div>

            <div class="div_center">
                <label>Floor Area</label> 
                <input type="text" name="area">
            </div>
            
            <div class="div_center">
                <label>Buy Now Price</label> 
                <input type="text" name="price">
            </div>
            
            
            
            <div class="div_center">
                <label>Description </label>
                <textarea name="description"></textarea>
            </div>
            <div class="div_center">
                <label>Add Image</label>
                <input type="file" name="image">
            </div>
            <div class="div_center">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </section>
    @include('include.footer')
@endsection