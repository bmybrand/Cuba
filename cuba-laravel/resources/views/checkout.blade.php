@extends('layouts.app')

@section('title', 'Checkout - Send Love to Cuba')

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

            .checkout-field {
              background: #ffffff;
              transition: border-color 180ms ease, box-shadow 180ms ease;
            }

            .checkout-field:focus {
              border-color: #173a75;
              box-shadow: 0 0 0 3px rgba(23, 58, 117, 0.12);
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
          <img src="{{ asset("assets/checkout.svg") }}" alt="Checkout banner" class="absolute inset-0 h-full w-full object-cover" />
          <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(9,18,34,0.86),rgba(9,18,34,0.76),rgba(9,18,34,0.86))]"></div>
          <div class="relative mx-auto max-w-[1540px] px-10 text-center md:px-16 xl:px-24">
            <h1 class="font-heading text-[clamp(56px,7vw,102px)] uppercase leading-[0.88] text-white">Checkout</h1>
            <p class="mt-4 text-[17px] text-white/85"><a href="{{ route('home') }}" class="underline-offset-2 hover:underline">Home</a> <span class="mx-2">&gt;</span> Checkout</p>
          </div>
        </section>
        <section class="bg-white py-[72px] md:py-[96px]">
          <div class="mx-auto grid items-start max-w-[1540px] gap-8 px-10 md:px-16 xl:grid-cols-[minmax(0,1fr)_360px] xl:px-24">
            <article class="rounded-[20px] border border-[#e6ebf2] bg-white p-5 shadow-[0_10px_28px_rgba(8,22,46,0.05)] md:p-6">
              <div class="flex flex-col items-start gap-4">
                <p class="text-[15px] text-[#7a859a]">Returning Customer? Click here to login</p>
                <div class="grid w-full max-w-[370px] grid-cols-2 rounded-[17px] border border-[#cfd6e2] p-[5px]">
                  <button id="checkout-sender-tab" type="button" class="inline-flex h-[58px] items-center justify-center rounded-[13px] bg-[#173a75] px-4 font-heading font-medium text-[1.34rem] uppercase leading-none text-white">Sender Details</button>
                  <button id="checkout-recipient-tab" type="button" class="inline-flex h-[58px] items-center justify-center rounded-[13px] bg-transparent px-4 font-heading font-medium text-[1.34rem] uppercase leading-none text-[#101827]">Recipient Details</button>
                </div>
              </div>

              <form id="checkout-sender-form" class="mt-6 space-y-3.5" action="#" method="post" onsubmit="return false;">
                <input type="text" placeholder="Full Name" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />
                <input type="text" placeholder="Address" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />
                <input type="text" placeholder="Apartment, unit, etc. (optional)" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />
                <input type="text" placeholder="City" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />

                <div class="grid gap-4 md:grid-cols-[1.2fr_0.8fr]">
                  <select class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#7a859a] outline-none">
                    <option>State</option>
                    <option>Florida</option>
                    <option>Texas</option>
                    <option>California</option>
                  </select>
                  <input type="text" placeholder="Zip code" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />
                </div>

                <div class="grid gap-4 md:grid-cols-2">
                  <input type="email" placeholder="Email address" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />
                  <input type="tel" placeholder="Phone" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />
                </div>

                <textarea rows="5" placeholder="Type your note (optional)" class="checkout-field min-h-[112px] w-full rounded-[11px] border border-[#e1e6ef] px-5 py-4 text-[15px] text-[#13213d] outline-none"></textarea>

                <p class="pt-1 text-[18px] leading-[1.5] text-[#8c96a8]">
                  Please provide accurate sender information. This is required for order approval and shipping compliance with U.S. and Cuban regulations.
                </p>

                <div class="flex flex-wrap gap-3 pt-1">
                  <button type="button" class="group inline-flex items-center justify-between rounded-[10px] border border-transparent bg-brand-red px-1.5 py-1.5 text-white transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-red hover:bg-transparent hover:text-brand-red">
                    <span class="font-heading text-[1.16rem] uppercase leading-none tracking-[0.02em] lg:pl-2">Continue Shipping</span>
                    <span class="ml-4 grid h-10 w-10 place-items-center rounded-[10px] border border-transparent bg-white text-brand-red transition-all duration-300 group-hover:scale-105 group-hover:border-brand-red group-hover:bg-transparent group-hover:text-brand-red">
                      <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.4">
                        <path d="M6 12.5 10.2 16.7 18 8.8"></path>
                      </svg>
                    </span>
                  </button>
                  <button type="button" class="group inline-flex items-center justify-between rounded-[10px] border border-transparent bg-[#173a75] px-1.5 py-1.5 text-white transition-all duration-300 hover:-translate-y-0.5 hover:border-[#173a75] hover:bg-transparent hover:text-[#173a75]">
                    <span class="font-heading text-[1.16rem] uppercase leading-none tracking-[0.02em] lg:pl-2">Return to Cart</span>
                    <span class="ml-4 grid h-10 w-10 place-items-center rounded-[10px] border border-transparent bg-white text-[#173a75] transition-all duration-300 group-hover:scale-105 group-hover:border-[#173a75] group-hover:bg-transparent group-hover:text-[#173a75]">
                      <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.4">
                        <path d="M6 12.5 10.2 16.7 18 8.8"></path>
                      </svg>
                    </span>
                  </button>
                </div>
              </form>

              <form id="checkout-recipient-form" class="mt-6 hidden space-y-3.5" action="#" method="post" onsubmit="return false;">
                <div class="grid gap-4 md:grid-cols-2">
                  <input type="text" placeholder="First name" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />
                  <input type="text" placeholder="Last name" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />
                </div>
                <input type="text" placeholder="Cuba Identity Card Number" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />
                <input type="text" placeholder="Address" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />
                <input type="text" placeholder="Apartment, unit, etc. (optional)" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />
                <input type="text" placeholder="City" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />

                <div class="grid gap-4 md:grid-cols-2">
                  <select class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#7a859a] outline-none">
                    <option>Municipality</option>
                    <option>Havana</option>
                    <option>Santiago de Cuba</option>
                    <option>Matanzas</option>
                  </select>
                  <select class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#7a859a] outline-none">
                    <option>Province</option>
                    <option>La Habana</option>
                    <option>Holguin</option>
                    <option>Villa Clara</option>
                  </select>
                </div>

                <div class="grid gap-4 md:grid-cols-2">
                  <input type="text" placeholder="Postal Code" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />
                  <input type="tel" placeholder="Phone" class="checkout-field h-[48px] w-full rounded-[11px] border border-[#e1e6ef] px-5 text-[15px] text-[#13213d] outline-none" />
                </div>

                <textarea rows="5" placeholder="Type your note (optional)" class="checkout-field min-h-[112px] w-full rounded-[11px] border border-[#e1e6ef] px-5 py-4 text-[15px] text-[#13213d] outline-none"></textarea>

                <p class="pt-1 text-[15px] leading-[1.5] text-[#8c96a8]">
                  Enter accurate recipient details in Cuba. This information is required for customs clearance and successful delivery.
                </p>

                <div class="flex flex-wrap gap-3 pt-1">
                  <button type="button" class="group inline-flex items-center justify-between rounded-[10px] border border-transparent bg-brand-red px-1.5 py-1.5 text-white transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-red hover:bg-transparent hover:text-brand-red">
                    <span class="font-heading text-[1.16rem] uppercase leading-none tracking-[0.02em] lg:pl-2">Continue Shipping</span>
                    <span class="ml-4 grid h-10 w-10 place-items-center rounded-[10px] border border-transparent bg-white text-brand-red transition-all duration-300 group-hover:scale-105 group-hover:border-brand-red group-hover:bg-transparent group-hover:text-brand-red">
                      <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.4">
                        <path d="M6 12.5 10.2 16.7 18 8.8"></path>
                      </svg>
                    </span>
                  </button>
                  <button type="button" class="group inline-flex items-center justify-between rounded-[10px] border border-transparent bg-[#173a75] px-1.5 py-1.5 text-white transition-all duration-300 hover:-translate-y-0.5 hover:border-[#173a75] hover:bg-transparent hover:text-[#173a75]">
                    <span class="font-heading text-[1.16rem] uppercase leading-none tracking-[0.02em] lg:pl-2">Return to Cart</span>
                    <span class="ml-4 grid h-10 w-10 place-items-center rounded-[10px] border border-transparent bg-white text-[#173a75] transition-all duration-300 group-hover:scale-105 group-hover:border-[#173a75] group-hover:bg-transparent group-hover:text-[#173a75]">
                      <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.4">
                        <path d="M6 12.5 10.2 16.7 18 8.8"></path>
                      </svg>
                    </span>
                  </button>
                </div>
              </form>
            </article>

            <aside class="rounded-[18px] bg-[#F7F7F7] p-5 shadow-[0_10px_28px_rgba(8,22,46,0.05)]">
              <section>
                <h3 class="font-heading font-medium text-[1.56rem] uppercase leading-none text-[#101827]">Order Summary</h3>
                <div class="mt-4 h-[3px] w-[92px] bg-[#101827]"></div>
                <div class="mt-6 space-y-0 text-[13px] text-[#7c879a]">
                  <div class="flex items-center justify-between gap-4 border-b border-t border-[#e3e7ee] py-3"><span>Lorem ipsum dolor sit amet</span><span class="text-[#5f697d]">$86.00</span></div>
                  <div class="flex items-center justify-between gap-4 border-b border-[#e3e7ee] py-3"><span>Lorem ipsum dolor sit amet</span><span class="text-[#5f697d]">$48.00</span></div>
                  <div class="flex items-center justify-between gap-4 border-b border-[#e3e7ee] py-3"><span>Lorem ipsum dolor sit amet</span><span class="text-[#5f697d]">$42.00</span></div>
                  <div class="flex items-center justify-between gap-4 border-b border-[#e3e7ee] py-3"><span>Lorem ipsum dolor sit amet</span><span class="text-[#5f697d]">$55.00</span></div>
                  <div class="flex items-center justify-between gap-4 border-b border-[#e3e7ee] py-3"><span>Lorem ipsum dolor sit amet</span><span class="text-[#5f697d]">$55.00</span></div>
                </div>
                <div class="mt-3 space-y-0 text-[13px]">
                  <div class="flex items-center justify-between gap-4 border-b border-[#e3e7ee] py-3 text-[#7c879a]"><span>Sub total</span><span class="text-[#5f697d]">$249.00 USD</span></div>
                  <div class="flex items-center justify-between gap-4 py-3 text-[#7c879a]"><span>Total</span><span class="text-[#5f697d]">$249.00 USD</span></div>
                </div>
              </section>

              <section class="mt-6">
                <h3 class="font-heading font-medium text-[1.56rem] uppercase leading-none text-[#101827]">Payment Method</h3>
                <div class="mt-4 h-[3px] w-[92px] bg-[#101827]"></div>
                <div class="mt-6 space-y-2 text-[1.16rem] text-[#173a75]">
                  <label class="flex items-center gap-2.5 border-t border-[#e3e7ee] pt-3 font-heading font-medium uppercase"><input type="radio" name="payment" class="h-3.5 w-3.5 accent-[#173a75]" /> Direct Bank Transfer</label>
                  <label class="flex items-center gap-2.5 font-heading font-medium uppercase"><input type="radio" name="payment" class="h-3.5 w-3.5 accent-[#173a75]" /> Cash on Delivery (COD)</label>
                  <label class="flex items-center gap-2.5 font-heading font-medium uppercase"><input type="radio" name="payment" checked class="h-3.5 w-3.5 accent-[#173a75]" /> Credit / Debit Card</label>
                </div>
                <div class="mt-3 flex flex-wrap items-center gap-1.5">
                  <img src="{{ asset("assets/visa.png.svg") }}" alt="Visa" class="h-6 w-auto rounded-[3px] bg-white p-[2px]" />
                  <img src="{{ asset("assets/mastercard.png.svg") }}" alt="Mastercard" class="h-6 w-auto rounded-[3px] bg-white p-[2px]" />
                  <img src="{{ asset("assets/paypal.png.svg") }}" alt="PayPal" class="h-6 w-auto rounded-[3px] bg-white p-[2px]" />
                </div>
              </section>

              <section class="mt-5 space-y-3">
                <div>
                  <label class="mb-1.5 block font-heading font-medium text-[1.08rem] uppercase text-[#101827]">Full Name</label>
                  <input type="text" placeholder="Sara Tylor" class="checkout-field h-[42px] w-full rounded-[10px] border border-[#dfe4ec] px-4 text-[13px] text-[#13213d] outline-none" />
                </div>
                <div>
                  <label class="mb-1.5 block font-heading font-medium text-[1.08rem] uppercase text-[#101827]">Card Number</label>
                  <div class="relative">
                    <input type="text" placeholder="1234 5678 9012 3456" class="checkout-field h-[42px] w-full rounded-[10px] border border-[#dfe4ec] px-4 pr-12 text-[13px] text-[#13213d] outline-none" />
                    <span class="absolute right-2.5 top-1/2 -translate-y-1/2 font-heading text-[1rem] uppercase text-[#173a75]">Visa</span>
                  </div>
                </div>
                <div class="grid gap-3 grid-cols-2">
                  <div>
                    <label class="mb-1.5 block font-heading font-medium text-[1.08rem] uppercase text-[#101827]">Expiration Date</label>
                    <input type="text" placeholder="08/10" class="checkout-field h-[42px] w-full rounded-[10px] border border-[#dfe4ec] px-4 text-[13px] text-[#13213d] outline-none" />
                  </div>
                  <div>
                    <label class="mb-1.5 block font-heading font-medium text-[1.08rem] uppercase text-[#101827]">CVV</label>
                    <input type="text" placeholder="896" class="checkout-field h-[42px] w-full rounded-[10px] border border-[#dfe4ec] px-4 text-[13px] text-[#13213d] outline-none" />
                  </div>
                </div>

                <button type="button" class="inline-flex h-[44px] w-full items-center justify-center rounded-[8px] bg-brand-red font-heading text-[1.16rem] uppercase text-white">Pay Now</button>
                <p class="text-[13px] leading-[1.65] text-[#8c96a8]">
                  Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#" class="text-brand-red">privacy policy</a>.
                </p>
                <label class="flex items-start gap-2.5 text-[13px] leading-[1.55] text-[#7c879a]">
                  <input type="checkbox" checked class="mt-0.5 h-3.5 w-3.5 accent-[#173a75]" />
                  <span>I have read and agree to the website <a href="#" class="text-brand-red">terms and conditions</a></span>
                </label>
                <button type="button" class="group inline-flex items-center justify-between rounded-[10px] border border-transparent bg-brand-red px-1.5 py-1.5 text-white transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-red hover:bg-transparent hover:text-brand-red">
                  <span class="font-heading text-[1.16rem] uppercase leading-none tracking-[0.02em] lg:pl-2">Place Your Order</span>
                  <span class="ml-4 grid h-10 w-10 place-items-center rounded-[10px] border border-transparent bg-white text-brand-red transition-all duration-300 group-hover:scale-105 group-hover:border-brand-red group-hover:bg-transparent group-hover:text-brand-red">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.4">
                      <path d="M6 12.5 10.2 16.7 18 8.8"></path>
                    </svg>
                  </span>
                </button>
              </section>
            </aside>
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
        const checkoutSenderTab = document.getElementById("checkout-sender-tab");
          const checkoutRecipientTab = document.getElementById("checkout-recipient-tab");
          const checkoutSenderForm = document.getElementById("checkout-sender-form");
          const checkoutRecipientForm = document.getElementById("checkout-recipient-form");

          const syncCheckoutTabs = (mode) => {
            const isSender = mode === "sender";

            if (checkoutSenderForm) {
              checkoutSenderForm.classList.toggle("hidden", !isSender);
            }

            if (checkoutRecipientForm) {
              checkoutRecipientForm.classList.toggle("hidden", isSender);
            }

            if (checkoutSenderTab) {
              checkoutSenderTab.classList.toggle("bg-[#173a75]", isSender);
              checkoutSenderTab.classList.toggle("text-white", isSender);
              checkoutSenderTab.classList.toggle("bg-transparent", !isSender);
              checkoutSenderTab.classList.toggle("text-[#101827]", !isSender);
            }

            if (checkoutRecipientTab) {
              checkoutRecipientTab.classList.toggle("bg-[#173a75]", !isSender);
              checkoutRecipientTab.classList.toggle("text-white", !isSender);
              checkoutRecipientTab.classList.toggle("bg-transparent", isSender);
              checkoutRecipientTab.classList.toggle("text-[#101827]", isSender);
            }
          };

          if (checkoutSenderTab && checkoutRecipientTab) {
            checkoutSenderTab.addEventListener("click", () => syncCheckoutTabs("sender"));
            checkoutRecipientTab.addEventListener("click", () => syncCheckoutTabs("recipient"));
            syncCheckoutTabs("sender");
          }

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
