<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebForge — Digital Solutions</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

    <!-- Navigation -->
    <header>
        <nav>
            <div class="logo">
                WebForge
            </div>

            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Get a Quote</a></li>
            </ul>
        </nav>
    </header>


    <!-- Hero Section -->
    <section id="home" class="hero">

        <div class="hero-content">

            <p class="eyebrow">DIGITAL SOLUTIONS FOR MODERN BUSINESSES</p>

            <h1>
                We Build Websites
                That Grow Businesses.
            </h1>

            <p>
                From high-converting WordPress websites to custom web
                applications, we help businesses build a stronger presence online.
            </p>

            <div class="hero-buttons">
                <a href="#contact">Start a Project</a>
                <a href="#services">Explore Services</a>
            </div>

        </div>

    </section>


    <!-- Services Section -->
    <section id="services" class="services">

        <div class="section-heading">

            <p class="eyebrow">WHAT WE DO</p>

            <h2>
                Digital services built around your business.
            </h2>

            <p>
                Choose the right solution for your business and let us
                handle the technical side.
            </p>

        </div>


        <div class="service-grid">

            <!-- Service 1 -->
            <article class="service-card">

                <span class="service-number">01</span>

                <h3>WordPress Development</h3>

                <p>
                    Professional WordPress websites designed for performance,
                    usability and easy content management.
                </p>

                <a href="#contact">Learn More →</a>

            </article>


            <!-- Service 2 -->
            <article class="service-card">

                <span class="service-number">02</span>

                <h3>Custom PHP Development</h3>

                <p>
                    Custom web applications and backend systems built with
                    PHP and MySQL for businesses that need more flexibility.
                </p>

                <a href="#contact">Learn More →</a>

            </article>


            <!-- Service 3 -->
            <article class="service-card">

                <span class="service-number">03</span>

                <h3>WooCommerce</h3>

                <p>
                    E-commerce stores with product management, payments,
                    orders and a smooth customer experience.
                </p>

                <a href="#contact">Learn More →</a>

            </article>


            <!-- Service 4 -->
            <article class="service-card">

                <span class="service-number">04</span>

                <h3>Website Maintenance</h3>

                <p>
                    Keep your website secure, updated and performing reliably
                    with ongoing technical support.
                </p>

                <a href="#contact">Learn More →</a>

            </article>

        </div>

    </section>


    <!-- Simple CTA -->
    <section id="contact" class="contact-section">

    <div class="contact-heading">

        <p class="eyebrow">HAVE A PROJECT IN MIND?</p>

        <h2>Let's build something together.</h2>

        <p>
            Tell us about your project and we'll get back to you
            with the right solution.
        </p>

    </div>


    <form class="quote-form" method="POST" action="submit.php">

        <h3>Tell us about your project</h3>

        <p class="form-intro">
            Fill out the form below and we'll get back to you shortly.
        </p>

        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Your name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="you@example.com" required>

        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone" placeholder="+92 300 1234567">

        <label for="service">Service</label>
        <select name="service" id="service">
            <option value="web_design">Web Design</option>
            <option value="seo">SEO</option>
            <option value="digital_marketing">Digital Marketing</option>
            <option value="branding">Branding</option>
        </select>

        <label for="budget">Budget</label>
        <input type="number" name="budget" id="budget" placeholder="e.g. 50000" required>

        <label for="message">Message</label>
        <textarea
            name="message"
            id="message"
            placeholder="Tell us a little about your project..."
            rows="6"
            required
        ></textarea>

        <input type="submit" value="Send Project Request →">

    </form>

</section>


    <!-- Footer -->
    <footer>

        <p>
            © 2026 WebForge. All rights reserved.
        </p>

    </footer>

</body>
</html>