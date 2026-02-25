<!-- Marketplace Selection Modal -->
<div id="marketplaceModal" class="fixed inset-0 z-[100] hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-background-dark/80 backdrop-blur-sm transition-opacity opacity-0" id="modalBackdrop"></div>

    <!-- Modal Container -->
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            
            <!-- Modal Panel -->
            <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" id="modalPanel">
                
                <!-- Close Button -->
                <button onclick="closeMarketplaceModal()" class="absolute right-4 top-4 z-10 w-8 h-8 flex items-center justify-center rounded-full bg-beige/20 hover:bg-beige/40 transition-colors group">
                    <svg class="w-5 h-5 text-background-dark group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <!-- Header Section -->
                <div class="bg-gradient-to-br from-background-dark to-sage px-6 py-8 text-center relative overflow-hidden">
                    <!-- Decorative Elements -->
                    <div class="absolute top-0 left-0 w-full h-full opacity-10">
                        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                            <path d="M0,50 Q25,30 50,50 T100,50" fill="none" stroke="#cbae57" stroke-width="0.5"/>
                            <path d="M0,60 Q25,40 50,60 T100,60" fill="none" stroke="#cbae57" stroke-width="0.5"/>
                        </svg>
                    </div>

                    <!-- Badge -->
                    <div class="relative z-10 inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/20 border border-primary/30 mb-4">
                        <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-xs font-bold text-primary uppercase tracking-wider">Verified Official Store</span>
                    </div>

                    <h3 class="relative z-10 text-2xl font-bold text-beige serif-accent mb-2">
                        Purchase via Official Store
                    </h3>
                    <p class="relative z-10 text-sm text-beige/80 font-light">
                        Authentic products with secure checkout
                    </p>
                </div>

                <!-- Trust Badges -->
                <div class="bg-beige/10 px-6 py-4 border-b border-primary/10">
                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div class="flex flex-col items-center gap-1.5">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-background-dark">Authentic</span>
                        </div>
                        <div class="flex flex-col items-center gap-1.5">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-background-dark">Secure Payment</span>
                        </div>
                        <div class="flex flex-col items-center gap-1.5">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-background-dark">Fast Shipping</span>
                        </div>
                    </div>
                </div>

                <!-- Two Column Layout: Marketplace | Contact -->
                <div class="px-6 py-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        
                        <!-- CARD 1: Marketplace Options (Left Column) -->
                        <div class="bg-beige/5 rounded-xl p-4 border border-primary/10 h-full">
                            <h4 class="text-sm font-bold text-background-dark uppercase tracking-wider mb-4 flex items-center gap-2">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                                Marketplace
                            </h4>
                            <div class="space-y-3">
                                
                                <!-- eBay -->
                                <a href="https://www.ebay.com/usr/your-store" target="_blank" rel="noopener noreferrer" 
                                   class="group block w-full">
                                    <div class="relative overflow-hidden rounded-xl border-2 border-slate-200 hover:border-blue-600 transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                                        <div class="px-4 py-3 flex items-center gap-3">
                                            <!-- eBay Image -->
                                            <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center flex-shrink-0 shadow-sm overflow-hidden">
                                                <img src="image/ebay.png" alt="eBay" class="w-full h-full object-contain p-1">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <h4 class="text-sm font-bold text-background-dark mb-0.5 truncate">eBay</h4>
                                                <p class="text-xs text-slate-500 font-medium truncate">Global marketplace</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="w-8 h-8 rounded-full bg-blue-500/10 flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-300">
                                                    <svg class="w-4 h-4 text-blue-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Shopee -->
                                <a href="https://shopee.co.id/your-official-store" target="_blank" rel="noopener noreferrer" 
                                   class="group block w-full">
                                    <div class="relative overflow-hidden rounded-xl border-2 border-slate-200 hover:border-orange-500 transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                                        <div class="px-4 py-3 flex items-center gap-3">
                                            <!-- Shopee Image -->
                                            <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center flex-shrink-0 shadow-sm overflow-hidden">
                                                <img src="image/shopee.png" alt="Shopee" class="w-full h-full object-contain p-1">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <h4 class="text-sm font-bold text-background-dark mb-0.5 truncate">Shopee</h4>
                                                <p class="text-xs text-slate-500 font-medium truncate">Official Store</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="w-8 h-8 rounded-full bg-orange-500/10 flex items-center justify-center group-hover:bg-orange-500 transition-colors duration-300">
                                                    <svg class="w-4 h-4 text-orange-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <!-- CARD 2: Contact Directly (Right Column) -->
                        <div class="bg-beige/5 rounded-xl p-4 border border-primary/10 h-full">
                            <h4 class="text-sm font-bold text-background-dark uppercase tracking-wider mb-4 flex items-center gap-2">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                                Contact
                            </h4>
                            <div class="space-y-3">
                                
                                <!-- WhatsApp -->
                                <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" 
                                   class="group block w-full">
                                    <div class="relative overflow-hidden rounded-xl border-2 border-slate-200 hover:border-green-500 transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                                        <div class="px-4 py-3 flex items-center gap-3">
                                            <!-- WhatsApp Icon -->
                                            <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center flex-shrink-0 shadow-sm">
                                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                                </svg>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <h4 class="text-sm font-bold text-background-dark mb-0.5 truncate">WhatsApp</h4>
                                                <p class="text-xs text-slate-500 font-medium truncate">Chat with us</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="w-8 h-8 rounded-full bg-green-500/10 flex items-center justify-center group-hover:bg-green-500 transition-colors duration-300">
                                                    <svg class="w-4 h-4 text-green-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Email -->
                                <a href="mailto:contact@yourstore.com" class="group block w-full">
                                    <div class="relative overflow-hidden rounded-xl border-2 border-slate-200 hover:border-red-500 transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                                        <div class="px-4 py-3 flex items-center gap-3">
                                            <!-- Email Icon -->
                                            <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center flex-shrink-0 shadow-sm">
                                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <h4 class="text-sm font-bold text-background-dark mb-0.5 truncate">Email</h4>
                                                <p class="text-xs text-slate-500 font-medium truncate">contact@yourstore.com</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="w-8 h-8 rounded-full bg-red-500/10 flex items-center justify-center group-hover:bg-red-500 transition-colors duration-300">
                                                    <svg class="w-4 h-4 text-red-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Note -->
                <div class="bg-beige/5 px-6 py-4 border-t border-primary/10 text-center">
                    <p class="text-xs text-slate-500 font-light">
                        All purchases are protected by our authenticity guarantee
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk Modal -->
<script>
    const modal = document.getElementById('marketplaceModal');
    const backdrop = document.getElementById('modalBackdrop');
    const panel = document.getElementById('modalPanel');

    function openMarketplaceModal() {
        modal.classList.remove('hidden');
        // Trigger animations
        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            panel.classList.remove('opacity-0', 'translate-y-4', 'sm:translate-y-0', 'sm:scale-95');
            panel.classList.add('opacity-100', 'translate-y-0', 'sm:scale-100');
        }, 10);
        document.body.style.overflow = 'hidden';
    }

    function closeMarketplaceModal() {
        backdrop.classList.add('opacity-0');
        panel.classList.remove('opacity-100', 'translate-y-0', 'sm:scale-100');
        panel.classList.add('opacity-0', 'translate-y-4', 'sm:translate-y-0', 'sm:scale-95');
        
        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }, 300);
    }

    // Close on backdrop click
    backdrop.addEventListener('click', closeMarketplaceModal);

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeMarketplaceModal();
        }
    });
</script>