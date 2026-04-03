@extends('layouts.app')

@section('title', 'Cart | Send Love to Cuba')

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
                <img src="{{ asset("assets/Product banner image.png") }}" alt="Shopping cart banner"
                    class="absolute inset-0 h-full w-full object-cover" />
                <div
                    class="absolute inset-0 bg-[linear-gradient(90deg,rgba(9,18,34,0.86),rgba(9,18,34,0.76),rgba(9,18,34,0.86))]">
                </div>
                <div class="relative mx-auto max-w-[1540px] px-10 text-center md:px-16 xl:px-24">
                    <h1 class="font-heading text-[clamp(2.6rem,5.3vw,5rem)] uppercase leading-[0.9] text-white">Cart</h1>
                    <p class="cart-inter mt-3 text-[15px] text-white/85"><a href="{{ route('home') }}" class="underline-offset-2 hover:underline">Home</a> <span class="mx-2">&gt;</span> Cart</p>
                </div>
            </section>

            <section class="bg-white pb-[72px] pt-[34px] md:pb-[96px] md:pt-[46px]">
                <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
                    <div class="grid gap-10 xl:grid-cols-[minmax(0,1fr)_360px] xl:items-start xl:gap-10">
                        <section aria-labelledby="cart-items-title">
                            <div class="hidden grid-cols-[minmax(0,1.9fr)_110px_130px_110px_80px] items-center gap-6 border-b border-[#d8dde5] pb-4 text-[#101a2a] md:grid">
                                <h2 id="cart-items-title" class="cart-table-head cart-display text-[28px] uppercase leading-none">Item</h2>
                                <p class="cart-table-head cart-display text-[28px] uppercase leading-none">Price</p>
                                <p class="cart-table-head cart-display text-[28px] uppercase leading-none">Quantity</p>
                                <p class="cart-table-head cart-display text-[28px] uppercase leading-none">Total</p>
                                <p class="cart-table-head cart-display text-[28px] uppercase leading-none text-right">Remove</p>
                            </div>

                            <div id="cart-items" class="divide-y divide-[#d8dde5]">
                                <article class="grid gap-5 py-6 md:grid-cols-[minmax(0,1.9fr)_110px_130px_110px_80px] md:items-center md:gap-6"
                                    data-unit-price="86">
                                    <div class="flex items-center gap-4">
                                        <div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center overflow-hidden rounded-[10px] border border-[#101a2a]/15 bg-white p-3">
                                            <img src="{{ asset("assets/Grain Rice.jpg") }}" alt="Mahatma grain rice" class="max-h-full w-auto object-contain" />
                                        </div>
                                        <div>
                                            <p class="cart-display text-[26px] uppercase leading-none text-[#101a2a]">Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between md:block">
                                        <span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Price</span>
                                        <p class="cart-inter text-[16px] text-[#101a2a]/60">$86.00</p>
                                    </div>
                                    <div class="flex items-center justify-between md:block">
                                        <span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Quantity</span>
                                        <div class="flex h-12 w-[96px] overflow-hidden rounded-[10px] border border-[#101a2a]/20 bg-white">
                                            <input type="number" min="1" value="1"
                                                class="qty-input cart-inter w-[58px] border-0 bg-transparent px-3 text-center text-[18px] text-[#101a2a]/60 outline-none" />
                                            <div class="flex w-[38px] flex-col border-l border-[#101a2a]/20">
                                                <button type="button" class="qty-plus qty-stepper-btn flex-1 border-b border-[#101a2a]/20">+</button>
                                                <button type="button" class="qty-minus qty-stepper-btn flex-1">-</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between md:block">
                                        <span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Total</span>
                                        <p class="line-total cart-inter text-[16px] text-[#101a2a]/60">$86.00</p>
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="button" class="remove-item text-brand-red transition-colors hover:text-[#091322]" aria-label="Remove item">
                                            <svg viewBox="0 0 11 16" class="h-4 w-3 fill-current">
                                                <path d="M7.514 7.915 10.606 11.007c.186.186.278.412.278.68 0 .268-.092.505-.278.711l-.68.68a.955.955 0 0 1-.711.278.955.955 0 0 1-.68-.278L5.443 9.987 2.351 13.08a.923.923 0 0 1-.68.278.955.955 0 0 1-.712-.278l-.68-.68A.955.955 0 0 1 0 11.687c0-.268.093-.494.279-.68l3.092-3.092L.279 4.823A.955.955 0 0 1 0 4.143c0-.268.093-.505.279-.711l.68-.68a.955.955 0 0 1 .711-.279c.268 0 .495.093.68.279l3.092 3.092L8.535 2.752a.923.923 0 0 1 .68-.279c.268 0 .505.093.711.279l.68.68c.186.206.279.443.279.711 0 .268-.093.495-.279.68L7.514 7.915Z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </article>

                                <article class="grid gap-5 py-6 md:grid-cols-[minmax(0,1.9fr)_110px_130px_110px_80px] md:items-center md:gap-6"
                                    data-unit-price="48">
                                    <div class="flex items-center gap-4">
                                        <div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center overflow-hidden rounded-[10px] border border-[#101a2a]/15 bg-white p-3">
                                            <img src="{{ asset("assets/chips.jpeg") }}" alt="Crunch snack combo" class="max-h-full w-auto object-contain" />
                                        </div>
                                        <div><p class="cart-display text-[26px] uppercase leading-none text-[#101a2a]">Lorem ipsum dolor sit amet</p></div>
                                    </div>
                                    <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Price</span><p class="cart-inter text-[16px] text-[#101a2a]/60">$48.00</p></div>
                                    <div class="flex items-center justify-between md:block">
                                        <span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Quantity</span>
                                        <div class="flex h-12 w-[96px] overflow-hidden rounded-[10px] border border-[#101a2a]/20 bg-white">
                                            <input type="number" min="1" value="1" class="qty-input cart-inter w-[58px] border-0 bg-transparent px-3 text-center text-[18px] text-[#101a2a]/60 outline-none" />
                                            <div class="flex w-[38px] flex-col border-l border-[#101a2a]/20">
                                                <button type="button" class="qty-plus qty-stepper-btn flex-1 border-b border-[#101a2a]/20">+</button>
                                                <button type="button" class="qty-minus qty-stepper-btn flex-1">-</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Total</span><p class="line-total cart-inter text-[16px] text-[#101a2a]/60">$48.00</p></div>
                                    <div class="flex justify-end"><button type="button" class="remove-item text-brand-red transition-colors hover:text-[#091322]" aria-label="Remove item"><svg viewBox="0 0 11 16" class="h-4 w-3 fill-current"><path d="M7.514 7.915 10.606 11.007c.186.186.278.412.278.68 0 .268-.092.505-.278.711l-.68.68a.955.955 0 0 1-.711.278.955.955 0 0 1-.68-.278L5.443 9.987 2.351 13.08a.923.923 0 0 1-.68.278.955.955 0 0 1-.712-.278l-.68-.68A.955.955 0 0 1 0 11.687c0-.268.093-.494.279-.68l3.092-3.092L.279 4.823A.955.955 0 0 1 0 4.143c0-.268.093-.505.279-.711l.68-.68a.955.955 0 0 1 .711-.279c.268 0 .495.093.68.279l3.092 3.092L8.535 2.752a.923.923 0 0 1 .68-.279c.268 0 .505.093.711.279l.68.68c.186.206.279.443.279.711 0 .268-.093.495-.279.68L7.514 7.915Z"></path></svg></button></div>
                                </article>

                                <article class="grid gap-5 py-6 md:grid-cols-[minmax(0,1.9fr)_110px_130px_110px_80px] md:items-center md:gap-6"
                                    data-unit-price="42">
                                    <div class="flex items-center gap-4">
                                        <div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center overflow-hidden rounded-[10px] border border-[#101a2a]/15 bg-white p-3">
                                            <img src="{{ asset("assets/61pp4zaIg5L._AC_SL1500_1-300x237.jpg.jpeg") }}" alt="Soft bath tissue pack" class="max-h-full w-auto object-contain" />
                                        </div>
                                        <div><p class="cart-display text-[26px] uppercase leading-none text-[#101a2a]">Lorem ipsum dolor sit amet</p></div>
                                    </div>
                                    <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Price</span><p class="cart-inter text-[16px] text-[#101a2a]/60">$42.00</p></div>
                                    <div class="flex items-center justify-between md:block">
                                        <span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Quantity</span>
                                        <div class="flex h-12 w-[96px] overflow-hidden rounded-[10px] border border-[#101a2a]/20 bg-white">
                                            <input type="number" min="1" value="1" class="qty-input cart-inter w-[58px] border-0 bg-transparent px-3 text-center text-[18px] text-[#101a2a]/60 outline-none" />
                                            <div class="flex w-[38px] flex-col border-l border-[#101a2a]/20">
                                                <button type="button" class="qty-plus qty-stepper-btn flex-1 border-b border-[#101a2a]/20">+</button>
                                                <button type="button" class="qty-minus qty-stepper-btn flex-1">-</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Total</span><p class="line-total cart-inter text-[16px] text-[#101a2a]/60">$42.00</p></div>
                                    <div class="flex justify-end"><button type="button" class="remove-item text-brand-red transition-colors hover:text-[#091322]" aria-label="Remove item"><svg viewBox="0 0 11 16" class="h-4 w-3 fill-current"><path d="M7.514 7.915 10.606 11.007c.186.186.278.412.278.68 0 .268-.092.505-.278.711l-.68.68a.955.955 0 0 1-.711.278.955.955 0 0 1-.68-.278L5.443 9.987 2.351 13.08a.923.923 0 0 1-.68.278.955.955 0 0 1-.712-.278l-.68-.68A.955.955 0 0 1 0 11.687c0-.268.093-.494.279-.68l3.092-3.092L.279 4.823A.955.955 0 0 1 0 4.143c0-.268.093-.505.279-.711l.68-.68a.955.955 0 0 1 .711-.279c.268 0 .495.093.68.279l3.092 3.092L8.535 2.752a.923.923 0 0 1 .68-.279c.268 0 .505.093.711.279l.68.68c.186.206.279.443.279.711 0 .268-.093.495-.279.68L7.514 7.915Z"></path></svg></button></div>
                                </article>

                                <article class="grid gap-5 py-6 md:grid-cols-[minmax(0,1.9fr)_110px_130px_110px_80px] md:items-center md:gap-6"
                                    data-unit-price="55">
                                    <div class="flex items-center gap-4">
                                        <div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center overflow-hidden rounded-[10px] border border-[#101a2a]/15 bg-white p-3">
                                            <img src="{{ asset("assets/mariabiscits.jpeg") }}" alt="Maria premium biscuits" class="max-h-full w-auto object-contain" />
                                        </div>
                                        <div><p class="cart-display text-[26px] uppercase leading-none text-[#101a2a]">Lorem ipsum dolor sit amet</p></div>
                                    </div>
                                    <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Price</span><p class="cart-inter text-[16px] text-[#101a2a]/60">$55.00</p></div>
                                    <div class="flex items-center justify-between md:block">
                                        <span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Quantity</span>
                                        <div class="flex h-12 w-[96px] overflow-hidden rounded-[10px] border border-[#101a2a]/20 bg-white">
                                            <input type="number" min="1" value="1" class="qty-input cart-inter w-[58px] border-0 bg-transparent px-3 text-center text-[18px] text-[#101a2a]/60 outline-none" />
                                            <div class="flex w-[38px] flex-col border-l border-[#101a2a]/20">
                                                <button type="button" class="qty-plus qty-stepper-btn flex-1 border-b border-[#101a2a]/20">+</button>
                                                <button type="button" class="qty-minus qty-stepper-btn flex-1">-</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Total</span><p class="line-total cart-inter text-[16px] text-[#101a2a]/60">$55.00</p></div>
                                    <div class="flex justify-end"><button type="button" class="remove-item text-brand-red transition-colors hover:text-[#091322]" aria-label="Remove item"><svg viewBox="0 0 11 16" class="h-4 w-3 fill-current"><path d="M7.514 7.915 10.606 11.007c.186.186.278.412.278.68 0 .268-.092.505-.278.711l-.68.68a.955.955 0 0 1-.711.278.955.955 0 0 1-.68-.278L5.443 9.987 2.351 13.08a.923.923 0 0 1-.68.278.955.955 0 0 1-.712-.278l-.68-.68A.955.955 0 0 1 0 11.687c0-.268.093-.494.279-.68l3.092-3.092L.279 4.823A.955.955 0 0 1 0 4.143c0-.268.093-.505.279-.711l.68-.68a.955.955 0 0 1 .711-.279c.268 0 .495.093.68.279l3.092 3.092L8.535 2.752a.923.923 0 0 1 .68-.279c.268 0 .505.093.711.279l.68.68c.186.206.279.443.279.711 0 .268-.093.495-.279.68L7.514 7.915Z"></path></svg></button></div>
                                </article>

                                <article class="grid gap-5 py-6 md:grid-cols-[minmax(0,1.9fr)_110px_130px_110px_80px] md:items-center md:gap-6"
                                    data-unit-price="18">
                                    <div class="flex items-center gap-4">
                                        <div class="flex h-[90px] w-[90px] shrink-0 items-center justify-center overflow-hidden rounded-[10px] border border-[#101a2a]/15 bg-white p-3">
                                            <img src="{{ asset("assets/71FU01Jd3uL._SL1500_1-300x234.jpg.jpeg") }}" alt="V05 body wash set" class="max-h-full w-auto object-contain" />
                                        </div>
                                        <div><p class="cart-display text-[26px] uppercase leading-none text-[#101a2a]">Lorem ipsum dolor sit amet</p></div>
                                    </div>
                                    <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Price</span><p class="cart-inter text-[16px] text-[#101a2a]/60">$18.00</p></div>
                                    <div class="flex items-center justify-between md:block">
                                        <span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Quantity</span>
                                        <div class="flex h-12 w-[96px] overflow-hidden rounded-[10px] border border-[#101a2a]/20 bg-white">
                                            <input type="number" min="1" value="1" class="qty-input cart-inter w-[58px] border-0 bg-transparent px-3 text-center text-[18px] text-[#101a2a]/60 outline-none" />
                                            <div class="flex w-[38px] flex-col border-l border-[#101a2a]/20">
                                                <button type="button" class="qty-plus qty-stepper-btn flex-1 border-b border-[#101a2a]/20">+</button>
                                                <button type="button" class="qty-minus qty-stepper-btn flex-1">-</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between md:block"><span class="cart-display text-[24px] uppercase text-[#101a2a] md:hidden">Total</span><p class="line-total cart-inter text-[16px] text-[#101a2a]/60">$18.00</p></div>
                                    <div class="flex justify-end"><button type="button" class="remove-item text-brand-red transition-colors hover:text-[#091322]" aria-label="Remove item"><svg viewBox="0 0 11 16" class="h-4 w-3 fill-current"><path d="M7.514 7.915 10.606 11.007c.186.186.278.412.278.68 0 .268-.092.505-.278.711l-.68.68a.955.955 0 0 1-.711.278.955.955 0 0 1-.68-.278L5.443 9.987 2.351 13.08a.923.923 0 0 1-.68.278.955.955 0 0 1-.712-.278l-.68-.68A.955.955 0 0 1 0 11.687c0-.268.093-.494.279-.68l3.092-3.092L.279 4.823A.955.955 0 0 1 0 4.143c0-.268.093-.505.279-.711l.68-.68a.955.955 0 0 1 .711-.279c.268 0 .495.093.68.279l3.092 3.092L8.535 2.752a.923.923 0 0 1 .68-.279c.268 0 .505.093.711.279l.68.68c.186.206.279.443.279.711 0 .268-.093.495-.279.68L7.514 7.915Z"></path></svg></button></div>
                                </article>
                            </div>
                        </section>

                        <aside class="rounded-[20px] bg-[#f4f5f7] px-5 py-8 md:px-7 xl:sticky xl:top-[120px]">
                            <h3 class="cart-display text-[34px] uppercase leading-none text-[#101a2a]">Cart Details</h3>
                            <div class="mt-6 space-y-4">
                                <div class="flex items-center justify-between gap-4">
                                    <span class="cart-inter text-[16px] font-medium text-[#101a2a]">Cart Subtotal</span>
                                    <span id="cart-subtotal" class="cart-inter text-[16px] font-medium text-[#101a2a]/60">$249.00 USD</span>
                                </div>
                                <div class="flex items-center justify-between gap-4">
                                    <span class="cart-inter text-[16px] font-medium text-[#101a2a]">Cart Total</span>
                                    <span id="cart-total" class="cart-inter text-[16px] font-medium text-[#0b1f42]">$269.00 USD</span>
                                </div>
                            </div>
                            <div class="mt-7 flex flex-wrap gap-3">
                                <button type="button"
                                    class="rounded-full bg-[#0b1f42] px-9 py-[14px] font-display text-[24px] uppercase leading-none text-white transition-colors hover:bg-[#122d61]">
                                    Update
                                </button>
                                <a href="#"
                                    class="rounded-full bg-brand-red px-9 py-[14px] font-display text-[24px] uppercase leading-none text-white transition-colors hover:bg-[#ab1c26]">
                                    Checkout
                                </a>
                            </div>
                        </aside>
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
        const currency = (value) => `$${value.toFixed(2)}`;
                const cartRows = Array.from(document.querySelectorAll("#cart-items article"));
                const subtotalEl = document.getElementById("cart-subtotal");
                const totalEl = document.getElementById("cart-total");
                const headerCartTotalEl = document.getElementById("header-cart-total");

                const updateSummary = () => {
                    const subtotal = cartRows.reduce((sum, row) => {
                        if (!row.isConnected) return sum;
                        const unit = Number(row.dataset.unitPrice || 0);
                        const qty = Math.max(1, Number(row.querySelector(".qty-input")?.value || 1));
                        return sum + unit * qty;
                    }, 0);

                    const displayValue = `${currency(subtotal)} USD`;
                    if (subtotalEl) subtotalEl.textContent = displayValue;
                    if (totalEl) totalEl.textContent = displayValue;
                    if (headerCartTotalEl) headerCartTotalEl.textContent = currency(subtotal);
                };

                cartRows.forEach((row) => {
                    const input = row.querySelector(".qty-input");
                    const lineTotal = row.querySelector(".line-total");
                    const unitPrice = Number(row.dataset.unitPrice || 0);

                    const syncRow = () => {
                        const qty = Math.max(1, Number(input?.value || 1));
                        if (input) input.value = qty;
                        if (lineTotal) lineTotal.textContent = currency(unitPrice * qty);
                        updateSummary();
                    };

                    row.querySelector(".qty-plus")?.addEventListener("click", () => {
                        if (input) input.value = String(Math.max(1, Number(input.value || 1)) + 1);
                        syncRow();
                    });

                    row.querySelector(".qty-minus")?.addEventListener("click", () => {
                        if (input) input.value = String(Math.max(1, Number(input.value || 1)) - 1);
                        syncRow();
                    });

                    input?.addEventListener("input", syncRow);

                    row.querySelector(".remove-item")?.addEventListener("click", () => {
                        row.remove();
                        updateSummary();
                    });

                    syncRow();
                });
    </script>
@endsection
