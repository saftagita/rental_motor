@extends('layout.app')

@section('title', 'About Us')

@push('styles')
    <style>
        /* --- KONTEN ABOUT --- */
        .title-area {
            text-align: center;
            margin-top: 40px;
        }

        .title-area h2 {
            font-size: 22px;
            margin: 0;
            color: #222;
        }

        .title-area h1 {
            margin-top: 10px;
            font-size: 45px;
            font-weight: 700;
        }

        .line {
            width: 70px;
            height: 2px;
            background: #ccc;
            margin: 20px auto;
        }

        .features {
            width: 80%;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-top: 40px;
        }

        .feature {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .icon-circle {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            border: 3px solid #01022e;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .feature-title {
            font-size: 23px;
            font-weight: bold;
            margin: 0;
        }

        .feature-desc {
            color: #444;
            font-size: 15px;
            margin-top: 5px;
            line-height: 1.6;
        }

        .rent-btn {
            display: block;
            width: 170px;
            padding: 15px;
            background: #01022e;
            border-radius: 50px;
            color: white;
            font-weight: bold;
            margin: 60px auto;
            border: none;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .wa-btn {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background: #01022e;
            padding: 16px 28px;
            color: white;
            font-weight: bold;
            border-radius: 50px;
            text-decoration: none;
            font-size: 16px;
        }
    </style>
@endpush

@section('content')
    <!-- TITLE -->
    <div class="title-area">
        <h2>Why Use Our Services</h2>
        <h1>Rent a Motorcycle at AS Moto Go?</h1>
        <div class="line"></div>
    </div>

    <!-- FEATURES GRID -->
    <div class="features">

        <!-- 1 -->
        <div class="feature">
            <div class="icon-circle">
                <svg width="28" height="28" fill="#01022e" viewBox="0 0 24 24">
                    <path d="M9 21h6v-1H9v1zm3-20C7.48 1 4 4.48 4 9c0 3.07 1.64 5.64 4 6.93V18c0
                    .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.07c2.36-1.29
                    4-3.86 4-6.93 0-4.52-3.48-8-8-8z" />
                </svg>
            </div>
            <div>
                <p class="feature-title">Free Pickup and Drop-off</p>
                <p class="feature-desc">Especially to the airport and its surrounding areas.</p>
            </div>
        </div>

        <!-- 2 -->
        <div class="feature">
            <div class="icon-circle">
                <svg width="28" height="28" fill="#01022e" viewBox="0 0 24 24">
                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0
                    1.1.9 2 2 2h14c1.1 0 2-.9
                    2-2V5c0-1.1-.9-2-2-2zm0
                    16H5V5h14v14z" />
                    <path d="M7 7h10v2H7zm0 4h10v2H7zm0 4h7v2H7z" />
                </svg>
            </div>
            <div>
                <p class="feature-title">Easy Requirements</p>
                <p class="feature-desc">Fill out the form and the unit is ready to use.</p>
            </div>
        </div>

        <!-- 3 -->
        <div class="feature">
            <div class="icon-circle">
                <svg width="28" height="28" fill="#01022e" viewBox="0 0 24 24">
                    <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2
                    .9-2 2v14c0 1.1.9 2 2
                    2h14c1.1 0 2-.9 2-2zM8.5
                    13.5l2.5 3.01L14.5
                    12l4.5 6H5l3.5-4.5z" />
                </svg>
            </div>
            <div>
                <p class="feature-title">2 Helmets + Phone Holder</p>
                <p class="feature-desc">A fragrant helmet and phone holder to make your trip easier.</p>
            </div>
        </div>

        <!-- 4 -->
        <div class="feature">
            <div class="icon-circle">
                <svg width="28" height="28" fill="#01022e" viewBox="0 0 24 24">
                    <path d="M18 2H6c-1.1 0-2 .9-2
                    2v16c0 1.1.9 2 2
                    2h12c1.1 0 2-.9
                    2-2V4c0-1.1-.9-2-2-2zm0
                    18H6V4h12v16z" />
                </svg>
            </div>
            <div>
                <p class="feature-title">Best Condition</p>
                <p class="feature-desc">The motor is guaranteed to be of high quality and fuel-efficient when in use.</p>
            </div>
        </div>

    </div>

    <a href="/booking" class="rent-btn">Rent Now</a>

    <a href="https://wa.me/628xxx" class="wa-btn">Chat Now</a>

@endsection
