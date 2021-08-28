@extends('layouts.app')

@section('content')
<head>
    <link href="{{ asset('css/services copy.css') }}" rel="stylesheet">
</head>
<div class="banner-container">
    <div class="banner">
            <div class="text">
                <h1>The Road to Cleanliness has never been easier.</h1>
                <p>Making your comfort zones squeaky clean one step at a time.</p>
            </div>
            <div class="image">
                <img src="/images/services/header_img.png" class="img-fluid">
            </div>     
                        
    </div>
</div>
<div class="container-fluid">
    <div class="col-md-6">
        <div><h1> Services </h1></div>
    </div>
    <div class="row justify-content-center">
        
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img class="card-img" src="/images/services/general_cleaning.jpg" alt="Card image cap">
                </div>
                <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">General Cleaning</h3>
                    <p class="card-text">Comprises of sweeping, vacuuming, light dusting and a simple disinfection. This service will ensure that your home is clear of dust, filth, and debris.</p>
                    <div class="row">
                        <div class="col">
                            <div class="pricing">
                                <h4 class="starts">Starts At</h4>
                                <div class="row">
                                    <h3 class="price">₱ 500</h3>
                                    <div class="col-md-6">
                                        <div class="byt float-right">
                                            <a class="btn btn-primary" href="#">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img class="card-img" src="/images/services/deep_cleaning.jpg" alt="Card image cap">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">Deep Cleaning</h3>
                    <p class="card-text">A deeper dive into a clean environment, this service includes deep cleaning, bedroom organization, simple upholstery cleaning and simple disinfection.</p>
                    <div class="row">
                        <div class="col">
                            <div class="pricing">
                                <h4 class="starts">Starts At</h4>
                                <div class="row">
                                    <h3 class="price">₱ 500</h3>
                                    <div class="col-md-6">
                                        <div class="byt float-right">
                                            <a class="btn btn-primary" href="#">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img class="card-img" src="/images/services/deep_kitchen.jpg" alt="Card image cap">
            </div>
            <div class="col-md-7">
            <div class="card-body">
                <h3 class="card-title">Deep Kitchen Cleaning</h3>
                <p class="card-text">Designed exclusively for the kitchen, deep cleaning of countertops, stovetops, and ovens and simple management and disinfection.</p>
                <div class="row">
                        <div class="col">
                            <div class="pricing">
                                <h4 class="starts">Starts At</h4>
                                <div class="row">
                                    <h3 class="price">₱ 500</h3>
                                    <div class="col-md-6">
                                        <div class="byt float-right">
                                            <a class="btn btn-primary" href="#">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img class="card-img" src="/images/services/upholstery.jpg" alt="Card image cap">
            </div>
            <div class="col-md-7">
            <div class="card-body">
                <h3 class="card-title">Upholstery Cleaning</h3>
                <p class="card-text">Concentrating on cleaning your sofas, pillows, and mattresses in order to eliminate accumulated dust and debris and restore their original appearance.</p>
                <div class="row">
                        <div class="col">
                            <div class="pricing">
                                <h4 class="starts">Starts At</h4>
                                <div class="row">
                                    <h3 class="price">₱ 500</h3>
                                    <div class="col-md-6">
                                        <div class="byt float-right">
                                            <a class="btn btn-primary" href="#">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-5">
            <img class="card-img" src="/images/services/maid.jpg" alt="Card image cap">
            </div>
            <div class="col-md-7">
            <div class="card-body">
                <h3 class="card-title">Maid for a Day</h3>
                <p class="card-text">Have a worry-free day in the house by having a maid take care of the essential household chores.</p>
                <div class="row">
                        <div class="col">
                            <div class="pricing">
                                <h4 class="starts">Starts At</h4>
                                <div class="row">
                                    <h3 class="price">₱ 500</h3>
                                    <div class="col-md-6">
                                        <div class="byt float-right">
                                            <a class="btn btn-primary" href="#">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img class="card-img" src="/images/services/sanitation.jpg" alt="Card image cap">
            </div>
            <div class="col-md-7">
            <div class="card-body">
                <h3 class="card-title">Sanitation and Germ Proofing</h3>
                <p class="card-text">This service will emphasize thorough sanitation, which will include disinfectant spray and antimicrobial fogging.</p>
                <div class="row">
                
                        <div class="col">
                            <div class="pricing">
                                <h4 class="starts">Starts At</h4>
                                <div class="row">
                                    <h3 class="price">₱ 500</h3>
                                    <div class="col-md-6">
                                        <div class="byt float-right">
                                            <a class="btn btn-primary" href="#">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
