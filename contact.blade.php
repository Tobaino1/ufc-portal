@extends('layouts.landing')

          @section('content')
  <div class="max-w-6xl mx-auto sm:px-8 lg:px-12">
               
                <div class="mt-10 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-6">
                        <!-- <div class="p-2"> -->
                            <div align="center">
                                <img src="{{ 'storage/UFC LOGO.jpg'}}" height="130" width="130" />  
                                <h4 style="color: blue"> UNIFICATION FOOTBALL CLUB </h4>   
                            <!-- </div> -->
                            </div>
                </div> </div>
                                                                                                                                    
            <BR>
                <div class="mt-10 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6"> 
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-4 font-semibold"><a href="#">We cherish feedback & we are social, reach out to us via;</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                         
                            
                            <strong>Email: </strong> unificationfc@gmail.com<br><br>
                            <strong>Youtube</strong> unification football club <br><br>
                            <strong>Facebook: </strong> unificationfc <br><br>
                            <strong>X: </strong> unificationfc <br><br>
                            <strong>Instagram: </strong> unificationfc <br><br>
                            <strong>Tiktok: </strong> unificationfc <br>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                           
                          
                                
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.1864361496973!2d3.3276250750879957!3d6.623749321990056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b916579667fd1%3A0x90c1e637a6c1755a!2sAgege%20Stadium%20Ijaye%20Lagos!5e0!3m2!1sen!2sng!4v1681539289533!5m2!1sen!2sng" 
                                width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 20 20" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="#" class="ml-1 underline">
                                Shop for Sport kits
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 22 22" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="{{ url('contact') }}" class="ml-1 underline">
                                Contact us / Send us feedback
                            </a>

                             <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6" viewBox="0 0 26 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M5.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="#" class="ml-1 underline">
                                Donation 
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-black-500 sm:text-right sm:ml-0">
                        WE ARE #Theindomitable #teamunification
                    </div>
                </div>
            </div>
        </div>
        <br>
        @include ('layouts.footer') 
        @endsection