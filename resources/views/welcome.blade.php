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
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Welcome</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            You are welcome to the official portal of Unification Football Club, Football club based in Lagos with the 
                            core objectives of competing in the top tier leagues, accredited tournaments & 
                            cup competitions within and outside the shores of the country, nurturing prospects and producing top notch players that
                            can compete within and outside the shores of Nigeria, exercising corporate social responsibility for purposeful impact
                            in our contemporary society. 
                            
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ ('team') }}" class="underline text-gray-900 dark:text-white">The Team</a></div>
                            </div>
                          
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            The Team view section gives insight about the players profile, management personnel and the fans corner.
                             Click on the <a href="{{ ('team') }}" class="underline text-gray-900 dark:text-white">The Team</a> to for more details</a>
                            <strong>Founded:</strong> Nov, 2019 <br>
                            <strong>Ground: </strong>Yidi Field, Agege - Lagos, Nigeria <br>
                            <strong>Chairman: </strong> Oyekan Oluwatobi <br>
                            <strong>Team Manager: </strong>Animashaun Damilola<br>
                            <!-- <strong>Technical Advisor:</strong> - <br> -->
                            <strong>Coach: </strong> Haliru Idris <br>
                            <strong>Asst Coach: </strong> Adeyemi Segun <br>
                            <strong>League / Affilation: </strong> Nigeria Women Football League (NWFL-Nationwide), 
                            Lagos State Football Association (Ekofootball), Ikeja Divisional football Association (IKEJDFA)  



                            
</div></div>
                          
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">

                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white"> News Room</a></div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Unification FC News room is an information driven portal and newsletter aggregating all of the latest and most important news related to the club's activities.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Events & Gallery</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Club's media library that shares some of the past events, matches, action moments, interviews, trials and scouting session, camping activities amongst others 
                                </div>
                            </div>
                        </div>
                        
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

                            <a href="#" class="ml-1 underline">
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
                        WE ARE #TheIndomitables #teamunification
                    </div>
                </div>
            </div>
        </div>
        <br>
        @include ('layouts.footer') 
        @endsection