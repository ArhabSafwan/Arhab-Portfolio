<?php include('layout/header.html'); ?>

<!-- ================= DYNAMIC SYSTEM BACKGROUND ================= -->
<div class="bg-engine"></div>

<!-- ================= HERO SECTION ================= -->
<header id="top" class="relative pt-40 pb-24 px-6 md:px-10 overflow-hidden">
    <div class="max-w-6xl mx-auto grid md:grid-cols-[1fr_auto] gap-14 items-center relative z-10">
        <div class="reveal">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-primary/20 bg-primary/5 text-primary text-[10px] font-mono uppercase tracking-[0.2em] mb-6">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                System Status: Online // Senior Software Engineer
            </div>

            <h1 class="font-display text-5xl md:text-8xl font-bold tracking-tighter mb-2 leading-none">
                <span class="text-offwhite">SM. Arhab</span><br />
                <span class="text-gradient">Safwan</span>
            </h1>

            <p class="max-w-xl text-slategray text-base md:text-lg leading-relaxed mb-10 font-light">
                Architecting and scaling production web platforms across fintech, NGO, and higher-education sectors — for organizations including
                <span class="text-offwhite font-medium">BRAC</span>,
                <span class="text-offwhite font-medium">UNICEF</span>, and
                <span class="text-offwhite font-medium">Harvard's Wyss Institute</span>.
                Early adopter of AI-augmented development, compressing sprint timelines without compromising architecture.
            </p>

            <div class="flex flex-wrap gap-4 hero-buttons font-mono">
                <a href="#contact" class="text-sm bg-primary text-background px-8 py-3 rounded-xl hover:bg-primary/90 transition-all font-bold shadow-[0_0_20px_rgba(56,189,248,0.3)]">
                    Initialize Contact
                </a>
                <a href="#experience" class="text-sm border border-surface2 text-offwhite px-8 py-3 rounded-xl hover:border-primary/50 hover:bg-primary/5 transition-all glass">
                    View.Experience()
                </a>
            </div>

            <div class="mt-8 flex items-center gap-2 text-sm text-slategray font-mono">
                <div class="w-2 h-2 bg-accent rounded-full animate-pulse"></div>
                <span>System Online · Dhaka, Bangladesh</span>
            </div>
        </div>

        <!-- Hero Image with Fixed Circulating Frame -->
        <div class="reveal justify-self-center relative">
            <!-- Static ambient background glow -->
            <div class="absolute inset-0 bg-primary/10 blur-[100px] rounded-full"></div>

            <!-- Simplified Container -->
            <div class="frame-tech w-64 h-64 md:w-80 md:h-80 shadow-2xl">
                <img src="/images/about-photo.jpg" alt="SM. Arhab Safwan">
            </div>
        </div>
    </div>

    <!-- Quick facts dashboard strip -->
    <div class="reveal max-w-6xl mx-auto mt-20 grid grid-cols-2 md:grid-cols-4 gap-4 relative z-10">
        <div class="glass p-6 md:p-8 rounded-xl border border-white/5 card-hover">
            <p class="font-mono text-3xl md:text-4xl text-offwhite metric-num font-bold">4<span class="text-primary">+</span></p>
            <p class="text-[10px] text-slategray mt-2 font-mono uppercase tracking-widest">Years Exp.</p>
        </div>
        <div class="glass p-6 md:p-8 rounded-xl border border-white/5 card-hover">
            <p class="font-mono text-3xl md:text-4xl text-offwhite metric-num font-bold">8<span class="text-primary">+</span></p>
            <p class="text-[10px] text-slategray mt-2 font-mono uppercase tracking-widest">Enterprise Platforms</p>
        </div>
        <div class="glass p-6 md:p-8 rounded-xl border border-white/5 card-hover">
            <p class="font-mono text-3xl md:text-4xl text-accent metric-num font-bold">~40%</p>
            <p class="text-[10px] text-slategray mt-2 font-mono uppercase tracking-widest">Velocity Boost</p>
        </div>
        <div class="glass p-6 md:p-8 rounded-xl border border-white/5 card-hover">
            <p class="font-mono text-3xl md:text-4xl text-offwhite metric-num font-bold">3</p>
            <p class="text-[10px] text-slategray mt-2 font-mono uppercase tracking-widest">Global Organizations</p>
        </div>
    </div>
