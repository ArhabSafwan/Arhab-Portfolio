<?php include 'layout/header.php'; ?>

<!-- ## main content
        ==================================================- -->
<main class="s-content">


    <!-- ### intro
            ================================================== -->
    <section id="intro" class="s-intro target-section">

        <div class="row intro-content wide">

            <div class="column">
                <div class="text-pretitle with-line">
                    Hello World
                </div>

                <h1 class="text-huge-title">
                    I am Arhab Safwan, <br>
                    <span class="dynamic-text"></span>
                </h1>

                <ul class="intro-social-icons">
                    <li><a href="https://www.linkedin.com/in/arhab-safwan-b68a1317b/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://github.com/ArhabSafwan" target="_blank"><i class="fab fa-github"></i></a></li>
                    <li><a href="https://www.facebook.com/arhab.rab" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://x.com/ArhabSafwan" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>

            <ul class="intro-social">
                <li><a href="https://github.com/ArhabSafwan" target="_blank">Github</a></li>
                <li><a href="https://www.linkedin.com/in/arhab-safwan-b68a1317b/" target="_blank">LinkedIn</a></li>
                <li><a href="https://x.com/ArhabSafwan" target="_blank">Twitter</a></li>
                <li><a href="https://www.facebook.com/arhab.rab" target="_blank">Facebook</a></li>
            </ul>

        </div> <!-- end intro content -->

        <style>
            .intro-social-icons {
                list-style: none;
                margin-top: 2rem;
                padding: 0;
                display: flex;
                justify-content: flex-start;
                gap: 20px;
            }

            .intro-social-icons li {
                padding: 0;
            }

            .intro-social-icons li a {
                color: white;
                font-size: 24px;
            }

            .intro-social-icons li a:hover {
                color: var(--color-1);
            }
        </style>

        <a href="#about" class="intro-scrolldown smoothscroll">
            <svg width="24" height="24" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                <path d="M11 21.883l-6.235-7.527-.765.644 7.521 9 7.479-9-.764-.645-6.236 7.529v-21.884h-1v21.883z"></path>
            </svg>
        </a>

    </section> <!-- end s-intro -->


    <!-- ### about
            ================================================== -->
    <section id="about" class="s-about target-section">


        <div class="row about-info wide" data-animate-block="">

            <div class="column lg-6 md-12 about-info__pic-block">
                <img data-src="images/about-photo.jpg" srcset="images/about-photo.jpg 1x, images/about-photo.jpg 2x" alt="" class="about-info__pic lazyload" data-animate-el="">
            </div>

            <div class="column lg-6 md-12">
                <div class="about-info__text">

                    <h2 class="text-pretitle with-line" data-animate-el="">
                        About
                    </h2>
                    <p class="attention-getter" data-animate-el="">
                        Passionate Software Engineer with 3+ years of experience in delivering successful global projects. Skilled in AI tools like ChatGPT and Copilot, and driven by innovation, adaptability, and continuous learning. Thrives in collaborative environments and aims to build impactful, forward-thinking solutions in an evolving tech world.
                    </p>
                    <a href="documents/Arhab CV.pdf" class="btn btn--medium u-fullwidth" data-animate-el="" download>Download CV</a>

                </div>
            </div>
        </div> <!-- about-info -->


        <div class="row about-expertise" data-animate-block="">
            <div class="column lg-12">

                <h2 class="text-pretitle" data-animate-el="">Expertise</h2>

                <ul class="skills-list h1" data-animate-el="">
                    <li>Frontend Development</li>
                    <li>Backend Development</li>
                    <li>Web Application Development</li>
                    <li>API Integration</li>
                    <li>ERP & CMS Implementation</li>
                    <li>CRM Systems</li>
                    <li>Cloud & DevOps</li>
                    <li>Full-Stack Engineering</li>
                    <li>AI-Powered Development (ChatGPT, Copilot).</li>
                </ul>

            </div>
        </div> <!-- end about-expertise -->


        <div class="row about-timelines" data-animate-block="">

            <div class="column lg-6 tab-12">

                <h2 class="text-pretitle" data-animate-el="">
                    Experience
                </h2>

                <div class="timeline" data-animate-el="">

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <h4 class="timeline__title">3DEVs IT Ltd</h4>
                            <h5 class="timeline__meta">Full Stack Software Engineer</h5>
                            <p class="timeline__timeframe">May 2024 - Present</p>
                        </div>
                        <div class="timeline__desc">
                            <ul>
                                <li>Architected scalable applications to support project demands and enhance data performance.</li>
                                <li>Analyzed and optimized system performance to ensure responsiveness.</li>
                                <li>Utilized AI tools (ChatGPT, Copilot) to solve complex programming issues in minimal time.</li>
                                <li>Led security protocol implementation and code reviews for industry-standard compliance.</li>
                                <li>Designed scalable systems with effective load distribution.</li>
                                <li>Utilized Git for version control with structured branching strategies.</li>
                                <li>Handled manual deployment of web applications to Linux-based servers using FileZilla (SFTP) and MobaXterm for remote server access and updates.</li>
                                <li>Drafted technical documentation and simplified complex concepts for team collaboration.</li>
                                <li>Drafted technical documentation and user manuals to support system use and maintenance.</li>
                                <li>Participated in client meetings and conducted training sessions to ensure effective onboarding and support.</li>
                                <li>Developed and integrated RESTful APIs to enable seamless communication between front-end and back-end systems, ensuring optimal performance and scalability.</li>
                                <li>Implemented SSO login feature for BRAC Migration.</li>
                                <li>Developed full text search engine for fast searching in system.</li>
                                <li>Developed and integrated payment systems including bKash IPN, Visa, and Mastercard to support e-commerce transactions.</li>
                                <li>Automated invoice generation and email delivery post-payment, improving operational efficiency.</li>
                                <li>Collaborated with the finance and QA teams to ensure payment accuracy, security, and compliance.</li>
                                <li>Worked with GeoJSON polygon data to develop interactive maps of Bangladesh’s divisions, districts, and upazilas, enabling user-driven selection and visualization of hierarchical geographic data.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <h4 class="timeline__title">DevTechGuru Limited</h4>
                            <h5 class="timeline__meta">Software Engineer</h5>
                            <p class="timeline__timeframe">May 2022 - May 2024</p>
                        </div>
                        <div class="timeline__desc">
                            <ul>
                                <li>Contributed to and eventually led scalable software solution architectures to meet project requirements.</li>
                                <li>Assisted in optimizing database schemas for integrity and efficiency, later taking responsibility for schema refinement.</li>
                                <li>Supported system design for scalability, with increasing responsibility over load balancing strategies.</li>
                                <li>Collaborated in technical documentation creation, taking on lead documentation tasks for system architectures.</li>
                                <li>Utilized Git for version control with structured branching strategies, gradually implementing more complex workflows.</li>
                                <li>Participated in client meetings and training sessions to support project implementation.</li>
                                <li>Learned and then implemented CI/CD pipelines for automated testing and deployment as part of the development process.</li>
                            </ul>
                        </div>
                    </div>


                </div> <!-- end timeline -->

            </div> <!-- end column -->

            <div class="column lg-6 tab-12">

                <h2 class="text-pretitle" data-animate-el="">
                    Education
                </h2>

                <div class="timeline" data-animate-el="">

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <h4 class="timeline__title">American International University, Bangladesh (AIUB)</h4>
                            <h5 class="timeline__meta">B.Sc. in Computer Science &amp; Engineering</h5>
                            <p class="timeline__timeframe">2018 - 2022</p>
                        </div>
                        <div class="timeline__desc">
                            <p>Studied at the School of Engineering, Technology and Science. Graduated with a CGPA of <strong>3.40</strong> on a 4.00 scale. AIUB is a private university in Dhaka, Bangladesh, established in 1994, offering diverse undergraduate and graduate programs across four faculties.</p>
                        </div>
                    </div>

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <h4 class="timeline__title">Milestone College</h4>
                            <h5 class="timeline__meta">Higher Secondary Certificate (HSC)</h5>
                            <p class="timeline__timeframe">2015 - 2017</p>
                        </div>
                        <div class="timeline__desc">
                            <p>Completed HSC with a GPA of <strong>4.75</strong> on a 5.00 scale. Milestone College is a Bengali and English-medium co-educational private school located in Uttara Model Town, Dhaka. It ranked 10th nationally in HSC exam results in 2014.</p>
                        </div>
                    </div>

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <h4 class="timeline__title">Milestone College</h4>
                            <h5 class="timeline__meta">Secondary School Certificate (SSC)</h5>
                            <p class="timeline__timeframe">2013 - 2015</p>
                        </div>
                        <div class="timeline__desc">
                            <p>Graduated with a perfect GPA of <strong>5.00</strong> on a 5.00 scale. Milestone College is a well-regarded educational institution in Uttara, Dhaka, offering both Bengali and English-medium instruction.</p>
                        </div>
                    </div>

                </div> <!-- end timeline -->

            </div> <!-- end column -->


        </div> <!-- end about-timelines -->

    </section> <!-- end s-about -->

    <style>
        .service-item__icon i {
            font-size: 10rem;
            color: #eabe7b;
        }

        .service-item__text:hover h3 {
            color: #d9a452;
            transform: scale(1.1);
            transition: all 0.3s ease;
        }
    </style>
    <!-- ### services
            ================================================== -->
    <section id="services" class="s-services target-section">

        <div class="row services-content wide">

            <div class="column lg-12" data-animate-block>
                <h2 class="text-pretitle" data-animate-el>What I Offer</h2>
                <p class="h1" data-animate-el="">Here are some of the services I offer to help you with your projects.</p>

                <div class="row block-lg-one-third block-md-one-half block-stack-on-700 services-list">
                    <div class="column" data-animate-el>
                        <div class="service-item">
                            <div class="service-item__icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <div class="service-item__text">
                                <h3>Web Development</h3>
                                <p>From single-page applications to large-scale enterprise systems, I build robust and scalable web solutions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column" data-animate-el>
                        <div class="service-item">
                            <div class="service-item__icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="service-item__text">
                                <h3>Responsive Design</h3>
                                <p>I create websites that look great on all devices, ensuring a seamless user experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column" data-animate-el>
                        <div class="service-item">
                            <div class="service-item__icon">
                                <i class="fas fa-server"></i>
                            </div>
                            <div class="service-item__text">
                                <h3>Backend Development</h3>
                                <p>I design and build powerful APIs and backend systems to drive your applications.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column" data-animate-el>
                        <div class="service-item">
                            <div class="service-item__icon">
                                <i class="fas fa-cloud"></i>
                            </div>
                            <div class="service-item__text">
                                <h3>Cloud & DevOps</h3>
                                <p>I can help you deploy and manage your applications in the cloud with CI/CD pipelines.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column" data-animate-el>
                        <div class="service-item">
                            <div class="service-item__icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div class="service-item__text">
                                <h3>AI Integration</h3>
                                <p>I can integrate AI-powered features into your applications to make them smarter.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column" data-animate-el>
                        <div class="service-item">
                            <div class="service-item__icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="service-item__text">
                                <h3>Database Design</h3>
                                <p>I design and optimize database schemas for performance, scalability, and data integrity.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!-- ### works
            ================================================== -->
    <section id="works" class="s-works target-section">


        <div class="row works-portfolio">

            <div class="column lg-12" data-animate-block="">

                <h2 class="text-pretitle" data-animate-el="">
                    Recent Works
                </h2>
                <p class="h1" data-animate-el="">
                    Here are a few recent projects I've really enjoyed working on—take a look!
                </p>

                <ul class="folio-list row block-lg-one-half block-stack-on-1000">

                    <li class="folio-list__item column" data-animate-el="">
                        <a class="folio-list__item-link" href="#modal-01">
                            <div class="folio-list__item-pic">
                                <img data-src="images/portfolio/portfolio-15.png" alt="" class="lazyload">
                            </div>

                            <div class="folio-list__item-text">
                                <div class="folio-list__item-cat">
                                    Web Application with CMS
                                </div>
                                <div class="folio-list__item-title">
                                    BRAC Frugal Innovation Forum.
                                </div>
                            </div>
                        </a>
                        <a class="folio-list__proj-link" target="_blank" href="https://innovation.brac.net/fif2025/" title="project link">
                            <svg width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li> <!--end folio-list__item -->

                    <li class="folio-list__item column" data-animate-el="">
                        <a class="folio-list__item-link" href="#modal-02">
                            <div class="folio-list__item-pic">
                                <img data-src="images/portfolio/portfolio-14.png" alt="" class="lazyload">
                            </div>

                            <div class="folio-list__item-text">
                                <div class="folio-list__item-cat">
                                    Web Application with CMS
                                </div>
                                <div class="folio-list__item-title">
                                    Unicef BD Wash Data.
                                </div>
                            </div>
                        </a>
                        <a class="folio-list__proj-link" target="_blank" href="https://bdwashdata.com/" title="project link">
                            <svg width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li> <!--end folio-list__item -->

                    <li class="folio-list__item column" data-animate-el="">
                        <a class="folio-list__item-link" href="#modal-03">
                            <div class="folio-list__item-pic">
                                <img data-src="images/portfolio/portfolio-16.png" alt="" class="lazyload">
                            </div>

                            <div class="folio-list__item-text">
                                <div class="folio-list__item-cat">
                                    Web Application with CMS
                                </div>
                                <div class="folio-list__item-title">
                                    BRAC Otithi.
                                </div>
                            </div>
                        </a>
                        <a class="folio-list__proj-link" target="_blank" href="https://otithi.brac.net/" title="project link">
                            <svg width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li> <!--end folio-list__item -->

                    <li class="folio-list__item column" data-animate-el="">
                        <a class="folio-list__item-link" href="#modal-04">
                            <div class="folio-list__item-pic">
                                <img data-src="images/portfolio/portfolio-13.png" alt="" class="lazyload">
                            </div>

                            <div class="folio-list__item-text">
                                <div class="folio-list__item-cat">
                                    Management Information System
                                </div>
                                <div class="folio-list__item-title">
                                    Unicef BD Wash Admin Panel.
                                </div>
                            </div>
                        </a>
                        <a class="folio-list__proj-link" target="_blank" href="https://bdwashdata.com/wash_admin" title="project link">
                            <svg width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li> <!--end folio-list__item -->

                    <li class="folio-list__item column" data-animate-el="">
                        <a class="folio-list__item-link" href="#modal-05">
                            <div class="folio-list__item-pic">
                                <img data-src="images/portfolio/portfolio-17.png" alt="" class="lazyload">
                            </div>

                            <div class="folio-list__item-text">
                                <div class="folio-list__item-cat">
                                    Web Application with CMS
                                </div>
                                <div class="folio-list__item-title">
                                    Asian Woman Laboratory School.
                                </div>
                            </div>
                        </a>
                        <a class="folio-list__proj-link" target="_blank" href="https://labschool.auw.edu.bd/" title="project link">
                            <svg width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li> <!--end folio-list__item -->

                    <li class="folio-list__item column" data-animate-el="">
                        <a class="folio-list__item-link" href="#modal-06">
                            <div class="folio-list__item-pic">
                                <img data-src="images/portfolio/portfolio-5.png" alt="" class="lazyload">
                            </div>

                            <div class="folio-list__item-text">
                                <div class="folio-list__item-cat">
                                    Website
                                </div>
                                <div class="folio-list__item-title">
                                    Webloom.
                                </div>
                            </div>
                        </a>
                        <a class="folio-list__proj-link" target="_blank" href="https://webloomst.net/" title="project link">
                            <svg width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li> <!--end folio-list__item -->
                    <li class="folio-list__item column" data-animate-el="">
                        <a class="folio-list__item-link" href="#modal-07">
                            <div class="folio-list__item-pic">
                                <img data-src="images/portfolio/portfolio-12.png" alt="" class="lazyload">
                            </div>

                            <div class="folio-list__item-text">
                                <div class="folio-list__item-cat">
                                    Management Information System
                                </div>
                                <div class="folio-list__item-title">
                                    Brac Migration MIS.
                                </div>
                            </div>
                        </a>
                        <a class="folio-list__proj-link" target="_blank" href="https://migrationmis.brac.net/" title="project link">
                            <svg width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li> <!--end folio-list__item -->
                    <li class="folio-list__item column" data-animate-el="">
                        <a class="folio-list__item-link" href="#modal-08">
                            <div class="folio-list__item-pic">
                                <img data-src="images/portfolio/portfolio-18.png" alt="" class="lazyload">
                            </div>

                            <div class="folio-list__item-text">
                                <div class="folio-list__item-cat">
                                    School Management System
                                </div>
                                <div class="folio-list__item-title">
                                    Asian Woman Laboratory School Management System.
                                </div>
                            </div>
                        </a>
                        <a class="folio-list__proj-link" href="https://labmis.auw.edu.bd/" target="_blank" title="project link">
                            <svg width="15" height="15" viewbox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li> <!--end folio-list__item -->

                </ul> <!-- end folio-list -->

            </div> <!-- end column -->


            <!-- Modal Templates Popup
                    -------------------------------------------- -->
            <div id="modal-01" hidden="">
                <div class="modal-popup">
                    <img data-src="images/portfolio/gallery/g-portfolio-15.png" alt="" class="lazyload">

                    <div class="modal-popup__desc">
                        <h5>Frugal Innovation Forum</h5>
                        <p>
                            A custom-built registration platform for the FIF 2025 conference, featuring user package selection, Portpos payment integration, and an admin panel with CMS functionality.
                        </p>
                        <ul class="modal-popup__cat">
                            <li>Web Application</li>
                            <li>With CMS</li>
                        </ul>
                    </div>

                    <a href="https://innovation.brac.net/fif2025/" target="_blank" class="modal-popup__details">Project link</a>
                </div>
            </div> <!-- end modal -->

            <div id="modal-02" hidden="">
                <div class="modal-popup">
                    <img data-src="images/portfolio/gallery/g-portfolio-14.png" alt="" class="lazyload">

                    <div class="modal-popup__desc">
                        <h5>Unicef BD Wash Data</h5>
                        <p>
                            A data-driven web platform built for UNICEF to monitor WASH (Water, Sanitation, and Hygiene) indicators across Bangladesh, featuring interactive dashboards and a full CMS for data management.
                        </p>
                        <ul class="modal-popup__cat">
                            <li>Web Application</li>
                            <li>With CMS</li>
                        </ul>
                    </div>

                    <a href="https://bdwashdata.com/" target="_blank" class="modal-popup__details">Project link</a>
                </div>
            </div> <!-- end modal -->

            <div id="modal-03" hidden="">
                <div class="modal-popup">
                    <img data-src="images/portfolio/gallery/g-portfolio-16.png" alt="" class="lazyload">

                    <div class="modal-popup__desc">
                        <h5>BRAC Otithi</h5>
                        <p>
                            A tourism-focused web platform where international and local visitors can explore and purchase curated travel packages across Bangladesh, complete with payment integration and CMS support.
                        </p>
                        <ul class="modal-popup__cat">
                            <li>Web Application</li>
                            <li>With CMS</li>
                        </ul>
                    </div>

                    <a href="https://otithi.brac.net/" target="_blank" class="modal-popup__details">Project link</a>
                </div>
            </div> <!-- end modal -->

            <div id="modal-04" hidden="">
                <div class="modal-popup">
                    <img data-src="images/portfolio/gallery/g-portfolio-13.png" alt="" class="lazyload">

                    <div class="modal-popup__desc">
                        <h5>Unicef BD Wash Admin Panel</h5>
                        <p>
                            A robust admin dashboard for managing nationwide WASH data, featuring warehouse oversight, facility data collection, user role assignment, and real-time analytics across Bangladesh.
                        </p>
                        <ul class="modal-popup__cat">
                            <li>Management Information System</li>
                        </ul>
                    </div>

                    <a href="https://bdwashdata.com/wash_admin" target="_blank" class="modal-popup__details">Project link</a>
                </div>
            </div> <!-- end modal -->

            <div id="modal-05" hidden="">
                <div class="modal-popup">

                    <img data-src="images/portfolio/gallery/g-portfolio-17.png" alt="" class="lazyload">

                    <div class="modal-popup__desc">
                        <h5>Asian Woman Laboratory</h5>
                        <p>
                            A collaborative online platform designed to empower Asian women in STEM fields through resources, mentorship, and community engagement.
                        </p>
                        <ul class="modal-popup__cat">
                            <li>Content Management System</li>
                        </ul>
                    </div>

                    <a href="https://labschool.auw.edu.bd/" target="_blank" class="modal-popup__details">Project link</a>
                </div>
            </div> <!-- end modal -->

            <div id="modal-06" hidden="">
                <div class="modal-popup">
                    <img data-src="images/portfolio/gallery/g-portfolio-5.png" alt="" class="lazyload">

                    <div class="modal-popup__desc">
                        <h5>Webloom</h5>
                        <p>
                            A digital agency platform aimed to create stunning websites and digital experiences.
                        </p>
                        <ul class="modal-popup__cat">
                            <li>Website</li>
                        </ul>
                    </div>

                    <a href="https://webloomst.net/" target="_blank" class="modal-popup__details">Project link</a>
                </div>
            </div> <!-- end modal -->
            <div id="modal-07" hidden="">
                <div class="modal-popup">
                    <img data-src="images/portfolio/gallery/g-portfolio-12.png" alt="" class="lazyload">

                    <div class="modal-popup__desc">
                        <h5>BRAC Migration MIS</h5>
                        <p>A comprehensive management information system designed to streamline the migration process and enhance data-driven decision-making for returning emigrants.</p>
                        <ul class="modal-popup__cat">
                            <li>Management Information System</li>
                        </ul>
                    </div>

                    <a href="https://migrationmis.brac.net/" target="_blank" class="modal-popup__details">Project link</a>
                </div>
            </div> <!-- end modal -->
            <div id="modal-08" hidden="">
                <div class="modal-popup">
                    <img src="images/portfolio/gallery/g-portfolio-18.png" alt="">

                    <div class="modal-popup__desc">
                        <h5>Asian Woman Laboratory School Management System</h5>
                        <p>A comprehensive school management system designed to support the unique needs of Asian women in education.</p>
                        <ul class="modal-popup__cat">
                            <li>Management Information System</li>
                        </ul>
                    </div>

                    <a href="https://labmis.auw.edu.bd/" target="_blank" class="modal-popup__details">Project link</a>
                </div>
            </div> <!-- end modal -->

        </div> <!-- end works-portfolio -->

    </section> <!-- end s-works -->


    <!-- ### contact
            ================================================== -->
    <section id="contact" class="s-contact target-section">

        <div class="row contact-top">
            <div class="column lg-12">
                <h2 class="text-pretitle">
                    Get In Touch
                </h2>

                <p class="h1">
                    I’d love to hear from you! Whether you have a question or just want to talk about design, tech, or business — feel free to drop me a message.
                </p>
            </div>
        </div> <!-- end contact-top -->

        <div class="row contact-bottom">
            <div class="column lg-3 md-5 tab-6 stack-on-550 contact-block">
                <h3 class="text-pretitle">Reach me at</h3>
                <p class="contact-links">
                    <a href="asafwan72@gmail.com" class="mailtoui">asafwan72@gmail.com</a> <br>
                    <a href="tel:+1975432345">+88 017 066 42926</a>
                </p>
                            </div>
            <div class="column lg-4 md-5 tab-6 stack-on-550 contact-block">
                <h3 class="text-pretitle">Social</h3>
                <ul class="contact-social">
                    <li><a href="https://github.com/ArhabSafwan" target="_blank">Github</a></li>
                    <li><a href="https://www.linkedin.com/in/arhab-safwan-b68a1317b/" target="_blank">LinkedIn</a></li>
                    <li><a href="https://x.com/ArhabSafwan" target="_blank">Twitter</a></li>
                    <li><a href="https://www.facebook.com/arhab.rab" target="_blank">Facebook</a></li>
                </ul>
                        </div>
            <div class="column lg-4 md-12 contact-block">
                <a href="mailto:asafwan72@gmail.com" class="mailtoui btn btn--medium u-fullwidth contact-btn">Say Hello.</a>
            </div>
        </div> <!-- end contact-bottom -->

    </section> <!-- end contact -->

</main> <!-- end s-content -->

<?php include 'layout/footer.php'; ?>