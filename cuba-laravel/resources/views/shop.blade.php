@extends('layouts.app')

@section('title', 'Product Details | Send Love to Cuba')

@push('styles')
    <style>
        html {
                    -webkit-text-size-adjust: 100%;
                    text-size-adjust: 100%;
                }

                body {
                    font-size: 1rem;
                }

                @media (min-width: 768px) {
                    body {
                        font-size: 1.12rem;
                    }
                }

                header nav a.font-heading,
                #mobile-sidebar nav a.font-heading {
                    font-size: 19px !important;
                }

                .hide-scrollbar {
                    -ms-overflow-style: none;
                    scrollbar-width: none;
                }

                .hide-scrollbar::-webkit-scrollbar {
                    display: none;
                }

                .text-\[10px\],
                .text-\[11px\],
                .text-\[13px\],
                .text-\[14px\],
                .text-\[15px\],
                .text-\[16px\],
                .text-\[17px\],
                .text-\[0\.95rem\],
                .text-\[1rem\],
                .text-\[1\.05rem\],
                .text-\[1\.08rem\] {
                    font-size: 1.12rem !important;
                }

                .product-tab[aria-selected="true"] {
                    background: #c6232f;
                    color: #ffffff;
                    border-color: #c6232f;
                }

                .product-shell {
                    background: #ffffff;
                }

                .product-panel {
                    display: none;
                }

                .product-panel.is-active {
                    display: block;
                }

                .shop-display {
                    font-family: "Bebas Neue", sans-serif;
                    font-weight: 400;
                    letter-spacing: 0.01em;
                }

                .shop-inter {
                    font-family: "Inter", sans-serif;
                }

                .product-copy p {
                    color: rgba(3, 9, 20, 0.6);
                }

                .details-divider {
                    border-color: #edf1f6;
                }
                .shop-sec {
                    font-weight: 500;
                }

                #related-products .product-card h4,
                #service-features h5 {
                    font-weight: 500;
                }

                #service-features p {
                    font-family: "Inter", sans-serif !important;
                    font-size: 0.96rem !important;
                    line-height: 1.28 !important;
                }

                #related-products .product-card h4 {
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                }

                #related-products .product-card {
                    min-height: 420px;
                    padding-top: 1.75rem;
                    padding-bottom: 1.75rem;
                }

                #related-products .product-card > div.relative.mt-3.mb-4 {
                    height: 180px;
                    margin-bottom: 1rem;
                }

                #related-products .product-card > div.relative.mt-3.mb-4 img {
                    max-height: 200px;
                }

                #related-products .product-card .mt-auto {
                    display: flex;
                    flex-direction: column;
                    gap: 0.7rem;
                    padding-top: 1rem;
                }

                #related-products .product-card .mt-auto > * {
                    margin-top: 0 !important;
                }

                #related-products .product-card p[class*="text-brand-red"] {
                    color: #C6232F !important;
                    font-weight: 500 !important;
                }

                #related-products .product-card .rating-score {
                    color: #000000 !important;
                    font-weight: 400 !important;
                }

                #related-products .product-card p.text-\[15px\].text-\[\#294678\] {
                    font-weight: 500 !important;
                }

                #related-products .related-carousel-viewport {
                    overflow-x: hidden;
                    overflow-y: visible;
                    padding-bottom: 78px;
                    margin-bottom: -78px;
                }

                #related-products .related-carousel-track {
                    display: flex;
                    gap: 1rem;
                    transition: transform 0.4s ease;
                    will-change: transform;
                }

                #related-products .related-carousel-slide {
                    flex: 0 0 100%;
                    min-width: 0;
                }

                @media (min-width: 640px) {
                    #related-products .related-carousel-slide {
                        flex-basis: calc((100% - 1rem) / 2);
                    }
                }

                @media (min-width: 1280px) {
                    #related-products .related-carousel-slide {
                        flex-basis: calc((100% - 3rem) / 4);
                    }
                }

                span.inline-flex.min-h-\[42px\] {
                    font-weight: 500 !important;
                }
            
                .product-tab,
                button.inline-flex,
                a.inline-flex {
                    font-size: 1.28rem !important;
                    line-height: 1 !important;
                }

                .product-tab *,
                button.inline-flex > span,
                button.inline-flex > div,
                a.inline-flex > span,
                a.inline-flex > div {
                    font-size: inherit !important;
                    line-height: 1 !important;
                }
    </style>
@endpush

