<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- HERO SECTION -->
<section id="home" class="relative pt-8 pb-12 lg:pt-14 lg:pb-16 overflow-hidden min-h-[560px] lg:min-h-[620px] flex items-center">
    <!-- Wide Hero Background Image (Desktop) -->
    <div class="hidden md:block absolute right-0 top-0 bottom-0 w-[58%] xl:w-[54%] h-full pointer-events-none z-0">
        <img src="<?= base_url('assets/images/hero-najam-wide.jpg') ?>" 
             alt="Najam Razzaq - Web Developer & Designer" 
             class="w-full h-full object-cover object-right">
        <!-- Soft left blend gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#FAFAFB] via-[#FAFAFB]/40 to-transparent w-48"></div>
    </div>

    <!-- Handwriting Callout Badge (Top Right) -->
    <!-- <div class="hidden md:block absolute top-6 right-8 xl:right-16 z-20 text-right pointer-events-none select-none">
        <p class="font-script text-2xl xl:text-3xl font-medium text-slate-700 tracking-wide rotate-[-3deg] leading-tight">
            Clean Code<br>Better Systems<br><span class="font-bold underline decoration-slate-400">Real Impact</span>
        </p>
    </div> -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <!-- Left Hero Content -->
            <div class="lg:col-span-7 xl:col-span-6 space-y-6 max-w-xl">
                <!-- Eyebrow Badge -->
                <div class="inline-flex items-center gap-2">
                    <span class="text-[11px] sm:text-xs font-bold uppercase tracking-widest text-slate-500">
                        WEB DEVELOPER & DESIGNER
                    </span>
                </div>

                <!-- Main Heading -->
                <div class="space-y-2">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-brand-950 tracking-tight leading-[1.12]">
                        Najam Razzaq
                    </h1>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-700 tracking-tight leading-snug">
                        Building Modern Web Solutions <br class="hidden sm:inline">for a Smarter Tomorrow
                    </h2>
                </div>

                <!-- Description -->
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed font-normal">
                    I create modern websites, scalable web applications, and digital solutions for businesses and teams using React.js, Node.js, Express.js, CodeIgniter 4 and more.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#work" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-lg bg-brand-950 text-white text-xs sm:text-sm font-semibold hover:bg-brand-800 transition-all shadow-sm active:scale-95">
                        <span>View My Work</span>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 rounded-lg border border-slate-300 bg-white text-brand-900 text-xs sm:text-sm font-semibold hover:bg-slate-50 transition-all shadow-sm active:scale-95">
                        Let's Work Together
                    </a>
                </div>

                <!-- Tech Stack Badges Row -->
                <div class="pt-6 border-t border-slate-200/80">
                    <div class="flex flex-wrap items-center gap-4 sm:gap-5 text-xs text-slate-600 font-medium">
                        <!-- React -->
                        <div class="flex items-center gap-1.5 hover:text-slate-900 transition-colors">
                            <svg class="w-4 h-4 text-[#61DAFB]" viewBox="0 0 24 24" fill="currentColor">
                                <ellipse cx="12" cy="12" rx="10" ry="4.5" fill="none" stroke="currentColor" stroke-width="1.5" transform="rotate(0 12 12)"/>
                                <ellipse cx="12" cy="12" rx="10" ry="4.5" fill="none" stroke="currentColor" stroke-width="1.5" transform="rotate(60 12 12)"/>
                                <ellipse cx="12" cy="12" rx="10" ry="4.5" fill="none" stroke="currentColor" stroke-width="1.5" transform="rotate(120 12 12)"/>
                                <circle cx="12" cy="12" r="1.8"/>
                            </svg>
                            <span>React.js</span>
                        </div>
                        <!-- Node.js -->
                        <div class="flex items-center gap-1.5 hover:text-slate-900 transition-colors">
                            <svg class="w-4 h-4 text-[#339933]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L3.5 6.9v9.8L12 21.6l8.5-4.9V6.9L12 2zm0 2.3l6.5 3.8v7.5L12 19.3 5.5 15.6V8.1L12 4.3z"/>
                            </svg>
                            <span>Node.js</span>
                        </div>
                        <!-- Express.js -->
                        <div class="flex items-center gap-1.5 hover:text-slate-900 transition-colors">
                            <span class="w-4 h-4 rounded-full bg-slate-800 text-[9px] text-white flex items-center justify-center font-bold">ex</span>
                            <span>Express.js</span>
                        </div>
                        <!-- CodeIgniter 4 -->
                        <div class="flex items-center gap-1.5 hover:text-slate-900 transition-colors">
                            <svg class="w-4 h-4 text-[#EE4623]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2c-.3 2.1-1.8 3.7-2.9 5.3C8 8.8 7.3 10.6 7.6 12.6c.3 1.9 1.6 3.4 3 4.7.7.7 1.4 1.4 1.7 2.3.2.6.2 1.2 0 1.8-.1.4-.3.7-.5 1 .9-.2 1.7-.7 2.3-1.4.9-1.1 1.2-2.6 1-4-.2-1.2-.8-2.3-1.5-3.3-1-1.4-1.9-2.8-1.6-4.5.6.8 1.4 1.5 2.1 2.3 1 1.2 1.8 2.6 2 4.1.2 1.9-.5 3.8-1.8 5.2 2.8-1.4 4.7-4.4 4.7-7.7 0-4.8-3.9-8.7-8-8.8z"/>
                            </svg>
                            <span>CodeIgniter 4</span>
                        </div>
                        <!-- MySQL -->
                        <div class="flex items-center gap-1.5 hover:text-slate-900 transition-colors">
                            <svg class="w-4 h-4 text-[#00758F]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 3C7.58 3 4 4.79 4 7v10c0 2.21 3.58 4 8 4s8-1.79 8-4V7c0-2.21-3.58-4-8-4zm0 2c3.87 0 6 1.5 6 2s-2.13 2-6 2-6-1.5-6-2 2.13-2 6-2zm6 12c0 .5-2.13 2-6 2s-6-1.5-6-2v-2.2c1.46.75 3.61 1.2 6 1.2s4.54-.45 6-1.2V17zm0-4c0 .5-2.13 2-6 2s-6-1.5-6-2v-2.2c1.46.75 3.61 1.2 6 1.2s4.54-.45 6-1.2V13z"/>
                            </svg>
                            <span>MySQL</span>
                        </div>
                        <!-- MongoDB -->
                        <div class="flex items-center gap-1.5 hover:text-slate-900 transition-colors">
                            <svg class="w-4 h-4 text-[#47A248]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C11.5 2 7 8.5 7 14c0 3.3 2.2 6 5 6s5-2.7 5-6c0-5.5-4.5-12-5-12zm0 18c-1.8 0-3-1.6-3-4 0-3.2 2.1-7.7 3-9.5.9 1.8 3 6.3 3 9.5 0 2.4-1.2 4-3 4z"/>
                            </svg>
                            <span>MongoDB</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Portrait Image (Visible on mobile/tablet) -->
            <div class="md:hidden mt-6 relative">
                <div class="relative w-full max-w-md mx-auto rounded-2xl overflow-hidden shadow-lg border border-slate-200/80">
                    <img src="<?= base_url('assets/images/hero-najam-wide.jpg') ?>" 
                         alt="Najam Razzaq - Web Developer & Designer" 
                         class="w-full h-auto object-cover">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SERVICES / HIGHLIGHTS RIBBON BAR -->
