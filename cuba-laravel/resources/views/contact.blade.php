@extends('layouts.app')

@section('title', 'Contact | Send Love to Cuba')

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

                .text-\[10px\],
                .text-\[11px\],
                .text-\[13px\],
                .text-\[14px\],
                .text-\[15px\],
                .text-\[16px\],
                .text-\[17px\],
                .text-\[18px\],
                .text-\[0\.95rem\],
                .text-\[1rem\],
                .text-\[1\.05rem\],
                .text-\[1\.08rem\] {
                    font-size: 1.12rem !important;
                }

                .cart-display {
                    font-family: "Bebas Neue", sans-serif;
                }

                .cart-inter {
                    font-family: "Inter", sans-serif;
                }

                .cart-table-head {
                    font-weight: 500;
                }

                #service-features h5 {
                    font-weight: 500;
                }

                #service-features p {
                    font-family: "Inter", sans-serif !important;
                    font-size: 0.96rem !important;
                    line-height: 1.28 !important;
                }

                .qty-stepper-btn {
                    display: grid;
                    place-items: center;
                    font-family: "Inter", sans-serif;
                    font-size: 16px;
                    line-height: 1;
                    color: #778397;
                    transition: background-color 0.2s ease, color 0.2s ease;
                }

                .qty-stepper-btn:hover {
                    background: #f4f6f9;
                    color: #c6232f;
                }

                .contact-label {
                    font-family: "Inter", sans-serif;
                    font-size: 1.12rem;
                    font-weight: 500;
                    line-height: 1;
                    color: #707b8f;
                }

                .contact-chip {
                    font-family: "Inter", sans-serif;
                    font-size: 1.12rem;
                    font-weight: 500;
                    line-height: 1;
                }

                .contact-copy {
                    font-family: "Inter", sans-serif;
                    font-size: 0.96rem;
                    line-height: 1.75;
                    color: #7a8291;
                }

                .contact-panel-title {
                    font-family: "Bebas Neue", sans-serif;
                    font-size: clamp(2rem, 3vw, 3rem);
                    line-height: 0.94;
                    letter-spacing: 0;
                    font-weight: 500;
                    text-transform: uppercase;
                    color: #101a2a;
                }

                .contact-panel-copy {
                    font-family: "Inter", sans-serif;
                    font-size: 1.12rem;
                    line-height: 1.6;
                    color: #8a92a1;
                }

                .contact-field {
                    width: 100%;
                    border: 1px solid #e1e6ef;
                    border-radius: 11px;
                    background: #fff;
                    min-height: 48px;
                    padding: 0 1.25rem;
                    font-family: "Barlow", sans-serif;
                    font-size: 1.12rem;
                    line-height: 1.2;
                    color: #13213d;
                    outline: none;
                    transition: border-color 0.2s ease, box-shadow 0.2s ease;
                }

                .contact-field::placeholder {
                    color: #7a859a;
                }

                .contact-field:focus {
                    border-color: #173a75;
                    box-shadow: 0 0 0 3px rgba(23, 58, 117, 0.12);
                }

                .contact-card {
                    border: 1px solid #e7e9ef;
                    border-radius: 16px;
                    background: #fff;
                    min-height: 120px;
                    padding: 1.25rem 1.5rem;
                    display: flex;
                    align-items: center;
                }

                .contact-card-title {
                    font-family: "Bebas Neue", "Barlow", sans-serif;
                    font-size: 1.3rem;
                    line-height: 1;
                    letter-spacing: 0;
                    font-weight: 500;
                    text-transform: uppercase;
                    color: #101827;
                }

                .contact-card-copy {
                    font-family: "Inter", sans-serif;
                    font-size: 0.96rem;
                    line-height: 1.5;
                    color: #98a0ad;
                }

                .contact-card-row {
                    display: flex;
                    width: 100%;
                    align-items: center;
                    justify-content: flex-start;
                    gap: 1rem;
                    text-align: left;
                }

                .contact-card-body {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    flex: 1;
                    max-width: none;
                    min-width: 0;
                }

                .contact-submit {
                    transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease, transform 0.25s ease;
                }

                .contact-submit:hover {
                    background: #0b1f42;
                    border-color: #0b1f42;
                    color: #fff;
                    transform: translateY(-1px);
                }

                .qty-input::-webkit-outer-spin-button,
                .qty-input::-webkit-inner-spin-button {
                    -webkit-appearance: none;
                    margin: 0;
                }

                .qty-input[type="number"] {
                    -moz-appearance: textfield;
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
                <img src="{{ asset("assets/Contact us Bannar.png") }}" alt="Contact banner"
                    class="absolute inset-0 h-full w-full object-cover" />
                <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(9,18,34,0.86),rgba(9,18,34,0.76),rgba(9,18,34,0.86))]"></div>
                <div class="relative mx-auto max-w-[1540px] px-10 text-center md:px-16 xl:px-24">
                    <h1 class="font-heading text-[clamp(2.6rem,5.3vw,5rem)] uppercase leading-[0.9] text-white">Contact</h1>
                    <p class="cart-inter mt-3 text-[15px] text-white/85"><a href="{{ route('home') }}" class="underline-offset-2 hover:underline">Home</a> <span class="mx-2">&gt;</span> Contact</p>
                </div>
            </section>

            <section class="bg-white pb-[72px] pt-[42px] md:pb-[96px] md:pt-[58px]">
                <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
                    <div class="grid gap-10 xl:grid-cols-[1.12fr_0.88fr] xl:items-start xl:gap-12">
                        <div class="pt-3">
                            <span class="inline-flex min-h-[42px] items-center gap-[14px] rounded-full border border-[#f3cfd5] bg-[#fff1f3] px-[14px] py-[4px] text-[15px] font-medium leading-none text-[#C6232F]">
                                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
                                <span>Connect With Us</span>
                                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
                            </span>
                            <h2 class="mt-6 max-w-[720px] font-heading text-[clamp(1.9rem,3.55vw,3.45rem)] font-medium uppercase leading-[0.92] text-[#0f1728]">
                                Connect With Us For
                                <span class="block">Sending Support To Cuba</span>
                            </h2>
                            <p class="contact-copy mt-5 max-w-[490px]">
                                Reach out to Send Love to Cuba for any questions, order assistance, or support. Whether you need help choosing products or tracking a delivery, our team is here to make the process simple and reliable for you and your loved ones.
                            </p>

                            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                                <article class="contact-card">
                                    <div class="contact-card-row">
                                        <span class="inline-flex h-[48px] w-[48px] shrink-0 items-center justify-center rounded-full bg-[#fff5f6] text-brand-red">
                                            <svg viewBox="0 0 24 24" class="h-[30px] w-[30px]" fill="none" stroke="currentColor" stroke-width="1.8">
                                                <path d="M12 21s-6-5.33-6-11a6 6 0 1 1 12 0c0 5.67-6 11-6 11z"></path>
                                                <circle cx="12" cy="10" r="2.5"></circle>
                                            </svg>
                                        </span>
                                        <div class="contact-card-body">
                                            <h3 class="contact-card-title">Address</h3>
                                            <p class="contact-card-copy mt-1.5">2430 W. Oakland Park Blvd, Suite 113, Oakland Park, FL 33311</p>
                                        </div>
                                    </div>
                                </article>

                                <article class="contact-card">
                                    <div class="contact-card-row">
                                        <span class="inline-flex h-[48px] w-[48px] shrink-0 items-center justify-center rounded-full bg-[#fff5f6] text-brand-red">
                                            <svg viewBox="0 0 24 24" class="h-[30px] w-[30px]" fill="none" stroke="currentColor" stroke-width="1.8">
                                                <path d="M6.7 4.5h2.9l1.4 3.8-1.8 1.7c1 2 2.6 3.6 4.6 4.6l1.7-1.8 3.8 1.4v2.9a1.6 1.6 0 0 1-1.6 1.6A14.7 14.7 0 0 1 5.1 6.1 1.6 1.6 0 0 1 6.7 4.5z"></path>
                                            </svg>
                                        </span>
                                        <div class="contact-card-body">
                                            <h3 class="contact-card-title">Call Us</h3>
                                            <p class="contact-card-copy mt-1.5">+1 (786) 485-4545</p>
                                        </div>
                                    </div>
                                </article>

                                <article class="contact-card">
                                    <div class="contact-card-row">
                                        <span class="inline-flex h-[48px] w-[48px] shrink-0 items-center justify-center rounded-full bg-[#fff5f6] text-brand-red">
                                            <svg viewBox="0 0 24 24" class="h-[30px] w-[30px]" fill="none" stroke="currentColor" stroke-width="1.8">
                                                <path d="M3 6h18v12H3z"></path>
                                                <path d="m3 7 9 7 9-7"></path>
                                            </svg>
                                        </span>
                                        <div class="contact-card-body">
                                            <h3 class="contact-card-title">Send Us A Mail</h3>
                                            <p class="contact-card-copy mt-1.5 break-all">sendlovetocuba@outlook.com</p>
                                        </div>
                                    </div>
                                </article>

                                <article class="contact-card">
                                    <div class="contact-card-row">
                                        <span class="inline-flex h-[48px] w-[48px] shrink-0 items-center justify-center rounded-full bg-[#fff5f6] text-brand-red">
                                            <svg viewBox="0 0 24 24" class="h-[30px] w-[30px]" fill="none" stroke="currentColor" stroke-width="1.8">
                                                <circle cx="12" cy="12" r="8"></circle>
                                                <path d="M12 8v4l2.5 2.5"></path>
                                            </svg>
                                        </span>
                                        <div class="contact-card-body">
                                            <h3 class="contact-card-title">Opening Time</h3>
                                            <p class="contact-card-copy mt-1.5">Monday - Sunday: Varies</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="rounded-[22px] border border-[#e6e9ef] bg-white p-6 shadow-[0_18px_48px_rgba(8,20,42,0.05)] md:p-7">
                            <h2 class="contact-panel-title">Get In Touch</h2>
                            <p class="contact-panel-copy mt-3">Our team is ready to assist you with your order or inquiries.</p>

                            <form class="mt-6" action="#" method="post" onsubmit="return false;">
                                <div class="grid gap-4 sm:grid-cols-2">
                                    <div>
                                        <label class="sr-only" for="contact-first-name">First Name</label>
                                        <input id="contact-first-name" class="contact-field" type="text" placeholder="First Name" />
                                    </div>
                                    <div>
                                        <label class="sr-only" for="contact-last-name">Last Name</label>
                                        <input id="contact-last-name" class="contact-field" type="text" placeholder="Last Name" />
                                    </div>
                                    <div>
                                        <label class="sr-only" for="contact-email">Email Address</label>
                                        <input id="contact-email" class="contact-field" type="email" placeholder="Email Address" />
                                    </div>
                                    <div>
                                        <label class="sr-only" for="contact-phone">Phone Number</label>
                                        <input id="contact-phone" class="contact-field" type="tel" placeholder="Phone Number" />
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <label class="sr-only" for="contact-message">Message</label>
                                    <textarea id="contact-message" class="contact-field min-h-[112px] resize-none py-4 align-top" placeholder="Write your message here"></textarea>
                                </div>

                                <div class="mt-4 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                                    <div>
                                        <span class="contact-label">Security Code:</span>
                                        <div class="mt-1 font-display text-[34px] leading-none text-brand-red">5894</div>
                                    </div>
                                    <div class="w-full max-w-[188px]">
                                        <label class="sr-only" for="contact-code">Security Code</label>
                                        <input id="contact-code" class="contact-field text-center" type="text" placeholder="*Enter Code" />
                                    </div>
                                </div>

                                <button type="submit" class="contact-submit group mt-5 inline-flex items-center justify-between rounded-[10px] border border-transparent bg-brand-red px-1.5 py-1.5 text-white transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-red hover:bg-transparent hover:text-brand-red">
                                    <span class="font-heading text-[1.16rem] uppercase leading-none tracking-[0.02em] lg:pl-2">Send Message</span>
                                    <span class="ml-4 grid h-10 w-10 place-items-center rounded-[10px] border border-transparent bg-white text-brand-red transition-all duration-300 group-hover:scale-105 group-hover:border-brand-red group-hover:bg-transparent group-hover:text-brand-red">
                                        <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.4">
                                            <path d="M6 12.5 10.2 16.7 18 8.8"></path>
                                        </svg>
                                    </span>
                                </button>
                            </form>
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
                                    <h5 class="font-heading text-[1.3rem] uppercase leading-none text-[#101827]">Delivery Across Cuba</h5>
                                    <p class="mt-2 text-[12px] leading-[1.28] text-[#6d7380]">Reliable home delivery to loved ones across the island.</p>
                                </div>
                            </div>
                        </article>
                        <article class="rounded-[20px] border border-[#d9dde4] px-5 py-5">
                            <div class="flex items-start gap-4">
                                <img src="{{ asset("assets/Easy Online Ordering.svg") }}" alt="Easy Online Ordering" class="h-8 w-8 shrink-0 object-contain" />
                                <div>
                                    <h5 class="font-heading text-[1.3rem] uppercase leading-none text-[#101827]">Easy Online Ordering</h5>
                                    <p class="mt-2 text-[12px] leading-[1.28] text-[#6d7380]">Shop from the U.S. with a simple &amp; convenient process.</p>
                                </div>
                            </div>
                        </article>
                        <article class="rounded-[20px] border border-[#d9dde4] px-5 py-5">
                            <div class="flex items-start gap-4">
                                <img src="{{ asset("assets/Secure Payment.svg") }}" alt="Secure Payment" class="h-8 w-8 shrink-0 object-contain" />
                                <div>
                                    <h5 class="font-heading text-[1.3rem] uppercase leading-none text-[#101827]">Secure Payment</h5>
                                    <p class="mt-2 text-[12px] leading-[1.28] text-[#6d7380]">Trusted checkout options for a safe shopping experience.</p>
                                </div>
                            </div>
                        </article>
                        <article class="rounded-[20px] border border-[#d9dde4] px-5 py-5">
                            <div class="flex items-start gap-4">
                                <img src="{{ asset("assets/Essential Product Selection.svg") }}" alt="Essential Product Selection" class="h-8 w-8 shrink-0 object-contain" />
                                <div>
                                    <h5 class="font-heading text-[1.3rem] uppercase leading-none text-[#101827]">Essential Product Selection</h5>
                                    <p class="mt-2 text-[12px] leading-[1.28] text-[#6d7380]">Send groceries, household goods, appliances, &amp; more.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </main>
@endsection

@section('scripts')
@endsection
