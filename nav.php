<header>
    <div class="container borderb">
        <!-- Main Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="nav-logo" href="https://www.knottylogistics.com/">
                    <figure><img src="assets/images/index/logo.png" alt="logo"></figure>
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="https://www.knottylogistics.com/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.knottylogistics.com/about">About Us</a>
                        </li>
                        <!-- <li class="nav-item">
                                        <a class="nav-link" href="#">Services</a>
                                    </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.knottylogistics.com/contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div id="authBtnContainer">
                    <!-- Button ya link yahan dynamically change hoga -->
                </div>

                <button onclick="open_aside()" type="button" aria-label="openSide">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </nav>

        <!-- Side Navbar for Small Screen -->
        <aside>
            <div id="sideNav">
                <div class="d-flex nav-logo ">
                    <figure class="navbar-brand">
                        <a href="#"><img src="assets/images/index/logo.png" alt="logo"></a>
                    </figure>
                    <button class="fa-solid fa-xmark"
                        onclick="if (!window.__cfRLUnblockHandlers) return false; close_aside()" aria-label="closeSide"
                        data-cf-modified-720bbc23fc6208e1b6206c93-=""></button>
                </div>
                <ul>
                    <li class="nav-item">
                        <a class="active" aria-current="page" href="https://www.knottylogistics.com/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.knottylogistics.com/about">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="https://www.knottylogistics.com/contact">Contact</a>
                    </li>

                </ul>
            </div>
        </aside>
    </div>
</header>


<script>
    // Check if token exists in localStorage
    const token = localStorage.getItem("token");
    const authContainer = document.getElementById("authBtnContainer");

    if (token) {
        // Token mil gaya -> "Open Dashboard" dikhaye
        authContainer.innerHTML = `
            <a href="https://www.knottylogistics.com/home" class="hover1">Open Dashboard</a>
        `;
    } else {
        // Token nahi mila -> "Login" dikhaye
        authContainer.innerHTML = `
            <a href="https://www.knottylogistics.com/login" class="hover1">Login</a>
        `;
    }
</script>