<section class="border-y border-slate-200/80 bg-white/70 py-5 mb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 lg:gap-0 lg:divide-x lg:divide-slate-200/80 items-center text-center sm:text-left">
            
            <!-- Item 1: Web Development -->
            <div class="flex items-center justify-center sm:justify-start lg:justify-center gap-3 px-3 py-1">
                <div class="text-slate-700 flex-shrink-0">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>
                    </svg>
                </div>
                <span class="text-xs sm:text-sm font-semibold text-slate-800">Web Development</span>
            </div>

            <!-- Item 2: Business Applications -->
            <div class="flex items-center justify-center sm:justify-start lg:justify-center gap-3 px-3 py-1">
                <div class="text-slate-700 flex-shrink-0">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>
                    </svg>
                </div>
                <span class="text-xs sm:text-sm font-semibold text-slate-800">Business Applications</span>
            </div>

            <!-- Item 3: APIs & Integrations -->
            <div class="flex items-center justify-center sm:justify-start lg:justify-center gap-3 px-3 py-1">
                <div class="text-slate-700 flex-shrink-0">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>
                    </svg>
                </div>
                <span class="text-xs sm:text-sm font-semibold text-slate-800">APIs & Integrations</span>
            </div>

            <!-- Item 4: CRM / ERP Solutions -->
            <div class="flex items-center justify-center sm:justify-start lg:justify-center gap-3 px-3 py-1">
                <div class="text-slate-700 flex-shrink-0">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="16" rx="2"/><line x1="9" y1="9" x2="15" y2="9"/><line x1="9" y1="13" x2="15" y2="13"/><circle cx="9" cy="9" r="1" fill="currentColor"/><circle cx="9" cy="13" r="1" fill="currentColor"/>
                    </svg>
                </div>
                <span class="text-xs sm:text-sm font-semibold text-slate-800">CRM / ERP Solutions</span>
            </div>

            <!-- Item 5: AI Integrations -->
            <div class="flex items-center justify-center sm:justify-start lg:justify-center gap-3 px-3 py-1 col-span-2 sm:col-span-1">
                <div class="text-slate-700 flex-shrink-0">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2a4 4 0 0 0-4 4v12a4 4 0 0 0 8 0V6a4 4 0 0 0-4-4z"/><path d="M8 6H4a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4"/><path d="M16 6h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-4"/><path d="M12 8v8"/>
                    </svg>
                </div>
                <span class="text-xs sm:text-sm font-semibold text-slate-800">AI Integrations</span>
            </div>

        </div>
    </div>
</section>

