<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: var(--content-bg); border-bottom: 1px solid var(--border-color);">
    <div class="container">
        
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="fas fa-cake-candles"></i> VelvetWhisk
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            
            <div class="d-flex mx-auto position-relative my-2 my-lg-0" style="width: 100%; max-width: 400px;">
                <input class="form-control" type="search" id="search-input" placeholder="Search cakes..." aria-label="Search" style="background: #2d2420; color: white; border: 1px solid #4a373f; border-radius: 20px;">
                
                <div id="search-results" class="list-group position-absolute w-100 shadow" style="top: 100%; z-index: 1050; display: none; margin-top: 5px; border-radius: 10px; overflow: hidden;">
                    </div>
            </div>

            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('variety') ? 'active' : '' }}" href="{{ route('variety') }}">Variety</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" style="background: var(--content-bg); border: 1px solid var(--border-color);">
                            @if(Auth::user()->role === 'admin')
                                <li><a class="dropdown-item text-white" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li><a class="dropdown-item text-white" href="{{ route('admin.cakes.index') }}">Manage Cakes</a></li>
                                <li><a class="dropdown-item text-white" href="{{ route('admin.categories.index') }}">Manage Categories</a></li>
                                <li><hr class="dropdown-divider bg-secondary"></li>
                            @endif
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-white">Log Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                    </li>
                @endauth

                <li class="nav-item ms-2">
                    <a class="nav-link cart-icon position-relative" href="{{ route('cart') }}">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                        <span class="cart-count position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary" style="font-size: 0.6rem;">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('search-input');
        const resultsContainer = document.getElementById('search-results');

        searchInput.addEventListener('keyup', function() {
            let query = this.value;

            if (query.length > 1) { 
                fetch(`{{ route('cakes.search') }}?query=${query}`)
                    .then(response => response.json())
                    .then(data => {
                        resultsContainer.innerHTML = ''; 
                        
                        if (data.length > 0) {
                            resultsContainer.style.display = 'block';
                            
                            data.forEach(cake => {
                                let item = `
                                    <a href="/product.html?id=${cake.id}" class="list-group-item list-group-item-action d-flex align-items-center" style="background: #3b2e2a; color: white; border-color: #4a373f;">
                                        <img src="${cake.image}" alt="${cake.name}" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
                                        <div>
                                            <div class="fw-bold">${cake.name}</div>
                                            <small class="text-muted" style="color: #bbb !important;">$${cake.price}</small>
                                        </div>
                                    </a>
                                `;
                                resultsContainer.innerHTML += item;
                            });
                        } else {
                            resultsContainer.style.display = 'block';
                            resultsContainer.innerHTML = '<div class="list-group-item" style="background: #3b2e2a; color: white;">No cakes found.</div>';
                        }
                    });
            } else {
                resultsContainer.style.display = 'none';
            }
        });

        // Hide dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!searchInput.contains(e.target) && !resultsContainer.contains(e.target)) {
                resultsContainer.style.display = 'none';
            }
        });
    });
</script>