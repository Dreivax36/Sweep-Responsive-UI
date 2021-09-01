@extends('layouts.app') 

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SWEEP Home</title>
    <link href="{{ asset('css/welcome_page.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4fc7b0e350.js" crossorigin="anonymous"></script>
</head>
<header>


<body>

<div class="banner-container">
    <div class="banner">
            <div class="text">
                <h1>The Road to Cleanliness has never been easier.</h1>
                <p>Making your comfort zones squeaky clean one step at a time.</p>
                <a class="btn btn-primary signup_btn" href="/customer/customer_register">{{ __('Sign Up') }}</a>
                
            </div>
            <div class="image">
                <img src="images/home/home_header.png" class="img-fluid">
            </div>     
                        
    </div>
</div>    

<div class="three_reason">
    <div class="container">
        <div class="row gx-5">
            <div class="text col-sm-4">
                    <i class="fas fa-money-bill-wave fa-2x"></i>
                    <h4 class="title">Affordable</h4>
                    <p> 
                        Sweep focuses on you. With various services offered, there is one that is perfect for you.
                    </p>
            </div>
            <div class="text col-sm-4">
            <i class="fas fa-hand-sparkles fa-2x"></i>
                <h4 class="title">Quality Assured</h4>
                <p class="desc">
                    All plans have there respective points checklist provided for you. This make sure that an availed service is of good quality.
                </p>
            </div>
            <div class="text col-sm-4">
            <i class="fas fa-business-time fa-2x"></i>
                <h4 class="title">Convenient</h4>
                <p class="desc">
                    We lift your burdens by providing an extra set of hands enabling you to carry on with your lives with ease.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="three_reason">
    <div class="container">
        <div class="row gx-5">
            <div class="text col-sm-4">
                    <i class="fas fa-money-bill-wave fa-2x"></i>
                    <h4 class="title">Affordable</h4>
                    <p> 
                        Sweep focuses on you. With various services offered, there is one that is perfect for you.
                    </p>
            </div>
            <div class="text col-sm-4">
            <i class="fas fa-hand-sparkles fa-2x"></i>
                <h4 class="title">Quality Assured</h4>
                <p class="desc">
                    All plans have there respective points checklist provided for you. This make sure that an availed service is of good quality.
                </p>
            </div>
            <div class="text col-sm-4">
            <i class="fas fa-business-time fa-2x"></i>
                <h4 class="title">Convenient</h4>
                <p class="desc">
                    We lift your burdens by providing an extra set of hands enabling you to carry on with your lives with ease.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- has some bugs -->
<div class="more-info">
    <div class="row1">
        <div class="foryou">
            <h5 class="for-you">For You</h5>
            <h2 class="title1">We're all about<br>cleanliness and<br>convenience.</h2>
            <p class="for-you-text">Save yourself the hassle by booking cleaning services. Our goal is to to make sure everyone would live and work in a clean, safe, and enjoyable environment.</p>
            <a class="btn btn-primary learn_btn" href="{{ 'about_us' }}">{{ __('Learn More') }}</a>
        </div>
        <div class="col-7">
            <img src="images/home/for-you.jpg" class="img-fluid">
        </div>
    </div>
    <div class="row2">
        <div class="col-6">
            <img src="images/home/services.jpg" class="img-fluid">
        </div>
        <div class="services">
            <h5 class="for-you2">Services</h5>
            <h2 class="title2">Longing for <br>Cleanliness? Easy.</h2>
            <p class="for-you-text">Sweep provides quality cleaning and sanitation services ready for you to avail.</p>
            <a class="btn btn-primary learn_srvbtn" href="{{ 'about_us' }}">{{ __('Learn More') }}</a>
        </div>
    </div>
</div>
<!-- emd has some bugs -->

<div class="faqs_con">
        <h3 class="faqs_title">
            Frequently Asked Questions
        </h3>
        <table class="table table-hover faqs_table">
            <tbody>
                <tr>
                    <td class="faqs_row"> 
                        Q: <b>How to book a cleaning service?</b>
                        <br>
                        A:
                    </td>
                </tr>
                <tr>
                    <td class="faqs_row">
                        Q: <b>Can I cancel a booked service?</b>
                        <br>
                        A:
                    </td>
                </tr>
                <tr>
                    <td class="faqs_row">
                        Q: <b>How long a cleaning service will last?</b>
                        <br>
                        A:
                    </td>
                </tr>
                <tr>
                    <td class="faqs_row">
                        Q: <b>Is SWEEP safe?</b>
                        <br>
                        A:
                    </td>
                </tr>
                <tr>
                    <td class="faqs_row">
                        Q: <b>How to pay a booked service?</b>
                        <br>
                        A:
                    </td>
                </tr>
                <tr>
                    <td class="faqs_row">
                        Q: <b>What are the cleaning services offered?</b>
                        <br>
                        A:
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

<div class="download">
    <div class="row3">
        <div class="dcont">
            <h2 class="dtitle">Download our App</h2>
                <p class="d-text">Download the app and get your homes clean with just a click of a button. Now available on the Google Play Store.</p>
                <a class="btn btn-primary down_btn" href="{{ 'about_us' }}">{{ __('Download Now') }}</a>
        </div>
    </div>   
</div>

<div class="footer">
        <div class="sweep-title">
            SWEEP © 2021. All Rights Reserved.
        </div>
</div>

    
</body>
@endsection