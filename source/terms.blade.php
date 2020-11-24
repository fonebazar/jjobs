@extends('_layouts.master')

@section('content')

<main class="main">
<section class="text-gray-700 body-font">
    <div class="container flex flex-col px-5 py-24 mx-auto">
        <div class="mx-auto lg:w-4/6">
            <div class="h-64 overflow-hidden rounded-lg">
                <div class="object-cover object-center w-full h-full font-extrabold text-center text-white bg-purple-200">
                    Terms & Conditions
                </div>
            </div>
            <div class="flex flex-col mt-10 sm:flex-row">
                <div class="text-center sm:w-1/3 sm:pr-8 sm:py-8">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 text-gray-400 bg-gray-200 rounded-full">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex flex-col items-center justify-center text-center">
                        <h2 class="mt-4 text-lg font-medium text-gray-900 title-font">Janakpur Job dot com</h2>
                        <div class="w-12 h-1 mt-2 mb-4 bg-indigo-500 rounded"></div>
                        <p class="text-base text-gray-600">All the job listings in Janakpur Job dot com are from respective companies and It does not guarantee jobs or payables.</p>
                    </div>
                </div>
                <div
                    class="pt-4 mt-4 text-center border-t border-gray-300 sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l sm:border-t-0 sm:mt-0 sm:text-left">
                    <p class="mb-4 text-lg leading-relaxed">All the job listings in Janakpur Job dot com are from respective companies and It does not guarantee jobs or payables.
                        Please read the listings carefully and cross-check before applying to any jobs.
                    </p>
                    <a href="mailto:info.ejanakpur@gmail.com" class="inline-flex items-center text-indigo-500">Report Issue
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection
