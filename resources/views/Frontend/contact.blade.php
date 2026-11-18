@extends('layouts.frontend')
@section('title')
    Contact Us | Home Secure Pro
@endsection
@section('content')
    <style>
        .post-entry h2 {
            font-size: 20px;
        }
    </style>
    <div class="page-header bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Contact Us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section Start -->
    <section class="modern-contact-section">
        <div class="container">
            <div class="contact-wrapper">

                <!-- Contact Card -->
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-content">
                        <span>Our Location</span>
                        <h3>Visit Our Office</h3>
                        <p>
                            9620 Hillock Ct, Burke VA, 22015
                        </p>
                    </div>
                </div>


                <!-- Contact Card -->
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <div class="contact-content">
                        <span>Phone Number</span>
                        <h3>Call Anytime</h3>
                        <p>
                            <a href="tel:+18443000035">
                                +1 (844) 300-0035
                            </a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    <style>
        /*=============================
                                         Contact Section CSS
                                        =============================*/

        .modern-contact-section {
            padding: 100px 0;
            background: #f5f7fb;

        }

        .contact-wrapper {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            max-width: 900px;
            margin: 0 auto;

        }

        .contact-card {
            background: #ffffff;
            padding: 40px 35px;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid #edf0f5;

        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
        }

        .contact-card::before {
            content: '';
            position: absolute;
            top: -40px;
            right: -40px;
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #ffb400, #fcde70);
            border-radius: 50%;
            opacity: 0.08;
        }

        .contact-icon {
            width: 75px;
            height: 75px;
            background: linear-gradient(135deg, #ffb400, #fcde70);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            box-shadow: 0 10px 25px rgba(255, 123, 0, 0.25);
        }

        .contact-icon i {
            font-size: 30px;
            color: #ffffff;
        }

        .contact-content span {
            font-size: 15px;
            font-weight: 600;
            color: #fcde70;
            display: inline-block;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .contact-content h3 {
            font-size: 26px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 15px;
        }

        .contact-content p {
            font-size: 17px;
            line-height: 1.8;
            color: #6b7280;
            margin: 0;
        }

        .contact-content p a {
            color: #6b7280;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .contact-content p a:hover {
            color: #fcde70;
        }

        /* Responsive */

        @media (max-width: 991px) {
            .contact-wrapper {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 767px) {

            .modern-contact-section {
                padding: 70px 0;
            }

            .contact-wrapper {
                grid-template-columns: 1fr;
            }

            .contact-card {
                padding: 35px 25px;
            }

            .contact-content h3 {
                font-size: 22px;
            }
        }
    </style>
@endsection
