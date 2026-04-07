
<style>
    .navbar {
  /* position: fixed !important; */
  /* top: 0;
  left: 0;
  width: 100%;
  z-index: 9999; */
}
/* body {
  padding-top: 80px;
} */
</style>

<header class="main-header">
    <div class=" borderb">
        <!-- Main Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="https://www.knottylogistics.com/" class="nav-logo" onclick="navigateToParent('/')">
                    <figure><img src="assets/images/index/logo.png" alt="logo"></figure>
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="https://www.knottylogistics.com/" onclick="navigateToParent('/')">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.knottylogistics.com/about" onclick="navigateToParent('/about')">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.knottylogistics.com/app" onclick="navigateToParent('/app')">App</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.knottylogistics.com/contact" onclick="navigateToParent('/contact')">Contact</a>
                        </li>
                    </ul>
                </div>
                <div id="authBtnContainer" class="auth-btn-container">
                    <!-- Auth button will be dynamically updated -->
                </div>
                <button onclick="open_aside()" type="button" aria-label="openSide" class="none1">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </nav>

        <!-- Side Navbar for Small Screen -->
        <aside>
            <div id="sideNav">
                <div class="d-flex nav-logo">
                    <figure class="navbar-brand">
                        <a href="https://www.knottylogistics.com/" onclick="navigateToParent('/')"><img src="assets/images/index/logo.png" alt="logo"></a>
                    </figure>
                    <button class="fa-solid fa-xmark" onclick="close_aside()" aria-label="closeSide"></button>
                </div>
                <ul>
                    <li class="nav-item">
                        <a href="https://www.knottylogistics.com/" class="active" aria-current="page" onclick="navigateToParent('/')">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.knottylogistics.com/about" onclick="navigateToParent('/about')">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.knottylogistics.com/app" onclick="navigateToParent('/app')">App</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.knottylogistics.com/contact" onclick="navigateToParent('/contact')">Contact</a>
                    </li>
                    <div id="authBtnContainer" class="auth-btn-container">
                    <!-- Auth button will be dynamically updated -->
                </div>
                </ul>
            </div>
        </aside>
    </div>
</header>

<script>
    // Check if token exists in localStorage
// Global token management for iframe website
(function() {
    let globalToken = null;
    
    // Function to update auth buttons globally
    function updateAuthButtons(token) {
        globalToken = token;
        
        // Update all auth button containers
        const authContainers = document.querySelectorAll('#authBtnContainer, .auth-btn-container');
        
        authContainers.forEach(container => {
            if (token) {
                // Token exists -> Show "Open Dashboard"
                container.innerHTML = `
                    <a href="https://www.knottylogistics.com/home" class="hover1" onclick="navigateToParent('/home')">Open Dashboard</a>
                `;
            } else {
                // No token -> Show "Login"
                container.innerHTML = `
                    <a href="https://www.knottylogistics.com/login" class="hover1" onclick="navigateToParent('/signup')">Sign up</a>
                `;
            }
        });
        
        // Store token in localStorage for consistency
        if (token) {
            localStorage.setItem('token', token);
        } else {
            localStorage.removeItem('token');
        }
        
        // Trigger custom event for other parts of the site
        window.dispatchEvent(new CustomEvent('tokenUpdated', { 
            detail: { token: token } 
        }));
    }
    
    // Function to navigate parent window
    window.navigateToParent = function(path) {
        if (window.parent !== window) {
            // We're in an iframe, send message to parent
            window.parent.postMessage({
                type: 'navigate',
                path: path
            }, '*');
        } else {
            // We're not in iframe, navigate normally
            window.location.href = path;
        }
    };
    
    // Listen for messages from parent window
    window.addEventListener('message', function(event) {
        // Accept messages from your React app domain
        if (event.origin !== 'http://localhost:5173' && event.origin !== 'https://www.knottylogistics.com') {
            return;
        }
        
        if (event.data.type === 'token_update') {
            updateAuthButtons(event.data.token);
        }
    });
    
    // Check for token in URL parameters on page load
    function checkUrlToken() {
        const urlParams = new URLSearchParams(window.location.search);
        const tokenFromUrl = urlParams.get('token');
        
        if (tokenFromUrl) {
            updateAuthButtons(tokenFromUrl);
            // Clean URL by removing token parameter
            const newUrl = window.location.pathname + 
                (window.location.search.replace(/[?&]token=[^&]*/, '').replace(/^&/, '?') || '');
            window.history.replaceState({}, document.title, newUrl);
        } else {
            // Check localStorage for existing token
            const existingToken = localStorage.getItem('token');
            updateAuthButtons(existingToken);
        }
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', checkUrlToken);
    } else {
        checkUrlToken();
    }
    
    // Notify parent that iframe is loaded
    if (window.parent !== window) {
        window.parent.postMessage({
            type: 'iframe_loaded'
        }, '*');
    }
    
    // Global function to get current token
    window.getGlobalToken = function() {
        return globalToken;
    };
    
    // Global function to manually update token
    window.updateGlobalToken = function(token) {
        updateAuthButtons(token);
    };
})();

window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");

  if (window.scrollY > 100) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});
</script>

