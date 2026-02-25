
<? include 'header.php'; ?>
    <link rel="stylesheet" href="css/style.css"/>
<body>
    
    <!-- ===== PRODUCT HEADER ===== -->
    <header class="product-header">
        <div class="container">
            <div class="product-grid">
                
                <!-- Product Image -->
                <div class="product-image-wrapper animate-fade-in">
                    <span class="product-badge">Bestseller</span>
                    <img 
                        src="https://images.unsplash.com/photo-1615486511484-92e572f5b6c3?auto=format&fit=crop&w=800&q=80" 
                        alt="Premium organic turmeric powder in kraft paper pouch with wooden scoop, vibrant golden-yellow spice"
                        class="product-image"
                        width="600"
                        height="600"
                        loading="eager"
                    >
                </div>
                
                <!-- Product Info -->
                <div class="product-info animate-fade-in">
                    <nav class="product-breadcrumb" aria-label="Breadcrumb">
                        <a href="/">Home</a>
                        <a href="#products">Products</a>
                        <span>Turmeric Powder</span>
                    </nav>
                    
                    <h1 class="product-title">Turmeric Powder</h1>
                    <p class="product-tagline">Premium ground turmeric from Java's volcanic soil — rich in curcumin, naturally vibrant.</p>
                    
                    <div class="product-price">
                        <span class="price-current">$4.40</span>
                        <span class="price-original">$6.00</span>
                        <span class="price-note">per 100g</span>
                    </div>
                    
                    <button class="btn btn-outline" onclick="openMarketplaceModal()">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                            <polyline points="9,22 9,12 15,12 15,22"/>
                        </svg>
                        Buy via Official Store
                    </button>
                    
                    <div class="product-meta">
                        <div class="product-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                            <span>127 reviews</span>
                        </div>
                        <div class="product-meta-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            <span>Ships in 24h</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </header>

    <main>
        <!-- ===== DESCRIPTION SECTION ===== -->
        <section class="product-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">About This Turmeric</h2>
                    <p class="section-subtitle">Sourced from small-scale organic farms in Central Java</p>
                </div>
                <div class="description-content">
                    <p>Our turmeric is <span class="description-highlight">hand-harvested at peak maturity</span> from nutrient-rich volcanic soil, then gently dried using traditional methods that preserve its potent curcumin content and vibrant golden hue.</p>
                    <p>Each batch is lab-tested for purity and potency, ensuring you receive a product that's as effective as it is beautiful. No irradiation, no fillers — just <span class="description-highlight">100% pure Indonesian turmeric</span>, exactly as nature intended.</p>
                </div>
            </div>
        </section>

        <!-- ===== USES & PREPARATION SECTION ===== -->
        <section class="product-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Ways to Use</h2>
                    <p class="section-subtitle">Click any card to discover preparation tips and recipes</p>
                </div>
                
                <div class="uses-grid" role="tablist" aria-label="Turmeric usage options">
                    
                    <!-- Golden Milk -->
                    <button class="use-card" role="tab" aria-selected="false" aria-controls="panel-golden-milk" id="tab-golden-milk" onclick="toggleUsePanel('golden-milk')">
                        <div class="use-image">
                            <span class="use-icon" aria-hidden="true">🥛</span>
                        </div>
                        <h3 class="use-title">Golden Milk</h3>
                        <p class="use-preview">Warm, soothing wellness drink</p>
                    </button>
                    
                    <!-- Turmeric Tea -->
                    <button class="use-card" role="tab" aria-selected="false" aria-controls="panel-turmeric-tea" id="tab-turmeric-tea" onclick="toggleUsePanel('turmeric-tea')">
                        <div class="use-image">
                            <span class="use-icon" aria-hidden="true">🍵</span>
                        </div>
                        <h3 class="use-title">Turmeric Tea</h3>
                        <p class="use-preview">Light, refreshing daily infusion</p>
                    </button>
                    
                    <!-- Jamu Drink -->
                    <button class="use-card" role="tab" aria-selected="false" aria-controls="panel-jamu" id="tab-jamu" onclick="toggleUsePanel('jamu')">
                        <div class="use-image">
                            <span class="use-icon" aria-hidden="true">🌿</span>
                        </div>
                        <h3 class="use-title">Jamu Drink</h3>
                        <p class="use-preview">Traditional Indonesian tonic</p>
                    </button>
                    
                    <!-- Cooking Spice -->
                    <button class="use-card" role="tab" aria-selected="false" aria-controls="panel-cooking" id="tab-cooking" onclick="toggleUsePanel('cooking')">
                        <div class="use-image">
                            <span class="use-icon" aria-hidden="true">🍛</span>
                        </div>
                        <h3 class="use-title">Cooking Spice</h3>
                        <p class="use-preview">Add depth to curries & rice</p>
                    </button>
                    
                    <!-- Smoothie -->
                    <button class="use-card" role="tab" aria-selected="false" aria-controls="panel-smoothie" id="tab-smoothie" onclick="toggleUsePanel('smoothie')">
                        <div class="use-image">
                            <span class="use-icon" aria-hidden="true">🥤</span>
                        </div>
                        <h3 class="use-title">Smoothie Boost</h3>
                        <p class="use-preview">Nutrient-packed morning blend</p>
                    </button>
                    
                </div>
                
                <!-- Use Detail Panels -->
                <div id="panel-golden-milk" class="use-panel" role="tabpanel" aria-labelledby="tab-golden-milk" hidden>
                    <div class="use-panel-header">
                        <span class="use-icon" aria-hidden="true">🥛</span>
                        <h3 class="use-panel-title">Golden Milk (Turmeric Latte)</h3>
                    </div>
                    <div class="use-panel-content">
                        <p class="use-panel-description">A warming, anti-inflammatory beverage perfect for evening relaxation or immune support. The black pepper enhances curcumin absorption by up to 2000%.</p>
                        <div class="use-panel-instructions">
                            <h4>How to Prepare:</h4>
                            <ol>
                                <li>Warm 1 cup milk (dairy or plant-based) in a small saucepan</li>
                                <li>Whisk in ½ tsp turmeric powder, pinch of black pepper, and cinnamon</li>
                                <li>Simmer gently for 3-5 minutes, stirring occasionally</li>
                                <li>Sweeten with honey or maple syrup to taste</li>
                                <li>Strain if desired and enjoy warm</li>
                            </ol>
                        </div>
                        <div class="use-panel-tips">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/>
                            </svg>
                            <span><strong>Pro tip:</strong> Add a small piece of fresh ginger for extra warmth and digestive benefits.</span>
                        </div>
                    </div>
                </div>
                
                <div id="panel-turmeric-tea" class="use-panel" role="tabpanel" aria-labelledby="tab-turmeric-tea" hidden>
                    <div class="use-panel-header">
                        <span class="use-icon" aria-hidden="true">🍵</span>
                        <h3 class="use-panel-title">Simple Turmeric Tea</h3>
                    </div>
                    <div class="use-panel-content">
                        <p class="use-panel-description">A light, caffeine-free infusion that supports digestion and provides a gentle antioxidant boost throughout the day.</p>
                        <div class="use-panel-instructions">
                            <h4>How to Prepare:</h4>
                            <ol>
                                <li>Bring 1 cup water to a gentle boil</li>
                                <li>Add ¼ tsp turmeric powder and a slice of fresh lemon</li>
                                <li>Steep for 5-7 minutes, covered</li>
                                <li>Strain and add honey if desired</li>
                                <li>Enjoy hot or chill for a refreshing iced tea</li>
                            </ol>
                        </div>
                        <div class="use-panel-tips">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/>
                            </svg>
                            <span><strong>Pro tip:</strong> Add a pinch of cayenne for a metabolism-boosting kick.</span>
                        </div>
                    </div>
                </div>
                
                <div id="panel-jamu" class="use-panel" role="tabpanel" aria-labelledby="tab-jamu" hidden>
                    <div class="use-panel-header">
                        <span class="use-icon" aria-hidden="true">🌿</span>
                        <h3 class="use-panel-title">Traditional Jamu Kunyit</h3>
                    </div>
                    <div class="use-panel-content">
                        <p class="use-panel-description">An ancient Indonesian wellness tonic believed to support immunity, skin health, and overall vitality. Traditionally consumed daily.</p>
                        <div class="use-panel-instructions">
                            <h4>How to Prepare:</h4>
                            <ol>
                                <li>Blend 1 tsp turmeric powder with 1 cup warm water</li>
                                <li>Add juice of ½ lime and 1 tbsp tamarind paste (or apple cider vinegar)</li>
                                <li>Sweeten with palm sugar or honey to balance the earthy flavor</li>
                                <li>Strain through a fine mesh sieve</li>
                                <li>Serve chilled or at room temperature</li>
                            </ol>
                        </div>
                        <div class="use-panel-tips">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/>
                            </svg>
                            <span><strong>Pro tip:</strong> For authentic flavor, add a small piece of fresh galangal or ginger while blending.</span>
                        </div>
                    </div>
                </div>
                
                <div id="panel-cooking" class="use-panel" role="tabpanel" aria-labelledby="tab-cooking" hidden>
                    <div class="use-panel-header">
                        <span class="use-icon" aria-hidden="true">🍛</span>
                        <h3 class="use-panel-title">Culinary Spice</h3>
                    </div>
                    <div class="use-panel-content">
                        <p class="use-panel-description">Add vibrant color and earthy warmth to curries, rice dishes, soups, and marinades. Our fine grind disperses evenly for consistent flavor.</p>
                        <div class="use-panel-instructions">
                            <h4>How to Use:</h4>
                            <ol>
                                <li>Bloom ½-1 tsp turmeric in warm oil at the start of cooking</li>
                                <li>Add to rice water for golden turmeric rice (1 tsp per cup)</li>
                                <li>Blend into marinades for chicken, fish, or tofu</li>
                                <li>Stir into soups, stews, or lentil dishes</li>
                                <li>Use in spice rubs for roasted vegetables</li>
                            </ol>
                        </div>
                        <div class="use-panel-tips">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/>
                            </svg>
                            <span><strong>Pro tip:</strong> Turmeric stains easily — use gloves when handling large amounts and clean surfaces promptly.</span>
                        </div>
                    </div>
                </div>
                
                <div id="panel-smoothie" class="use-panel" role="tabpanel" aria-labelledby="tab-smoothie" hidden>
                    <div class="use-panel-header">
                        <span class="use-icon" aria-hidden="true">🥤</span>
                        <h3 class="use-panel-title">Wellness Smoothie Boost</h3>
                    </div>
                    <div class="use-panel-content">
                        <p class="use-panel-description">Seamlessly add anti-inflammatory benefits to your morning routine. The mild, earthy flavor pairs beautifully with tropical fruits.</p>
                        <div class="use-panel-instructions">
                            <h4>How to Blend:</h4>
                            <ol>
                                <li>Add to blender: 1 banana, ½ cup mango, 1 cup coconut water</li>
                                <li>Add ¼ tsp turmeric powder and a pinch of black pepper</li>
                                <li>Optional: add 1 tbsp chia seeds or protein powder</li>
                                <li>Blend until smooth and creamy</li>
                                <li>Enjoy immediately for maximum nutrient retention</li>
                            </ol>
                        </div>
                        <div class="use-panel-tips">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/>
                            </svg>
                            <span><strong>Pro tip:</strong> Freeze turmeric powder in ice cube trays with coconut water for easy smoothie prep.</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <!-- ===== PRODUCT DETAILS SECTION ===== -->
        <section class="product-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Product Details</h2>
                </div>
                <ul class="details-list">
                    <li class="details-item">
                        <svg class="details-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        <div class="details-content">
                            <h4>100% Pure Turmeric</h4>
                            <p>No fillers, no additives, no artificial colors. Just pure, single-origin turmeric root.</p>
                        </div>
                    </li>
                    <li class="details-item">
                        <svg class="details-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/>
                        </svg>
                        <div class="details-content">
                            <h4>Organic & Lab-Tested</h4>
                            <p>Certified organic farming practices. Every batch tested for heavy metals and curcumin content.</p>
                            <span class="details-badge">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                USDA Organic Equivalent
                            </span>
                        </div>
                    </li>
                    <li class="details-item">
                        <svg class="details-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/>
                        </svg>
                        <div class="details-content">
                            <h4>Naturally Dried</h4>
                            <p>Low-temperature drying preserves volatile oils and bioactive compounds for maximum potency.</p>
                        </div>
                    </li>
                    <li class="details-item">
                        <svg class="details-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27,6.96 12,12.01 20.73,6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/>
                        </svg>
                        <div class="details-content">
                            <h4>Net Weight & Form</h4>
                            <p>100g (3.5 oz) of finely ground powder. Also available in dried slices.</p>
                        </div>
                    </li>
                    <li class="details-item">
                        <svg class="details-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"/>
                        </svg>
                        <div class="details-content">
                            <h4>Origin: Indonesia</h4>
                            <p>Sourced from smallholder farms in Central Java, Indonesia. Direct trade partnerships ensure fair wages.</p>
                            <span class="details-badge">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                                Ethically Sourced
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ===== STORAGE SECTION ===== -->
        <section class="product-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Storage & Freshness</h2>
                </div>
                <div class="storage-card">
                    <div class="storage-content">
                        <div class="storage-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/>
                            </svg>
                        </div>
                        <div class="storage-text">
                            <p>Store in a <strong>cool, dry place</strong> away from direct sunlight and moisture. Keep the pouch tightly sealed after opening to preserve potency and vibrant color. For extended freshness, refrigerate after opening. Best used within 12 months of opening.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ===== JAVASCRIPT ===== -->
    <script>
        
        // ===== Use Panel Toggle =====
        function toggleUsePanel(panelId) {
            const panels = document.querySelectorAll('.use-panel');
            const cards = document.querySelectorAll('.use-card');
            const targetPanel = document.getElementById(`panel-${panelId}`);
            const targetCard = document.getElementById(`tab-${panelId}`);
            
            // Close all panels first
            panels.forEach(panel => {
                panel.classList.remove('active');
                panel.hidden = true;
            });
            cards.forEach(card => {
                card.classList.remove('active');
                card.setAttribute('aria-selected', 'false');
            });
            
            // Toggle target panel
            if (!targetPanel.classList.contains('active')) {
                targetPanel.classList.add('active');
                targetPanel.hidden = false;
                targetCard.classList.add('active');
                targetCard.setAttribute('aria-selected', 'true');
                
                // Smooth scroll to panel on mobile
                if (window.innerWidth < 768) {
                    targetPanel.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }
            }
        }

        // ===== Close panel when clicking outside (optional) =====
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.use-card') && !e.target.closest('.use-panel')) {
                document.querySelectorAll('.use-panel').forEach(panel => {
                    panel.classList.remove('active');
                    panel.hidden = true;
                });
                document.querySelectorAll('.use-card').forEach(card => {
                    card.classList.remove('active');
                    card.setAttribute('aria-selected', 'false');
                });
            }
        });

        // ===== Keyboard Navigation for Use Cards =====
        document.querySelectorAll('.use-card').forEach(card => {
            card.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    card.click();
                }
            });
        });

        
    </script>
    
    <!-- CSS Animations for JS interactions -->
    <style>
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        @keyframes dash {
            to { stroke-dashoffset: 0; }
        }
    </style>
</body>
</html>