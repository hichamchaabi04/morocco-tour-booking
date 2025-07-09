<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camel Essaouira - Horse and Camel Ride Reservations</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">        
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                    <div class="logo-icon">🐪</div>
                    <h2>CAMEL ESSAOUIRA</h2>
                </div>
                <nav class="nav">
                    <ul class="nav-menu">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#Activities">Activities</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <button class="cta-button" data-open-modal="true">Book Now</button>
                </nav>
                <div class="mobile-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <div class="hero-image">
        <img src="{{ asset('images/camels.jpg') }}" alt="A group riding camels in the desert at sunset">
    </div>

    <section class="Essaouira-hero">
        <div class="container">
            <h1>Best Experience Camel Ride in Essaouira</h1>
            <p>"Saddle up for a camel ride in Essaouira where the city's vibrant spirit meets the tranquility of the
                desert, creating an unforgettable symphony of sights and sounds."</p>
            <button class="cta-button" data-open-modal="true">Book Now</button>
        </div>
    </section>

    <section class="Essaouira-rides-section">
        <div class="container">
            <h2>Essaouira Camel Rides</h2>
            <div class="rides-grid">
                <div class="ride-card">
                    <div class="ride-card-image">
                        <img src="{{ asset('images/camels1.avif') }}" alt="Camel ride and quad biking in Agafay Desert">
                        <span class="special-offer-tag">Special Offer 20% OFF</span>
                    </div>
                    <div class="ride-card-content">
                        <h3>Experience Camel Ride in Essaouira Coastal Dunes</h3>
                        <div class="duration">⏱️ 3 HOURS</div>
                        <p>Discover the thrilling landscapes of Essaouira's vast coastal dunes and expansive beaches.
                            This adventure combines the traditional charm of a camel trek with the adrenaline of through
                            the sandy 'mountains' and open stretches near the ocean. A perfect blend of excitement and
                            natural beauty on Essaouira's wild side</p>
                    </div>
                    <div class="ride-card-footer">
                        <div class="ride-card-price">
                            <span class="old-price">€50.00</span>€40.00
                        </div>
                        <button class="cta-button" data-open-modal="true" data-activity-type="camel" data-duration="3" data-price-per-hour="20.00">Book Now</button>
                    </div>
                </div>

                <div class="ride-card">
                    <div class="ride-card-image">
                        <img src="{{ asset('images/camels2.jpg') }}" alt="Camel ride in Agafay Desert during sunset">
                    </div>
                    <div class="ride-card-content">
                        <h3>Essaouira Sunset Camel Ride: Beach & Dunes Panorama</h3>
                        <div class="duration">⏱️ 2 HOURS</div>
                        <p>Saddle up for a magical sunset journey along Essaouira's famous beach and into its rolling
                            sandy dunes. As the sun dips below the Atlantic horizon, you'll experience breathtaking
                            coastal views. This serene ride offers a peaceful escape, perfectly blending the ocean's
                            tranquility with the unique charm of the nearby sand 'mountains</p>
                    </div>
                    <div class="ride-card-footer">
                        <div class="ride-card-price">€30.00</div>
                        <button class="cta-button" data-open-modal="true" data-activity-type="camel" data-duration="2" data-price-per-hour="15.00">Book Now</button>
                    </div>
                </div>

                <div class="ride-card">
                    <div class="ride-card-image">
                        <img src="{{ asset('images/camels3.jpg') }}" alt="horse ride in Palmeraie Essaouira">
                    </div>
                    <div class="ride-card-content">
                        <h3>Horse Ride along Essaouira's Wild Atlantic Beaches</h3>
                        <div class="duration">⏱️ 1 HOUR</div>
                        <p>Enjoy a classic camel ride directly along Essaouira's picturesque Atlantic shoreline. Feel
                            the ocean breeze as you leisurely traverse the golden sands, with the waves gently lapping
                            nearby. This experience offers stunning sea views and a true sense of calm, ideal for those
                            wanting a quintessential Essaouira beach adventure</p>
                    </div>
                    <div class="ride-card-footer">
                        <div class="ride-card-price">€20.00</div>
                        <button class="cta-button" data-open-modal="true" data-activity-type="cheval" data-duration="1" data-price-per-hour="20.00">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Essaouira-rides-section">
        <div class="container">
            <h2>Essaouira Horse Rides</h2>
            <div class="rides-grid">
                <div class="ride-card">
                    <div class="ride-card-image">
                        <img src="{{ asset('images/cheval2.jpg') }}" alt="Camel ride and quad biking in Agafay Desert">
                        <span class="special-offer-tag">Special Offer 20% OFF</span>
                    </div>
                    <div class="ride-card-content">
                        <h3>Experience Horse Ride in Essaouira Coastal Dunes</h3>
                        <div class="duration">⏱️ 3 HOURS</div>
                        <p>Discover the thrilling landscapes of Essaouira's vast coastal dunes and expansive beaches.
                            This adventure combines the traditional charm of a horse trek with the adrenaline of through
                            the sandy 'mountains' and open stretches near the ocean. A perfect blend of excitement and
                            natural beauty on Essaouira's wild side</p>
                    </div>
                    <div class="ride-card-footer">
                        <div class="ride-card-price">
                            <span class="old-price">€40.00</span>€35.00
                        </div>
                        <button class="cta-button" data-open-modal="true" data-activity-type="cheval" data-duration="3" data-price-per-hour="35.00">Book Now</button>
                    </div>
                </div>

                <div class="ride-card">
                    <div class="ride-card-image">
                        <img src="{{ asset('images/cheval1.jpg') }}" alt="Camel ride in Agafay Desert during sunset">
                    </div>
                    <div class="ride-card-content">
                        <h3>Essaouira Sunset Camel Ride: Beach & Dunes Panorama</h3>
                        <div class="duration">⏱️ 2 HOURS</div>
                        <p>Saddle up for a magical sunset journey along Essaouira's famous beach and into its rolling
                            sandy dunes. As the sun dips below the Atlantic horizon, you'll experience breathtaking
                            coastal views. This serene ride offers a peaceful escape, perfectly blending the ocean's
                            tranquility with the unique charm of the nearby sand 'mountains</p>
                    </div>
                    <div class="ride-card-footer">
                        <div class="ride-card-price">€25.00</div>
                        <button class="cta-button" data-open-modal="true" data-activity-type="cheval" data-duration="2" data-price-per-hour="25.00">Book Now</button>
                    </div>
                </div>

                <div class="ride-card">
                    <div class="ride-card-image">
                        <img src="{{ asset('images/cheval3.jpeg') }}" alt="cheval ride in Palmeraie Essaouira">
                    </div>
                    <div class="ride-card-content">
                        <h3>Horse Ride along Essaouira's Wild Atlantic Beaches</h3>
                        <div class="duration">⏱️ 1 HOUR</div>
                        <p>Enjoy a classic cheval ride directly along Essaouira's picturesque Atlantic shoreline. Feel
                            the ocean breeze as you leisurely traverse the golden sands, with the waves gently lapping
                            nearby. This experience offers stunning sea views and a true sense of calm, ideal for those
                            wanting a quintessential Essaouira beach adventure</p>
                    </div>
                    <div class="ride-card-footer">
                        <div class="ride-card-price">€15.00</div>
                        <button class="cta-button" data-open-modal="true" data-activity-type="cheval" data-duration="1" data-price-per-hour="15.00">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

 
    @include('partials.reservation_modal')

    
        <script src="{{ asset('js/main.js') }}"></script>
    
</body>

</html>