<!-- FEATURED PROJECTS SECTION -->
<section id="work" class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
            <div>
                <span class="text-[11px] font-bold uppercase tracking-widest text-slate-400">SELECTED WORK</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-950 tracking-tight mt-1">Featured Projects</h2>
                <p class="text-slate-500 text-xs sm:text-sm mt-2 max-w-2xl">
                    Real solutions for real businesses. Here are some of the projects I've worked on, across different industries and technologies.
                </p>
            </div>
            <div>
                <a href="#work" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-600 hover:text-black transition-colors group">
                    <span>View All Projects</span>
                    <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- 2-Column Asymmetric Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
            
            <!-- Project 1: ABHCC -->
            <div data-open-project="abhcc" class="project-card bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 space-y-6 flex flex-col justify-between shadow-sm cursor-pointer group">
                <div>
                    <!-- Badge -->
                    <span class="inline-block px-3 py-1 rounded-md bg-slate-100 text-slate-600 text-[11px] font-semibold mb-4">
                        Healthcare
                    </span>
                    <!-- Image Preview Mockup -->
                    <div class="rounded-xl overflow-hidden bg-slate-50 border border-slate-100 mb-6">
                        <img src="<?= base_url('assets/images/abhcc-mockup.jpg') ?>" alt="ABHCC Healthcare Management System" class="w-full h-auto object-cover group-hover:scale-[1.02] transition-transform duration-300">
                    </div>
                    <!-- Title & Subtitle -->
                    <h3 class="text-xl font-bold text-brand-950 tracking-tight group-hover:text-black transition-colors">ABHCC</h3>
                    <p class="text-xs font-medium text-slate-500 mt-0.5 mb-3">Healthcare Management System</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        A healthcare platform featuring international payment integration, AI-powered support and operational management workflows.
                    </p>
                </div>
                <!-- Tech Tags & Action -->
                <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                    <div class="flex flex-wrap items-center gap-1.5">
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">CodeIgniter 4</span>
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">MySQL</span>
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">Bootstrap</span>
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">Stripe</span>
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">Flutterwave</span>
                    </div>
                    <button type="button" data-open-project="abhcc" class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-700 group-hover:text-black group-hover:bg-slate-100 group-hover:border-slate-300 transition-all flex-shrink-0" aria-label="View Project Details">
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Project 2: Surion -->
            <div data-open-project="surion" class="project-card bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 space-y-6 flex flex-col justify-between shadow-sm cursor-pointer group">
                <div>
                    <!-- Badge -->
                    <span class="inline-block px-3 py-1 rounded-md bg-slate-100 text-slate-600 text-[11px] font-semibold mb-4">
                        Fintech
                    </span>
                    <!-- Image Preview Mockup -->
                    <div class="rounded-xl overflow-hidden bg-slate-50 border border-slate-100 mb-6">
                        <img src="<?= base_url('assets/images/surion-mockup.jpg') ?>" alt="Surion Financial Group CRM" class="w-full h-auto object-cover group-hover:scale-[1.02] transition-transform duration-300">
                    </div>
                    <!-- Title & Subtitle -->
                    <h3 class="text-xl font-bold text-brand-950 tracking-tight group-hover:text-black transition-colors">Surion</h3>
                    <p class="text-xs font-medium text-slate-500 mt-0.5 mb-3">Financial Group CRM</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Enterprise fintech platform with client management, virtual consultations and secure data handling.
                    </p>
                </div>
                <!-- Tech Tags & Action -->
                <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                    <div class="flex flex-wrap items-center gap-1.5">
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">CodeIgniter 4</span>
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">MySQL</span>
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">Tailwind CSS</span>
                    </div>
                    <button type="button" data-open-project="surion" class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-700 group-hover:text-black group-hover:bg-slate-100 group-hover:border-slate-300 transition-all flex-shrink-0" aria-label="View Project Details">
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Project 3: AlgilityX -->
            <div data-open-project="algilityx" class="project-card bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 space-y-6 flex flex-col justify-between shadow-sm cursor-pointer group">
                <div>
                    <!-- Badge -->
                    <span class="inline-block px-3 py-1 rounded-md bg-slate-100 text-slate-600 text-[11px] font-semibold mb-4">
                        Corporate
                    </span>
                    <!-- Image Preview Mockup -->
                    <div class="rounded-xl overflow-hidden bg-slate-50 border border-slate-100 mb-6">
                        <img src="<?= base_url('assets/images/algilityx-mockup.jpg') ?>" alt="AlgilityX Corporate Platform" class="w-full h-auto object-cover group-hover:scale-[1.02] transition-transform duration-300">
                    </div>
                    <!-- Title & Subtitle -->
                    <h3 class="text-xl font-bold text-brand-950 tracking-tight group-hover:text-black transition-colors">AlgilityX</h3>
                    <p class="text-xs font-medium text-slate-500 mt-0.5 mb-3">Corporate Platform</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Modern corporate platform with responsive UI, admin dashboard and REST API integration.
                    </p>
                </div>
                <!-- Tech Tags & Action -->
                <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                    <div class="flex flex-wrap items-center gap-1.5">
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">React.js</span>
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">Node.js</span>
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">Express.js</span>
                    </div>
                    <button type="button" data-open-project="algilityx" class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-700 group-hover:text-black group-hover:bg-slate-100 group-hover:border-slate-300 transition-all flex-shrink-0" aria-label="View Project Details">
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Project 4: Clinic ERP -->
            <div data-open-project="clinic-erp" class="project-card bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 space-y-6 flex flex-col justify-between shadow-sm cursor-pointer group">
                <div>
                    <!-- Badge -->
                    <span class="inline-block px-3 py-1 rounded-md bg-slate-100 text-slate-600 text-[11px] font-semibold mb-4">
                        Healthcare
                    </span>
                    <!-- Image Preview Mockup -->
                    <div class="rounded-xl overflow-hidden bg-slate-50 border border-slate-100 mb-6">
                        <img src="<?= base_url('assets/images/clinic-erp-mockup.jpg') ?>" alt="Clinic ERP Multi-Branch Management" class="w-full h-auto object-cover group-hover:scale-[1.02] transition-transform duration-300">
                    </div>
                    <!-- Title & Subtitle -->
                    <h3 class="text-xl font-bold text-brand-950 tracking-tight group-hover:text-black transition-colors">Clinic ERP</h3>
                    <p class="text-xs font-medium text-slate-500 mt-0.5 mb-3">Multi-Branch Management System</p>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Complex ERP solution with inventory, appointments, role-based dashboards and clinical workflows.
                    </p>
                </div>
                <!-- Tech Tags & Action -->
                <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                    <div class="flex flex-wrap items-center gap-1.5">
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">MERN Stack</span>
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">Tailwind CSS</span>
                        <span class="px-2.5 py-1 rounded-md bg-slate-100 text-[10px] font-medium text-slate-600">Chart.js</span>
                    </div>
                    <button type="button" data-open-project="clinic-erp" class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-700 group-hover:text-black group-hover:bg-slate-100 group-hover:border-slate-300 transition-all flex-shrink-0" aria-label="View Project Details">
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SERVICES SECTION -->
<section id="services" class="py-16 border-t border-slate-200/80 bg-slate-50/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Info Column -->
            <div class="lg:col-span-4 space-y-6">
                <div>
                    <span class="text-[11px] font-bold uppercase tracking-widest text-slate-400">WHAT I BUILD</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-950 tracking-tight mt-1 leading-tight">
                        Technology That Solves Real Business Problems
                    </h2>
                    <p class="text-slate-600 text-xs sm:text-sm mt-3 leading-relaxed">
                        I help businesses, startups and organizations build modern web solutions that are fast, secure and scalable.
                    </p>
                </div>

                <a href="#contact" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-brand-950 text-white text-xs font-semibold hover:bg-brand-800 transition-all shadow-sm">
                    <span>Explore All Services</span>
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 17L17 7M17 7H7M17 7V17"/>
                    </svg>
                </a>
            </div>

            <!-- Right 2x3 Grid of 6 Service Cards -->
            <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                
                <!-- Service 1 -->
                <div class="service-card bg-white rounded-xl border border-slate-200/80 p-5 space-y-3 relative group">
                    <div class="w-9 h-9 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm text-brand-950">Web Development</h4>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Modern, responsive websites for businesses and organizations.</p>
                    </div>
                    <div class="pt-2 flex justify-end">
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-black group-hover:translate-x-0.5 transition-all" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-card bg-white rounded-xl border border-slate-200/80 p-5 space-y-3 relative group">
                    <div class="w-9 h-9 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm text-brand-950">Web Applications</h4>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Custom applications tailored to your business needs.</p>
                    </div>
                    <div class="pt-2 flex justify-end">
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-black group-hover:translate-x-0.5 transition-all" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-card bg-white rounded-xl border border-slate-200/80 p-5 space-y-3 relative group">
                    <div class="w-9 h-9 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm text-brand-950">Frontend Development</h4>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Modern, performant interfaces with React.js & Tailwind.</p>
                    </div>
                    <div class="pt-2 flex justify-end">
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-black group-hover:translate-x-0.5 transition-all" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="service-card bg-white rounded-xl border border-slate-200/80 p-5 space-y-3 relative group">
                    <div class="w-9 h-9 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm text-brand-950">Backend & APIs</h4>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Secure and scalable APIs using Node.js, Express.js and CI4.</p>
                    </div>
                    <div class="pt-2 flex justify-end">
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-black group-hover:translate-x-0.5 transition-all" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="service-card bg-white rounded-xl border border-slate-200/80 p-5 space-y-3 relative group">
                    <div class="w-9 h-9 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 7V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3"/><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M9 17v-4"/><path d="M12 17v-2"/><path d="M15 17v-6"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm text-brand-950">CRM / ERP Systems</h4>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Business management platforms, dashboards and role-based systems.</p>
                    </div>
                    <div class="pt-2 flex justify-end">
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-black group-hover:translate-x-0.5 transition-all" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="service-card bg-white rounded-xl border border-slate-200/80 p-5 space-y-3 relative group">
                    <div class="w-9 h-9 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm text-brand-950">AI-Powered Features</h4>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">AI chatbots and intelligent features integrated into your platform.</p>
                    </div>
                    <div class="pt-2 flex justify-end">
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-black group-hover:translate-x-0.5 transition-all" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- ABOUT ME SECTION -->
<section id="about" class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <!-- Left Portrait Box -->
            <div class="lg:col-span-3">
                <div class="rounded-2xl overflow-hidden bg-slate-100 border border-slate-200/90 shadow-md max-w-xs mx-auto lg:max-w-none">
                    <img src="<?= base_url('assets/images/about-najam.jpg') ?>" alt="Najam Razzaq" class="w-full h-auto aspect-square object-cover object-top">
                </div>
            </div>

            <!-- Middle Text Column -->
            <div class="lg:col-span-5 space-y-4">
                <span class="text-[11px] font-bold uppercase tracking-widest text-slate-400">ABOUT ME</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-brand-950 tracking-tight leading-snug">
                    Turning Ideas Into Digital Products
                </h2>
                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                    I'm Najam Razzaq, a Web Developer & Designer focused on creating modern, scalable and user-focused digital experiences. My experience spans frontend development, backend systems, APIs, databases and enterprise applications across healthcare, fintech, B2B and corporate platforms.
                </p>
                <div class="pt-2">
                    <button type="button" id="open-about-modal" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-brand-950 text-white text-xs font-semibold hover:bg-brand-800 transition-all shadow-sm cursor-pointer active:scale-95">
                        <span>More about Me</span>
                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right Key Traits List -->
            <div class="lg:col-span-4 space-y-4 pt-4 lg:pt-0">
                
                <div class="flex items-start gap-3.5 p-3 rounded-xl bg-white border border-slate-200/70 shadow-sm">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-xs text-brand-950">Problem Solver</h4>
                        <p class="text-[11px] text-slate-500 mt-0.5">I turn complex challenges into simple solutions.</p>
                    </div>
                </div>

                <div class="flex items-start gap-3.5 p-3 rounded-xl bg-white border border-slate-200/70 shadow-sm">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-xs text-brand-950">Collaborative</h4>
                        <p class="text-[11px] text-slate-500 mt-0.5">I work closely with teams and clients.</p>
                    </div>
                </div>

                <div class="flex items-start gap-3.5 p-3 rounded-xl bg-white border border-slate-200/70 shadow-sm">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-xs text-brand-950">Detail-Oriented</h4>
                        <p class="text-[11px] text-slate-500 mt-0.5">Focus on quality, performance and clean code.</p>
                    </div>
                </div>

                <div class="flex items-start gap-3.5 p-3 rounded-xl bg-white border border-slate-200/70 shadow-sm">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 12h20"/><path d="M20 12v8H4v-8"/><path d="m4 6 8-4 8 4"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-xs text-brand-950">Always Learning</h4>
                        <p class="text-[11px] text-slate-500 mt-0.5">Deep curiosity and stay up-to-date with new technologies.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- CAREER JOURNEY SECTION -->
<section class="py-16 border-t border-slate-200/80 bg-slate-50/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
            <div>
                <span class="text-[11px] font-bold uppercase tracking-widest text-slate-400">MY EXPERIENCE</span>
                <h2 class="text-3xl font-extrabold text-brand-950 tracking-tight mt-1">Career Journey</h2>
                <p class="text-slate-500 text-xs sm:text-sm mt-1 max-w-xl">
                    My professional journey from intern to junior developer and beyond, focused on building impactful web solutions.
                </p>
            </div>
            <div>
                <a href="#contact" class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg border border-slate-300 text-xs font-semibold text-slate-700 bg-white hover:bg-slate-50 transition-colors shadow-sm">
                    <span>View Full Experience</span>
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 17L17 7M17 7H7M17 7V17"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- 3-Milestone Row -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Milestone 1 -->
            <div class="bg-white rounded-xl border border-slate-200/80 p-5 space-y-4 shadow-sm relative">
                <div class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-full bg-brand-950 text-white text-[11px] font-bold flex items-center justify-center">01</span>
                    <h4 class="font-bold text-sm text-brand-950">AlgilityX Private Limited</h4>
                </div>
                <div class="pl-10 space-y-1">
                    <p class="text-xs font-semibold text-slate-700">Web Developer (Part-Time)</p>
                    <p class="text-[11px] text-slate-400">June 2026 – August 2026</p>
                </div>
            </div>

            <!-- Milestone 2 -->
            <div class="bg-white rounded-xl border border-slate-200/80 p-5 space-y-4 shadow-sm relative">
                <div class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-full bg-brand-950 text-white text-[11px] font-bold flex items-center justify-center">02</span>
                    <h4 class="font-bold text-sm text-brand-950">WebSphere Innovations</h4>
                </div>
                <div class="pl-10 space-y-1">
                    <p class="text-xs font-semibold text-slate-700">Junior Web Developer</p>
                    <p class="text-[11px] text-slate-400">November 2025 – August 2026</p>
                </div>
            </div>

            <!-- Milestone 3 -->
            <div class="bg-white rounded-xl border border-slate-200/80 p-5 space-y-4 shadow-sm relative">
                <div class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-full bg-brand-950 text-white text-[11px] font-bold flex items-center justify-center">03</span>
                    <h4 class="font-bold text-sm text-brand-950">WebSphere Innovations</h4>
                </div>
                <div class="pl-10 space-y-1">
                    <p class="text-xs font-semibold text-slate-700">Web Developer Intern</p>
                    <p class="text-[11px] text-slate-400">August 2025 – November 2025</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- TECHNICAL EXPERTISE SECTION ("BUILT WITH") -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
            <div>
                <span class="text-[11px] font-bold uppercase tracking-widest text-slate-400">TECHNICAL EXPERTISE</span>
                <h2 class="text-3xl font-extrabold text-brand-950 tracking-tight mt-1">Built With</h2>
            </div>
            <p class="text-slate-500 text-xs sm:text-sm max-w-md">
                Technologies and tools I use to build modern and scalable web applications.
            </p>
        </div>

        <!-- 5 Category Columns -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
            
            <!-- Column 1: Frontend -->
            <div class="bg-white rounded-xl border border-slate-200/80 p-5 space-y-4 shadow-sm">
                <div class="flex items-center gap-2 text-brand-950 font-bold text-xs pb-2 border-b border-slate-100">
                    <svg class="w-4 h-4 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>
                    </svg>
                    <span>Frontend</span>
                </div>
                <ul class="space-y-2 text-xs text-slate-600 font-medium">
                    <li>React.js</li>
                    <li>JavaScript (ES6+)</li>
                    <li>Tailwind CSS</li>
                    <li>Bootstrap 5</li>
                    <li>HTML5 / CSS3</li>
                </ul>
            </div>

            <!-- Column 2: Backend -->
            <div class="bg-white rounded-xl border border-slate-200/80 p-5 space-y-4 shadow-sm">
                <div class="flex items-center gap-2 text-brand-950 font-bold text-xs pb-2 border-b border-slate-100">
                    <svg class="w-4 h-4 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>
                    </svg>
                    <span>Backend</span>
                </div>
                <ul class="space-y-2 text-xs text-slate-600 font-medium">
                    <li>Node.js</li>
                    <li>Express.js</li>
                    <li>CodeIgniter 4</li>
                    <li>PHP</li>
                </ul>
            </div>

            <!-- Column 3: Data -->
            <div class="bg-white rounded-xl border border-slate-200/80 p-5 space-y-4 shadow-sm">
                <div class="flex items-center gap-2 text-brand-950 font-bold text-xs pb-2 border-b border-slate-100">
                    <svg class="w-4 h-4 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>
                    </svg>
                    <span>Data</span>
                </div>
                <ul class="space-y-2 text-xs text-slate-600 font-medium">
                    <li>MongoDB</li>
                    <li>MySQL</li>
                </ul>
            </div>

            <!-- Column 4: Engineering -->
            <div class="bg-white rounded-xl border border-slate-200/80 p-5 space-y-4 shadow-sm">
                <div class="flex items-center gap-2 text-brand-950 font-bold text-xs pb-2 border-b border-slate-100">
                    <svg class="w-4 h-4 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="6" y1="3" x2="6" y2="15"/><circle cx="18" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><path d="M18 9a9 9 0 0 1-9 9"/>
                    </svg>
                    <span>Engineering</span>
                </div>
                <ul class="space-y-2 text-xs text-slate-600 font-medium">
                    <li>REST APIs</li>
                    <li>JWT Authentication</li>
                    <li>MVC</li>
                    <li>Git / GitHub</li>
                </ul>
            </div>

            <!-- Column 5: Tools -->
            <div class="bg-white rounded-xl border border-slate-200/80 p-5 space-y-4 shadow-sm col-span-2 sm:col-span-1">
                <div class="flex items-center gap-2 text-brand-950 font-bold text-xs pb-2 border-b border-slate-100">
                    <svg class="w-4 h-4 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                    </svg>
                    <span>Tools</span>
                </div>
                <ul class="space-y-2 text-xs text-slate-600 font-medium">
                    <li>VS Code</li>
                    <li>Postman</li>
                    <li>Cursor</li>
                    <li>Vapi AI</li>
                    <li>Lovable</li>
                    <li>Bolt.new</li>
                </ul>
            </div>

        </div>

    </div>
</section>

<!-- MY PROCESS SECTION ("FROM IDEA TO PRODUCT") -->
<section class="py-16 border-t border-slate-200/80 bg-slate-50/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
            <div>
                <span class="text-[11px] font-bold uppercase tracking-widest text-slate-400">MY PROCESS</span>
                <h2 class="text-3xl font-extrabold text-brand-950 tracking-tight mt-1">From Idea to Product</h2>
                <p class="text-slate-500 text-xs sm:text-sm mt-1 max-w-xl">
                    A simple, effective process to turn your vision into a successful digital product.
                </p>
            </div>
            <div>
                <a href="#contact" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-700 hover:text-black transition-colors">
                    <span>Let's build together</span>
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 17L17 7M17 7H7M17 7V17"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- 6 Process Step Cards -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
            
            <div class="bg-white rounded-xl border border-slate-200/80 p-4 space-y-2 shadow-sm">
                <span class="text-xs font-bold text-slate-400">01</span>
                <h4 class="font-bold text-xs text-brand-950">Discover</h4>
                <p class="text-[11px] text-slate-500 leading-snug">Understand your goals and requirements.</p>
            </div>

            <div class="bg-white rounded-xl border border-slate-200/80 p-4 space-y-2 shadow-sm">
                <span class="text-xs font-bold text-slate-400">02</span>
                <h4 class="font-bold text-xs text-brand-950">Plan</h4>
                <p class="text-[11px] text-slate-500 leading-snug">Define the solution and architecture.</p>
            </div>

            <div class="bg-white rounded-xl border border-slate-200/80 p-4 space-y-2 shadow-sm">
                <span class="text-xs font-bold text-slate-400">03</span>
                <h4 class="font-bold text-xs text-brand-950">Design</h4>
                <p class="text-[11px] text-slate-500 leading-snug">Create the experience and interface.</p>
            </div>

            <div class="bg-white rounded-xl border border-slate-200/80 p-4 space-y-2 shadow-sm">
                <span class="text-xs font-bold text-slate-400">04</span>
                <h4 class="font-bold text-xs text-brand-950">Develop</h4>
                <p class="text-[11px] text-slate-500 leading-snug">Build the product with clean code.</p>
            </div>

            <div class="bg-white rounded-xl border border-slate-200/80 p-4 space-y-2 shadow-sm">
                <span class="text-xs font-bold text-slate-400">05</span>
                <h4 class="font-bold text-xs text-brand-950">Refine</h4>
                <p class="text-[11px] text-slate-500 leading-snug">Test, optimize and improve.</p>
            </div>

            <div class="bg-white rounded-xl border border-slate-200/80 p-4 space-y-2 shadow-sm">
                <span class="text-xs font-bold text-slate-400">06</span>
                <h4 class="font-bold text-xs text-brand-950">Launch</h4>
                <p class="text-[11px] text-slate-500 leading-snug">Deliver a production-ready solution.</p>
            </div>

        </div>

    </div>
