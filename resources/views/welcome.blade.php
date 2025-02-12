<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{asset('/images/logo.svg')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('/images/logo.svg')}}">
    <title> Real Estate Agency </title>

    <meta name="description" content="Find your dream home with Real Estate Agency. Browse listings, buy, sell, or rent properties with ease. Expert agents, best deals, and seamless transactions.">
    <meta name="keywords" content="real estate agency, buy house, sell property, rent apartment, real estate listings, dream home, investment properties, commercial real estate, property management, luxury homes">
    <meta name="subject" content="Your Trusted Real Estate Agency">
    <meta name="summary" content="Find your dream home with Real Estate Agency. Trusted agents, best deals, and seamless transactions.">
    <meta name="url" content="{{url()->current()}}">
    <meta name="identifier-URL" content="{{url()->current()}}">
    <meta name="author" content="Real Estate Agency">
    <meta name="robots" content="index, follow">

    <meta property="og:site_name" content="Real Estate Agency">
    <meta property="og:title" content="Real Estate Agency - Find Your Dream Home">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:description" content="Find your dream home with Real Estate Agency. Browse listings, buy, sell, or rent properties with ease.">
    <meta property="og:image" content="{{asset('/images/logo.svg')}}">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{url()->current()}}">
    <meta property="twitter:title" content="Real Estate Agency - Find Your Dream Home">
    <meta property="twitter:description" content="Find your dream home with Real Estate Agency. Browse listings, buy, sell, or rent properties with ease.">
    <meta property="twitter:image" content="{{asset('/images/logo.svg')}}">

    <meta name="google-site-verification" content="YOUR_GOOGLE_VERIFICATION_CODE"/>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "RealEstateAgent",
          "name": "Real Estate Agency",
          "url": "https://real-estate-agency.thethemeai.com/",
          "logo": "https://real-estate-agency.thethemeai.com/images/logo.svg",
          "description": "Your trusted real estate agency for buying, selling, and renting properties.",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Main Street",
            "addressLocality": "Los Angeles",
            "addressRegion": "CA",
            "postalCode": "90001",
            "addressCountry": "USA"
          },
          "telephone": "+1-800-555-1234",
          "email": "contact@real-estate-agency.com",
          "sameAs": [
            "https://www.facebook.com/real-estate-agency",
            "https://twitter.com/real-estate-agency",
            "https://www.instagram.com/real-estate-agency"
          ],
        }
    </script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>

    <div id="app" class="hidden"></div>

    <div id="preloader" class="fixed top-0 start-0 w-full h-full flex justify-center items-center bg-white">
        <div class="loader"></div>
    </div>

    <script type="application/javascript">

        document.addEventListener('DOMContentLoaded', function () {
            const preloader = document.querySelector('#preloader');
            const app = document.querySelector('#app');
            app.classList.add('hidden');
            preloader.classList.add('flex');
            window.addEventListener('load', function () {
                preloader.classList.remove('flex');
                preloader.classList.add('hidden');
                app.classList.remove('hidden');
            });
        });

    </script>

</body>
</html>
