<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>identical-web-counter</title>
    <meta name="description" content="Lovable Generated Project" />
    <meta name="author" content="Lovable" />

    <meta property="og:title" content="identical-web-counter" />
    <meta property="og:description" content="Lovable Generated Project" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://lovable.dev/opengraph-image-p98pqg.png" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@lovable_dev" />
    <meta name="twitter:image" content="https://lovable.dev/opengraph-image-p98pqg.png" />
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <style>
      /* Custom CSS for Counter Section */
      .counter-section {
        background-color: #f8faff;
        padding: 80px 0;
      }
      
      .counter-box {
        padding: 20px;
        border-radius: 8px;
        transition: all 0.3s ease;
        margin-bottom: 30px;
      }
      
      .counter-box:hover {
        transform: translateY(-5px);
      }
      
      .icon-box {
        background-color: #4e73df;
        color: white;
        width: 70px;
        height: 70px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
      }
      
      .counter-value {
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 5px;
        color: #2e384d;
      }
      
      .counter-title {
        color: #6c757d;
        font-size: 16px;
        font-weight: 500;
        text-transform: uppercase;
      }
      
      .section-heading {
        margin-bottom: 50px;
      }
      
      .section-heading h2 {
        font-weight: 700;
        margin-bottom: 15px;
        color: #2e384d;
      }
      
      .section-heading p {
        color: #6c757d;
        font-size: 18px;
        max-width: 700px;
        margin: 0 auto;
      }
    </style>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <!-- Header Section -->
    <header class="py-5">
      <div class="container">
        <div class="text-center">
          <h1 class="fw-bold">Welcome to Our Service</h1>
          <p class="lead text-muted">We provide exceptional logistics and distribution services with years of industry experience.</p>
        </div>
      </div>
    </header>
    
    <!-- Counter Section -->
    <section class="counter-section">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Our Numbers Speak</h2>
          <p>We have achieved remarkable milestones over the years through dedication and excellence.</p>
        </div>
        
        <div class="row text-center">
          <!-- Counter 1 -->
          <div class="col-md-3 col-sm-6">
            <div class="counter-box">
              <div class="icon-box">
                <i class="bi bi-box fs-3"></i>
              </div>
              <h2 class="counter-value" data-count="541">0</h2>
              <p class="counter-title">Distribution Centers</p>
            </div>
          </div>
          
          <!-- Counter 2 -->
          <div class="col-md-3 col-sm-6">
            <div class="counter-box">
              <div class="icon-box">
                <i class="bi bi-truck fs-3"></i>
              </div>
              <h2 class="counter-value" data-count="35">0</h2>
              <p class="counter-title">Years Of Experience</p>
            </div>
          </div>
          
          <!-- Counter 3 -->
          <div class="col-md-3 col-sm-6">
            <div class="counter-box">
              <div class="icon-box">
                <i class="bi bi-building fs-3"></i>
              </div>
              <h2 class="counter-value" data-count="147">0</h2>
              <p class="counter-title">Warehouses</p>
            </div>
          </div>
          
          <!-- Counter 4 -->
          <div class="col-md-3 col-sm-6">
            <div class="counter-box">
              <div class="icon-box">
                <i class="bi bi-people fs-3"></i>
              </div>
              <h2 class="counter-value" data-count="678">0</h2>
              <p class="counter-title">Happy Clients</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Services Section -->
    <section class="py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="fw-bold">Our Services</h2>
          <p class="lead text-muted">Discover how our distribution network can help your business grow.</p>
        </div>
      </div>
    </section>
    
    <!-- jQuery Counter Animation Script -->
    <script>
      $(document).ready(function() {
        // Check if element is in viewport
        function isInViewport(element) {
          const rect = element.getBoundingClientRect();
          return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
          );
        }
        
        // Counter animation function
        function startCounterAnimation() {
          $('.counter-value').each(function() {
            const $this = $(this);
            const countTo = $this.attr('data-count');
            
            if (isInViewport(this) && !$this.hasClass('animated')) {
              $this.addClass('animated');
              
              $({countNum: 0}).animate({
                countNum: countTo
              }, {
                duration: 2500,
                easing: 'swing',
                step: function() {
                  $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                  $this.text(this.countNum + '+');
                }
              });
            }
          });
        }
        
        // Start animation on page load
        startCounterAnimation();
        
        // Check on scroll
        $(window).scroll(function() {
          startCounterAnimation();
        });
      });
    </script>
    
    <!-- IMPORTANT: DO NOT REMOVE THIS SCRIPT TAG OR THIS VERY COMMENT! -->
    <script src="https://cdn.gpteng.co/gptengineer.js" type="module"></script>
  </body>
</html>