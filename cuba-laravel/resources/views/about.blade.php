@extends('layouts.app')

@section('title', 'About - Send Love to Cuba')

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
              line-clamp: 2;
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
          <img src="{{ asset("assets/about.svg") }}" alt="About background" class="absolute inset-0 h-full w-full object-cover" />
          <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(9,18,34,0.86),rgba(9,18,34,0.76),rgba(9,18,34,0.86))]"></div>
          <div class="relative mx-auto max-w-[1540px] px-10 text-center md:px-16 xl:px-24">
            <h1 class="font-heading text-[clamp(56px,7vw,102px)] uppercase leading-[0.88] text-white">About Us</h1>
            <p class="mt-4 text-[17px] text-white/85"><a href="{{ route('home') }}" class="underline-offset-2 hover:underline">Home</a> <span class="mx-2">&gt;</span> About Us</p>
          </div>
        </section>
    <section class="bg-white pb-[72px] pt-[26px] md:pb-[96px] md:pt-[40px]">
          <div class="mx-auto grid max-w-[1540px] grid-cols-1 items-center gap-6 px-10 md:px-16 xl:px-24 lg:grid-cols-[minmax(0,0.84fr)_minmax(0,1fr)] lg:gap-8 xl:gap-10">
            <div class="flex justify-center lg:justify-start">
              <div class="flex items-start">
                <img src="{{ asset("assets/cubastreet.svg") }}" alt="Street in Cuba" class="relative z-10 h-[372px] w-[188px] rounded-[999px] border-[6px] border-white object-cover shadow-soft sm:h-[468px] sm:w-[232px] md:h-[548px] md:w-[276px]" />
                <img src="{{ asset("assets/cubasidewalk.svg") }}" alt="Cuban houses" class="relative z-20 -ml-14 mt-16 h-[372px] w-[188px] rounded-[999px] border-[6px] border-white object-cover shadow-soft sm:-ml-18 sm:mt-20 sm:h-[468px] sm:w-[232px] md:-ml-24 md:mt-[86px] md:h-[548px] md:w-[276px]" />
              </div>
            </div>

            <div>
              <span class="inline-flex min-h-[42px] items-center gap-[14px] rounded-full border border-[#f3cfd5] bg-[#fff1f3] px-[14px] py-[4px] text-[15px] font-medium leading-none text-[#C6232F]">
                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
                <span>Who We Are</span>
                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
              </span>

              <h3 class="mt-5 max-w-[680px] font-heading text-[clamp(1.9rem,3.55vw,3.45rem)] font-medium uppercase leading-[0.92] text-[#0f1728]">
                Connecting Loved Ones
                <span class="block">Through Reliable Delivery</span>
              </h3>

              <p class="mt-5 max-w-[560px] text-[15px] leading-[1.9] text-[#737d8f]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
              </p>

              <div class="mt-6 border-l-[4px] border-[#173c75] bg-[#f7f8fb] px-5 py-4">
                <ul class="grid grid-cols-1 gap-x-8 gap-y-3 sm:grid-cols-2">
                  <li class="flex items-center gap-2.5 text-[13px] text-black">
                    <svg viewBox="0 0 20 20" class="h-6 w-6 shrink-0 text-[#d82434]" fill="none" stroke="currentColor" stroke-width="2.8">
                      <path d="m4 5 4 5-4 5M10 5l4 5-4 5"></path>
                    </svg>
                    <span>Food &amp; Grocery Delivery</span>
                  </li>
                  <li class="flex items-center gap-2.5 text-[13px] text-black">
                    <svg viewBox="0 0 20 20" class="h-6 w-6 shrink-0 text-[#d82434]" fill="none" stroke="currentColor" stroke-width="2.8">
                      <path d="m4 5 4 5-4 5M10 5l4 5-4 5"></path>
                    </svg>
                    <span>Appliances &amp; Home Essentials</span>
                  </li>
                  <li class="flex items-center gap-2.5 text-[13px] text-black">
                    <svg viewBox="0 0 20 20" class="h-6 w-6 shrink-0 text-[#d82434]" fill="none" stroke="currentColor" stroke-width="2.8">
                      <path d="m4 5 4 5-4 5M10 5l4 5-4 5"></path>
                    </svg>
                    <span>Household &amp; Cleaning Supplies</span>
                  </li>
                  <li class="flex items-center gap-2.5 text-[13px] text-black">
                    <svg viewBox="0 0 20 20" class="h-6 w-6 shrink-0 text-[#d82434]" fill="none" stroke="currentColor" stroke-width="2.8">
                      <path d="m4 5 4 5-4 5M10 5l4 5-4 5"></path>
                    </svg>
                    <span>Solar &amp; Energy Solutions</span>
                  </li>
                  <li class="flex items-center gap-2.5 text-[13px] text-black">
                    <svg viewBox="0 0 20 20" class="h-6 w-6 shrink-0 text-[#d82434]" fill="none" stroke="currentColor" stroke-width="2.8">
                      <path d="m4 5 4 5-4 5M10 5l4 5-4 5"></path>
                    </svg>
                    <span>Personal Care &amp; Baby Items</span>
                  </li>
                  <li class="flex items-center gap-2.5 text-[13px] text-black">
                    <svg viewBox="0 0 20 20" class="h-6 w-6 shrink-0 text-[#d82434]" fill="none" stroke="currentColor" stroke-width="2.8">
                      <path d="m4 5 4 5-4 5M10 5l4 5-4 5"></path>
                    </svg>
                    <span>Mobility &amp; Transport Items</span>
                  </li>
                </ul>
              </div>

              <div class="mt-7 flex flex-wrap items-center gap-x-6 gap-y-4">
                <button class="group inline-flex items-center justify-between rounded-[10px] border border-transparent bg-brand-red px-1.5 py-1.5 font-heading text-[20px] uppercase tracking-[0.03em] text-white transition-all duration-300 hover:-translate-y-0.5 hover:border-black hover:bg-white hover:text-black">
                  <span class="lg:pl-2">Learn More</span>
                  <span class="ml-4 grid h-12 w-12 place-items-center rounded-[12px] border border-transparent bg-white text-brand-red transition-all duration-300 group-hover:border-black group-hover:bg-transparent group-hover:text-black">
                    <svg viewBox="0 0 20 20" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2.4">
                      <path d="m4 10 4 4 8-8"></path>
                    </svg>
                  </span>
                </button>

                <div class="flex items-center gap-3">
                  <span class="grid h-11 w-11 place-items-center rounded-full border border-[#f1b7be] bg-[#fff0f2] text-brand-red">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.7A2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.7l.5 3.3a2 2 0 0 1-.6 1.8l-1.5 1.5a16 16 0 0 0 6.1 6.1l1.5-1.5a2 2 0 0 1 1.8-.6l3.3.5A2 2 0 0 1 22 16.9Z"></path>
                    </svg>
                  </span>
                  <div>
                    <p class="text-[13px] leading-none text-[#5f6a7c]">Need Assistance?</p>
                    <p class="mt-1 font-heading text-[1.55rem] leading-none text-[#173664]">+1 305 000 0000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    <section id="why-choose-us" class="bg-white py-[72px] md:py-[108px]">
          <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
            <div class="mx-auto max-w-[780px] text-center">
              <span class="inline-flex min-h-[42px] items-center gap-[14px] rounded-full border border-[#f3cfd5] bg-[#fff1f3] px-[14px] py-[4px] text-[15px] font-medium leading-none text-[#C6232F]">
                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
                <span>Why Choose Us</span>
                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
              </span>
              <h3 class="mx-auto mt-5 max-w-[680px] font-heading text-[clamp(1.9rem,3.55vw,3.45rem)] font-medium uppercase leading-[0.92] text-[#0f223e]">Why Families Choose Send Love To Cuba</h3>
            </div>

            <div class="mt-14 grid grid-cols-1 items-center gap-6 xl:grid-cols-[minmax(0,1fr)_minmax(380px,540px)_minmax(0,1fr)] xl:gap-3">
              <div class="grid gap-6 xl:pr-0">
                <article class="min-h-[176px] md:min-h-[188px] rounded-[24px] border border-[#f4edef] border-b-[#efb4bc] bg-[#f7f7f8] px-6 py-7 shadow-[0_1px_0_rgba(228,38,53,0.14)]">
                  <div class="flex items-start gap-5">
                    <div class="grid h-[60px] w-[60px] shrink-0 place-items-center rounded-full border border-dashed border-brand-red text-brand-red">
                      <img src="{{ asset("assets/Reliable Delivery.svg") }}" alt="Reliable Delivery" class="h-7 w-7 object-contain" />
                    </div>
                    <div>
                      <h4 class="font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Reliable Delivery</h4>
                      <p class="mt-2 max-w-[340px] text-[15px] leading-[1.55] text-[#6d7380]">Fast, organized deliveries with dependable fulfillment routes to families across Cuba.</p>
                    </div>
                  </div>
                </article>
                <article class="min-h-[176px] md:min-h-[188px] rounded-[24px] border border-[#f4edef] border-b-[#efb4bc] bg-[#f7f7f8] px-6 py-7 shadow-[0_1px_0_rgba(228,38,53,0.14)]">
                  <div class="flex items-start gap-5">
                    <div class="grid h-[60px] w-[60px] shrink-0 place-items-center rounded-full border border-dashed border-brand-red text-brand-red">
                      <img src="{{ asset("assets/Transparent Pricing.svg") }}" alt="Transparent Pricing" class="h-7 w-7 object-contain" />
                    </div>
                    <div>
                      <h4 class="font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Transparent Pricing</h4>
                      <p class="mt-2 max-w-[340px] text-[15px] leading-[1.55] text-[#6d7380]">Clear product costs, simple checkout totals, and no hidden surprises once you place an order.</p>
                    </div>
                  </div>
                </article>
              </div>

              <div class="order-first mx-auto w-full max-w-[465px] xl:order-none xl:max-w-[485px]">
                <img src="{{ asset("assets/shipfront.svg") }}" alt="Front-facing cargo ship representing delivery between families abroad and Cuba" class="mx-auto w-full object-cover drop-shadow-[0_24px_36px_rgba(8,18,41,0.12)]" />
              </div>

              <div class="grid gap-6 xl:pl-0">
                <article class="min-h-[176px] md:min-h-[188px] rounded-[24px] border border-[#f4edef] border-b-[#efb4bc] bg-[#f7f7f8] px-6 py-7 shadow-[0_1px_0_rgba(228,38,53,0.14)]">
                  <div class="flex items-start gap-5">
                    <div class="grid h-[60px] w-[60px] shrink-0 place-items-center rounded-full border border-dashed border-brand-red text-brand-red">
                      <img src="{{ asset("assets/Dedicated Support.svg") }}" alt="Dedicated Support" class="h-7 w-7 object-contain" />
                    </div>
                    <div>
                      <h4 class="font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Dedicated Support</h4>
                      <p class="mt-2 max-w-[340px] text-[15px] leading-[1.55] text-[#6d7380]">Our team stays available before, during, and after checkout to keep every order on track.</p>
                    </div>
                  </div>
                </article>
                <article class="min-h-[176px] md:min-h-[188px] rounded-[24px] border border-[#f4edef] border-b-[#efb4bc] bg-[#f7f7f8] px-6 py-7 shadow-[0_1px_0_rgba(228,38,53,0.14)]">
                  <div class="flex items-start gap-5">
                    <div class="grid h-[60px] w-[60px] shrink-0 place-items-center rounded-full border border-dashed border-brand-red text-brand-red">
                      <img src="{{ asset("assets/Designed for Families.svg") }}" alt="Designed For Families" class="h-7 w-7 object-contain" />
                    </div>
                    <div>
                      <h4 class="font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Designed For Families</h4>
                      <p class="mt-2 max-w-[340px] text-[15px] leading-[1.55] text-[#6d7380]">Built for relatives abroad who want a simple, trustworthy way to send real support home.</p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>
        <section class="relative overflow-hidden py-[92px] md:py-[118px]">
          <img src="{{ asset("assets/shipbg.svg") }}" alt="Port logistics background" class="absolute inset-0 h-full w-full object-cover" />
          <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(8,16,30,0.9),rgba(10,22,40,0.78),rgba(8,16,30,0.9))]"></div>
          <div class="relative mx-auto max-w-[1540px] px-10 text-center md:px-16 xl:px-24">
            <h3 class="mx-auto max-w-[980px] font-heading text-[clamp(2rem,4.5vw,4rem)] uppercase leading-[0.92] text-white">
              We Look Forward To Serving You In Sending Many Items To Your Friends And Family In Cuba,
              With Trackable, Home Delivery Everywhere On The Island Of Cuba.
            </h3>
            <p class="mx-auto mt-6 max-w-[980px] text-[16px] leading-[1.65] text-white/80">
              We are a Cuban American and American operated business created to help the citizens of Cuba get the necessary,
              vital products that they need, in the easiest and most cost-effective means possible.
            </p>
            <p class="mx-auto mt-3 max-w-[980px] text-[16px] leading-[1.65] text-white/80">
              We are not affiliated with the Cuban Government nor any Government owned businesses.
            </p>
            <p class="mx-auto mt-3 max-w-[980px] text-[16px] leading-[1.65] text-white/80">
              We only provide products to the Citizens of Cuba, purchased by their friends and family in the U.S.
              We then deliver those boxes to the homes of the recipients everywhere on the island of Cuba.
            </p>
            <div class="mt-9">
              <a href="{{ url('/') }}#shop-by-category" class="group inline-flex items-center justify-between rounded-[10px] border border-transparent bg-brand-red px-1.5 py-1.5 text-white transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-red hover:bg-transparent hover:text-brand-red">
                <span class="font-heading text-[1.16rem] uppercase leading-none tracking-[0.02em] lg:pl-2">Explore Our Products</span>
                <span class="ml-4 grid h-10 w-10 place-items-center rounded-[10px] border border-transparent bg-white text-brand-red transition-all duration-300 group-hover:scale-105 group-hover:border-brand-red group-hover:bg-transparent group-hover:text-brand-red">
                  <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.4">
                    <path d="M6 12.5 10.2 16.7 18 8.8"></path>
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </section>
    <section id="how-it-works" class="bg-white pt-[72px] pb-[140px] md:pt-[108px] md:pb-[190px]">
          <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
            <svg class="absolute h-0 w-0 overflow-hidden" aria-hidden="true" focusable="false">
              <symbol id="product-order-icon" viewBox="0 0 41 41">
                <path d="M14.3683 22.9142L13.2256 22.6285V22.6278L9.25792 21.6359L7.93536 21.3053V19.8379H13.2256V6.6123H0V19.8379H3.96768V23.9577C3.35467 23.4571 2.58296 23.1443 1.73123 23.1443C0.777004 23.1443 0 23.9213 0 24.8755C0 25.1414 0.0634829 25.4092 0.183175 25.6505L0.972742 27.2317C1.20155 27.6879 1.3219 28.1991 1.3219 28.7096V31.6722C1.3219 32.7176 1.68163 33.7446 2.3363 34.5639L3.81228 36.4076C3.04982 37.5807 2.64446 38.937 2.64446 40.3369V40.9982H14.5475V40.3369C14.5475 38.9363 14.1428 37.58 13.3803 36.4069L14.857 34.5626C15.5103 33.7439 15.8701 32.7176 15.8701 31.6715V24.8392C15.8714 23.9279 15.2537 23.1364 14.3683 22.9142ZM5.2909 7.93553H7.93602V9.25809H5.2909V7.93553ZM1.32322 18.516V7.93553H3.96834V10.5806H9.25858V7.93553H11.9037V18.516H7.93602V16.5322C7.93602 15.4384 7.04594 14.5483 5.95218 14.5483C4.85842 14.5483 3.96834 15.4384 3.96834 16.5322V18.516H1.32322ZM4.00471 39.6763C4.10919 38.7472 4.43322 37.8564 4.95761 37.0702L4.9834 37.0312H12.2105L12.237 37.0708C12.7607 37.8564 13.0841 38.7465 13.1886 39.6763H4.00471ZM14.5488 31.6728C14.5488 32.4201 14.2916 33.1534 13.8254 33.738L12.2476 35.7086H4.94703L3.36988 33.7387C2.90302 33.1528 2.64512 32.4194 2.64512 31.6728V28.7103C2.64512 27.9954 2.47583 27.2793 2.15643 26.6405L1.36753 25.0607C1.33843 25.0018 1.32322 24.9383 1.32322 24.8762C1.32322 24.6507 1.5064 24.4675 1.73189 24.4675C2.96452 24.4675 3.96834 25.4713 3.96834 26.7046V27.7739V29.7578H5.2909V27.7739V26.7046V16.5322C5.2909 16.1678 5.58715 15.8709 5.95218 15.8709C6.3172 15.8709 6.61346 16.1678 6.61346 16.5322V20.9753V29.7578H7.93602V22.6695L9.25858 23.0001V29.7578H10.5811V23.3308L11.9037 23.6614V29.7578H13.2263V23.9914L14.0469 24.1971C14.3425 24.2711 14.5488 24.5356 14.5488 24.8398V31.6728Z" fill="currentColor"></path>
                <path d="M37.6937 0H21.823C19.9999 0 18.5166 1.48325 18.5166 3.3064V32.4027C18.5166 34.2259 19.9999 35.7091 21.823 35.7091H37.6937C39.5169 35.7091 41.0001 34.2259 41.0001 32.4027V3.3064C41.0001 1.48325 39.5162 0 37.6937 0ZM26.452 1.32256H33.0648V1.98384C33.0648 2.3482 32.7685 2.64512 32.4035 2.64512H27.1132C26.7482 2.64512 26.452 2.3482 26.452 1.98384V1.32256ZM39.6775 32.402C39.6775 33.4958 38.7875 34.3859 37.6937 34.3859H21.823C20.7292 34.3859 19.8392 33.4958 19.8392 32.402V3.30574C19.8392 2.21198 20.7292 1.3219 21.823 1.3219H25.1294V1.98318C25.1294 3.07693 26.0195 3.96702 27.1132 3.96702H32.4035C33.4972 3.96702 34.3873 3.07693 34.3873 1.98318V1.3219H37.6937C38.7875 1.3219 39.6775 2.21198 39.6775 3.30574V32.402Z" fill="currentColor"></path>
                <path d="M31.7421 29.0957H27.7745C27.0451 29.0957 26.4519 29.6889 26.4519 30.4183C26.4519 31.877 27.6382 33.0634 29.097 33.0634H30.4196C31.8784 33.0634 33.0647 31.877 33.0647 30.4183C33.0647 29.6895 32.4709 29.0957 31.7421 29.0957ZM30.4196 31.7408H29.097C28.3676 31.7408 27.7745 31.1477 27.7745 30.4183H31.7421C31.7421 31.1477 31.1483 31.7408 30.4196 31.7408Z" fill="currentColor"></path>
                <path d="M37.0322 5.29004H22.4841C21.7547 5.29004 21.1615 5.88321 21.1615 6.6126V26.451C21.1615 27.1804 21.7547 27.7735 22.4841 27.7735H37.0322C37.7616 27.7735 38.3548 27.1804 38.3548 26.451V6.6126C38.3548 5.88321 37.7609 5.29004 37.0322 5.29004ZM22.4841 26.4503V6.61194H37.0322L37.0335 26.4503H22.4841Z" fill="currentColor"></path>
                <path d="M29.7584 13.2256C26.4765 13.2256 23.8069 15.8958 23.8069 19.1771C23.8069 22.4584 26.4765 25.1286 29.7584 25.1286C33.0403 25.1286 35.7099 22.459 35.7099 19.1771C35.7099 15.8952 33.0403 13.2256 29.7584 13.2256ZM29.7584 23.8054C27.2065 23.8054 25.1294 21.729 25.1294 19.1764C25.1294 16.6239 27.2065 14.5475 29.7584 14.5475C32.3103 14.5475 34.3874 16.6239 34.3874 19.1764C34.3874 21.729 32.3103 23.8054 29.7584 23.8054Z" fill="currentColor"></path>
                <path d="M28.4356 20.2257L27.5806 19.3707L26.6455 20.3058L28.4356 22.0958L32.8708 17.6606L31.9357 16.7256L28.4356 20.2257Z" fill="currentColor"></path>
                <path d="M23.8069 7.93506H35.7099V9.25762H23.8069V7.93506Z" fill="currentColor"></path>
                <path d="M23.8069 10.5801H35.7099V11.9026H23.8069V10.5801Z" fill="currentColor"></path>
              </symbol>
            </svg>
            <div class="mx-auto max-w-[860px] text-center">
              <span class="inline-flex min-h-[42px] items-center gap-[14px] rounded-full border border-[#f3cfd5] bg-[#fff1f3] px-[14px] py-[4px] text-[15px] font-medium leading-none text-[#C6232F]">
                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
                <span>How It Works</span>
                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
              </span>
              <h3 class="mx-auto mt-5 max-w-[920px] font-heading text-[clamp(1.9rem,3.55vw,3.45rem)] font-medium uppercase leading-[0.92] text-[#0f223e]">
                How Sending Products
                <span class="block">To Cuba Works</span>
              </h3>
            </div>

            <div class="relative mt-16 "> 
              <svg class="pointer-events-none absolute inset-x-0 top-0 hidden h-[240px] w-full xl:block" viewBox="0 0 1440 240" fill="none" preserveAspectRatio="none" aria-hidden="true">
                <path d="M42 102 168 59 535 167 905 59 1274 167 1398 102" stroke="#d9dde5" stroke-width="3" stroke-dasharray="10 12"></path>
                <path d="M49 83 42 102 60 110" stroke="#d9dde5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M1382 96 1398 102 1393 120" stroke="#d9dde5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>

              <div class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:gap-x-8 md:gap-y-14 xl:grid-cols-4 xl:gap-x-10">
                <article class="relative z-10 text-center">
                  <div class="relative mx-auto mb-8 h-[108px] w-[108px]">
                    <div class="grid h-full w-full place-items-center rounded-full border-[2px] border-[#1a3d75] bg-white text-[#1a3d75]">
                      <svg viewBox="0 0 41 41" class="h-16 w-16" aria-hidden="true">
                        <use href="#product-order-icon"></use>
                      </svg>
                    </div>
                    <span class="absolute bottom-0 right-[-8px] grid h-[42px] w-[42px] place-items-center rounded-full bg-[#1a3d75] text-[1rem] text-white">01</span>
                  </div>
                  <h4 class="font-heading text-[1.45rem] uppercase leading-[0.9] text-[#111827]">Choose Products</h4>
                  <p class="mx-auto mt-3 max-w-[290px] text-[15px] leading-[1.6] text-[#707785]">Browse groceries, appliances, and essentials available for delivery.</p>
                </article>

                <article class="relative z-10 text-center xl:translate-y-[108px]">
                  <div class="relative mx-auto mb-8 h-[108px] w-[108px]">
                    <div class="grid h-full w-full place-items-center rounded-full border-[2px] border-brand-red bg-white text-brand-red">
                      <svg viewBox="0 0 41 41" class="h-16 w-16" aria-hidden="true">
                        <use href="#product-order-icon"></use>
                      </svg>
                    </div>
                    <span class="absolute bottom-0 right-[-8px] grid h-[42px] w-[42px] place-items-center rounded-full bg-brand-red text-[1rem] text-white">02</span>
                  </div>
                  <h4 class="font-heading text-[1.45rem] uppercase leading-[0.9] text-[#111827]">Checkout Securely</h4>
                  <p class="mx-auto mt-3 max-w-[290px] text-[15px] leading-[1.6] text-[#707785]">Review the order, confirm recipient details, and finish checkout in minutes.</p>
                </article>

                <article class="relative z-10 text-center">
                  <div class="relative mx-auto mb-8 h-[108px] w-[108px]">
                    <div class="grid h-full w-full place-items-center rounded-full border-[2px] border-[#1a3d75] bg-white text-[#1a3d75]">
                      <svg viewBox="0 0 41 41" class="h-16 w-16" aria-hidden="true">
                        <use href="#product-order-icon"></use>
                      </svg>
                    </div>
                    <span class="absolute bottom-0 right-[-8px] grid h-[42px] w-[42px] place-items-center rounded-full bg-[#1a3d75] text-[1rem] text-white">03</span>
                  </div>
                  <h4 class="font-heading text-[1.45rem] uppercase leading-[0.9] text-[#111827]">We Prepare Orders</h4>
                  <p class="mx-auto mt-3 max-w-[290px] text-[15px] leading-[1.6] text-[#707785]">Our team organizes, packs, and schedules delivery with verified logistics partners.</p>
                </article>

                <article class="relative z-10 text-center xl:translate-y-[108px]">
                  <div class="relative mx-auto mb-8 h-[108px] w-[108px]">
                    <div class="grid h-full w-full place-items-center rounded-full border-[2px] border-brand-red bg-white text-brand-red">
                      <svg viewBox="0 0 41 41" class="h-16 w-16" aria-hidden="true">
                        <use href="#product-order-icon"></use>
                      </svg>
                    </div>
                    <span class="absolute bottom-0 right-[-8px] grid h-[42px] w-[42px] place-items-center rounded-full bg-brand-red text-[1rem] text-white">04</span>
                  </div>
                  <h4 class="font-heading text-[1.45rem] uppercase leading-[0.9] text-[#111827]">Delivery In Cuba</h4>
                  <p class="mx-auto mt-3 max-w-[290px] text-[15px] leading-[1.6] text-[#707785]">Recipients get their items and you stay updated until the order is delivered.</p>
                </article>
              </div>
            </div>
          </div>
        </section>
    <section class="bg-[#ededee] py-[84px] md:py-[110px]">
          <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
            <div class="mx-auto max-w-[1040px] text-center">
              <span class="inline-flex min-h-[42px] items-center gap-[14px] rounded-full border border-[#f3cfd5] bg-[#fff1f3] px-[14px] py-[4px] text-[15px] font-medium leading-none text-[#C6232F]">
                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
                <span>How It Works</span>
                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
              </span>
              <h3 class="mx-auto mt-6 max-w-[920px] font-heading text-[clamp(2.1rem,4.1vw,3.9rem)] font-medium uppercase leading-[0.92] text-[#101827]">
                Real Stories From Families
                <span class="block">Who Use Our Service</span>
              </h3>
            </div>

            <div id="testimonial-carousel" class="mt-20 overflow-hidden hide-scrollbar px-4 pt-10 pb-4 md:px-5 cursor-grab">
              <div id="testimonial-track" class="flex gap-8">
                <article class="testimonial-card snap-start shrink-0 w-[88%] sm:w-[72%] md:w-[calc((100%_-_4rem)/3)] relative h-auto rounded-[18px] border border-[#dfe2e7] bg-[#f3f3f4] px-9 pb-10 pt-16">
                  <img src="https://i.pravatar.cc/80?img=47" alt="Sophia Jane" class="absolute -top-10 left-8 h-20 w-20 rounded-full border-[3px] border-[#f3f3f4] object-cover shadow-[0_9px_20px_rgba(16,24,39,0.16)]" />
                  <div class="flex items-center justify-between gap-2">
                    <div>
                      <h4 class="font-heading font-medium text-[1.62rem] uppercase leading-none text-[#111827]">Sophia Jane</h4>
                      <p class="mt-1 text-[19px] font-medium leading-none text-[#C6232F]">Customer</p>
                    </div>
                    <p class="text-[22px] leading-none tracking-[2.8px] text-[#f2b21e]">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                  </div>
                  <p class="mt-4 text-[17px] leading-[1.72] text-[#6f7785]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris.</p>
                </article>

                <article class="testimonial-card snap-start shrink-0 w-[88%] sm:w-[72%] md:w-[calc((100%_-_4rem)/3)] relative h-auto rounded-[18px] border border-[#e76271] bg-[#f8f8f9] px-9 pb-10 pt-16 shadow-[0_12px_34px_rgba(220,39,55,0.12)]">
                  <img src="https://i.pravatar.cc/80?img=12" alt="David Cica" class="absolute -top-10 left-8 h-20 w-20 rounded-full border-[3px] border-[#f8f8f9] object-cover shadow-[0_9px_20px_rgba(16,24,39,0.16)]" />
                  <div class="flex items-center justify-between gap-2">
                    <div>
                      <h4 class="font-heading font-medium text-[1.62rem] uppercase leading-none text-[#111827]">David Cica</h4>
                      <p class="mt-1 text-[19px] font-medium leading-none text-[#C6232F]">Customer</p>
                    </div>
                    <p class="text-[22px] leading-none tracking-[2.8px] text-[#f2b21e]">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                  </div>
                  <p class="mt-4 text-[17px] leading-[1.72] text-[#6f7785]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris.</p>
                </article>

                <article class="testimonial-card snap-start shrink-0 w-[88%] sm:w-[72%] md:w-[calc((100%_-_4rem)/3)] relative h-auto rounded-[18px] border border-[#dfe2e7] bg-[#f3f3f4] px-9 pb-10 pt-16">
                  <img src="https://i.pravatar.cc/80?img=32" alt="Syra Taluy" class="absolute -top-10 left-8 h-20 w-20 rounded-full border-[3px] border-[#f3f3f4] object-cover shadow-[0_9px_20px_rgba(16,24,39,0.16)]" />
                  <div class="flex items-center justify-between gap-2">
                    <div>
                      <h4 class="font-heading font-medium text-[1.62rem] uppercase leading-none text-[#111827]">Syra Taluy</h4>
                      <p class="mt-1 text-[19px] font-medium leading-none text-[#C6232F]">Customer</p>
                    </div>
                    <p class="text-[22px] leading-none tracking-[2.8px] text-[#f2b21e]">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                  </div>
                  <p class="mt-4 text-[17px] leading-[1.72] text-[#6f7785]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris.</p>
                </article>

                <article class="testimonial-card snap-start shrink-0 w-[88%] sm:w-[72%] md:w-[calc((100%_-_4rem)/3)] relative h-auto rounded-[18px] border border-[#dfe2e7] bg-[#f3f3f4] px-9 pb-10 pt-16">
                  <img src="https://i.pravatar.cc/80?img=5" alt="Maria Lopez" class="absolute -top-10 left-8 h-20 w-20 rounded-full border-[3px] border-[#f3f3f4] object-cover shadow-[0_9px_20px_rgba(16,24,39,0.16)]" />
                  <div class="flex items-center justify-between gap-2">
                    <div>
                      <h4 class="font-heading font-medium text-[1.62rem] uppercase leading-none text-[#111827]">Maria Lopez</h4>
                      <p class="mt-1 text-[19px] font-medium leading-none text-[#C6232F]">Customer</p>
                    </div>
                    <p class="text-[22px] leading-none tracking-[2.8px] text-[#f2b21e]">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                  </div>
                  <p class="mt-4 text-[17px] leading-[1.72] text-[#6f7785]">I can always trust the process. Orders arrive on time, and my family receives exactly what I sent without any confusion.</p>
                </article>

                <article class="testimonial-card snap-start shrink-0 w-[88%] sm:w-[72%] md:w-[calc((100%_-_4rem)/3)] relative h-auto rounded-[18px] border border-[#dfe2e7] bg-[#f3f3f4] px-9 pb-10 pt-16">
                  <img src="https://i.pravatar.cc/80?img=15" alt="Carlos Reyes" class="absolute -top-10 left-8 h-20 w-20 rounded-full border-[3px] border-[#f3f3f4] object-cover shadow-[0_9px_20px_rgba(16,24,39,0.16)]" />
                  <div class="flex items-center justify-between gap-2">
                    <div>
                      <h4 class="font-heading font-medium text-[1.62rem] uppercase leading-none text-[#111827]">Carlos Reyes</h4>
                      <p class="mt-1 text-[19px] font-medium leading-none text-[#C6232F]">Customer</p>
                    </div>
                    <p class="text-[22px] leading-none tracking-[2.8px] text-[#f2b21e]">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                  </div>
                  <p class="mt-4 text-[17px] leading-[1.72] text-[#6f7785]">The platform makes everything simple. Payment is clear, support responds fast, and delivery updates keep me informed from start to finish.</p>
                </article>
              </div>
            </div>

            <div id="testimonial-dots" class="mt-10 flex items-center justify-center gap-3">
              <button type="button" class="testimonial-dot h-[10px] w-[10px] rounded-full border border-brand-red bg-brand-red transition-all duration-200" data-slide="0" aria-label="Go to testimonial 1" aria-current="true"></button>
              <button type="button" class="testimonial-dot h-[10px] w-[10px] rounded-full border border-[#cf4352] bg-transparent transition-all duration-200" data-slide="1" aria-label="Go to testimonial 2" aria-current="false"></button>
              <button type="button" class="testimonial-dot h-[10px] w-[10px] rounded-full border border-[#cf4352] bg-transparent transition-all duration-200" data-slide="2" aria-label="Go to testimonial 3" aria-current="false"></button>
              <button type="button" class="testimonial-dot h-[10px] w-[10px] rounded-full border border-[#cf4352] bg-transparent transition-all duration-200" data-slide="3" aria-label="Go to testimonial 4" aria-current="false"></button>
              <button type="button" class="testimonial-dot h-[10px] w-[10px] rounded-full border border-[#cf4352] bg-transparent transition-all duration-200" data-slide="4" aria-label="Go to testimonial 5" aria-current="false"></button>
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
                  <h5 class="font-heading text-[1.22rem] uppercase leading-none text-[#101827]">Delivery Across Cuba</h5>
                  <p class="mt-2 text-[15px] leading-[1.45] text-[#6d7380]">Reliable home delivery to loved ones across the island.</p>
                </div>
              </div>
            </article>

            <article class="rounded-[20px] border border-[#d9dde4] bg-[#f3f4f6] px-5 py-5">
              <div class="flex items-start gap-4">
                <img src="{{ asset("assets/Easy Online Ordering.svg") }}" alt="Easy Online Ordering" class="h-8 w-8 shrink-0 object-contain" />
                <div>
                  <h5 class="font-heading text-[1.22rem] uppercase leading-none text-[#101827]">Easy Online Ordering</h5>
                  <p class="mt-2 text-[15px] leading-[1.45] text-[#6d7380]">Shop from the U.S. with a simple &amp; convenient process.</p>
                </div>
              </div>
            </article>

            <article class="rounded-[20px] border border-[#d9dde4] bg-[#f3f4f6] px-5 py-5">
              <div class="flex items-start gap-4">
                <img src="{{ asset("assets/Secure Payment.svg") }}" alt="Secure Payment" class="h-8 w-8 shrink-0 object-contain" />
                <div>
                  <h5 class="font-heading text-[1.22rem] uppercase leading-none text-[#101827]">Secure Payment</h5>
                  <p class="mt-2 text-[15px] leading-[1.45] text-[#6d7380]">Trusted checkout options for a safe shopping experience.</p>
                </div>
              </div>
            </article>

            <article class="rounded-[20px] border border-[#d9dde4] bg-[#f3f4f6] px-5 py-5">
              <div class="flex items-start gap-4">
                <img src="{{ asset("assets/Essential Product Selection.svg") }}" alt="Essential Product Selection" class="h-8 w-8 shrink-0 object-contain" />
                <div>
                  <h5 class="font-heading text-[1.22rem] uppercase leading-none text-[#101827]">Essential Product Selection</h5>
                  <p class="mt-2 text-[15px] leading-[1.45] text-[#6d7380]">Send groceries, household goods, appliances, &amp; more.</p>
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

                tab.classList.remove(
                  "rounded-t-[12px]",
                  "bg-[#183b74]",
                  "text-white",
                  "text-[#111827]"
                );

                if (isActive) {
                  tab.classList.add(
                    "rounded-t-[12px]",
                    "bg-[#183b74]",
                    "text-white"
                  );
                } else {
                  tab.classList.add(
                    "text-[#111827]"
                  );
                }
              });

              collectionPanels.forEach((panel) => {
                const shouldShow = panel.dataset.panel === target;
                panel.classList.toggle("hidden", !shouldShow);
                panel.classList.toggle("grid", shouldShow);
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

          const productTabs = Array.from(document.querySelectorAll(".product-tab"));
          const productCards = Array.from(document.querySelectorAll("#product-grid .product-card"));
          const productEmptyState = document.getElementById("product-empty-state");

          if (productTabs.length && productCards.length) {
            const normalizeFilterValue = (value) => (value || "").trim().toLowerCase();
            const activeTabClasses = ["border-brand-red", "bg-brand-red", "text-white"];
            const inactiveTabClasses = [
              "border-[#d8dde7]",
              "bg-white",
              "text-[#131d30]",
              "hover:border-brand-red",
              "hover:text-brand-red",
            ];

            const setActiveProductTab = (activeTab) => {
              const selectedFilter = normalizeFilterValue(activeTab.dataset.filter);
              let visibleCards = 0;

              productTabs.forEach((tab) => {
                const isActive = tab === activeTab;

                tab.setAttribute("aria-selected", isActive ? "true" : "false");
                tab.classList.remove(...activeTabClasses, ...inactiveTabClasses);

                if (isActive) {
                  tab.classList.add(...activeTabClasses);
                } else {
                  tab.classList.add(...inactiveTabClasses);
                }
              });

              productCards.forEach((card) => {
                const cardCategory = normalizeFilterValue(card.dataset.category);
                const shouldShow = selectedFilter === "all" || cardCategory === selectedFilter;

                card.classList.toggle("hidden", !shouldShow);
                if (shouldShow) {
                  visibleCards += 1;
                }
              });

              if (productEmptyState) {
                productEmptyState.classList.toggle("hidden", visibleCards > 0);
              }
            };

            productTabs.forEach((tab) => {
              tab.addEventListener("click", () => {
                setActiveProductTab(tab);
              });
            });

            const defaultProductTab =
              productTabs.find((tab) => normalizeFilterValue(tab.dataset.filter) === "all") ||
              productTabs[0];

            if (defaultProductTab) {
              setActiveProductTab(defaultProductTab);
            }
          }

          const heroImage = document.getElementById("hero-image");
          const heroKicker = document.getElementById("hero-kicker");
          const heroKickerText = document.getElementById("hero-kicker-text");
          const heroTitle = document.getElementById("hero-title");
          const heroCopy = document.getElementById("hero-copy");
          const heroOverlay = document.getElementById("hero-overlay");
          const heroDots = Array.from(document.querySelectorAll(".hero-dot"));

          if (heroImage && heroKickerText && heroTitle && heroCopy && heroDots.length) {
            const heroSlides = [
              {
                kicker: "From Your Heart to Cuba",
                titleLines: ["Help Your Loved", "Ones In Cuba With", "What They Need"],
                copy:
                  "Reliable delivery options designed to help you support your family with essential products and timely service.",
                image: "assets/shipbg.svg",
                alt: "Cargo ship at sea",
                overlay:
                  "linear-gradient(90deg, rgba(8,18,34,0.94) 0%, rgba(10,21,39,0.88) 18%, rgba(21,40,66,0.56) 40%, rgba(49,84,130,0.18) 68%, rgba(49,84,130,0) 100%)",
              },
              {
                kicker: "Fast & Trusted Shipping",
                titleLines: ["Send Care Packages", "With Full", "Peace Of Mind"],
                copy:
                  "Track every order from checkout to delivery with a secure process built for families sending support to Cuba.",
                image: "assets/shipbg.svg",
                alt: "Shipping vessel on open water",
                overlay:
                  "linear-gradient(90deg, rgba(7,16,30,0.95) 0%, rgba(11,24,44,0.86) 20%, rgba(24,45,72,0.52) 43%, rgba(55,90,136,0.16) 72%, rgba(55,90,136,0) 100%)",
              },
              {
                kicker: "Easy Ordering Experience",
                titleLines: ["Shop Essentials", "Pay Securely", "Deliver Quickly"],
                copy:
                  "Browse curated categories, complete payment in minutes, and let our team handle dependable delivery logistics.",
                image: "assets/shipbg.svg",
                alt: "Freight shipment route",
                overlay:
                  "linear-gradient(90deg, rgba(6,15,27,0.95) 0%, rgba(12,27,48,0.84) 22%, rgba(30,52,82,0.5) 46%, rgba(67,104,149,0.14) 74%, rgba(67,104,149,0) 100%)",
              },
              {
                kicker: "Support Family From Abroad",
                titleLines: ["Your Love Arrives", "Through Trusted", "Delivery Partners"],
                copy:
                  "From groceries to household goods, send practical support with transparent tracking and responsive service.",
                image: "assets/shipbg.svg",
                alt: "Cargo transport heading to destination",
                overlay:
                  "linear-gradient(90deg, rgba(9,18,31,0.94) 0%, rgba(13,28,50,0.86) 20%, rgba(31,54,86,0.5) 44%, rgba(71,109,153,0.15) 73%, rgba(71,109,153,0) 100%)",
              },
            ];

            let activeHeroSlide = 1;
            let heroAutoTimer;
            let heroFadeSwapTimer;

            const HERO_FADE_MS = 420;
            const HERO_FADE_OUT_HOLD_MS = 180;

            const heroFadeTargets = [heroKicker, heroTitle, heroCopy].filter(Boolean);

            const setHeroFadeState = (isFadingOut) => {
              const opacity = isFadingOut ? "0" : "1";
              const translateY = isFadingOut ? "translateY(10px)" : "translateY(0)";

              heroFadeTargets.forEach((element) => {
                element.style.transition = `opacity ${HERO_FADE_MS}ms ease, transform ${HERO_FADE_MS}ms ease`;
                element.style.opacity = opacity;
                element.style.transform = translateY;
              });

              heroImage.style.transition = `opacity ${HERO_FADE_MS}ms ease`;
              heroImage.style.opacity = opacity;

              if (heroOverlay) {
                heroOverlay.style.transition = `opacity ${HERO_FADE_MS}ms ease`;
                heroOverlay.style.opacity = opacity;
              }
            };

            const renderHeroTitle = (titleLines) =>
              titleLines
                .map((line) => `<span class="block md:whitespace-nowrap">${line}</span>`)
                .join("");

            const setHeroDotState = (dot, isActive) => {
              dot.setAttribute("aria-selected", isActive ? "true" : "false");

              if (isActive) {
                dot.className =
                  "hero-dot grid h-10 w-10 place-items-center rounded-full border-2 border-white/90 transition";
                dot.innerHTML = '<span class="h-3 w-3 rounded-full bg-white"></span>';
              } else {
                dot.className = "hero-dot h-3 w-3 rounded-full bg-white/95 transition";
                dot.textContent = "";
              }
            };

            const setHeroSlide = (index, withFade = true) => {
              const safeIndex = ((index % heroSlides.length) + heroSlides.length) % heroSlides.length;
              const slide = heroSlides[safeIndex];

              const applySlideContent = () => {
                heroKickerText.textContent = slide.kicker;
                heroTitle.innerHTML = renderHeroTitle(slide.titleLines);
                heroCopy.textContent = slide.copy;
                heroImage.src = slide.image;
                heroImage.alt = slide.alt;

                if (heroOverlay) {
                  heroOverlay.style.backgroundImage = slide.overlay;
                }

                heroDots.forEach((dot, dotIndex) => {
                  setHeroDotState(dot, dotIndex === safeIndex);
                });

                activeHeroSlide = safeIndex;
              };

              window.clearTimeout(heroFadeSwapTimer);

              if (!withFade) {
                applySlideContent();
                setHeroFadeState(false);
                return;
              }

              setHeroFadeState(true);
              heroFadeSwapTimer = window.setTimeout(() => {
                applySlideContent();
                window.requestAnimationFrame(() => {
                  setHeroFadeState(false);
                });
              }, HERO_FADE_OUT_HOLD_MS);
            };

            const nextHeroSlide = () => {
              setHeroSlide(activeHeroSlide + 1);
            };

            const startHeroAuto = () => {
              window.clearInterval(heroAutoTimer);
              heroAutoTimer = window.setInterval(nextHeroSlide, 5200);
            };

            const stopHeroAuto = () => {
              window.clearInterval(heroAutoTimer);
            };

            heroDots.forEach((dot) => {
              dot.addEventListener("click", () => {
                const targetIndex = Number(dot.dataset.heroSlide || 0);
                setHeroSlide(targetIndex);
                startHeroAuto();
              });
            });

            const heroSection = heroImage.closest("section");
            if (heroSection) {
              heroSection.addEventListener("mouseenter", stopHeroAuto);
              heroSection.addEventListener("mouseleave", startHeroAuto);
              heroSection.addEventListener("focusin", stopHeroAuto);
              heroSection.addEventListener("focusout", startHeroAuto);
            }

            window.addEventListener("blur", stopHeroAuto);
            window.addEventListener("focus", startHeroAuto);

            setHeroSlide(activeHeroSlide, false);
            startHeroAuto();
          }

          const categoryTrack = document.getElementById("category-track");
          const categoryPrev = document.getElementById("category-prev");
          const categoryNext = document.getElementById("category-next");

          if (categoryTrack && categoryTrack.children.length > 1) {
            let isCategoryAnimating = false;
            let categoryAutoTimer;

            const CATEGORY_ANIM_MS = 520;
            const CATEGORY_AUTO_MS = 3200;

            const getCategoryGap = () => {
              const styles = window.getComputedStyle(categoryTrack);
              return Number.parseFloat(styles.columnGap || styles.gap || "0") || 0;
            };

            const getCategoryStep = () => {
              const firstCard = categoryTrack.querySelector(".category-card");
              if (!firstCard) return 0;
              return firstCard.getBoundingClientRect().width + getCategoryGap();
            };

            const resetCategoryTrack = () => {
              categoryTrack.style.transition = "none";
              categoryTrack.style.transform = "translate3d(0, 0, 0)";
              categoryTrack.getBoundingClientRect();
            };

            const animateCategoryTo = (translateXPx, onDone) => {
              categoryTrack.style.transition = `transform ${CATEGORY_ANIM_MS}ms ease`;
              categoryTrack.style.transform = `translate3d(${translateXPx}px, 0, 0)`;

              window.setTimeout(() => {
                if (typeof onDone === "function") {
                  onDone();
                }
                resetCategoryTrack();
                categoryTrack.style.transition = "";
                isCategoryAnimating = false;
              }, CATEGORY_ANIM_MS + 25);
            };

            const slideCategoryNext = () => {
              if (isCategoryAnimating) {
                return;
              }

              const step = getCategoryStep();
              if (!step) {
                return;
              }

              isCategoryAnimating = true;
              animateCategoryTo(-step, () => {
                const first = categoryTrack.firstElementChild;
                if (first) {
                  categoryTrack.appendChild(first);
                }
              });
            };

            const slideCategoryPrev = () => {
              if (isCategoryAnimating) {
                return;
              }

              const step = getCategoryStep();
              if (!step) {
                return;
              }

              const last = categoryTrack.lastElementChild;
              if (!last) {
                return;
              }

              isCategoryAnimating = true;
              categoryTrack.insertBefore(last, categoryTrack.firstElementChild);
              categoryTrack.style.transition = "none";
              categoryTrack.style.transform = `translate3d(-${step}px, 0, 0)`;
              categoryTrack.getBoundingClientRect();

              animateCategoryTo(0);
            };

            const startCategoryAuto = () => {
              window.clearInterval(categoryAutoTimer);
              categoryAutoTimer = window.setInterval(() => {
                slideCategoryNext();
              }, CATEGORY_AUTO_MS);
            };

            const stopCategoryAuto = () => {
              window.clearInterval(categoryAutoTimer);
            };

            if (categoryNext) {
              categoryNext.addEventListener("click", () => {
                slideCategoryNext();
                startCategoryAuto();
              });
            }

            if (categoryPrev) {
              categoryPrev.addEventListener("click", () => {
                slideCategoryPrev();
                startCategoryAuto();
              });
            }

            [categoryTrack, categoryPrev, categoryNext].forEach((element) => {
              if (!element) {
                return;
              }

              element.addEventListener("mouseenter", stopCategoryAuto);
              element.addEventListener("mouseleave", startCategoryAuto);
              element.addEventListener("focusin", stopCategoryAuto);
              element.addEventListener("focusout", startCategoryAuto);
            });

            window.addEventListener("resize", resetCategoryTrack);

            resetCategoryTrack();
            startCategoryAuto();
          }

          const testimonialCarousel = document.getElementById("testimonial-carousel");
          const testimonialTrack = document.getElementById("testimonial-track");
          const testimonialDots = Array.from(document.querySelectorAll(".testimonial-dot"));

          if (testimonialCarousel && testimonialTrack && testimonialTrack.children.length > 1) {
            const baseTestimonialCards = Array.from(testimonialTrack.querySelectorAll(".testimonial-card"));
            baseTestimonialCards.forEach((card, index) => {
              card.dataset.testimonialIndex = String(index);
            });

            let nudgeRaf = null;
            let autoAdvanceTimer = null;
            let offsetX = 0;
            let isDragging = false;
            let isNudging = false;
            let dragLastX = 0;
            let dragDistanceX = 0;
            let activeDotIndex = 0;

            const TESTIMONIAL_NUDGE_MS = 300;
            const TESTIMONIAL_IDLE_AUTO_MS = 3000;

            const getTrackGap = () => {
              const styles = window.getComputedStyle(testimonialTrack);
              return Number.parseFloat(styles.columnGap || styles.gap || "0") || 0;
            };

            const getTrackStep = () => {
              const firstCard = testimonialTrack.querySelector(".testimonial-card");
              if (!firstCard) return 0;
              return firstCard.getBoundingClientRect().width + getTrackGap();
            };

            const setCardHighlight = (activeCard) => {
              const allCards = testimonialTrack.querySelectorAll(".testimonial-card");
              allCards.forEach((card) => {
                const isActive = card === activeCard;
                card.classList.toggle("border-[#e76271]", isActive);
                card.classList.toggle("bg-[#f8f8f9]", isActive);
                card.classList.toggle("shadow-[0_12px_34px_rgba(220,39,55,0.12)]", isActive);
                card.classList.toggle("border-[#dfe2e7]", !isActive);
                card.classList.toggle("bg-[#f3f3f4]", !isActive);
              });
            };

            const setActiveDot = (index) => {
              testimonialDots.forEach((dot, dotIndex) => {
                const isActive = dotIndex === index;
                dot.setAttribute("aria-current", isActive ? "true" : "false");
                dot.classList.toggle("bg-brand-red", isActive);
                dot.classList.toggle("border-brand-red", isActive);
                dot.classList.toggle("bg-transparent", !isActive);
                dot.classList.toggle("border-[#cf4352]", !isActive);
              });
              activeDotIndex = index;
            };

            const applyTrackTransform = () => {
              testimonialTrack.style.transform = `translate3d(${offsetX}px, 0, 0)`;
            };

            const rebuildRuntimeCards = () => {
              const clones = testimonialTrack.querySelectorAll('[data-testimonial-clone="true"]');
              clones.forEach((clone) => clone.remove());

              const step = getTrackStep();
              if (!step || !baseTestimonialCards.length) {
                return;
              }

              const minTrackWidth = testimonialCarousel.clientWidth + step * 2;
              let cloneIndex = 0;

              while (testimonialTrack.scrollWidth < minTrackWidth) {
                const source = baseTestimonialCards[cloneIndex % baseTestimonialCards.length];
                const clone = source.cloneNode(true);
                clone.dataset.testimonialClone = "true";
                clone.dataset.testimonialIndex = source.dataset.testimonialIndex || "0";
                clone.setAttribute("aria-hidden", "true");
                testimonialTrack.appendChild(clone);
                cloneIndex += 1;
              }

              // Avoid seam collision where the last visible item equals the first item.
              const first = testimonialTrack.firstElementChild;
              const last = testimonialTrack.lastElementChild;
              const firstIndex = first ? first.dataset.testimonialIndex : "";
              const lastIndex = last ? last.dataset.testimonialIndex : "";

              if (firstIndex && lastIndex && firstIndex === lastIndex) {
                const source = baseTestimonialCards[cloneIndex % baseTestimonialCards.length];
                const clone = source.cloneNode(true);
                clone.dataset.testimonialClone = "true";
                clone.dataset.testimonialIndex = source.dataset.testimonialIndex || "0";
                clone.setAttribute("aria-hidden", "true");
                testimonialTrack.appendChild(clone);
              }
            };

            const normalizeLoop = () => {
              const step = getTrackStep();
              if (!step) return;

              while (offsetX <= -step) {
                const first = testimonialTrack.firstElementChild;
                if (!first) break;
                testimonialTrack.appendChild(first);
                offsetX += step;
              }

              while (offsetX > 0) {
                const last = testimonialTrack.lastElementChild;
                if (!last) break;
                testimonialTrack.insertBefore(last, testimonialTrack.firstElementChild);
                offsetX -= step;
              }
            };

            const updateHighlightAndDots = () => {
              const cards = Array.from(testimonialTrack.querySelectorAll(".testimonial-card"));
              if (!cards.length) {
                return;
              }

              const viewportCenter = testimonialCarousel.getBoundingClientRect().left + testimonialCarousel.clientWidth / 2;
              let activeCard = cards[0];
              let nearest = Number.POSITIVE_INFINITY;

              cards.forEach((card) => {
                const rect = card.getBoundingClientRect();
                const cardCenter = rect.left + rect.width / 2;
                const dist = Math.abs(cardCenter - viewportCenter);

                if (dist < nearest) {
                  nearest = dist;
                  activeCard = card;
                }
              });

              setCardHighlight(activeCard);

              const activeBaseIndex = Number(activeCard.dataset.testimonialIndex || 0) % baseTestimonialCards.length;
              if (activeBaseIndex !== activeDotIndex) {
                setActiveDot(activeBaseIndex);
              }
            };

            const moveBy = (deltaX) => {
              offsetX += deltaX;
              normalizeLoop();
              applyTrackTransform();
              updateHighlightAndDots();
            };

            const stopNudge = () => {
              if (nudgeRaf !== null) {
                window.cancelAnimationFrame(nudgeRaf);
                nudgeRaf = null;
              }
              isNudging = false;
            };

            const animateBy = (deltaX, duration = TESTIMONIAL_NUDGE_MS) => {
              if (!deltaX) {
                return;
              }

              stopNudge();
              isNudging = true;

              const start = performance.now();
              let previous = 0;

              const tick = (now) => {
                const progress = Math.min(1, (now - start) / duration);
                const eased = 1 - Math.pow(1 - progress, 3);
                const current = deltaX * eased;
                moveBy(current - previous);
                previous = current;

                if (progress < 1) {
                  nudgeRaf = window.requestAnimationFrame(tick);
                  return;
                }

                nudgeRaf = null;
                isNudging = false;
              };

              nudgeRaf = window.requestAnimationFrame(tick);
            };

            const scheduleAutoAdvance = () => {
              window.clearTimeout(autoAdvanceTimer);
              autoAdvanceTimer = window.setTimeout(() => {
                if (!isDragging && !isNudging) {
                  const step = getTrackStep();
                  if (step) {
                    animateBy(-step, TESTIMONIAL_NUDGE_MS + 60);
                  }
                }

                scheduleAutoAdvance();
              }, TESTIMONIAL_IDLE_AUTO_MS);
            };

            const nudgeToNearestStep = (dragDistance) => {
              const step = getTrackStep();
              if (!step) {
                return;
              }

              const threshold = step * 0.35;

              // Direction-aware snapping:
              // drag left (negative) => next card, drag right (positive) => previous card.
              if (dragDistance <= -threshold) {
                animateBy(-step - offsetX, TESTIMONIAL_NUDGE_MS);
                return;
              }

              if (dragDistance >= threshold) {
                animateBy(-offsetX, TESTIMONIAL_NUDGE_MS);
                return;
              }

              // Small/incomplete drags snap back to current card by drag direction.
              if (dragDistance < 0) {
                animateBy(-offsetX, TESTIMONIAL_NUDGE_MS);
                return;
              }

              if (dragDistance > 0) {
                animateBy(-step - offsetX, TESTIMONIAL_NUDGE_MS);
              }
            };

            testimonialDots.forEach((dot) => {
              dot.addEventListener("click", () => {
                const targetIndex = Number(dot.dataset.slide || 0);
                const currentDiff = targetIndex - activeDotIndex;
                if (!currentDiff) {
                  scheduleAutoAdvance();
                  return;
                }

                const step = getTrackStep();
                if (!step) {
                  scheduleAutoAdvance();
                  return;
                }

                animateBy(-currentDiff * step, TESTIMONIAL_NUDGE_MS + 80);
                scheduleAutoAdvance();
              });
            });

            testimonialCarousel.addEventListener("pointerdown", (event) => {
              isDragging = true;
              dragLastX = event.clientX;
              dragDistanceX = 0;
              stopNudge();
              window.clearTimeout(autoAdvanceTimer);
              testimonialCarousel.classList.add("cursor-grabbing", "select-none");

              if (testimonialCarousel.setPointerCapture) {
                testimonialCarousel.setPointerCapture(event.pointerId);
              }
            });

            testimonialCarousel.addEventListener("pointermove", (event) => {
              if (!isDragging) {
                return;
              }

              const deltaX = event.clientX - dragLastX;
              dragLastX = event.clientX;
              dragDistanceX += deltaX;
              moveBy(deltaX);
              event.preventDefault();
            });

            const releaseDrag = (event) => {
              if (!isDragging) {
                return;
              }

              isDragging = false;
              testimonialCarousel.classList.remove("cursor-grabbing", "select-none");

              if (
                event &&
                testimonialCarousel.releasePointerCapture &&
                testimonialCarousel.hasPointerCapture &&
                testimonialCarousel.hasPointerCapture(event.pointerId)
              ) {
                testimonialCarousel.releasePointerCapture(event.pointerId);
              }

              nudgeToNearestStep(dragDistanceX);
              scheduleAutoAdvance();
            };

            testimonialCarousel.addEventListener("pointerup", releaseDrag);
            testimonialCarousel.addEventListener("pointercancel", releaseDrag);

            window.addEventListener("resize", () => {
              rebuildRuntimeCards();
              offsetX = 0;
              applyTrackTransform();
              updateHighlightAndDots();
              scheduleAutoAdvance();
            });

            rebuildRuntimeCards();
            applyTrackTransform();
            setActiveDot(0);
            updateHighlightAndDots();
            scheduleAutoAdvance();
          }
    </script>
@endsection
