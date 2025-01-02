<?php get_header(); ?>

<main>
    <section class="about">
        <div class="container">
            <h2>About Tony, Your QuickBooks ProAdvisor</h2>
            <p>I've worked in both blue-collar and white-collar fields, so I understand that whether you're a construction worker, in another trade, an IT professional, a truck driver, or a freelancer—if you work for yourself or have a small company, you need proper bookkeeping. Let me, a QuickBooks ProAdvisor Advanced bookkeeper, assist you with your bookkeeping needs.</p>
            <a href="<?php echo site_url('/about/'); ?>" class="btn btn--blue">Learn More About Tony</a>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="service-item">
                    <h3>QuickBooks Cleanup: Get ready for tax time!</h3>
                    <p>Ensure your QuickBooks Online file is accurate and organized for tax season. I'll identify and correct errors, reconcile accounts, and categorize transactions, saving you time and stress.</p>
                    <a href="<?php echo site_url('/services/'); ?>" class="btn btn--blue">Explore All Services</a>
                </div>

                <div class="service-item">
                    <h3>Monthly Bookkeeping</h3>
                    <p>Stay on top of your finances with comprehensive monthly bookkeeping services. I'll handle transaction categorization, bank reconciliation, and financial reporting, giving you peace of mind and freeing up more time to focus on your business.</p>
                    <a href="<?php echo site_url('/services/'); ?>" class="btn btn--blue">Explore All Services</a>
                </div>

                <div class="service-item">
                    <h3>Accounts Payable and Accounts Receivable Management</h3>
                    <p>Streamline your cash flow and improve efficiency. I'll ensure timely payments, accurate invoicing, and efficient collections, helping you maintain a healthy financial position.</p>
                    <a href="<?php echo site_url('/services/'); ?>" class="btn btn--blue">Explore All Services</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>