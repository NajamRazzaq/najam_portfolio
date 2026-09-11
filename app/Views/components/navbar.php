<header class="sticky top-0 z-50 bg-[#FAFAFB]/90 backdrop-blur-md border-b border-slate-200/60 transition-all">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-brand-950 text-white flex items-center justify-center font-serif font-black text-xl tracking-tighter shadow-sm group-hover:scale-105 transition-transform">
                    NR
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-base tracking-tight text-brand-900 group-hover:text-black transition-colors">Najam Razzaq</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-sm font-medium text-brand-900 hover:text-black transition-colors">Home</a>
                <a href="#work" class="text-sm font-medium text-brand-600 hover:text-brand-900 transition-colors">Work</a>
                <a href="#services" class="text-sm font-medium text-brand-600 hover:text-brand-900 transition-colors">Services</a>
                <a href="#about" class="text-sm font-medium text-brand-600 hover:text-brand-900 transition-colors">About</a>
                <a href="#contact" class="text-sm font-medium text-brand-600 hover:text-brand-900 transition-colors">Contact</a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center">
                <a href="#contact" class="inline-flex items-center gap-1.5 px-5 py-2.5 rounded-full bg-brand-950 text-white text-xs font-semibold hover:bg-brand-800 transition-all shadow-sm hover:shadow active:scale-95">
                    <span>Let's Talk</span>
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 17L17 7M17 7H7M17 7V17"/>
                    </svg>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex md:hidden items-center">
                <button type="button" id="mobile-menu-btn" class="p-2 rounded-lg text-brand-700 hover:text-brand-950 hover:bg-slate-100 transition-colors" aria-label="Toggle navigation">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Nav Drawer -->
    <div id="mobile-menu" class="hidden md:hidden border-b border-slate-200 bg-white/95 backdrop-blur-md px-4 pt-2 pb-6 space-y-3 shadow-lg">
        <a href="#home" class="block py-2 text-sm font-medium text-brand-900 hover:text-black">Home</a>
        <a href="#work" class="block py-2 text-sm font-medium text-brand-600 hover:text-brand-900">Work</a>
        <a href="#services" class="block py-2 text-sm font-medium text-brand-600 hover:text-brand-900">Services</a>
        <a href="#about" class="block py-2 text-sm font-medium text-brand-600 hover:text-brand-900">About</a>
        <a href="#contact" class="block py-2 text-sm font-medium text-brand-600 hover:text-brand-900">Contact</a>
        <div class="pt-2">
            <a href="#contact" class="inline-flex items-center justify-center w-full gap-2 px-5 py-2.5 rounded-full bg-brand-950 text-white text-xs font-semibold hover:bg-brand-800 transition-all">
                <span>Let's Talk</span>
                <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 17L17 7M17 7H7M17 7V17"/>
                </svg>
            </a>
        </div>
    </div>
</header>
