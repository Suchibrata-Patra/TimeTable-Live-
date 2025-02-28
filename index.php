<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Application</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_balance_wallet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="hero_page.css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  </head>
  <body>
    <?php require('header.php'); ?>
    
    <!-- Hero -->
    <section class="hero" style="margin-top:5%;">
      <div class="container">
        <div class="hero-content">
          <h1 class="hero-heading text-xxl" style="color:black;">
          <span style="color:red;">Effortless</span> & Seamless Rescheduling, Redefined.
          </h1>
          <p class="hero-text">
          Effortlessly Create Provisional Schedules in Just a Few Clicks! Say goodbye to hours of tedious planning—allocate classes seamlessly and save your valuable time.
        </p>
          <div class="hero-buttons">
            <a href="https://timetable.theapplication.in/scheduler.php" class="btn btn-primary">Get Started</a>
            <a href="https://forms.gle/VNj1XhtyzkNviX8j7" class="btn"
              ><i class="fas fa-laptop"></i> Register</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- Video Section -->
    <!-- <section class="video bg-black">
      <div class="container-sm">
        <h2 class="video-heading text-xl text-center">
          See how it works and get started in less than 2 minutes
        </h2>
        <div class="video-content">
          <a href="#">
            <img
              src="images/video-preview.png"
              alt="video"
              class="video-preview"
            />
          </a>

          <a href="#" class="btn btn-primary">Get Started</a>
        </div>
      </div>
    </section> -->
    <!-- Testimonials -->
    <!-- <section class="testimonials bg-dark">
      <div class="container">
        <h3 class="testimonials-heading text-xl">
          Don't just take our word for it, see the success stories from
          businesses just like yours.
        </h3>
        <div class="testimonials-grid">
          <div class="card">
            <p>
              “Our business has seen a significant increase in productivity
              since we started using the Growth app.”
            </p>

            <p>Katherine Smith</p>
            <p>Capodopera</p>
          </div>

          <div class="card">
            <p>
              “As a small business owner, it's important to have a tool that can
              help me keep track of everything. The Growth app has been a
              lifesaver for me, allowing me to manage my contacts, schedule
              appointments, and track progress all in one place..”
            </p>

            <p>Johnathan Lee</p>
            <p>Red Bolt</p>
          </div>

          <div class="card">
            <p>
              “The dashboards and reporting feature has provided valuable
              insights into our performance and helped us make data-driven
              decisions. It's a game changer for us.”
            </p>

            <p>David Wilson</p>
            <p>Slide</p>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Pricing -->
    <section class="pricing">
      <div class="container-sm">
        <h3 class="pricing-heading text-xl text-center">Pricing</h3>
        <p class="pricing-subheading text-md text-center">
          Start free and scale while you grow. No hidden fees. Unlimited users
          for free.
        </p>
        <div class="pricing-grid">
          <!-- Pricing Card 1 -->
          <div class="card bg-light">
            <div class="pricing-card-header">
              <h4 class="pricing-heading text-xl">Basic</h4>
              <p class="pricing-card-subheading">
                All kinds of basic features are included in this.
              </p>
              <p class="pricing-card-price">
                <span class="text-xl">Free</span>
                *No credit card needed
              </p>
            </div>
            <div class="pricing-card-body">
              <ul>
                <li><i class="fas fa-check"></i>2 Provisional Routine Generation / Day</li>
                <li>
                  <i class="fas fa-check"></i>To be used between 10:00 - 10:30 a.m
                </li>
                <li><i class="fas fa-check"></i>No Teacher update @ academic Year.</li>
                <li>
                  <i class="fas fa-check"></i>Routine modification (Unlimited).
                </li>
              </ul>
              <a href="#" class="btn btn-primary btn-block">Get Started</a>
            </div>
          </div>

          <!-- Pricing Card 2 -->
          <div class="card bg-black">
            <div class="pricing-card-header">
              <h4 class="pricing-card-heading text-xl">Plus+</h4>
              <p class="pricing-card-subheading">
                More Advanced Features.
              </p>
              <p class="pricing-card-price">
                <span class="text-xl">₹ 1</span> / Routine Genereated
              </p>
            </div>
            <div class="pricing-card-body">
              <p>Everything from the free plan Plus + :</p>
              <ul>
                <li><i class="fas fa-check"></i>Provisional Routine History.</li>
                <li><i class="fas fa-check"></i>Capable of scheduling routines with precise period-level accuracy.</li>
                <li><i class="fas fa-check"></i>Teacher Details Update (Unlimited).</li>
              </ul>
              <a href="#" class="btn btn-primary btn-block">Get Started</a>
            </div>
          </div>
        </div>
        <p class="pricing-footer text-center">
        All prices are listed in INR and are billed monthly. Applicable taxes will be added during checkout. Additionally, a platform fee of 1.7% of the subscription fees (processed by Razorpay) will apply.
        </p>
      </div>
    </section>

    <!-- FAQ -->
    <!-- <section class="faq bg-light">
      <div class="container-sm">
        <h3 class="text-xl text-center">Frequently Asked Questions</h3>
        <div class="faq-content">
          <div class="faq-group">
            <div class="faq-group-header">
              <h4 class="text-md">
                How does the contact management feature help me keep track of
                clients and partners?
              </h4>
              <i class="fas fa-minus"></i>
            </div>
            <div class="faq-group-body open">
              <p>
                Keep track of your contacts, gain valuable insights, analyse
                live data and performance metrics.
              </p>
            </div>
          </div>

          <div class="faq-group">
            <div class="faq-group-header">
              <h4 class="text-md">
                Can I customize the dashboards and reporting feature to display
                the metrics that are most important to my business?
              </h4>
              <i class="fas fa-minus"></i>
            </div>
            <div class="faq-group-body">
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad
                culpa enim blanditiis rem ipsum aliquam, unde iste fugit
                praesentium eos?
              </p>
            </div>
          </div>

          <div class="faq-group">
            <div class="faq-group-header">
              <h4 class="text-md">
                How does the task management feature help me delegate tasks to
                my team and track progress?
              </h4>
              <i class="fas fa-minus"></i>
            </div>
            <div class="faq-group-body">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Incidunt, a! Quaerat, voluptatum. Animi molestias ex quasi
                explicabo minima perferendis commodi.
              </p>
            </div>
          </div>

          <div class="faq-group">
            <div class="faq-group-header">
              <h4 class="text-md">
                Can I collaborate with my team in real-time using all tools?
              </h4>
              <i class="fas fa-minus"></i>
            </div>
            <div class="faq-group-body">
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Obcaecati doloremque assumenda aut dolorem recusandae quibusdam
                aliquid. Repellat animi quam vitae.
              </p>
            </div>
          </div>

          <div class="faq-group">
            <div class="faq-group-header">
              <h4 class="text-md">Is the app available on all devices?</h4>
              <i class="fas fa-minus"></i>
            </div>
            <div class="faq-group-body">
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Obcaecati doloremque assumenda aut dolorem recusandae quibusdam
                aliquid. Repellat animi quam vitae.
              </p>
            </div>
          </div>

          <div class="faq-group">
            <div class="faq-group-header">
              <h4 class="text-md">
                How does the app help me stay compliant when working with
                freelancers and contractors?
              </h4>
              <i class="fas fa-minus"></i>
            </div>
            <div class="faq-group-body">
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Obcaecati doloremque assumenda aut dolorem recusandae quibusdam
                aliquid. Repellat animi quam vitae.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Footer -->
    <footer class="footer bg-black">
      <div class="container">
        <div class="footer-grid">
          <div>
            <!-- <a href="#">
              <img src="https://upload.wikimedia.org/wikipedia/commons/6/63/The_application.in_navbara_icon.png" style="background-color:white;" alt="logo" />
            </a> -->
            <div class="card">
              <h4>Subscribe to Newsletter</h4>
              <p class="text-sm">
                Subscribe now to receive tips on how to take your business to
                the next level.
              </p>
              <form>
                <input type="email" id="email" placeholder="Enter your email" />
                <button type="submit" class="btn btn-primary btn-block">
                  Subscribe
                </button>
              </form>
            </div>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-twitter"></i>
          </div>
          <div>
            <h4>Company</h4>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Process</a></li>
              <li><a href="#">Join Our Team</a></li>
            </ul>
          </div>
          <div>
            <h4>Resources</h4>
            <ul>
              <li><a href="#">News</a></li>
              <li><a href="#">Research</a></li>
              <li><a href="#">Recent Projects</a></li>
            </ul>
          </div>
          <div>
            <h4>Contact</h4>
            <ul>
              <li>
                <a href="#">the.application.in@gmail.com</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="js/main.js"></script>
  </body>
</html>
