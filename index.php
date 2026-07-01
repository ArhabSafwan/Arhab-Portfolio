<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SM. Arhab Safwan — Senior Software Engineer</title>

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300;9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          obsidian: '#0B0C10',
          panel: '#131519',
          panel2: '#181B21',
          gold: '#C5A880',
          goldbright: '#DCC08F',
          offwhite: '#F8FAFC',
          slategray: '#94A3B8',
        },
        fontFamily: {
          display: ['"Fraunces"', 'serif'],
          body: ['"Inter"', 'sans-serif'],
          mono: ['"JetBrains Mono"', 'monospace'],
        },
      }
    }
  }
</script>

<style>
  html { scroll-behavior: smooth; }
  body {
    background-color: #0B0C10;
    background-image:
      radial-gradient(circle at 15% 0%, rgba(197,168,128,0.07), transparent 45%),
      radial-gradient(circle at 85% 20%, rgba(197,168,128,0.05), transparent 40%);
  }

  ::selection { background: #C5A880; color: #0B0C10; }

  ::-webkit-scrollbar { width: 8px; }
  ::-webkit-scrollbar-track { background: #0B0C10; }
  ::-webkit-scrollbar-thumb { background: #2b2e35; border-radius: 4px; }
  ::-webkit-scrollbar-thumb:hover { background: #C5A880; }

  .reveal {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.8s cubic-bezier(0.16,1,0.3,1), transform 0.8s cubic-bezier(0.16,1,0.3,1);
  }
  .reveal.in-view {
    opacity: 1;
    transform: translateY(0);
  }

  .hairline { background: linear-gradient(90deg, transparent, rgba(197,168,128,0.5), transparent); height: 1px; }

  .eyebrow {
    letter-spacing: 0.28em;
    font-family: 'JetBrains Mono', monospace;
  }

  .frame-glow {
    position: relative;
  }
  .frame-glow::before {
    content: '';
    position: absolute;
    inset: -6px;
    border-radius: 9999px;
    padding: 2px;
    background: conic-gradient(from 0deg, #C5A880, #4a4432, #C5A880, #211d15, #C5A880);
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    animation: spin-glow 6s linear infinite;
    filter: drop-shadow(0 0 10px rgba(197,168,128,0.55));
  }
  @keyframes spin-glow {
    to { transform: rotate(360deg); }
  }
  .frame-glow::after {
    content: '';
    position: absolute;
    inset: -14px;
    border-radius: 9999px;
    box-shadow: 0 0 40px 6px rgba(197,168,128,0.18);
    animation: pulse-ring 3.2s ease-in-out infinite;
  }
  @keyframes pulse-ring {
    0%, 100% { opacity: 0.55; }
    50% { opacity: 1; }
  }

  .metric-num {
    font-variant-numeric: tabular-nums;
  }

  .timeline-line {
    background: linear-gradient(180deg, rgba(197,168,128,0.9), rgba(197,168,128,0.05));
  }

  .timeline-dot {
    box-shadow: 0 0 0 4px #0B0C10, 0 0 0 5px rgba(197,168,128,0.4), 0 0 16px rgba(197,168,128,0.7);
  }

  .card-hover {
    transition: transform 0.35s cubic-bezier(0.16,1,0.3,1), border-color 0.35s ease, background-color 0.35s ease;
  }
  .card-hover:hover {
    transform: translateY(-4px);
    border-color: rgba(197,168,128,0.55);
    background-color: #181B21;
  }

  .skill-chip {
    transition: all 0.25s ease;
  }
  .skill-chip:hover {
    border-color: #C5A880;
    color: #DCC08F;
    background: rgba(197,168,128,0.08);
  }

  .nav-link {
    position: relative;
  }
  .nav-link::after {
    content: '';
    position: absolute;
    left: 0; bottom: -4px;
    width: 0%; height: 1px;
    background: #C5A880;
    transition: width 0.3s ease;
  }
  .nav-link:hover::after { width: 100%; }

  a:focus-visible, button:focus-visible {
    outline: 2px solid #C5A880;
    outline-offset: 3px;
  }

  @media (prefers-reduced-motion: reduce) {
    .reveal { transition: none; opacity: 1; transform: none; }
    .frame-glow::before, .frame-glow::after { animation: none; }
  }
</style>
</head>

<body class="bg-obsidian text-offwhite font-body antialiased">

<!-- ================= NAV ================= -->
<nav class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-obsidian/70 border-b border-white/5">
  <div class="max-w-6xl mx-auto px-6 md:px-10 flex items-center justify-between h-16">
    <a href="#top" class="font-display text-lg tracking-wide text-offwhite">S<span class="text-gold">.</span>A<span class="text-gold">.</span>S</a>
    <div class="hidden md:flex items-center gap-8 text-sm text-slategray eyebrow text-[11px]">
      <a href="#experience" class="nav-link hover:text-offwhite transition-colors">EXPERIENCE</a>
      <a href="#skills" class="nav-link hover:text-offwhite transition-colors">SKILLS</a>
      <a href="#projects" class="nav-link hover:text-offwhite transition-colors">PROJECTS</a>
      <a href="#education" class="nav-link hover:text-offwhite transition-colors">EDUCATION</a>
      <a href="#contact" class="nav-link hover:text-offwhite transition-colors">CONTACT</a>
    </div>
    <a href="mailto:asafwan72@gmail.com" class="hidden md:inline-block text-xs eyebrow border border-gold/50 text-gold px-4 py-2 rounded-full hover:bg-gold hover:text-obsidian transition-colors">GET IN TOUCH</a>
  </div>
</nav>

<!-- ================= HERO ================= -->
<header id="top" class="relative pt-40 pb-24 px-6 md:px-10 overflow-hidden">
  <div class="max-w-6xl mx-auto grid md:grid-cols-[1fr_auto] gap-14 items-center">
    <div class="reveal">
      <p class="eyebrow text-gold text-xs mb-5">SENIOR SOFTWARE ENGINEER · FULL-STACK · AI-ACCELERATED ENGINEERING</p>
      <h1 class="font-display text-5xl md:text-7xl leading-[1.02] font-medium">
        SM. Arhab<br><span class="text-gold italic font-light">Safwan</span>
      </h1>
      <p class="mt-8 max-w-xl text-slategray text-base md:text-lg leading-relaxed">
        Architecting and scaling production web platforms across fintech, NGO, and higher-education
        sectors — for organizations including <span class="text-offwhite">BRAC</span>,
        <span class="text-offwhite">UNICEF</span>, and <span class="text-offwhite">Harvard's Wyss Institute</span>.
        Early adopter of AI-augmented development, compressing sprint timelines without compromising
        architecture.
      </p>
      <div class="mt-10 flex flex-wrap gap-4">
        <a href="#contact" class="eyebrow text-xs bg-gold text-obsidian px-6 py-3 rounded-full hover:bg-goldbright transition-colors">VIEW CONTACT</a>
        <a href="#experience" class="eyebrow text-xs border border-white/15 text-offwhite px-6 py-3 rounded-full hover:border-gold hover:text-gold transition-colors">EXPERIENCE ↓</a>
      </div>
      <div class="mt-6 flex flex-wrap gap-x-6 gap-y-2 text-sm text-slategray font-mono">
        <span>Sector-7, Uttara, Dhaka</span>
        <span class="text-gold/40">·</span>
        <span>+8801706642926</span>
        <span class="text-gold/40">·</span>
        <span>asafwan72@gmail.com</span>
      </div>
    </div>

    <div class="reveal justify-self-center">
      <div class="frame-glow w-52 h-52 md:w-64 md:h-64 rounded-full">
        <img src="assets/images/profile.jpg" alt="SM. Arhab Safwan" class="w-52 h-52 md:w-64 md:h-64 object-cover rounded-full border-4 border-obsidian relative z-10">
      </div>
    </div>
  </div>

  <!-- Quick facts strip -->
  <div class="reveal max-w-6xl mx-auto mt-20 grid grid-cols-2 md:grid-cols-4 gap-px bg-white/5 border border-white/5 rounded-2xl overflow-hidden">
    <div class="bg-panel p-6 md:p-8">
      <p class="font-display text-3xl md:text-4xl text-gold metric-num">4+ Years</p>
      <p class="text-xs text-slategray mt-1 eyebrow">FULL-STACK ENGINEERING</p>
    </div>
    <div class="bg-panel p-6 md:p-8">
      <p class="font-display text-3xl md:text-4xl text-gold metric-num">10+</p>
      <p class="text-xs text-slategray mt-1 eyebrow">ENTERPRISE &amp; NGO PLATFORMS</p>
    </div>
    <div class="bg-panel p-6 md:p-8">
      <p class="font-display text-3xl md:text-4xl text-gold metric-num">6 Tools</p>
      <p class="text-xs text-slategray mt-1 eyebrow">CURSOR · CLAUDE CODE · COPILOT+</p>
    </div>
    <div class="bg-panel p-6 md:p-8">
      <p class="font-display text-3xl md:text-4xl text-gold metric-num">3 Global</p>
      <p class="text-xs text-slategray mt-1 eyebrow">BRAC · UNICEF · HARVARD</p>
    </div>
  </div>
</header>

<div class="max-w-6xl mx-auto px-6 md:px-10"><div class="hairline"></div></div>

<!-- ================= AI-ACCELERATED CALLOUT ================= -->
<section class="px-6 md:px-10 py-20">
  <div class="reveal max-w-6xl mx-auto rounded-2xl border border-gold/25 bg-gradient-to-br from-panel to-panel2 p-8 md:p-12 relative overflow-hidden">
    <p class="eyebrow text-gold text-xs mb-4">AI-ACCELERATED DELIVERY</p>
    <p class="font-display text-2xl md:text-3xl leading-snug max-w-3xl">
      Leveraging <span class="text-gold">Cursor</span>, <span class="text-gold">Claude Code</span> &amp;
      <span class="text-gold">Antigravity CLI</span> to ship features
      <span class="text-gold italic">~40% faster</span>, reduce boilerplate-related bugs, and rapidly
      prototype full-stack features without compromising code quality.
    </p>
  </div>
</section>

<!-- ================= EXPERIENCE ================= -->
<section id="experience" class="px-6 md:px-10 py-16">
  <div class="max-w-6xl mx-auto">
    <div class="reveal mb-16">
      <p class="eyebrow text-gold text-xs mb-3">01 — CAREER PATH</p>
      <h2 class="font-display text-4xl md:text-5xl">Professional Experience</h2>
    </div>

    <div class="relative pl-8 md:pl-12">
      <div class="timeline-line absolute left-0 md:left-1 top-2 bottom-2 w-px"></div>

      <!-- Job 1 -->
      <div class="reveal relative mb-16">
        <span class="timeline-dot absolute -left-8 md:-left-11 top-2 w-2.5 h-2.5 rounded-full bg-gold"></span>
        <p class="eyebrow text-xs text-slategray mb-1">MAY 2025 — PRESENT</p>
        <h3 class="font-display text-2xl md:text-3xl mb-1">Senior Full Stack Software Engineer</h3>
        <p class="text-gold text-sm mb-6 font-mono">3DEVS IT LTD.</p>
        <ul class="space-y-3 text-slategray text-[15px] leading-relaxed max-w-3xl">
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Spearheaded architectural decisions for enterprise-scale Laravel and Next.js applications, mentoring 2 junior engineers and reducing review turnaround time by <span class="text-offwhite font-medium">~50%</span>.</li>
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Engineered AI-accelerated workflows using Cursor and Claude Code, cutting feature-delivery time by approximately <span class="text-offwhite font-medium">40%</span> across the team's sprint output.</li>
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Led migration of legacy monolithic modules to a modular, component-driven Next.js/React architecture, reducing bundle size by <span class="text-offwhite font-medium">90%</span>.</li>
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Architected a fintech payment layer integrating PortPOS and Cybersource — supporting bKash IPN, Visa/Mastercard, and bank EMI — processing <span class="text-offwhite font-medium">100+ transactions daily</span>.</li>
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Directed an interactive GeoJSON-based mapping system for Bangladesh's divisions, districts, and upazilas, improving query performance by <span class="text-offwhite font-medium">85%</span>.</li>
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Owned RESTful API design and load-balancing strategy for high-traffic systems, maintaining <span class="text-offwhite font-medium">~99% uptime</span>.</li>
        </ul>
      </div>

      <!-- Job 2 -->
      <div class="reveal relative mb-16">
        <span class="timeline-dot absolute -left-8 md:-left-11 top-2 w-2.5 h-2.5 rounded-full bg-gold"></span>
        <p class="eyebrow text-xs text-slategray mb-1">MAY 2024 — MAY 2025</p>
        <h3 class="font-display text-2xl md:text-3xl mb-1">Full Stack Software Engineer</h3>
        <p class="text-gold text-sm mb-6 font-mono">3DEVS IT LTD.</p>
        <ul class="space-y-3 text-slategray text-[15px] leading-relaxed max-w-3xl">
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Architected and maintained scalable Laravel applications, improving system performance for enterprise-level projects.</li>
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Built and deployed Single Sign-On (SSO) authentication for the BRAC Migration Management and Information System.</li>
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Engineered a full-text search engine, reducing average data-retrieval time across large datasets by <span class="text-offwhite font-medium">~90%</span>.</li>
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Implemented automated invoice generation and post-payment email workflows, eliminating manual financial processing.</li>
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Integrated AI tools (ChatGPT, GitHub Copilot) into daily workflow, shortening feature turnaround by <span class="text-offwhite font-medium">~60%</span> without compromising code quality.</li>
        </ul>
      </div>

      <!-- Job 3 -->
      <div class="reveal relative">
        <span class="timeline-dot absolute -left-8 md:-left-11 top-2 w-2.5 h-2.5 rounded-full bg-gold"></span>
        <p class="eyebrow text-xs text-slategray mb-1">MAY 2022 — MAY 2024</p>
        <h3 class="font-display text-2xl md:text-3xl mb-1">Full Stack Software Engineer</h3>
        <p class="text-gold text-sm mb-6 font-mono">DEVTECHGURU LTD.</p>
        <ul class="space-y-3 text-slategray text-[15px] leading-relaxed max-w-3xl">
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Engineered scalable software architecture for client systems including BRAC Frugal Innovation Forum and Brac Otithi, progressively owning system design decisions.</li>
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Optimized relational database schemas (MySQL) for data integrity and query efficiency, improving response times by <span class="text-offwhite font-medium">~90%</span>.</li>
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Implemented CI/CD pipelines (GitHub Actions, Docker) for automated testing and deployment.</li>
          <li class="flex gap-3"><span class="text-gold shrink-0">▸</span>Delivered full-stack features for international clients (UNICEF, Asian University for Women, Harvard's Wyss Institute) using Laravel, MySQL, and Tailwind CSS.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<div class="max-w-6xl mx-auto px-6 md:px-10"><div class="hairline"></div></div>

<!-- ================= SKILLS ================= -->
<section id="skills" class="px-6 md:px-10 py-24">
  <div class="max-w-6xl mx-auto">
    <div class="reveal mb-14">
      <p class="eyebrow text-gold text-xs mb-3">02 — CAPABILITIES</p>
      <h2 class="font-display text-4xl md:text-5xl">Skills &amp; Tooling</h2>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
      <div class="reveal">
        <p class="eyebrow text-xs text-gold mb-4">LANGUAGES &amp; FRAMEWORKS</p>
        <div class="flex flex-wrap gap-2">
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">PHP</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">JavaScript</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">Laravel</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">Next.js</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">React</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">Vue.js</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">Tailwind</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">Bootstrap 5</span>
        </div>
      </div>

      <div class="reveal">
        <p class="eyebrow text-xs text-gold mb-4">AI-AUGMENTED DEV</p>
        <div class="flex flex-wrap gap-2">
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">Cursor</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">Claude Code</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">Antigravity CLI</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">GitHub Copilot</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">ChatGPT</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">Gemini</span>
        </div>
      </div>

      <div class="reveal">
        <p class="eyebrow text-xs text-gold mb-4">DATABASE &amp; ARCHITECTURE</p>
        <div class="flex flex-wrap gap-2">
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">MySQL</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">MariaDB</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">REST APIs</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">MVC</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">Query Optimization</span>
        </div>
      </div>

      <div class="reveal">
        <p class="eyebrow text-xs text-gold mb-4">PAYMENTS &amp; INTEGRATIONS</p>
        <div class="flex flex-wrap gap-2">
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">bKash IPN</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">Cybersource</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">PortPOS</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">EMI Workflows</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">SSO</span>
        </div>
      </div>

      <div class="reveal md:col-span-2">
        <p class="eyebrow text-xs text-gold mb-4">DEVOPS &amp; TOOLING</p>
        <div class="flex flex-wrap gap-2">
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">Git / GitHub</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">Docker</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">GitHub Actions</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">FileZilla</span>
          <span class="skill-chip border border-white/10 rounded-full px-4 py-2 text-sm text-offwhite">MobaXterm</span>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="max-w-6xl mx-auto px-6 md:px-10"><div class="hairline"></div></div>

<!-- ================= PROJECTS ================= -->
<section id="projects" class="px-6 md:px-10 py-24">
  <div class="max-w-6xl mx-auto">
    <div class="reveal mb-14">
      <p class="eyebrow text-gold text-xs mb-3">03 — SELECTED WORK</p>
      <h2 class="font-display text-4xl md:text-5xl">Key Projects</h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="reveal card-hover rounded-xl border border-white/10 bg-panel overflow-hidden">
        <img src="assets/images/project-placeholder.jpg" alt="AUW Laboratory School Web App" class="w-full h-40 object-cover">
        <div class="p-6">
          <h3 class="font-display text-lg mb-1">AUW Laboratory School Web App</h3>
          <p class="text-xs text-gold font-mono mb-3">Laravel · Tailwind · MySQL</p>
          <p class="text-sm text-slategray leading-relaxed">School CMS website featuring an admin panel for dynamic content management.</p>
        </div>
      </div>

      <div class="reveal card-hover rounded-xl border border-white/10 bg-panel overflow-hidden">
        <img src="assets/images/project-placeholder.jpg" alt="Brac Frugal Innovation Forum" class="w-full h-40 object-cover">
        <div class="p-6">
          <h3 class="font-display text-lg mb-1">Brac Frugal Innovation Forum</h3>
          <p class="text-xs text-gold font-mono mb-3">Laravel · Tailwind · MySQL</p>
          <p class="text-sm text-slategray leading-relaxed">Annual innovation event platform with speaker registration and integrated PortPOS payment system.</p>
        </div>
      </div>

      <div class="reveal card-hover rounded-xl border border-white/10 bg-panel overflow-hidden">
        <img src="assets/images/project-placeholder.jpg" alt="Brac Social Innovation Lab" class="w-full h-40 object-cover">
        <div class="p-6">
          <h3 class="font-display text-lg mb-1">Brac Social Innovation Lab</h3>
          <p class="text-xs text-gold font-mono mb-3">PHP · Tailwind · Bootstrap</p>
          <p class="text-sm text-slategray leading-relaxed">Platform for showcasing BRAC's social innovation initiatives and new ideas for social welfare.</p>
        </div>
      </div>

      <div class="reveal card-hover rounded-xl border border-white/10 bg-panel overflow-hidden">
        <img src="assets/images/project-placeholder.jpg" alt="Brac Otithi Web App" class="w-full h-40 object-cover">
        <div class="p-6">
          <h3 class="font-display text-lg mb-1">Brac Otithi Web App</h3>
          <p class="text-xs text-gold font-mono mb-3">Laravel · Tailwind · MySQL</p>
          <p class="text-sm text-slategray leading-relaxed">Tour booking e-commerce platform supporting multiple packages per city with integrated Cybersource and PortPOS payment gateways.</p>
        </div>
      </div>

      <div class="reveal card-hover rounded-xl border border-white/10 bg-panel overflow-hidden">
        <img src="assets/images/project-placeholder.jpg" alt="BRAC Migration Management" class="w-full h-40 object-cover">
        <div class="p-6">
          <h3 class="font-display text-lg mb-1">BRAC Migration Management</h3>
          <p class="text-xs text-gold font-mono mb-3">PHP · MariaDB · Bootstrap</p>
          <p class="text-sm text-slategray leading-relaxed">Complex RBAC-based system for managing immigrant data, financial support tracking, and reporting.</p>
        </div>
      </div>

      <div class="reveal card-hover rounded-xl border border-white/10 bg-panel overflow-hidden">
        <img src="assets/images/project-placeholder.jpg" alt="UNICEF BD Washdata" class="w-full h-40 object-cover">
        <div class="p-6">
          <h3 class="font-display text-lg mb-1">UNICEF BD Washdata</h3>
          <p class="text-xs text-gold font-mono mb-3">PHP · MariaDB · Bootstrap</p>
          <p class="text-sm text-slategray leading-relaxed">Arsenic detection system with facility tracking; maps arsenic levels and sanitation data using GeoJSON.</p>
        </div>
      </div>

      <div class="reveal card-hover rounded-xl border border-white/10 bg-panel overflow-hidden">
        <img src="assets/images/project-placeholder.jpg" alt="AUW Laboratory School MIS" class="w-full h-40 object-cover">
        <div class="p-6">
          <h3 class="font-display text-lg mb-1">AUW Laboratory School MIS</h3>
          <p class="text-xs text-gold font-mono mb-3">Laravel · Tailwind · MySQL</p>
          <p class="text-sm text-slategray leading-relaxed">Full-scale Management Information System for student records, fees, exams, and staff scheduling.</p>
        </div>
      </div>

      <div class="reveal card-hover rounded-xl border border-white/10 bg-panel overflow-hidden">
        <img src="assets/images/project-placeholder.jpg" alt="LIMS — Wyss Institute" class="w-full h-40 object-cover">
        <div class="p-6">
          <h3 class="font-display text-lg mb-1">LIMS — Wyss Institute</h3>
          <p class="text-xs text-gold font-mono mb-3">Laravel · Tailwind · MySQL</p>
          <p class="text-sm text-slategray leading-relaxed">Harvard laboratory management system for instrument data entry and image capture.</p>
        </div>
      </div>

      <div class="reveal card-hover rounded-xl border border-white/10 bg-panel overflow-hidden">
        <img src="assets/images/project-placeholder.jpg" alt="ERP Three Arrows Plastic" class="w-full h-40 object-cover">
        <div class="p-6">
          <h3 class="font-display text-lg mb-1">ERP Three Arrows Plastic</h3>
          <p class="text-xs text-gold font-mono mb-3">PHP · MariaDB · Bootstrap</p>
          <p class="text-sm text-slategray leading-relaxed">Comprehensive ERP solution with multilevel RBAC, payroll, and HR management modules.</p>
        </div>
      </div>

      <div class="reveal card-hover rounded-xl border border-white/10 bg-panel overflow-hidden">
        <img src="assets/images/project-placeholder.jpg" alt="ERP Al-Rukan Technologies" class="w-full h-40 object-cover">
        <div class="p-6">
          <h3 class="font-display text-lg mb-1">ERP Al-Rukan Technologies</h3>
          <p class="text-xs text-gold font-mono mb-3">PHP · MariaDB · Bootstrap</p>
          <p class="text-sm text-slategray leading-relaxed">Comprehensive ERP solution with multilevel RBAC, payroll, and HR management modules.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="max-w-6xl mx-auto px-6 md:px-10"><div class="hairline"></div></div>

<!-- ================= EDUCATION / CERTS ================= -->
<section id="education" class="px-6 md:px-10 py-24">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-14">

    <div class="reveal">
      <p class="eyebrow text-gold text-xs mb-3">04 — EDUCATION</p>
      <h2 class="font-display text-3xl md:text-4xl mb-10">Academic Background</h2>

      <div class="space-y-8">
        <div class="border-l-2 border-gold/40 pl-6">
          <p class="font-display text-xl">American International University-Bangladesh</p>
          <p class="text-slategray text-sm mt-1">B.Sc. in Computer Science &amp; Engineering — 2018–2022</p>
          <p class="text-gold text-sm mt-1 font-mono">CGPA 3.40</p>
        </div>
        <div class="border-l-2 border-white/10 pl-6">
          <p class="font-display text-xl">Milestone College</p>
          <p class="text-slategray text-sm mt-1">H.S.C 2017 — GPA 4.75</p>
          <p class="text-slategray text-sm">S.S.C 2015 — GPA 5.00</p>
        </div>
      </div>
    </div>

    <div class="reveal">
      <p class="eyebrow text-gold text-xs mb-3">05 — CERTIFICATIONS</p>
      <h2 class="font-display text-3xl md:text-4xl mb-10">Credentials</h2>
      <div class="border border-white/10 rounded-xl p-6 bg-panel">
        <p class="font-display text-lg">Laravel 9.0 Essential Training</p>
        <p class="text-slategray text-sm mt-1">LinkedIn Learning — June 2023</p>
      </div>

      <p class="eyebrow text-gold text-xs mb-3 mt-12">QUICK FACTS</p>
      <div class="grid grid-cols-3 gap-3 text-center">
        <div class="border border-white/10 rounded-xl p-4 bg-panel">
          <p class="text-xs text-slategray mb-1">Editor</p>
          <p class="text-sm text-offwhite font-mono">VS Code</p>
        </div>
        <div class="border border-white/10 rounded-xl p-4 bg-panel">
          <p class="text-xs text-slategray mb-1">SQL Tool</p>
          <p class="text-sm text-offwhite font-mono">SQLyog</p>
        </div>
        <div class="border border-white/10 rounded-xl p-4 bg-panel">
          <p class="text-xs text-slategray mb-1">Deploy</p>
          <p class="text-sm text-offwhite font-mono">MobaXterm</p>
        </div>
      </div>
    </div>

  </div>
</section>

<div class="max-w-6xl mx-auto px-6 md:px-10"><div class="hairline"></div></div>

<!-- ================= REFERENCES ================= -->
<section class="px-6 md:px-10 py-24">
  <div class="max-w-6xl mx-auto">
    <div class="reveal mb-14">
      <p class="eyebrow text-gold text-xs mb-3">06 — REFERENCES</p>
      <h2 class="font-display text-4xl md:text-5xl">Endorsements</h2>
    </div>
    <div class="grid sm:grid-cols-3 gap-6">
      <div class="reveal card-hover border border-white/10 rounded-xl p-6 bg-panel">
        <p class="font-display text-lg">Mahmood Ahsan</p>
        <p class="text-slategray text-sm mt-1">BDM, 3DEVS</p>
        <p class="text-gold text-sm mt-2 font-mono">01942844321</p>
      </div>
      <div class="reveal card-hover border border-white/10 rounded-xl p-6 bg-panel">
        <p class="font-display text-lg">Tausif Hossain</p>
        <p class="text-slategray text-sm mt-1">Tech Lead, DevTechGuru</p>
        <p class="text-gold text-sm mt-2 font-mono">01748181448</p>
      </div>
      <div class="reveal card-hover border border-white/10 rounded-xl p-6 bg-panel">
        <p class="font-display text-lg">Abhijit Bhowmik</p>
        <p class="text-slategray text-sm mt-1">Professor, AIUB</p>
        <p class="text-gold text-sm mt-2 font-mono">Available on request</p>
      </div>
    </div>
  </div>
</section>

<!-- ================= CONTACT / FOOTER ================= -->
<footer id="contact" class="px-6 md:px-10 py-24 border-t border-white/5 mt-10">
  <div class="reveal max-w-6xl mx-auto text-center">
    <p class="eyebrow text-gold text-xs mb-4">LET'S BUILD SOMETHING</p>
    <h2 class="font-display text-4xl md:text-6xl mb-8">Get In Touch</h2>
    <div class="flex flex-wrap justify-center gap-x-10 gap-y-4 text-slategray font-mono text-sm mb-10">
      <a href="mailto:asafwan72@gmail.com" class="hover:text-gold transition-colors">asafwan72@gmail.com</a>
      <span class="text-gold/30">·</span>
      <a href="tel:+8801706642926" class="hover:text-gold transition-colors">+8801706642926</a>
      <span class="text-gold/30">·</span>
      <span>Sector-7, Uttara, Dhaka</span>
    </div>
    <div class="flex justify-center gap-6 text-sm eyebrow">
      <a href="#" class="border border-white/15 rounded-full px-6 py-2 hover:border-gold hover:text-gold transition-colors">LINKEDIN</a>
      <a href="#" class="border border-white/15 rounded-full px-6 py-2 hover:border-gold hover:text-gold transition-colors">GITHUB</a>
      <a href="#" class="border border-white/15 rounded-full px-6 py-2 hover:border-gold hover:text-gold transition-colors">PORTFOLIO</a>
    </div>
    <p class="text-xs text-slategray/60 mt-16 font-mono">© 2026 SM. Arhab Safwan — Crafted with intent.</p>
  </div>
</footer>

<script>
  $(function () {
    // Scroll-reveal
    const revealEls = $('.reveal');
    function checkReveal() {
      const windowBottom = $(window).scrollTop() + $(window).height();
      revealEls.each(function () {
        const el = $(this);
        if (!el.hasClass('in-view')) {
          const elTop = el.offset().top + 60;
          if (windowBottom > elTop) {
            el.addClass('in-view');
          }
        }
      });
    }
    checkReveal();
    $(window).on('scroll resize', checkReveal);

    // Smooth nav highlight not required; simple anchor scroll already via CSS scroll-behavior
  });
</script>

</body>
</html>
