<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swiper Slider</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 50px 20px;
        }
        .heading {
            margin-bottom: 20px;
        }
        .swiper-container {
            overflow: hidden;
            padding: 20px 0;
        }
        .swiper-slide {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .swiper-slide img {
            width: 100%;
            height: auto;
            display: block;
        }
        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 15px;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            font-size: 14px;
        }
        .swiper-button-next, .swiper-button-prev {
            background: rgba(0, 0, 0, 0.6);
            color: white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
        .nav-buttons {
            display: flex;
            gap: 10px;
            justify-content: flex-start;
            margin-top: 20px;
        }
        .nav-buttons button {
            width: 40px;
            height: 40px;
            border: none;
            background: #0056b3;
            color: white;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4 class="heading">BLOGS</h4>
        <h1>Ensuring Long-Term Success</h1>
        <p>Explore how innovative logistics solutions can streamline operations...</p>
        
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/images/index/s1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/index/s2.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/index/s1.png" alt="">
                </div>
            </div>
        </div>
        
        <!-- Custom Navigation Buttons -->
        <div class="nav-buttons">
            <button id="prevSlide">&#8592;</button>
            <button id="nextSlide">&#8594;</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 2.5,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: '#nextSlide',
                prevEl: '#prevSlide',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 2.5,
                }
            }
        });
    </script>
</body>
</html>