</section>

<!-- TESTIMONIALS SECTION (DARK SLATE BOX) -->
<section class="py-12" id="testimonials">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="testimonial-card-wrapper" class="rounded-3xl bg-brand-950 text-white p-8 sm:p-12 lg:p-14 shadow-2xl relative overflow-hidden transition-all">
            
            <!-- Subtle Radial Glow Background -->
            <div class="absolute -right-20 -top-20 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-emerald-500/5 rounded-full blur-3xl pointer-events-none"></div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
                
                <!-- Left Column -->
                <div class="lg:col-span-5 space-y-3">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800/80 border border-slate-700/60 text-slate-300 text-[10px] font-bold uppercase tracking-widest">
                        <span>⭐</span>
                        <span>CLIENTS &amp; COLLEAGUES</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white leading-tight">
                        Trusted by Businesses &amp; Teams Worldwide
                    </h2>
                    <p class="text-xs text-slate-400 max-w-sm leading-relaxed">
                        What project managers, technical leads, and founders say about working with me.
                    </p>
                </div>

                <!-- Right Dynamic Quote Column -->
                <div class="lg:col-span-7 space-y-6">
                    
                    <!-- Stars & Quote Box -->
                    <div id="testimonial-content-box" class="space-y-4 min-h-[140px] flex flex-col justify-center transition-all duration-300 opacity-100 transform translate-y-0">
                        
                        <!-- 5 Star Rating Icons -->
                        <div class="flex items-center gap-1 text-amber-400">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>

                        <!-- Quote -->
                        <blockquote id="testimonial-quote" class="text-sm sm:text-base text-slate-200 font-normal leading-relaxed italic">
                            "Najam did an outstanding job on our platform. His attention to detail, backend architecture, and communication were exceptional. Highly recommended!"
                        </blockquote>
                    </div>
                    
                    <!-- Bottom Bar (Author & Nav) -->
                    <div class="flex items-center justify-between pt-4 border-t border-slate-800/90">
                        <div id="testimonial-author-box" class="flex items-center gap-2">
                            <span id="testimonial-author" class="text-xs sm:text-sm font-bold text-white">Engineering Lead</span>
                            <span class="text-slate-600">&bull;</span>
                            <span id="testimonial-company" class="text-xs text-slate-400 font-medium">AlgilityX</span>
                        </div>
                        
                        <!-- Navigation controls -->
                        <div class="flex items-center gap-4">
                            <!-- Indicator Dots -->
                            <div id="testimonial-dots" class="flex items-center gap-1.5">
                                <button type="button" data-index="0" class="testimonial-dot w-2 h-2 rounded-full bg-white transition-all cursor-pointer" aria-label="Slide 1"></button>
                                <button type="button" data-index="1" class="testimonial-dot w-2 h-2 rounded-full bg-slate-700 hover:bg-slate-500 transition-all cursor-pointer" aria-label="Slide 2"></button>
                                <button type="button" data-index="2" class="testimonial-dot w-2 h-2 rounded-full bg-slate-700 hover:bg-slate-500 transition-all cursor-pointer" aria-label="Slide 3"></button>
                                <button type="button" data-index="3" class="testimonial-dot w-2 h-2 rounded-full bg-slate-700 hover:bg-slate-500 transition-all cursor-pointer" aria-label="Slide 4"></button>
                            </div>

                            <!-- Prev & Next Buttons -->
                            <div class="flex items-center gap-1.5">
                                <button type="button" id="testimonial-prev-btn" class="w-8 h-8 rounded-full border border-slate-700 flex items-center justify-center text-slate-400 hover:text-white hover:border-slate-400 hover:bg-slate-800 transition-all cursor-pointer active:scale-90" aria-label="Previous testimonial">
                                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 18l-6-6 6-6"/></svg>
                                </button>
                                <button type="button" id="testimonial-next-btn" class="w-8 h-8 rounded-full border border-slate-700 flex items-center justify-center text-slate-400 hover:text-white hover:border-slate-400 hover:bg-slate-800 transition-all cursor-pointer active:scale-90" aria-label="Next testimonial">
                                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="py-20 bg-slate-50/50 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
            
            <!-- Left Info Column -->
            <div class="lg:col-span-5 space-y-6">
                <!-- Status Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>Available for Freelance &amp; Full-time Roles</span>
                </div>

                <div class="space-y-3">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-brand-950 tracking-tight leading-tight">
                        Let's build something <span class="bg-gradient-to-r from-brand-950 via-slate-700 to-brand-900 bg-clip-text text-transparent">exceptional.</span>
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Have a web application, business platform, custom dashboard, or technical idea in mind? Send me a message and let's talk about how we can make it a reality.
                    </p>
                </div>

                <!-- Response Speed Card -->
                <div class="p-4 rounded-2xl bg-white border border-slate-200/80 flex items-center gap-3 shadow-xs">
                    <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center flex-shrink-0 font-bold">
                        ⚡
                    </div>
                    <div>
                        <div class="text-xs font-bold text-brand-950">Fast Response Guaranteed</div>
                        <div class="text-[11px] text-slate-500">Usually replies in less than 2 hours during business hours</div>
                    </div>
                </div>

                <!-- Direct Contact Cards -->
                <div class="space-y-3 pt-2">
                    <a href="mailto:najamrazzaq7861@gmail.com" class="flex items-center justify-between p-3.5 rounded-2xl bg-white border border-slate-200/80 hover:border-brand-950/40 hover:shadow-sm transition-all group">
                        <div class="flex items-center gap-3 min-w-0">
                            <div class="w-9 h-9 rounded-xl bg-slate-100 flex items-center justify-center text-slate-700 group-hover:bg-brand-950 group-hover:text-white transition-colors flex-shrink-0">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </div>
                            <div class="min-w-0">
                                <div class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Email Address</div>
                                <div class="text-xs sm:text-sm font-semibold text-slate-900 truncate">najamrazzaq7861@gmail.com</div>
                            </div>
                        </div>
                        <span class="text-xs font-semibold text-slate-400 group-hover:text-brand-950 transition-colors">↗</span>
                    </a>

                    <a href="tel:+923278737313" class="flex items-center justify-between p-3.5 rounded-2xl bg-white border border-slate-200/80 hover:border-brand-950/40 hover:shadow-sm transition-all group">
                        <div class="flex items-center gap-3 min-w-0">
                            <div class="w-9 h-9 rounded-xl bg-slate-100 flex items-center justify-center text-slate-700 group-hover:bg-brand-950 group-hover:text-white transition-colors flex-shrink-0">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                            </div>
                            <div class="min-w-0">
                                <div class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Phone / WhatsApp</div>
                                <div class="text-xs sm:text-sm font-semibold text-slate-900 truncate">+92 327 8737313</div>
                            </div>
                        </div>
                        <span class="text-xs font-semibold text-slate-400 group-hover:text-brand-950 transition-colors">↗</span>
                    </a>

                    <div class="grid grid-cols-2 gap-3">
                        <a href="https://www.linkedin.com/in/najam-razzaq-1bb453339/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2.5 p-3 rounded-2xl bg-white border border-slate-200/80 hover:border-[#0A66C2]/50 hover:bg-blue-50/30 transition-all group">
                            <div class="w-8 h-8 rounded-xl bg-slate-100 flex items-center justify-center text-slate-700 group-hover:bg-[#0A66C2] group-hover:text-white transition-colors flex-shrink-0">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                    <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.2V10.9H6.46M7.83 6.5a1.6 1.6 0 0 0-1.6 1.6 1.6 1.6 0 0 0 1.6 1.6 1.6 1.6 0 0 0 1.6-1.6 1.6 1.6 0 0 0-1.6-1.6Z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-slate-800">LinkedIn</span>
                        </a>

                        <a href="https://github.com/NajamRazzaq" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2.5 p-3 rounded-2xl bg-white border border-slate-200/80 hover:border-brand-950/50 hover:bg-slate-50 transition-all group">
                            <div class="w-8 h-8 rounded-xl bg-slate-100 flex items-center justify-center text-slate-700 group-hover:bg-brand-950 group-hover:text-white transition-colors flex-shrink-0">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-slate-800">GitHub</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Form Column -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-3xl border border-slate-200/90 p-6 sm:p-8 lg:p-10 shadow-sm relative overflow-hidden">
                    
                    <div class="mb-6">
                        <h3 class="text-xl sm:text-2xl font-bold text-brand-950">Send a Message</h3>
                        <p class="text-xs sm:text-sm text-slate-500 mt-1">Fill out the quick form below and I'll get back to you promptly.</p>
                    </div>

                    <!-- Contact Form -->
                    <form id="portfolio-contact-form" class="space-y-5">
                        
                        <!-- Name & Email Row -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="contact-name" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    Your Name <span class="text-rose-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="contact-name" 
                                    name="name" 
                                    required 
                                    placeholder="e.g. Alex Johnson"
                                    class="w-full px-4 py-3 rounded-xl bg-slate-50/70 border border-slate-200 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-brand-950/20 focus:border-brand-950 focus:bg-white transition-all"
                                >
                            </div>

                            <div>
                                <label for="contact-email" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    Your Email <span class="text-rose-500">*</span>
                                </label>
                                <input 
                                    type="email" 
                                    id="contact-email" 
                                    name="email" 
                                    required 
                                    placeholder="alex@example.com"
                                    class="w-full px-4 py-3 rounded-xl bg-slate-50/70 border border-slate-200 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-brand-950/20 focus:border-brand-950 focus:bg-white transition-all"
                                >
                            </div>
                        </div>

                        <!-- Project Type / Service Category Pills -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-2">
                                What type of project are you looking for?
                            </label>
                            
                            <!-- Hidden input storing selected value -->
                            <input type="hidden" id="contact-service" name="service" value="Full-Stack Web App">

                            <div class="flex flex-wrap gap-2" id="service-pill-group">
                                <button type="button" data-service="Full-Stack Web App" class="service-pill active px-3.5 py-2 rounded-xl text-xs font-semibold border transition-all cursor-pointer bg-brand-950 text-white border-brand-950 shadow-xs">
                                    💻 Full-Stack Web App
                                </button>
                                <button type="button" data-service="Frontend / UI Design" class="service-pill px-3.5 py-2 rounded-xl text-xs font-semibold border transition-all cursor-pointer bg-slate-50 text-slate-700 border-slate-200 hover:bg-slate-100">
                                    🎨 Frontend / UI Design
                                </button>
                                <button type="button" data-service="Custom ERP / Dashboard" class="service-pill px-3.5 py-2 rounded-xl text-xs font-semibold border transition-all cursor-pointer bg-slate-50 text-slate-700 border-slate-200 hover:bg-slate-100">
                                    📊 Custom ERP / Dashboard
                                </button>
                                <button type="button" data-service="API & Database" class="service-pill px-3.5 py-2 rounded-xl text-xs font-semibold border transition-all cursor-pointer bg-slate-50 text-slate-700 border-slate-200 hover:bg-slate-100">
                                    ⚡ API &amp; Database
                                </button>
                                <button type="button" data-service="Other Inquiry" class="service-pill px-3.5 py-2 rounded-xl text-xs font-semibold border transition-all cursor-pointer bg-slate-50 text-slate-700 border-slate-200 hover:bg-slate-100">
                                    💬 General Inquiry
                                </button>
                            </div>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="contact-message" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                Your Message <span class="text-rose-500">*</span>
                            </label>
                            <textarea 
                                id="contact-message" 
                                name="message" 
                                rows="4" 
                                required 
                                placeholder="Tell me a bit about your project goals, required tech stack, timeline, or any questions..."
                                class="w-full px-4 py-3 rounded-xl bg-slate-50/70 border border-slate-200 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-brand-950/20 focus:border-brand-950 focus:bg-white transition-all resize-y"
                            ></textarea>
                        </div>

                        <!-- Form Feedback Alerts -->
                        <div id="contact-success-msg" class="hidden p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-900 text-xs sm:text-sm font-medium flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-emerald-500 text-white flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <span class="font-bold">Message sent successfully!</span> Thank you for reaching out. I'll get back to you shortly.
                            </div>
                        </div>

                        <div id="contact-error-msg" class="hidden p-4 rounded-xl bg-rose-50 border border-rose-200 text-rose-900 text-xs font-medium">
                            Something went wrong. You can also reach me directly at <a href="mailto:najamrazzaq7861@gmail.com" class="underline font-bold">najamrazzaq7861@gmail.com</a>.
                        </div>

                        <!-- Submit Button -->
                        <button 
                            type="submit" 
                            id="contact-submit-btn"
                            class="w-full py-3.5 px-6 rounded-xl bg-brand-950 text-white text-sm font-semibold hover:bg-brand-900 active:scale-[0.99] transition-all shadow-sm flex items-center justify-center gap-2 cursor-pointer"
                        >
                            <span id="btn-text">Send Message</span>
                            <svg id="btn-icon" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg>
                            <!-- Spinner (hidden by default) -->
                            <svg id="btn-spinner" class="hidden animate-spin w-4 h-4 text-white" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </button>

                    </form>

                </div>
            </div>

        </div>

    </div>
</section>

<?= $this->endSection() ?>
