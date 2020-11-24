@extends('_layouts.master')

@section('content')

<main class="main">
    <div class="flex py-12 bg-white">
        <div class="container flex flex-col items-center justify-center px-4 pt-2 pb-8 mx-auto sm:px-6 lg:px-8">
            <p
                class="inline-block px-3 py-1 mb-4 text-xs font-semibold leading-tight tracking-widest text-orange-700 uppercase bg-orange-200 rounded-full">
                Janakpur Job
            </p>
            <h2
                class="flex justify-center font-sans text-3xl font-bold leading-none tracking-tight text-center text-gray-900 b-6 sm:text-4xl md:mx-auto">
                <svg class="w-8 h-8 mt-1 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                    </path>
                </svg>
                <span class="relative">Recent Job Vacancy</span> </h2>
            <a href="#" class="mt-3 text-sm font-semibold text-orange-600 underline">View more Job vacancies here</a>
    
            <div class="grid max-w-lg gap-5 mx-auto mt-12 md:grid-cols-2 lg:grid-cols-3 md:max-w-none">
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="relative flex-shrink-0">
                        <div class="object-cover w-full h-56 font-extrabold text-center text-white bg-purple-200">
                            Xyz Comapny</div>
                        <span
                            class="absolute bottom-0 right-0 inline-flex items-center px-3 py-1 mr-4 -mb-3 text-xs font-medium leading-tight text-gray-800 bg-gray-100 border rounded-full">
                            Status : Open</span>
                    </div>
                    <div class="flex flex-col justify-between flex-1">
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div>
                                <a href="/sales" class="block text-xl font-semibold leading-7 text-gray-900">Sales
                                    Manager</a>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    Our growing company is seeking to hire a Sales Manager who will be responsible for
                                    supervising and organizing our sales
                                    team. You will be in charge of managing organizational sales by developing business
                                    plans, meeting planned goals, and
                                    coordinating with our marketing department on lead generation. You will also be tasked
                                    with overseeing the activities
                                    and performance of your sales team by tracking sales goals, setting individual sales
                                    targets, and facilitate the ongoing
                                    training of your salespeople.
                                </p>
                            </div>
                            <p class="mt-3 text-sm font-medium leading-5">
                                <a href="#" class="inline-block">
                                    <span
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium leading-tight text-orange-800 bg-orange-100 rounded-full">Sales-Manager</span>
                                </a>
                            </p>
                        </div>
                        <div class="flex items-center p-6 bg-gray-100">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <img class="w-10 h-10 rounded-full" src="/assets/img/avatar.svg" alt="logo" />
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium leading-5 text-gray-900">
                                    <a href="#" class="hover:underline">XYZ Company</a>
                                </p>
                                <div class="text-xs leading-5 text-gray-600">
                                    <time datetime="2020-05-31">Nov 21, 2020</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="relative flex-shrink-0">
                        <div class="object-cover w-full h-56 font-extrabold text-center text-white bg-blue-200">ABC Company
                        </div>
                        <span
                            class="absolute bottom-0 right-0 inline-flex items-center px-3 py-1 mr-4 -mb-3 text-xs font-medium leading-tight text-gray-800 bg-gray-100 border rounded-full">
                            Status: Open</span>
                    </div>
                    <div class="flex flex-col justify-between flex-1">
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div>
                                <a href="/accountant" class="block text-xl font-semibold leading-7 text-gray-900">
                                    Account Manager</a>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    We are looking for a master multi-tasker with excellent communication skills and an
                                    upbeat attitude. Candidates should
                                    be able to assist management and all visitors to the company by handling office tasks,
                                    providing polite and professional
                                    assistance via phone, mail, and e-mail, making reservations or travel arrangements, and
                                    generally being a helpful and
                                    positive presence in the workplace.</p>
                            </div>
                            <p class="mt-3 text-sm font-medium leading-5">
                                <a href="#" class="inline-block">
                                    <span
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium leading-tight text-red-800 bg-red-100 rounded-full">Accountant</span>
                                </a>
                            </p>
                        </div>
                        <div class="flex items-center p-6 bg-gray-100">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <img class="w-10 h-10 rounded-full" src="/assets/img/avatar.svg" alt="logo" />
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium leading-5 text-gray-900">
                                    <a href="#" class="hover:underline">ABC Company</a>
                                </p>
                                <div class="text-xs leading-5 text-gray-600">
                                    <time datetime="2020-06-03">Nov 23, 2020</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="relative flex-shrink-0">
                        <div class="object-cover w-full h-56 font-extrabold text-center text-white bg-indigo-200">Demo
                            Company</div>
                        <span
                            class="absolute bottom-0 right-0 inline-flex items-center px-3 py-1 mr-4 -mb-3 text-xs font-medium leading-tight text-gray-800 bg-gray-100 border rounded-full">
                            Status: Open</span>
                    </div>
                    <div class="flex flex-col justify-between flex-1">
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div>
                                <a href="/demo" class="text-xl font-semibold leading-7 text-gray-900">Data Entry
                                    Executive</a>
                                <p class="mt-3 text-base leading-6 text-gray-500">We are looking for a Data Entry Executive
                                    to type information into our database from paper documents. The ideal candidate
                                    will be computer savvy and a fast typist with a keen eye for detail. You will report to
                                    a data manager or another senior
                                    data team member. Understanding of data confidentiality principles is compulsory.</p>
                            </div>
                            <p class="mt-4 text-sm font-medium leading-5">
                                <a href="#" class="inline-block">
                                    <span
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium leading-tight text-red-800 bg-red-100 rounded-full">
                                        Computer-Operator</span>
                                </a>
                                <a href="#" class="inline-block">
                                    <span
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium leading-tight text-purple-800 bg-purple-100 rounded-full">Data-Entry</span>
                                </a>
                            </p>
                        </div>
                        <div class="flex items-center p-6 bg-gray-100">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <img class="w-10 h-10 rounded-full" src="/assets/img/avatar.svg" alt="logo" />
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium leading-5 text-gray-900">
                                    <a href="#" class="hover:underline">Demo Company</a>
                                </p>
                                <div class="text-xs leading-5 text-gray-600">
                                    <time datetime="2020-06-04">Nov 24, 2020</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection