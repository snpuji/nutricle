<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    
    <!-- ===== PHP SEO LOGIC (Default Values) ===== -->
    <?php
    // Cek apakah variabel sudah didefinisikan di halaman. Jika belum, pakai default.
    if (!isset($pageTitle)) $pageTitle = "Bumire | The Essence of Vitality";
    if (!isset($pageDescription)) $pageDescription = "Bumire offers premium natural wellness products crafted from the finest botanical ingredients. Discover the essence of vitality with our curated collection.";
    if (!isset($pageKeywords)) $pageKeywords = "bumire, natural wellness, essential oils, herbal products, vitality, organic skincare";
    
    // URL absolut untuk domain gratisan
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    if (!isset($pageUrl)) $pageUrl = "$protocol://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    // Image URL wajib absolut untuk Open Graph
    if (!isset($pageImage)) $pageImage = "https://bumire.fwh.is/image/og-bumire.jpg";
    if (!isset($pageType)) $pageType = "website";
    if (!isset($siteName)) $siteName = "Bumire";
    ?>
    
    <!-- ===== PRIMARY META TAGS ===== -->
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>"/>
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>"/>
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="<?php echo htmlspecialchars($pageUrl); ?>"/>
    <meta name="author" content="Bumire"/>
    
    <!-- ===== OPEN GRAPH / FACEBOOK ===== -->
    <meta property="og:type" content="<?php echo htmlspecialchars($pageType); ?>"/>
    <meta property="og:url" content="<?php echo htmlspecialchars($pageUrl); ?>"/>
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>"/>
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>"/>
    <meta property="og:image" content="<?php echo htmlspecialchars($pageImage); ?>"/>
    <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>"/>
    <meta property="og:locale" content="en_US"/>
    
    <!-- ===== TWITTER CARD ===== -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="<?php echo htmlspecialchars($pageUrl); ?>"/>
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>"/>
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>"/>
    <meta name="twitter:image" content="<?php echo htmlspecialchars($pageImage); ?>"/>
    
    <!-- ===== FAVICON & ASSETS ===== -->
    <link rel="shortcut icon" type="image/x-icon" href="image/iconbumire.png"/>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- Google Fonts (URL sudah dibersihkan dari spasi) -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css"/>
    
    <!-- Tailwind Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#cbae57",
                        "background-light": "#f8f7f6",
                        "background-dark": "#162d25",
                        "beige": "#eae1d0",
                        "sage": "#5f7960",
                    },
                    fontFamily: { "display": ["Space Grotesk"] },
                    borderRadius: { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" },
                },
            },
        }
    </script>
    
    <!-- ===== STRUCTURED DATA (JSON-LD) ===== -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "<?php echo $pageType === 'product' ? 'Product' : 'WebSite'; ?>",
        "name": "<?php echo htmlspecialchars($siteName); ?>",
        "description": "<?php echo htmlspecialchars($pageDescription); ?>",
        "url": "https://bumire.fwh.is",
        "logo": "https://bumire.fwh.is/image/bumireweb1.png",
        "sameAs": [
            "https://instagram.com/bumire",
            "https://facebook.com/bumire"
        ]
    }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 selection:bg-primary/30">

<!-- Overlay untuk mobile menu (klik luar untuk close) -->
<div id="menuOverlay" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden" onclick="toggleMobileMenu()"></div>

<!-- Header -->
<header id="header" class="fixed top-0 w-full z-50 transition-all duration-300 bg-transparent">
    <nav class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <img src="image/bumireweb1.png" alt="Bumire Logo" class="h-10 w-auto object-contain"/>
        </div>

        <!-- Desktop Menu (hidden on mobile) -->
        <ul class="hidden md:flex items-center gap-10 text-sm font-medium tracking-wider text-beige uppercase">
            <li>
                <a class="hover:text-primary transition-colors <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-primary' : ''; ?>" 
                href="index.php">Home</a>
            </li>
            <li>
                <a class="hover:text-primary transition-colors <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'text-primary' : ''; ?>" 
                href="about.php">About</a>
            </li>
            <li>
                <a class="hover:text-primary transition-colors <?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'text-primary' : ''; ?>" 
                href="products.php">Products</a>
            </li>
            <li>
                <a class="hover:text-primary transition-colors <?php echo basename($_SERVER['PHP_SELF']) == 'blog.php' ? 'text-primary' : ''; ?>" 
                href="blog.php">Blog</a>
            </li>
            <li>
                <a class="hover:text-primary transition-colors <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'text-primary' : ''; ?>" 
                href="contact.php">Contact</a>
            </li>
        </ul>

        <!-- Desktop Button (hidden on mobile) -->
        <button onclick="openMarketplaceModal()" class="hidden md:block bg-primary text-background-dark px-8 py-2.5 rounded-full font-bold text-sm hover:brightness-110 transition-all uppercase tracking-widest">
            <span class="text-sm">Buy Now</span>
        </button>

        <!-- Hamburger Button (visible on mobile) -->
        <button id="hamburgerBtn" class="md:hidden flex flex-col gap-1.5 p-2 z-50" onclick="toggleMobileMenu()" aria-label="Toggle menu">
            <span class="hamburger-line w-6 h-0.5 bg-beige rounded"></span>
            <span class="hamburger-line w-6 h-0.5 bg-beige rounded"></span>
            <span class="hamburger-line w-6 h-0.5 bg-beige rounded"></span>
        </button>
    </nav>

    <!-- Mobile Menu (dropdown) -->
    <div id="mobileMenu" class="md:hidden bg-background-dark/95 backdrop-blur-md border-b border-primary/20">
        <div class="px-6 py-4 space-y-2">
            <a class="block py-3 text-beige hover:text-primary transition-colors font-medium uppercase tracking-wider text-sm border-b border-primary/10 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-primary' : ''; ?>" 
            href="index.php" onclick="toggleMobileMenu()">Home</a>
            <a class="block py-3 text-beige hover:text-primary transition-colors font-medium uppercase tracking-wider text-sm border-b border-primary/10 <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'text-primary' : ''; ?>" 
            href="about.php" onclick="toggleMobileMenu()">About</a>
            <a class="block py-3 text-beige hover:text-primary transition-colors font-medium uppercase tracking-wider text-sm border-b border-primary/10 <?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'text-primary' : ''; ?>" 
            href="products.php" onclick="toggleMobileMenu()">Products</a>
            <a class="block py-3 text-beige hover:text-primary transition-colors font-medium uppercase tracking-wider text-sm border-b border-primary/10 <?php echo basename($_SERVER['PHP_SELF']) == 'blog.php' ? 'text-primary' : ''; ?>" 
            href="blog.php" onclick="toggleMobileMenu()">Blog</a>
            <a class="block py-3 text-beige hover:text-primary transition-colors font-medium uppercase tracking-wider text-sm <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'text-primary' : ''; ?>" 
            href="contact.php" onclick="toggleMobileMenu()">Contact</a>
            
            <!-- Mobile Button -->
            <button class="w-full mt-4 bg-primary text-background-dark px-6 py-3 rounded-full font-bold text-sm hover:brightness-110 transition-all uppercase tracking-widest">
                Get a Quote
            </button>
        </div>
    </div>
</header>

<!-- JavaScript untuk Header Scroll + Mobile Menu -->
<script>
    // ===== HEADER SCROLL EFFECT =====
    window.addEventListener('scroll', function() {
        const header = document.getElementById('header');
        if (window.scrollY > 50) {
            header.classList.add('bg-background-dark/95', 'backdrop-blur-md', 'border-b', 'border-primary/20', 'shadow-lg');
            header.classList.remove('bg-transparent');
        } else {
            header.classList.remove('bg-background-dark/95', 'backdrop-blur-md', 'border-b', 'border-primary/20', 'shadow-lg');
            header.classList.add('bg-transparent');
        }
    });

    // ===== MOBILE MENU TOGGLE =====
    function toggleMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('menuOverlay');
        const hamburger = document.getElementById('hamburgerBtn');
        
        menu.classList.toggle('active');
        overlay.classList.toggle('hidden');
        hamburger.classList.toggle('hamburger-active');
        
        // Prevent body scroll when menu is open
        document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : '';
    }

    // Close menu when clicking a link (for anchor links)
    document.querySelectorAll('#mobileMenu a[href^="#"]').forEach(link => {
        link.addEventListener('click', () => {
            setTimeout(() => {
                const menu = document.getElementById('mobileMenu');
                const overlay = document.getElementById('menuOverlay');
                const hamburger = document.getElementById('hamburgerBtn');
                
                menu.classList.remove('active');
                overlay.classList.add('hidden');
                hamburger.classList.remove('hamburger-active');
                document.body.style.overflow = '';
            }, 200);
        });
    });
</script>