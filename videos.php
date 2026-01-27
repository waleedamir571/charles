<?php include 'header.php'; ?>

<div class="site-wrapper">
    <!-- 1.1. Header section -->

    <!-- End of 1.1. Header section -->

    <!-- 1.2. Hero section -->
    <section class="Hero1">
        <?php include 'nav.php'; ?>


        <div class="container pt-50">
            <div class="row">
                <div class="col-md-6">
                    <div data-aos="fade-up">
                        <h4>videos</h4>
                        <h1>Effortless Hauling Solutions</h1>
                        <p>Knotty Logistics is built by people with experience in bulk hauling, for people who haul
                            bulk. The platform digitizes the work behind every load so haulers can operate with clarity,
                            track their work, and focus on moving material.</p>
                        <!-- <div><a href="#" class="hover1">LOGIN NOW</a></div> -->
                    </div>
                </div>
            </div>



            <div class="row justify-content-center d-none">
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="card-circle">01</div>
                        <div class="card-body">
                            <h5 class="card-title packaging">Packaging & Storage</h5>
                            <p class="card-text1 ">We understand the importance of timely delivery.</p>
                            <p class="score">94% SCORE</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="card-circle">02</div>
                        <div class="card-body">
                            <h5 class="card-title packaging">Safety & Quality</h5>
                            <p class="card-text1">We understand the importance of timely delivery.</p>
                            <p class="score">96% SCORE</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="card-circle">03</div>
                        <div class="card-body">
                            <h5 class="card-title packaging">Delivery On Time</h5>
                            <p class="card-text1">We understand the importance of timely delivery.</p>
                            <p class="score">98% SCORE</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- End of 1.2. Hero section -->
    <style>
        .header1 {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            /* background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); */
                background-color: #004AAD;
            /* border-radius: 10px; */
            color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        .tabs-container {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tab {
            padding: 15px 30px;
            background-color: #fff;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }

        .tab:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .tab.active {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
        }

        .tab i {
            font-size: 1.2rem;
        }

        .video-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .video-card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
        }

        .video-thumbnail {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .video-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .video-card:hover .video-thumbnail img {
            transform: scale(1.05);
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background-color: rgba(106, 17, 203, 0.85);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .play-button:hover {
            background-color: rgba(37, 117, 252, 0.95);
            transform: translate(-50%, -50%) scale(1.1);
        }

        .video-info {
            padding: 20px;
        }

        .video-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #2d3748;
        }

        .video-description {
            color: #718096;
            font-size: 0.95rem;
            margin-bottom: 15px;
        }

        .video-meta {
            display: none;
            justify-content: space-between;
            color: #a0aec0;
            font-size: 0.9rem;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .empty-message {
            text-align: center;
            padding: 40px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            color: #718096;
            font-size: 1.1rem;
        }

        /* footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
            color: #718096;
            font-size: 0.9rem;
        } */

        @media (max-width: 768px) {
            .video-container {
                grid-template-columns: 1fr;
            }

            .tabs-container {
                flex-direction: column;
                align-items: center;
            }

            .tab {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }

            h1 {
                font-size: 2rem;
            }
        }
    </style>

    <!-- 1.3. About-us section -->

    <body>
        <div class="header1">
            <h1><i class="fas fa-video"></i> Video Gallery</h1>
            <p class="subtitle">Click on tabs to explore different categories of videos. Each tab contains unique
                content for your enjoyment.</p>
        </div>

        <div class="tabs-container">
            <button class="tab active" data-tab="tab1">
                <i class="fas fa-music"></i> The Basics
            </button>
            <button class="tab" data-tab="tab2">
                <i class="fas fa-gamepad"></i> Faqs
            </button>
            <button class="tab" data-tab="tab3">
                <i class="fas fa-graduation-cap"></i> Guidebook
            </button>
        </div>

        <div class="container">
            <div class="row">
                <div id="tab1" class="tab-content active">
                    <div class="video-container">
                        <!-- Music Videos -->
                        <div class="video-card">
                            <div class="video-thumbnail">
                                <img src="https://img.youtube.com/vi/JGwWNGJdvx8/maxresdefault.jpg" alt="Music Video 1">
                                <div class="play-button" data-video="JGwWNGJdvx8">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Shape of You - Ed Sheeran</h3>
                                <p class="video-description">Official music video for Ed Sheeran's hit song "Shape of
                                    You" from his album ÷ (Divide).</p>
                                <div class="video-meta">
                                    <span><i class="far fa-clock"></i> 4:24</span>
                                    <span><i class="far fa-eye"></i> 5.2B views</span>
                                </div>
                            </div>
                        </div>

                        <div class="video-card">
                            <div class="video-thumbnail">
                                <img src="https://img.youtube.com/vi/kJQP7kiw5Fk/maxresdefault.jpg" alt="Music Video 2">
                                <div class="play-button" data-video="kJQP7kiw5Fk">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Despacito - Luis Fonsi ft. Daddy Yankee</h3>
                                <p class="video-description">Official video of "Despacito" by Luis Fonsi featuring Daddy
                                    Yankee. One of the most viewed videos on YouTube.</p>
                                <div class="video-meta">
                                    <span><i class="far fa-clock"></i> 4:42</span>
                                    <span><i class="far fa-eye"></i> 8.1B views</span>
                                </div>
                            </div>
                        </div>

                        <div class="video-card">
                            <div class="video-thumbnail">
                                <img src="https://img.youtube.com/vi/09R8_2nJtjg/maxresdefault.jpg" alt="Music Video 3">
                                <div class="play-button" data-video="09R8_2nJtjg">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Sugar - Maroon 5</h3>
                                <p class="video-description">Maroon 5's "Sugar" music video, featuring surprise wedding
                                    appearances by the band.</p>
                                <div class="video-meta">
                                    <span><i class="far fa-clock"></i> 5:01</span>
                                    <span><i class="far fa-eye"></i> 3.5B views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab2" class="tab-content">
                    <div class="video-container">
                        <!-- Gaming Videos -->
                        <div class="video-card">
                            <div class="video-thumbnail">
                                <img src="https://img.youtube.com/vi/1HtEPEnk-LQ/maxresdefault.jpg"
                                    alt="Gaming Video 1">
                                <div class="play-button" data-video="1HtEPEnk-LQ">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Minecraft: The Last Minecart</h3>
                                <p class="video-description">An epic Minecraft adventure featuring incredible builds and
                                    thrilling parkour challenges.</p>
                                <div class="video-meta">
                                    <span><i class="far fa-clock"></i> 18:32</span>
                                    <span><i class="far fa-eye"></i> 42M views</span>
                                </div>
                            </div>
                        </div>

                        <div class="video-card">
                            <div class="video-thumbnail">
                                <img src="https://img.youtube.com/vi/edYCtaNueQY/maxresdefault.jpg"
                                    alt="Gaming Video 2">
                                <div class="play-button" data-video="edYCtaNueQY">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Fortnite: Epic Gameplay Moments</h3>
                                <p class="video-description">Best Fortnite gameplay compilation featuring incredible
                                    shots and funny moments.</p>
                                <div class="video-meta">
                                    <span><i class="far fa-clock"></i> 15:47</span>
                                    <span><i class="far fa-eye"></i> 28M views</span>
                                </div>
                            </div>
                        </div>

                        <div class="video-card">
                            <div class="video-thumbnail">
                                <img src="https://img.youtube.com/vi/NX1eKLBbkC0/maxresdefault.jpg"
                                    alt="Gaming Video 3">
                                <div class="play-button" data-video="NX1eKLBbkC0">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">Among Us: Funny Moments & Fails</h3>
                                <p class="video-description">Hilarious compilation of Among Us gameplay with friends
                                    featuring unexpected betrayals and funny reactions.</p>
                                <div class="video-meta">
                                    <span><i class="far fa-clock"></i> 22:15</span>
                                    <span><i class="far fa-eye"></i> 35M views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab3" class="tab-content">
                    <div class="video-container">
                        <!-- Educational Videos -->
                        <div class="video-card">
                            <div class="video-thumbnail">
                                <img src="https://img.youtube.com/vi/B1J6Ou4q8vE/maxresdefault.jpg"
                                    alt="Educational Video 1">
                                <div class="play-button" data-video="B1J6Ou4q8vE">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">The Power of Vulnerability</h3>
                                <p class="video-description">Brené Brown studies human connection — our ability to
                                    empathize, belong, love.</p>
                                <div class="video-meta">
                                    <span><i class="far fa-clock"></i> 20:19</span>
                                    <span><i class="far fa-eye"></i> 58M views</span>
                                </div>
                            </div>
                        </div>

                        <div class="video-card">
                            <div class="video-thumbnail">
                                <img src="https://img.youtube.com/vi/rBpaUICxEhk/maxresdefault.jpg"
                                    alt="Educational Video 2">
                                <div class="play-button" data-video="rBpaUICxEhk">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">How to Speak So People Want to Listen</h3>
                                <p class="video-description">Have you ever felt like you're talking, but nobody is
                                    listening? Julian Treasure gives useful tips.</p>
                                <div class="video-meta">
                                    <span><i class="far fa-clock"></i> 9:58</span>
                                    <span><i class="far fa-eye"></i> 38M views</span>
                                </div>
                            </div>
                        </div>

                        <div class="video-card">
                            <div class="video-thumbnail">
                                <img src="https://img.youtube.com/vi/5MgBikgcWnY/maxresdefault.jpg"
                                    alt="Educational Video 3">
                                <div class="play-button" data-video="5MgBikgcWnY">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="video-info">
                                <h3 class="video-title">The First 20 Hours - How to Learn Anything</h3>
                                <p class="video-description">Josh Kaufman explains how to go from knowing nothing to
                                    being pretty good in just 20 hours.</p>
                                <div class="video-meta">
                                    <span><i class="far fa-clock"></i> 19:27</span>
                                    <span><i class="far fa-eye"></i> 16M views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <!-- Video Modal -->
        <div id="videoModal"
            style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.9); z-index:1000; justify-content:center; align-items:center;">
            <div style="position:relative; width:90%; max-width:900px;">
                <button id="closeModal"
                    style="position:absolute; top:-40px; right:0; background:none; border:none; color:white; font-size:1.5rem; cursor:pointer;">
                    <i class="fas fa-times"></i>
                </button>
                <div id="videoPlayer" style="width:100%; aspect-ratio:16/9;">
                    <!-- YouTube iframe will be inserted here -->
                </div>
            </div>
        </div>

        <script>
            // Tab switching functionality
            document.querySelectorAll('.tab').forEach(tab => {
                tab.addEventListener('click', () => {
                    // Remove active class from all tabs and tab contents
                    document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                    document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));

                    // Add active class to clicked tab
                    tab.classList.add('active');

                    // Show corresponding tab content
                    const tabId = tab.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });

            // Video modal functionality
            const videoModal = document.getElementById('videoModal');
            const videoPlayer = document.getElementById('videoPlayer');
            const closeModal = document.getElementById('closeModal');

            document.querySelectorAll('.play-button').forEach(button => {
                button.addEventListener('click', () => {
                    const videoId = button.getAttribute('data-video');
                    videoPlayer.innerHTML = `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/${videoId}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
                    videoModal.style.display = 'flex';
                });
            });

            // Close modal when X is clicked
            closeModal.addEventListener('click', () => {
                videoModal.style.display = 'none';
                videoPlayer.innerHTML = '';
            });

            // Close modal when clicking outside the video
            videoModal.addEventListener('click', (e) => {
                if (e.target === videoModal) {
                    videoModal.style.display = 'none';
                    videoPlayer.innerHTML = '';
                }
            });

            // Close modal with Escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    videoModal.style.display = 'none';
                    videoPlayer.innerHTML = '';
                }
            });
        </script>
    </body>

    </html>
    <!-- End of 1.10. Testimonials section -->

    <!-- 1.11. Team section -->



    <?php include 'footer.php'; ?>