<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Required meta tags --}}
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>OKE | Contact Us Mail</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #0073e6;
            text-align: left;
        }

        .details {
            margin-bottom: 15px;
            text-align: left;
        }

        .details strong {
            display: inline-block;
            width: 150px; /* Adjust width as needed */
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }

        .logo {
            width: 180px;
            height: 120px;
            margin-bottom: 5px;
        }

        .logo-title {
            font-size: 18px;
            color: #0073e6; /* Match the color of h2 */
            margin-bottom: 20px; /* Space below the title */
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Contact Us Section -->
        <div class="contact">
            <img src="{{ $message->embed(public_path('assets/images/home/logo.png')) }}" alt="OKE_Logo" class="logo">

            <h2>Contact Us Details:</h2>

            <p class="details"><strong>Name:</strong> {{ $mailData['name'] ?? 'N/A' }}</p>
            <p class="details"><strong>Email:</strong> {{ $mailData['email'] ?? 'N/A' }}</p>
            <p class="details"><strong>Phone No:</strong> {{ $mailData['phone'] ?? 'N/A' }}</p>
            <p class="details"><strong>Enquiry Type:</strong> {{ $mailData['enquiry_type'] ?? 'N/A' }}</p>
            <p class="details"><strong>Message:</strong> {{ $mailData['message'] ?? 'N/A' }}</p>

            <p>Thank you for reaching out to us. We will respond to your inquiry as soon as possible.</p>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <p style="font-size: 12px; color: #666;">
                Copyright © {{ date('Y') }}
                <a href="{{ route('home') }}" target="_blank">OKE</a>. All Rights Reserved.
            </p>
        </div>
    </div>
</body>

</html>
