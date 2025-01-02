<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/hardhat-laptop.png') ?>);"></div>
        <div class="hero-content">
            <h1>Focus on Your Passion, Not Your Paperwork</h1>
            <h2>For SaaS Companies & Blue-Collar Businesses</h2>
            <p>We'll handle the numbers so you can thrive.</p>
            <a href="#services" class="btn-primary">Schedule a Free Consultation</a>
        </div>
    </section>

    <section class="usp">
        <div class="container">
            <h2>Whether you're at a Truck Stop, the Work Site, or in the Cloud, We've Got Your Bookkeeping Covered</h2>
            <p>I've been there. Long hauls, tight deadlines, complicated invoices – I understand the challenges of running a business on the road. But I also know the ins and outs of SaaS financials, from recurring revenue to subscription management. That's why I created a bookkeeping service that caters to both worlds.</p>
            <p>Here's how I can help:</p>
            <ul>
                <li><strong>For Truckers and Contractors:</strong>
                    <ul>
                        <li>Accurate mileage tracking to maximize deductions.</li>
                        <li>Organized expense management to keep your finances in check.</li>
                        <li>Simplified tax preparation to minimize stress and ensure compliance.</li>
                    </ul>
                </li>
                <li><strong>For SaaS Companies:</strong>
                    <ul>
                        <li>Seamless subscription reconciliation for accurate revenue tracking.</li>
                        <li>Automated financial reporting to gain key insights into your business performance.</li>
                        <li>Expert guidance on revenue recognition and SaaS-specific accounting standards.</li>
                    </ul>
                </li>
                <li><strong>For Everyone:</strong>
                    <ul>
                        <li>QuickBooks Online expertise to streamline your bookkeeping processes.</li>
                        <li>Accurate and efficient bookkeeping to free up your time.</li>
                        <li>Personalized financial solutions tailored to your unique needs.</li>
                    </ul>
                </li>
            </ul>
            <a href="<?php echo site_url('/services/'); ?>" class="btn btn--blue">Explore All Services</a>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="service-item">
                        <h3>QuickBooks Cleanup: Get ready for tax time!</h3>
                        <p>Ensure your QuickBooks Online file is accurate and organized for tax season. I'll identify and correct errors, reconcile accounts, and categorize transactions, saving you time and stress.</p>
                        <a href="<?php echo site_url('/services/'); ?>" class="btn btn--blue">Explore All Services</a>
                    </div>
                </div>
                <div class="mySlides fade">
                    <div class="service-item">
                        <h3>Monthly Bookkeeping</h3>
                        <p>Stay on top of your finances with comprehensive monthly bookkeeping services. I'll handle transaction categorization, bank reconciliation, and financial reporting, giving you peace of mind and freeing up more time to focus on your business.</p>
                        <a href="<?php echo site_url('/services/'); ?>" class="btn btn--blue">Explore All Services</a>
                    </div>
                </div>
                <div class="mySlides fade">
                    <div class="service-item">
                        <h3>Accounts Payable and Accounts Receivable Management</h3>
                        <p>Streamline your cash flow and improve efficiency. I'll ensure timely payments, accurate invoicing, and efficient collections, helping you maintain a healthy financial position.</p>
                        <a href="<?php echo site_url('/services/'); ?>" class="btn btn--blue">Explore All Services</a>
                    </div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>