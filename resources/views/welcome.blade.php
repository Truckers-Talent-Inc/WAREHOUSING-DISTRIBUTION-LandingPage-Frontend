<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Truckers Talent | Warehouse Job Board & Industrial Staffing</title>
    <meta name="description" content="The specialized job board for warehouses, distribution centers, and e-commerce fulfillment. Post jobs and hire forklift operators and pickers directly.">
    <meta name="keywords" content="Warehouse jobs, forklift operator hiring, distribution center job board, industrial staffing, picker packer jobs, logistics hiring platform">
    <meta name="robots" content="index, follow">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600;800;900&family=Inter:wght@300;400;600&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .brand-font { font-family: 'Montserrat', sans-serif; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
        
        /* --- PALETA INDUSTRIAL --- */
        .bg-brand-red { background-color: #731022; }
        .text-brand-red { color: #731022; }
        
        .bg-safety-yellow { background-color: #f59e0b; }
        .text-safety-yellow { color: #f59e0b; }
        .accent-safety-yellow { accent-color: #f59e0b; }
        
        .bg-concrete { background-color: #374151; }

        /* Pattern de Cinta de Peligro */
        .hazard-stripe {
            background: repeating-linear-gradient(
                45deg,
                #f59e0b,
                #f59e0b 10px,
                #1f2937 10px,
                #1f2937 20px
            );
        }

        /* Animaciones */
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-slide-up { animation: slideUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        
        /* Carrusel Suave */
        .slide-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 1s ease-in-out;
        }
        .opacity-0 { opacity: 0; z-index: 0; }
        .opacity-100 { opacity: 1; z-index: 10; }

        /* FAQ ACCORDION */
        details > summary { list-style: none; }
        details > summary::-webkit-details-marker { display: none; }
        details[open] summary ~ div { animation: slideDown 0.3s ease-out forwards; }
        @keyframes slideDown { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-gray-50 text-slate-800 antialiased">

    <nav class="fixed top-0 w-full z-50 transition-all duration-300 bg-gradient-to-b from-black/90 to-transparent">
        <div class="container mx-auto px-8 h-24 flex justify-between items-center">
            <a href="/" class="flex items-center gap-3 group">
                <img src="img/truckerlogo.svg" alt="Logo" class="h-32 w-auto object-contain brightness-0 invert opacity-90 group-hover:opacity-100 transition">
                <span class="text-white/90 font-light tracking-[0.2em] text-xs uppercase border-l border-white/30 pl-3 group-hover:text-white transition">
                    Warehousing
                </span>
            </a>
            <div class="hidden md:flex space-x-8 text-[10px] md:text-xs font-medium uppercase tracking-widest text-white/80">
                <a href="#bottlenecks" class="hover:text-white hover:border-b border-white transition pb-1">Industry Risks</a>
                <a href="#hiring" class="hover:text-white hover:border-b border-white transition pb-1">For Facilities</a>
                <a href="#shifts" class="hover:text-white hover:border-b border-white transition pb-1">For Staff</a>
                <a href="#corporate-forms" class="hover:text-safety-yellow text-safety-yellow font-bold transition pb-1">Partner Solutions</a>
                <a href="#faq" class="hover:text-white hover:border-b border-white transition pb-1">FAQ</a>
            </div>
            <div>
                <a href="https://www.truckerstalent.com/start" class="bg-safety-yellow text-black px-6 py-2 rounded-sm text-xs font-bold uppercase tracking-wide hover:bg-white transition shadow-lg">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <header class="relative h-screen w-full flex items-center justify-center overflow-hidden bg-gray-900">
        <div class="absolute inset-0">
            <img src="img/hero.webp" class="w-full h-full object-cover opacity-50" alt="Warehouse Racks">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/50 to-transparent"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mt-10">
            
            <!-- HERO LEFT SIDE -->
            <div class="text-white">
                <div class="flex items-center gap-2 mb-6 animate-slide-up">
                    <div class="h-1 w-12 bg-safety-yellow"></div>
                    <span class="text-safety-yellow font-bold tracking-[0.2em] uppercase text-xs">
                        The Logistics Job Board
                    </span>
                </div>
                <h1 class="text-5xl md:text-7xl font-black leading-none uppercase mb-8 animate-slide-up" style="animation-delay: 0.1s;">
                    HIRE WAREHOUSE <br>
                    <span class="text bg-clip-text bg-gradient-to-r from-safety-yellow to-yellow-200">STAFF FAST.</span>
                </h1>
                <p class="text-lg text-gray-300 font-light mb-10 max-w-lg leading-relaxed animate-slide-up" style="animation-delay: 0.2s;">
                    The specialized job board for <strong>Warehouses, Distribution Centers, and E-commerce Fulfillment</strong>. Stop using generic sites and connect directly with industry professionals.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 animate-slide-up" style="animation-delay: 0.3s;">
                    <a href="https://www.truckerstalent.com/start" class="px-8 py-4 bg-safety-yellow text-black font-black uppercase tracking-widest text-sm hover:bg-white transition shadow-[0_0_20px_rgba(245,158,11,0.4)] text-center">
                        Post Open Roles
                    </a>
                    <a href="https://www.truckerstalent.com/start" class="px-8 py-4 border border-white/30 text-white font-bold uppercase tracking-widest text-sm hover:bg-white hover:text-black transition text-center">
                        Find Warehouse Jobs
                    </a>
                </div>
            </div>

            <!-- HERO RIGHT SIDE: Partner Solutions Buttons -->
            <div id="hero-actions" class="hidden lg:flex flex-col justify-center relative z-30 animate-slide-up" style="animation-delay: 0.5s;">
                <div class="absolute -top-10 -right-10 w-64 h-64 bg-safety-yellow/10 rounded-full blur-3xl pointer-events-none"></div>
                
                <div class="bg-gray-900/80 backdrop-blur-md p-8 rounded-lg shadow-2xl max-w-md ml-auto relative border-t-8 border-safety-yellow border-x border-b border-gray-700">
                    <h3 class="text-2xl font-black text-white mb-2">Partner Network</h3>
                    <p class="text-gray-400 text-sm mb-6">Explore our B2B solutions for facilities, 3PLs, and carriers.</p>
                    
                    <div class="space-y-4">
                        <a href="#corporate-forms" onclick="switchTab('capacity')" class="block w-full py-4 bg-safety-yellow text-black font-black uppercase tracking-widest text-xs text-center rounded hover:bg-white transition shadow-[0_0_15px_rgba(245,158,11,0.3)]">
                            Request Freight Capacity
                        </a>
                        <a href="#corporate-forms" onclick="switchTab('factoring')" class="block w-full py-4 bg-gray-800 border border-gray-600 text-white font-bold uppercase tracking-widest text-xs text-center rounded hover:bg-gray-700 transition">
                            Apply for Factoring (RTS)
                        </a>
                    </div>
                    
                  
                </div>
            </div>

        </div>
    </header>

    <div class="bg-safety-yellow py-8">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6 text-black">
            <div class="flex items-center gap-4">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <div>
                    <p class="text-3xl font-black">Direct</p>
                    <p class="text-xs font-bold uppercase tracking-wide">Contact with Candidates</p>
                </div>
            </div>
            <div class="h-12 w-px bg-black/10 hidden md:block"></div>
            <div class="flex items-center gap-4">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div>
                    <p class="text-3xl font-black">100%</p>
                    <p class="text-xs font-bold uppercase tracking-wide">Industry Focused</p>
                </div>
            </div>
            <div class="h-12 w-px bg-black/10 hidden md:block"></div>
            <div class="flex items-center gap-4">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div>
                    <p class="text-3xl font-black">Zero</p>
                    <p class="text-xs font-bold uppercase tracking-wide">Agency Middlemen Fees</p>
                </div>
            </div>
        </div>
    </div>

    <section id="bottlenecks" class="py-24 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                <div class="lg:w-1/3 sticky top-24">
                    <span class="text-red-600 font-bold uppercase tracking-[0.2em] text-xs mb-3 block">Daily Operations Log</span>
                    <h2 class="text-4xl text-gray-900 font-black uppercase mb-6">
                        Anatomy of a <br> <span class="text-red-600 underline decoration-4 underline-offset-4">Failed Shift.</span>
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Relying on generic job boards or slow temp agencies leaves your operations vulnerable. You need dedicated logistics talent.
                    </p>
                    <div class="bg-gray-100 p-6 rounded border-l-4 border-black">
                        <p class="font-bold text-gray-900 mb-1">Cost of Slow Hiring:</p>
                        <p class="text-3xl font-black text-red-600">$5,000 <span class="text-sm text-gray-500 font-medium">/ hour in downtime</span></p>
                    </div>
                </div>

                <div class="lg:w-2/3 w-full">
                    <div class="bg-gray-50 border border-gray-200 rounded-xl p-8 relative">
                        <div class="absolute left-8 top-8 bottom-8 w-0.5 bg-gray-300"></div>

                        <div class="relative pl-12 mb-10 group">
                            <div class="absolute left-6 -translate-x-1/2 w-4 h-4 rounded-full bg-red-600 border-4 border-white shadow-lg z-10"></div>
                            <div class="flex items-center gap-3 mb-2">
                                <span class="font-mono text-xs font-bold text-red-600 bg-red-100 px-2 py-1 rounded">06:00 AM</span>
                                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Shift Start</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">The "Ghost" Candidates</h3>
                            <p class="text-gray-600 text-sm">
                                You posted on a generic job board. Hundreds applied, but only a fraction actually have warehouse experience.
                                <span class="block mt-1 font-medium text-red-600">Impact: 2 Unmanned Packing Lines.</span>
                            </p>
                        </div>

                        <div class="relative pl-12 mb-10 group">
                            <div class="absolute left-6 -translate-x-1/2 w-4 h-4 rounded-full bg-safety-yellow border-4 border-white shadow-lg z-10"></div>
                            <div class="flex items-center gap-3 mb-2">
                                <span class="font-mono text-xs font-bold text-yellow-700 bg-yellow-100 px-2 py-1 rounded">07:45 AM</span>
                                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Training Delay</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Unverified Skills</h3>
                            <p class="text-gray-600 text-sm">
                                An agency sent a worker who claims to know the RF Scanner but keeps flagging errors. Your supervisor has to stop and retrain them.
                            </p>
                        </div>

                        <div class="relative pl-12 group">
                            <div class="absolute left-6 -translate-x-1/2 w-4 h-4 rounded-full bg-black border-4 border-white shadow-lg z-10"></div>
                            <div class="flex items-center gap-3 mb-2">
                                <span class="font-mono text-xs font-bold text-gray-600 bg-gray-200 px-2 py-1 rounded">10:30 AM</span>
                                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">System Failure</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Peak Season Bottleneck</h3>
                            <p class="text-gray-600 text-sm">
                                Volume spikes by 40%. You need 10 more hands immediately, but your recruiter takes 48 hours to source them.
                                <span class="block mt-1 font-bold text-black">Result: Missed SLA & Late Shipments.</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hiring" class="py-24 bg-gray-100 relative">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <span class="text-gray-400 font-bold uppercase tracking-[0.2em] text-xs mb-2 block">For Employers</span>
                <h2 class="text-4xl text-gray-900 font-black uppercase">Built for <span class="text-safety-yellow">Warehouses.</span></h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative group">
                    <div class="absolute -inset-2 bg-gray-200 rounded-xl transform rotate-2 group-hover:rotate-1 transition duration-500"></div>
                    <div class="relative bg-white border border-gray-200 rounded-xl shadow-xl overflow-hidden h-[400px]">
                        <div class="bg-gray-100 border-b border-gray-200 px-4 py-2 flex gap-2 relative z-20">
                            <div class="w-3 h-3 rounded-full bg-red-400"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                            <div class="w-3 h-3 rounded-full bg-green-400"></div>
                        </div>
                        
                        <div class="relative w-full h-full" id="browser-slider">
                            <img src="img/emp-step1.webp" class="slide-image opacity-100" alt="Dashboard 1">
                            <img src="img/emp-step2.webp" class="slide-image opacity-0" alt="Dashboard 2">
                            <img src="img/emp-step3.webp" class="slide-image opacity-0" alt="Dashboard 3">
                            <img src="img/emp-step4.webp" class="slide-image opacity-0" alt="Dashboard 4">
                        </div>
                        
                        <div class="absolute bottom-6 left-6 z-30 bg-gray-900 text-white p-4 rounded shadow-lg border-l-4 border-safety-yellow">
                            <p class="text-xs text-gray-400 uppercase font-bold">Skill Match</p>
                            <p class="font-bold">OSHA 10 Certified</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-black text-gray-900 mb-6">Stop sorting retail resumes.</h3>
                    <p class="text-gray-600 mb-6 text-lg">
                        When a container arrives, you don't have time to sift through unqualified applicants. You need a job board that only attracts logistics and industrial professionals.
                    </p>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-gray-100 rounded flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Industry Profiles</h4>
                                <p class="text-sm text-gray-500">Candidates list their Forklift, Reach Truck, and OSHA certifications directly on their profiles for you to review.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-gray-100 rounded flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Direct Contact</h4>
                                <p class="text-sm text-gray-500">Review candidate experience directly. Message them and hire them on your terms, without agency middlemen blocking the communication.</p>
                            </div>
                        </div>
                    </div>
                    <a href="https://www.truckerstalent.com/start" class="mt-8 inline-block text-safety-yellow font-black uppercase tracking-widest border-b-2 border-safety-yellow pb-1 hover:text-yellow-600 transition">
                        Start Posting Jobs &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="shifts" class="py-24 bg-concrete text-white relative">
        <div class="absolute top-0 left-0 w-full h-4 hazard-stripe"></div>
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row-reverse gap-16 items-center">
                
                <div class="md:w-1/2">
                    <span class="text-safety-yellow font-bold uppercase tracking-[0.2em] text-xs mb-2 block">For Workers</span>
                    <h2 class="text-4xl font-black uppercase mb-6">Find Your Next<br>Warehouse Job.</h2>
                    <p class="text-gray-300 mb-8 text-lg">
                        Stop waiting for temp agencies to call. Create your profile, find facilities hiring near you, and apply directly to the employer.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-safety-yellow rounded-full"></div>
                            <span>Browse roles for Forklift, Picker/Packer, and General Labor.</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-safety-yellow rounded-full"></div>
                            <span>See shift hours, pay rates, and requirements upfront.</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-safety-yellow rounded-full"></div>
                            <span>Apply with one click using your digital resume.</span>
                        </li>
                    </ul>
                    <a href="https://www.truckerstalent.com/start" class="px-8 py-4 bg-white text-black font-black uppercase tracking-widest text-sm hover:bg-gray-200 transition">
                        Create Your Profile
                    </a>
                </div>

                <div class="md:w-1/2 relative flex justify-center">
                    <div class="relative bg-gray-800 p-3 rounded-[2.5rem] border-4 border-gray-700 shadow-2xl">
                        <div class="bg-gray-900 rounded-[2rem] overflow-hidden relative w-[300px] aspect-[375/812]">
                            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-32 h-6 bg-black rounded-b-xl z-20"></div>
                            
                            <div class="relative w-full h-full" id="mobile-slider">
                                <img src="img/step.webp" class="slide-image opacity-100" alt="App Screen 1">
                                <img src="img/step1.webp" class="slide-image opacity-0" alt="App Screen 2">
                                <img src="img/step2.webp" class="slide-image opacity-0" alt="App Screen 3">
                                <img src="img/step3.webp" class="slide-image opacity-0" alt="App Screen 4">
                            </div>
                            
                            <div class="absolute bottom-10 left-4 right-4 z-30 bg-white p-4 rounded-xl shadow-lg animate-bounce">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-xs font-bold text-gray-500 uppercase">New Job Alert</span>
                                    <span class="text-xs font-bold text-green-600">$22/hr</span>
                                </div>
                                <p class="font-black text-black">Forklift Operator - Night</p>
                                <p class="text-xs text-gray-500">Logistics Corp • Starts ASAP</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- B2B CORPORATE FORMS SECTION                -->
    <!-- ========================================== -->
    <section id="corporate-forms" class="py-24 bg-gray-900 relative border-y-4 border-black scroll-mt-20">
        <!-- Patrón de fondo sutil -->
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(#f59e0b 1px, transparent 1px); background-size: 30px 30px;"></div>
        
        <div class="container mx-auto px-6 max-w-6xl relative z-20">
            
            <div class="text-center mb-12">
                <span class="text-safety-yellow font-bold uppercase tracking-[0.2em] text-xs mb-3 block">Corporate Onboarding</span>
                <h2 class="text-4xl font-black text-white uppercase mb-4">Partner <span class="text-white bg-clip-text bg-gradient-to-r from-safety-yellow to-white">Solutions</span></h2>
                <p class="text-gray-400 max-w-2xl mx-auto text-lg">Select a service below to securely submit your intake details to our specialized logistics network.</p>
            </div>

            <!-- TABS NAVIGATION -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12 max-w-4xl mx-auto">
                <button onclick="switchTab('capacity')" id="tab-capacity" class="flex-1 py-4 px-6 bg-safety-yellow text-black font-black uppercase tracking-widest text-sm rounded shadow-[0_0_15px_rgba(245,158,11,0.3)] transition-all">
                    Capacity Request & Intake
                </button>
                <button onclick="switchTab('factoring')" id="tab-factoring" class="flex-1 py-4 px-6 bg-gray-800 border border-gray-700 text-gray-400 font-bold uppercase tracking-widest text-sm rounded hover:bg-gray-700 transition-all">
                    Factoring Services
                </button>
            </div>

            <!-- ========================================== -->
            <!-- FORMULARIO 1: CAPACITY REQUEST & SHIPPER   -->
            <!-- ========================================== -->
            <div id="form-capacity" class="block bg-gray-800/90 backdrop-blur-md p-8 md:p-12 rounded-lg border-t-8 border-safety-yellow border border-gray-700 shadow-2xl max-w-5xl mx-auto">
                <div class="mb-10 pb-6 border-b border-gray-700 flex justify-between items-end">
                    <div>
                        <h3 class="text-3xl font-black text-white mb-2 uppercase">Shipper Intake Form</h3>
                        <p class="text-gray-400 font-mono text-sm">In Partnership with Aetna Freight Lines INC</p>
                    </div>
                    <div class="hidden md:block text-right">
                        <p class="text-safety-yellow text-xs font-bold uppercase tracking-widest">Secure Portal</p>
                    </div>
                </div>

                x
            </div>

            <!-- ========================================== -->
            <!-- FORMULARIO 2: FACTORING SERVICES           -->
            <!-- ========================================== -->
            <div id="form-factoring" class="hidden bg-gray-800/90 backdrop-blur-md p-8 md:p-12 rounded-lg border-t-8 border-safety-yellow border border-gray-700 shadow-2xl max-w-5xl mx-auto">
                <div class="mb-10 pb-6 border-b border-gray-700 flex justify-between items-end">
                    <div>
                        <h3 class="text-3xl font-black text-white mb-2 uppercase">Factoring Service Request</h3>
                        <p class="text-gray-400 font-mono text-sm">In Partnership with RTS Financial</p>
                    </div>
                    <div class="hidden md:block text-right">
                        <p class="text-safety-yellow text-xs font-bold uppercase tracking-widest">Rapid Funding</p>
                    </div>
                </div>

                <form action="email" method="POST" enctype="multipart/form-data" class="space-y-12">
                    <!-- 01. Carrier Details -->
                    <div>
                        <h4 class="text-white font-bold uppercase tracking-widest text-sm mb-4 border-b border-gray-700 pb-2 flex items-center gap-2">
                            <span class="text-safety-yellow">></span> 01. Company Information
                        </h4>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Legal Company Name *</label>
                                <input type="text" name="company_name" required class="w-full bg-gray-900 border border-gray-600 rounded p-3 text-sm text-white focus:border-safety-yellow outline-none">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-1">DBA (If Applicable)</label>
                                <input type="text" name="dba" class="w-full bg-gray-900 border border-gray-600 rounded p-3 text-sm text-white focus:border-safety-yellow outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-1">MC Number *</label>
                                <input type="text" name="mc_number" required class="w-full bg-gray-900 border border-gray-600 rounded p-3 text-sm text-white focus:border-safety-yellow outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-1">USDOT Number</label>
                                <input type="text" name="usdot_number" class="w-full bg-gray-900 border border-gray-600 rounded p-3 text-sm text-white focus:border-safety-yellow outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-1">EIN *</label>
                                <input type="text" name="ein" required class="w-full bg-gray-900 border border-gray-600 rounded p-3 text-sm text-white focus:border-safety-yellow outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Years in Operation</label>
                                <select name="years_in_operation" class="w-full bg-gray-900 border border-gray-600 rounded p-3 text-sm text-white focus:border-safety-yellow outline-none">
                                    <option value="< 1 Year">< 1 Year</option><option value="1-3 Years">1-3 Years</option><option value="3-5 Years">3-5 Years</option><option value="5+ Years">5+ Years</option>
                                </select>
                            </div>
                            <div class="md:col-span-4">
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Business Address *</label>
                                <input type="text" name="business_address" required class="w-full bg-gray-900 border border-gray-600 rounded p-3 text-sm text-white focus:border-safety-yellow outline-none mb-2">
                                <input type="text" name="city_state_zip" required placeholder="City / State / ZIP" class="w-full bg-gray-900 border border-gray-600 rounded p-3 text-sm text-white focus:border-safety-yellow outline-none">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Primary Contact Name *</label>
                                <input type="text" name="contact_name" required class="w-full bg-gray-900 border border-gray-600 rounded p-3 text-sm text-white focus:border-safety-yellow outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Title</label>
                                <input type="text" name="contact_title" class="w-full bg-gray-900 border border-gray-600 rounded p-3 text-sm text-white focus:border-safety-yellow outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Phone *</label>
                                <input type="tel" name="phone" required class="w-full bg-gray-900 border border-gray-600 rounded p-3 text-sm text-white focus:border-safety-yellow outline-none">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Email *</label>
                                <input type="email" name="email" required class="w-full bg-gray-900 border border-gray-600 rounded p-3 text-sm text-white focus:border-safety-yellow outline-none">
                            </div>
                        </div>
                    </div>

                    <!-- 02. Operations Profile -->
                    <div>
                        <h4 class="text-white font-bold uppercase tracking-widest text-sm mb-4 border-b border-gray-700 pb-2 flex items-center gap-2">
                            <span class="text-safety-yellow">></span> 02. Operations Profile
                        </h4>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-3">Type of Operation</label>
                                <div class="space-y-2 text-sm text-gray-300">
                                    <label class="flex items-center gap-2"><input type="radio" name="operation_type" value="Owner Operator (1 Truck)" class="accent-safety-yellow"> Owner Operator (1 Truck)</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="operation_type" value="Small Fleet (2-5 Trucks)" class="accent-safety-yellow"> Small Fleet (2-5 Trucks)</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="operation_type" value="Medium Fleet (6-20 Trucks)" class="accent-safety-yellow"> Medium Fleet (6-20 Trucks)</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="operation_type" value="Large Fleet (20+ Trucks)" class="accent-safety-yellow"> Large Fleet (20+ Trucks)</label>
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-3">Equipment Type</label>
                                <div class="grid grid-cols-2 gap-2 text-sm text-gray-300">
                                    <label class="flex items-center gap-2"><input type="checkbox" name="equipment_type[]" value="Dry Van" class="accent-safety-yellow"> Dry Van</label>
                                    <label class="flex items-center gap-2"><input type="checkbox" name="equipment_type[]" value="Flatbed" class="accent-safety-yellow"> Flatbed</label>
                                    <label class="flex items-center gap-2"><input type="checkbox" name="equipment_type[]" value="Reefer" class="accent-safety-yellow"> Reefer</label>
                                    <label class="flex items-center gap-2"><input type="checkbox" name="equipment_type[]" value="Step Deck" class="accent-safety-yellow"> Step Deck</label>
                                    <label class="flex items-center gap-2"><input type="checkbox" name="equipment_type[]" value="Power Only" class="accent-safety-yellow"> Power Only</label>
                                    <label class="flex items-center gap-2"><input type="checkbox" name="equipment_type[]" value="Hotshot" class="accent-safety-yellow"> Hotshot</label>
                                </div>
                                <input type="text" name="equipment_type_other" placeholder="Other:" class="w-full bg-gray-900 border border-gray-600 rounded p-2 mt-2 text-sm text-white focus:border-safety-yellow outline-none">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-3">Average Weekly Gross Revenue</label>
                                <div class="space-y-2 text-sm text-gray-300">
                                    <label class="flex items-center gap-2"><input type="radio" name="avg_gross" value="Under $10,000" class="accent-safety-yellow"> Under $10,000</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="avg_gross" value="$10,000-$25,000" class="accent-safety-yellow"> $10,000-$25,000</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="avg_gross" value="$25,000-$50,000" class="accent-safety-yellow"> $25,000-$50,000</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="avg_gross" value="$50,000+" class="accent-safety-yellow"> $50,000+</label>
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Average Monthly Invoice Volume</label>
                                <div class="flex items-center">
                                    <span class="bg-gray-900 border border-r-0 border-gray-600 text-gray-400 px-3 py-3 rounded-l">$</span>
                                    <input type="number" name="avg_monthly_invoice" class="w-full bg-gray-900 border border-gray-600 rounded-r p-3 text-sm text-white focus:border-safety-yellow outline-none">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 03. Current Factoring Status -->
                    <div>
                        <h4 class="text-white font-bold uppercase tracking-widest text-sm mb-4 border-b border-gray-700 pb-2 flex items-center gap-2">
                            <span class="text-safety-yellow">></span> 03. Current Factoring Status
                        </h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-3">Are you currently factoring?</label>
                                <div class="flex gap-4 mb-4">
                                    <label class="flex items-center gap-2 text-sm text-white"><input type="radio" name="currently_factoring" value="Yes" class="accent-safety-yellow"> Yes</label>
                                    <label class="flex items-center gap-2 text-sm text-white"><input type="radio" name="currently_factoring" value="No" class="accent-safety-yellow" checked> No</label>
                                </div>
                                
                                <div class="space-y-3 mt-4">
                                    <p class="text-xs text-gray-500 mb-1">If yes:</p>
                                    <input type="text" name="current_factoring_company" placeholder="Current Factoring Company" class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-sm text-white focus:border-safety-yellow outline-none">
                                    <input type="text" name="current_rate" placeholder="Current Factoring Rate (%)" class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-sm text-white focus:border-safety-yellow outline-none">
                                    <input type="date" name="contract_expiration" class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-sm text-white focus:border-safety-yellow outline-none text-gray-400">
                                    <input type="text" name="early_termination_fee" placeholder="Early Termination Fee (if any)" class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-sm text-white focus:border-safety-yellow outline-none">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-3">Broker & Customer Base</label>
                                <p class="text-xs text-gray-500 mb-2">List your top 3 brokers/shippers:</p>
                                <div class="space-y-2 mb-4">
                                    <input type="text" name="top_broker_1" placeholder="1." class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-sm text-white focus:border-safety-yellow outline-none">
                                    <input type="text" name="top_broker_2" placeholder="2." class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-sm text-white focus:border-safety-yellow outline-none">
                                    <input type="text" name="top_broker_3" placeholder="3." class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-sm text-white focus:border-safety-yellow outline-none">
                                </div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2 mt-4">Average payment terms from brokers:</label>
                                <div class="flex flex-wrap gap-3 text-sm text-gray-300">
                                    <label class="flex items-center gap-2"><input type="radio" name="avg_broker_terms" value="Quick Pay" class="accent-safety-yellow"> Quick Pay</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="avg_broker_terms" value="15 Days" class="accent-safety-yellow"> 15 Days</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="avg_broker_terms" value="30 Days" class="accent-safety-yellow"> 30 Days</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="avg_broker_terms" value="45+ Days" class="accent-safety-yellow"> 45+ Days</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 04. Funding Requirements & Add-ons -->
                    <div>
                        <h4 class="text-white font-bold uppercase tracking-widest text-sm mb-4 border-b border-gray-700 pb-2 flex items-center gap-2">
                            <span class="text-safety-yellow">></span> 04. Funding Requirements & Services
                        </h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6">
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-3">How fast do you need funding?</label>
                                <div class="flex gap-4 text-sm text-gray-300 mb-4">
                                    <label class="flex items-center gap-2"><input type="radio" name="funding_speed" value="Same Day" class="accent-safety-yellow"> Same Day</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="funding_speed" value="24 Hours" class="accent-safety-yellow"> 24 Hours</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="funding_speed" value="48 Hours" class="accent-safety-yellow"> 48 Hours</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="funding_speed" value="Standard" class="accent-safety-yellow"> Standard</label>
                                </div>
                                
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-1 mt-4">Estimated Monthly Funding Needed</label>
                                <div class="flex items-center mb-4">
                                    <span class="bg-gray-900 border border-r-0 border-gray-600 text-gray-400 px-3 py-2 rounded-l">$</span>
                                    <input type="number" name="est_monthly_funding" class="w-full bg-gray-900 border border-gray-600 rounded-r p-2 text-sm text-white focus:border-safety-yellow outline-none">
                                </div>
                                
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2 mt-4">Bank Details (Optional at this stage)</label>
                                <div class="space-y-2">
                                    <input type="text" name="bank_name" placeholder="Bank Name" class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-sm text-white focus:border-safety-yellow outline-none">
                                    <input type="text" name="routing_number" placeholder="Routing Number" class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-sm text-white focus:border-safety-yellow outline-none">
                                    <input type="text" name="account_number" placeholder="Account Number" class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-sm text-white focus:border-safety-yellow outline-none">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-3">Additional Services Interest</label>
                                <p class="text-xs text-gray-500 mb-2">RTS Financial may offer:</p>
                                <div class="grid grid-cols-2 gap-2 text-sm text-gray-300 mb-4">
                                    <label class="flex items-center gap-2"><input type="checkbox" name="additional_services[]" value="Fuel Cards" class="accent-safety-yellow"> Fuel Cards</label>
                                    <label class="flex items-center gap-2"><input type="checkbox" name="additional_services[]" value="Fuel Discounts" class="accent-safety-yellow"> Fuel Discounts</label>
                                    <label class="flex items-center gap-2"><input type="checkbox" name="additional_services[]" value="Insurance Solutions" class="accent-safety-yellow"> Insurance Solutions</label>
                                    <label class="flex items-center gap-2"><input type="checkbox" name="additional_services[]" value="Equipment Financing" class="accent-safety-yellow"> Equipment Financing</label>
                                    <label class="flex items-center gap-2"><input type="checkbox" name="additional_services[]" value="Business Credit Building" class="accent-safety-yellow"> Business Credit Building</label>
                                    <label class="flex items-center gap-2"><input type="checkbox" name="additional_services[]" value="Back-Office Support" class="accent-safety-yellow"> Back-Office Support</label>
                                </div>
                                
                                <label class="block text-xs font-bold text-gray-400 uppercase mb-2 mt-4">Are you interested in bundled services?</label>
                                <div class="flex gap-4 text-sm text-gray-300">
                                    <label class="flex items-center gap-2"><input type="radio" name="bundled_services" value="Yes" class="accent-safety-yellow"> Yes</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="bundled_services" value="No" class="accent-safety-yellow"> No</label>
                                    <label class="flex items-center gap-2"><input type="radio" name="bundled_services" value="Maybe" class="accent-safety-yellow"> Maybe</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 05. Required Documents -->
                    <div>
                        <h4 class="text-white font-bold uppercase tracking-widest text-sm mb-4 border-b border-gray-700 pb-2 flex items-center gap-2">
                            <span class="text-safety-yellow">></span> 05. Documents & Authorization
                        </h4>
                        
                        <div class="mb-6">
                            <label class="block text-xs font-bold text-gray-400 uppercase mb-2">Required Documents</label>
                            <p class="text-xs text-gray-500 mb-3">Please select the documents you are uploading (upload field below):</p>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-2 text-sm text-gray-300 mb-4">
                                <label class="flex items-center gap-2"><input type="checkbox" name="doc_checklist[]" value="Articles of Incorporation" class="accent-safety-yellow"> Articles of Inc / LLC Docs</label>
                                <label class="flex items-center gap-2"><input type="checkbox" name="doc_checklist[]" value="EIN Letter" class="accent-safety-yellow"> EIN Confirmation Letter</label>
                                <label class="flex items-center gap-2"><input type="checkbox" name="doc_checklist[]" value="Drivers License" class="accent-safety-yellow"> Driver's License (Owner)</label>
                                <label class="flex items-center gap-2"><input type="checkbox" name="doc_checklist[]" value="Voided Check" class="accent-safety-yellow"> Voided Check</label>
                                <label class="flex items-center gap-2"><input type="checkbox" name="doc_checklist[]" value="3 Invoices" class="accent-safety-yellow"> 3 Recent Invoices</label>
                                <label class="flex items-center gap-2"><input type="checkbox" name="doc_checklist[]" value="Carrier Packet" class="accent-safety-yellow"> Current Carrier Packet</label>
                                <label class="flex items-center gap-2"><input type="checkbox" name="doc_checklist[]" value="W9" class="accent-safety-yellow"> W9</label>
                                <label class="flex items-center gap-2"><input type="checkbox" name="doc_checklist[]" value="Insurance Cert" class="accent-safety-yellow"> Insurance Certificate</label>
                            </div>
                            
                            <div class="flex items-center justify-center w-full mt-4">
                                <label class="flex flex-col items-center justify-center w-full h-24 border-2 border-gray-600 border-dashed rounded cursor-pointer bg-gray-900 hover:border-safety-yellow transition">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-6 h-6 mb-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                        <p class="text-xs text-gray-400"><span class="font-bold text-safety-yellow">Click to upload files</span> or drag and drop</p>
                                    </div>
                                    <input type="file" name="documents[]" class="hidden" multiple accept=".pdf,.png,.jpg,.jpeg" />
                                </label>
                            </div>
                        </div>

                        <div class="bg-gray-900 p-6 border border-gray-700 rounded mb-6 border-l-4 border-safety-yellow">
                            <h5 class="text-white font-bold mb-2 uppercase">Credit & Legal Disclosure</h5>
                            <p class="text-xs text-gray-400 mb-2 leading-relaxed">By submitting this form, you authorize:</p>
                            <ul class="list-disc list-inside text-xs text-gray-400 mb-4 space-y-1">
                                <li>Truckers Talent INC to submit your information to RTS Financial</li>
                                <li>RTS Financial to perform business credit verification</li>
                                <li>UCC filing if approved</li>
                                <li>Verification of broker payment history</li>
                            </ul>
                            <p class="text-xs text-gray-500 mb-4 italic">Truckers Talent INC acts as a referring agent and does not directly provide factoring services. All funding approvals are subject to RTS Financial underwriting review.</p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Authorized Representative Name *</label>
                                    <input type="text" name="auth_name" required class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-sm text-white focus:border-safety-yellow outline-none">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Date *</label>
                                    <input type="date" name="auth_date" required class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-sm text-white focus:border-safety-yellow outline-none text-gray-400">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="w-full py-5 bg-safety-yellow text-black font-black uppercase tracking-widest text-sm rounded hover:bg-white transition shadow-[0_0_20px_rgba(245,158,11,0.4)]">
                        Apply For Factoring
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section id="faq" class="py-24 bg-white relative border-t border-gray-200">
        <div class="container mx-auto px-6 max-w-3xl">
            <div class="text-center mb-16">
                <span class="text-safety-yellow font-bold uppercase tracking-[0.2em] text-xs mb-2 block">Common Questions</span>
                <h2 class="text-3xl font-black text-gray-900 uppercase">Warehouse Job Board FAQ</h2>
            </div>

            <div class="space-y-4">
                <details class="group bg-gray-50 border border-gray-200 rounded-lg overflow-hidden transition-all">
                    <summary class="flex justify-between items-center cursor-pointer p-6 font-bold text-gray-900 select-none">
                        Is Truckers Talent a temp agency or staffing firm?
                        <span class="text-safety-yellow transition-transform transform group-open:rotate-180">▼</span>
                    </summary>
                    <div class="px-6 pb-6 text-gray-600 text-sm leading-relaxed border-t border-gray-200 pt-4">
                        No. We are a specialized job board platform. Facilities post their open roles, and candidates apply directly to them. We provide the network, but you handle your own interviews and hiring.
                    </div>
                </details>

                <details class="group bg-gray-50 border border-gray-200 rounded-lg overflow-hidden transition-all">
                    <summary class="flex justify-between items-center cursor-pointer p-6 font-bold text-gray-900 select-none">
                        Do you take a percentage of the worker's hourly wage?
                        <span class="text-safety-yellow transition-transform transform group-open:rotate-180">▼</span>
                    </summary>
                    <div class="px-6 pb-6 text-gray-600 text-sm leading-relaxed border-t border-gray-200 pt-4">
                        Absolutely not. Since we are a job board and not an agency, workers keep 100% of the wage offered by the employer. Employers pay a transparent fee to post jobs on our platform.
                    </div>
                </details>

                <details class="group bg-gray-50 border border-gray-200 rounded-lg overflow-hidden transition-all">
                    <summary class="flex justify-between items-center cursor-pointer p-6 font-bold text-gray-900 select-none">
                        Can I post jobs for retail or restaurant staff here?
                        <span class="text-safety-yellow transition-transform transform group-open:rotate-180">▼</span>
                    </summary>
                    <div class="px-6 pb-6 text-gray-600 text-sm leading-relaxed border-t border-gray-200 pt-4">
                        No. Our platform is strictly for the logistics, transportation, and warehousing industry. General hospitality or retail job postings will be removed to maintain the quality of our niche talent pool.
                    </div>
                </details>

                <details class="group bg-gray-50 border border-gray-200 rounded-lg overflow-hidden transition-all">
                    <summary class="flex justify-between items-center cursor-pointer p-6 font-bold text-gray-900 select-none">
                        How are forklift certifications verified?
                        <span class="text-safety-yellow transition-transform transform group-open:rotate-180">▼</span>
                    </summary>
                    <div class="px-6 pb-6 text-gray-600 text-sm leading-relaxed border-t border-gray-200 pt-4">
                        Candidates self-report their skills and upload their certifications (like OSHA or Forklift licenses) to their profile. Employers can review these documents before reaching out to schedule an interview.
                    </div>
                </details>
            </div>
        </div>
    </section>

    <footer class="bg-black text-gray-600 py-12 text-center text-xs font-light tracking-wide border-t border-gray-900">
        <!-- Internal Links Agregados -->
        <div class="flex flex-col md:flex-row justify-center gap-6 mb-8 uppercase tracking-widest text-[10px] font-bold text-gray-500">
            <a href="https://trucking.truckerstalent.com/" class="hover:text-white transition">Explore trucking jobs</a>
            <a href="https://ocean.truckerstalent.com/" class="hover:text-white transition">Discover ocean freight careers</a>
            <a href="https://air.truckerstalent.com/" class="hover:text-white transition">Find air cargo logistics jobs</a>
        </div>

        <div class="flex justify-center items-center gap-2 mb-4 opacity-50">
            <img src="img/truckerlogo.svg" class="h-24">
            <span class="font-bold uppercase tracking-widest">Truckers Talent</span>
        </div>
        <p>&copy; 2026 Warehousing & Industrial Division.</p>
    </footer>

    <script>
        function switchTab(tabId) {
            document.getElementById('form-capacity').classList.replace('block', 'hidden');
            document.getElementById('form-factoring').classList.replace('block', 'hidden');

            const btnClassInactive = 'flex-1 py-4 px-6 bg-gray-800 border border-gray-700 text-gray-400 font-bold uppercase tracking-widest text-sm rounded hover:bg-gray-700 transition-all';
            document.getElementById('tab-capacity').className = btnClassInactive;
            document.getElementById('tab-factoring').className = btnClassInactive;

            document.getElementById('form-' + tabId).classList.replace('hidden', 'block');
            document.getElementById('tab-' + tabId).className = 'flex-1 py-4 px-6 bg-safety-yellow text-black font-black uppercase tracking-widest text-sm rounded shadow-[0_0_15px_rgba(245,158,11,0.3)] transition-all';
        }

        function startSlider(containerId) {
            const container = document.getElementById(containerId);
            if (!container) return;
            const images = container.querySelectorAll('.slide-image');
            if (images.length === 0) return;
            
            let currentIndex = 0;

            setInterval(() => {
                images[currentIndex].classList.remove('opacity-100');
                images[currentIndex].classList.add('opacity-0');
                currentIndex = (currentIndex + 1) % images.length;
                images[currentIndex].classList.remove('opacity-0');
                images[currentIndex].classList.add('opacity-100');
            }, 3500); 
        }

        document.addEventListener('DOMContentLoaded', () => {
            startSlider('browser-slider');
            startSlider('mobile-slider');
        });
    </script>

</body>
</html>
