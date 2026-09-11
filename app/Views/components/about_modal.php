<!-- ABOUT ME MODAL -->
<div id="about-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 hidden" role="dialog" aria-modal="true" aria-labelledby="about-modal-title">
    
    <!-- Backdrop Blur -->
    <div id="about-modal-backdrop" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity duration-300 opacity-0 cursor-pointer"></div>

    <!-- Modal Content Card -->
    <div id="about-modal-card" class="relative w-full max-w-2xl max-h-[90vh] bg-white rounded-3xl border border-slate-200/90 shadow-2xl overflow-hidden flex flex-col transform transition-all duration-300 scale-95 opacity-0 z-10">
        
        <!-- Header -->
        <div class="px-6 sm:px-8 py-5 border-b border-slate-100 flex items-center justify-between bg-slate-50/50">
            <div class="flex items-center gap-3">
                <span class="px-2.5 py-1 rounded-full bg-brand-950 text-white text-[10px] font-bold uppercase tracking-wider">
                    Full Profile
                </span>
                <span class="text-xs text-slate-500 font-medium">About Najam Razzaq</span>
            </div>

            <button type="button" id="close-about-modal" class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:text-black hover:border-slate-300 hover:bg-slate-50 transition-all cursor-pointer" aria-label="Close modal">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <!-- Modal Body (Scrollable) -->
        <div class="p-6 sm:p-8 space-y-6 overflow-y-auto text-slate-800">
            
            <!-- Profile Info Card -->
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-200/70">
                <div class="relative w-16 h-16 sm:w-20 sm:h-20 rounded-2xl overflow-hidden bg-slate-200 flex-shrink-0 border-2 border-white shadow-xs">
                    <img src="<?= base_url('assets/images/about-najam.jpg') ?>" alt="Najam Razzaq" class="w-full h-full object-cover object-top">
                    <span class="absolute bottom-1 right-1 w-3.5 h-3.5 rounded-full bg-emerald-500 border-2 border-white"></span>
                </div>
                <div class="space-y-1 text-center sm:text-left min-w-0">
                    <h3 id="about-modal-title" class="text-xl font-bold text-brand-950 tracking-tight">Najam Razzaq</h3>
                    <p class="text-xs font-semibold text-slate-600">Web Developer &amp; Software Engineer</p>
                    <p class="text-[11px] text-slate-400">📍 Lahore, Pakistan &bull; Open for Remote &amp; On-Site Opportunities</p>
                </div>
            </div>

            <!-- Detailed Biography -->
            <div class="space-y-2">
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400">Professional Background</h4>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    I am a dedicated Web Developer with a strong foundation in building modern, high-performance web applications, scalable ERP systems, and responsive digital products. With extensive experience across both frontend engineering and backend architecture, I specialize in transforming complex business workflows into clean, intuitive, and efficient solutions.
                </p>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    My project history covers enterprise healthcare management (MERN ERP), fintech platforms (Surion with Stripe/Flutterwave), corporate SaaS architectures (AlgilityX), and e-learning systems (ABHCC with live BigBlueButton &amp; AI chat integration).
                </p>
            </div>

            <!-- Engineering Philosophy / Pillars -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400">Core Engineering Principles</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    
                    <div class="p-3 rounded-xl bg-white border border-slate-200/80 shadow-xs space-y-1">
                        <div class="flex items-center gap-2">
                            <span class="text-sm">⚡</span>
                            <span class="text-xs font-bold text-brand-950">Performance First</span>
                        </div>
                        <p class="text-[11px] text-slate-500 leading-normal">Fast load speeds, optimized queries, and clean modular code.</p>
                    </div>

                    <div class="p-3 rounded-xl bg-white border border-slate-200/80 shadow-xs space-y-1">
                        <div class="flex items-center gap-2">
                            <span class="text-sm">🛡️</span>
                            <span class="text-xs font-bold text-brand-950">Security &amp; Scalability</span>
                        </div>
                        <p class="text-[11px] text-slate-500 leading-normal">Role-based access control (RBAC), data isolation, and secure APIs.</p>
                    </div>

                    <div class="p-3 rounded-xl bg-white border border-slate-200/80 shadow-xs space-y-1">
                        <div class="flex items-center gap-2">
                            <span class="text-sm">🎯</span>
                            <span class="text-xs font-bold text-brand-950">User-Centric UX</span>
                        </div>
                        <p class="text-[11px] text-slate-500 leading-normal">Pixel-accurate, modern, and accessible interface designs.</p>
                    </div>

                    <div class="p-3 rounded-xl bg-white border border-slate-200/80 shadow-xs space-y-1">
                        <div class="flex items-center gap-2">
                            <span class="text-sm">🤝</span>
                            <span class="text-xs font-bold text-brand-950">Clear Collaboration</span>
                        </div>
                        <p class="text-[11px] text-slate-500 leading-normal">Transparent communication, agile workflows, and timely delivery.</p>
                    </div>

                </div>
            </div>

            <!-- Education & Technical Focus -->
            <div class="space-y-2">
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400">Education &amp; Tech Stack</h4>
                <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/70 space-y-2">
                    <div class="flex items-center justify-between text-xs">
                        <span class="font-bold text-slate-900">Bachelor of Science in Computer Science (BSCS)</span>
                        <span class="text-[11px] text-slate-500 font-medium">Computer Science</span>
                    </div>
                    <div class="flex flex-wrap gap-1.5 pt-1">
                        <span class="px-2 py-0.5 rounded bg-white text-slate-700 text-[10px] font-semibold border border-slate-200">React.js</span>
                        <span class="px-2 py-0.5 rounded bg-white text-slate-700 text-[10px] font-semibold border border-slate-200">Node.js</span>
                        <span class="px-2 py-0.5 rounded bg-white text-slate-700 text-[10px] font-semibold border border-slate-200">Express.js</span>
                        <span class="px-2 py-0.5 rounded bg-white text-slate-700 text-[10px] font-semibold border border-slate-200">CodeIgniter 4</span>
                        <span class="px-2 py-0.5 rounded bg-white text-slate-700 text-[10px] font-semibold border border-slate-200">PHP</span>
                        <span class="px-2 py-0.5 rounded bg-white text-slate-700 text-[10px] font-semibold border border-slate-200">MongoDB</span>
                        <span class="px-2 py-0.5 rounded bg-white text-slate-700 text-[10px] font-semibold border border-slate-200">MySQL</span>
                        <span class="px-2 py-0.5 rounded bg-white text-slate-700 text-[10px] font-semibold border border-slate-200">Tailwind CSS</span>
                        <span class="px-2 py-0.5 rounded bg-white text-slate-700 text-[10px] font-semibold border border-slate-200">REST APIs</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer CTA Buttons -->
        <div class="p-6 border-t border-slate-100 bg-slate-50/50 flex flex-col sm:flex-row items-center justify-between gap-3">
            
            <a 
                href="<?= base_url('assets/docs/Najam_Razzaq_CV.pdf') ?>" 
                target="_blank" 
                download="Najam_Razzaq_CV.pdf"
                class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-5 py-2.5 rounded-xl bg-brand-950 text-white text-xs font-semibold hover:bg-brand-900 active:scale-95 transition-all shadow-sm"
            >
                <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                </svg>
                <span>Download Official CV (PDF)</span>
            </a>

            <div class="flex items-center gap-2 w-full sm:w-auto">
                <a 
                    href="#contact" 
                    id="about-modal-contact-btn"
                    class="inline-flex items-center justify-center gap-1.5 w-full sm:w-auto px-4 py-2.5 rounded-xl border border-slate-300 text-xs font-semibold text-slate-700 bg-white hover:bg-slate-100 transition-all shadow-xs"
                >
                    <span>Get in Touch</span>
                    <span class="text-xs">↗</span>
                </a>
                <button type="button" id="close-about-modal-bottom" class="px-4 py-2.5 rounded-xl text-xs font-semibold text-slate-500 hover:text-black hover:bg-slate-200/60 transition-colors">
                    Close
                </button>
            </div>

        </div>

    </div>
</div>
