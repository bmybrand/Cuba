@extends('layouts.app')

@section('title', 'Wishlist | Send Love to Cuba')

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
                <img src="{{ asset("assets/Wishlist banner.png") }}" alt="Wishlist banner"
                    class="absolute inset-0 h-full w-full object-cover" />
                <div
                    class="absolute inset-0 bg-[linear-gradient(90deg,rgba(9,18,34,0.86),rgba(9,18,34,0.76),rgba(9,18,34,0.86))]">
                </div>
                <div class="relative mx-auto max-w-[1540px] px-10 text-center md:px-16 xl:px-24">
                    <h1 class="font-heading text-[clamp(2.6rem,5.3vw,5rem)] uppercase leading-[0.9] text-white">Wishlist</h1>
                    <p class="cart-inter mt-3 text-[15px] text-white/85"><a href="{{ route('home') }}" class="underline-offset-2 hover:underline">Home</a> <span class="mx-2">&gt;</span> Wishlist</p>
                </div>
            </section>

            <section class="bg-white pb-[72px] pt-[34px] md:pb-[96px] md:pt-[46px]">
                <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
                    <section aria-labelledby="wishlist-items-title">
                        <div class="hidden grid-cols-[48px_minmax(0,1.8fr)_190px_190px_220px] items-center gap-6 border-y border-[#d8dde5] py-6 md:grid">
                            <div></div>
                            <h2 id="wishlist-items-title" class="cart-table-head cart-display text-[28px] uppercase leading-none">Product Name</h2>
                            <p class="cart-table-head cart-display text-[28px] uppercase leading-none">Unit Price</p>
                            <p class="cart-table-head cart-display text-[28px] uppercase leading-none">Stock Status</p>
                            <p class="cart-table-head cart-display text-[28px] uppercase leading-none text-right">Action</p>
                        </div>

                        <div id="wishlist-items" class="divide-y divide-[#d8dde5]">
                            <article class="grid gap-5 py-6 md:grid-cols-[48px_minmax(0,1.8fr)_190px_190px_220px] md:items-center md:gap-6">
                                <button type="button" class="remove-item justify-self-start text-brand-red transition-colors hover:text-[#091322]" aria-label="Remove item"><svg viewBox="0 0 11 16" class="h-4 w-3 fill-current"><path d="M7.514 7.915 10.606 11.007c.186.186.278.412.278.68 0 .268-.092.505-.278.711l-.68.68a.955.955 0 0 1-.711.278.955.955 0 0 1-.68-.278L5.443 9.987 2.351 13.08a.923.923 0 0 1-.68.278.955.955 0 0 1-.712-.278l-.68-.68A.955.955 0 0 1 0 11.687c0-.268.093-.494.279-.68l3.092-3.092L.279 4.823A.955.955 0 0 1 0 4.143c0-.268.093-.505.279-.711l.68-.68a.955.955 0 0 1 .711-.279c.268 0 .495.093.68.279l3.092 3.092L8.535 2.752a.923.923 0 0 1 .68-.279c.268 0 .505.093.711.279l.68.68c.186.206.279.443.279.711 0 .268-.093.495-.279.68L7.514 7.915Z"></path></svg></button>
                                <div class="flex items-center gap-4"><div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center overflow-hidden rounded-[10px] border border-[#101a2a]/15 bg-white p-3"><img src="{{ asset("assets/Grain Rice.jpg") }}" alt="Mahatma grain rice" class="max-h-full w-auto object-contain" /></div><div><p class="cart-display text-[26px] uppercase leading-none text-[#101a2a]">Lorem ipsum dolor sit amet</p></div></div>
                                <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Unit Price</span><p class="cart-inter text-[16px] text-[#101a2a]/60">$86.00</p></div>
                                <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Stock Status</span><p class="cart-inter text-[16px] text-[#101a2a]/60">In Stock</p></div>
                                <div class="flex justify-start md:justify-end"><a href="{{ url('/shop') }}" class="group inline-flex items-center justify-between rounded-[10px] border border-transparent bg-brand-red px-1.5 py-1.5 text-white transition-colors hover:bg-[#ab1c26]"><span class="font-heading text-[1.16rem] uppercase leading-none tracking-[0.02em] lg:pl-2">Select Product</span><span class="ml-4 grid h-10 w-10 place-items-center rounded-[10px] border border-transparent bg-white text-brand-red"><svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M6 12.5 10.2 16.7 18 8.8"></path></svg></span></a></div>
                            </article>

                            <article class="grid gap-5 py-6 md:grid-cols-[48px_minmax(0,1.8fr)_190px_190px_220px] md:items-center md:gap-6">
                                <button type="button" class="remove-item justify-self-start text-brand-red transition-colors hover:text-[#091322]" aria-label="Remove item"><svg viewBox="0 0 11 16" class="h-4 w-3 fill-current"><path d="M7.514 7.915 10.606 11.007c.186.186.278.412.278.68 0 .268-.092.505-.278.711l-.68.68a.955.955 0 0 1-.711.278.955.955 0 0 1-.68-.278L5.443 9.987 2.351 13.08a.923.923 0 0 1-.68.278.955.955 0 0 1-.712-.278l-.68-.68A.955.955 0 0 1 0 11.687c0-.268.093-.494.279-.68l3.092-3.092L.279 4.823A.955.955 0 0 1 0 4.143c0-.268.093-.505.279-.711l.68-.68a.955.955 0 0 1 .711-.279c.268 0 .495.093.68.279l3.092 3.092L8.535 2.752a.923.923 0 0 1 .68-.279c.268 0 .505.093.711.279l.68.68c.186.206.279.443.279.711 0 .268-.093.495-.279.68L7.514 7.915Z"></path></svg></button>
                                <div class="flex items-center gap-4"><div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center overflow-hidden rounded-[10px] border border-[#101a2a]/15 bg-white p-3"><img src="{{ asset("assets/chips.jpeg") }}" alt="Crunch snack combo" class="max-h-full w-auto object-contain" /></div><div><p class="cart-display text-[26px] uppercase leading-none text-[#101a2a]">Lorem ipsum dolor sit amet</p></div></div>
                                <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Unit Price</span><p class="cart-inter text-[16px] text-[#101a2a]/60">$86.00</p></div>
                                <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Stock Status</span><p class="cart-inter text-[16px] text-[#101a2a]/60">In Stock</p></div>
                                <div class="flex justify-start md:justify-end"><a href="{{ url('/shop') }}" class="group inline-flex items-center justify-between rounded-[10px] border border-transparent bg-brand-red px-1.5 py-1.5 text-white transition-colors hover:bg-[#ab1c26]"><span class="font-heading text-[1.16rem] uppercase leading-none tracking-[0.02em] lg:pl-2">Select Product</span><span class="ml-4 grid h-10 w-10 place-items-center rounded-[10px] border border-transparent bg-white text-brand-red"><svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M6 12.5 10.2 16.7 18 8.8"></path></svg></span></a></div>
                            </article>

                            <article class="grid gap-5 py-6 md:grid-cols-[48px_minmax(0,1.8fr)_190px_190px_220px] md:items-center md:gap-6">
                                <button type="button" class="remove-item justify-self-start text-brand-red transition-colors hover:text-[#091322]" aria-label="Remove item"><svg viewBox="0 0 11 16" class="h-4 w-3 fill-current"><path d="M7.514 7.915 10.606 11.007c.186.186.278.412.278.68 0 .268-.092.505-.278.711l-.68.68a.955.955 0 0 1-.711.278.955.955 0 0 1-.68-.278L5.443 9.987 2.351 13.08a.923.923 0 0 1-.68.278.955.955 0 0 1-.712-.278l-.68-.68A.955.955 0 0 1 0 11.687c0-.268.093-.494.279-.68l3.092-3.092L.279 4.823A.955.955 0 0 1 0 4.143c0-.268.093-.505.279-.711l.68-.68a.955.955 0 0 1 .711-.279c.268 0 .495.093.68.279l3.092 3.092L8.535 2.752a.923.923 0 0 1 .68-.279c.268 0 .505.093.711.279l.68.68c.186.206.279.443.279.711 0 .268-.093.495-.279.68L7.514 7.915Z"></path></svg></button>
                                <div class="flex items-center gap-4"><div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center overflow-hidden rounded-[10px] border border-[#101a2a]/15 bg-white p-3"><img src="{{ asset("assets/61pp4zaIg5L._AC_SL1500_1-300x237.jpg.jpeg") }}" alt="Soft bath tissue pack" class="max-h-full w-auto object-contain" /></div><div><p class="cart-display text-[26px] uppercase leading-none text-[#101a2a]">Lorem ipsum dolor sit amet</p></div></div>
                                <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Unit Price</span><p class="cart-inter text-[16px] text-[#101a2a]/60">$86.00</p></div>
                                <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Stock Status</span><p class="cart-inter text-[16px] text-[#101a2a]/60">In Stock</p></div>
                                <div class="flex justify-start md:justify-end"><a href="{{ url('/shop') }}" class="group inline-flex items-center justify-between rounded-[10px] border border-transparent bg-brand-red px-1.5 py-1.5 text-white transition-colors hover:bg-[#ab1c26]"><span class="font-heading text-[1.16rem] uppercase leading-none tracking-[0.02em] lg:pl-2">Select Product</span><span class="ml-4 grid h-10 w-10 place-items-center rounded-[10px] border border-transparent bg-white text-brand-red"><svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M6 12.5 10.2 16.7 18 8.8"></path></svg></span></a></div>
                            </article>

                            <article class="grid gap-5 py-6 md:grid-cols-[48px_minmax(0,1.8fr)_190px_190px_220px] md:items-center md:gap-6">
                                <button type="button" class="remove-item justify-self-start text-brand-red transition-colors hover:text-[#091322]" aria-label="Remove item"><svg viewBox="0 0 11 16" class="h-4 w-3 fill-current"><path d="M7.514 7.915 10.606 11.007c.186.186.278.412.278.68 0 .268-.092.505-.278.711l-.68.68a.955.955 0 0 1-.711.278.955.955 0 0 1-.68-.278L5.443 9.987 2.351 13.08a.923.923 0 0 1-.68.278.955.955 0 0 1-.712-.278l-.68-.68A.955.955 0 0 1 0 11.687c0-.268.093-.494.279-.68l3.092-3.092L.279 4.823A.955.955 0 0 1 0 4.143c0-.268.093-.505.279-.711l.68-.68a.955.955 0 0 1 .711-.279c.268 0 .495.093.68.279l3.092 3.092L8.535 2.752a.923.923 0 0 1 .68-.279c.268 0 .505.093.711.279l.68.68c.186.206.279.443.279.711 0 .268-.093.495-.279.68L7.514 7.915Z"></path></svg></button>
                                <div class="flex items-center gap-4"><div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center overflow-hidden rounded-[10px] border border-[#101a2a]/15 bg-white p-3"><img src="{{ asset("assets/mariabiscits.jpeg") }}" alt="Maria premium biscuits" class="max-h-full w-auto object-contain" /></div><div><p class="cart-display text-[26px] uppercase leading-none text-[#101a2a]">Lorem ipsum dolor sit amet</p></div></div>
                                <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Unit Price</span><p class="cart-inter text-[16px] text-[#101a2a]/60">$86.00</p></div>
                                <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Stock Status</span><p class="cart-inter text-[16px] text-[#101a2a]/60">In Stock</p></div>
                                <div class="flex justify-start md:justify-end"><a href="{{ url('/shop') }}" class="group inline-flex items-center justify-between rounded-[10px] border border-transparent bg-brand-red px-1.5 py-1.5 text-white transition-colors hover:bg-[#ab1c26]"><span class="font-heading text-[1.16rem] uppercase leading-none tracking-[0.02em] lg:pl-2">Select Product</span><span class="ml-4 grid h-10 w-10 place-items-center rounded-[10px] border border-transparent bg-white text-brand-red"><svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M6 12.5 10.2 16.7 18 8.8"></path></svg></span></a></div>
                            </article>

                            <article class="grid gap-5 py-6 md:grid-cols-[48px_minmax(0,1.8fr)_190px_190px_220px] md:items-center md:gap-6">
                                <button type="button" class="remove-item justify-self-start text-brand-red transition-colors hover:text-[#091322]" aria-label="Remove item"><svg viewBox="0 0 11 16" class="h-4 w-3 fill-current"><path d="M7.514 7.915 10.606 11.007c.186.186.278.412.278.68 0 .268-.092.505-.278.711l-.68.68a.955.955 0 0 1-.711.278.955.955 0 0 1-.68-.278L5.443 9.987 2.351 13.08a.923.923 0 0 1-.68.278.955.955 0 0 1-.712-.278l-.68-.68A.955.955 0 0 1 0 11.687c0-.268.093-.494.279-.68l3.092-3.092L.279 4.823A.955.955 0 0 1 0 4.143c0-.268.093-.505.279-.711l.68-.68a.955.955 0 0 1 .711-.279c.268 0 .495.093.68.279l3.092 3.092L8.535 2.752a.923.923 0 0 1 .68-.279c.268 0 .505.093.711.279l.68.68c.186.206.279.443.279.711 0 .268-.093.495-.279.68L7.514 7.915Z"></path></svg></button>
                                <div class="flex items-center gap-4"><div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center overflow-hidden rounded-[10px] border border-[#101a2a]/15 bg-white p-3"><img src="{{ asset("assets/71FU01Jd3uL._SL1500_1-300x234.jpg.jpeg") }}" alt="V05 body wash set" class="max-h-full w-auto object-contain" /></div><div><p class="cart-display text-[26px] uppercase leading-none text-[#101a2a]">Lorem ipsum dolor sit amet</p></div></div>
                                <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Unit Price</span><p class="cart-inter text-[16px] text-[#101a2a]/60">$86.00</p></div>
                                <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Stock Status</span><p class="cart-inter text-[16px] text-[#101a2a]/60">In Stock</p></div>
                                <div class="flex justify-start md:justify-end"><a href="{{ url('/shop') }}" class="group inline-flex items-center justify-between rounded-[10px] border border-transparent bg-brand-red px-1.5 py-1.5 text-white transition-colors hover:bg-[#ab1c26]"><span class="font-heading text-[1.16rem] uppercase leading-none tracking-[0.02em] lg:pl-2">Select Product</span><span class="ml-4 grid h-10 w-10 place-items-center rounded-[10px] border border-transparent bg-white text-brand-red"><svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M6 12.5 10.2 16.7 18 8.8"></path></svg></span></a></div>
                            </article>
                        </div>

                        <div class="pt-8">
                            <p class="cart-display text-[24px] uppercase leading-none text-[#101a2a]">Share With Friends:</p>
                            <div class="mt-4 flex flex-wrap items-center gap-3">
                                <a href="#" aria-label="Twitter" class="inline-flex h-[44px] w-[44px] items-center justify-center rounded-full border border-[#101a2a]/20 bg-white text-[#0b1f42] transition-all duration-200 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-[16px] w-[16px] fill-current"><path d="M18.9 7.2c.8-.1 1.5-.5 2.1-1-.3.8-.9 1.4-1.6 1.8.7 0 1.4-.3 2-.6-.5.7-1.1 1.2-1.8 1.7v.5c0 5.1-3.9 11-11 11-2.2 0-4.2-.6-5.9-1.8h.9c1.8 0 3.5-.6 4.9-1.7-1.7 0-3.1-1.1-3.6-2.7.2 0 .5.1.8.1.4 0 .7-.1 1-.1-1.8-.4-3.1-2-3.1-3.9v-.1c.5.3 1.1.5 1.7.5-1-.7-1.7-1.9-1.7-3.3 0-.7.2-1.4.5-2 1.9 2.4 4.8 3.9 8 4-.1-.3-.1-.6-.1-.9 0-2.1 1.7-3.8 3.8-3.8 1.1 0 2.1.5 2.8 1.2z"></path></svg></a>
                                <a href="#" aria-label="Facebook" class="inline-flex h-[44px] w-[44px] items-center justify-center rounded-full border border-[#101a2a]/20 bg-white text-[#0b1f42] transition-all duration-200 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-[15px] w-[15px] fill-current"><path d="M13.5 21v-8.1h2.7l.4-3.2h-3.1V7.6c0-.9.2-1.6 1.6-1.6H16V3.1c-.3 0-1.4-.1-2.6-.1-2.6 0-4.4 1.6-4.4 4.7v2H6.2v3.2H9V21z"></path></svg></a>
                                <a href="#" aria-label="Pinterest" class="inline-flex h-[44px] w-[44px] items-center justify-center rounded-full border border-[#101a2a]/20 bg-white text-[#0b1f42] transition-all duration-200 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-[15px] w-[15px] fill-current"><path d="M12.2 3C7.4 3 4 6.4 4 10.7c0 2.7 1.5 4.2 2.4 4.2.4 0 .6-1 .6-1.3 0-.3-.8-1-1-2.4 0-2.9 2.2-5.5 5.7-5.5 2.8 0 4.8 1.6 4.8 4.3 0 2-1 5.8-3.6 5.8-1 0-1.9-.8-1.9-1.9 0-1.6 1.2-3.2 1.2-4.9 0-2.9-4.1-2.4-4.1 1.1 0 .7.1 1.4.4 2.1-.5 2.1-1.6 5.3-1.6 7.5 0 .7.1 1.4.2 2.1h.3c.3-.6 2.4-4.4 2.4-5 .1-.3.3-1.4.5-2.2.4.8 1.6 1.3 2.4 1.3 3.7 0 5.3-3.6 5.3-6.9C20 6.2 16.8 3 12.2 3z"></path></svg></a>
                                <a href="#" aria-label="Instagram" class="inline-flex h-[44px] w-[44px] items-center justify-center rounded-full border border-[#101a2a]/20 bg-white text-[#0b1f42] transition-all duration-200 hover:border-brand-red hover:bg-brand-red hover:text-white"><svg viewBox="0 0 24 24" class="h-[16px] w-[16px]" fill="none" stroke="currentColor" stroke-width="1.9"><rect x="4" y="4" width="16" height="16" rx="4"></rect><circle cx="12" cy="12" r="3.6"></circle><circle cx="17.2" cy="6.8" r="1"></circle></svg></a>
                            </div>
                        </div>
                    </section>
                </div>
            </section>        <section id="service-features" class="py-8 md:py-10">
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
        const wishlistRows = Array.from(document.querySelectorAll("#wishlist-items article"));

                wishlistRows.forEach((row) => {
                    row.querySelector(".remove-item")?.addEventListener("click", () => {
                        row.remove();
                    });
                });
    </script>
@endsection
