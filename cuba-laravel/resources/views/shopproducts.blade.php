@extends('layouts.app')

@section('title', 'Shop - Send Love to Cuba')

@push('styles')
    <style>
        body {
              font-size: 1rem;
            }

            @media (min-width: 768px) {
              body {
                font-size: 1.12rem;
              }
            }

            .hide-scrollbar {
              -ms-overflow-style: none;
              scrollbar-width: none;
            }

            .hide-scrollbar::-webkit-scrollbar {
              display: none;
            }

            .text-xs,
            .text-sm,
            .text-base,
            .text-\[10px\],
            .text-\[11px\],
            .text-\[12px\],
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

            #service-features,
            #service-features article {
              background: #ffffff !important;
            }

            #service-features {
              border-top: 0 !important;
            }

            #shop-by-category .category-card h4,
            #featured-products .product-card h4,
            #product-collections .collection-panel h4,
            #why-choose-us article h4,
            #how-it-works article h4,
            #service-features h5 {
              font-weight: 500;
            }

            #service-features p {
              font-family: "Inter", sans-serif !important;
              font-size: 0.96rem !important;
              line-height: 1.28 !important;
            }

            #shop-by-category .category-card h4,
            #product-collections .collection-panel h4 {
              font-size: 1.45rem;
            }

            #featured-products .product-card h4 {
              display: -webkit-box;
              -webkit-line-clamp: 2;
              -webkit-box-orient: vertical;
              overflow: hidden;
            }

            #featured-products .product-card {
              min-height: 420px;
              padding-top: 1.75rem;
              padding-bottom: 1.75rem;
            }

            #featured-products .product-card > div.relative.mt-3.mb-4 {
              height: 180px;
              margin-bottom: 1rem;
            }

            #featured-products .product-card > div.relative.mt-3.mb-4 img {
              max-height: 200px;
            }

            #featured-products .product-card .mt-auto {
              display: flex;
              flex-direction: column;
              gap: 0.7rem;
              padding-top: 1rem;
            }

            #featured-products .product-card .mt-auto > * {
              margin-top: 0 !important;
            }

            #featured-products .product-card p[class*="text-brand-red"],
            #product-collections .collection-panel p[class*="text-brand-red"] {
              color: #C6232F !important;
              font-weight: 500 !important;
            }

            #featured-products .product-card .rating-score {
              color: #000000 !important;
              font-weight: 400 !important;
            }

            #featured-products .product-card p.text-\[15px\].text-\[\#294678\],
            #product-collections .collection-panel p.text-\[15px\].text-\[\#294678\] {
              font-weight: 500 !important;
            }

            .product-tab,
            .collection-tab,
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
        <section class="relative overflow-hidden py-[clamp(72px,8vw,136px)]">
          <img src="{{ asset("assets/shopproduct.svg") }}" alt="Shop products background" class="absolute inset-0 h-full w-full object-cover" />
          <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(9,18,34,0.88),rgba(9,18,34,0.72),rgba(9,18,34,0.88))]"></div>
          <div class="relative mx-auto max-w-[1540px] px-10 text-center md:px-16 xl:px-24">
            <h1 class="font-heading text-[clamp(56px,7vw,102px)] uppercase leading-[0.88] text-white">Shop</h1>
            <p class="mt-4 text-[17px] text-white/85"><a href="{{ route('home') }}" class="underline-offset-2 hover:underline">Home</a> <span class="mx-2">&gt;</span> Shop</p>
          </div>
        </section>
        <section class="bg-white pb-[56px] pt-[56px] md:pb-[80px] md:pt-[72px]">
          <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
            <div class="mx-auto max-w-[760px] text-center">
              <span class="inline-flex min-h-[42px] items-center gap-[14px] rounded-full border border-[#f3cfd5] bg-[#fff1f3] px-[14px] py-[4px] text-[15px] font-medium leading-none text-[#C6232F]">
                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
                <span>Popular Categories</span>
                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
              </span>
              <h2 class="mt-5 font-heading text-[clamp(1.9rem,3.55vw,3.45rem)] font-medium uppercase leading-[0.92] text-[#0f1728]">
                Find Essential Products For
                <span class="block">Your Loved Ones In Cuba</span>
              </h2>
            </div>

            <div class="mt-10 flex flex-wrap justify-center gap-5 xl:gap-7">
              <article onclick="window.location.href='{{ url('/shop') }}'" class="category-card cursor-pointer group relative h-[322px] basis-full shrink-0 grow-0 overflow-hidden rounded-[22.56px] bg-[#f7f8fb] px-3 py-4 text-center transition duration-300 hover:shadow-soft sm:basis-[calc((100%-0.75rem)/2)] lg:basis-[calc((100%-2.25rem)/4)] lg:max-w-[288px]">
                <div class="absolute inset-0 bg-[#7387a8] opacity-0 transition duration-300 group-hover:opacity-100"></div>
                <div class="pointer-events-none absolute inset-0 z-10 flex translate-y-4 items-center justify-center opacity-0 transition-all duration-300 ease-out group-hover:translate-y-0 group-hover:opacity-100">
                  <span class="rounded-[12px] bg-white px-7 py-4 font-heading text-[1.16rem] font-extrabold uppercase leading-none tracking-[0.01em] text-[#18305b]">Shop Now</span>
                </div>
                <div class="relative flex h-[198px] items-end justify-center">
                  <img src="{{ asset("assets/solarproduct.svg") }}" alt="Solar Products" class="h-[176px] w-auto object-contain transition duration-300" />
                </div>
                <h3 class="relative mt-3 font-heading text-[1.45rem] font-medium uppercase leading-none text-[#121b2d] transition duration-300 group-hover:text-white">Solar Products</h3>
                <p class="relative mt-2 text-[13px] text-[#7c8799] transition duration-300 group-hover:text-white/70">20+ Items</p>
              </article>
              <article onclick="window.location.href='{{ url('/shop') }}'" class="category-card cursor-pointer group relative h-[322px] basis-full shrink-0 grow-0 overflow-hidden rounded-[22.56px] bg-[#f7f8fb] px-3 py-4 text-center transition duration-300 hover:shadow-soft sm:basis-[calc((100%-0.75rem)/2)] lg:basis-[calc((100%-2.25rem)/4)] lg:max-w-[288px]">
                <div class="absolute inset-0 bg-[#7387a8] opacity-0 transition duration-300 group-hover:opacity-100"></div>
                <div class="pointer-events-none absolute inset-0 z-10 flex translate-y-4 items-center justify-center opacity-0 transition-all duration-300 ease-out group-hover:translate-y-0 group-hover:opacity-100">
                  <span class="rounded-[12px] bg-white px-7 py-4 font-heading text-[1.16rem] font-extrabold uppercase leading-none tracking-[0.01em] text-[#18305b]">Shop Now</span>
                </div>
                <div class="relative flex h-[198px] items-end justify-center">
                  <img src="{{ asset("assets/electricscooter.svg") }}" alt="Electric Scooters" class="h-[172px] w-auto object-contain transition duration-300" />
                </div>
                <h3 class="relative mt-3 font-heading text-[1.45rem] font-medium uppercase leading-none text-[#121b2d] transition duration-300 group-hover:text-white">Electric Scooters</h3>
                <p class="relative mt-2 text-[13px] text-[#7c8799] transition duration-300 group-hover:text-white/70">18+ Items</p>
              </article>
              <article onclick="window.location.href='{{ url('/shop') }}'" class="category-card cursor-pointer group relative h-[322px] basis-full shrink-0 grow-0 overflow-hidden rounded-[22.56px] bg-[#f7f8fb] px-3 py-4 text-center transition duration-300 hover:shadow-[0_20px_40px_rgba(115,135,168,0.26)] sm:basis-[calc((100%-0.75rem)/2)] lg:basis-[calc((100%-2.25rem)/4)] lg:max-w-[288px]">
                <div class="absolute inset-0 bg-[#7387a8] opacity-0 transition duration-300 group-hover:opacity-100"></div>
                <div class="pointer-events-none absolute inset-0 z-10 flex translate-y-4 items-center justify-center opacity-0 transition-all duration-300 ease-out group-hover:translate-y-0 group-hover:opacity-100">
                  <span class="rounded-[12px] bg-white px-7 py-4 font-heading text-[1.16rem] font-extrabold uppercase leading-none tracking-[0.01em] text-[#18305b]">Shop Now</span>
                </div>
                <div class="relative flex h-[198px] items-end justify-center">
                  <img src="{{ asset("assets/electricbike.svg") }}" alt="Electric Bikes" class="h-[176px] w-auto object-contain transition duration-300" />
                </div>
                <h3 class="relative mt-3 font-heading text-[1.45rem] font-medium uppercase leading-none text-[#121b2d] transition duration-300 group-hover:text-white">Electric Bikes</h3>
                <p class="relative mt-2 text-[13px] text-[#7c8799] transition duration-300 group-hover:text-white/70">16+ Items</p>
              </article>
              <article onclick="window.location.href='{{ url('/shop') }}'" class="category-card cursor-pointer group relative h-[322px] basis-full shrink-0 grow-0 overflow-hidden rounded-[22.56px] bg-[#f7f8fb] px-3 py-4 text-center transition duration-300 hover:shadow-soft sm:basis-[calc((100%-0.75rem)/2)] lg:basis-[calc((100%-2.25rem)/4)] lg:max-w-[288px]">
                <div class="absolute inset-0 bg-[#7387a8] opacity-0 transition duration-300 group-hover:opacity-100"></div>
                <div class="pointer-events-none absolute inset-0 z-10 flex translate-y-4 items-center justify-center opacity-0 transition-all duration-300 ease-out group-hover:translate-y-0 group-hover:opacity-100">
                  <span class="rounded-[12px] bg-white px-7 py-4 font-heading text-[1.16rem] font-extrabold uppercase leading-none tracking-[0.01em] text-[#18305b]">Shop Now</span>
                </div>
                <div class="relative flex h-[198px] items-end justify-center">
                  <img src="{{ asset("assets/productorder.svg") }}" alt="Mobility Aids" class="h-[174px] w-auto object-contain transition duration-300" />
                </div>
                <h3 class="relative mt-3 font-heading text-[1.45rem] font-medium uppercase leading-none text-[#121b2d] transition duration-300 group-hover:text-white">Mobility Aids</h3>
                <p class="relative mt-2 text-[13px] text-[#7c8799] transition duration-300 group-hover:text-white/70">12+ Items</p>
              </article>
              <article onclick="window.location.href='{{ url('/shop') }}'" class="category-card cursor-pointer group relative h-[322px] basis-full shrink-0 grow-0 overflow-hidden rounded-[22.56px] bg-[#f7f8fb] px-3 py-4 text-center transition duration-300 hover:shadow-soft sm:basis-[calc((100%-0.75rem)/2)] lg:basis-[calc((100%-2.25rem)/4)] lg:max-w-[288px]">
                <div class="absolute inset-0 bg-[#7387a8] opacity-0 transition duration-300 group-hover:opacity-100"></div>
                <div class="pointer-events-none absolute inset-0 z-10 flex translate-y-4 items-center justify-center opacity-0 transition-all duration-300 ease-out group-hover:translate-y-0 group-hover:opacity-100">
                  <span class="rounded-[12px] bg-white px-7 py-4 font-heading text-[1.16rem] font-extrabold uppercase leading-none tracking-[0.01em] text-[#18305b]">Shop Now</span>
                </div>
                <div class="relative flex h-[198px] items-end justify-center">
                  <img src="{{ asset("assets/food.svg") }}" alt="Food" class="h-[166px] w-auto object-contain transition duration-300" />
                </div>
                <h3 class="relative mt-3 font-heading text-[1.45rem] font-medium uppercase leading-none text-[#121b2d] transition duration-300 group-hover:text-white">Food</h3>
                <p class="relative mt-2 text-[13px] text-[#7c8799] transition duration-300 group-hover:text-white/70">35+ Items</p>
              </article>
              <article onclick="window.location.href='{{ url('/shop') }}'" class="category-card cursor-pointer group relative h-[322px] basis-full shrink-0 grow-0 overflow-hidden rounded-[22.56px] bg-[#f7f8fb] px-3 py-4 text-center transition duration-300 hover:shadow-soft sm:basis-[calc((100%-0.75rem)/2)] lg:basis-[calc((100%-2.25rem)/4)] lg:max-w-[288px]">
                <div class="absolute inset-0 bg-[#7387a8] opacity-0 transition duration-300 group-hover:opacity-100"></div>
                <div class="pointer-events-none absolute inset-0 z-10 flex translate-y-4 items-center justify-center opacity-0 transition-all duration-300 ease-out group-hover:translate-y-0 group-hover:opacity-100">
                  <span class="rounded-[12px] bg-white px-7 py-4 font-heading text-[1.16rem] font-extrabold uppercase leading-none tracking-[0.01em] text-[#18305b]">Shop Now</span>
                </div>
                <div class="relative flex h-[198px] items-end justify-center">
                  <img src="{{ asset("assets/appliences.svg") }}" alt="Appliances" class="h-[164px] w-auto object-contain transition duration-300" />
                </div>
                <h3 class="relative mt-3 font-heading text-[1.45rem] font-medium uppercase leading-none text-[#121b2d] transition duration-300 group-hover:text-white">Appliances</h3>
                <p class="relative mt-2 text-[13px] text-[#7c8799] transition duration-300 group-hover:text-white/70">24+ Items</p>
              </article>
              <article onclick="window.location.href='{{ url('/shop') }}'" class="category-card cursor-pointer group relative h-[322px] basis-full shrink-0 grow-0 overflow-hidden rounded-[22.56px] bg-[#f7f8fb] px-3 py-4 text-center transition duration-300 hover:shadow-soft sm:basis-[calc((100%-0.75rem)/2)] lg:basis-[calc((100%-2.25rem)/4)] lg:max-w-[288px]">
                <div class="absolute inset-0 bg-[#7387a8] opacity-0 transition duration-300 group-hover:opacity-100"></div>
                <div class="pointer-events-none absolute inset-0 z-10 flex translate-y-4 items-center justify-center opacity-0 transition-all duration-300 ease-out group-hover:translate-y-0 group-hover:opacity-100">
                  <span class="rounded-[12px] bg-white px-7 py-4 font-heading text-[1.16rem] font-extrabold uppercase leading-none tracking-[0.01em] text-[#18305b]">Shop Now</span>
                </div>
                <div class="relative flex h-[198px] items-end justify-center">
                  <img src="{{ asset("assets/61pp4zaIg5L._AC_SL1500_1-300x237.jpg.jpeg") }}" alt="Furniture" class="h-[164px] w-auto object-contain transition duration-300" />
                </div>
                <h3 class="relative mt-3 font-heading text-[1.45rem] font-medium uppercase leading-none text-[#121b2d] transition duration-300 group-hover:text-white">Furniture</h3>
                <p class="relative mt-2 text-[13px] text-[#7c8799] transition duration-300 group-hover:text-white/70">9+ Items</p>
              </article>
            </div>
          </div>
        </section>

        <section id="featured-products" class="bg-white pb-[62px] pt-[30px] md:pb-[88px]">
          <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
            <div class="mb-9 text-center">
              <span class="inline-flex min-h-[42px] items-center gap-[14px] rounded-full border border-[#f5d0d5] bg-[#fff3f5] px-[14px] py-[4px] text-[15px] font-medium leading-none text-[#C6232F]">
                <span class="h-1.5 w-1.5 rounded-full bg-[#C6232F]"></span>
                <span>Featured Products</span>
                <span class="h-1.5 w-1.5 rounded-full bg-[#C6232F]"></span>
              </span>
              <h3 class="mt-5 font-heading text-[clamp(1.9rem,3.55vw,3.45rem)] font-medium uppercase leading-[0.92] text-[#0f223e]">Popular Products Sent to Cuba</h3>
            </div>

            <div class="mb-8 flex flex-wrap justify-center gap-2.5" role="tablist" aria-label="Product categories">
              <button class="product-tab rounded-[12px] border border-brand-red bg-brand-red px-4 py-3 font-heading text-[13px] uppercase text-white transition" type="button" data-filter="all" aria-selected="true">All</button>
              <button class="product-tab rounded-[12px] border border-[#d8dde7] bg-white px-4 py-3 font-heading text-[13px] uppercase text-[#131d30] transition hover:border-brand-red hover:text-brand-red" type="button" data-filter="solar products" aria-selected="false">Solar Products</button>
              <button class="product-tab rounded-[12px] border border-[#d8dde7] bg-white px-4 py-3 font-heading text-[13px] uppercase text-[#131d30] transition hover:border-brand-red hover:text-brand-red" type="button" data-filter="electric scooters" aria-selected="false">Electric Scooters</button>
              <button class="product-tab rounded-[12px] border border-[#d8dde7] bg-white px-4 py-3 font-heading text-[13px] uppercase text-[#131d30] transition hover:border-brand-red hover:text-brand-red" type="button" data-filter="electric bikes" aria-selected="false">Electric Bikes</button>
              <button class="product-tab rounded-[12px] border border-[#d8dde7] bg-white px-4 py-3 font-heading text-[13px] uppercase text-[#131d30] transition hover:border-brand-red hover:text-brand-red" type="button" data-filter="personal care" aria-selected="false">Personal Care</button>
              <button class="product-tab rounded-[12px] border border-[#d8dde7] bg-white px-4 py-3 font-heading text-[13px] uppercase text-[#131d30] transition hover:border-brand-red hover:text-brand-red" type="button" data-filter="food" aria-selected="false">Food</button>
              <button class="product-tab rounded-[12px] border border-[#d8dde7] bg-white px-4 py-3 font-heading text-[13px] uppercase text-[#131d30] transition hover:border-brand-red hover:text-brand-red" type="button" data-filter="appliances" aria-selected="false">Appliances</button>
              <button class="product-tab rounded-[12px] border border-[#d8dde7] bg-white px-4 py-3 font-heading text-[13px] uppercase text-[#131d30] transition hover:border-brand-red hover:text-brand-red" type="button" data-filter="furniture" aria-selected="false">Furniture</button>
            </div>

            <div id="product-grid" class="grid items-start grid-cols-1 gap-x-5 gap-y-20 sm:grid-cols-2 xl:grid-cols-4">
              <article onclick="window.location.href='{{ url('/shop') }}'" class="product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="electric bikes">
                <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                      <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="3"></circle>
                      <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                    </svg>
                  </button>
                </div>
                <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                  <img src="{{ asset("assets/SehomyElectricScooter.jpeg") }}" alt="450-W. Red Sehomy Electric Scooter" class="max-h-[146px] w-full object-contain" />
                </div>
                <div class="mt-auto">
                  <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]">
                    <span class="text-[#f3b000]">&#9733;</span>
                    <span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span>
                  </div>
                  <p class="mt-2 text-[15px] text-[#294678]">Electric Bikes</p>
                  <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">450-W. Red Sehomy Electric Scooter</h4>
                  <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$466.30</p>
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

              <article onclick="window.location.href='{{ url('/shop') }}'" class="product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="appliances">
                <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                      <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="3"></circle>
                      <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                    </svg>
                  </button>
                </div>
                <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                  <img src="{{ asset("assets/electricgenrater.jpeg") }}" alt="750-Watt 120V/240V Dual Fuel Portable" class="max-h-[142px] w-full object-contain" />
                </div>
                <div class="mt-auto">
                  <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]">
                    <span class="text-[#f3b000]">&#9733;</span>
                    <span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span>
                  </div>
                  <p class="mt-2 text-[15px] text-[#294678]">Appliances</p>
                  <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">750-Watt 120V/240V Dual Fuel Portable</h4>
                  <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$869.88</p>
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

              <article onclick="window.location.href='{{ url('/shop') }}'" class="product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="solar products">
                <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                      <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="3"></circle>
                      <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                    </svg>
                  </button>
                </div>
                <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                  <img src="{{ asset("assets/flashlight.jpeg") }}" alt="Four, Solar Lantern, Flashlight & Phone Charger" class="max-h-[142px] w-full object-contain" />
                </div>
                <div class="mt-auto">
                  <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]">
                    <span class="text-[#f3b000]">&#9733;</span>
                    <span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span>
                  </div>
                  <p class="mt-2 text-[15px] text-[#294678]">Solar Products</p>
                  <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Four, Solar Lantern, Flashlight & Phone Charger</h4>
                  <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$85.66</p>
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

              <article onclick="window.location.href='{{ url('/shop') }}'" class="product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="electric bikes">
                <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                      <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="3"></circle>
                      <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                    </svg>
                  </button>
                </div>
                <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                  <img src="{{ asset("assets/solarlights.jpeg") }}" alt="Four - Solar Wall Lights, Outdoor, Motion Sensor, 120 LED" class="max-h-[146px]  w-full object-contain" />
                </div>
                <div class="mt-auto">
                  <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]">
                    <span class="text-[#f3b000]">&#9733;</span>
                    <span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span>
                  </div>
                  <p class="mt-2 text-[15px] text-[#294678]">Solar Products</p>
                  <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Four - Solar Wall Lights, Outdoor, Motion Sensor, 120 LED</h4>
                  <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$89.44</p>
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

              <article onclick="window.location.href='{{ url('/shop') }}'" class="product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="solar products">
                <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                      <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="3"></circle>
                      <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                    </svg>
                  </button>
                </div>
                <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                  <img src="{{ asset("assets/80Wsolarplates.jpeg") }}" alt="80-Watt Portable, Waterproof, Solar Panel" class="max-h-[142px] w-full object-contain" />
                </div>
                <div class="mt-auto">
                  <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]">
                    <span class="text-[#f3b000]">&#9733;</span>
                    <span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span>
                  </div>
                  <p class="mt-2 text-[15px] text-[#294678]">Solar Products</p>
                  <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">80-Watt Portable, Waterproof, Solar Panel</h4>
                  <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$211.35</p>
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

              <article onclick="window.location.href='{{ url('/shop') }}'" class="product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="food">
                <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                      <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="3"></circle>
                      <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                    </svg>
                  </button>
                </div>
                <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                  <img src="{{ asset("assets/mariabiscits.jpeg") }}" alt="Maria Cookies, 32 Packs, 7 oz" class="max-h-[126px] w-full object-contain" />
                </div>
                <div class="mt-auto">
                  <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]">
                    <span class="text-[#f3b000]">&#9733;</span>
                    <span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span>
                  </div>
                  <p class="mt-2 text-[15px] text-[#294678]">Food</p>
                  <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Maria Cookies, 32 Packs, 7 oz</h4>
                  <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$127.58</p>
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

              <article onclick="window.location.href='{{ url('/shop') }}'" class="product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="food">
                <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                      <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="3"></circle>
                      <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                    </svg>
                  </button>
                </div>
                <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                  <img src="{{ asset("assets/chips.jpeg") }}" alt="100 Snack Size Packs, Chips Ahoy Variety Pack 2" class="max-h-[128px] w-full object-contain" />
                </div>
                <div class="mt-auto">
                  <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]">
                    <span class="text-[#f3b000]">&#9733;</span>
                    <span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span>
                  </div>
                  <p class="mt-2 text-[15px] text-[#294678]">Food</p>
                  <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">100 Snack Size Packs, Chips Ahoy Variety Pack 2</h4>
                  <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$127.60</p>
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

              <article onclick="window.location.href='{{ url('/shop') }}'" class="product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-category="solar products">
                <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                      <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                    </svg>
                  </button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="12" cy="12" r="3"></circle>
                      <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                    </svg>
                  </button>
                </div>
                <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                  <img src="{{ asset("assets/solarplates.jpeg") }}" alt="400W PREMIUM 12V Solar Panel Kit, Off Grid System" class="max-h-[134px] w-full object-contain" />
                </div>
                <div class="mt-auto">
                  <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]">
                    <span class="text-[#f3b000]">&#9733;</span>
                    <span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span>
                  </div>
                  <p class="mt-2 text-[15px] text-[#294678]">Solar Products</p>
                  <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">400W PREMIUM 12V Solar Panel Kit, Off Grid System</h4>
                  <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$883.19</p>
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

            <p id="product-empty-state" class="hidden py-10 text-center text-[15px] text-[#728093]">No products in this category yet.</p>
          </div>
        </section>



      <section id="product-collections" class="bg-white pb-[84px] pt-[38px] md:pb-[108px] md:pt-[52px]">
      <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">

        <!-- Tabs -->
       <div class="mb-10 md:mb-14">
      <div class="flex items-center justify-center gap-16">
        <button
          type="button"
          class="collection-tab px-6 py-4 font-heading font-medium text-[1.38rem] uppercase leading-none text-[#111827] transition-all duration-200"
          data-tab="best"
        >
          Best Selling
        </button>

        <button
          type="button"
          class="collection-tab px-6 py-4 font-heading font-medium text-[1.38rem] uppercase leading-none text-[#111827] transition-all duration-200"
          data-tab="new"
        >
          New Arrivals
        </button>

        <button
          type="button"
          class="collection-tab px-6 py-4 font-heading font-medium text-[1.38rem] uppercase leading-none text-[#111827] transition-all duration-200"
          data-tab="top"
        >
          Top Selling
        </button>
      </div>
      <span class="block h-px bg-[#cfd4dc]"></span>
    </div>
        <!-- Panel: New Arrivals -->
        <div class="collection-panel grid grid-cols-1 gap-6 lg:grid-cols-2 xl:grid-cols-3" data-panel="new">

          <!-- Card 1 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/electric scooty.jpeg") }}" alt="Electric bike" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>

            <div>
              <p class="text-[15px] text-[#294678]">Solar Products</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">
                Lorem Ipsum Dolor Sit Amet
              </h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$466.30</p>
            </div>
          </article>

          <!-- Card 2 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/electricgenrater.jpeg") }}" alt="Generator" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Solar Products</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Lorem Ipsum Dolor Sit Amet</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$466.30</p>
            </div>
          </article>

          <!-- Card 3 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/chips.jpeg") }}" alt="Snack packs" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Solar Products</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Lorem Ipsum Dolor Sit Amet</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$466.30</p>
            </div>
          </article>

          <!-- Card 4 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/appliences.svg") }}" alt="Generator" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Power</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Portable Generator</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$399.99</p>
            </div>
          </article>

          <!-- Card 5 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/mariabiscits.jpeg") }}" alt="Snack packs" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Food</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Snack Bundle</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$34.99</p>
            </div>
          </article>

          <!-- Card 6 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/electricscooter.svg") }}" alt="Electric Bike" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Electronics</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Electric Scooter</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$299.99</p>
            </div>
          </article>

          <!-- Card 7 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/80Wsolarplates.jpeg") }}" alt="Generator" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Power</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Solar Generator</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$549.99</p>
            </div>
          </article>

          <!-- Card 8 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/food.svg") }}" alt="Snack packs" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Food</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Variety Pack</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$44.99</p>
            </div>
          </article>

          <!-- Card 9 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/solarproduct.svg") }}" alt="Generator" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Power</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Premium Generator</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$699.99</p>
            </div>
          </article>
        </div>

        <!-- Panel: Best Selling -->
        <div class="collection-panel hidden grid grid-cols-1 gap-6 lg:grid-cols-2 xl:grid-cols-3" data-panel="best">
          <!-- Card 1 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/electricbike.svg") }}" alt="Electric Bike" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Electronics</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Electric Bike Pro</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$649.99</p>
            </div>
          </article>

          <!-- Card 2 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/61pp4zaIg5L._AC_SL1500_1-300x237.jpg.jpeg") }}" alt="Generator" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Power</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Portable Generator</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$399.99</p>
            </div>
          </article>

          <!-- Card 3 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/barsoap.jpeg") }}" alt="Snack packs" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Food</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Premium Snacks</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$29.99</p>
            </div>
          </article>

          <!-- Card 4 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/SehomyElectricScooter.jpeg") }}" alt="Electric Bike" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Electronics</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Electric Scooter</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$299.99</p>
            </div>
          </article>

          <!-- Card 5 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/solarplates.jpeg") }}" alt="Generator" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Power</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Solar Generator Kit</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$549.99</p>
            </div>
          </article>

          <!-- Card 6 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/flashlight.jpeg") }}" alt="Snack packs" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Food</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Organic Selection</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$34.99</p>
            </div>
          </article>
        </div>

        <!-- Panel: Top Selling -->
        <div class="collection-panel hidden grid grid-cols-1 gap-6 lg:grid-cols-2 xl:grid-cols-3" data-panel="top">
          <!-- Card 1 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/solarlights.jpeg") }}" alt="Generator" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Power</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Home Generator</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$799.99</p>
            </div>
          </article>

          <!-- Card 2 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/71FU01Jd3uL._SL1500_1-300x234.jpg.jpeg") }}" alt="Snack packs" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Food</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Gourmet Pack</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$39.99</p>
            </div>
          </article>

          <!-- Card 3 -->
          <article onclick="window.location.href='{{ url('/shop') }}'" class="group relative grid min-h-[210px] cursor-pointer grid-cols-1 sm:grid-cols-[160px_1fr] items-center gap-6 rounded-[26px] bg-[#f7f7f8] px-4 py-4 sm:py-0">
            <div class="relative flex h-[100px] items-center justify-center sm:h-[140px]">
              <img src="{{ asset("assets/productorder.svg") }}" alt="Electric Bike" class="max-h-[95px] w-auto max-w-full object-contain sm:max-h-[140px]" />

              <!-- 4 buttons in square -->
              <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-wrap w-20 justify-center gap-1 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="8" y="8" width="10" height="10" rx="2"></rect>
                    <path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                  </svg>
                </button>

                <button type="button" class="grid h-8 w-8 place-items-center rounded-[10px] bg-brand-red text-white">
                  <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="20" r="1"></circle>
                    <circle cx="17" cy="20" r="1"></circle>
                    <path d="M3 4h2l2.2 10.2a1 1 0 0 0 1 .8h8.7a1 1 0 0 0 1-.8L21 8H7"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div>
              <p class="text-[15px] text-[#294678]">Electronics</p>
              <h4 class="mt-2 font-heading text-[1.75rem] uppercase leading-[0.9] text-[#111827]">Racing Bike V2</h4>
              <p class="mt-3 font-heading text-[2rem] leading-none text-brand-red">$699.99</p>
            </div>

      </div>
    </section>

        <section id="service-features" class="border-y border-[#e0e4ea] bg-[#f3f4f6] py-8 md:py-10">
          <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
            <div class="grid grid-cols-1 gap-4 pl-4 pr-2 md:grid-cols-2 md:pl-5 md:pr-3 xl:grid-cols-4">
            <article class="rounded-[20px] border border-[#d9dde4] bg-[#f3f4f6] px-5 py-5">
              <div class="flex items-start gap-4">
                <img src="{{ asset("assets/Delivery Across Cuba.svg") }}" alt="Delivery Across Cuba" class="h-8 w-8 shrink-0 object-contain" />
                <div>
                  <h5 class="font-heading font-medium text-[1.3rem] uppercase leading-none text-[#101827]">Delivery Across Cuba</h5>
                  <p class="mt-2 text-[#6d7380]" style="font-family: Inter, sans-serif; font-size: 0.96rem; line-height: 1.28;">Reliable home delivery to loved ones across the island.</p>
                </div>
              </div>
            </article>

            <article class="rounded-[20px] border border-[#d9dde4] bg-[#f3f4f6] px-5 py-5">
              <div class="flex items-start gap-4">
                <img src="{{ asset("assets/Easy Online Ordering.svg") }}" alt="Easy Online Ordering" class="h-8 w-8 shrink-0 object-contain" />
                <div>
                  <h5 class="font-heading font-medium text-[1.3rem] uppercase leading-none text-[#101827]">Easy Online Ordering</h5>
                  <p class="mt-2 text-[#6d7380]" style="font-family: Inter, sans-serif; font-size: 0.96rem; line-height: 1.28;">Shop from the U.S. with a simple &amp; convenient process.</p>
                </div>
              </div>
            </article>

            <article class="rounded-[20px] border border-[#d9dde4] bg-[#f3f4f6] px-5 py-5">
              <div class="flex items-start gap-4">
                <img src="{{ asset("assets/Secure Payment.svg") }}" alt="Secure Payment" class="h-8 w-8 shrink-0 object-contain" />
                <div>
                  <h5 class="font-heading font-medium text-[1.3rem] uppercase leading-none text-[#101827]">Secure Payment</h5>
                  <p class="mt-2 text-[#6d7380]" style="font-family: Inter, sans-serif; font-size: 0.96rem; line-height: 1.28;">Trusted checkout options for a safe shopping experience.</p>
                </div>
              </div>
            </article>

            <article class="rounded-[20px] border border-[#d9dde4] bg-[#f3f4f6] px-5 py-5">
              <div class="flex items-start gap-4">
                <img src="{{ asset("assets/Essential Product Selection.svg") }}" alt="Essential Product Selection" class="h-8 w-8 shrink-0 object-contain" />
                <div>
                  <h5 class="font-heading font-medium text-[1.3rem] uppercase leading-none text-[#101827]">Essential Product Selection</h5>
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
        const collectionTabs = document.querySelectorAll(".collection-tab");
            const collectionPanels = document.querySelectorAll(".collection-panel");

            if (collectionTabs.length && collectionPanels.length) {
              const setActiveCollectionTab = (activeTab) => {
                const target = activeTab.dataset.tab;

                collectionTabs.forEach((tab) => {
                  const isActive = tab === activeTab;
                  tab.setAttribute("aria-selected", isActive ? "true" : "false");
                  tab.classList.remove("rounded-t-[12px]", "bg-[#183b74]", "text-white", "text-[#111827]");

                  if (isActive) {
                    tab.classList.add("rounded-t-[12px]", "bg-[#183b74]", "text-white");
                  } else {
                    tab.classList.add("text-[#111827]");
                  }
                });

                collectionPanels.forEach((panel) => {
                  const shouldShow = panel.dataset.panel === target;
                  panel.classList.toggle("hidden", !shouldShow);
                });
              };

              collectionTabs.forEach((tab) => {
                tab.addEventListener("click", () => {
                  setActiveCollectionTab(tab);
                });
              });

              const defaultCollectionTab = document.querySelector('.collection-tab[data-tab="new"]');
              if (defaultCollectionTab) {
                setActiveCollectionTab(defaultCollectionTab);
              }
            }

            const dealCountdown = document.getElementById("deal-countdown");
            if (dealCountdown) {
              const dayValue = Number.parseInt(dealCountdown.dataset.durationDays || "0", 10);
              const hourValue = Number.parseInt(dealCountdown.dataset.durationHours || "0", 10);
              const minuteValue = Number.parseInt(dealCountdown.dataset.durationMinutes || "0", 10);
              const secondValue = Number.parseInt(dealCountdown.dataset.durationSeconds || "0", 10);
              const countdownValues = {
                days: dealCountdown.querySelector('[data-countdown-value="days"]'),
                hours: dealCountdown.querySelector('[data-countdown-value="hours"]'),
                minutes: dealCountdown.querySelector('[data-countdown-value="minutes"]'),
                seconds: dealCountdown.querySelector('[data-countdown-value="seconds"]'),
              };

              let remainingSeconds = (dayValue * 24 * 60 * 60) + (hourValue * 60 * 60) + (minuteValue * 60) + secondValue;

              const renderCountdown = () => {
                const days = Math.floor(remainingSeconds / 86400);
                const hours = Math.floor((remainingSeconds % 86400) / 3600);
                const minutes = Math.floor((remainingSeconds % 3600) / 60);
                const seconds = remainingSeconds % 60;

                if (countdownValues.days) countdownValues.days.textContent = String(days).padStart(2, "0");
                if (countdownValues.hours) countdownValues.hours.textContent = String(hours).padStart(2, "0");
                if (countdownValues.minutes) countdownValues.minutes.textContent = String(minutes).padStart(2, "0");
                if (countdownValues.seconds) countdownValues.seconds.textContent = String(seconds).padStart(2, "0");
              };

              renderCountdown();

              if (remainingSeconds > 0) {
                window.setInterval(() => {
                  if (remainingSeconds <= 0) return;
                  remainingSeconds -= 1;
                  renderCountdown();
                }, 1000);
              }
            }
    </script>
@endsection