@section('content')
    <main>
            <section class="relative overflow-hidden py-[96px] md:py-[118px]">
                <img src="{{ asset("assets/Product banner image.png") }}" alt="Container port"
                    class="absolute inset-0 h-full w-full object-cover" />
                <div
                    class="absolute inset-0 bg-[linear-gradient(90deg,rgba(9,18,34,0.86),rgba(9,18,34,0.76),rgba(9,18,34,0.86))]">
                </div>
                <div class="relative mx-auto max-w-[1540px] px-10 text-center md:px-16 xl:px-24">
                    <h1 class="font-heading text-[clamp(2.6rem,5.3vw,5rem)] uppercase leading-[0.9] text-white">Product
                        Details</h1>
                    <p class="shop-inter mt-3 text-[15px] text-white/85"><a href="{{ route('home') }}" class="underline-offset-2 hover:underline">Home</a> <span class="mx-2">&gt;</span> Shop <span class="mx-2">&gt;</span> Product Details
                    </p>
                </div>
            </section>


            <section class="bg-white pb-[72px] pt-[26px] md:pb-[96px] md:pt-[40px]">
                <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
                    <div class="grid gap-10 xl:grid-cols-[548px_minmax(0,1fr)] xl:items-start xl:gap-[96px]">
                        <div class="space-y-6">
                            <div class="overflow-hidden rounded-[18px] border border-[rgba(3,9,20,0.2)] bg-white p-6">
                                <div id="main-product-display"
                                    class="h-[320px] w-full overflow-hidden rounded-[8px] bg-white sm:h-[520px]">
                                    <img src="{{ asset("assets/Grain Rice.jpg") }}" alt="Mahatma grain rice"
                                        class="h-full w-full rounded-[8px] object-contain" />
                                </div>
                            </div>

                            <div class="flex gap-[10px] overflow-x-auto pb-2 hide-scrollbar">
                                <button type="button"
                                    class="thumbnail-btn shrink-0 rounded-[10px] border border-brand-red bg-white p-[10px]"
                                    data-thumb="rice">
                                    <img src="{{ asset("assets/Grain Rice.jpg") }}" alt="Rice Grain"
                                        class="h-[92px] w-[98px] rounded-[6px] object-contain" />                                
                                    
                                </button>
                                <button type="button"
                                    class="thumbnail-btn shrink-0 rounded-[10px] border border-[#d7dde7] bg-white p-[10px]"
                                    data-thumb="maria">
                                    <img src="{{ asset("assets/mariabiscits.jpeg") }}" alt="Maria biscuits"
                                        class="h-[92px] w-[98px] rounded-[6px] object-contain" />
                                </button>
                                <button type="button"
                                    class="thumbnail-btn shrink-0 rounded-[10px] border border-[#d7dde7] bg-white p-[10px]"
                                    data-thumb="v05">
                                    <img src="{{ asset("assets/71FU01Jd3uL._SL1500_1-300x234.jpg.jpeg") }}" alt="V05 product"
                                        class="h-[92px] w-[98px] rounded-[6px] object-contain" />
                                </button>
                                <button type="button"
                                    class="thumbnail-btn shrink-0 rounded-[10px] border border-[#d7dde7] bg-white p-[10px]"
                                    data-thumb="tissue">
                                    <img src="{{ asset("assets/61pp4zaIg5L._AC_SL1500_1-300x237.jpg.jpeg") }}" alt="Tissue rolls"
                                        class="h-[92px] w-[98px] rounded-[6px] object-contain" />
                                </button>
                            </div>
                        </div>

                        <div class="self-start bg-white pt-1">
                            <div
                                class="flex flex-wrap items-center gap-3 text-[12px] font-medium uppercase tracking-[0.16em] text-[#7a8799]">
                                <span>Food</span>
                                <span class="h-1 w-1 rounded-full bg-[#b1bccd]"></span>
                                <span>Home Delivery In Cuba</span>
                            </div>

                            <h2 class="shop-display mt-4 max-w-[500px] text-[40px] uppercase leading-[43px] text-brand-ink">
                                Mahatma Extra Long Grain Rice - 20 lb Pack (4 x 5 lb Bags)
                            </h2>

                            <div class="mt-3 flex flex-wrap items-center gap-4">
                                <span class="shop-display text-[40px] uppercase leading-none text-brand-red">$119.94</span>
                                <div class="shop-inter flex items-center gap-3 text-[16px] text-[rgba(3,9,20,0.6)]">
                                    <div class="flex items-center gap-[3px] text-[#f4b400] text-[15px]">
                                        <svg viewBox="0 0 20 20" class="h-[18px] w-[18px] fill-current">
                                            <path
                                                d="m10 1.7 2.5 5.06 5.58.81-4.04 3.95.95 5.57L10 14.44l-4.99 2.65.95-5.57L1.92 7.57l5.58-.81L10 1.7Z">
                                            </path>
                                        </svg>
                                        <svg viewBox="0 0 20 20" class="h-[18px] w-[18px] fill-current">
                                            <path
                                                d="m10 1.7 2.5 5.06 5.58.81-4.04 3.95.95 5.57L10 14.44l-4.99 2.65.95-5.57L1.92 7.57l5.58-.81L10 1.7Z">
                                            </path>
                                        </svg>
                                        <svg viewBox="0 0 20 20" class="h-[18px] w-[18px] fill-current">
                                            <path
                                                d="m10 1.7 2.5 5.06 5.58.81-4.04 3.95.95 5.57L10 14.44l-4.99 2.65.95-5.57L1.92 7.57l5.58-.81L10 1.7Z">
                                            </path>
                                        </svg>
                                        <svg viewBox="0 0 20 20" class="h-[18px] w-[18px] fill-current">
                                            <path
                                                d="m10 1.7 2.5 5.06 5.58.81-4.04 3.95.95 5.57L10 14.44l-4.99 2.65.95-5.57L1.92 7.57l5.58-.81L10 1.7Z">
                                            </path>
                                        </svg>
                                        <svg viewBox="0 0 20 20" class="h-[18px] w-[18px] fill-current">
                                            <path
                                                d="m10 1.7 2.5 5.06 5.58.81-4.04 3.95.95 5.57L10 14.44l-4.99 2.65.95-5.57L1.92 7.57l5.58-.81L10 1.7Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span>02 customer reviews</span>
                                </div>
                            </div>

                            <div class="details-divider mt-6 border-t pt-7 product-copy">
                                <p class="shop-inter max-w-[640px] text-[16px] leading-[28px]">
                                    Send a staple your loved ones truly need. This bundle includes four 5 lb bags of Mahatma Extra Long Grain Rice, perfect for everyday meals. Carefully packed and delivered directly to homes across Cuba, this essential food item provides both quality and peace of mind with reliable, trackable delivery included.
                                </p>

                                <div class="shop-inter mt-5 grid gap-[2px] text-[16px] leading-[28px] text-[rgba(3,9,20,0.6)]">
                                    <div>REF: RB3</div>
                                    <div>Available: Available for home delivery in Cuba</div>
                                    <div>Delivery: Included &amp; Trackable</div>
                                </div>
                            </div>

                            <div class="mt-8 flex flex-col gap-5">
                                <div class="flex flex-wrap items-center gap-4">
                                    <span class="shop-display text-[24px] uppercase leading-none text-brand-ink">Package Size:</span>
                                    <span class="shop-inter inline-flex min-h-[40px] items-center rounded-[4.92px] bg-brand-red px-[12px] text-[16px] font-medium text-white">20 lbs (4 x 5 lb bags)</span>
                                </div>

                            <div class="flex flex-col gap-4 sm:flex-row sm:items-end">
                                <div>
                                    <label for="qty"
                                        class="shop-display mb-2 block text-[24px] uppercase leading-none text-brand-ink">Quantity:</label>
                                    <div
                                        class="inline-grid h-[48px] w-[94px] grid-cols-[1fr_24px] overflow-hidden rounded-[10px] border border-[#d0d7e2] bg-white">
                                        <input id="qty" type="number" min="1" value="1"
                                            class="shop-inter h-full w-full border-r border-[#d0d7e2] bg-white text-center text-[16px] font-medium text-brand-ink outline-none" />
                                        <div class="grid grid-rows-2">
                                            <button id="qty-plus" type="button"
                                                class="grid place-items-center border-b border-[#d0d7e2] text-[16px] leading-none text-[#778397] transition hover:bg-[#f4f6f9]">+</button>
                                            <button id="qty-minus" type="button"
                                                class="grid place-items-center text-[16px] leading-none text-[#778397] transition hover:bg-[#f4f6f9]">-</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-1 flex-col gap-3 sm:flex-row sm:items-center">
                                    <button type="button"
                                        class="shop-display inline-flex min-h-[56px] items-center justify-center gap-3 rounded-[10px] bg-[#17356d] px-7 text-[24px] uppercase leading-none text-white transition hover:bg-[#102a57]">
                                        <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor"
                                            stroke-width="1.9">
                                            <circle cx="9" cy="20" r="1.5"></circle>
                                            <circle cx="18" cy="20" r="1.5"></circle>
                                            <path d="M3 4h2l2.4 10.5H19L21 8H8"></path>
                                        </svg>
                                        Add To Cart
                                    </button>
                                    <button type="button"
                                        class="shop-display inline-flex min-h-[56px] items-center justify-center gap-3 rounded-[10px] bg-brand-red px-7 text-[24px] uppercase leading-none text-white transition hover:bg-[#ab1e28]">
                                        <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor"
                                            stroke-width="1.9">
                                            <path d="M12 21s-7-4.35-7-10a4 4 0 0 1 7-2.5A4 4 0 0 1 19 11c0 5.65-7 10-7 10z">
                                            </path>
                                        </svg>
                                        Add To Wishlist
                                    </button>
                                </div>
                            </div>
                            </div>

                            <div class="mt-7">
                                <p class="shop-display text-[24px] uppercase leading-none text-brand-ink">Share With Friends:</p>
                                <div class="mt-4 flex flex-wrap items-center gap-3">
                                    <a href="#"
                                        class="inline-flex h-[44px] w-[44px] items-center justify-center rounded-full border border-[#ccd4df] bg-white text-[#17356d] transition hover:border-brand-red hover:bg-brand-red hover:text-white"
                                        aria-label="Share on X">
                                        <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] fill-current">
                                            <path
                                                d="M18.9 7.2c.8-.1 1.5-.5 2.1-1-.3.8-.9 1.4-1.6 1.8.7 0 1.4-.3 2-.6-.5.7-1.1 1.2-1.8 1.7v.5c0 5.1-3.9 11-11 11-2.2 0-4.2-.6-5.9-1.8h.9c1.8 0 3.5-.6 4.9-1.7-1.7 0-3.1-1.1-3.6-2.7.2 0 .5.1.8.1.4 0 .7-.1 1-.1-1.8-.4-3.1-2-3.1-3.9v-.1c.5.3 1.1.5 1.7.5-1-.7-1.7-1.9-1.7-3.3 0-.7.2-1.4.5-2 1.9 2.4 4.8 3.9 8 4-.1-.3-.1-.6-.1-.9 0-2.1 1.7-3.8 3.8-3.8 1.1 0 2.1.5 2.8 1.2z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="inline-flex h-[44px] w-[44px] items-center justify-center rounded-full border border-[#ccd4df] bg-white text-[#17356d] transition hover:border-brand-red hover:bg-brand-red hover:text-white"
                                        aria-label="Share on Facebook">
                                        <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] fill-current">
                                            <path
                                                d="M13.5 21v-8.1h2.7l.4-3.2h-3.1V7.6c0-.9.2-1.6 1.6-1.6H16V3.1c-.3 0-1.4-.1-2.6-.1-2.6 0-4.4 1.6-4.4 4.7v2H6.2v3.2H9V21z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="inline-flex h-[44px] w-[44px] items-center justify-center rounded-full border border-[#ccd4df] bg-white text-[#17356d] transition hover:border-brand-red hover:bg-brand-red hover:text-white"
                                        aria-label="Share on Pinterest">
                                        <svg viewBox="0 0 24 24" class="h-[18px] w-[18px] fill-current">
                                            <path
                                                d="M12.2 3C7.4 3 4 6.4 4 10.7c0 2.7 1.5 4.2 2.4 4.2.4 0 .6-1 .6-1.3 0-.3-.8-1-1-2.4 0-2.9 2.2-5.5 5.7-5.5 2.8 0 4.8 1.6 4.8 4.3 0 2-1 5.8-3.6 5.8-1 0-1.9-.8-1.9-1.9 0-1.6 1.2-3.2 1.2-4.9 0-2.9-4.1-2.4-4.1 1.1 0 .7.1 1.4.4 2.1-.5 2.1-1.6 5.3-1.6 7.5 0 .7.1 1.4.2 2.1h.3c.3-.6 2.4-4.4 2.4-5 .1-.3.3-1.4.5-2.2.4.8 1.6 1.3 2.4 1.3 3.7 0 5.3-3.6 5.3-6.9C20 6.2 16.8 3 12.2 3z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="inline-flex h-[44px] w-[44px] items-center justify-center rounded-full border border-[#ccd4df] bg-white text-[#17356d] transition hover:border-brand-red hover:bg-brand-red hover:text-white"
                                        aria-label="Share on Instagram">
                                        <svg viewBox="0 0 24 24" class="h-[18px] w-[18px]" fill="none" stroke="currentColor"
                                            stroke-width="1.8">
                                            <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                            <circle cx="12" cy="12" r="3.5"></circle>
                                            <circle cx="17" cy="7" r="1"></circle>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white pb-[62px] pt-[30px] md:pb-[88px]">
                <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
                    <div>
                        <div class="flex flex-wrap gap-[10px] pl-2 sm:pl-6">
                            <button type="button"
                                class="product-tab shop-display rounded-t-[13px] border border-[#edf1f6] bg-[#f7f7f7] px-4 py-[13px] text-[24px] uppercase leading-none text-brand-ink transition sm:px-6"
                                data-tab="description" aria-selected="true">Description</button>
                            <button type="button"
                                class="product-tab shop-display rounded-t-[13px] border border-[#edf1f6] bg-[#f7f7f7] px-4 py-[13px] text-[24px] uppercase leading-none text-brand-ink transition sm:px-6"
                                data-tab="additional" aria-selected="false">Additional Information</button>
                            <button type="button"
                                class="product-tab shop-display rounded-t-[13px] border border-[#edf1f6] bg-[#f7f7f7] px-4 py-[13px] text-[24px] uppercase leading-none text-brand-ink transition sm:px-6"
                                data-tab="reviews" aria-selected="false">Reviews (2)</button>
                        </div>

                        <div id="panel-description"
                            class="product-panel is-active rounded-bl-[18px] rounded-br-[18px] rounded-tr-[18px] border border-[rgba(3,9,20,0.2)] bg-white px-7 py-7 sm:px-10 sm:py-8">
                            <div class="shop-inter space-y-4 text-[16px] leading-[28px] text-[rgba(3,9,20,0.6)]">
                                <p>Mahatma Extra Long Grain Rice is a trusted household staple, known for its light, fluffy
                                    texture and consistent quality. This package includes four 5 lb bags, making it ideal
                                    for families who rely on rice as a daily essential. With our reliable Cuba delivery
                                    service, you can send this important food item directly to your loved ones, ensuring
                                    they always have access to a dependable source of nourishment.</p>
                                <ul class="space-y-[2px] pt-1 text-brand-ink">
                                    <li class="flex items-start gap-2.5"><span
                                            class="mt-[8px] inline-block h-[12px] w-[17px] shrink-0 text-brand-red"><svg
                                                viewBox="0 0 17 12" class="h-full w-full" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><path d="M1 6H13" stroke="currentColor"
                                                    stroke-width="2.2" stroke-linecap="round" /><path
                                                    d="M8.5 1.5L13 6L8.5 10.5" stroke="currentColor" stroke-width="2.2"
                                                    stroke-linecap="round" stroke-linejoin="round" /></svg></span><span
                                            class="font-medium">Premium quality extra long grain rice</span></li>
                                    <li class="flex items-start gap-2.5"><span
                                            class="mt-[8px] inline-block h-[12px] w-[17px] shrink-0 text-brand-red"><svg
                                                viewBox="0 0 17 12" class="h-full w-full" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><path d="M1 6H13" stroke="currentColor"
                                                    stroke-width="2.2" stroke-linecap="round" /><path
                                                    d="M8.5 1.5L13 6L8.5 10.5" stroke="currentColor" stroke-width="2.2"
                                                    stroke-linecap="round" stroke-linejoin="round" /></svg></span><span
                                            class="font-medium">Perfect for everyday meals</span></li>
                                    <li class="flex items-start gap-2.5"><span
                                            class="mt-[8px] inline-block h-[12px] w-[17px] shrink-0 text-brand-red"><svg
                                                viewBox="0 0 17 12" class="h-full w-full" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><path d="M1 6H13" stroke="currentColor"
                                                    stroke-width="2.2" stroke-linecap="round" /><path
                                                    d="M8.5 1.5L13 6L8.5 10.5" stroke="currentColor" stroke-width="2.2"
                                                    stroke-linecap="round" stroke-linejoin="round" /></svg></span><span
                                            class="font-medium">4 convenient 5 lb bags (total 20 lbs)</span></li>
                                    <li class="flex items-start gap-2.5"><span
                                            class="mt-[8px] inline-block h-[12px] w-[17px] shrink-0 text-brand-red"><svg
                                                viewBox="0 0 17 12" class="h-full w-full" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><path d="M1 6H13" stroke="currentColor"
                                                    stroke-width="2.2" stroke-linecap="round" /><path
                                                    d="M8.5 1.5L13 6L8.5 10.5" stroke="currentColor" stroke-width="2.2"
                                                    stroke-linecap="round" stroke-linejoin="round" /></svg></span><span
                                            class="font-medium">Secure packaging for safe delivery</span></li>
                                    <li class="flex items-start gap-2.5"><span
                                            class="mt-[8px] inline-block h-[12px] w-[17px] shrink-0 text-brand-red"><svg
                                                viewBox="0 0 17 12" class="h-full w-full" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><path d="M1 6H13" stroke="currentColor"
                                                    stroke-width="2.2" stroke-linecap="round" /><path
                                                    d="M8.5 1.5L13 6L8.5 10.5" stroke="currentColor" stroke-width="2.2"
                                                    stroke-linecap="round" stroke-linejoin="round" /></svg></span><span
                                            class="font-medium">Home delivery anywhere in Cuba included</span></li>
                                </ul>
                                <p>Whether you're supporting family from afar or sending care during difficult times, this
                                    rice bundle is a practical and meaningful choice.</p>
                            </div>
                        </div>

                        <div id="panel-additional"
                            class="product-panel rounded-bl-[18px] rounded-br-[18px] rounded-tr-[18px] border border-[rgba(3,9,20,0.2)] bg-white px-7 py-7 sm:px-10 sm:py-8">
                            <div class="shop-inter space-y-5 text-[16px] leading-[28px] text-[rgba(3,9,20,0.6)]">
                                <p>This Mahatma extra long grain rice bundle is designed to provide a reliable and essential
                                    food supply for families in Cuba. Each order includes four individually packed 5 lb
                                    bags, ensuring freshness, convenience, and easy storage.</p>
                                <p>The rice is known for its long, separate grains and consistent cooking quality, making it
                                    ideal for everyday meals. Carefully packaged for safe transit, this product is delivered
                                    directly to your recipient&apos;s home through a trusted logistics network.</p>
                            </div>
                        </div>

                        <div id="panel-reviews"
                            class="product-panel rounded-bl-[18px] rounded-br-[18px] rounded-tr-[18px] border border-[rgba(3,9,20,0.2)] bg-white px-6 py-7 sm:px-8 sm:py-8">
                            <h3 class="shop-display text-[28px] uppercase leading-none text-brand-ink">2 Reviews</h3>

                            <div class="mt-8 space-y-8">
                                <article class="border-b border-[#e9edf3] pb-8">
                                    <div class="flex flex-col gap-5 md:flex-row">
                                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=180&q=80"
                                            alt="Carlos Mendez"
                                            class="h-[104px] w-[104px] rounded-full object-cover sm:h-[116px] sm:w-[116px]" />
                                        <div class="min-w-0 flex-1">
                                            <div class="flex flex-col gap-3 lg:flex-row lg:items-start lg:justify-between">
                                                <div>
                                                    <h4
                                                        class="shop-display text-[20px] uppercase leading-none text-brand-ink">
                                                        Carlos Mendez <span
                                                            class="shop-inter ml-2 text-[16px] font-normal normal-case text-brand-red">12
                                                            Jan, 2026 . 3:45 PM</span></h4>
                                                </div>
                                                <div class="flex gap-[2px] pt-1 text-[20px] leading-none text-[#ffc61a]">
                                                    <span>?</span><span>?</span><span>?</span><span>?</span><span>?</span>
                                                </div>
                                            </div>
                                            <p class="shop-inter mt-4 text-[16px] leading-[28px] text-[rgba(3,9,20,0.6)]">I
                                                ordered this rice bundle for my family in Havana, and I&apos;m really happy
                                                with the service. The delivery was on time, and everything arrived in
                                                perfect condition. The quality of the rice is excellent and exactly what my
                                                family needed for their daily meals. Being able to track the order gave me
                                                peace of mind throughout the process.</p>
                                        </div>
                                    </div>
                                </article>

                                <article class="border-b border-[#e9edf3] pb-8">
                                    <div class="flex flex-col gap-5 md:flex-row">
                                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=180&q=80"
                                            alt="Maria Gonzalez"
                                            class="h-[104px] w-[104px] rounded-full object-cover sm:h-[116px] sm:w-[116px]" />
                                        <div class="min-w-0 flex-1">
                                            <div class="flex flex-col gap-3 lg:flex-row lg:items-start lg:justify-between">
                                                <div>
                                                    <h4
                                                        class="shop-display text-[20px] uppercase leading-none text-brand-ink">
                                                        Maria Gonzalez <span
                                                            class="shop-inter ml-2 text-[16px] font-normal normal-case text-brand-red">28
                                                            Feb, 2026 . 11:20 AM</span></h4>
                                                </div>
                                                <div class="flex gap-[2px] pt-1 text-[20px] leading-none text-[#ffc61a]">
                                                    <span>?</span><span>?</span><span>?</span><span>?</span><span>?</span>
                                                </div>
                                            </div>
                                            <p class="shop-inter mt-4 text-[16px] leading-[28px] text-[rgba(3,9,20,0.6)]">
                                                This is one of the most useful items I&apos;ve sent so far. The packaging
                                                was secure, and the delivery process was smooth from start to finish. My
                                                family relies on rice every day, so this bundle was a great support for
                                                them. I truly appreciate how easy it is to send essential goods through this
                                                service. Will definitely order again!</p>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div class="mt-10">
                                <h4 class="font-heading text-[28px] uppercase leading-none text-brand-ink">Add A Review</h4>
                                <div class="mt-4 flex flex-wrap items-center gap-4">
                                    <span class="shop-inter text-[16px] text-[rgba(3,9,20,0.6)]">Rate this product?</span>
                                    <div class="flex gap-[2px] text-[#ffc61a] text-[20px]">
                                        <span>?</span><span>?</span><span>?</span><span>?</span><span>?</span>
                                    </div>
                                </div>
                                <form class="mt-5" action="#" method="post" onsubmit="return false;">
                                    <textarea rows="6" placeholder="Write a comment"
                                        class="shop-inter w-full rounded-[14px] border border-[#dfe5ef] bg-white px-5 py-4 text-[16px] text-brand-ink outline-none placeholder:text-[#7c8aa0]"></textarea>
                                    <div class="mt-4 grid gap-4 md:grid-cols-2">
                                        <input type="text" placeholder="Your Name"
                                            class="shop-inter min-h-[52px] rounded-[12px] border border-[#dfe5ef] bg-white px-5 text-[16px] text-brand-ink outline-none placeholder:text-[#7c8aa0]" />
                                        <input type="email" placeholder="Email address"
                                            class="shop-inter min-h-[52px] rounded-[12px] border border-[#dfe5ef] bg-white px-5 text-[16px] text-brand-ink outline-none placeholder:text-[#7c8aa0]" />
                                    </div>
                                    <button type="submit"
                                        class="shop-display mt-5 inline-flex min-h-[52px] items-center gap-3 rounded-[10px] bg-brand-red px-5 py-3 text-[24px] uppercase leading-none text-white transition hover:bg-[#ab1e28]">
                                        Submit A Review
                                        <span
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-[8px] border border-white bg-white text-brand-red">?</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="related-products" class="bg-white py-[72px] md:py-[96px]">
                <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
                    <div class="flex flex-wrap items-end justify-between gap-4">
                        <div>
                            <h3 class="shop-display text-[65px] uppercase leading-[0.9] text-brand-ink">Related Products
                            </h3>
                            <p class="shop-inter mt-2 text-[16px] text-[rgba(3,9,20,0.6)]">Essential items often sent
                                together with this product</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <button id="related-prev" type="button"
                                class="grid h-9 w-9 place-items-center rounded-full border border-brand-line bg-white text-brand-ink transition hover:border-brand-red hover:bg-brand-red hover:text-white"
                                aria-label="Previous product">
                                <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="m15 18-6-6 6-6"></path>
                                </svg>
                            </button>
                            <button id="related-next" type="button"
                                class="grid h-9 w-9 place-items-center rounded-full border border-brand-line bg-white text-brand-ink transition hover:border-brand-red hover:bg-brand-red hover:text-white"
                                aria-label="Next product">
                                <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="mt-7 related-carousel-viewport">
                    <div id="related-track" class="related-carousel-track">
                        <div class="related-carousel-slide">
                        <article class="product-card group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="food">
                            <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Add to wishlist">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                                    </svg>
                                </button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Compare product">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                                        <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                    </svg>
                                </button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Quick view">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                                <img src="{{ asset("assets/mariabiscits.jpeg") }}" alt="Maria Premium Biscuits" class="max-h-[126px] w-full object-contain" />
                            </div>
                            <div class="mt-auto">
                                <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]">
                                    <span class="text-[#f3b000]">&#9733;</span>
                                    <span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span>
                                </div>
                                <p class="mt-2 text-[15px] text-[#294678]">Food</p>
                                <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Maria Premium Biscuits</h4>
                                <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$48.30</p>
                                <div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150">
                                    <button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red">
                                        <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="9" cy="20" r="1.6"></circle>
                                            <circle cx="18" cy="20" r="1.6"></circle>
                                            <path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path>
                                        </svg>
                                        <span>Add To Cart</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        </div>

                        <div class="related-carousel-slide">
                        <article class="product-card group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="food">
                            <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Add to wishlist">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg>
                                </button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Compare product">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                                </button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Quick view">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg>
                                </button>
                            </div>
                            <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                                <img src="{{ asset("assets/chips.jpeg") }}" alt="Crunch Snack Combo" class="max-h-[146px] w-full object-contain" />
                            </div>
                            <div class="mt-auto">
                                <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]">
                                    <span class="text-[#f3b000]">&#9733;</span>
                                    <span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span>
                                </div>
                                <p class="mt-2 text-[15px] text-[#294678]">Food</p>
                                <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Crunch Snack Combo</h4>
                                <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$46.30</p>
                                <div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150">
                                    <button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red">
                                        <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="9" cy="20" r="1.6"></circle>
                                            <circle cx="18" cy="20" r="1.6"></circle>
                                            <path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path>
                                        </svg>
                                        <span>Add To Cart</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        </div>

                        <div class="related-carousel-slide">
                        <article class="product-card group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="personal care">
                            <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Add to wishlist">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg>
                                </button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Compare product">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                                </button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Quick view">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg>
                                </button>
                            </div>
                            <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                                <img src="{{ asset("assets/71FU01Jd3uL._SL1500_1-300x234.jpg.jpeg") }}" alt="V05 Body Wash Set" class="max-h-[142px] w-full object-contain" />
                            </div>
                            <div class="mt-auto">
                                <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]">
                                    <span class="text-[#f3b000]">&#9733;</span>
                                    <span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span>
                                </div>
                                <p class="mt-2 text-[15px] text-[#294678]">Personal Care</p>
                                <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">V05 Body Wash Set</h4>
                                <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$58.30</p>
                                <div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150">
                                    <button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red">
                                        <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="9" cy="20" r="1.6"></circle>
                                            <circle cx="18" cy="20" r="1.6"></circle>
                                            <path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path>
                                        </svg>
                                        <span>Add To Cart</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        </div>

                        <div class="related-carousel-slide">
                        <article class="product-card group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="home care">
                            <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Add to wishlist">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg>
                                </button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Compare product">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                                </button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Quick view">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg>
                                </button>
                            </div>
                            <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                                <img src="{{ asset("assets/61pp4zaIg5L._AC_SL1500_1-300x237.jpg.jpeg") }}" alt="Soft Bath Tissue Pack" class="max-h-[142px] w-full object-contain" />
                            </div>
                            <div class="mt-auto">
                                <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]">
                                    <span class="text-[#f3b000]">&#9733;</span>
                                    <span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span>
                                </div>
                                <p class="mt-2 text-[15px] text-[#294678]">Home Care</p>
                                <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Soft Bath Tissue Pack</h4>
                                <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$76.80</p>
                                <div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150">
                                    <button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red">
                                        <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="9" cy="20" r="1.6"></circle>
                                            <circle cx="18" cy="20" r="1.6"></circle>
                                            <path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path>
                                        </svg>
                                        <span>Add To Cart</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                        </div>

                        <div class="related-carousel-slide">
                        <article class="product-card group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="solar products">
                            <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Add to wishlist"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg></button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Compare product"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Quick view"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg></button>
                            </div>
                            <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                                <img src="{{ asset("assets/80Wsolarplates.jpeg") }}" alt="80-Watt Portable Solar Panel" class="max-h-[146px] w-full object-contain" />
                            </div>
                            <div class="mt-auto">
                                <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]"><span class="text-[#f3b000]">&#9733;</span><span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span></div>
                                <p class="mt-2 text-[15px] text-[#294678]">Solar Products</p>
                                <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">80-Watt Portable, Waterproof, Solar Panel</h4>
                                <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$211.35</p>
                                <div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150"><button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="20" r="1.6"></circle><circle cx="18" cy="20" r="1.6"></circle><path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path></svg><span>Add To Cart</span></button></div>
                            </div>
                        </article>
                        </div>

                        <div class="related-carousel-slide">
                        <article class="product-card group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="solar products">
                            <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Add to wishlist"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg></button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Compare product"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Quick view"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg></button>
                            </div>
                            <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                                <img src="{{ asset("assets/solarplates.jpeg") }}" alt="400W Premium 12V Solar Panel Kit" class="max-h-[146px] w-full object-contain" />
                            </div>
                            <div class="mt-auto">
                                <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]"><span class="text-[#f3b000]">&#9733;</span><span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span></div>
                                <p class="mt-2 text-[15px] text-[#294678]">Solar Products</p>
                                <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">400W Premium 12V Solar Panel Kit, Off Grid System</h4>
                                <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$883.19</p>
                                <div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150"><button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="20" r="1.6"></circle><circle cx="18" cy="20" r="1.6"></circle><path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path></svg><span>Add To Cart</span></button></div>
                            </div>
                        </article>
                        </div>

                        <div class="related-carousel-slide">
                        <article class="product-card group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="electric bikes">
                            <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Add to wishlist"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg></button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Compare product"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Quick view"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg></button>
                            </div>
                            <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                                <img src="{{ asset("assets/SehomyElectricScooter.jpeg") }}" alt="Sehomy Electric Scooter" class="max-h-[146px] w-full object-contain" />
                            </div>
                            <div class="mt-auto">
                                <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]"><span class="text-[#f3b000]">&#9733;</span><span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span></div>
                                <p class="mt-2 text-[15px] text-[#294678]">Electric Bikes</p>
                                <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">450-W. Red Sehomy Electric Scooter</h4>
                                <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$466.30</p>
                                <div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150"><button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="20" r="1.6"></circle><circle cx="18" cy="20" r="1.6"></circle><path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path></svg><span>Add To Cart</span></button></div>
                            </div>
                        </article>
                        </div>

                        <div class="related-carousel-slide">
                        <article class="product-card group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="solar products">
                            <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Add to wishlist"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg></button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Compare product"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button>
                                <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white" aria-label="Quick view"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg></button>
                            </div>
                            <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                                <img src="{{ asset("assets/solarlights.jpeg") }}" alt="Solar Wall Lights" class="max-h-[146px] w-full object-contain" />
                            </div>
                            <div class="mt-auto">
                                <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]"><span class="text-[#f3b000]">&#9733;</span><span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span></div>
                                <p class="mt-2 text-[15px] text-[#294678]">Solar Products</p>
                                <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Four - Solar Wall Lights, Outdoor, Motion Sensor</h4>
                                <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$89.44</p>
                                <div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150"><button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="20" r="1.6"></circle><circle cx="18" cy="20" r="1.6"></circle><path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path></svg><span>Add To Cart</span></button></div>
                            </div>
                        </article>
                        </div>
                    </div>
                    </div>
                </div>
            </section>

        <section id="service-features" class="py-8 md:py-10">
          <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
            <div class="grid grid-cols-1 gap-4 pl-4 pr-2 md:grid-cols-2 md:pl-5 md:pr-3 xl:grid-cols-4">
            <article class="rounded-[20px] border border-[#d9dde4] px-5 py-5">
              <div class="flex items-start gap-4">
                <img src="{{ asset("assets/Delivery Across Cuba.svg") }}" alt="Delivery Across Cuba" class="h-8 w-8 shrink-0 object-contain" />
                <div>
                  <h5 class="font-heading text-[1.3rem] uppercase leading-none text-[#101827] shop-sec">Delivery Across Cuba</h5>
                  <p class="mt-2 text-[#6d7380]" style="font-family: Inter, sans-serif; font-size: 0.96rem; line-height: 1.28;">Reliable home delivery to loved ones across the island.</p>
                </div>
              </div>
            </article>

            <article class="rounded-[20px] border border-[#d9dde4] px-5 py-5">
              <div class="flex items-start gap-4">
                <img src="{{ asset("assets/Easy Online Ordering.svg") }}" alt="Easy Online Ordering" class="h-8 w-8 shrink-0 object-contain" />
                <div>
                  <h5 class="font-heading text-[1.3rem] uppercase leading-none text-[#101827] shop-sec">Easy Online Ordering</h5>
                  <p class="mt-2 text-[#6d7380]" style="font-family: Inter, sans-serif; font-size: 0.96rem; line-height: 1.28;">Shop from the U.S. with a simple &amp; convenient process.</p>
                </div>
              </div>
            </article>

            <article class="rounded-[20px] border border-[#d9dde4] px-5 py-5">
              <div class="flex items-start gap-4">
                <img src="{{ asset("assets/Secure Payment.svg") }}" alt="Secure Payment" class="h-8 w-8 shrink-0 object-contain" />
                <div>
                  <h5 class="font-heading text-[1.3rem] uppercase leading-none text-[#101827] shop-sec">Secure Payment</h5>
                  <p class="mt-2 text-[#6d7380]" style="font-family: Inter, sans-serif; font-size: 0.96rem; line-height: 1.28;">Trusted checkout options for a safe shopping experience.</p>
                </div>
              </div>
            </article>

            <article class="rounded-[20px] border border-[#d9dde4] px-5 py-5">
              <div class="flex items-start gap-4">
                <img src="{{ asset("assets/Essential Product Selection.svg") }}" alt="Essential Product Selection" class="h-8 w-8 shrink-0 object-contain" />
                <div>
                  <h5 class="font-heading text-[1.3rem] uppercase leading-none text-[#101827] shop-sec">Essential Product Selection</h5>
                  <p class="mt-2 text-[#6d7380]" style="font-family: Inter, sans-serif; font-size: 0.96rem; line-height: 1.28;">Send groceries, household goods, appliances, &amp; more.</p>
                </div>
              </div>
            </article>
            </div>
          </div>
        </section>
        </main>
@endsection

@section('scripts')
    <script>
        const qtyInput = document.getElementById("qty");
                const qtyMinus = document.getElementById("qty-minus");
                const qtyPlus = document.getElementById("qty-plus");

                if (qtyInput && qtyMinus && qtyPlus) {
                    qtyMinus.addEventListener("click", () => {
                        const currentValue = Number.parseInt(qtyInput.value || "1", 10);
                        qtyInput.value = String(Math.max(1, currentValue - 1));
                    });

                    qtyPlus.addEventListener("click", () => {
                        const currentValue = Number.parseInt(qtyInput.value || "1", 10);
                        qtyInput.value = String(Math.max(1, currentValue + 1));
                    });

                    qtyInput.addEventListener("input", () => {
                        const currentValue = Number.parseInt(qtyInput.value || "1", 10);
                        if (!Number.isFinite(currentValue) || currentValue < 1) {
                            qtyInput.value = "1";
                        }
                    });
                }

                const productTabs = Array.from(document.querySelectorAll(".product-tab"));
                const productPanels = {
                    description: document.getElementById("panel-description"),
                    additional: document.getElementById("panel-additional"),
                    reviews: document.getElementById("panel-reviews"),
                };

                const setActiveTab = (tabName) => {
                    productTabs.forEach((tab) => {
                        const isActive = tab.dataset.tab === tabName;
                        tab.setAttribute("aria-selected", isActive ? "true" : "false");
                    });

                    Object.entries(productPanels).forEach(([name, panel]) => {
                        if (!panel) return;
                        panel.classList.toggle("is-active", name === tabName);
                    });
                };

                productTabs.forEach((tab) => {
                    tab.addEventListener("click", () => {
                        setActiveTab(tab.dataset.tab);
                    });
                });

                const mainProductDisplay = document.getElementById("main-product-display");
                const thumbnailButtons = Array.from(document.querySelectorAll(".thumbnail-btn"));
                const imageDisplays = {
                    rice: {
                        markup: '<img src="{{ asset("assets/Grain Rice.jpg") }}" alt="Mahatma grain rice" class="h-full w-full rounded-[8px] object-contain" />',
                        classes: "h-[320px] w-full overflow-hidden rounded-[8px] bg-white sm:h-[520px]",
                    },
                    maria: {
                        markup: '<img src="{{ asset("assets/mariabiscits.jpeg") }}" alt="Maria biscuits" class="h-full w-full rounded-[8px] object-contain" />',
                        classes: "h-[320px] w-full overflow-hidden rounded-[8px] bg-[#f7f8fb] sm:h-[520px]",
                    },
                    v05: {
                        markup: '<img src="{{ asset("assets/71FU01Jd3uL._SL1500_1-300x234.jpg.jpeg") }}" alt="V05 body wash" class="h-full w-full rounded-[8px] object-contain" />',
                        classes: "h-[320px] w-full overflow-hidden rounded-[8px] bg-[#f7f8fb] sm:h-[520px]",
                    },
                    tissue: {
                        markup: '<img src="{{ asset("assets/61pp4zaIg5L._AC_SL1500_1-300x237.jpg.jpeg") }}" alt="Bath tissue pack" class="h-full w-full rounded-[8px] object-contain" />',
                        classes: "h-[320px] w-full overflow-hidden rounded-[8px] bg-[#f7f8fb] sm:h-[520px]",
                    },
                };

                if (mainProductDisplay && thumbnailButtons.length) {
                    const setActiveThumbnail = (thumbName) => {
                        const nextDisplay = imageDisplays[thumbName];
                        if (!nextDisplay) return;

                        mainProductDisplay.className = nextDisplay.classes;
                        mainProductDisplay.innerHTML = nextDisplay.markup;

                        thumbnailButtons.forEach((button) => {
                            const isActive = button.dataset.thumb === thumbName;
                            button.classList.toggle("border-2", isActive);
                            button.classList.toggle("border-brand-red", isActive);
                            button.classList.toggle("border", !isActive);
                            button.classList.toggle("border-brand-line", !isActive);
                        });
                    };

                    thumbnailButtons.forEach((button) => {
                        button.addEventListener("click", () => {
                            setActiveThumbnail(button.dataset.thumb);
                        });
                    });

                    setActiveThumbnail("rice");
                }

                const relatedTrack = document.getElementById("related-track");
                const relatedPrev = document.getElementById("related-prev");
                const relatedNext = document.getElementById("related-next");

                if (relatedTrack && relatedPrev && relatedNext) {
                    const relatedSlides = Array.from(relatedTrack.querySelectorAll(".related-carousel-slide"));
                    let relatedIndex = 0;

                    const getRelatedSlidesPerView = () => {
                        if (window.innerWidth >= 1280) return 4;
                        if (window.innerWidth >= 640) return 2;
                        return 1;
                    };

                    const updateRelatedCarousel = () => {
                        const slidesPerView = getRelatedSlidesPerView();
                        const maxIndex = Math.max(0, relatedSlides.length - slidesPerView);
                        relatedIndex = Math.min(relatedIndex, maxIndex);

                        const slideWidth = relatedSlides[0]?.getBoundingClientRect().width || 0;
                        const trackStyles = window.getComputedStyle(relatedTrack);
                        const gap = Number.parseFloat(trackStyles.columnGap || trackStyles.gap || "0") || 0;
                        const offset = relatedIndex * (slideWidth + gap);

                        relatedTrack.style.transform = `translateX(-${offset}px)`;

                        relatedPrev.disabled = relatedIndex === 0;
                        relatedNext.disabled = relatedIndex >= maxIndex;

                        [relatedPrev, relatedNext].forEach((button) => {
                            button.classList.toggle("opacity-50", button.disabled);
                            button.classList.toggle("cursor-not-allowed", button.disabled);
                        });
                    };

                    relatedPrev.addEventListener("click", () => {
                        const step = getRelatedSlidesPerView();
                        relatedIndex = Math.max(0, relatedIndex - step);
                        updateRelatedCarousel();
                    });

                    relatedNext.addEventListener("click", () => {
                        const step = getRelatedSlidesPerView();
                        const maxIndex = Math.max(0, relatedSlides.length - step);
                        relatedIndex = Math.min(maxIndex, relatedIndex + step);
                        updateRelatedCarousel();
                    });

                    window.addEventListener("resize", updateRelatedCarousel);
                    updateRelatedCarousel();
                }
    </script>
@endsection