</header>

<div class="max-w-6xl mx-auto px-6 md:px-10">
    <div class="hairline"></div>
</div>

<!-- ================= AI-ACCELERATED CALLOUT (Terminal Style) ================= -->
<section class="px-6 md:px-10 py-20 relative z-10">
    <div class="reveal max-w-5xl mx-auto rounded-xl border border-white/10 glass shadow-3xl overflow-hidden">
        <div class="bg-white/5 px-4 py-3 flex items-center border-b border-white/10">
            <div class="flex gap-2">
                <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
            </div>
            <div class="mx-auto text-[10px] font-mono text-slategray uppercase tracking-[0.2em]">bash ~ ai_workflow.sh</div>
        </div>
        <div class="p-8 md:p-10 font-mono text-sm md:text-base leading-relaxed terminal-body">
            <p class="text-slategray mb-2">
                <span class="text-accent">arhab@dev-machine</span>:<span class="text-primary">~</span>$ ./execute_workflow
            </p>
            <p class="text-offwhite mb-4">> Loading AI augmentation modules...</p>
            <p class="text-offwhite/90 terminal-type">
                Leveraging <span class="text-primary font-bold">Cursor</span>, <span class="text-primary font-bold">Claude Code</span> &amp;
                <span class="text-primary font-bold">Antigravity CLI</span> to ship features
                <span class="text-accent bg-accent/10 px-2 py-1 rounded">~40% faster</span>.
                <br><br>
                Reducing boilerplate-related bugs and rapidly prototyping full-stack features without compromising code quality or architectural integrity.
            </p>
            <p class="text-accent mt-4 animate-pulse">_</p>
        </div>
    </div>
</section>

