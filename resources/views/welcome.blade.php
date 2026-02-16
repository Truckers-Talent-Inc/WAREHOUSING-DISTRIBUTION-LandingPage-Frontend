<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truckers Talent | Warehousing Division</title>
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
    </style>
</head>
<body class="bg-gray-50 text-slate-800 antialiased">

    <nav class="fixed top-0 w-full z-50 transition-all duration-300 bg-gradient-to-b from-black/90 to-transparent">
        <div class="container mx-auto px-8 h-24 flex justify-between items-center">
            <a href="/" class="flex items-center gap-3 group">
                <img src="{{ asset('img/truckerlogo.png') }}" alt="Logo" class="h-8 w-auto object-contain brightness-0 invert opacity-90 group-hover:opacity-100 transition">
                <span class="text-white/90 font-light tracking-[0.2em] text-xs uppercase border-l border-white/30 pl-3 group-hover:text-white transition">
                    Warehousing
                </span>
            </a>
            <div class="hidden md:flex space-x-10 text-xs font-medium uppercase tracking-widest text-white/80">
                <a href="#bottlenecks" class="hover:text-white hover:border-b border-white transition pb-1">Industry Risks</a>
                <a href="#hiring" class="hover:text-white hover:border-b border-white transition pb-1">For Facilities</a>
                <a href="#shifts" class="hover:text-white hover:border-b border-white transition pb-1">For Staff</a>
            </div>
            <div>
                <a href="https://www.truckerstalent.com/" class="bg-safety-yellow text-black px-6 py-2 rounded-sm text-xs font-bold uppercase tracking-wide hover:bg-white transition shadow-lg">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <header class="relative h-screen w-full flex items-center justify-center overflow-hidden bg-gray-900">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-50" alt="Warehouse Racks">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/50 to-transparent"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mt-10">
            <div class="text-white">
                <div class="flex items-center gap-2 mb-6 animate-slide-up">
                    <div class="h-1 w-12 bg-safety-yellow"></div>
                    <span class="text-safety-yellow font-bold tracking-[0.2em] uppercase text-xs">
                        Industrial Staffing
                    </span>
                </div>
                <h1 class="text-5xl md:text-7xl font-black leading-none uppercase mb-8 animate-slide-up" style="animation-delay: 0.1s;">
                    Staff Your <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-safety-yellow to-yellow-200">Entire Shift.</span>
                </h1>
                <p class="text-lg text-gray-300 font-light mb-10 max-w-lg leading-relaxed animate-slide-up" style="animation-delay: 0.2s;">
                    The on-demand platform for <strong>Warehouses, Distribution Centers, and E-commerce Fulfillment</strong>. Fill 50+ spots for Peak Season in minutes.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 animate-slide-up" style="animation-delay: 0.3s;">
                    <a href="https://www.truckerstalent.com/" class="px-8 py-4 bg-safety-yellow text-black font-black uppercase tracking-widest text-sm hover:bg-white transition shadow-[0_0_20px_rgba(245,158,11,0.4)] text-center">
                        Hire Warehouse Staff
                    </a>
                    <a href="https://www.truckerstalent.com/" class="px-8 py-4 border border-white/30 text-white font-bold uppercase tracking-widest text-sm hover:bg-white hover:text-black transition text-center">
                        Find Shift Work
                    </a>
                </div>
            </div>

            <div class="hidden lg:block relative animate-slide-up" style="animation-delay: 0.5s;">
                <div class="absolute -top-10 -right-10 w-64 h-64 bg-safety-yellow/10 rounded-full blur-3xl"></div>
                <div class="bg-white p-6 rounded-lg shadow-2xl max-w-md ml-auto relative border-l-8 border-safety-yellow">
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <h3 class="text-2xl font-black text-gray-900">Night Shift Crew</h3>
                            <p class="text-gray-500 text-sm">Amazon FBA Center • Dallas, TX</p>
                        </div>
                        <span class="bg-green-100 text-green-700 font-bold px-2 py-1 rounded text-xs uppercase">Filling Fast</span>
                    </div>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded border border-gray-100">
                            <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center text-xs font-bold">JD</div>
                            <div><p class="text-sm font-bold">Forklift Certified</p><p class="text-xs text-green-600">Verified ✓</p></div>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded border border-gray-100">
                            <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center text-xs font-bold">AS</div>
                            <div><p class="text-sm font-bold">Picker / Packer</p><p class="text-xs text-green-600">Verified ✓</p></div>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-safety-yellow/10 rounded border border-safety-yellow/30">
                            <div class="w-8 h-8 rounded-full bg-safety-yellow text-black flex items-center justify-center text-xs font-bold">+48</div>
                            <div><p class="text-sm font-bold text-gray-800">Candidates Ready</p><p class="text-xs text-safety-yellow font-bold">Available Tonight</p></div>
                        </div>
                    </div>
                    <button class="w-full py-3 bg-black text-white font-bold uppercase tracking-widest text-xs rounded hover:bg-gray-800">
                        Approve Batch Hire
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="bg-safety-yellow py-8">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6 text-black">
            <div class="flex items-center gap-4">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div>
                    <p class="text-3xl font-black">4h</p>
                    <p class="text-xs font-bold uppercase tracking-wide">Avg. Fill Time</p>
                </div>
            </div>
            <div class="h-12 w-px bg-black/10 hidden md:block"></div>
            <div class="flex items-center gap-4">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div>
                    <p class="text-3xl font-black">100%</p>
                    <p class="text-xs font-bold uppercase tracking-wide">Background Checked</p>
                </div>
            </div>
            <div class="h-12 w-px bg-black/10 hidden md:block"></div>
            <div class="flex items-center gap-4">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                <div>
                    <p class="text-3xl font-black">Bulk</p>
                    <p class="text-xs font-bold uppercase tracking-wide">Hiring Tools</p>
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
                        Without a verified talent pool, your daily operations report looks like a disaster movie. 
                    </p>
                    <div class="bg-gray-100 p-6 rounded border-l-4 border-black">
                        <p class="font-bold text-gray-900 mb-1">Cost of Downtime:</p>
                        <p class="text-3xl font-black text-red-600">$5,000 <span class="text-sm text-gray-500 font-medium">/ hour</span></p>
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">The "Ghost" Crew</h3>
                            <p class="text-gray-600 text-sm">
                                You requested 20 temp workers. Only 12 showed up. 
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
                                A temp worker claims to know the RF Scanner but keeps flagging errors. Supervisor has to stop to retrain them.
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
                                Volume spikes by 40%. You need 10 more hands immediately, but your agency takes 48 hours to respond.
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
                <span class="text-gray-400 font-bold uppercase tracking-[0.2em] text-xs mb-2 block">Operations Management</span>
                <h2 class="text-4xl text-gray-900 font-black uppercase">Peak Season? <span class="text-safety-yellow">No Sweat.</span></h2>
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
                            <img src="{{ asset('img/emp-step.png') }}" class="slide-image opacity-100" alt="Dashboard 1">
                            <img src="{{ asset('img/emp-step1.png') }}" class="slide-image opacity-0" alt="Dashboard 2">
                            <img src="{{ asset('img/emp-step2.png') }}" class="slide-image opacity-0" alt="Dashboard 3">
                        </div>
                        
                        <div class="absolute bottom-6 left-6 z-30 bg-gray-900 text-white p-4 rounded shadow-lg border-l-4 border-safety-yellow">
                            <p class="text-xs text-gray-400 uppercase font-bold">Skill Match</p>
                            <p class="font-bold">OSHA 10 Certified</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-black text-gray-900 mb-6">Built for High Volume.</h3>
                    <p class="text-gray-600 mb-6 text-lg">
                        When a container arrives, you don't have time to interview 20 people. You need a crew on the dock in 2 hours.
                    </p>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-gray-100 rounded flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Certifications on File</h4>
                                <p class="text-sm text-gray-500">We verify Forklift, Reach Truck, and Electric Pallet Jack licenses before they apply.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-gray-100 rounded flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Shift Reliability Score</h4>
                                <p class="text-sm text-gray-500">See a candidate's "Show-up Rate". Our algorithm bans no-shows instantly.</p>
                            </div>
                        </div>
                    </div>
                    <a href="https://www.truckerstalent.com/" class="mt-8 inline-block text-safety-yellow font-black uppercase tracking-widest border-b-2 border-safety-yellow pb-1 hover:text-yellow-600 transition">
                        Start Bulk Hiring &rarr;
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
                    <h2 class="text-4xl font-black uppercase mb-6">Pick Your Job.<br>Get Paid Fast.</h2>
                    <p class="text-gray-300 mb-8 text-lg">
                        Stop waiting for temp agencies to call. Open the plataform, 
                        Find your ideal job, apply and start working!
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-safety-yellow rounded-full"></div>
                            <span>Choose Day, Night, or Weekend shifts.</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-safety-yellow rounded-full"></div>
                            <span>High-vis & Boots required? We tell you upfront.</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-safety-yellow rounded-full"></div>
                            <span>Weekly payouts direct to your bank.</span>
                        </li>
                    </ul>
                    <a href="https://www.truckerstalent.com/" class="px-8 py-4 bg-white text-black font-black uppercase tracking-widest text-sm hover:bg-gray-200 transition">
                        Go to Plataform
                    </a>
                </div>

                <div class="md:w-1/2 relative flex justify-center">
                    <div class="relative bg-gray-800 p-3 rounded-[2.5rem] border-4 border-gray-700 shadow-2xl">
                        <div class="bg-gray-900 rounded-[2rem] overflow-hidden relative w-[300px] aspect-[375/812]">
                            
                            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-32 h-6 bg-black rounded-b-xl z-20"></div>
                            
                            <div class="relative w-full h-full" id="mobile-slider">
                                <img src="{{ asset('img/job-step.png') }}" class="slide-image opacity-100" alt="App Screen 1">
                                <img src="{{ asset('img/job-step1.png') }}" class="slide-image opacity-0" alt="App Screen 2">
                                <img src="{{ asset('img/job-step2.png') }}" class="slide-image opacity-0" alt="App Screen 3">
                            </div>
                            
                            <div class="absolute bottom-10 left-4 right-4 z-30 bg-white p-4 rounded-xl shadow-lg animate-bounce">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-xs font-bold text-gray-500 uppercase">New Shift Alert</span>
                                    <span class="text-xs font-bold text-green-600">$22/hr</span>
                                </div>
                                <p class="font-black text-black">Forklift Operator - Night</p>
                                <p class="text-xs text-gray-500">2 Miles away • Starts 10 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-black text-gray-600 py-12 text-center text-xs font-light tracking-wide border-t border-gray-900">
        <div class="flex justify-center items-center gap-2 mb-4 opacity-50">
            <img src="{{ asset('img/truckerlogo.png') }}" class="h-4 invert">
            <span class="font-bold uppercase tracking-widest">Truckers Talent</span>
        </div>
        <p>&copy; 2026 Warehousing & Industrial Division.</p>
    </footer>

    <script>
        function startSlider(containerId) {
            const container = document.getElementById(containerId);
            const images = container.querySelectorAll('.slide-image');
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