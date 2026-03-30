<footer class="bg-gray-900 text-white pb-18">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center gap-3 mb-4"><img src="/images/logo/rf-logo-light.svg" alt="DaycareHub" style="height:36px;width:auto"></div>
                <p class="text-gray-300 mb-4 max-w-md">
                    We help people find their path to recovery and start a new life.
                    Our mission is to connect those seeking help with the best childcare centers.
                </p>
                <div class="flex space-x-4">
                    <a href="tel:{{ \App\Models\Setting::getValue('phone', '+1 (555) 123-4567') }}"
                       class="text-green-400 hover:text-green-300 font-medium">
                        {{ \App\Models\Setting::getValue('phone', '+1 (555) 123-4567') }}
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Home</a></li>
                    <li><a href="{{ route('facilities.index') }}" class="text-gray-300 hover:text-white">Find Centers</a></li>
                    <li><a href="{{ route('states.index') }}" class="text-gray-300 hover:text-white">By State</a></li>
                    <li><a href="{{ route('treatment.index') }}" class="text-gray-300 hover:text-white">Treatment</a></li>
                    <li><a href="{{ route('insurance.index') }}" class="text-gray-300 hover:text-white">Insurance</a></li>
                    <li><a href="{{ route('compare.index') }}" class="text-gray-300 hover:text-white">Compare</a></li>
                    <li><a href="{{ route('resources.index') }}" class="text-gray-300 hover:text-white">Resources</a></li>
                    <li><a href="{{ route('blog.index') }}" class="text-gray-300 hover:text-white">Blog</a></li>
                    <li><a href="{{ route('addiction.index') }}" class="text-gray-300 hover:text-white">Substances</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white">About</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <ul class="space-y-2">
                    <li class="text-gray-300">
                        <span class="block">Phone:</span>
                        <a href="tel:{{ \App\Models\Setting::getValue('phone', '+1 (555) 123-4567') }}"
                           class="text-green-400 hover:text-green-300">
                            {{ \App\Models\Setting::getValue('phone', '+1 (555) 123-4567') }}
                        </a>
                    </li>
                    <li class="text-gray-300">
                        <span class="block">Email:</span>
                        <a href="mailto:{{ \App\Models\Setting::getValue('email', 'info@daycarehub.us') }}"
                           class="text-green-400 hover:text-green-300">
                            {{ \App\Models\Setting::getValue('email', 'info@daycarehub.us') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-400 text-sm">
                    © {{ date('Y') }} DaycareHub. All rights reserved.
                </div>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Terms and Conditions</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Crisis Resources -->
    <div class="border-t border-gray-800 mt-6 pt-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-800 rounded-lg p-4 mb-4">
                <p class="text-sm font-semibold text-yellow-400 mb-2"><svg class="w-4 h-4 inline text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"></path></svg> If you or someone you know is in crisis:</p>
                <div class="flex flex-wrap gap-4 text-sm">
                    <a href="tel:988" class="text-white hover:text-yellow-300 font-medium"><svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg> 988 Suicide &amp; Crisis Lifeline</a>
                    <span class="text-gray-500">|</span>
                    <a href="tel:18006624357" class="text-white hover:text-yellow-300 font-medium"><svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg> SAMHSA Helpline: 1-800-662-4357</a>
                    <span class="text-gray-500">|</span>
                    <span class="text-gray-400">Free, confidential, 24/7</span>
                </div>
            </div>
            <p class="text-gray-500 text-xs leading-relaxed">
                <strong>Medical Disclaimer:</strong> DaycareHub provides information about early childhood treatment facilities for informational purposes only.
                This website does not provide medical advice, diagnosis, or treatment. The information on this site should not be used as a substitute
                for professional medical advice. Always seek the guidance of a qualified health provider with any questions you may have regarding
                a medical condition or treatment. If you are experiencing a medical emergency, call 911 immediately.
                Facility data sourced from SAMHSA (Substance Abuse and Mental Health Services Administration).
            </p>
        </div>
    </div>
</footer>