<!-- ================= EXPERIENCE (PROFESSIONAL PATH) ================= -->
<section id="experience" class="px-6 md:px-10 py-16 relative z-10">
    <div class="max-w-6xl mx-auto">
        <div class="reveal mb-16">
            <p class="font-mono text-primary text-xs mb-3 uppercase tracking-widest">// Professional Path</p>
            <h2 class="font-display text-3xl md:text-5xl font-bold">Career Experience</h2>
        </div>

        <div class="relative pl-8 md:pl-10">
            <div class="absolute left-0 md:left-1 top-2 bottom-2 w-px bg-gradient-to-b from-primary via-surface2 to-transparent"></div>

            <!-- Job 1 -->
            <div class="reveal relative mb-20 group">
                <span class="absolute -left-8 md:-left-[43px] top-2 w-5 h-5 rounded-full bg-background border-2 border-primary group-hover:scale-110 transition-transform shadow-[0_0_10px_rgba(56,189,248,0.5)]"></span>
                <p class="font-mono text-[10px] text-primary mb-2 uppercase tracking-widest font-bold">MAY 2025 — PRESENT</p>
                <h3 class="font-display text-2xl md:text-4xl font-bold mb-1 text-offwhite">Senior Full Stack Software Engineer</h3>
                <p class="text-primary/80 text-sm mb-6 font-mono font-semibold">@ 3DEVS IT LTD.</p>
                <ul class="space-y-4 text-slategray text-[15px] leading-relaxed max-w-4xl">
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Spearheaded architectural decisions for enterprise-scale Laravel and Next.js applications, mentoring 2 junior engineers and reducing review turnaround time by <span class="text-offwhite font-medium">~50%</span>.</p>
                    </li>
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Engineered AI-accelerated workflows using Cursor and Claude Code, cutting feature-delivery time by approximately <span class="text-offwhite font-medium">40%</span> across the team's sprint output.</p>
                    </li>
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Led migration of legacy monolithic modules to a modular, component-driven Next.js/React architecture, reducing bundle size by <span class="text-offwhite font-medium">90%</span>.</p>
                    </li>
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Architected a fintech payment layer integrating PortPOS and Cybersource — supporting bKash IPN, Visa/Mastercard, and bank EMI — processing <span class="text-offwhite font-medium">100+ transactions daily</span>.</p>
                    </li>
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Directed an interactive GeoJSON-based mapping system for Bangladesh's divisions, districts, and upazilas, improving query performance by <span class="text-offwhite font-medium">85%</span>.</p>
                    </li>
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Owned RESTful API design and load-balancing strategy for high-traffic systems, maintaining <span class="text-accent font-medium">~99% uptime</span>.</p>
                    </li>
                </ul>
            </div>

            <!-- Job 2 -->
            <div class="reveal relative mb-20 group">
                <span class="absolute -left-8 md:-left-[43px] top-2 w-5 h-5 rounded-full bg-background border-2 border-surface2 group-hover:border-primary transition-colors"></span>
                <p class="font-mono text-[10px] text-slategray mb-2 uppercase tracking-widest">MAY 2024 — MAY 2025</p>
                <h3 class="font-display text-2xl md:text-3xl font-bold mb-1 text-offwhite">Full Stack Software Engineer</h3>
                <p class="text-primary/80 text-sm mb-6 font-mono font-semibold">@ 3DEVS IT LTD.</p>
                <ul class="space-y-4 text-slategray text-[15px] leading-relaxed max-w-4xl">
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Architected and maintained scalable Laravel applications, improving system performance for enterprise-level projects.</p>
                    </li>
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Built and deployed Single Sign-On (SSO) authentication for the BRAC Migration Management and Information System.</p>
                    </li>
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Engineered a full-text search engine, reducing average data-retrieval time across large datasets by <span class="text-offwhite font-medium">~90%</span>.</p>
                    </li>
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Implemented automated invoice generation and post-payment email workflows, eliminating manual financial processing.</p>
                    </li>
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Integrated AI tools into daily workflow, shortening feature turnaround by <span class="text-offwhite font-medium">~60%</span>.</p>
                    </li>
                </ul>
            </div>

            <!-- Job 3 -->
            <div class="reveal relative group">
                <span class="absolute -left-8 md:-left-[43px] top-2 w-5 h-5 rounded-full bg-background border-2 border-surface2 group-hover:border-primary transition-colors"></span>
                <p class="font-mono text-[10px] text-slategray mb-2 uppercase tracking-widest">MAY 2022 — MAY 2024</p>
                <h3 class="font-display text-2xl md:text-3xl font-bold mb-1 text-offwhite">Full Stack Software Engineer</h3>
                <p class="text-primary/80 text-sm mb-6 font-mono font-semibold">@ DEVTECHGURU LTD.</p>
                <ul class="space-y-4 text-slategray text-[15px] leading-relaxed max-w-4xl">
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Engineered scalable software architecture for client systems.</p>
                    </li>
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Optimized MySQL database schemas for data integrity, improving response times by <span class="text-offwhite font-medium">~90%</span>.</p>
                    </li>
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Implemented CI/CD pipelines (GitHub Actions, Docker) for automated testing and deployment.</p>
                    </li>
                    <li class="flex items-start gap-3"><span class="text-primary mt-1">▹</span>
                        <p>Delivered full-stack features for international clients.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ================= SKILLS (TECH MATRIX) ================= -->
