@extends('layouts.app')

@section("title", "FAQ's | Send Love to Cuba")

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

                .faq-trigger[aria-expanded="true"] .faq-icon-open {
                    display: inline-flex;
                }

                .faq-trigger[aria-expanded="true"] .faq-icon-closed {
                    display: none;
                }

                .faq-trigger[aria-expanded="false"] .faq-icon-open {
                    display: none;
                }

                .faq-trigger[aria-expanded="false"] .faq-icon-closed {
                    display: inline-flex;
                }

                .faq-icon-open,
                .faq-icon-closed {
                    align-items: center;
                    justify-content: center;
                }

                .faq-icon-open svg,
                .faq-icon-closed svg {
                    display: block;
                    width: 14px;
                    height: 14px;
                }

                .faq-panel {
                    display: grid;
                    grid-template-rows: 0fr;
                    opacity: 0;
                    padding-top: 0 !important;
                    transition: grid-template-rows 0.35s ease, opacity 0.25s ease, padding-top 0.35s ease;
                }

                .faq-panel.is-open {
                    grid-template-rows: 1fr;
                    opacity: 1;
                    padding-top: 1.25rem !important;
                }

                .faq-panel-inner {
                    min-height: 0;
                    overflow: hidden;
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
                <img src="{{ asset("assets/FAQ's bannar.png") }}" alt="FAQ banner"
                    class="absolute inset-0 h-full w-full object-cover" />
                <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(9,18,34,0.86),rgba(9,18,34,0.76),rgba(9,18,34,0.86))]"></div>
                <div class="relative mx-auto max-w-[1540px] px-10 text-center md:px-16 xl:px-24">
                    <h1 class="font-heading text-[clamp(2.6rem,5.3vw,5rem)] uppercase leading-[0.9] text-white">FAQ's</h1>
                    <p class="cart-inter mt-3 text-[15px] text-white/85"><a href="{{ route('home') }}" class="underline-offset-2 hover:underline">Home</a> <span class="mx-2">&gt;</span> FAQ's</p>
                </div>
            </section>

            <section class="bg-white pb-[72px] pt-[34px] md:pb-[96px] md:pt-[46px]">
                <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
                    <div>
                        <div class="text-center">
                            <span class="inline-flex min-h-[42px] items-center gap-[14px] rounded-full border border-[#f3cfd5] bg-[#fff1f3] px-[14px] py-[4px] text-[15px] font-medium leading-none text-[#C6232F]">
                                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
                                <span>Need To Know</span>
                                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
                            </span>
                            <h2 class="mt-5 font-heading text-[clamp(2rem,4vw,3.7rem)] uppercase leading-[0.95] text-[#101a2a]">Frequently Asked Questions</h2>
                        </div>

                        <div class="mt-10 space-y-4">
                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5">
                                <button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="true" data-faq-trigger>
                                    <span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">How do I place an order?</span>
                                    <span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span>
                                    <span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span>
                                </button>
                                <div class="faq-panel is-open pt-5" data-faq-panel>
                                    <p class="cart-inter text-[17px] leading-[1.8] text-black/60">Choose the item or items you want to send and add them to your shopping cart. A separate order should be made for each person receiving a delivery. We only need the receiver's name, address, province, municipality, phone number, and ID number to complete the order and ensure correct delivery. After payment, we process the shipment through our Miami facility and share tracking details so you can follow the package until it reaches your loved one's door anywhere in Cuba.</p>
                                </div>
                            </article>

                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5"><button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="false" data-faq-trigger><span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">Who can I send packages too?</span><span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span><span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span></button><div class="faq-panel pt-5" data-faq-panel><p class="cart-inter text-[17px] leading-[1.8] text-black/60">You can send packages to eligible recipients in Cuba as long as the delivery information is complete and accurate.</p></div></article>
                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5"><button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="false" data-faq-trigger><span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">Who can accept the package delivery in Cuba?</span><span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span><span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span></button><div class="faq-panel pt-5" data-faq-panel><p class="cart-inter text-[17px] leading-[1.8] text-black/60">The intended receiver or another authorized adult at the delivery address can typically accept the package on their behalf.</p></div></article>
                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5"><button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="false" data-faq-trigger><span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">What information do you need about my mother whom I'm sending 3 boxes of food and toiletries?</span><span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span><span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span></button><div class="faq-panel pt-5" data-faq-panel><p class="cart-inter text-[17px] leading-[1.8] text-black/60">We need her full name, exact address, province, municipality, phone number, and ID information so all boxes are matched correctly for delivery.</p></div></article>
                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5"><button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="false" data-faq-trigger><span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">How long does it take to get my box(s) delivered to Cuba?</span><span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span><span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span></button><div class="faq-panel pt-5" data-faq-panel><p class="cart-inter text-[17px] leading-[1.8] text-black/60">Delivery times vary by item type, processing, and shipping conditions, but we provide tracking updates so you can follow progress each step of the way.</p></div></article>
                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5"><button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="false" data-faq-trigger><span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">Am I guaranteed that my packages will be delivered to the person I'm sending them too?</span><span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span><span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span></button><div class="faq-panel pt-5" data-faq-panel><p class="cart-inter text-[17px] leading-[1.8] text-black/60">We work to ensure accurate delivery using the receiver information you provide, and tracking helps confirm each shipment milestone.</p></div></article>
                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5"><button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="false" data-faq-trigger><span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">Who handles the US-Cuba custom regulations and tariffs? Who pays for that?</span><span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span><span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span></button><div class="faq-panel pt-5" data-faq-panel><p class="cart-inter text-[17px] leading-[1.8] text-black/60">Our process is designed to guide shipments through the required logistics steps, and any applicable fees depend on the product and destination requirements.</p></div></article>
                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5"><button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="false" data-faq-trigger><span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">Does the recipient have to pay a delivery tax in Cuban Pesos in Cuba, at the time of delivery?</span><span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span><span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span></button><div class="faq-panel pt-5" data-faq-panel><p class="cart-inter text-[17px] leading-[1.8] text-black/60">Requirements can vary, so we recommend checking the order terms and delivery notes shown at checkout for the most current handling details.</p></div></article>
                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5"><button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="false" data-faq-trigger><span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">How many products will you be offering to us to send?</span><span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span><span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span></button><div class="faq-panel pt-5" data-faq-panel><p class="cart-inter text-[17px] leading-[1.8] text-black/60">We continue expanding the catalog with essential goods, and the available selection can be browsed directly on the shop page.</p></div></article>
                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5"><button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="false" data-faq-trigger><span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">Can I request an item that you currently don't have on your website?</span><span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span><span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span></button><div class="faq-panel pt-5" data-faq-panel><p class="cart-inter text-[17px] leading-[1.8] text-black/60">Yes, special item requests may be possible, and you can contact the team to ask about availability for a specific product.</p></div></article>
                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5"><button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="false" data-faq-trigger><span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">Are you affiliated with the Cuban Government or any of their businesses?</span><span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span><span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span></button><div class="faq-panel pt-5" data-faq-panel><p class="cart-inter text-[17px] leading-[1.8] text-black/60">This service is presented as an independent platform focused on helping families send goods and care packages to Cuba.</p></div></article>
                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5"><button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="false" data-faq-trigger><span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">What are your refund, return and chargeback policies?</span><span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span><span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span></button><div class="faq-panel pt-5" data-faq-panel><p class="cart-inter text-[17px] leading-[1.8] text-black/60">Policy terms depend on the order status and product type, so customers should review the order terms or contact support for help with a specific case.</p></div></article>
                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5"><button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="false" data-faq-trigger><span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">What is the delivery process for receiving the boxes in Cuba?</span><span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span><span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span></button><div class="faq-panel pt-5" data-faq-panel><p class="cart-inter text-[17px] leading-[1.8] text-black/60">After processing and export handling, the shipment is routed for local delivery in Cuba and tracking updates help show when it is nearing the final address.</p></div></article>
                            <article class="rounded-[18px] bg-[#f6f6f6] px-6 py-5"><button type="button" class="faq-trigger flex w-full items-start justify-between gap-4 text-left" aria-expanded="false" data-faq-trigger><span class="font-display text-[26px] uppercase leading-none text-[#101a2a]">Is my payment and personal information secure?</span><span class="faq-icon-open mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-red text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="M10.58 13.13 17.2 6.51a.81.81 0 0 0 0-1.15l-.49-.49a.81.81 0 0 0-1.15 0L10 10.43 4.44 4.87a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15l6.62 6.62a.81.81 0 0 0 1.16 0Z"></path></svg></span><span class="faq-icon-closed mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0d2b5c] text-white"><svg viewBox="0 0 20 20" class="h-4 w-4 fill-current"><path d="m13.13 9.42-6.62-6.62a.81.81 0 0 0-1.15 0l-.49.49a.81.81 0 0 0 0 1.15L10.43 10l-5.56 5.56a.81.81 0 0 0 0 1.15l.49.49a.81.81 0 0 0 1.15 0l6.62-6.62a.81.81 0 0 0 0-1.16Z"></path></svg></span></button><div class="faq-panel pt-5" data-faq-panel><p class="cart-inter text-[17px] leading-[1.8] text-black/60">The site is designed around secure checkout and trusted handling practices to help protect order and customer information.</p></div></article>
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
    <script>
        const faqTriggers = Array.from(document.querySelectorAll("[data-faq-trigger]"));
                const faqPanels = Array.from(document.querySelectorAll("[data-faq-panel]"));

                faqPanels.forEach((panel) => {
                    if (panel.firstElementChild?.classList.contains("faq-panel-inner")) {
                        return;
                    }

                    const inner = document.createElement("div");
                    inner.className = "faq-panel-inner";

                    while (panel.firstChild) {
                        inner.appendChild(panel.firstChild);
                    }

                    panel.appendChild(inner);
                });

                const syncFaqPanel = (trigger, isActive) => {
                    const panel = trigger.closest("article")?.querySelector("[data-faq-panel]");
                    if (!panel) return;

                    trigger.setAttribute("aria-expanded", isActive ? "true" : "false");
                    panel.classList.toggle("is-open", isActive);
                };

                const setActiveFaq = (targetTrigger) => {
                    faqTriggers.forEach((trigger) => {
                        syncFaqPanel(trigger, trigger === targetTrigger);
                    });
                };

                faqTriggers.forEach((trigger) => {
                    trigger.addEventListener("click", () => {
                        const isOpen = trigger.getAttribute("aria-expanded") === "true";
                        setActiveFaq(isOpen ? null : trigger);
                    });
                });

                if (faqTriggers[0]) {
                    setActiveFaq(faqTriggers[0]);
                }

                window.addEventListener("resize", () => {
                    faqTriggers.forEach((trigger) => {
                        if (trigger.getAttribute("aria-expanded") === "true") {
                            syncFaqPanel(trigger, true);
                        }
                    });
                });

                window.addEventListener("load", () => {
                    faqTriggers.forEach((trigger) => {
                        if (trigger.getAttribute("aria-expanded") === "true") {
                            const panel = trigger.closest("article")?.querySelector("[data-faq-panel]");
                            if (panel) {
                                panel.classList.add("is-open");
                            }
                        }
                    });
                });

                if (document.fonts?.ready) {
                    document.fonts.ready.then(() => {
                        faqTriggers.forEach((trigger) => {
                            if (trigger.getAttribute("aria-expanded") === "true") {
                                const panel = trigger.closest("article")?.querySelector("[data-faq-panel]");
                                if (panel) {
                                    panel.classList.add("is-open");
                                }
                            }
                        });
                    });
                }
    </script>
@endsection
