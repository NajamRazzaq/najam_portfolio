<footer class="border-t border-slate-200/80 bg-slate-50/80 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Main 4-Column Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 pb-12 border-b border-slate-200/70">
            
            <!-- Column 1: Brand & Availability (4 cols) -->
            <div class="lg:col-span-4 space-y-4">
                <a href="<?= base_url() ?>" class="flex items-center gap-3 group inline-block">
                    <div class="w-10 h-10 rounded-xl bg-brand-950 text-white flex items-center justify-center font-serif font-black text-xl tracking-tighter shadow-sm group-hover:scale-105 transition-transform">
                        NR
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-base tracking-tight text-brand-900 group-hover:text-black transition-colors">Najam Razzaq</span>
                        <span class="text-[11px] text-brand-500 font-medium tracking-wide">Web Developer & Designer</span>
                    </div>
                </a>

                <p class="text-xs text-slate-600 leading-relaxed max-w-sm font-normal">
                    Creating modern, scalable web applications and digital solutions with clean architecture, high performance, and real business impact.
                </p>

                <!-- Availability Badge -->
                <div class="pt-1">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-50 border border-emerald-200/70 text-emerald-800 text-[11px] font-semibold">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>Available for new projects & roles</span>
                    </div>
                </div>
            </div>

            <!-- Column 2: Navigation (2 cols) -->
            <div class="lg:col-span-2 space-y-3">
                <span class="text-[11px] font-bold uppercase tracking-widest text-slate-400">NAVIGATION</span>
                <ul class="space-y-2 text-xs font-medium text-slate-600">
                    <li><a href="#home" class="hover:text-black transition-colors">Home</a></li>
                    <li><a href="#work" class="hover:text-black transition-colors">Featured Work</a></li>
                    <li><a href="#services" class="hover:text-black transition-colors">Services</a></li>
                    <li><a href="#about" class="hover:text-black transition-colors">About Me</a></li>
                    <li><a href="#contact" class="hover:text-black transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3: Services & Stack (3 cols) -->
            <div class="lg:col-span-3 space-y-3">
                <span class="text-[11px] font-bold uppercase tracking-widest text-slate-400">SERVICES & EXPERTISE</span>
                <ul class="space-y-2 text-xs font-medium text-slate-600">
                    <li class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                        <span>Web Development</span>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                        <span>Web Applications (MERN & CI4)</span>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                        <span>REST APIs & Integrations</span>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                        <span>CRM & ERP Solutions</span>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                        <span>AI Feature Integration</span>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Get In Touch (3 cols) -->
            <div class="lg:col-span-3 space-y-3">
                <span class="text-[11px] font-bold uppercase tracking-widest text-slate-400">GET IN TOUCH</span>
                
                <div class="space-y-2 text-xs font-medium text-slate-700">
                    <a href="mailto:najamrazzaq7861@gmail.com" class="flex items-center gap-2 hover:text-black transition-colors">
                        <svg class="w-4 h-4 text-slate-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <span class="truncate">najamrazzaq7861@gmail.com</span>
                    </a>

                    <a href="tel:+923278737313" class="flex items-center gap-2 hover:text-black transition-colors">
                        <svg class="w-4 h-4 text-slate-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <span>+92 327 8737313</span>
                    </a>
                </div>

                <!-- Social Links -->
                <div class="flex items-center gap-2.5 pt-2">
                    <a href="https://github.com/NajamRazzaq" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white border border-slate-200 flex items-center justify-center text-slate-700 hover:text-black hover:border-slate-400 hover:bg-slate-50 transition-all shadow-sm" aria-label="GitHub">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/najam-razzaq-1bb453339/" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-white border border-slate-200 flex items-center justify-center text-slate-700 hover:text-[#0A66C2] hover:border-[#0A66C2]/40 hover:bg-blue-50/50 transition-all shadow-sm" aria-label="LinkedIn">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.2V10.9H6.46M7.83 6.5a1.6 1.6 0 0 0-1.6 1.6 1.6 1.6 0 0 0 1.6 1.6 1.6 1.6 0 0 0 1.6-1.6 1.6 1.6 0 0 0-1.6-1.6Z"/>
                        </svg>
                    </a>
                </div>

                <!-- Location / Timezone -->
                <p class="text-[11px] text-slate-400 pt-1">
                    📍 Lahore, Pakistan &bull; PKT (UTC+5)
                </p>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="pt-8 flex items-center justify-center gap-4 text-xs text-slate-500 font-medium">
            <div>
                &copy; <?= date('Y') ?> Najam Razzaq. All rights reserved.
            </div>
        </div>

    </div>
</footer>
