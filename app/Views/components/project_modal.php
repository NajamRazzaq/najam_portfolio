<!-- PROJECT DETAILS MODAL -->
<div id="project-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 sm:p-6 overflow-y-auto" role="dialog" aria-modal="true">
    <!-- Backdrop with blur -->
    <div id="project-modal-backdrop" class="fixed inset-0 bg-slate-950/70 backdrop-blur-sm transition-opacity duration-300 opacity-0"></div>

    <!-- Modal Content Card -->
    <div id="project-modal-card" class="relative bg-white rounded-3xl border border-slate-200/80 shadow-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto z-10 transform scale-95 opacity-0 transition-all duration-300 p-6 sm:p-8 space-y-6">
        
        <!-- Header Row -->
        <div class="flex items-start justify-between gap-4 pb-4 border-b border-slate-100">
            <div class="space-y-1">
                <span id="modal-category" class="inline-block px-3 py-1 rounded-md bg-slate-100 text-slate-700 text-[11px] font-semibold tracking-wide">
                    Healthcare
                </span>
                <h3 id="modal-title" class="text-2xl sm:text-3xl font-extrabold text-brand-950 tracking-tight">
                    Project Title
                </h3>
            </div>
            
            <!-- Close Button -->
            <button type="button" id="close-project-modal" class="w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-600 hover:text-black flex items-center justify-center transition-colors flex-shrink-0" aria-label="Close modal">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>

        <!-- Project Image Preview -->
        <div class="rounded-2xl overflow-hidden bg-slate-50 border border-slate-200/80 shadow-sm">
            <img id="modal-image" src="" alt="Project Preview" class="w-full h-auto object-cover max-h-[380px]">
        </div>

        <!-- Description -->
        <div>
            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">PROJECT OVERVIEW</h4>
            <p id="modal-description" class="text-sm text-slate-600 leading-relaxed font-normal">
                Description goes here.
            </p>
        </div>

        <!-- Key Engineering Contributions / Highlights (From CV) -->
        <div>
            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3">KEY CONTRIBUTIONS &amp; ARCHITECTURE</h4>
            <ul id="modal-highlights" class="space-y-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                <!-- Injected via JavaScript -->
            </ul>
        </div>

        <!-- Tech Stack Pills -->
        <div>
            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2.5">TECHNOLOGIES &amp; TOOLS</h4>
            <div id="modal-tech-stack" class="flex flex-wrap items-center gap-2">
                <!-- Injected via JavaScript -->
            </div>
        </div>

        <!-- Action Footer -->
        <div class="pt-4 border-t border-slate-100 flex flex-wrap items-center justify-between gap-4">
            <div id="modal-live-link-container">
                <a id="modal-live-link" href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-brand-950 text-white text-xs sm:text-sm font-semibold hover:bg-brand-800 transition-all shadow-sm active:scale-95">
                    <span>Visit Live Website</span>
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 17L17 7M17 7H7M17 7V17"/>
                    </svg>
                </a>
            </div>

            <button type="button" id="close-project-modal-bottom" class="px-5 py-2.5 rounded-xl border border-slate-200 text-xs font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                Close
            </button>
        </div>

    </div>
</div>
