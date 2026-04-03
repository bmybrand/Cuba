@extends('layouts.app')

@section('title', 'Food - Send Love to Cuba')

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

            .food-product-card h4 {
              display: -webkit-box;
              -webkit-line-clamp: 2;
              -webkit-box-orient: vertical;
              overflow: hidden;
              font-weight: 500;
              font-size: 1.45rem;
            }

            .food-product-card {
              min-height: 420px;
              padding-top: 1.75rem;
              padding-bottom: 1.75rem;
            }

            .food-product-card > div.relative.mt-3.mb-4 {
              height: 180px;
              margin-bottom: 1rem;
            }

            .food-product-card > div.relative.mt-3.mb-4 img {
              max-height: 200px;
            }

            .food-product-card .mt-auto {
              display: flex;
              flex-direction: column;
              gap: 0.7rem;
              padding-top: 1rem;
            }

            .food-product-card .mt-auto > * {
              margin-top: 0 !important;
            }

            .food-product-card p[class*="text-brand-red"] {
              color: #C6232F !important;
              font-weight: 500 !important;
            }

            .food-product-card .rating-score {
              color: #000000 !important;
              font-weight: 400 !important;
            }

            .food-product-card p.text-\[15px\].text-\[\#294678\] {
              font-weight: 500 !important;
            }

            #food-product-grid.food-product-list {
              grid-template-columns: 1fr !important;
              gap: 1.5rem !important;
            }

            #food-product-grid.food-product-list .food-product-card:not(.hidden) {
              min-height: 0;
              display: grid;
              grid-template-columns: 220px minmax(0, 1fr);
              align-items: center;
              gap: 1.5rem;
              padding: 1.5rem;
            }

            #food-product-grid.food-product-list .food-product-card.hidden {
              display: none !important;
            }

            #food-product-grid.food-product-list .food-product-card > div.relative.mt-3.mb-4 {
              height: 180px;
              margin: 0 !important;
            }

            #food-product-grid.food-product-list .food-product-card .mt-auto {
              align-self: center;
              justify-content: center;
              min-height: 180px;
              padding-top: 0;
            }

            #food-product-grid.food-product-list .food-product-card::after,
            #food-product-grid.food-product-list .food-product-card .pointer-events-none.absolute.inset-x-5.top-full {
              display: none !important;
            }

            #food-product-grid.food-product-list .food-product-card:hover {
              border-radius: 20px !important;
            }

            #food-product-grid.food-product-list .food-product-card .pointer-events-none.absolute.right-4.top-4 {
              right: 1.25rem;
              top: 1.25rem;
            }

            .food-view-button.is-active {
              background: #173a75 !important;
              border-color: #173a75 !important;
              color: #ffffff !important;
            }

            #service-features h5 {
              font-weight: 500;
            }

            #service-features p {
              font-family: "Inter", sans-serif !important;
              font-size: 0.96rem !important;
              line-height: 1.28 !important;
            }

            .food-categories-panel ul span.text-\[1\.3rem\].leading-none {
              display: none;
            }

            .food-categories-panel [role="button"].text-\[1\.3rem\].leading-none {
              appearance: none;
              -webkit-appearance: none;
              min-width: 1.75rem;
              width: 1.75rem;
              height: 1.75rem;
              display: inline-flex;
              align-items: center;
              justify-content: center;
              padding: 0;
              margin: 0;
              border: 0;
              background: transparent;
              line-height: 1;
              flex-shrink: 0;
              text-align: center;
              color: #6f7788 !important;
              font-weight: 400;
              vertical-align: middle;
              transform: translateY(1px);
            }

            .food-subcategory-list {
              overflow: hidden;
              transition: max-height 260ms ease, opacity 220ms ease, margin-top 220ms ease;
              will-change: max-height, opacity;
            }

            .price-slider {
              -webkit-appearance: none;
              appearance: none;
              height: 20px;
              border-radius: 999px;
              background: transparent;
              outline: none;
              pointer-events: none;
            }

            .price-slider::-webkit-slider-runnable-track {
              height: 20px;
              background: transparent;
            }

            .price-slider::-webkit-slider-thumb {
              -webkit-appearance: none;
              appearance: none;
              width: 14px;
              height: 14px;
              margin-top: 3px;
              border: 0;
              border-radius: 999px;
              background: #C6232F;
              box-shadow: 0 0 0 4px rgba(198, 35, 47, 0.12);
              pointer-events: auto;
            }

            .price-slider::-moz-range-track {
              height: 20px;
              border: 0;
              background: transparent;
            }

            .price-slider::-moz-range-thumb {
              width: 14px;
              height: 14px;
              border: 0;
              border-radius: 999px;
              background: #C6232F;
              box-shadow: 0 0 0 4px rgba(198, 35, 47, 0.12);
              pointer-events: auto;
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
          <img id="category-page-banner-image" src="{{ asset("assets/foodbanner.svg") }}" alt="Food delivery background" class="absolute inset-0 h-full w-full object-cover" />
          <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(9,18,34,0.88),rgba(9,18,34,0.72),rgba(9,18,34,0.88))]"></div>
          <div class="relative mx-auto max-w-[1540px] px-10 text-center md:px-16 xl:px-24">
            <h1 id="category-page-title" class="font-heading text-[clamp(56px,7vw,102px)] uppercase leading-[0.88] text-white">Categories</h1>
            <p class="mt-4 text-[17px] text-white/85"><a href="{{ route('home') }}" class="underline-offset-2 hover:underline">Home</a> <span class="mx-2">&gt;</span> <span id="category-page-crumb">Categories</span></p>
          </div>
        </section>
        <section class="bg-white pb-[72px] pt-[56px] md:pb-[96px] md:pt-[72px]">
          <div class="mx-auto grid max-w-[1540px] gap-8 px-10 md:px-16 xl:grid-cols-[340px_minmax(0,1fr)] xl:px-24">
            <aside class="space-y-6">
              <article class="rounded-[22px] border border-[#e8edf4] bg-[#f9fafc] p-5">
                <div class="flex overflow-hidden rounded-[14px] border border-[#dde3ec] bg-white">
                  <input type="search" placeholder="Search" class="w-full border-0 bg-transparent px-4 py-3 text-[15px] text-[#22314f] outline-none placeholder:text-[#8a94a8]" />
                  <button type="button" class="grid h-[52px] w-[52px] place-items-center bg-brand-red text-white">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                      <circle cx="11" cy="11" r="7"></circle>
                      <path d="m20 20-3.5-3.5"></path>
                    </svg>
                  </button>
                </div>
              </article>

              <article class="food-categories-panel rounded-[26px] bg-[#f7f7f8] px-7 py-8">
                <div class="flex items-center gap-3">
                  <span class="inline-block h-0 w-0 border-b-[10px] border-l-[16px] border-t-[10px] border-b-transparent border-l-brand-red border-t-transparent"></span>
                  <h3 class="font-heading text-[1.7rem] font-medium uppercase leading-none text-[#091322]">Price</h3>
                </div>

                <div class="mt-8 space-y-5">
                  <div class="relative h-5">
                    <div class="pointer-events-none absolute top-1/2 h-1 w-full -translate-y-1/2 rounded-full bg-white"></div>
                    <div id="food-price-track" class="pointer-events-none absolute top-1/2 h-1 -translate-y-1/2 rounded-full bg-brand-red"></div>
                    <input
                      id="food-price-min-range"
                      class="price-slider absolute inset-0 block w-full cursor-pointer"
                      type="range"
                      min="0"
                      max="660"
                      step="10"
                      value="0"
                      aria-label="Minimum price"
                    />
                    <input
                      id="food-price-max-range"
                      class="price-slider absolute inset-0 block w-full cursor-pointer"
                      type="range"
                      min="0"
                      max="660"
                      step="10"
                      value="660"
                      aria-label="Maximum price"
                    />
                  </div>

                  <div class="grid grid-cols-2 gap-3">
                    <input id="food-price-min-input" type="number" min="0" max="660" step="10" value="0" class="h-12 rounded-[14px] border border-[#d8dee8] bg-white px-4 text-[1rem] text-[#091322] outline-none" aria-label="Minimum price input" />
                    <input id="food-price-max-input" type="number" min="0" max="660" step="10" value="660" class="h-12 rounded-[14px] border border-[#d8dee8] bg-white px-4 text-[1rem] text-[#091322] outline-none" aria-label="Maximum price input" />
                  </div>
                </div>

                <div class="mt-8 flex items-center justify-between gap-4">
                  <p id="food-price-value" class="text-[1.2rem] text-[#6a7282]">0 - 660</p>
                  <button
                    id="food-price-filter"
                    type="button"
                    class="inline-flex min-h-[52px] items-center justify-center rounded-full bg-[#173a75] px-8 font-heading text-[1.1rem] uppercase tracking-[0.08em] text-white transition-colors duration-200 hover:bg-brand-red"
                  >
                    Filter
                  </button>
                </div>
              </article>

              <article class="rounded-[26px] bg-[#f7f7f8] px-7 py-8">
                <div class="flex items-center gap-3">
                  <span class="inline-block h-0 w-0 border-b-[10px] border-l-[16px] border-t-[10px] border-b-transparent border-l-brand-red border-t-transparent"></span>
                  <h3 class="font-heading text-[1.7rem] font-medium uppercase leading-none text-[#091322]">Categories</h3>
                </div>

                <div class="mt-8 space-y-6 text-[1.08rem] text-[#6f7788]">
                  <div>
                    <div class="flex items-center justify-between">
                      <button type="button" data-food-category="Food" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Food</button>
                      <span id="food-category-toggle" class="text-[1.3rem] leading-none" role="button" tabindex="0" aria-expanded="true" aria-controls="food-subcategory-list" style="cursor: pointer;">-</span>
                    </div>
                    <ul id="food-subcategory-list" class="mt-4 space-y-4 pl-5">
                      <li>
                        <button type="button" data-food-category="Coffee Time" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Coffee Time</button>
                      </li>
                      <li>
                        <button type="button" data-food-category="Rice & Beans" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Rice &amp; Beans</button>
                      </li>
                      <li>
                        <button type="button" data-food-category="SPAM ... SPAM ... SPAM" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">SPAM ... SPAM ... SPAM</button>
                      </li>
                      <li>
                        <button type="button" data-food-category="Vienna Sausages" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Vienna Sausages</button>
                      </li>
                      <li>
                        <button type="button" data-food-category="Tuna Fish" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Tuna Fish</button>
                      </li>
                      <li>
                        <button type="button" data-food-category="Stock The Pantry" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Stock The Pantry</button>
                      </li>
                      <li>
                        <button type="button" data-food-category="Italian Food" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Italian Food</button>
                      </li>
                      <li>
                        <button type="button" data-food-category="Cookies" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Cookies</button>
                      </li>
                    </ul>
                  </div>

                  <div class="flex items-center justify-between">
                    <button type="button" data-food-category="Solar Products" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Solar Products</button>
                    <span class="text-[1.3rem] leading-none">+</span>
                  </div>
                  <div class="flex items-center justify-between">
                    <button type="button" data-food-category="Electric Scooters" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Electric Scooters</button>
                    <span class="text-[1.3rem] leading-none">+</span>
                  </div>
                  <div class="flex items-center justify-between">
                    <button type="button" data-food-category="Electric Bikes" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Electric Bikes</button>
                    <span class="text-[1.3rem] leading-none">+</span>
                  </div>
                  <div class="flex items-center justify-between">
                    <button type="button" data-food-category="Health & Wellness" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Health &amp; Wellness</button>
                    <span class="text-[1.3rem] leading-none">+</span>
                  </div>
                  <div class="flex items-center justify-between">
                    <button type="button" data-food-category="Appliances" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Appliances</button>
                    <span class="text-[1.3rem] leading-none">+</span>
                  </div>
                  <div class="flex items-center justify-between">
                    <button type="button" data-food-category="Furniture" class="food-category-button text-left transition-colors duration-200 hover:text-brand-red">Furniture</button>
                    <span class="text-[1.3rem] leading-none">+</span>
                  </div>
                </div>
              </article>

              <article class="rounded-[26px] bg-[#f7f7f8] px-7 py-8">
                <div class="flex items-center gap-3">
                  <span class="inline-block h-0 w-0 border-b-[10px] border-l-[16px] border-t-[10px] border-b-transparent border-l-brand-red border-t-transparent"></span>
                  <h3 class="font-heading text-[1.7rem] font-medium uppercase leading-none text-[#091322]">Recent Products</h3>
                </div>
                <div class="mt-7 space-y-5">
                  <article class="flex items-start gap-5 border-b border-[#d9dde4] pb-6">
                    <div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center">
                      <img src="{{ asset("assets/barsoap.jpeg") }}" alt="Recent product" class="max-h-[82px] w-auto object-contain" />
                    </div>
                    <div class="min-w-0 pt-1">
                      <h4 class="font-heading text-[1.28rem] uppercase leading-[0.92] text-[#091322]">Lorem Ipsum<br />Dolor Sit Amet</h4>
                      <p class="mt-2 text-[1.38rem] font-medium leading-none text-brand-red">$466.30</p>
                      <div class="mt-2 flex items-center gap-0.5 text-[16px] leading-none">
                        <span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span>
                      </div>
                    </div>
                  </article>
                  <article class="flex items-start gap-5 border-b border-[#d9dde4] pb-6">
                    <div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center">
                      <img src="{{ asset("assets/electricbike.svg") }}" alt="Recent product" class="max-h-[82px] w-auto object-contain" />
                    </div>
                    <div class="min-w-0 pt-1">
                      <h4 class="font-heading text-[1.28rem] uppercase leading-[0.92] text-[#091322]">Lorem Ipsum<br />Dolor Sit Amet</h4>
                      <p class="mt-2 text-[1.38rem] font-medium leading-none text-brand-red">$466.30</p>
                      <div class="mt-2 flex items-center gap-0.5 text-[16px] leading-none">
                        <span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span>
                      </div>
                    </div>
                  </article>
                  <article class="flex items-start gap-5 border-b border-[#d9dde4] pb-6">
                    <div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center">
                      <img src="{{ asset("assets/mariabiscits.jpeg") }}" alt="Recent product" class="max-h-[82px] w-auto object-contain" />
                    </div>
                    <div class="min-w-0 pt-1">
                      <h4 class="font-heading text-[1.28rem] uppercase leading-[0.92] text-[#091322]">Lorem Ipsum<br />Dolor Sit Amet</h4>
                      <p class="mt-2 text-[1.38rem] font-medium leading-none text-brand-red">$466.30</p>
                      <div class="mt-2 flex items-center gap-0.5 text-[16px] leading-none">
                        <span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span>
                      </div>
                    </div>
                  </article>
                  <article class="flex items-start gap-5 border-b border-[#d9dde4] pb-6">
                    <div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center">
                      <img src="{{ asset("assets/electricgenrater.jpeg") }}" alt="Recent product" class="max-h-[82px] w-auto object-contain" />
                    </div>
                    <div class="min-w-0 pt-1">
                      <h4 class="font-heading text-[1.28rem] uppercase leading-[0.92] text-[#091322]">Lorem Ipsum<br />Dolor Sit Amet</h4>
                      <p class="mt-2 text-[1.38rem] font-medium leading-none text-brand-red">$466.30</p>
                      <div class="mt-2 flex items-center gap-0.5 text-[16px] leading-none">
                        <span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span>
                      </div>
                    </div>
                  </article>
                  <article class="flex items-start gap-5">
                    <div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center">
                      <img src="{{ asset("assets/flashlight.jpeg") }}" alt="Recent product" class="max-h-[82px] w-auto object-contain" />
                    </div>
                    <div class="min-w-0 pt-1">
                      <h4 class="font-heading text-[1.28rem] uppercase leading-[0.92] text-[#091322]">Lorem Ipsum<br />Dolor Sit Amet</h4>
                      <p class="mt-2 text-[1.38rem] font-medium leading-none text-brand-red">$466.30</p>
                      <div class="mt-2 flex items-center gap-0.5 text-[16px] leading-none">
                        <span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span>
                      </div>
                    </div>
                  </article>
                </div>
              </article>

              <article class="rounded-[26px] bg-[#f7f7f8] px-7 py-8">
                <div class="flex items-center gap-3">
                  <span class="inline-block h-0 w-0 border-b-[10px] border-l-[16px] border-t-[10px] border-b-transparent border-l-brand-red border-t-transparent"></span>
                  <h3 class="font-heading text-[1.7rem] font-medium uppercase leading-none text-[#091322]">Product Tags</h3>
                </div>
                <div class="mt-6 flex flex-wrap gap-3">
                  <span class="rounded-full bg-white px-3 py-1.5 text-[10px] text-[#173a75]">Appliances</span>
                  <span class="rounded-full bg-white px-3 py-1.5 text-[10px] text-[#173a75]">Food Packs</span>
                  <span class="rounded-full bg-white px-3 py-1.5 text-[10px] text-[#173a75]">Personal Care</span>
                  <span class="rounded-full bg-white px-3 py-1.5 text-[10px] text-[#173a75]">Generators</span>
                  <span class="rounded-full bg-white px-3 py-1.5 text-[10px] text-[#173a75]">Personal Care</span>
                  <span class="rounded-full bg-white px-3 py-1.5 text-[10px] text-[#173a75]">Solar Kits</span>
                </div>
              </article>

              <article class="rounded-[26px] bg-[#f7f7f8] px-7 py-8">
                <div class="flex items-center gap-3">
                  <span class="inline-block h-0 w-0 border-b-[10px] border-l-[16px] border-t-[10px] border-b-transparent border-l-brand-red border-t-transparent"></span>
                  <h3 class="font-heading text-[1.7rem] font-medium uppercase leading-none text-[#091322]">Reviews</h3>
                </div>
                <div class="mt-6 space-y-4">
                  <button type="button" data-review-stars="5" class="food-review-button flex items-center gap-4">
                    <span class="h-4 w-4 rounded-full border border-[#cfd5df] bg-transparent"></span>
                    <span class="flex items-center gap-0.5 text-[18px] leading-none">
                      <span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span>
                    </span>
                  </button>
                  <button type="button" data-review-stars="4" class="food-review-button flex items-center gap-4">
                    <span class="h-4 w-4 rounded-full border border-[#cfd5df] bg-transparent"></span>
                    <span class="flex items-center gap-0.5 text-[18px] leading-none">
                      <span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span>
                    </span>
                  </button>
                  <button type="button" data-review-stars="3" class="food-review-button flex items-center gap-4">
                    <span class="h-4 w-4 rounded-full border border-[#cfd5df] bg-transparent"></span>
                    <span class="flex items-center gap-0.5 text-[18px] leading-none">
                      <span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span>
                    </span>
                  </button>
                  <button type="button" data-review-stars="2" class="food-review-button flex items-center gap-4">
                    <span class="h-4 w-4 rounded-full border border-[#cfd5df] bg-transparent"></span>
                    <span class="flex items-center gap-0.5 text-[18px] leading-none">
                      <span class="text-[#f1b400]">&#9733;</span><span class="text-[#f1b400]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span>
                    </span>
                  </button>
                  <button type="button" data-review-stars="1" class="food-review-button flex items-center gap-4">
                    <span class="h-4 w-4 rounded-full border border-[#cfd5df] bg-transparent"></span>
                    <span class="flex items-center gap-0.5 text-[18px] leading-none">
                      <span class="text-[#f1b400]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span><span class="text-[#d1d5dd]">&#9733;</span>
                    </span>
                  </button>
                </div>
              </article>
            </aside>

            <div>
              <div class="mb-6 flex flex-wrap items-center justify-between gap-4 rounded-[22px] border border-[#e8edf4] bg-[#f9fafc] px-5 py-4">
                <p id="food-results-count" class="text-[14px] text-[#6d7890]">Showing 1-18 of 18 food results</p>
                <div class="flex items-center gap-3">
                  <label class="text-[14px] text-[#6d7890]" for="food-sort">Sort by latest</label>
                  <select id="food-sort" class="rounded-[12px] border border-[#d7dde7] bg-white px-4 py-2 text-[14px] text-[#13213d] outline-none">
                    <option>Sort by latest</option>
                    <option>Price: low to high</option>
                    <option>Price: high to low</option>
                    <option>Most popular</option>
                  </select>
                  <button id="food-list-view-button" type="button" class="food-view-button grid h-10 w-10 place-items-center rounded-[12px] border border-[#d7dde7] bg-white text-[#13213d]" aria-label="List view">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8">
                      <path d="M4 7h16M4 12h16M4 17h16"></path>
                    </svg>
                  </button>
                  <button id="food-grid-view-button" type="button" class="food-view-button is-active grid h-10 w-10 place-items-center rounded-[12px] border border-[#d7dde7] bg-white text-[#13213d]" aria-label="Grid view">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8">
                      <rect x="4" y="4" width="6" height="6"></rect>
                      <rect x="14" y="4" width="6" height="6"></rect>
                      <rect x="4" y="14" width="6" height="6"></rect>
                      <rect x="14" y="14" width="6" height="6"></rect>
                    </svg>
                  </button>
                </div>
              </div>

              <div id="food-product-grid" class="grid items-start grid-cols-1 gap-x-5 gap-y-20 sm:grid-cols-2 xl:grid-cols-3">
                <article onclick="window.location.href='{{ url('/shop') }}'" class="food-product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-price="48.30" data-category="Stock The Pantry">
                  <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                    <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg></button>
                    <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button>
                    <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg></button>
                  </div>
                  <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center">
                    <img src="{{ asset("assets/chips.jpeg") }}" alt="Assorted Lunch Pack Snacks" class="max-h-[146px] w-full object-contain" />
                  </div>
                  <div class="mt-auto">
                    <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]"><span class="text-[#f3b000]">&#9733;</span><span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span></div>
                    <p class="mt-2 text-[15px] text-[#294678]">Food</p>
                    <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Assorted Lunch Pack Snacks</h4>
                    <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$48.30</p>
                    <div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150">
                      <button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="20" r="1.6"></circle><circle cx="18" cy="20" r="1.6"></circle><path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path></svg><span>Add To Cart</span></button>
                    </div>
                  </div>
                </article>
                <article onclick="window.location.href='{{ url('/shop') }}'" class="food-product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-price="62.40" data-category="Cookies">
                  <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                    <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg></button>
                    <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button>
                    <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg></button>
                  </div>
                  <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center"><img src="{{ asset("assets/mariabiscits.jpeg") }}" alt="Maria Biscuits Family Pack" class="max-h-[146px] w-full object-contain" /></div>
                  <div class="mt-auto">
                    <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]"><span class="text-[#f3b000]">&#9733;</span><span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span></div>
                    <p class="mt-2 text-[15px] text-[#294678]">Food</p>
                    <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Maria Biscuits Family Pack</h4>
                    <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$48.30</p>
                    <div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150"><button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="20" r="1.6"></circle><circle cx="18" cy="20" r="1.6"></circle><path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path></svg><span>Add To Cart</span></button></div>
                  </div>
                </article>
                <article onclick="window.location.href='{{ url('/shop') }}'" class="food-product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-price="89.50" data-category="Stock The Pantry">
                  <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                    <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg></button>
                    <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button>
                    <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg></button>
                  </div>
                  <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center"><img src="{{ asset("assets/food.svg") }}" alt="Pantry Staples Bundle" class="max-h-[146px] w-full object-contain" /></div>
                  <div class="mt-auto">
                    <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]"><span class="text-[#f3b000]">&#9733;</span><span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span></div>
                    <p class="mt-2 text-[15px] text-[#294678]">Food</p>
                    <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Pantry Staples Bundle</h4>
                    <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$48.30</p>
                    <div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150"><button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="20" r="1.6"></circle><circle cx="18" cy="20" r="1.6"></circle><path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path></svg><span>Add To Cart</span></button></div>
                  </div>
                </article>
                <article onclick="window.location.href='{{ url('/shop') }}'" class="food-product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-price="128.00" data-category="Stock The Pantry">
                  <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                    <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg></button>
                    <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button>
                    <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg></button>
                  </div>
                  <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center"><img src="{{ asset("assets/chips.jpeg") }}" alt="Family Chips Bundle" class="max-h-[146px] w-full object-contain" /></div>
                  <div class="mt-auto">
                    <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]"><span class="text-[#f3b000]">&#9733;</span><span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">58 reviews</span></div>
                    <p class="mt-2 text-[15px] text-[#294678]">Food</p>
                    <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Family Chips Bundle</h4>
                    <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$48.30</p>
                    <div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150"><button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="20" r="1.6"></circle><circle cx="18" cy="20" r="1.6"></circle><path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path></svg><span>Add To Cart</span></button></div>
                  </div>
                </article>
                <article onclick="window.location.href='{{ url('/shop') }}'" class="food-product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-price="26.99"><div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100"><button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg></button><button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button><button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg></button></div><div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center"><img src="{{ asset("assets/mariabiscits.jpeg") }}" alt="Coffee Essentials Box" class="max-h-[146px] w-full object-contain" /></div><div class="mt-auto"><div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]"><span class="text-[#f3b000]">&#9733;</span><span class="rating-score">(4.8/5)</span><span class="rating-count text-[#8a93a2]">41 reviews</span></div><p class="mt-2 text-[15px] text-[#294678]">Food</p><h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Coffee Essentials Box</h4><p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$26.99</p><div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150"><button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="20" r="1.6"></circle><circle cx="18" cy="20" r="1.6"></circle><path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path></svg><span>Add To Cart</span></button></div></div></article>
                <article onclick="window.location.href='{{ url('/shop') }}'" class="food-product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-price="18.75"><div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100"><button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg></button><button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button><button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg></button></div><div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center"><img src="{{ asset("assets/chips.jpeg") }}" alt="Cracker Family Pack" class="max-h-[146px] w-full object-contain" /></div><div class="mt-auto"><div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]"><span class="text-[#f3b000]">&#9733;</span><span class="rating-score">(4.7/5)</span><span class="rating-count text-[#8a93a2]">33 reviews</span></div><p class="mt-2 text-[15px] text-[#294678]">Food</p><h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Cracker Family Pack</h4><p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$18.75</p><div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150"><button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="20" r="1.6"></circle><circle cx="18" cy="20" r="1.6"></circle><path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path></svg><span>Add To Cart</span></button></div></div></article>
                <article onclick="window.location.href='{{ url('/shop') }}'" class="food-product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-price="42.60"><div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100"><button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg></button><button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button><button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg></button></div><div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center"><img src="{{ asset("assets/food.svg") }}" alt="Rice and Beans Bundle" class="max-h-[146px] w-full object-contain" /></div><div class="mt-auto"><div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]"><span class="text-[#f3b000]">&#9733;</span><span class="rating-score">(4.9/5)</span><span class="rating-count text-[#8a93a2]">52 reviews</span></div><p class="mt-2 text-[15px] text-[#294678]">Food</p><h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Rice &amp; Beans Bundle</h4><p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$42.60</p><div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150"><button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="20" r="1.6"></circle><circle cx="18" cy="20" r="1.6"></circle><path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path></svg><span>Add To Cart</span></button></div></div></article>
                <article onclick="window.location.href='{{ url('/shop') }}'" class="food-product-card cursor-pointer group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-price="57.20"><div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100"><button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg></button><button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button><button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg></button></div><div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center"><img src="{{ asset("assets/food.svg") }}" alt="Canned Goods Combo" class="max-h-[146px] w-full object-contain" /></div><div class="mt-auto"><div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]"><span class="text-[#f3b000]">&#9733;</span><span class="rating-score">(4.8/5)</span><span class="rating-count text-[#8a93a2]">28 reviews</span></div><p class="mt-2 text-[15px] text-[#294678]">Food</p><h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Canned Goods Combo</h4><p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$57.20</p><div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150"><button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="20" r="1.6"></circle><circle cx="18" cy="20" r="1.6"></circle><path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path></svg><span>Add To Cart</span></button></div></div></article>
              </div>

              <p id="food-empty-state" class="mt-12 hidden text-center font-heading text-[1.35rem] uppercase text-[#173a75]">No Products</p>

              <div id="food-pagination" class="mt-20 flex items-center justify-center gap-3">
                <button type="button" data-food-page="1" class="grid h-10 w-10 place-items-center rounded-full bg-brand-red text-white">1</button>
                <button type="button" data-food-page="2" class="grid h-10 w-10 place-items-center rounded-full border border-[#d7dde7] bg-white text-[#173a75]">2</button>
              </div>
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
        const foodPriceMinRange = document.getElementById("food-price-min-range");
            const foodPriceMaxRange = document.getElementById("food-price-max-range");
            const foodPriceMinInput = document.getElementById("food-price-min-input");
            const foodPriceMaxInput = document.getElementById("food-price-max-input");
            const foodPriceTrack = document.getElementById("food-price-track");
            const foodPriceValue = document.getElementById("food-price-value");
            const foodPriceFilterButton = document.getElementById("food-price-filter");
            const foodProductGrid = document.getElementById("food-product-grid");
            const foodResultsCount = document.getElementById("food-results-count");
            const foodEmptyState = document.getElementById("food-empty-state");
            const foodPagination = document.getElementById("food-pagination");
            const foodSortSelect = document.getElementById("food-sort");
            const foodListViewButton = document.getElementById("food-list-view-button");
            const foodGridViewButton = document.getElementById("food-grid-view-button");
            const foodPageButtons = Array.from(document.querySelectorAll("[data-food-page]"));
            const foodCategoryButtons = Array.from(document.querySelectorAll("[data-food-category]"));
            const foodReviewButtons = Array.from(document.querySelectorAll("[data-review-stars]"));
            const foodMainCategoryButton = document.querySelector('[data-food-category="Food"]');
            const foodCategorySection = foodMainCategoryButton ? foodMainCategoryButton.closest("div") : null;
            const foodSubcategoryList = document.getElementById("food-subcategory-list");
            const foodLegacyCategoryToggleSymbol = foodCategorySection ? foodCategorySection.querySelector("span.text-\\[1\\.3rem\\].leading-none") : null;
            const foodCategoryToggleButton = document.getElementById("food-category-toggle");
            let foodCategoryToggleSymbol = foodCategoryToggleButton || foodLegacyCategoryToggleSymbol;
            const foodCategoryContainer = foodCategorySection ? foodCategorySection.parentElement?.parentElement : null;
            const foodPageSize = 12;
            let activeFoodPage = 1;
            let activeFoodCategory = "Food";
            let activeFoodReview = 0;
            let activeFoodView = "grid";
            let foodSubcategoriesExpanded = false;

            const extraFoodCategoryGroups = {
              "Solar Products": ["Solar Kits", "Solar Lights", "Solar Generators"],
              "Electric Scooters": ["Foldable Scooters", "Long Range Scooters"],
              "Electric Bikes": ["Compact E-Bikes", "Cargo E-Bikes"],
              "Health & Wellness": ["Daily Care", "Mobility Support"],
              Appliances: ["Small Appliances", "Kitchen Essentials"],
              Furniture: ["Bedroom Sets", "Storage Furniture"],
            };

            const extraFoodProducts = [
              { name: "Coffee Essentials Box", category: "Coffee Time", price: "26.99", image: "assets/mariabiscits.jpeg", reviews: "41", rating: "4.8/5" },
              { name: "Cracker Family Pack", category: "Cookies", price: "18.75", image: "assets/chips.jpeg", reviews: "33", rating: "4.7/5" },
              { name: "Rice & Beans Bundle", category: "Rice & Beans", price: "42.60", image: "assets/food.svg", reviews: "52", rating: "4.9/5" },
              { name: "Canned Goods Combo", category: "Stock The Pantry", price: "57.20", image: "assets/food.svg", reviews: "28", rating: "4.8/5" },
              { name: "Cooking Oil & Flour Set", category: "Italian Food", price: "33.40", image: "assets/food.svg", reviews: "39", rating: "4.8/5" },
              { name: "Breakfast Favorites Box", category: "Coffee Time", price: "21.90", image: "assets/mariabiscits.jpeg", reviews: "22", rating: "4.6/5" },
              { name: "Pasta Pantry Pack", category: "Italian Food", price: "17.50", image: "assets/food.svg", reviews: "25", rating: "4.7/5" },
              { name: "Milk Powder Bundle", category: "Stock The Pantry", price: "64.80", image: "assets/food.svg", reviews: "44", rating: "4.9/5" },
              { name: "Chocolate Cookies Tin", category: "Cookies", price: "12.99", image: "assets/mariabiscits.jpeg", reviews: "19", rating: "4.8/5" },
              { name: "Household Snack Crate", category: "Stock The Pantry", price: "72.35", image: "assets/chips.jpeg", reviews: "46", rating: "4.9/5" },
              { name: "Cafe Cubano Pack", category: "Coffee Time", price: "29.80", image: "assets/mariabiscits.jpeg", reviews: "37", rating: "4.8/5" },
              { name: "Protein Pantry Combo", category: "SPAM ... SPAM ... SPAM", price: "95.10", image: "assets/food.svg", reviews: "48", rating: "4.9/5" },
              { name: "Sardine Supper Bundle", category: "Tuna Fish", price: "38.45", image: "assets/food.svg", reviews: "27", rating: "4.7/5" },
              { name: "Family Groceries Crate", category: "Vienna Sausages", price: "118.90", image: "assets/chips.jpeg", reviews: "63", rating: "4.9/5" },
            ];

            const createFoodCardMarkup = (product) => `
              <article class="food-product-card group relative flex min-h-[322px] flex-col rounded-[20px] bg-[#f7f8fb] p-5 transition-[box-shadow,border-radius] duration-300 hover:z-20 hover:rounded-b-none hover:shadow-soft after:pointer-events-auto after:absolute after:inset-x-0 after:top-full after:z-10 after:h-[60px] after:origin-top after:scale-y-0 after:rounded-b-[20px] after:bg-[#f7f8fb] after:content-[''] after:transition-transform after:duration-300 after:ease-out hover:after:scale-y-100" data-price="${product.price}" data-category="${product.category}">
                <div class="pointer-events-none absolute right-4 top-4 z-20 flex translate-x-2 flex-col gap-2 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-x-0 group-hover:opacity-100">
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 20-1.4-1.3C5.4 14 2 10.9 2 7.1A4.1 4.1 0 0 1 6.2 3 4.7 4.7 0 0 1 12 6.1 4.7 4.7 0 0 1 17.8 3 4.1 4.1 0 0 1 22 7.1c0 3.8-3.4 6.9-8.6 11.6L12 20Z"></path></svg></button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><rect x="8" y="8" width="10" height="10" rx="2"></rect><path d="M6 16H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button>
                  <button type="button" class="grid h-9 w-9 place-items-center rounded-xl border border-[#d9dde7] bg-white text-[#162541] transition-colors duration-300 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path></svg></button>
                </div>
                <div class="relative mt-3 mb-4 flex h-[112px] items-center justify-center"><img src="${product.image}" alt="${product.name}" class="max-h-[146px] w-full object-contain" /></div>
                <div class="mt-auto">
                  <div class="flex items-center gap-1.5 text-[11px] text-[#8a93a2]"><span class="text-[#f3b000]">&#9733;</span><span class="rating-score">(${product.rating})</span><span class="rating-count text-[#8a93a2]">${product.reviews} reviews</span></div>
                  <p class="mt-2 text-[15px] text-[#294678]">Food</p>
                  <h4 class="mt-1 font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">${product.name}</h4>
                  <p class="mt-2 font-heading text-[1.9rem] leading-none text-brand-red">$${product.price}</p>
                  <div class="pointer-events-none absolute inset-x-5 top-full z-20 mt-0 -translate-y-3 opacity-0 transition-[transform,opacity] duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100 group-hover:delay-150"><button type="button" class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[9px] bg-[#173a75] px-4 font-heading text-[1rem] uppercase text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-red"><svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="20" r="1.6"></circle><circle cx="18" cy="20" r="1.6"></circle><path d="M3 4h2l2.4 10.2a1 1 0 0 0 1 .8h8.8a1 1 0 0 0 1-.8L20 7H7"></path></svg><span>Add To Cart</span></button></div>
                </div>
              </article>`;

            if (foodProductGrid) {
              extraFoodProducts.forEach((product) => {
                foodProductGrid.insertAdjacentHTML("beforeend", createFoodCardMarkup(product));
              });
            }

            const assignFoodCardOrder = () => {
              Array.from(document.querySelectorAll(".food-product-card")).forEach((card, index) => {
                card.dataset.originalIndex = `${index}`;
              });
            };

            const sortFoodProducts = () => {
              if (!foodProductGrid) {
                return;
              }

              const cards = Array.from(foodProductGrid.querySelectorAll(".food-product-card"));
              const sortMode = foodSortSelect?.value || "latest";

              cards.sort((a, b) => {
                const aPrice = Number.parseFloat(a.dataset.price || "0") || 0;
                const bPrice = Number.parseFloat(b.dataset.price || "0") || 0;
                const aReviews = Number.parseInt((a.querySelector(".rating-count")?.textContent || "").replace(/[^\d]/g, ""), 10) || 0;
                const bReviews = Number.parseInt((b.querySelector(".rating-count")?.textContent || "").replace(/[^\d]/g, ""), 10) || 0;
                const aRating = Number.parseFloat((a.querySelector(".rating-score")?.textContent || "").replace(/[^\d.]/g, "")) || 0;
                const bRating = Number.parseFloat((b.querySelector(".rating-score")?.textContent || "").replace(/[^\d.]/g, "")) || 0;
                const aIndex = Number.parseInt(a.dataset.originalIndex || "0", 10);
                const bIndex = Number.parseInt(b.dataset.originalIndex || "0", 10);

                if (sortMode === "price-low") {
                  return aPrice - bPrice || aIndex - bIndex;
                }

                if (sortMode === "price-high") {
                  return bPrice - aPrice || aIndex - bIndex;
                }

                if (sortMode === "popular") {
                  return bReviews - aReviews || bRating - aRating || aIndex - bIndex;
                }

                return aIndex - bIndex;
              });

              cards.forEach((card) => foodProductGrid.appendChild(card));
            };

            const syncFoodView = () => {
              if (!foodProductGrid) {
                return;
              }

              const isListView = activeFoodView === "list";
              foodProductGrid.classList.toggle("food-product-list", isListView);
              foodProductGrid.classList.toggle("xl:grid-cols-3", !isListView);
              foodProductGrid.classList.toggle("sm:grid-cols-2", !isListView);
              foodProductGrid.classList.toggle("grid-cols-1", !isListView);

              if (foodListViewButton) {
                foodListViewButton.classList.toggle("is-active", isListView);
              }

              if (foodGridViewButton) {
                foodGridViewButton.classList.toggle("is-active", !isListView);
              }
            };

            assignFoodCardOrder();

            const syncFoodPagination = () => {
              const foodProductCards = Array.from(document.querySelectorAll(".food-product-card"));
              const visibleCards = foodProductCards.filter((card) => !card.classList.contains("hidden-by-filter") && !card.classList.contains("hidden-by-category") && !card.classList.contains("hidden-by-review"));
              const totalVisible = visibleCards.length;
              const totalPages = Math.ceil(totalVisible / foodPageSize);

              if (totalPages === 0) {
                activeFoodPage = 1;
              } else if (activeFoodPage > totalPages) {
                activeFoodPage = totalPages;
              }

              visibleCards.forEach((card, index) => {
                const pageNumber = Math.floor(index / foodPageSize) + 1;
                card.classList.toggle("hidden-by-page", pageNumber !== activeFoodPage);
              });

              foodProductCards
                .filter((card) => card.classList.contains("hidden-by-filter"))
                .forEach((card) => card.classList.add("hidden-by-page"));

              foodProductCards
                .filter((card) => card.classList.contains("hidden-by-category"))
                .forEach((card) => card.classList.add("hidden-by-page"));

              foodProductCards
                .filter((card) => card.classList.contains("hidden-by-review"))
                .forEach((card) => card.classList.add("hidden-by-page"));

              foodProductCards.forEach((card) => {
                const shouldHide = card.classList.contains("hidden-by-filter") || card.classList.contains("hidden-by-category") || card.classList.contains("hidden-by-review") || card.classList.contains("hidden-by-page");
                card.classList.toggle("hidden", shouldHide);
              });

              if (foodResultsCount) {
                if (totalVisible === 0) {
                  foodResultsCount.textContent = "Showing 0 products";
                } else {
                  const startIndex = ((activeFoodPage - 1) * foodPageSize) + 1;
                  const endIndex = Math.min(activeFoodPage * foodPageSize, totalVisible);
                  foodResultsCount.textContent = `Showing ${startIndex}-${endIndex} of ${totalVisible} food results`;
                }
              }

              if (foodEmptyState) {
                foodEmptyState.classList.toggle("hidden", totalVisible !== 0);
              }

              if (foodPagination) {
                foodPagination.classList.toggle("hidden", totalPages <= 1 || totalVisible === 0);
              }

              foodPageButtons.forEach((button) => {
                const pageNumber = Number.parseInt(button.dataset.foodPage || "1", 10);
                const isVisible = pageNumber <= totalPages;
                const isActive = pageNumber === activeFoodPage;

                button.classList.toggle("hidden", !isVisible);
                button.classList.toggle("bg-brand-red", isActive);
                button.classList.toggle("text-white", isActive);
                button.classList.toggle("border", !isActive);
                button.classList.toggle("border-[#d7dde7]", !isActive);
                button.classList.toggle("bg-white", !isActive);
                button.classList.toggle("text-[#173a75]", !isActive);
              });
            };

            const clampFoodPrice = (value, lowerBound, upperBound) => {
              return Math.min(Math.max(value, lowerBound), upperBound);
            };

            const setAnimatedCategoryListState = (list, expanded) => {
              if (!list) {
                return;
              }

              list.classList.add("food-subcategory-list");
              list.style.opacity = expanded ? "1" : "0";
              list.style.marginTop = expanded ? "1rem" : "0";
              list.style.maxHeight = expanded ? `${list.scrollHeight}px` : "0px";
              list.style.pointerEvents = expanded ? "auto" : "none";
            };

            const closeOtherFoodCategoryGroups = (activeList, activeToggle) => {
              Array.from(document.querySelectorAll(".food-subcategory-list")).forEach((list) => {
                if (list === activeList) {
                  return;
                }

                setAnimatedCategoryListState(list, false);
              });

              Array.from(document.querySelectorAll(".food-categories-panel [aria-controls]")).forEach((toggle) => {
                if (toggle === activeToggle) {
                  return;
                }

                toggle.setAttribute("aria-expanded", "false");
                toggle.textContent = "+";
              });
            };

            const syncFoodPriceControls = (source) => {
              if (!foodPriceMinRange || !foodPriceMaxRange || !foodPriceMinInput || !foodPriceMaxInput || !foodPriceValue || !foodPriceTrack) return;

              const sliderMin = Number.parseInt(foodPriceMinRange.min || "0", 10);
              const sliderMax = Number.parseInt(foodPriceMinRange.max || "0", 10);
              let selectedMin = Number.parseInt(foodPriceMinInput.value || `${sliderMin}`, 10);
              let selectedMax = Number.parseInt(foodPriceMaxInput.value || `${sliderMax}`, 10);

              if ((source === "min-input" && foodPriceMinInput.value === "") || (source === "max-input" && foodPriceMaxInput.value === "")) {
                return;
              }

              if (source === "min-range") {
                selectedMin = Number.parseInt(foodPriceMinRange.value || `${sliderMin}`, 10);
                selectedMax = Number.parseInt(foodPriceMaxInput.value || `${sliderMax}`, 10);
              } else if (source === "max-range") {
                selectedMin = Number.parseInt(foodPriceMinInput.value || `${sliderMin}`, 10);
                selectedMax = Number.parseInt(foodPriceMaxRange.value || `${sliderMax}`, 10);
              }

              selectedMin = clampFoodPrice(Number.isNaN(selectedMin) ? sliderMin : selectedMin, sliderMin, sliderMax);
              selectedMax = clampFoodPrice(Number.isNaN(selectedMax) ? sliderMax : selectedMax, sliderMin, sliderMax);

              if (selectedMin > selectedMax) {
                if (source === "min-range" || source === "min-input") {
                  selectedMax = selectedMin;
                } else {
                  selectedMin = selectedMax;
                }
              }

              foodPriceMinRange.value = `${selectedMin}`;
              foodPriceMaxRange.value = `${selectedMax}`;
              foodPriceMinInput.value = `${selectedMin}`;
              foodPriceMaxInput.value = `${selectedMax}`;
              foodPriceValue.textContent = `${selectedMin} - ${selectedMax}`;

              const startPercent = ((selectedMin - sliderMin) / (sliderMax - sliderMin)) * 100;
              const endPercent = ((selectedMax - sliderMin) / (sliderMax - sliderMin)) * 100;
              foodPriceTrack.style.left = `${startPercent}%`;
              foodPriceTrack.style.width = `${Math.max(endPercent - startPercent, 0)}%`;
            };

            const applyFoodPriceFilter = () => {
              if (!foodPriceMinInput || !foodPriceMaxInput) return;
              const minPrice = Number.parseFloat(foodPriceMinInput.value);
              const maxPrice = Number.parseFloat(foodPriceMaxInput.value);
              const foodProductCards = Array.from(document.querySelectorAll(".food-product-card"));

              foodProductCards.forEach((card) => {
                const cardPrice = Number.parseFloat(card.dataset.price || "");
                const shouldHide = Number.isNaN(cardPrice) || cardPrice < minPrice || cardPrice > maxPrice;
                card.classList.toggle("hidden-by-filter", shouldHide);
                card.classList.remove("hidden");
              });

              activeFoodPage = 1;
              applyFoodReviewFilter(false);
              syncFoodPagination();
            };

            const applyFoodCategoryFilter = () => {
              const foodProductCards = Array.from(document.querySelectorAll(".food-product-card"));

              foodProductCards.forEach((card) => {
                const cardCategory = card.dataset.category || "Food";
                const shouldHide = activeFoodCategory !== "Food" && cardCategory !== activeFoodCategory;
                card.classList.toggle("hidden-by-category", shouldHide);
              });

              Array.from(document.querySelectorAll("[data-food-category]")).forEach((button) => {
                const isActive = button.dataset.foodCategory === activeFoodCategory;
                button.classList.toggle("text-brand-red", isActive);
                button.classList.toggle("font-medium", isActive);
                button.classList.toggle("text-[#091322]", isActive && button.dataset.foodCategory === "Food");
              });

              activeFoodPage = 1;
              applyFoodReviewFilter(false);
              syncFoodPagination();
            };

            const applyFoodReviewFilter = (resetPage = true) => {
              const foodProductCards = Array.from(document.querySelectorAll(".food-product-card"));

              foodProductCards.forEach((card) => {
                const ratingText = card.querySelector(".rating-score")?.textContent || "";
                const ratingValue = Number.parseFloat(ratingText.replace(/[^\d.]/g, "")) || 0;
                const ratingStars = Math.max(1, Math.min(5, Math.floor(ratingValue)));
                const shouldHide = activeFoodReview > 0 && ratingStars !== activeFoodReview;
                card.classList.toggle("hidden-by-review", shouldHide);
              });

              foodReviewButtons.forEach((button) => {
                const isActive = Number.parseInt(button.dataset.reviewStars || "0", 10) === activeFoodReview;
                const marker = button.querySelector("span:first-child");
                button.classList.toggle("opacity-80", !isActive && activeFoodReview > 0);
                button.classList.toggle("opacity-100", isActive || activeFoodReview === 0);
                if (marker) {
                  marker.classList.toggle("bg-brand-red", isActive);
                  marker.classList.toggle("border-[#cfd5df]", !isActive);
                  marker.classList.toggle("bg-transparent", !isActive);
                }
              });

              if (resetPage) {
                activeFoodPage = 1;
              }
            };

            const syncFoodSubcategoryToggle = () => {
              if (!foodSubcategoryList || !foodCategoryToggleSymbol) {
                return;
              }

              if (foodSubcategoriesExpanded) {
                closeOtherFoodCategoryGroups(foodSubcategoryList, foodCategoryToggleSymbol);
              }

              foodCategoryToggleSymbol.setAttribute("aria-expanded", foodSubcategoriesExpanded ? "true" : "false");
              foodCategoryToggleSymbol.textContent = foodSubcategoriesExpanded ? "-" : "+";
              setAnimatedCategoryListState(foodSubcategoryList, foodSubcategoriesExpanded);
            };

            const openFoodCategoryGroupByName = (categoryName) => {
              const targetButton = Array.from(document.querySelectorAll("[data-food-category]")).find((button) => {
                return button.dataset.foodCategory === categoryName;
              });

              if (!targetButton) {
                return;
              }

              if (categoryName === "Food") {
                foodSubcategoriesExpanded = true;
                syncFoodSubcategoryToggle();
                return;
              }

              const row = targetButton.closest(".flex.items-center.justify-between");
              const toggle = row ? row.querySelector("[aria-controls]") : null;
              const listId = toggle ? toggle.getAttribute("aria-controls") : null;
              const list = listId ? document.getElementById(listId) : null;

              if (!toggle || !list) {
                return;
              }

              closeOtherFoodCategoryGroups(list, toggle);
              toggle.setAttribute("aria-expanded", "true");
              toggle.textContent = "-";
              setAnimatedCategoryListState(list, true);
              foodSubcategoriesExpanded = false;
              syncFoodSubcategoryToggle();
            };
            const initExtraFoodCategoryGroups = () => {
              if (!foodCategoryContainer) {
                return;
              }

              const topLevelRows = Array.from(foodCategoryContainer.children).slice(1);

              topLevelRows.forEach((row) => {
                if (row.querySelector("ul")) {
                  return;
                }

                const button = row.querySelector("[data-food-category]");
                const symbol = row.querySelector("span.text-\\[1\\.3rem\\].leading-none");

                if (!button || !symbol) {
                  return;
                }

                const categoryName = button.dataset.foodCategory || "";
                const subcategories = extraFoodCategoryGroups[categoryName];

                if (!subcategories || subcategories.length === 0) {
                  return;
                }

                const listId = `${categoryName.toLowerCase().replace(/[^a-z0-9]+/g, "-")}-subcategory-list`;
                const list = document.createElement("ul");
                list.id = listId;
                list.className = "food-subcategory-list mt-4 space-y-4 pl-5";

                subcategories.forEach((subcategory) => {
                  const li = document.createElement("li");
                  const subButton = document.createElement("button");
                  subButton.type = "button";
                  subButton.dataset.foodCategory = subcategory;
                  subButton.className = "food-category-button text-left transition-colors duration-200 hover:text-brand-red";
                  subButton.textContent = subcategory;
                  li.appendChild(subButton);
                  list.appendChild(li);
                });

                symbol.setAttribute("role", "button");
                symbol.setAttribute("tabindex", "0");
                symbol.setAttribute("aria-expanded", "false");
                symbol.setAttribute("aria-controls", listId);
                symbol.style.cursor = "pointer";

                const toggleList = () => {
                  const isExpanded = symbol.getAttribute("aria-expanded") === "true";
                  const nextExpanded = !isExpanded;

                  if (nextExpanded) {
                    closeOtherFoodCategoryGroups(list, symbol);
                  }

                  symbol.setAttribute("aria-expanded", isExpanded ? "false" : "true");
                  symbol.textContent = isExpanded ? "+" : "-";
                  setAnimatedCategoryListState(list, nextExpanded);
                };

                symbol.addEventListener("click", toggleList);
                symbol.addEventListener("keydown", (event) => {
                  if (event.key === "Enter" || event.key === " ") {
                    event.preventDefault();
                    toggleList();
                  }
                });

                setAnimatedCategoryListState(list, false);
                row.insertAdjacentElement("afterend", list);
              });
            };

            if (foodPriceMinRange && foodPriceMaxRange && foodPriceMinInput && foodPriceMaxInput) {
              syncFoodPriceControls("init");
              foodPriceMinRange.addEventListener("input", () => syncFoodPriceControls("min-range"));
              foodPriceMaxRange.addEventListener("input", () => syncFoodPriceControls("max-range"));
              foodPriceMinInput.addEventListener("change", () => syncFoodPriceControls("min-input"));
              foodPriceMaxInput.addEventListener("change", () => syncFoodPriceControls("max-input"));
              foodPriceMinInput.addEventListener("blur", () => syncFoodPriceControls("min-input"));
              foodPriceMaxInput.addEventListener("blur", () => syncFoodPriceControls("max-input"));
            }

            if (foodPriceFilterButton) {
              foodPriceFilterButton.addEventListener("click", applyFoodPriceFilter);
            }

            foodPageButtons.forEach((button) => {
              button.addEventListener("click", () => {
                activeFoodPage = Number.parseInt(button.dataset.foodPage || "1", 10);
                syncFoodPagination();
              });
            });

            if (foodSortSelect) {
              foodSortSelect.addEventListener("change", () => {
                activeFoodPage = 1;
                sortFoodProducts();
                syncFoodPagination();
              });
            }

            if (foodListViewButton) {
              foodListViewButton.addEventListener("click", () => {
                activeFoodView = "list";
                syncFoodView();
              });
            }

            if (foodGridViewButton) {
              foodGridViewButton.addEventListener("click", () => {
                activeFoodView = "grid";
                syncFoodView();
              });
            }

            foodReviewButtons.forEach((button) => {
              button.addEventListener("click", () => {
                const selectedStars = Number.parseInt(button.dataset.reviewStars || "0", 10);
                activeFoodReview = activeFoodReview === selectedStars ? 0 : selectedStars;
                applyFoodReviewFilter();
                syncFoodPagination();
              });
            });

            const bindFoodCategoryButtons = () => {
              Array.from(document.querySelectorAll("[data-food-category]")).forEach((button) => {
                if (button.dataset.categoryBound === "true") {
                  return;
                }

                button.dataset.categoryBound = "true";
                button.addEventListener("click", () => {
                  activeFoodCategory = button.dataset.foodCategory || "Food";
                  syncCategoryBanner(activeFoodCategory);
                  applyFoodCategoryFilter();
                });
              });
            };

            if (foodCategoryToggleSymbol) {
              if (foodCategoryToggleButton && foodCategoryToggleButton.tagName === "BUTTON" && foodLegacyCategoryToggleSymbol && foodLegacyCategoryToggleSymbol !== foodCategoryToggleButton) {
                foodLegacyCategoryToggleSymbol.remove();
              }

              foodCategoryToggleSymbol.setAttribute("role", "button");
              foodCategoryToggleSymbol.setAttribute("tabindex", "0");
              foodCategoryToggleSymbol.style.cursor = "pointer";
              foodCategoryToggleSymbol.addEventListener("click", () => {
                foodSubcategoriesExpanded = !foodSubcategoriesExpanded;
                syncFoodSubcategoryToggle();
              });
              foodCategoryToggleSymbol.addEventListener("keydown", (event) => {
                if (event.key === "Enter" || event.key === " ") {
                  event.preventDefault();
                  foodSubcategoriesExpanded = !foodSubcategoriesExpanded;
                  syncFoodSubcategoryToggle();
                }
              });
            }

            const categoryPageTitle = document.getElementById("category-page-title");
            const categoryPageCrumb = document.getElementById("category-page-crumb");
            const categoryPageBannerImage = document.getElementById("category-page-banner-image");
            const categoryParam = new URLSearchParams(window.location.search).get("category");
            const categoryBannerMap = {
              Food: "assets/foodbanner.svg",
              "Coffee Time": "assets/foodbanner.svg",
              "Rice & Beans": "assets/foodbanner.svg",
              "SPAM ... SPAM ... SPAM": "assets/foodbanner.svg",
              "Vienna Sausages": "assets/foodbanner.svg",
              "Tuna Fish": "assets/foodbanner.svg",
              "Stock The Pantry": "assets/foodbanner.svg",
              "Italian Food": "assets/foodbanner.svg",
              Cookies: "assets/foodbanner.svg",
              "Solar Products": "assets/shopproduct.svg",
              "Solar Kits": "assets/shopproduct.svg",
              "Solar Lights": "assets/shopproduct.svg",
              "Solar Generators": "assets/shopproduct.svg",
              "Electric Scooters": "assets/shopproduct.svg",
              "Foldable Scooters": "assets/shopproduct.svg",
              "Long Range Scooters": "assets/shopproduct.svg",
              "Electric Bikes": "assets/shopproduct.svg",
              "Compact E-Bikes": "assets/shopproduct.svg",
              "Cargo E-Bikes": "assets/shopproduct.svg",
              Appliances: "assets/shipbg.svg",
              "Small Appliances": "assets/shipbg.svg",
              "Kitchen Essentials": "assets/shipbg.svg",
              Furniture: "assets/shipbg.svg",
              "Bedroom Sets": "assets/shipbg.svg",
              "Storage Furniture": "assets/shipbg.svg",
              "Health & Wellness": "assets/shipbg.svg",
              "Daily Care": "assets/shipbg.svg",
              "Mobility Support": "assets/shipbg.svg",
            };
            const syncCategoryBanner = (categoryName) => {
              const safeCategory = (categoryName || "Categories").trim() || "Categories";
              const bannerImage = categoryBannerMap[safeCategory] || "assets/shipbg.svg";

              if (categoryPageTitle) {
                categoryPageTitle.textContent = safeCategory;
              }

              if (categoryPageCrumb) {
                categoryPageCrumb.textContent = safeCategory;
              }

              if (categoryPageBannerImage) {
                categoryPageBannerImage.src = bannerImage;
                categoryPageBannerImage.alt = `${safeCategory} background`;
              }
            };

            if (categoryParam) {
              const safeCategory = categoryParam.trim();

              if (safeCategory) {
                activeFoodCategory = safeCategory;
                syncCategoryBanner(safeCategory);
              }
            }

            initExtraFoodCategoryGroups();
            bindFoodCategoryButtons();
            if (categoryParam) {
              openFoodCategoryGroupByName(categoryParam.trim());
            } else {
              syncCategoryBanner(activeFoodCategory);
            }
            syncFoodSubcategoryToggle();
            applyFoodCategoryFilter();
            applyFoodReviewFilter(false);
            sortFoodProducts();
            syncFoodView();
            syncFoodPagination();
    </script>
@endsection