<section id="skills" class="px-6 md:px-10 py-24 relative z-10 bg-surface/20">
    <div class="max-w-6xl mx-auto">
        <div class="reveal mb-14">
            <p class="font-mono text-primary text-xs mb-3 uppercase tracking-widest">// Tech Stack & Matrix</p>
            <h2 class="font-display text-3xl md:text-5xl font-bold">Core Capabilities</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-10">
            <div class="reveal glass p-8 rounded-2xl border border-white/5">
                <p class="font-mono text-[10px] text-primary mb-6 uppercase tracking-[0.2em] font-bold">01. Languages & Frameworks</p>
                <div class="flex flex-wrap gap-3">
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">PHP</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">JavaScript</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">Laravel</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">Next.js</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">React</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">Vue.js</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">TailwindCSS</span>
                </div>
            </div>

            <div class="reveal glass p-8 rounded-2xl border border-white/5">
                <p class="font-mono text-[10px] text-accent mb-6 uppercase tracking-[0.2em] font-bold">02. AI-Augmented Dev</p>
                <div class="flex flex-wrap gap-3">
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-accent font-mono glass border-accent/20">Cursor</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-accent font-mono glass border-accent/20">Claude Code</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-accent font-mono glass border-accent/20">Antigravity CLI</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-accent font-mono glass border-accent/20">GitHub Copilot</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-accent font-mono glass border-accent/20">ChatGPT / Gemini</span>
                </div>
            </div>

            <div class="reveal glass p-8 rounded-2xl border border-white/5">
                <p class="font-mono text-[10px] text-primary mb-6 uppercase tracking-[0.2em] font-bold">03. Database & Architecture</p>
                <div class="flex flex-wrap gap-3">
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">MySQL</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">MariaDB</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">REST APIs</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">MVC</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">Query Optimization</span>
                </div>
            </div>

            <div class="reveal glass p-8 rounded-2xl border border-white/5">
                <p class="font-mono text-[10px] text-primary mb-6 uppercase tracking-[0.2em] font-bold">04. Payments & Integrations</p>
                <div class="flex flex-wrap gap-3">
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">bKash IPN</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">Cybersource</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">PortPOS</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">EMI Workflows</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">SSO / OAuth</span>
                </div>
            </div>

            <div class="reveal glass p-8 rounded-2xl border border-white/5 md:col-span-2">
                <p class="font-mono text-[10px] text-primary mb-6 uppercase tracking-[0.2em] font-bold">05. DevOps & Tooling</p>
                <div class="flex flex-wrap gap-3">
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">Git / GitHub</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">Docker</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">GitHub Actions (CI/CD)</span>
                    <span class="skill-chip rounded-lg px-4 py-2 text-sm text-offwhite font-mono glass">Linux CLI</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= PROJECTS (PORTFOLIO GALLERY) ================= -->
