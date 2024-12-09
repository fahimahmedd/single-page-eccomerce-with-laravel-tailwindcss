<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.maateen.me/solaiman-lipi/font.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- Header Section -->
    <header class="header bg-emerald-800">
        <div class="container">
            <div class="logo max-w-60 mx-auto">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="">
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero bg-emerald-700 pt-20 py-32">
            <div class="container">
                <div class="max-w-6xl mx-auto text-center">
                    <h1 class="text-5xl font-black text-white leading-[65px]">রিসিভ করার <span class="text-amber-300">১০
                            দিনের মধ্যে কোনো সমস্যা হলে,</span> আপনার সম্পূর্ণ টাকা ফেরত দিয়ে দেওয়া হবে</h1>
                    <div class="swiper productSwipper mt-10 pb-10">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product-item border-2 rounded-xl border-white overflow-hidden">
                                    <img src="{{ asset('assets/images/product/i1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item border-2 rounded-xl border-white overflow-hidden">
                                    <img src="{{ asset('assets/images/product/i2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item border-2 rounded-xl border-white overflow-hidden">
                                    <img src="{{ asset('assets/images/product/i3.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item border-2 rounded-xl border-white overflow-hidden">
                                    <img src="{{ asset('assets/images/product/i1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="w-100 text-center mt-10">
                    <a href="#"
                        class="px-10 py-3 bg-orange-500 hover:bg-orange-600 font-bold text-white  text-2xl rounded-xl">
                        অর্ডার করতে চাই </a>
                </div>
            </div>
        </section>
        <div class="wave-shape rotate-180">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none"
                class="h-[44px] w-full z-index-[-1]">
                <path class="elementor-shape-fill" fill="#fff"
                    d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7	s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7	c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3	c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6	c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7	C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5	c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1	c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7	c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6	C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8	c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2	C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3	C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1	z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1	c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z">
                </path>
                <path class="elementor-shape-fill"
                    d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C267.7,18.8,269.7,18,269.6,18z">
                </path>
                <path class="elementor-shape-fill"
                    d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2	S227.6,9.9,227.4,9.8z">
                </path>
                <path class="elementor-shape-fill"
                    d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4	C206.4,12.9,204.6,13.5,204.5,13.4z">
                </path>
                <path class="elementor-shape-fill"
                    d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6	S201,10.7,201,10.6z">
                </path>
                <path class="elementor-shape-fill"
                    d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C152.6,27.5,154.6,26.8,154.5,26.7z">
                </path>
                <path class="elementor-shape-fill"
                    d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6	c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z">
                </path>
                <path class="elementor-shape-fill"
                    d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0	C76.9,11.5,75.3,12.5,75.5,12.6z">
                </path>
                <path class="elementor-shape-fill"
                    d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4	C19.9,13.7,15.7,13.3,15.6,13.2z">
                </path>
            </svg>
        </div>

        <!-- Customer Review Section -->
        <section class="section-padding">
            <div class="container">
                <div class="text-5xl text-center font-bold text-primary">আমাদের কাস্টমার রিভিউ</div>
                <div class="swiper reviewSwipper mt-10 pb-10">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="review-item border-2 rounded-xl border-black overflow-hidden">
                                <img src="{{ asset('assets/images/review/r1.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-item border-2 rounded-xl border-black overflow-hidden">
                                <img src="{{ asset('assets/images/review/r2.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-item border-2 rounded-xl border-black overflow-hidden">
                                <img src="{{ asset('assets/images/review/r3.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-item border-2 rounded-xl border-black overflow-hidden">
                                <img src="{{ asset('assets/images/review/r4.jpeg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- Product Feature Section -->
        <section class="section-padding bg-sky-100">
            <div class="container">
                <div
                    class="offer-container max-w-xl mx-auto px-10 text-center py-10 border-4 rounded-xl border-[#2a3a8a]">
                    <h2 class="text-4xl text-[#2a3a8a]"> কেজিতে <span
                            class="text-5xl text-[#f82d6f] font-bold">১৩০</span> টাকা ছাড়</h2>

                    <a href="#">
                        <div
                            class="flex items-center py-2 rounded-xl mx-auto text-center mt-8 justify-center border-[6px] border-[#f82d6f] bg-[#f2d469] hover:border-[#2a3a8a]">
                            <span class="text-3xl mr-5">অর্ডার করতে ক্লিক করুন</span> <img
                                src="{{ asset('assets/images/cart.png') }}" alt="">
                        </div>
                    </a>
                </div>

                <div class="feature-content max-w-6xl mx-auto mt-20 position-relative bg-white p-10 rounded-3xl text-center shadow-2xl"
                    style="box-shadow: 0px -1px 24px 0px #1e85d2;">
                    <ul class="text-xl text-[#2a3a8a]">
                        <li> <span class="inline-block font-bold px-8 py-4 rounded-xl mb-5"
                                style="box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.1);">পাকা আম দিয়ে তৈরি করে থাকি,,
                                কোনো ধরনের কেমিক্যাল বা রং মিক্স করা হয় না।</span> </li>
                        <li><span class="inline-block px-8 py-4 rounded-xl mb-5"
                                style="box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.1);">টক ঝাল মিষ্টি হওয়ায় খেতে খুব
                                সুস্বাদু হয়ে থাকে।</span></li>

                        <li><span class="inline-block px-8 py-4 rounded-xl mb-5"
                                style="box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.1);">আমরা অর্ডার নেয়ার পর আমসত্ত্ব
                                তৈরি করে থাকি সুতরাং আমাদের আমসত্ত্ব সুস্বাদু, টাটকা এবং ভেজালমুক্ত হয়।</span></li>
                        <li><span class="inline-block px-8 py-4 rounded-xl mb-5"
                                style="box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.1);">আমি ও আমার পরিবার যেই আমসত্ত্ব
                                খাই আপনাকেও সেটাই দিচ্ছি।</span></li>
                        <li><span class="inline-block px-8 py-4 rounded-xl mb-5"
                                style="box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.1);">আমরা ভালো মানের ছোট
                                বাচ্চাদেরকে কেমিক্যাল যুক্ত খাবার না দিয়ে পুষ্টি কর খাবার দিন।</span></li>
                        <li><span class="inline-block px-8 py-4 rounded-xl mb-5"
                                style="box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.1);">ছোট বড় সকলের মুখের রুচি ফিরিয়ে
                                আনবে টক ঝাল মিষ্টি আমসত্ত্ব আচার।</span></li>
                        <li><span class="inline-block px-8 py-4 rounded-xl mb-5"
                                style="box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.1);">এরপরেও থাকছে ১০ দিনের
                                ক্যাশব্যাগ গ্যারেন্টি। রিসিভ করার ১০ দিনের মধ্যে কোনো সমস্যা হলে, আপনার সম্পূর্ণ টাকা
                                ফেরত দিয়ে দেওয়া হবে।</span></li>
                    </ul>
                    <a href="#">
                        <div
                            class="flex items-center max-w-lg	 py-2 rounded-xl mx-auto text-center mt-10 justify-center border-[6px] border-[#f82d6f] bg-[#f2d469] hover:border-[#2a3a8a]">
                            <span class="text-3xl mr-5">অর্ডার করতে ক্লিক করুন</span> <img
                                src="{{ asset('assets/images/cart.png') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Order Section  -->
        <section class="section-padding bg-slate-50">
            <div class="container">
                <h2 class="text-5xl text-center font-bold text-primary">তাই আর দেরি না করে আজই অর্ডার করুন</h2>
                <form action="">
                    <div class="max-w-6xl m-auto mt-16">
                        <div class="grid grid-cols-3 gap-4">
                            <label class="cart-card" aria-hidden="true">
                                <input name="plan" class="radio-round" type="radio" checked>
                                </span>
                                <div class="flex border cursor-pointer p-5 rounded-lg"
                                    style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                    <div class="max-w-24">
                                        <img src="{{ asset('assets/images/product/i2.jpg') }}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-xl font-bold">হোম মেইড আমসত্ত্ব আচার </h3>
                                        <h4 class="text-sm font-bold">Size: 500 Gram</h4>
                                        <h2 class="text-2xl mt-2 font-bold text-primary">৳ 530 </h2>
                                    </div>
                                </div>
                            </label>
                            <label class="cart-card">
                                <input name="plan" class="radio-round" type="radio">
                                <div class="flex border cursor-pointer p-5 rounded-lg"
                                    style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                    <div class="max-w-24">
                                        <img src="{{ asset('assets/images/product/i1.jpg') }}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-xl font-bold">হোম মেইড আমসত্ত্ব আচার </h3>
                                        <h4 class="text-sm font-bold">Size: 1 KG</h4>
                                        <h2 class="text-2xl mt-2 font-bold text-primary">৳ 930 </h2>
                                    </div>
                                </div>
                            </label>
                            <label class="cart-card" aria-hidden="true">
                                <input name="plan" class="radio-round" type="radio">
                                </span>
                                <div class="flex border cursor-pointer p-5 rounded-lg"
                                    style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                    <div class="max-w-24">
                                        <img src="{{ asset('assets/images/product/i2.jpg') }}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-xl font-bold">হোম মেইড আমসত্ত্ব আচার </h3>
                                        <h4 class="text-sm font-bold">Size: 2 KG</h4>
                                        <h2 class="text-2xl mt-2 font-bold text-primary">৳ 1770 </h2>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="grid grid-cols-2 gap-20 mt-12">
                            <div>
                                <h2 class="text-2xl font-bold font-sans text-primary border-b pb-5"> Billing Details
                                </h2>
                                <div class="mt-5">
                                    <label class="block text-text_color text-md mb-2">আপনার নাম লিখুন <span
                                            class="text-red-700">*</span></label>
                                    <input
                                        class="appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:shadow-outline shipping_name focus:outline-none"
                                        type="text" name="name" value="" required="">
                                </div>

                                <div class="mt-5">
                                    <label class="block text-text_color text-md mb-2">আপনার মোবাইল নাম্বারটি লিখুন
                                        <span class="text-red-700">*</span></label>
                                    <input
                                        class="appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:shadow-outline shipping_name focus:outline-none"
                                        type="text" name="name" value="" required="">
                                </div>

                                <div class="mt-5">
                                    <label class="block text-text_color text-md mb-2">আপনার ঠিকানা লিখুন <span
                                            class="text-red-700">*</span></label>
                                    <textarea
                                        class="appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:shadow-outline shipping_name focus:outline-none h-24"
                                        type="text" name="name" value="" required=""></textarea>
                                </div>

                                <h3 class="text-lg font-bold font-sans pt-5"> Payment Method </h3>
                                <div
                                    class="flex items-center justify-center rounded-lg bg-blue-200	 py-3 px-10 border mt-2">
                                    <span class="mr-4 font-sans text-md font-bold">Cash On Delivery</span> <img
                                        class="max-w-8" src="{{ asset('assets/images/transaction.png') }}"
                                        alt="">
                                </div>

                            </div>
                            <div>
                                <h2 class="text-2xl font-bold font-sans text-primary border-b pb-5"> Your order </h2>
                                <div class="p-5 border-2 border-primary mt-5 rounded-xl">
                                    <div class="flex items-center justify-between border-b border-dashed pb-1">
                                        <div class="font-bold font-sans">Product </div>
                                        <div class="font-bold font-sans">Amount</div>
                                    </div>

                                    <div class="flex py-3 items-center justify-between border-b border-dashed">
                                        <div class="flex">
                                            <div class="max-w-20">
                                                <img src="{{ asset('assets/images/product/i1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="ml-3">
                                                <h3 class="text-md font-bold">হোম মেইড আমসত্ত্ব আচার</h3>
                                                <h4 class="text-xs mt-1 text-gray-500">Size: 1 KG</h4>
                                                <div class="flex items-center mt-2">
                                                    <button class="h-7 w-7 text-xl bg-primary rounded-sm text-white"> -
                                                    </button>
                                                    <input type="number" class="max-w-16 text-center mx-1 border"
                                                        placeholder="1">
                                                    <button class="h-7 w-7 text-lg bg-primary rounded-sm text-white"> +
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-md text-gray-600 font-bold">৳ 1770</div>
                                    </div>

                                    <div class="flex py-3 items-center justify-between border-b border-dashed">
                                        <div class="text-sm font-bold text-gray-600 font-sans">Subtotal </div>
                                        <div class="font-bold text-gray-600">৳ 1770</div>
                                    </div>
                                    <div class="flex py-3 items-center justify-between border-b border-dashed">
                                        <div class="text-sm font-bold text-gray-600 font-sans">Shipping Charge</div>
                                        <div class="text-gray-600">
                                            <label class="text-sm mb-2"><input type="radio" name="shipping_area"
                                                    value="Outside Dhaka" checked=""> ঢাকার বাহিরে: ৳
                                                120.00</label>
                                            <br>
                                            <label class="text-sm mb-2"><input type="radio" name="shipping_area"
                                                    value="Inside Dhaka"> ঢাকার ভিতরে ৳ 60.00</label>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between pt-3">
                                        <div class="font-bold font-sans">Total </div>
                                        <div class="font-bold text-black">৳ 1770</div>
                                    </div>

                                    <button
                                        class="flex items-center py-2 px-10 rounded-xl mx-auto text-center mt-10 justify-center border-[4px] border-[#f82d6f] bg-[#f2d469] hover:border-[#2a3a8a]">
                                        <img class="max-w-10" src="{{ asset('assets/images/cart.png') }}"
                                            alt=""> <span class="text-2xl ml-2 font-sans font-bold"> Place
                                            Order BDT 1050 </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </section>


    </main>

    <footer>
        <div class="footer-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none"
                class="h-[44px] w-full z-index-[-1]">
                <path class="elementor-shape-fill" fill="#fff"
                    d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7	s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7	c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3	c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6	c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7	C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5	c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1	c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7	c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6	C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8	c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2	C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3	C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1	z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1	c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z">
                </path>
                <path class="elementor-shape-fill"
                    d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C267.7,18.8,269.7,18,269.6,18z">
                </path>
                <path class="elementor-shape-fill"
                    d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2	S227.6,9.9,227.4,9.8z">
                </path>
                <path class="elementor-shape-fill"
                    d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4	C206.4,12.9,204.6,13.5,204.5,13.4z">
                </path>
                <path class="elementor-shape-fill"
                    d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6	S201,10.7,201,10.6z">
                </path>
                <path class="elementor-shape-fill"
                    d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C152.6,27.5,154.6,26.8,154.5,26.7z">
                </path>
                <path class="elementor-shape-fill"
                    d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6	c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z">
                </path>
                <path class="elementor-shape-fill"
                    d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0	C76.9,11.5,75.3,12.5,75.5,12.6z">
                </path>
                <path class="elementor-shape-fill"
                    d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4	C19.9,13.7,15.7,13.3,15.6,13.2z">
                </path>
            </svg>
        </div>



        <div class="footer bg-emerald-800 pt-20 pb-5">
            <div class="container">
                <div class="grid grid-cols-3 gap-20 max-w-5xl mx-auto border-b border-white py-10">
                    <div>
                        <h2 class="text-xl font-bold uppercase text-[#f1c11c]">Contact Us</h2>
                        <h3 class="text-lg text-white mt-5 flex items-center"> <ion-icon class="mr-2"
                                name="call-outline"></ion-icon> 01312888194 </h3>
                        <h3 class="text-lg text-white mt-2 flex items-center"> <ion-icon class="mr-2"
                                name="mail-outline"></ion-icon> khatianainbox@gmail.com </h3>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold uppercase text-[#f1c11c]">Important Link</h2>
                        <ul class="text-md text-white mt-5">
                            <li class="hover:text-black"><a href="#"> Refund Policy </a></li>
                            <li class="mt-2 hover:text-black"><a href="#"> Privacy Policy </a></li>
                            <li class="mt-2 hover:text-black"><a href="#"> Terms and Conditions </a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold uppercase text-[#f1c11c]">About Us</h2>
                        <h3 class="text-lg text-white mt-5 flex items-center">01312888194</h3>
                        <ul class="flex items-center gap-3 mt-2 text-white text-2xl">
                            <li><a href="#"> <ion-icon name="logo-facebook"></ion-icon> </a></li>
                            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-white text-md text-center pt-5">© 2024 All Rights Reserved.</div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#065f46',
                        }
                    }
                }
            }
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".productSwipper", {
            slidesPerView: 3,
            spaceBetween: 20,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".reviewSwipper", {
            slidesPerView: 3,
            spaceBetween: 20,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

</body>

</html>
