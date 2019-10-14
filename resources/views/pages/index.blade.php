<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                The Lancers Coding
            </a>
        </nav>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-2 mx-auto my-5">
                <h1 class="display-5 font-weight-normal">Services</h1>
                <p class="lead font-weight-normal">We provide you with our outstanding services to make your business easier to manage</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-warning" type="button" id="button-addon2">NOTIFY US</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services section-->
        <div class="container">

            <div class="row">
                <div class="col-sm-12 text-center">
                    <h5 class="card-title font-weight-bold">Our Services</h5>
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Web App Development</h5>
                        <p class="card-text">Develop attractive website and web application with ease of use and high security</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Mobile App Development</h5>
                        <p class="card-text">Develop mobile application for iOS and Android</p>
                    </div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Web Hosting</h5>
                        <p class="card-text">Starting from domain management to web and email hosting, you can have them all here at once</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Consultant</h5>
                        <p class="card-text">You can consult with our experts in order to make your system more effective with low expenses</p>
                    </div>
                    </div>
                </div>
            </div>
            <br/>
            
        </div>
        
        <br/>
        <!-- reason choose us section-->
        <div class="container">

            <div class="row">
                <div class="col-sm-12 text-center">
                    <h5 class="card-title font-weight-bold">Why should you choose us?</h5>
                    <p class="card-text">These are reasons you should choose our services:</p>
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Beautiful</h5>
                        <p class="card-text">Beautiful designs that make your website and app more attractive to reflect the value of your business</p>
                        <a href="#" class="btn btn-warning">More Detail</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Security</h5>
                        <p class="card-text">Protect your system from various intruding such as stealing or destroying information</p>
                        <a href="#" class="btn btn-warning">More Detail</a>
                    </div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Technology</h5>
                        <p class="card-text">Equip your system with the latest technology in order to make it unique and easy to use</p>
                        <a href="#" class="btn btn-warning">More Detail</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Consultant</h5>
                        <p class="card-text">You can consult with our experts in order to make your system more effective with low expenses</p>
                        <a href="#" class="btn btn-warning">More Detail</a>
                    </div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Maintenance</h5>
                        <p class="card-text">Providing maintenance for your system toward the unexpected problems</p>
                        <a href="#" class="btn btn-warning">More Detail</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4">
        <footer class="container py-5">
            <div class="row">
                <!--<div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
                <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
                </div>-->
                <div class="col-8">
                <h5 class="font-weight-bold">About Us</h5>
                <p class="card-text">TheLancersCoding Technology, in the aim to provide new technologies to Cambodian people, was incorporated in 2019 under registration number 50006525 of Ministry of Commerce.</p>
                </div>
                <div class="col-3">
                <h5 class="font-weight-bold">Contact Us</h5>
                <p>081 23 75 46 <br/>info@thelancerscoding.com</p>
                </div>
                <div class="col-1">
                <h5 class="font-weight-bold">Social</h5>
                </div>
            </div>
        </footer>



    </body>
</html>
