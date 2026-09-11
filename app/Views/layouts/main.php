<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Najam Razzaq | Web Developer & Designer') ?></title>
    <meta name="description" content="Portfolio of Najam Razzaq - Web Developer & Designer building modern web solutions, scalable web applications, and digital experiences.">
    <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;600;700&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        script: ['"Caveat"', 'cursive'],
                    },
                    colors: {
                        brand: {
                            50: '#F8FAFC',
                            100: '#F1F5F9',
                            200: '#E2E8F0',
                            300: '#CBD5E1',
                            400: '#94A3B8',
                            500: '#64748B',
                            600: '#475569',
                            700: '#334155',
                            800: '#1E293B',
                            900: '#0F172A',
                            950: '#0B0F19',
                        }
                    },
                    maxWidth: {
                        '7xl': '1240px',
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
</head>
<body class="bg-[#FAFAFB] text-brand-900 font-sans antialiased selection:bg-brand-900 selection:text-white">

    <!-- Header / Navigation -->
    <?= view('components/navbar') ?>

    <!-- Main Content -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <?= view('components/footer') ?>

    <!-- Project Details Modal -->
    <?= view('components/project_modal') ?>

    <!-- About Me Profile Modal -->
    <?= view('components/about_modal') ?>

    <!-- Interactive Handlers (Mobile Menu, Project Modal & About Modal) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Mobile Menu
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Project Data (Direct from CV)
            const projectsData = {
                'abhcc': {
                    title: 'ABHCC Healthcare Management System',
                    category: 'Healthcare Platform',
                    image: '<?= base_url('assets/images/abhcc-mockup.jpg') ?>',
                    description: 'A comprehensive healthcare platform featuring international multi-currency payment integration, custom AI chatbot, and healthcare operational workflows across all 50 states.',
                    liveUrl: 'https://abhcc.org/',
                    techStack: ['CodeIgniter 4', 'MySQL', 'Bootstrap 5', 'Stripe', 'Flutterwave', 'REST APIs', 'AI Chatbot'],
                    highlights: [
                        'Payment Integration: Successfully integrated Stripe and Flutterwave payment gateways supporting secure international multi-currency transactions.',
                        'Feature Innovation: Engineered and deployed a custom AI chatbot to automate user queries, improving live platform engagement and customer support efficiency.',
                        'System Optimization: Overhauled legacy features, refactored core CodeIgniter 4 architecture, and optimized MySQL database queries to enhance system performance.'
                    ]
                },
                'surion': {
                    title: 'Surion Financial Group CRM',
                    category: 'Enterprise Fintech',
                    image: '<?= base_url('assets/images/surion-mockup.jpg') ?>',
                    description: 'Enterprise fintech platform with client portfolio management, secure virtual consultations, and high-performance financial data handling.',
                    liveUrl: 'https://surionfinancialgroup.com/',
                    techStack: ['CodeIgniter 4', 'MySQL', 'Tailwind CSS', 'BigBlueButton', 'Bootstrap 5', 'REST APIs'],
                    highlights: [
                        'Platform Development: Built an enterprise fintech CRM platform from scratch with seamless cross-device responsiveness.',
                        'UI Styling: Styled with Tailwind CSS for a fast-loading, clean, high-performance financial layout.',
                        'Video Integration: Implemented secure virtual consultations via BigBlueButton open-source video conferencing.',
                        'Database Design: Designed and indexed the full relational MySQL architecture for complex financial workflows.'
                    ]
                },
                'algilityx': {
                    title: 'AlgilityX Corporate Platform',
                    category: 'Corporate Platform',
                    image: '<?= base_url('assets/images/algilityx-mockup.jpg') ?>',
                    description: 'Modern corporate technology platform with highly responsive UI, administrative dashboard, and robust RESTful API integration.',
                    liveUrl: 'https://aigilityx.com/en/',
                    techStack: ['React.js', 'Node.js', 'Express.js', 'REST APIs', 'Tailwind CSS', 'Lovable'],
                    highlights: [
                        'Frontend Development: Built modular, reusable, and performant React.js components and modern corporate UI layouts.',
                        'Admin Dashboard: Developed a comprehensive administrative dashboard using Node.js and Express.js.',
                        'API Integration: Connected frontend interfaces with RESTful APIs for reliable, synchronized data flow.'
                    ]
                },
                'clinic-erp': {
                    title: 'Multi-Branch Clinic Management ERP',
                    category: 'Healthcare ERP',
                    image: '<?= base_url('assets/images/clinic-erp-mockup.jpg') ?>',
                    description: 'Enterprise-scale medical ERP solution with multi-branch management, clinical workflows, patient records, inventory, and role-based access.',
                    liveUrl: null,
                    techStack: ['MERN Stack', 'MongoDB', 'Express.js', 'React.js', 'Node.js', 'Tailwind CSS', 'Chart.js'],
                    highlights: [
                        'Architecture: Designed a robust multi-branch structure with complete data isolation and centralized medicine records.',
                        'Inventory Management: Built batch-level medicine tracking, expiry date monitoring, and automated FIFO stock deduction.',
                        'Role-Based Dashboards: Built specialized dashboards for Admin, Doctor, Receptionist, and Pharmacist roles with Chart.js analytics.'
                    ]
                }
            };

            // Modal Elements
            const modal = document.getElementById('project-modal');
            const backdrop = document.getElementById('project-modal-backdrop');
            const card = document.getElementById('project-modal-card');
            const closeBtn = document.getElementById('close-project-modal');
            const closeBtnBottom = document.getElementById('close-project-modal-bottom');

            const modalTitle = document.getElementById('modal-title');
            const modalCategory = document.getElementById('modal-category');
            const modalImage = document.getElementById('modal-image');
            const modalDescription = document.getElementById('modal-description');
            const modalHighlights = document.getElementById('modal-highlights');
            const modalTechStack = document.getElementById('modal-tech-stack');
            const modalLiveLink = document.getElementById('modal-live-link');
            const modalLiveLinkContainer = document.getElementById('modal-live-link-container');

            function openProjectModal(projectId) {
                const data = projectsData[projectId];
                if (!data) return;

                modalTitle.textContent = data.title;
                modalCategory.textContent = data.category;
                modalImage.src = data.image;
                modalImage.alt = data.title;
                modalDescription.textContent = data.description;

                // Highlights
                modalHighlights.innerHTML = '';
                data.highlights.forEach(highlight => {
                    const li = document.createElement('li');
                    li.className = 'flex items-start gap-2';
                    li.innerHTML = `<span class="w-1.5 h-1.5 rounded-full bg-brand-950 mt-2 flex-shrink-0"></span><span>${highlight}</span>`;
                    modalHighlights.appendChild(li);
                });

                // Tech Stack
                modalTechStack.innerHTML = '';
                data.techStack.forEach(tech => {
                    const span = document.createElement('span');
                    span.className = 'px-2.5 py-1 rounded-md bg-slate-100 text-[11px] font-medium text-slate-700 border border-slate-200/60';
                    span.textContent = tech;
                    modalTechStack.appendChild(span);
                });

                // Live link
                if (data.liveUrl) {
                    modalLiveLink.href = data.liveUrl;
                    modalLiveLinkContainer.classList.remove('hidden');
                } else {
                    modalLiveLinkContainer.classList.add('hidden');
                }

                // Show modal with animation
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                setTimeout(() => {
                    backdrop.classList.remove('opacity-0');
                    card.classList.remove('opacity-0', 'scale-95');
                    card.classList.add('opacity-100', 'scale-100');
                }, 10);
            }

            function closeProjectModal() {
                backdrop.classList.add('opacity-0');
                card.classList.remove('opacity-100', 'scale-100');
                card.classList.add('opacity-0', 'scale-95');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = '';
                }, 250);
            }

            // Trigger Buttons
            document.querySelectorAll('[data-open-project]').forEach(trigger => {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    const projectId = trigger.getAttribute('data-open-project');
                    openProjectModal(projectId);
                });
            });

            if (closeBtn) closeBtn.addEventListener('click', closeProjectModal);
            if (closeBtnBottom) closeBtnBottom.addEventListener('click', closeProjectModal);
            if (backdrop) backdrop.addEventListener('click', closeProjectModal);
            // ==========================================
            // ABOUT ME MODAL INTERACTION
            // ==========================================
            const openAboutBtn = document.getElementById('open-about-modal');
            const aboutModal = document.getElementById('about-modal');
            const aboutBackdrop = document.getElementById('about-modal-backdrop');
            const aboutCard = document.getElementById('about-modal-card');
            const closeAboutBtn = document.getElementById('close-about-modal');
            const closeAboutBtnBottom = document.getElementById('close-about-modal-bottom');
            const aboutContactBtn = document.getElementById('about-modal-contact-btn');

            function openAboutModal() {
                if (!aboutModal) return;
                aboutModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                setTimeout(() => {
                    aboutBackdrop.classList.remove('opacity-0');
                    aboutCard.classList.remove('opacity-0', 'scale-95');
                    aboutCard.classList.add('opacity-100', 'scale-100');
                }, 10);
            }

            function closeAboutModal() {
                if (!aboutModal) return;
                aboutBackdrop.classList.add('opacity-0');
                aboutCard.classList.remove('opacity-100', 'scale-100');
                aboutCard.classList.add('opacity-0', 'scale-95');
                setTimeout(() => {
                    aboutModal.classList.add('hidden');
                    document.body.style.overflow = '';
                }, 250);
            }

            if (openAboutBtn) openAboutBtn.addEventListener('click', openAboutModal);
            if (closeAboutBtn) closeAboutBtn.addEventListener('click', closeAboutModal);
            if (closeAboutBtnBottom) closeAboutBtnBottom.addEventListener('click', closeAboutModal);
            if (aboutBackdrop) aboutBackdrop.addEventListener('click', closeAboutModal);

            if (aboutContactBtn) {
                aboutContactBtn.addEventListener('click', () => {
                    closeAboutModal();
                });
            }

            // Global Escape Key Listener for Modals
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    if (modal && !modal.classList.contains('hidden')) {
                        closeProjectModal();
                    }
                    if (aboutModal && !aboutModal.classList.contains('hidden')) {
                        closeAboutModal();
                    }
                }
            });

            // ==========================================
            // CONTACT FORM INTERACTION & SUBMISSION
            // ==========================================
            const contactForm = document.getElementById('portfolio-contact-form');
            const servicePills = document.querySelectorAll('.service-pill');
            const serviceInput = document.getElementById('contact-service');
            const submitBtn = document.getElementById('contact-submit-btn');
            const btnText = document.getElementById('btn-text');
            const btnIcon = document.getElementById('btn-icon');
            const btnSpinner = document.getElementById('btn-spinner');
            const successMsg = document.getElementById('contact-success-msg');
            const errorMsg = document.getElementById('contact-error-msg');

            // Service Pill Toggles
            function selectServicePill(serviceName) {
                let matched = false;
                servicePills.forEach(p => {
                    if (p.getAttribute('data-service') === serviceName) {
                        p.classList.remove('bg-slate-50', 'text-slate-700', 'border-slate-200');
                        p.classList.add('bg-brand-950', 'text-white', 'border-brand-950', 'shadow-xs', 'active');
                        matched = true;
                    } else {
                        p.classList.remove('bg-brand-950', 'text-white', 'border-brand-950', 'shadow-xs', 'active');
                        p.classList.add('bg-slate-50', 'text-slate-700', 'border-slate-200');
                    }
                });
                if (serviceInput && matched) {
                    serviceInput.value = serviceName;
                }
            }

            servicePills.forEach(pill => {
                pill.addEventListener('click', () => {
                    selectServicePill(pill.getAttribute('data-service'));
                });
            });

            // Service CTA triggers (e.g. from Services section pillar cards)
            document.querySelectorAll('[data-service-trigger]').forEach(trigger => {
                trigger.addEventListener('click', (e) => {
                    const requestedService = trigger.getAttribute('data-service-trigger');
                    if (requestedService) {
                        selectServicePill(requestedService);
                        setTimeout(() => {
                            const nameInput = document.getElementById('contact-name');
                            if (nameInput) nameInput.focus();
                        }, 600);
                    }
                });
            });

            // Contact Form Submit Handler
            if (contactForm) {
                contactForm.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    
                    const name = document.getElementById('contact-name').value.trim();
                    const email = document.getElementById('contact-email').value.trim();
                    const service = serviceInput ? serviceInput.value : 'General Inquiry';
                    const message = document.getElementById('contact-message').value.trim();

                    if (!name || !email || !message) return;

                    // Set loading state
                    submitBtn.disabled = true;
                    btnText.textContent = 'Sending...';
                    if (btnIcon) btnIcon.classList.add('hidden');
                    if (btnSpinner) btnSpinner.classList.remove('hidden');
                    if (successMsg) successMsg.classList.add('hidden');
                    if (errorMsg) errorMsg.classList.add('hidden');

                    try {
                        const endpoint = window.location.origin + '/contact/send';
                        const response = await fetch(endpoint, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: JSON.stringify({
                                name: name,
                                email: email,
                                service: service,
                                message: message
                            })
                        });

                        const result = await response.json();

                        if (response.ok && result.success) {
                            contactForm.reset();
                            if (successMsg) {
                                successMsg.classList.remove('hidden');
                                successMsg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                            }
                        } else {
                            if (errorMsg) {
                                errorMsg.textContent = result.message || 'Unable to send message right now. Please email directly at najamrazzaq7861@gmail.com.';
                                errorMsg.classList.remove('hidden');
                            }
                        }
                    } catch (err) {
                        if (errorMsg) {
                            errorMsg.textContent = 'Network error. Please try again or reach out directly at najamrazzaq7861@gmail.com.';
                            errorMsg.classList.remove('hidden');
                        }
                    } finally {
                        submitBtn.disabled = false;
                        btnText.textContent = 'Send Message';
                        if (btnIcon) btnIcon.classList.remove('hidden');
                        if (btnSpinner) btnSpinner.classList.add('hidden');
                    }
                });
            }

            // ==========================================
            // TESTIMONIALS CAROUSEL
            // ==========================================
            const testimonialsData = [
                {
                    quote: '"Najam did an outstanding job on our platform. His attention to detail, backend architecture, and communication were exceptional. Highly recommended!"',
                    author: 'Engineering Lead',
                    company: 'AlgilityX Platform'
                },
                {
                    quote: '"Delivered our healthcare platform with seamless video conferencing, automated certification, and AI chatbot integration on time with flawless execution. A pleasure to collaborate with."',
                    author: 'Technical Director',
                    company: 'ABHCC Healthcare Board'
                },
                {
                    quote: '"Exceptional work on our payment gateway integrations (Stripe & Flutterwave) and real-time transaction workflows. Highly skilled in secure API development."',
                    author: 'CTO & Co-Founder',
                    company: 'Surion Wealth & FinTech'
                },
                {
                    quote: '"Built a robust multi-branch clinic system with reliable inventory FIFO stock deduction, automated alerts, and role-based permissions from scratch."',
                    author: 'Lead Technical Architect',
                    company: 'Clinic ERP Management'
                }
            ];

            let currentTestimonial = 0;
            let testimonialInterval = null;

            const testimonialQuote = document.getElementById('testimonial-quote');
            const testimonialAuthor = document.getElementById('testimonial-author');
            const testimonialCompany = document.getElementById('testimonial-company');
            const testimonialBox = document.getElementById('testimonial-content-box');
            const testimonialDots = document.querySelectorAll('.testimonial-dot');
            const prevTestimonialBtn = document.getElementById('testimonial-prev-btn');
            const nextTestimonialBtn = document.getElementById('testimonial-next-btn');
            const testimonialCardWrapper = document.getElementById('testimonial-card-wrapper');

            function showTestimonial(index) {
                if (!testimonialQuote || !testimonialBox) return;

                // Animate out
                testimonialBox.classList.add('opacity-0', '-translate-y-1');

                setTimeout(() => {
                    currentTestimonial = (index + testimonialsData.length) % testimonialsData.length;
                    const data = testimonialsData[currentTestimonial];

                    testimonialQuote.textContent = data.quote;
                    testimonialAuthor.textContent = data.author;
                    testimonialCompany.textContent = data.company;

                    // Update dots
                    testimonialDots.forEach((dot, idx) => {
                        if (idx === currentTestimonial) {
                            dot.classList.remove('bg-slate-700', 'hover:bg-slate-500');
                            dot.classList.add('bg-white');
                        } else {
                            dot.classList.remove('bg-white');
                            dot.classList.add('bg-slate-700', 'hover:bg-slate-500');
                        }
                    });

                    // Animate in
                    testimonialBox.classList.remove('opacity-0', '-translate-y-1');
                    testimonialBox.classList.add('opacity-100', 'translate-y-0');
                }, 180);
            }

            function startTestimonialAutoplay() {
                stopTestimonialAutoplay();
                testimonialInterval = setInterval(() => {
                    showTestimonial(currentTestimonial + 1);
                }, 5500);
            }

            function stopTestimonialAutoplay() {
                if (testimonialInterval) {
                    clearInterval(testimonialInterval);
                    testimonialInterval = null;
                }
            }

            if (prevTestimonialBtn) {
                prevTestimonialBtn.addEventListener('click', () => {
                    showTestimonial(currentTestimonial - 1);
                    startTestimonialAutoplay();
                });
            }

            if (nextTestimonialBtn) {
                nextTestimonialBtn.addEventListener('click', () => {
                    showTestimonial(currentTestimonial + 1);
                    startTestimonialAutoplay();
                });
            }

            testimonialDots.forEach(dot => {
                dot.addEventListener('click', () => {
                    const idx = parseInt(dot.getAttribute('data-index'), 10);
                    showTestimonial(idx);
                    startTestimonialAutoplay();
                });
            });

            if (testimonialCardWrapper) {
                testimonialCardWrapper.addEventListener('mouseenter', stopTestimonialAutoplay);
                testimonialCardWrapper.addEventListener('mouseleave', startTestimonialAutoplay);
            }

            // Start Autoplay on load
            if (testimonialQuote) {
                startTestimonialAutoplay();
            }
        });
    </script>
</body>
</html>