<section id="projects" class="px-6 md:px-10 py-24 relative z-10">
    <div class="max-w-6xl mx-auto">
        <div class="reveal mb-14">
            <p class="font-mono text-primary text-xs mb-3 uppercase tracking-widest">// Case Studies</p>
            <h2 class="font-display text-3xl md:text-6xl font-bold text-gradient">Key Projects</h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="reveal glass rounded-2xl border border-white/5 overflow-hidden card-hover group">
                <div class="relative h-48 overflow-hidden">
                    <img src="/images/portfolio/portfolio-16.png" alt="BRAC Otithi" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="font-display font-bold text-lg mb-1 text-offwhite">BRAC Otithi E-Commerce</h3>
                    <p class="text-[10px] text-primary font-mono mb-3 uppercase">Laravel / Tailwind / MySQL</p>
                    <p class="text-sm text-slategray leading-relaxed">Tour booking platform supporting multiple packages with Cybersource and PortPOS payment gateways.</p>
                </div>
            </div>

            <div class="reveal glass rounded-2xl border border-white/5 overflow-hidden card-hover group">
                <div class="relative h-48 overflow-hidden">
                    <img src="/images/portfolio/portfolio-15.png" alt="BRAC Frugal" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="font-display font-bold text-lg mb-1 text-offwhite">BRAC Frugal Innovation Forum</h3>
                    <p class="text-[10px] text-primary font-mono mb-3 uppercase">Laravel / Tailwind / MySQL</p>
                    <p class="text-sm text-slategray leading-relaxed">Annual innovation event platform with speaker registration and integrated PortPOS payment system.</p>
                </div>
            </div>

            <div class="reveal glass rounded-2xl border border-white/5 overflow-hidden card-hover group">
                <div class="relative h-48 overflow-hidden">
                    <img src="/images/portfolio/BRAC_inno.png" alt="BRAC Social" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="font-display font-bold text-lg mb-1 text-offwhite">BRAC Social Innovation Lab</h3>
                    <p class="text-[10px] text-primary font-mono mb-3 uppercase">PHP / Tailwind / Bootstrap</p>
                    <p class="text-sm text-slategray leading-relaxed">Platform for showcasing BRAC's social innovation initiatives and new ideas for social welfare.</p>
                </div>
            </div>

            <div class="reveal glass rounded-2xl border border-white/5 overflow-hidden card-hover group">
                <div class="relative h-48 overflow-hidden">
                    <img src="/images/portfolio/portfolio-17.png" alt="AUW" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="font-display font-bold text-lg mb-1 text-offwhite">AUW Laboratory School</h3>
                    <p class="text-[10px] text-primary font-mono mb-3 uppercase">Laravel / Tailwind / MySQL</p>
                    <p class="text-sm text-slategray leading-relaxed">School CMS website featuring a robust admin panel for dynamic content management.</p>
                </div>
            </div>

            <div class="reveal glass rounded-2xl border border-white/5 overflow-hidden card-hover group">
                <div class="relative h-48 overflow-hidden">
                    <img src="/images/portfolio/portfolio-12.png" alt="BRAC Migration" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="font-display font-bold text-lg mb-1 text-offwhite">BRAC Migration System</h3>
                    <p class="text-[10px] text-primary font-mono mb-3 uppercase">PHP / MariaDB / RBAC</p>
                    <p class="text-sm text-slategray leading-relaxed">Complex RBAC-based system for managing immigrant data, financial support tracking, and reporting.</p>
                </div>
            </div>

            <div class="reveal glass rounded-2xl border border-white/5 overflow-hidden card-hover group">
                <div class="relative h-48 overflow-hidden">
                    <img src="/images/portfolio/portfolio-14.png" alt="UNICEF Washdata" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="font-display font-bold text-lg mb-1 text-offwhite">UNICEF BD Washdata</h3>
                    <p class="text-[10px] text-primary font-mono mb-3 uppercase">PHP / MariaDB / GeoJSON</p>
                    <p class="text-sm text-slategray leading-relaxed">Arsenic detection system mapping arsenic levels and sanitation facility data interactively.</p>
                </div>
            </div>

            <div class="reveal glass rounded-2xl border border-white/5 overflow-hidden card-hover group">
                <div class="relative h-48 overflow-hidden">
                    <img src="/images/portfolio/portfolio-1.png" alt="LIMS Wyss" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="font-display font-bold text-lg mb-1 text-offwhite">LIMS — Wyss Institute</h3>
                    <p class="text-[10px] text-primary font-mono mb-3 uppercase">Laravel / Vue.js / MySQL</p>
                    <p class="text-sm text-slategray leading-relaxed">Harvard laboratory management system for instrument data entry and secure image capture.</p>
                </div>
            </div>

            <div class="reveal glass rounded-2xl border border-white/5 overflow-hidden card-hover group">
                <div class="relative h-48 overflow-hidden">
                    <img src="/images/portfolio/portfolio-2.png" alt="Enterprise ERP" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="font-display font-bold text-lg mb-1 text-offwhite">Enterprise ERP Solutions</h3>
                    <p class="text-[10px] text-primary font-mono mb-3 uppercase">PHP / MariaDB / Bootstrap</p>
                    <p class="text-sm text-slategray leading-relaxed">Comprehensive ERP solutions with multilevel RBAC, payroll processing, and HR management modules.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= EDUCATION & CERTS ================= -->
