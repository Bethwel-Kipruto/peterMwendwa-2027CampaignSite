<x-layout>
    
    <section class="relative bg-[#1b2b42] text-white overflow-hidden w-full m-0 p-0"> 
    
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-center min-h-[90vh] md:min-h-screen">
            
            <div class="w-full md:w-1/2 pt-10 pb-6 md:py-32 z-10 flex flex-col justify-center">
                
                <h2 class="text-2xl md:text-4xl font-light mb-1 text-gray-300 uppercase tracking-widest">Matendo Bila Cheo.</h2>
                <h1 class="text-5xl md:text-6xl font-extrabold mb-8 tracking-tight">Real Leadership.</h1>
                
                <div class="mb-10">
                    <span class="text-4xl md:text-6xl tracking-widest font-light uppercase">PETER MWENDWA</span><br>
                    <span class="text-sm tracking-[0.3em] text-blue-300/60 font-semibold uppercase">FOR MCA MUMONI WARD</span>
                </div>
                
                <div class="flex flex-wrap gap-4 relative z-20">
                    <a href="#scorecard" class="border border-white text-white hover:bg-white hover:text-[#1b2b42] px-8 py-3 text-sm font-bold tracking-wider uppercase transition-all duration-300">
                        See The Work
                    </a>
                    <a href="#donate" class="bg-[#d92c2c] hover:bg-red-700 text-white px-8 py-3 text-sm font-bold tracking-wider uppercase shadow-lg transition-all duration-300">
                        Join Us / Donate
                    </a>
                </div>
            </div>
    
            <div class="w-full md:w-1/2 flex justify-center md:justify-end relative items-end self-stretch h-[45vh] md:h-auto mt-0">
                <img src="{{ asset('images/peter-hero.avif') }}" 
                     class="object-contain object-bottom h-full w-auto md:max-h-[100%] md:absolute md:bottom-0 md:right-0 z-0 drop-shadow-2xl brightness-110" 
                     alt="Peter Mwendwa">
            </div>
            
        </div>
    </section>

    <section class="py-20 bg-gray-900 text-white px-6">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <h3 class="text-blue-400 font-bold tracking-widest uppercase text-sm mb-4">The Current Reality</h3>
                    <h2 class="text-4xl font-bold mb-6">Mumoni deserves better than broken promises.</h2>
                    <p class="text-gray-400 text-lg leading-relaxed mb-6">
                        For too long, our mothers have walked kilometers for water, and our youth have struggled with poor infrastructure. These aren't just photos; they are the daily reality for the people of Mumoni.
                    </p>
                    <div class="inline-block border-l-4 border-blue-600 pl-4 py-2 italic text-gray-300">
                        "We cannot fix the future if we ignore the struggles of today."
                    </div>
                </div>
    
                <div class="md:w-1/2 grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <img src="{{ asset('images/problem-1.jpg') }}" class="rounded-lg grayscale hover:grayscale-0 transition duration-500 shadow-lg" alt="Water crisis">
                        <img src="{{ asset('images/problem-2.jpg') }}" class="rounded-lg grayscale hover:grayscale-0 transition duration-500 shadow-lg" alt="Road issues">
                    </div>
                    <div class="pt-8">
                        <img src="{{ asset('images/problem-3.jpg') }}" class="rounded-lg grayscale hover:grayscale-0 transition duration-500 shadow-lg" alt="Infrastructure neglect">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="scorecard" class="py-20 bg-white px-6 border-t border-gray-100">
        <div class="max-w-6xl mx-auto">
            
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 tracking-tight uppercase">Matendo Bila Cheo</h2>
                <div class="h-1 w-20 bg-blue-600 mx-auto mt-4 rounded"></div>
                <p class="mt-4 text-lg text-gray-600">Leadership is about action. Here is what we have already achieved together in Mumoni.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm border border-gray-200">
                    <div class="aspect-video w-full bg-gray-200">
                        <img src="/images/wheelchairs.jpg" alt="Wheelchair Donation" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-800 mb-4 border-b pb-2">Health & Support</h3>
                        <ul class="text-gray-700 space-y-3 text-sm">
                            <li class="flex items-start gap-2">
                                <span class="text-green-500 font-bold mt-0.5">✓</span> 
                                <span>Donated 50+ wheelchairs to disabled residents.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-green-500 font-bold mt-0.5">✓</span> 
                                <span>Building a maternity house at Ngungani.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-green-500 font-bold mt-0.5">✓</span> 
                                <span>Covered hospital transport via Mumoni Care Foundation.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm border border-gray-200">
                    <div class="aspect-video w-full bg-gray-200">
                        <img src="/images/drilling-rig.jpg" alt="Water Borehole" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-800 mb-4 border-b pb-2">Water & Infrastructure</h3>
                        <ul class="text-gray-700 space-y-3 text-sm">
                            <li class="flex items-start gap-2">
                                <span class="text-green-500 font-bold mt-0.5">✓</span> 
                                <span>Acquired a rig and drilled 3 clean-water boreholes.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-green-500 font-bold mt-0.5">✓</span> 
                                <span>Built a complete classroom at Ngosyingi.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-green-500 font-bold mt-0.5">✓</span> 
                                <span>Supported boda boda operators against illegal roadblocks.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm border border-gray-200">
                    <div class="aspect-video w-full bg-gray-200">
                        <img src="/images/housing.jpg" alt="Housing Support" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-800 mb-4 border-b pb-2">Housing & Security</h3>
                        <ul class="text-gray-700 space-y-3 text-sm">
                            <li class="flex items-start gap-2">
                                <span class="text-green-500 font-bold mt-0.5">✓</span> 
                                <span>Built a complete house for a disabled lady.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-green-500 font-bold mt-0.5">✓</span> 
                                <span>Successfully lobbied for Ngungani Police Station.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-green-500 font-bold mt-0.5">✓</span> 
                                <span>Lobbied for Ngungani to gain full location status.</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layout>