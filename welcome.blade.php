<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&amp;family=Roboto:wght@400;700&amp;display=swap"
        rel="stylesheet" />
    <style>
        body {
          font-family: "Roboto", sans-serif;
        }

        .font-montserrat {
          font-family: "Montserrat", sans-serif;
        }
    </style>
    <script>
        localStorage.theme = "light";
    </script>
    <link rel="stylesheet" href="./style.css">
</head>

<body class="">
    <!-- Header -->
    <header class=" text-white">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-6">
            <div class="flex items-center space-x-2">
                <img alt="Digifitness logo, green square with white DF letters" class="w-8 h-8 rounded-full"
                    height="32"
                    src="https://storage.googleapis.com/a1aa/image/a7088ece-c446-4481-62c2-113c500c70c8.jpg"
                    width="32" />
                <span class="font-montserrat font-bold text-green-500 text-xl tracking-wide">
                    DIGIFITNESS
                </span>
            </div>
            <div class="flex items-center space-x-3 flex-1 max-w-xl mx-4">
                <button class="bg-green-500 hover:bg-green-600 transition py-2 px-4 rounded-lg text-sm">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <input
                    class="flex-grow rounded-md py-2 px-3 focus:ring-0 focus:outline-none text-sm border border-gray-200 placeholder:text-black bg-white text-black"
                    placeholder="Search courses" type="text" />
                <button class="bg-green-500 hover:bg-green-600 transition py-2 px-4 rounded-lg text-sm">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="flex items-center space-x-3">
                <button class="bg-green-500 hover:bg-green-600 transition py-2 px-4 rounded-lg text-sm">
                    <i class="fa-solid fa-user"></i> Sign In
                </button>
                <button
                    class="bg-white hover:bg-gray-100 text-black transition py-2 px-4 rounded-lg text-sm border border-gray-300">
                    <i class="fa-solid fa-user"></i> Sign Up
                </button>
            </div>
        </div>
        <nav class=" p-3 bg-gray-100">
            <ul class="px-4 max-w-7xl mx-auto flex space-x-6 text-sm font-semibold /80 py-2">
                <li>
                    <a class="text-green-500 hover:text-green-700 transition duration-150 uppercase font-bold"
                        href="#"> Home </a>
                </li>
                <li>
                    <a class="text-green-500 hover:text-green-700 transition duration-150 uppercase font-bold"
                        href="#"> Courses </a>
                </li>
                <li>
                    <a class="text-green-500 hover:text-green-700 transition duration-150 uppercase font-bold"
                        href="#"> Workouts </a>
                </li>
                <li>
                    <a class="text-green-500 hover:text-green-700 transition duration-150 uppercase font-bold"
                        href="#"> Nutrition </a>
                </li>
                <li>
                    <a class="text-green-500 hover:text-green-700 transition duration-150 uppercase font-bold"
                        href="#"> Blog </a>
                </li>
                <li>
                    <a class="text-green-500 hover:text-green-700 transition duration-150 uppercase font-bold"
                        href="#"> FAQs </a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Hero -->
    <div class="">

        <div class="max-w-7xl mx-auto py-5">
            <!-- Grid -->
            <div class="grid lg:grid-cols-8 lg:gap-x-8 xl:gap-x-12 lg:items-center">
                <div class="lg:col-span-4">
                    <img src="https://cdn.glitch.global/9c548a79-aa82-43bf-9055-04e5b406e24b/Frame%2026.png?v=1746712827754" alt="">
                    <p class="mt-3 text-3xl text-green-600 ">Discover a Better</p>
                    <p class="mt-3 text-lg text-green-600"> Way to Get Fit with</p>
                    <div class="my-10">
                        <button type="button"
                            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Choose plan&nbsp;
                            <i class="fa-solid fa-location-arrow"></i>
                        </button>
                        <button type="button"
                            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Choose plan&nbsp;
                            <i class="fa-solid fa-location-arrow"></i>
                        </button>
                    </div>
                </div>
                <div class="lg:col-span-4 mt-10 lg:mt-0 flex justify-end">
                    <img class="w-4/5 rounded-xl"
                        src="https://images.unsplash.com/photo-1665686376173-ada7a0031a85?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=900&h=700&q=80"
                        alt="Hero Image">
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
    </div>
    <!-- End Hero -->

    <!-- Trusted Section -->
    <section class="max-w-7xl mx-auto text-center mb-10 mt-10">
        <p class="text-green-500 font-semibold text-3xl tracking-widest mb-1">
            TRUSTED BY
        </p>
        <h3 class="text-black bg-white inline-block px-4 py-1 rounded font-semibold text-lg mb-1">
            Experience Exceptional Training with Our Certified Fitness Pros
        </h3>
        <p class="text-xs text-gray-600">
            Trusted by thousands of fitness enthusiasts worldwide since 2010
        </p>
    </section>
    <!-- Trainer Images -->
    <section class="max-w-7xl mx-auto flex justify-center gap-6 mb-12">
        <img alt="Portrait of middle-aged man with beard, trainer" class="rounded-md object-cover w-60 h-60"
            src="https://storage.googleapis.com/a1aa/image/2fc116d1-7063-418f-e5f0-d4cb8dbd1e8a.jpg" />
        <img alt="Portrait of young woman in workout clothes, trainer" class="rounded-md object-cover w-60 h-60"
            src="https://storage.googleapis.com/a1aa/image/99881c28-bc64-4685-19fd-1cffcf33576e.jpg" />
        <img alt="Portrait of woman doing yoga pose, trainer" class="rounded-md object-cover w-60 h-60"
            src="https://storage.googleapis.com/a1aa/image/d4bc6ade-69d1-41e3-e174-3eaa0a3b71eb.jpg" />
        <img alt="Portrait of man in gym wear, trainer" class="rounded-md object-cover w-60 h-60"
            src="https://storage.googleapis.com/a1aa/image/75d1c784-38d7-4c07-a925-4b218206cbcf.jpg" />
        <img alt="Portrait of man in gym wear, trainer" class="rounded-md object-cover w-60 h-60"
            src="https://storage.googleapis.com/a1aa/image/75d1c784-38d7-4c07-a925-4b218206cbcf.jpg" />
    </section>
    <!-- Choose the Program -->
    <section class="max-w-7xl mx-auto mb-12 mt-10">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h3 class="text-green-500 font-semibold text-3xl mb-2">
                    <i class="fas fa-book"></i>
                    Choose the Program
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    32 lessons &emsp; 4 hours &emsp; 4 quizzes &emsp; 1 certificate
                </p>
            </div>
            <button
                class="bg-green-500 hover:bg-green-600 transition  font-semibold text-sm rounded-lg px-5 py-4 text-white">
                <i class="fas fa-shopping-cart"></i>
                Buy - $49.99 now
            </button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class=" rounded-lg p-4 shadow-lg">
                <img alt="Woman lifting weights in gym for Strength Training program" class="rounded-md mb-3"
                    height="180"
                    src="https://storage.googleapis.com/a1aa/image/0626bab6-e6db-4d23-550b-656c97599534.jpg" />
                <h4 class="font-semibold  text-lg mb-1 text-green-500">
                    Strength Training
                </h4>
                <p class=" text-sm">
                    Build muscle and increase strength with our expert-led strength
                    training program.
                </p>
            </div>
            <!-- Card 2 -->
            <div class=" rounded-lg p-4 shadow-lg">
                <img alt="Woman doing plank exercise for Cardiovascular Training program" class="rounded-md mb-3"
                    height="180"
                    src="https://storage.googleapis.com/a1aa/image/370a5134-afd7-4429-41d1-31f52bc76029.jpg" />
                <h4 class="font-semibold  text-lg mb-1 text-green-500">
                    Cardiovascular Training
                </h4>
                <p class=" text-sm">
                    Improve your heart health and endurance with our cardio-focused
                    workouts.
                </p>
            </div>
            <!-- Card 3 -->
            <div class=" rounded-lg p-4 shadow-lg">
                <img alt="Woman doing yoga pose for Yoga Class program" class="rounded-md mb-3" height="180"
                    src="https://storage.googleapis.com/a1aa/image/8afece32-7c4d-4d0d-5096-d1d85abdfda5.jpg" />
                <h4 class="font-semibold  text-lg mb-1 text-green-500">Yoga Class</h4>
                <p class=" text-sm">
                    Enhance flexibility and mindfulness with our guided yoga sessions.
                </p>
            </div>
        </div>
    </section>



    <!-- Workout Cards -->
    <section class="max-w-7xl mx-auto mb-12 grid grid-cols-1 sm:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="rounded-lg p-4 shadow-lg">
            <img alt="Man lifting weights for Home Workout program" class="rounded-md mb-3" height="180"
                src="https://storage.googleapis.com/a1aa/image/277bc807-4668-42ca-0c00-4c6156be90a4.jpg" />
            <h4 class="font-semibold  text-lg mb-1 text-green-500">Home Workout</h4>
            <p class=" text-sm">
                Stay fit at home with easy-to-follow workouts that require minimal
                equipment.
            </p>
        </div>
        <!-- Card 2 -->
        <div class="rounded-lg p-4 shadow-lg">
            <img alt="Woman dancing for Dance Fitness program" class="rounded-md mb-3" height="180"
                src="https://storage.googleapis.com/a1aa/image/705cd3ba-ca17-4040-eb97-03bb5d007a00.jpg" />
            <h4 class="font-semibold  text-lg mb-1 text-green-500">Dance Fitness</h4>
            <p class=" text-sm">
                Burn calories and have fun with our energetic dance fitness routines.
            </p>
        </div>
        <!-- Card 3 -->
        <div class="rounded-lg p-4 shadow-lg">
            <img alt="Woman meditating for Meditation program" class="rounded-md mb-3" height="180"
                src="https://storage.googleapis.com/a1aa/image/9c975908-6b50-4194-163f-76eb78b3275c.jpg" />
            <h4 class="font-semibold  text-lg mb-1 text-green-500">Meditation</h4>
            <p class=" text-sm">
                Relax your mind and reduce stress with guided meditation sessions.
            </p>
        </div>
    </section>

    <div class="bg-gray-50">

        <section id="features" class="relative block px-6 py-10 md:py-20 md:px-10 ">


            <div class="relative mx-auto text-center">
                <span class=" my-3 flex items-center justify-center font-medium uppercase tracking-wider text-sm">
                    Why choose us
                </span>
                <h2
                    class="block w-full bg-gradient-to-b from-green-500 to-green-400 bg-clip-text font-bold text-transparent text-3xl sm:text-4xl">
                    DIGIFITNESS
                </h2>
                <p class="mx-auto my-4 w-full bg-transparent text-center font-medium leading-relaxed tracking-wide ">
                    Discover why DigiFitness is the best choice for your fitness journey. With expert instructors,
                    innovative courses, and a commitment to your success, we're here to help you reach your goals.
                </p>
            </div>


            <div
                class="relative mx-auto max-w-7xl z-10 grid grid-cols-1 gap-10 pt-10 pb-10 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-md border border-green-500 bg-white p-8 shadow-md shadow-green-500">
                    <div
                        class="flex h-12 w-12 items-center justify-center text-center rounded-md border-2 border-green-500 text-green-500">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <h3 class="mt-6 text-green-500 font-bold uppercase">Best Coaching</h3>
                    <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">
                        Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                        interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia
                        nostra, per inceptos himenaeos.
                    </p>
                </div>

                <div class="rounded-md border border-green-500 bg-white p-8 shadow-md shadow-green-500">
                    <div
                        class="flex h-12 w-12 items-center justify-center text-center rounded-md border-2 border-green-500 text-green-500">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="mt-6 text-green-500 font-bold uppercase">Convenient practice</h3>
                    <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">
                        Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                        interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia
                        nostra, per inceptos himenaeos.
                    </p>
                </div>

                <div class="rounded-md border border-green-500 bg-white p-8 shadow-md shadow-green-500">
                    <div
                        class="flex h-12 w-12 items-center justify-center text-center rounded-md border-2 border-green-500 text-green-500">
                        <i class="fa-solid fa-clapperboard"></i>
                    </div>
                    <h3 class="mt-6 text-green-500 font-bold uppercase">Video Lecture</h3>
                    <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">
                        Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                        interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia
                        nostra, per inceptos himenaeos.
                    </p>
                </div>

                <div class="rounded-md border border-green-500 bg-white p-8 shadow-md shadow-green-500">
                    <div
                        class="flex h-12 w-12 items-center justify-center text-center rounded-md border-2 border-green-500 text-green-500">
                        <i class="fa-solid fa-ticket"></i>
                    </div>
                    <h3 class="mt-6 text-green-500 font-bold uppercase">Live Class</h3>
                    <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">
                        Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                        interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia
                        nostra, per inceptos himenaeos.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- Promo Banner -->
    <img src="https://cdn.glitch.global/9c548a79-aa82-43bf-9055-04e5b406e24b/Rectangle%2019.png?v=1746712837980" class="max-w-7xl mx-auto my-10" alt="">

    <!-- Course Content -->
    <section class="max-w-7xl mx-auto mb-12 bg-white rounded-lg py-6 text-black">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h3 class="text-green-500 font-semibold text-3xl mb-2">
                    <i class="fas fa-book"></i>
                    Course Content
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    32 lessons &emsp; 4 hours &emsp; 4 quizzes &emsp; 1 certificate
                </p>
            </div>
            <button
                class="bg-green-500 hover:bg-green-600 transition  font-semibold text-sm rounded-lg px-5 py-4 text-white">
                <i class="fas fa-shopping-cart"></i>
                Buy - $49.99 now
            </button>
        </div>
        <div class="grid grid-cols-2 gap-20">
            <div>
                <div class="rounded-xl overflow-hidden shadow-lg p-4">
                    <img alt="Ultimate Yoga Guide thumbnail with woman in yoga pose"
                        class="w-full object-cover rounded-xl" height="270"
                        src="https://storage.googleapis.com/a1aa/image/8c8fe821-582a-4dd3-8822-69096545b091.jpg"
                        width="480" />
                    <div class="flex items-center space-x-2 mt-2 text-yellow-400">
                        <i class="fas fa-star"> </i>
                        <i class="fas fa-star"> </i>
                        <i class="fas fa-star"> </i>
                        <i class="fas fa-star"> </i>
                        <i class="fas fa-star-half-alt"> </i>
                        <span class="text-gray-600 text-sm"> (4.5) </span>
                    </div>
                    <div class="flex items-center mt-2">
                        <div class="flex -space-x-2">
                            <img class="inline-block size-8 rounded-full ring-2 ring-white"
                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                alt="Avatar">
                            <img class="inline-block size-8 rounded-full ring-2 ring-white"
                                src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                alt="Avatar">
                            <img class="inline-block size-8 rounded-full ring-2 ring-white"
                                src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&&auto=format&fit=facearea&facepad=3&w=300&h=300&q=80"
                                alt="Avatar">
                            <img class="inline-block size-8 rounded-full ring-2 ring-white"
                                src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                alt="Avatar">
                            <div class="hs-dropdown [--placement:top-left] relative inline-flex">
                                <button id="hs-avatar-group-dropdown"
                                    class="hs-dropdown-toggle inline-flex items-center justify-center size-8 rounded-full bg-gray-100 border-2 border-white font-medium text-gray-700 shadow-2xs align-middle hover:bg-gray-200 focus:outline-hidden focus:bg-gray-300 text-sm"
                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    <span class="font-medium">9+</span>
                                </button>

                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-48 hidden z-10 transition-[margin,opacity] opacity-0 duration-300 mb-2 bg-white shadow-md rounded-lg p-2"
                                    role="menu" aria-orientation="vertical"
                                    aria-labelledby="hs-avatar-group-dropdown">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100"
                                        href="#">
                                        Chris Lynch
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100"
                                        href="#">
                                        Maria Guan
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100"
                                        href="#">
                                        Amil Evara
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100"
                                        href="#">
                                        Ebele Egbuna
                                    </a>
                                </div>
                            </div>
                        </div>
                        <p class=" text-green-500 mt-1 ml-2 font-semibold">
                            <i class="fas fa-users"> </i>
                            12,000+ students enrolled
                        </p>
                        <p class="text-gray-400 text-sm mt-1 ml-2">
                            <i class="fas fa-clock"> </i>
                            12 lessons
                        </p>
                    </div>
                    <h4 class="font-semibold text-lg mt-3">
                        Ultimate Yoga Guide: Step-by-Step Video Lessons for All Levels
                    </h4>
                    <button class="mt-3 bg-green-500 hover:bg-green-600 transition  font-semibold rounded px-6 py-2">
                        Continue Course
                    </button>
                </div>
            </div>
            <div>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img alt="Ultimate Yoga Guide thumbnail with woman in yoga pose"
                                class="mr-4 object-cover rounded-lg w-20 h-20"
                                src="https://storage.googleapis.com/a1aa/image/8c8fe821-582a-4dd3-8822-69096545b091.jpg" />
                            <span class="text-xl"> Course Overview </span>
                        </div>
                        <button type="button"
                            class="py-3 px-4 flex justify-center items-center size-11 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-hidden focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                            <i class="fa-solid fa-location-arrow w-4 h-4 shrink-0 size-4"></i>
                        </button>
                    </li>
                    <li class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img alt="Ultimate Yoga Guide thumbnail with woman in yoga pose"
                                class="mr-4 object-cover rounded-lg w-20 h-20"
                                src="https://storage.googleapis.com/a1aa/image/8c8fe821-582a-4dd3-8822-69096545b091.jpg" />
                            <span class="text-xl"> Course Overview </span>
                        </div>
                        <button type="button"
                            class="py-3 px-4 flex justify-center items-center size-11 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-hidden focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                            <i class="fa-solid fa-location-arrow w-4 h-4 shrink-0 size-4"></i>
                        </button>
                    </li>
                    <li class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img alt="Ultimate Yoga Guide thumbnail with woman in yoga pose"
                                class="mr-4 object-cover rounded-lg w-20 h-20"
                                src="https://storage.googleapis.com/a1aa/image/8c8fe821-582a-4dd3-8822-69096545b091.jpg" />
                            <span class="text-xl"> Course Overview </span>
                        </div>
                        <button type="button"
                            class="py-3 px-4 flex justify-center items-center size-11 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-hidden focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                            <i class="fa-solid fa-location-arrow w-4 h-4 shrink-0 size-4"></i>
                        </button>
                    </li>
                    <li class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img alt="Ultimate Yoga Guide thumbnail with woman in yoga pose"
                                class="mr-4 object-cover rounded-lg w-20 h-20"
                                src="https://storage.googleapis.com/a1aa/image/8c8fe821-582a-4dd3-8822-69096545b091.jpg" />
                            <span class="text-xl"> Course Overview </span>
                        </div>
                        <button type="button"
                            class="py-3 px-4 flex justify-center items-center size-11 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-hidden focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                            <i class="fa-solid fa-location-arrow w-4 h-4 shrink-0 size-4"></i>
                        </button>
                    </li>
                    <li class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img alt="Ultimate Yoga Guide thumbnail with woman in yoga pose"
                                class="mr-4 object-cover rounded-lg w-20 h-20"
                                src="https://storage.googleapis.com/a1aa/image/8c8fe821-582a-4dd3-8822-69096545b091.jpg" />
                            <span class="text-xl"> Course Overview </span>
                        </div>
                        <button type="button"
                            class="py-3 px-4 flex justify-center items-center size-11 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-hidden focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                            <i class="fa-solid fa-location-arrow w-4 h-4 shrink-0 size-4"></i>
                        </button>
                    </li>
                    <li class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img alt="Ultimate Yoga Guide thumbnail with woman in yoga pose"
                                class="mr-4 object-cover rounded-lg w-20 h-20"
                                src="https://storage.googleapis.com/a1aa/image/8c8fe821-582a-4dd3-8822-69096545b091.jpg" />
                            <span class="text-xl"> Course Overview </span>
                        </div>
                        <button type="button"
                            class="py-3 px-4 flex justify-center items-center size-11 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-hidden focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                            <i class="fa-solid fa-location-arrow w-4 h-4 shrink-0 size-4"></i>
                        </button>
                    </li>
                    <li class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img alt="Ultimate Yoga Guide thumbnail with woman in yoga pose"
                                class="mr-4 object-cover rounded-lg w-20 h-20"
                                src="https://storage.googleapis.com/a1aa/image/8c8fe821-582a-4dd3-8822-69096545b091.jpg" />
                            <span class="text-xl"> Course Overview </span>
                        </div>
                        <button type="button"
                            class="py-3 px-4 flex justify-center items-center size-11 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-hidden focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                            <i class="fa-solid fa-location-arrow w-4 h-4 shrink-0 size-4"></i>
                        </button>
                    </li>
                    <li class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img alt="Ultimate Yoga Guide thumbnail with woman in yoga pose"
                                class="mr-4 object-cover rounded-lg w-20 h-20"
                                src="https://storage.googleapis.com/a1aa/image/8c8fe821-582a-4dd3-8822-69096545b091.jpg" />
                            <span class="text-xl"> Course Overview </span>
                        </div>
                        <button type="button"
                            class="py-3 px-4 flex justify-center items-center size-11 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-hidden focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                            <i class="fa-solid fa-location-arrow w-4 h-4 shrink-0 size-4"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Trusted Clients Logos -->
    <div class="relative z-10 bg-gray-50 py-10">
        <div class="max-w-7xl px-4 xl:px-0 mx-auto">
            <div class="mb-5 text-center mt-5">
                <h2 class="text-3xl">The Best Trusted Client in this Fitness world</h2>
            </div>

            <div class="flex justify-between gap-6">
                <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 text-neutral-800"
                    enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m431.7 0h-235.5v317.8h317.8v-235.5c0-45.6-36.7-82.3-82.3-82.3zm-308.9 0h-40.5c-45.6 0-82.3 36.7-82.3 82.3v40.5h122.8zm-122.8 196.2h122.8v122.8h-122.8zm392.5 317.8h40.5c45.6 0 82.3-36.7 82.3-82.3v-39.2h-122.8zm-196.3-121.5h122.8v122.8h-122.8zm-196.2 0v40.5c0 45.6 36.7 82.3 82.3 82.3h40.5v-122.8zm828-359.6h-48.1v449.4h254.5v-43h-206.4zm360.8 119c-93.7 0-159.5 69.6-159.5 169.6v11.5c1.3 43 20.3 83.6 51.9 113.9 30.4 27.9 69.6 44.3 111.4 44.3h6.3c44.3 0 86.1-16.5 119-44.3l1.3-1.3-21.5-35.4-2.5 1.3c-26.6 24.1-59.5 38-94.9 38-58.2 0-117.7-38-121.5-122.8h243.1v-2.5s1.3-15.2 1.3-22.8c-.3-91.2-53.4-149.5-134.4-149.5zm-108.9 134.2c10.1-57 51.9-93.7 106.3-93.7 40.5 0 84.8 24.1 88.6 93.7zm521.6-96.2v16.5c-20.3-34.2-58.2-55.7-97.5-55.7h-3.8c-86.1 0-145.6 68.4-145.6 168.4 0 101.3 57 169.6 141.8 169.6 67.1 0 97.5-40.5 107.6-58.2v49.4h45.6v-447h-46.8v157zm-98.8 257c-59.5 0-98.7-50.6-98.7-126.6 0-73.4 41.8-125.3 100-125.3 49.4 0 98.7 39.2 98.7 125.3 0 93.7-51.9 126.6-100 126.6zm424.1-250.7v2.5c-8.9-15.2-36.7-48.1-103.8-48.1-84.8 0-140.5 64.6-140.5 163.3s58.2 165.8 144.3 165.8c46.8 0 78.5-16.5 100-50.6v44.3c0 62-39.2 97.5-108.9 97.5-29.1 0-59.5-7.6-86.1-21.5l-2.5-1.3-17.7 39.2 2.5 1.3c32.9 16.5 69.6 25.3 105.1 25.3 74.7 0 154.4-38 154.4-143.1v-311.3h-46.8zm-93.7 241.8c-62 0-102.5-48.1-102.5-122.8 0-76 35.4-119 96.2-119 67.1 0 98.7 39.2 98.7 119 1.3 78.5-31.6 122.8-92.4 122.8zm331.7-286.1c-93.7 0-158.2 69.6-158.2 168.4v11.4c1.3 43 20.3 83.6 51.9 113.9 30.4 27.9 69.6 44.3 111.4 44.3h6.3c44.3 0 86.1-16.5 119-44.3l1.3-1.3-22.8-35.4-2.5 1.3c-26.6 24.1-59.5 38-94.9 38-58.2 0-117.7-38-121.5-122.8h244.2v-2.5s1.3-15.2 1.3-22.8c0-89.9-53.2-148.2-135.5-148.2zm-107.6 134.2c10.1-57 51.9-93.7 106.3-93.7 40.5 0 84.8 24.1 88.6 93.7zm440.6-127.9c-6.3-1.3-11.4-1.3-17.7-2.5-44.3 0-81 27.9-100 74.7v-72.2h-46.8l1.3 320.3v2.5h48.1v-135.4c0-20.3 2.5-41.8 8.9-60.8 15.2-49.4 49.4-81 89.9-81 5.1 0 10.1 0 15.2 1.3h2.5v-46.8z"
                        fill="currentColor"></path>
                </svg>

                <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 text-neutral-800"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="-4.126838974812941 0.900767442746961 939.436838974813 230.18142889845947" width="2500"
                    height="607">
                    <path
                        d="M667.21 90.58c-13.76 0-23.58 4.7-28.4 13.6l-2.59 4.82V92.9h-22.39v97.86h23.55v-58.22c0-13.91 7.56-21.89 20.73-21.89 12.56 0 19.76 7.77 19.76 21.31v58.8h23.56v-63c0-23.3-12.79-37.18-34.22-37.18zm-114.21 0c-27.79 0-45 17.34-45 45.25v13.74c0 26.84 17.41 43.51 45.44 43.51 18.75 0 31.89-6.87 40.16-21l-14.6-8.4c-6.11 8.15-15.87 13.2-25.55 13.2-14.19 0-22.66-8.76-22.66-23.44v-3.89h65.73v-16.23c0-26-17.07-42.74-43.5-42.74zm22.09 43.15h-44.38v-2.35c0-16.11 7.91-25 22.27-25 13.83 0 22.09 8.76 22.09 23.44zm360.22-56.94V58.07h-81.46v18.72h28.56V172h-28.56v18.72h81.46V172h-28.57V76.79zM317.65 55.37c-36.38 0-59 22.67-59 59.18v19.74c0 36.5 22.61 59.18 59 59.18s59-22.68 59-59.18v-19.74c-.01-36.55-22.65-59.18-59-59.18zm34.66 80.27c0 24.24-12.63 38.14-34.66 38.14S283 159.88 283 135.64v-22.45c0-24.24 12.64-38.14 34.66-38.14s34.66 13.9 34.66 38.14zm98.31-45.06c-12.36 0-23.06 5.12-28.64 13.69l-2.53 3.9V92.9h-22.4v131.53h23.56v-47.64l2.52 3.74c5.3 7.86 15.65 12.55 27.69 12.55 20.31 0 40.8-13.27 40.8-42.93v-16.64c0-21.37-12.63-42.93-41-42.93zM468.06 149c0 15.77-9.2 25.57-24 25.57-13.8 0-23.43-10.36-23.43-25.18v-14.72c0-15 9.71-25.56 23.63-25.56 14.69 0 23.82 9.79 23.82 25.56zm298.47-90.92L719 190.76h23.93l9.1-28.44h54.64l.09.28 9 28.16h23.92L792.07 58.07zm-8.66 85.53l21.44-67.08 21.22 67.08zM212.59 95.12a57.27 57.27 0 0 0-4.92-47.05 58 58 0 0 0-62.4-27.79A57.29 57.29 0 0 0 102.06 1a57.94 57.94 0 0 0-55.27 40.14A57.31 57.31 0 0 0 8.5 68.93a58 58 0 0 0 7.13 67.94 57.31 57.31 0 0 0 4.92 47A58 58 0 0 0 83 211.72 57.31 57.31 0 0 0 126.16 231a57.94 57.94 0 0 0 55.27-40.14 57.3 57.3 0 0 0 38.28-27.79 57.92 57.92 0 0 0-7.12-67.95zM126.16 216a42.93 42.93 0 0 1-27.58-10c.34-.19 1-.52 1.38-.77l45.8-26.44a7.43 7.43 0 0 0 3.76-6.51V107.7l19.35 11.17a.67.67 0 0 1 .38.54v53.45A43.14 43.14 0 0 1 126.16 216zm-92.59-39.54a43 43 0 0 1-5.15-28.88c.34.21.94.57 1.36.81l45.81 26.45a7.44 7.44 0 0 0 7.52 0L139 142.52v22.34a.67.67 0 0 1-.27.6l-46.3 26.72a43.14 43.14 0 0 1-58.86-15.77zm-12-100A42.92 42.92 0 0 1 44 57.56V112a7.45 7.45 0 0 0 3.76 6.51l55.9 32.28L84.24 162a.68.68 0 0 1-.65.06L37.3 135.33a43.13 43.13 0 0 1-15.77-58.87zm159 37l-55.9-32.28L144 70a.69.69 0 0 1 .65-.06l46.29 26.73a43.1 43.1 0 0 1-6.66 77.76V120a7.44 7.44 0 0 0-3.74-6.54zm19.27-29c-.34-.21-.94-.57-1.36-.81L152.67 57.2a7.44 7.44 0 0 0-7.52 0l-55.9 32.27V67.14a.73.73 0 0 1 .28-.6l46.29-26.72a43.1 43.1 0 0 1 64 44.65zM78.7 124.3l-19.36-11.17a.73.73 0 0 1-.37-.54V59.14A43.09 43.09 0 0 1 129.64 26c-.34.19-.95.52-1.38.77l-45.8 26.44a7.45 7.45 0 0 0-3.76 6.51zm10.51-22.67l24.9-14.38L139 101.63v28.74l-24.9 14.38-24.9-14.38z"
                        fill="currentColor"></path>
                </svg>

                <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 text-neutral-800" fill="none"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2428 1002">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M311.5 389.8h191.8l67 117.5 77.8-117.5h178.3L682.7 590.7l154 220.7H648.1l-77.8-135.8-91.7 135.8h-175l153.2-220.7-145.3-200.9Z"
                        fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1279.3 640.7H955.4c2.9 26 10 45.2 21 58a76.5 76.5 0 0 0 61.1 27.3c16 0 31.5-4 45.3-12 8.8-5 18.2-13.7 28.2-26.5l159.2 14.7c-24.4 42.4-53.7 72.7-88 91.2-34.5 18.2-83.8 27.5-148.2 27.5-55.8 0-99.7-7.9-131.8-23.6a193.2 193.2 0 0 1-79.6-75c-21-34.4-31.6-74.6-31.6-121 0-65.8 21.2-119.2 63.3-159.8 42.3-40.8 100.6-61.3 175-61.3 60.3 0 108 9.2 142.8 27.5a184 184 0 0 1 79.8 79.3c18.3 34.7 27.4 79.8 27.4 135.3v18.4ZM1115 563.3c-3.2-31.3-11.6-53.7-25.2-67.1a73.1 73.1 0 0 0-53.8-20.3 73.6 73.6 0 0 0-61.6 30.6c-9.7 12.7-16 31.6-18.5 56.8H1115Zm137-173.5h168.3l81.9 267.1 84.5-267H1750l-179.1 421.5h-143.3L1252 389.8Zm463.2 212c0-64.3 21.7-117.4 65-159 43.5-41.7 102-62.6 176-62.6 84.4 0 148.2 24.5 191.3 73.5 34.6 39.4 52 88 52 145.8 0 64.7-21.5 117.8-64.5 159.3-43 41.3-102.4 62-178.5 62-67.7 0-122.5-17.1-164.3-51.5-51.4-42.6-77-98.4-77-167.6Zm162-.5c0 37.7 7.5 65.5 22.8 83.4a72 72 0 0 0 57.3 27.1c23.4 0 42.5-9 57.4-26.7 15-17.8 22.5-46 22.5-85.4 0-36.4-7.6-63.7-22.7-81.5a70.5 70.5 0 0 0-56-26.7c-23.5 0-43 9-58.3 27-15.4 18.2-23 45.9-23 82.8ZM2363.1.1a64 64 0 0 1 0 127.9 64 64 0 0 1 0-128Z"
                        fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1912.1 671.5c220.3-135 326.4-327 334-419.2 8.7-106.7-71-235.9-358.9-238-345 3.6-790 158.3-1163.6 360.4h138c315.8-152.6 672-266.2 1000.8-275.2 287.7-7.8 304.4 149.2 302 199-3.6 71-74.7 234.5-252.3 373Zm-1315.7-222-36 22.7 10 17.5 26-40.1ZM419.8 567.5C212 717 57 873.2.8 1001.9 77.8 897.1 217 771 394.9 647l40.4-58.1-15.5-21.4Z"
                        fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2036.3 580a819.8 819.8 0 0 0 114.2-122.8l-3-3.5c-8-9.2-17-17.5-26.5-25-21 39.8-50 83.7-88.2 128.3 1.6 7 2.8 14.7 3.5 23Z"
                        fill="currentColor"></path>
                </svg>

                <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 text-neutral-800" fill="none"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127 33">
                    <path d="M9.3 16.5C9.3 9 14.3 2.7 21.2.7a16.5 16.5 0 1 0 0 31.6c-6.9-2-11.9-8.3-11.9-15.8Z"
                        fill="currentColor"></path>
                    <path d="M21.7 10c4 0 7.4 2.8 8.5 6.4a8.9 8.9 0 1 0-17 0c1-3.6 4.4-6.3 8.5-6.3Z"
                        fill="currentColor"></path>
                    <path d="M24.8 19.4c0 3-2 5.5-4.8 6.3A6.6 6.6 0 1 0 20 13c2.8.8 4.8 3.4 4.8 6.4Z"
                        fill="currentColor"></path>
                    <path
                        d="M39.6 13.5A4.4 4.4 0 0 1 44 9.1h1.3v2.7l-1 .2-1 .6-.2.4-.1.5h2.3v3H43v9.2h-3.4v-9.3h-1.3v-2.9h1.3ZM55.7 13.5h3.4v6.1a6.9 6.9 0 0 1-1.7 4.6 6 6 0 0 1-4.5 1.8c-1 0-1.8-.1-2.5-.5a6 6 0 0 1-3.2-3.4c-.3-.8-.4-1.6-.4-2.5v-6H50v6c0 .5 0 1 .2 1.3l.5 1c.2.4.5.6.9.8.3.2.8.3 1.2.3a2.6 2.6 0 0 0 2.1-1c.3-.3.4-.7.5-1l.2-1.4v-6ZM61.2 25.7V9.5h3.4v16.2h-3.4ZM66.9 25.7V9.5h3.3v16.2H67ZM78.5 21.2l3.3-7.7h3.7l-5.7 12.2h-2.7l-5.6-12.2H75l3.4 7.7ZM87 13.5h3.3v12.2H87V13.5Zm1.6-5 .8.1.6.4.4.7.2.7a1.9 1.9 0 0 1-.6 1.4l-.6.4a2 2 0 0 1-.8.1c-.5 0-1-.2-1.3-.5a2 2 0 0 1-.4-2.1c0-.3.2-.5.4-.7l.6-.4.7-.1ZM98.8 13.2a6.7 6.7 0 0 1 4.8 1.9 6.3 6.3 0 0 1 1.9 5.7h-9.8a3.3 3.3 0 0 0 3.2 2.2c.5 0 1-.1 1.4-.4.5-.2.9-.5 1.2-1h3.7c-.2.7-.5 1.3-1 1.8a6.1 6.1 0 0 1-3.3 2.3 7 7 0 0 1-6.9-1.6 6.1 6.1 0 0 1-2-4.5 6.1 6.1 0 0 1 2-4.5c.7-.6 1.4-1 2.2-1.4.8-.3 1.7-.5 2.6-.5Zm3.2 5.2c-.3-.6-.7-1.1-1.2-1.5-.6-.4-1.3-.7-2-.7s-1.4.3-2 .7c-.5.4-.9.9-1.1 1.5h6.3ZM123 13.5h3.6l-5 12.2H119l-2.5-6.5-2.5 6.5h-2.7l-5-12.2h3.6l2.7 7 2.8-7h2.2l2.8 7 2.7-7Z"
                        fill="currentColor"></path>
                </svg>

                <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 text-neutral-800"
                    xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 88 22" xml:space="preserve"
                    enable-background="new 0 0 88 22">
                    <path
                        d="M36.3 14.6a7.3 7.3 0 0 1-5.6 2.8c-3.8 0-6.8-2.7-6.8-6.2a6 6 0 0 1 2-4.5A6 6 0 0 1 30.5 5c2.2 0 4.3 1 5.6 2.8l-2.5 1.8a3.7 3.7 0 0 0-3.1-1.8 3.5 3.5 0 0 0-3.5 3.5c.1 2 1.7 3.5 3.6 3.5 1.3 0 2.5-.6 3.2-1.7l2.5 1.5z"
                        fill="currentColor"></path>
                    <path d="M37.7 0H40.8V17.1H37.7z" fill="currentColor"></path>
                    <path
                        d="M49.1 14.7c2 0 3.7-1.6 3.8-3.6-.1-2-1.8-3.6-3.8-3.6s-3.7 1.6-3.8 3.6c.1 2 1.7 3.6 3.8 3.6m0-9.8c1.7-.1 3.4.5 4.7 1.7 1.3 1.2 2 2.8 2.1 4.5a6.4 6.4 0 0 1-2.1 4.5 6.4 6.4 0 0 1-4.7 1.7c-3.8 0-6.8-2.7-6.8-6.2s3-6.2 6.8-6.2"
                        fill="currentColor"></path>
                    <path d="M55.3 5.1 59 5.1 62 11.5 65.2 5.1 68.6 5.1 62 17.8z" fill="currentColor"></path>
                    <path
                        d="M77.5 9.4a3 3 0 0 0-2.9-1.9c-1.3 0-2.5.7-3.1 1.9h6zm2 6.3a7 7 0 0 1-4.6 1.6c-3.8 0-6.8-2.7-6.8-6.2 0-1.7.7-3.3 1.9-4.5a6 6 0 0 1 4.6-1.7c1.7-.1 3.3.6 4.5 1.8s1.8 2.8 1.7 4.5v.8h-9.6a3.9 3.9 0 0 0 6.5 1.5l1.8 2.2zm2.8-5.3c0-2.9 2.2-5.2 5.7-5.2V8c-.7 0-1.5.3-2 .8s-.7 1.3-.6 2v6.3h-3.1v-6.7z"
                        fill="currentColor"></path>
                    <path
                        d="M9.7 5.6a5 5 0 0 0-8.3-3.5C0 3.5-.4 5.6.3 7.4s2.5 3 4.5 3h4.9V5.6zm1.4 0a5 5 0 0 1 8.3-3.5c1.4 1.4 1.8 3.5 1.1 5.3s-2.5 3-4.5 3h-4.9V5.6zm0 11a5 5 0 0 0 8.3 3.5c1.4-1.4 1.8-3.5 1.1-5.3s-2.5-3-4.5-3h-4.9v4.8zm-6.3 3.5c1.9 0 3.5-1.5 3.5-3.5v-3.5H4.8c-1.9 0-3.5 1.5-3.5 3.5s1.6 3.5 3.5 3.5zm4.9-3.5a5 5 0 0 1-8.3 3.5C0 18.7-.4 16.6.3 14.8s2.5-3 4.5-3h4.9v4.8z"
                        fill="currentColor"></path>
                </svg>
            </div>
        </div>
    </div>
    <!-- Most Popular Courses -->
    <section class="max-w-7xl mx-auto mb-12 mt-10">
        <div class="flex justify-between items-center mb-6">
            <div>
                <p class=" text-green-500 text-xl font-semibold tracking-widest">
                    Top popular courses
                </p>

                <h3 class="font-semibold text-3xl tracking-widest">
                    Most Popular Courses
                </h3>
            </div>
            <button
                class="bg-green-500 hover:bg-green-600 transition  font-semibold text-sm rounded px-5 py-4 text-white">
                View All Courses
            </button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <!-- Course Card 1 -->
            <div class="bg-white rounded-lg shadow p-4 text-black">
                <div class="relative">
                    <img alt="Woman running outdoors for course 1" class="rounded-md w-full object-cover"
                        height="180"
                        src="https://storage.googleapis.com/a1aa/image/a0d13bb6-cb7a-435a-910a-d8f1671a1879.jpg" />
                    <button
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-green-500 bg-opacity-80 rounded-full py-2 px-3.5 ">
                        <i class="fas fa-play"> </i>
                    </button>
                </div>
                <div class="flex items-center space-x-1 mt-2 text-yellow-400 text-sm">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star-half-alt"> </i>
                    <span class="text-gray-600 ml-1"> (4.5) </span>
                </div>
                <h4 class="font-semibold mt-1">Running for Beginners</h4>
                <p class="text-gray-700 text-xs mb-2">3 Lessons · 20 Minutes</p>
                <p class="text-gray-700 text-xs mb-2">
                    Learn the basics of running and improve your endurance.
                </p>
                <div class="flex justify-between items-center text-xs text-gray-600">
                    <span> $30 </span>
                    <button class="text-green-500 font-semibold">Buy Now</button>
                </div>
            </div>
            <!-- Course Card 2 -->
            <div class="bg-white rounded-lg shadow p-4 text-black">
                <div class="relative">
                    <img alt="Woman doing yoga for course 2" class="rounded-md w-full object-cover" height="180"
                        src="https://storage.googleapis.com/a1aa/image/cdc20947-0c7f-44e4-b06f-6652876eb0c3.jpg" />
                    <button
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-green-500 bg-opacity-80 rounded-full py-2 px-3.5 ">
                        <i class="fas fa-play"> </i>
                    </button>
                </div>
                <div class="flex items-center space-x-1 mt-2 text-yellow-400 text-sm">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star-half-alt"> </i>
                    <span class="text-gray-600 ml-1"> (4.5) </span>
                </div>
                <h4 class="font-semibold mt-1">Yoga for Flexibility</h4>
                <p class="text-gray-700 text-xs mb-2">5 Lessons · 40 Minutes</p>
                <p class="text-gray-700 text-xs mb-2">
                    Improve your flexibility and balance with yoga.
                </p>
                <div class="flex justify-between items-center text-xs text-gray-600">
                    <span> $40 </span>
                    <button class="text-green-500 font-semibold">Buy Now</button>
                </div>
            </div>
            <!-- Course Card 3 -->
            <div class="bg-white rounded-lg shadow p-4 text-black">
                <div class="relative">
                    <img alt="Woman running outdoors for course 3" class="rounded-md w-full object-cover"
                        height="180"
                        src="https://storage.googleapis.com/a1aa/image/36ff73de-8438-4d71-2ced-d5589cab14e0.jpg" />
                    <button
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-green-500 bg-opacity-80 rounded-full py-2 px-3.5 ">
                        <i class="fas fa-play"> </i>
                    </button>
                </div>
                <div class="flex items-center space-x-1 mt-2 text-yellow-400 text-sm">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star-half-alt"> </i>
                    <span class="text-gray-600 ml-1"> (4.5) </span>
                </div>
                <h4 class="font-semibold mt-1">HIIT Workout</h4>
                <p class="text-gray-700 text-xs mb-2">4 Lessons · 30 Minutes</p>
                <p class="text-gray-700 text-xs mb-2">
                    High-intensity interval training to burn fat fast.
                </p>
                <div class="flex justify-between items-center text-xs text-gray-600">
                    <span> $35 </span>
                    <button class="text-green-500 font-semibold">Buy Now</button>
                </div>
            </div>
            <!-- Course Card 1 -->
            <div class="bg-white rounded-lg shadow p-4 text-black">
                <div class="relative">
                    <img alt="Woman running outdoors for course 1" class="rounded-md w-full object-cover"
                        height="180"
                        src="https://storage.googleapis.com/a1aa/image/a0d13bb6-cb7a-435a-910a-d8f1671a1879.jpg" />
                    <button
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-green-500 bg-opacity-80 rounded-full py-2 px-3.5 ">
                        <i class="fas fa-play"> </i>
                    </button>
                </div>
                <div class="flex items-center space-x-1 mt-2 text-yellow-400 text-sm">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star-half-alt"> </i>
                    <span class="text-gray-600 ml-1"> (4.5) </span>
                </div>
                <h4 class="font-semibold mt-1">Running for Beginners</h4>
                <p class="text-gray-700 text-xs mb-2">3 Lessons · 20 Minutes</p>
                <p class="text-gray-700 text-xs mb-2">
                    Learn the basics of running and improve your endurance.
                </p>
                <div class="flex justify-between items-center text-xs text-gray-600">
                    <span> $30 </span>
                    <button class="text-green-500 font-semibold">Buy Now</button>
                </div>
            </div>
            <!-- Course Card 2 -->
            <div class="bg-white rounded-lg shadow p-4 text-black">
                <div class="relative">
                    <img alt="Woman doing yoga for course 2" class="rounded-md w-full object-cover" height="180"
                        src="https://storage.googleapis.com/a1aa/image/cdc20947-0c7f-44e4-b06f-6652876eb0c3.jpg" />
                    <button
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-green-500 bg-opacity-80 rounded-full py-2 px-3.5 ">
                        <i class="fas fa-play"> </i>
                    </button>
                </div>
                <div class="flex items-center space-x-1 mt-2 text-yellow-400 text-sm">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star-half-alt"> </i>
                    <span class="text-gray-600 ml-1"> (4.5) </span>
                </div>
                <h4 class="font-semibold mt-1">Yoga for Flexibility</h4>
                <p class="text-gray-700 text-xs mb-2">5 Lessons · 40 Minutes</p>
                <p class="text-gray-700 text-xs mb-2">
                    Improve your flexibility and balance with yoga.
                </p>
                <div class="flex justify-between items-center text-xs text-gray-600">
                    <span> $40 </span>
                    <button class="text-green-500 font-semibold">Buy Now</button>
                </div>
            </div>
            <!-- Course Card 3 -->
            <div class="bg-white rounded-lg shadow p-4 text-black">
                <div class="relative">
                    <img alt="Woman running outdoors for course 3" class="rounded-md w-full object-cover"
                        height="180"
                        src="https://storage.googleapis.com/a1aa/image/36ff73de-8438-4d71-2ced-d5589cab14e0.jpg" />
                    <button
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-green-500 bg-opacity-80 rounded-full py-2 px-3.5 ">
                        <i class="fas fa-play"> </i>
                    </button>
                </div>
                <div class="flex items-center space-x-1 mt-2 text-yellow-400 text-sm">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star-half-alt"> </i>
                    <span class="text-gray-600 ml-1"> (4.5) </span>
                </div>
                <h4 class="font-semibold mt-1">HIIT Workout</h4>
                <p class="text-gray-700 text-xs mb-2">4 Lessons · 30 Minutes</p>
                <p class="text-gray-700 text-xs mb-2">
                    High-intensity interval training to burn fat fast.
                </p>
                <div class="flex justify-between items-center text-xs text-gray-600">
                    <span> $35 </span>
                    <button class="text-green-500 font-semibold">Buy Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Testimonials -->
    <section class="max-w-7xl mx-auto mb-12 rounded-lg py-10 ">
        <h3 class="text-center text-green-500 font-semibold text-3xl tracking-widest mb-6">
            Our Customers Testimonials
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
            <!-- Testimonial 1 -->
            <div class="space-y-3">
                <div class="flex items-center space-x-3">
                    <img alt="User 1 portrait, woman smiling" class="rounded-full w-16 h-16 object-cover"
                        height="64"
                        src="https://storage.googleapis.com/a1aa/image/429c1a6f-d648-4420-3f35-75d62a4a346c.jpg"
                        width="64" />
                    <div>
                        <p class="font-semibold">Sarah J. Smith</p>
                        <div class="text-yellow-400 text-sm">
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star-half-alt"> </i>
                        </div>
                    </div>
                </div>
                <p class=" text-sm">
                    "Digifitness helped me transform my body and mind. The trainers are
                    amazing!"
                </p>
                <img alt="Before and after photos of woman fitness transformation"
                    class="rounded-md w-full object-cover" height="90"
                    src="https://storage.googleapis.com/a1aa/image/205aa920-8176-4af6-079c-cb2d80f59c69.jpg"
                    width="160" />
            </div>
            <!-- Testimonial 2 -->
            <div class="space-y-3">
                <div class="flex items-center space-x-3">
                    <img alt="User 2 portrait, man smiling" class="rounded-full w-16 h-16 object-cover"
                        height="64"
                        src="https://storage.googleapis.com/a1aa/image/ca14e671-b0b0-4117-7f0d-305ae8479fa7.jpg"
                        width="64" />
                    <div>
                        <p class="font-semibold">Mark L. Davis</p>
                        <div class="text-yellow-400 text-sm">
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star-half-alt"> </i>
                        </div>
                    </div>
                </div>
                <p class=" text-sm">
                    "The workouts are easy to follow and really effective. Highly
                    recommend!"
                </p>
                <img alt="Before and after photos of man fitness transformation"
                    class="rounded-md w-full object-cover" height="90"
                    src="https://storage.googleapis.com/a1aa/image/59f44b3f-707a-43bd-475b-8dd0f00848ca.jpg"
                    width="160" />
            </div>
            <!-- Testimonial 3 -->
            <div class="space-y-3">
                <div class="flex items-center space-x-3">
                    <img alt="User 3 portrait, woman smiling" class="rounded-full w-16 h-16 object-cover"
                        height="64"
                        src="https://storage.googleapis.com/a1aa/image/5913c417-464e-485b-534a-58b88b7f4435.jpg"
                        width="64" />
                    <div>
                        <p class="font-semibold">Megan Y. Garcia</p>
                        <div class="text-yellow-400 text-sm">
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star-half-alt"> </i>
                        </div>
                    </div>
                </div>
                <p class=" text-sm">
                    "I love the variety of courses and the supportive community."
                </p>
                <img alt="Woman doing yoga pose for fitness testimonial" class="rounded-md w-full object-cover"
                    height="90"
                    src="https://storage.googleapis.com/a1aa/image/5db7250c-49df-4f08-c9fa-8a4032588235.jpg"
                    width="160" />
            </div>
            <!-- Testimonial 4 -->
            <div class="space-y-3">
                <div class="flex items-center space-x-3">
                    <img alt="User 4 portrait, man smiling" class="rounded-full w-16 h-16 object-cover"
                        height="64"
                        src="https://storage.googleapis.com/a1aa/image/8543eae8-ee64-4675-fcf7-5cb665500199.jpg"
                        width="64" />
                    <div>
                        <p class="font-semibold">John Doe</p>
                        <div class="text-yellow-400 text-sm">
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star"> </i>
                            <i class="fas fa-star-half-alt"> </i>
                        </div>
                    </div>
                </div>
                <p class=" text-sm">
                    "The best online fitness platform I've used. Great trainers and
                    content."
                </p>
                <img alt="Man lifting weights for fitness testimonial" class="rounded-md w-full object-cover"
                    height="90"
                    src="https://storage.googleapis.com/a1aa/image/d4cf3466-6408-400a-1c1a-02758fcd446b.jpg"
                    width="160" />
            </div>
        </div>
    </section>

    <img src="https://cdn.glitch.global/9c548a79-aa82-43bf-9055-04e5b406e24b/Rectangle%2021.png?v=1746712843592" class="mx-auto max-w-7xl" />

    <!-- Pricing -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">Pricing</h2>
            <p class="mt-1 text-gray-600">Choose the Payment Option that Works Best for You and Start Your Fitness
                Journey Today</p>
        </div>
        <!-- End Title -->

        <!-- Switch -->
        <div class="flex justify-center items-center gap-x-3">
            <label for="pricing-switch" class="text-sm text-gray-800">Monthly</label>
            <label for="pricing-switch" class="relative inline-block w-11 h-6 cursor-pointer">
                <input type="checkbox" id="pricing-switch" class="peer sr-only" checked>
                <span
                    class="absolute inset-0 bg-gray-200 rounded-full transition-colors duration-200 ease-in-out peer-checked:bg-green-600 peer-disabled:opacity-50 peer-disabled:pointer-events-none"></span>
                <span
                    class="absolute top-1/2 start-0.5 -translate-y-1/2 size-5 bg-white rounded-full shadow-xs transition-transform duration-200 ease-in-out peer-checked:translate-x-full"></span>
            </label>
            <label for="pricing-switch" class="relative text-sm text-gray-800">
                Annually
                <span class="absolute -top-10 start-auto -end-28">
                    <span class="flex items-center">
                        <svg class="w-14 h-8 -me-6" width="45" height="25" viewBox="0 0 45 25"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M43.2951 3.47877C43.8357 3.59191 44.3656 3.24541 44.4788 2.70484C44.5919 2.16427 44.2454 1.63433 43.7049 1.52119L43.2951 3.47877ZM4.63031 24.4936C4.90293 24.9739 5.51329 25.1423 5.99361 24.8697L13.8208 20.4272C14.3011 20.1546 14.4695 19.5443 14.1969 19.0639C13.9242 18.5836 13.3139 18.4152 12.8336 18.6879L5.87608 22.6367L1.92723 15.6792C1.65462 15.1989 1.04426 15.0305 0.563943 15.3031C0.0836291 15.5757 -0.0847477 16.1861 0.187863 16.6664L4.63031 24.4936ZM43.7049 1.52119C32.7389 -0.77401 23.9595 0.99522 17.3905 5.28788C10.8356 9.57127 6.58742 16.2977 4.53601 23.7341L6.46399 24.2659C8.41258 17.2023 12.4144 10.9287 18.4845 6.96211C24.5405 3.00476 32.7611 1.27399 43.2951 3.47877L43.7049 1.52119Z"
                                fill="currentColor" class="fill-gray-300" />
                        </svg>
                        <span
                            class="mt-3 inline-block whitespace-nowrap text-[11px] leading-5 font-semibold uppercase bg-green-600 text-white rounded-full py-1 px-2.5">Save
                            up to 10%</span>
                    </span>
                </span>
            </label>
        </div>
        <!-- End Switch -->

        <!-- Grid -->
        <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:items-center">
            <!-- Card -->
            <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
                <h4 class="font-medium text-lg text-gray-800">Free</h4>
                <span class="mt-7 font-bold text-5xl text-gray-800">Free</span>
                <p class="mt-2 text-sm text-gray-500">Forever free</p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-green-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            1 user
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-green-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Plan features
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-green-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Product support
                        </span>
                    </li>
                </ul>

                <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50"
                    href="#">
                    Sign up
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col border-2 border-green-600 text-center shadow-xl rounded-xl p-8">
                <p class="mb-3"><span
                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-green-100 text-green-800">Most
                        popular</span></p>
                <h4 class="font-medium text-lg text-gray-800">Startup</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800">
                    <span class="font-bold text-2xl -me-2">$</span>
                    39
                </span>
                <p class="mt-2 text-sm text-gray-500">All the basics for starting a new business</p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-green-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            2 users
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-green-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Plan features
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-green-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Product support
                        </span>
                    </li>
                </ul>

                <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-hidden focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none"
                    href="#">
                    Sign up
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
                <h4 class="font-medium text-lg text-gray-800">Team</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800">
                    <span class="font-bold text-2xl -me-2">$</span>
                    89
                </span>
                <p class="mt-2 text-sm text-gray-500">Everything you need for a growing business</p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-green-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            5 users
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-green-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Plan features
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-green-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Product support
                        </span>
                    </li>
                </ul>

                <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50"
                    href="#">
                    Sign up
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
                <h4 class="font-medium text-lg text-gray-800">Enterprise</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800">
                    <span class="font-bold text-2xl -me-2">$</span>
                    149
                </span>
                <p class="mt-2 text-sm text-gray-500">Advanced features for scaling your business</p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-green-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            10 users
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-green-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Plan features
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-green-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800">
                            Product support
                        </span>
                    </li>
                </ul>

                <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50"
                    href="#">
                    Sign up
                </a>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->


    </div>
    <!-- End Pricing -->

    <img src="https://cdn.glitch.global/9c548a79-aa82-43bf-9055-04e5b406e24b/Frame%20168.png?v=1746712832534" class="mx-auto" />

    <!-- Footer -->
    <footer class="  border-t border-[#0f2a3a] py-12">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <img alt="Digifitness logo, green square with white DF letters" class="w-8 h-8" height="32"
                        src="https://storage.googleapis.com/a1aa/image/a7088ece-c446-4481-62c2-113c500c70c8.jpg"
                        width="32" />
                    <span class="font-montserrat font-bold text-green-500 text-xl tracking-wide">
                        DIGIFITNESS
                    </span>
                </div>
                <p class="text-gray-400 mb-4 max-w-xs">
                    400 University Drive, Suite 200, San Francisco, CA 94132
                </p>
                <div class="flex space-x-4 text-green-500 text-lg">
                    <a aria-label="Facebook" class="hover:text-green-600" href="#">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                    <a aria-label="Twitter" class="hover:text-green-600" href="#">
                        <i class="fab fa-twitter"> </i>
                    </a>
                    <a aria-label="Instagram" class="hover:text-green-600" href="#">
                        <i class="fab fa-instagram"> </i>
                    </a>
                    <a aria-label="LinkedIn" class="hover:text-green-600" href="#">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                </div>
                <button class="mt-6 bg-green-500 hover:bg-green-600 transition  font-semibold rounded px-6 py-2">
                    Subscribe
                </button>
            </div>
            <div>
                <h5 class="font-semibold mb-4">Useful Links</h5>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li>
                        <a class="hover:text-green-500" href="#"> Home </a>
                    </li>
                    <li>
                        <a class="hover:text-green-500" href="#"> Courses </a>
                    </li>
                    <li>
                        <a class="hover:text-green-500" href="#"> Workouts </a>
                    </li>
                    <li>
                        <a class="hover:text-green-500" href="#"> Nutrition </a>
                    </li>
                    <li>
                        <a class="hover:text-green-500" href="#"> Blog </a>
                    </li>
                    <li>
                        <a class="hover:text-green-500" href="#"> FAQs </a>
                    </li>
                </ul>
            </div>
            <div>
                <h5 class="font-semibold mb-4">Contact Us</h5>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li>Phone: (123) 456-7890</li>
                    <li>Email: support@digifitness.com</li>
                    <li>Fax: (123) 456-7891</li>
                    <li>Address: 400 University Drive, Suite 200</li>
                </ul>
            </div>
            <div>
                <h5 class="font-semibold mb-4">Newsletter</h5>
                <p class="text-gray-400 mb-4 text-sm">
                    Subscribe to our newsletter to get the latest updates and offers.
                </p>
                <form class="flex space-x-2">
                    <input class="flex-grow rounded px-3 py-2 text-black text-sm border" placeholder="Your email"
                        type="email" />
                    <button class="bg-green-500 hover:bg-green-600 transition  font-semibold rounded px-4 py-2 text-sm"
                        type="submit">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
        <p class="text-center text-gray-600 text-xs mt-10">
            © 2024 Digifitness. All rights reserved. Terms of Service | Privacy
            Policy
        </p>
    </footer>


</body>

</html>