<section id="education" class="px-6 md:px-10 py-24 relative z-10 bg-surface/10">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-20">

        <div class="reveal">
            <p class="font-mono text-primary text-xs mb-3 uppercase tracking-widest">// Background</p>
            <h2 class="font-display text-4xl md:text-5xl font-bold mb-10">Education</h2>

            <div class="space-y-12">
                <div class="relative pl-8 border-l border-primary/30">
                    <div class="absolute -left-[5px] top-0 w-2 h-2 rounded-full bg-primary shadow-[0_0_15px_#38bdf8]"></div>
                    <p class="font-display font-bold text-xl md:text-2xl text-offwhite">American International University-BD</p>
                    <p class="text-slategray text-sm mt-1">B.Sc. in Computer Science &amp; Engineering (2018–2022)</p>
                    <p class="text-primary text-xs mt-3 font-mono font-bold uppercase tracking-widest bg-primary/10 inline-block px-3 py-1 rounded">CGPA 3.40</p>
                </div>
                <div class="relative pl-8 border-l border-white/10">
                    <p class="font-display font-bold text-xl text-offwhite">Milestone College</p>
                    <p class="text-slategray text-sm mt-2">H.S.C (2017) — GPA 4.75</p>
                    <p class="text-slategray text-sm">S.S.C (2015) — GPA 5.00</p>
                </div>
            </div>
        </div>

        <div class="reveal">
            <p class="font-mono text-primary text-xs mb-3 uppercase tracking-widest">// Validation</p>
            <h2 class="font-display text-4xl md:text-5xl font-bold mb-10">Certifications</h2>
            <div class="glass p-8 rounded-2xl border border-white/5 mb-8 card-hover">
                <p class="font-mono text-primary text-[10px] mb-2 uppercase tracking-widest font-bold">Certification_01</p>
                <p class="font-display font-bold text-xl text-offwhite">Laravel 9.0 Essential Training</p>
                <p class="text-slategray text-sm mt-1">LinkedIn Learning — June 2023</p>
            </div>

            <div class="grid grid-cols-3 gap-4 text-center">
                <div class="glass p-5 rounded-xl border border-white/5">
                    <p class="text-[9px] text-slategray mb-2 uppercase tracking-widest font-bold">IDE</p>
                    <p class="text-xs text-offwhite font-mono font-bold uppercase">VS Code</p>
                </div>
                <div class="glass p-5 rounded-xl border border-white/5">
                    <p class="text-[9px] text-slategray mb-2 uppercase tracking-widest font-bold">DBM</p>
                    <p class="text-xs text-offwhite font-mono font-bold uppercase">SQLyog</p>
                </div>
                <div class="glass p-5 rounded-xl border border-white/5">
                    <p class="text-[9px] text-slategray mb-2 uppercase tracking-widest font-bold">SSH</p>
                    <p class="text-xs text-offwhite font-mono font-bold uppercase">MobaXterm</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ================= REFERENCES ================= -->
<section class="px-6 md:px-10 py-24 relative z-10">
    <div class="max-w-6xl mx-auto">
        <div class="reveal mb-14">
            <p class="font-mono text-primary text-xs mb-3 uppercase tracking-widest">// System Verification</p>
            <h2 class="font-display text-4xl md:text-5xl font-bold">Endorsements</h2>
        </div>
        <div class="grid sm:grid-cols-3 gap-6">
            <div class="reveal glass p-8 rounded-2xl border border-white/5 card-hover">
                <p class="font-display font-bold text-xl text-offwhite leading-tight">Mahmood Ahsan</p>
                <p class="text-slategray text-[13px] mt-1 font-mono uppercase tracking-wider">BDM, 3DEVS IT LTD.</p>
                <p class="text-primary text-sm mt-6 font-mono font-bold tracking-tighter">01942844321</p>
            </div>
            <div class="reveal glass p-8 rounded-2xl border border-white/5 card-hover">
                <p class="font-display font-bold text-xl text-offwhite leading-tight">Tausif Hossain</p>
                <p class="text-slategray text-[13px] mt-1 font-mono uppercase tracking-wider">Tech Lead, DevTechGuru</p>
                <p class="text-primary text-sm mt-6 font-mono font-bold tracking-tighter">01748181448</p>
            </div>
            <div class="reveal glass p-8 rounded-2xl border border-white/5 card-hover">
                <p class="font-display font-bold text-xl text-offwhite leading-tight">Abhijit Bhowmik</p>
                <p class="text-slategray text-[13px] mt-1 font-mono uppercase tracking-wider">Professor, AIUB</p>
                <p class="text-primary text-sm mt-6 font-mono font-bold tracking-tighter uppercase text-[10px]">Requested Via Email</p>
            </div>
        </div>
    </div>
</section>

<?php include('layout/footer.html'); ?>