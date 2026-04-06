<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Send Love to Cuba')</title>

    <link rel="preload" href="{{ asset('assets/fonts/JTUSjIg69CK48gW7PXooxW4.ttf') }}" as="font" type="font/ttf" crossorigin />
    <link rel="stylesheet" href="{{ asset('assets/fonts/bebas-barlow-local.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            bg: "#f3f4f6",
                            ink: "#101a2a",
                            navy: "#0b1f42",
                            red: "#C6232F",
                            line: "#e9edf2",
                        },
                    },
                    fontFamily: {
                        body: ["Barlow", "sans-serif"],
                        heading: ["Bebas Neue", "sans-serif"],
                    },
                    boxShadow: {
                        soft: "0 12px 30px rgba(5, 21, 45, 0.08)",
                        insetlogo: "inset 0 3px 8px rgba(0, 0, 0, 0.16)",
                    },
                    borderRadius: {
                        soft: "14px",
                    },
                },
            },
        };
    </script>
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

        #shop-by-category .category-card h4,
        #featured-products .product-card h4,
        #product-collections .collection-panel h4,
        #why-choose-us article h4,
        #how-it-works article h4,
        #service-features h5 {
            font-weight: 600;
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

        #featured-products .product-card>div.relative.mt-3.mb-4 {
            height: 180px;
            margin-bottom: 1rem;
        }

        #featured-products .product-card>div.relative.mt-3.mb-4 img {
            max-height: 200px;
        }

        #featured-products .product-card .mt-auto {
            display: flex;
            flex-direction: column;
            gap: 0.7rem;
            padding-top: 1rem;
        }

        #featured-products .product-card .mt-auto>* {
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
        button.inline-flex>span,
        button.inline-flex>div,
        a.inline-flex>span,
        a.inline-flex>div {
            font-size: inherit !important;
            line-height: 1 !important;
        }
    </style>
    @stack('styles')
</head>

<body class="bg-brand-bg font-body leading-[1.45] text-brand-ink">
    {{-- Top info bar --}}
    <div class="hidden border-b border-white/10 bg-[#183a70] text-white lg:block">
        <div class="mx-auto flex min-h-10 max-w-[1770px] items-center justify-between gap-6 px-5 xl:px-8">
            <div class="flex min-w-0 items-center gap-5 overflow-hidden text-[14px] text-white/95">
                <span class="inline-flex shrink-0 items-center gap-2 whitespace-nowrap">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M3 6h18v12H3z"></path>
                        <path d="m3 7 9 7 9-7"></path>
                    </svg>
                    support@sendlovetocuba.com
                </span>
                <span class="h-5 w-px bg-white/25"></span>
                <span class="inline-flex shrink-0 items-center gap-2 whitespace-nowrap">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="12" r="8"></circle>
                        <path d="M12 8v4l3 2"></path>
                    </svg>
                    Mon - Sat 9:00am - 6:00pm EST
                </span>
                <span class="h-5 w-px bg-white/25"></span>
                <span class="inline-flex min-w-0 items-center gap-2 truncate">
                    <svg viewBox="0 0 24 24" class="h-4 w-4 shrink-0" fill="none" stroke="currentColor"
                        stroke-width="1.8">
                        <path d="M12 21s-6-5.33-6-11a6 6 0 1 1 12 0c0 5.67-6 11-6 11z"></path>
                        <circle cx="12" cy="10" r="2.5"></circle>
                    </svg>
                    <span class="truncate">2430 W. Oakland Park Blvd., Suite 113 Oakland Park, FL - 33311</span>
                </span>
            </div>

            <div class="flex shrink-0 items-center gap-5 text-white">
                <a href="#" aria-label="Facebook" class="transition hover:text-white/75">
                    <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current">
                        <path
                            d="M13.5 21v-8.1h2.7l.4-3.2h-3.1V7.6c0-.9.2-1.6 1.6-1.6H16V3.1c-.3 0-1.4-.1-2.6-.1-2.6 0-4.4 1.6-4.4 4.7v2H6.2v3.2H9V21z">
                        </path>
                    </svg>
                </a>
                <a href="#" aria-label="Twitter" class="transition hover:text-white/75">
                    <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current">
                        <path
                            d="M18.9 7.2c.8-.1 1.5-.5 2.1-1-.3.8-.9 1.4-1.6 1.8.7 0 1.4-.3 2-.6-.5.7-1.1 1.2-1.8 1.7v.5c0 5.1-3.9 11-11 11-2.2 0-4.2-.6-5.9-1.8h.9c1.8 0 3.5-.6 4.9-1.7-1.7 0-3.1-1.1-3.6-2.7.2 0 .5.1.8.1.4 0 .7-.1 1-.1-1.8-.4-3.1-2-3.1-3.9v-.1c.5.3 1.1.5 1.7.5-1-.7-1.7-1.9-1.7-3.3 0-.7.2-1.4.5-2 1.9 2.4 4.8 3.9 8 4-.1-.3-.1-.6-.1-.9 0-2.1 1.7-3.8 3.8-3.8 1.1 0 2.1.5 2.8 1.2z">
                        </path>
                    </svg>
                </a>
                <a href="#" aria-label="Instagram" class="transition hover:text-white/75">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                        <circle cx="12" cy="12" r="3.5"></circle>
                        <circle cx="17" cy="7" r="1"></circle>
                    </svg>
                </a>
                <a href="#" aria-label="Pinterest" class="transition hover:text-white/75">
                    <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current">
                        <path
                            d="M12.2 3C7.4 3 4 6.4 4 10.7c0 2.7 1.5 4.2 2.4 4.2.4 0 .6-1 .6-1.3 0-.3-.8-1-1-2.4 0-2.9 2.2-5.5 5.7-5.5 2.8 0 4.8 1.6 4.8 4.3 0 2-1 5.8-3.6 5.8-1 0-1.9-.8-1.9-1.9 0-1.6 1.2-3.2 1.2-4.9 0-2.9-4.1-2.4-4.1 1.1 0 .7.1 1.4.4 2.1-.5 2.1-1.6 5.3-1.6 7.5 0 .7.1 1.4.2 2.1h.3c.3-.6 2.4-4.4 2.4-5 .1-.3.3-1.4.5-2.2.4.8 1.6 1.3 2.4 1.3 3.7 0 5.3-3.6 5.3-6.9C20 6.2 16.8 3 12.2 3z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    {{-- Main header --}}
    <header class="sticky top-0 z-50 border-b border-brand-line bg-white">
        <div class="relative flex min-h-[74px] w-full items-stretch justify-between">
            <div class="flex min-w-0 items-center">
                <div class="flex min-w-0 items-center px-4 py-3 sm:px-6 lg:w-[520px] lg:px-8">
                    <img src="{{ asset('assets/logo.svg') }}" alt="Send Love to Cuba"
                        class="h-[52px] w-auto shrink-0 sm:h-[58px] lg:h-[64px]" />
                </div>

                <nav class="hidden items-center gap-8 xl:absolute xl:left-1/2 xl:top-0 xl:z-[1] xl:flex xl:h-full xl:-translate-x-1/2 xl:border-x xl:border-brand-line xl:px-10 xl:gap-10 xl:px-12"
                    aria-label="Main navigation">
                    <a href="{{ url('/') }}"
                        class="font-heading text-[19px] uppercase tracking-[0.2px] text-brand-red underline underline-offset-[5px]">Home</a>
                    <a href="{{ url('/shop') }}"
                        class="font-heading text-[19px] uppercase tracking-[0.2px] text-[#13253f] hover:text-brand-red">Shop</a>
                    <a href="{{ url('/about') }}"
                        class="font-heading text-[19px] uppercase tracking-[0.2px] text-[#13253f] hover:text-brand-red">About</a>
                    <a href="{{ url('/how-it-works') }}"
                        class="font-heading text-[19px] uppercase tracking-[0.2px] text-[#13253f] hover:text-brand-red">How
                        It Works</a>
                    <a href="{{ url('/') }}#product-collections"
                        class="font-heading text-[19px] uppercase tracking-[0.2px] text-[#13253f] hover:text-brand-red">Delivery
                        &amp; Tracking</a>
                    <a href="{{ url('/faq') }}"
                        class="font-heading text-[19px] uppercase tracking-[0.2px] text-[#13253f] hover:text-brand-red">FAQs</a>
                    <a href="{{ url('/contact') }}"
                        class="font-heading text-[19px] uppercase tracking-[0.2px] text-[#13253f] hover:text-brand-red">Contact</a>
                </nav>
            </div>

            <div class="hidden shrink-0 items-stretch lg:flex">
                <div class="flex items-center gap-5 px-8">
                    <a href="{{ url('/login') }}" class="grid h-10 w-10 place-items-center rounded-full text-[#192f52]"
                        aria-label="Account">
                        <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor"
                            stroke-width="1.9">
                            <circle cx="12" cy="8" r="4"></circle>
                            <path d="M4 20a8 8 0 0 1 16 0"></path>
                        </svg>
                    </a>
                    <a href="{{ url('/wishlist') }}"
                        class="relative grid h-10 w-10 place-items-center rounded-full text-[#192f52]"
                        aria-label="Wishlist">
                        <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor"
                            stroke-width="1.9">
                            <path d="M12 21s-7-4.35-7-10a4 4 0 0 1 7-2.5A4 4 0 0 1 19 11c0 5.65-7 10-7 10z"></path>
                        </svg>
                        <span
                            class="absolute -top-1 -right-1 flex h-5 w-5 items-center justify-center rounded-full bg-brand-red text-[11px] font-medium text-white">0</span>
                    </a>
                    <a href="{{ url('/cart') }}"
                        class="flex items-center gap-3 rounded-full border border-[#d6dbe4] pl-[6px] pr-5 py-[6px]"
                        aria-label="Cart total">
                        <span class="grid h-11 w-11 place-items-center rounded-full bg-[#091322] text-white">
                            <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor"
                                stroke-width="1.9">
                                <circle cx="9" cy="20" r="1.5"></circle>
                                <circle cx="18" cy="20" r="1.5"></circle>
                                <path d="M3 4h2l2.4 10.5H19L21 8H8"></path>
                            </svg>
                        </span>
                        <span id="header-cart-total" class="font-body text-[17px] font-medium text-[#111827]">$0.00</span>
                    </a>
                </div>

                <button id="menu-button" class="grid w-[76px] place-items-center bg-brand-red text-white"
                    aria-expanded="false" aria-controls="mobile-sidebar" aria-label="Menu">
                    <svg viewBox="0 0 24 24" class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 7h16M4 12h16M4 17h16" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center gap-2 px-4 sm:px-6 lg:hidden">
                <a href="{{ url('/login') }}" class="grid h-10 w-10 place-items-center rounded-full text-[#192f52]"
                    aria-label="Account">
                    <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor"
                        stroke-width="1.9">
                        <circle cx="12" cy="8" r="4"></circle>
                        <path d="M4 20a8 8 0 0 1 16 0"></path>
                    </svg>
                </a>
                <a href="{{ url('/wishlist') }}"
                    class="relative grid h-10 w-10 place-items-center rounded-full text-[#192f52]"
                    aria-label="Wishlist">
                    <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor"
                        stroke-width="1.9">
                        <path d="M12 21s-7-4.35-7-10a4 4 0 0 1 7-2.5A4 4 0 0 1 19 11c0 5.65-7 10-7 10z"></path>
                    </svg>
                    <span
                        class="absolute right-0 top-0 grid h-5 min-w-[20px] place-items-center rounded-full bg-brand-red px-1 text-[11px] font-medium text-white">0</span>
                </a>
                <button id="menu-button-mobile"
                    class="grid h-12 w-12 place-items-center rounded-none bg-brand-red text-white"
                    aria-expanded="false" aria-controls="mobile-sidebar" aria-label="Menu">
                    <svg viewBox="0 0 24 24" class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 7h16M4 12h16M4 17h16" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile sidebar --}}
        <div id="mobile-sidebar" class="pointer-events-none fixed inset-0 z-[70] hidden">
            <div id="mobile-sidebar-backdrop"
                class="absolute inset-0 bg-[#091322]/35 opacity-0 transition-opacity duration-300"></div>
            <aside id="mobile-sidebar-panel"
                class="hide-scrollbar absolute right-0 top-0 flex h-full w-full max-w-[375px] translate-x-full flex-col overflow-y-auto bg-white px-8 py-6 shadow-[0_24px_60px_rgba(7,21,43,0.18)] transition-transform duration-300">
                <div class="mb-6 flex items-center justify-end">
                    <button id="sidebar-close" class="grid h-8 w-8 place-items-center text-[#101a2a]"
                        aria-label="Close menu">
                        <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M6 6l12 12M18 6 6 18"></path>
                        </svg>
                    </button>
                </div>

                <img src="{{ asset('assets/logo.svg') }}" alt="Send Love to Cuba"
                    class="h-auto w-[290px] max-w-full" />

                <nav class="mt-8 flex flex-col xl:hidden" aria-label="Sidebar navigation">
                    <a href="{{ url('/') }}"
                        class="border-b border-brand-line py-3 font-heading text-[19px] uppercase tracking-[0.2px] text-brand-red">Home</a>
                    <a href="{{ url('/shop') }}"
                        class="border-b border-brand-line py-3 font-heading text-[19px] uppercase tracking-[0.2px] text-[#13253f]">Shop</a>
                    <a href="{{ url('/about') }}"
                        class="border-b border-brand-line py-3 font-heading text-[19px] uppercase tracking-[0.2px] text-[#13253f]">About</a>
                    <a href="{{ url('/how-it-works') }}"
                        class="border-b border-brand-line py-3 font-heading text-[19px] uppercase tracking-[0.2px] text-[#13253f]">How
                        It Works</a>
                    <a href="{{ url('/') }}#product-collections"
                        class="border-b border-brand-line py-3 font-heading text-[19px] uppercase tracking-[0.2px] text-[#13253f]">Delivery
                        &amp; Tracking</a>
                    <a href="{{ url('/faq') }}"
                        class="border-b border-brand-line py-3 font-heading text-[19px] uppercase tracking-[0.2px] text-[#13253f]">FAQs</a>
                    <a href="{{ url('/contact') }}"
                        class="border-b border-brand-line py-3 font-heading text-[19px] uppercase tracking-[0.2px] text-[#13253f]">Contact</a>
                </nav>
            </aside>
        </div>
    </header>

    @yield('content')

    <footer class="bg-[#030914] pt-8 md:pt-10 text-[#9ca9bd]">
        <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
            <div class="grid grid-cols-1 gap-10 pb-9 md:grid-cols-2 md:gap-8 xl:grid-cols-[1.45fr_1fr_1fr_1fr_1.35fr]">
                <div>
                    <img src="{{ asset('assets/footerlogo.svg') }}" alt="Send Love to Cuba" class="h-auto w-[232px] max-w-full" />
                    <p class="mt-4 max-w-[275px] text-[15px] leading-[1.62] text-[#8d99ae]">
                        Helping you send essential products and care to your loved ones in Cuba with reliable, trusted
                        delivery.
                    </p>

                    <div class="mt-6 flex flex-wrap items-center gap-3">
                        <a href="#" aria-label="Facebook"
                            class="inline-flex h-[36px] w-[36px] items-center justify-center rounded-[12px] border border-[#97a3b6] text-[#f8fbff] leading-none transition-all duration-200 hover:border-[#C6232F] hover:bg-[#C6232F] hover:text-white">
                            <svg viewBox="0 0 24 24" class="block h-[16px] w-[16px] fill-current">
                                <path
                                    d="M13.5 21v-8.1h2.7l.4-3.2h-3.1V7.6c0-.9.2-1.6 1.6-1.6H16V3.1c-.3 0-1.4-.1-2.6-.1-2.6 0-4.4 1.6-4.4 4.7v2H6.2v3.2H9V21z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" aria-label="Twitter"
                            class="inline-flex h-[36px] w-[36px] items-center justify-center rounded-[12px] border border-[#97a3b6] text-[#f8fbff] leading-none transition-all duration-200 hover:border-[#C6232F] hover:bg-[#C6232F] hover:text-white">
                            <svg viewBox="0 0 24 24" class="block h-[16px] w-[16px] fill-current">
                                <path
                                    d="M18.9 7.2c.8-.1 1.5-.5 2.1-1-.3.8-.9 1.4-1.6 1.8.7 0 1.4-.3 2-.6-.5.7-1.1 1.2-1.8 1.7v.5c0 5.1-3.9 11-11 11-2.2 0-4.2-.6-5.9-1.8h.9c1.8 0 3.5-.6 4.9-1.7-1.7 0-3.1-1.1-3.6-2.7.2 0 .5.1.8.1.4 0 .7-.1 1-.1-1.8-.4-3.1-2-3.1-3.9v-.1c.5.3 1.1.5 1.7.5-1-.7-1.7-1.9-1.7-3.3 0-.7.2-1.4.5-2 1.9 2.4 4.8 3.9 8 4-.1-.3-.1-.6-.1-.9 0-2.1 1.7-3.8 3.8-3.8 1.1 0 2.1.5 2.8 1.2z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" aria-label="YouTube"
                            class="inline-flex h-[36px] w-[36px] items-center justify-center rounded-[12px] border border-[#97a3b6] text-[#f8fbff] leading-none transition-all duration-200 hover:border-[#C6232F] hover:bg-[#C6232F] hover:text-white">
                            <svg viewBox="0 0 24 24" class="block h-[16px] w-[16px]" fill="none">
                                <rect x="2.7" y="6.7" width="18.6" height="10.6" rx="3.1"
                                    fill="currentColor"></rect>
                                <path d="m10 9.25 5 2.75-5 2.75z" fill="#030914"></path>
                            </svg>
                        </a>
                        <a href="#" aria-label="LinkedIn"
                            class="inline-flex h-[36px] w-[36px] items-center justify-center rounded-[12px] border border-[#97a3b6] text-[#f8fbff] leading-none transition-all duration-200 hover:border-[#C6232F] hover:bg-[#C6232F] hover:text-white">
                            <svg viewBox="0 0 24 24" class="block h-[16px] w-[16px] fill-current">
                                <path
                                    d="M6.5 8.9h3V20h-3zM8 4a1.8 1.8 0 1 0 0 3.6A1.8 1.8 0 0 0 8 4zm4 4.9h2.8v1.5h.1c.4-.7 1.3-1.8 3.2-1.8 3.4 0 4 2.2 4 5.2V20h-3v-5.3c0-1.3 0-2.8-1.8-2.8-1.8 0-2 1.3-2 2.7V20h-3z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" aria-label="Instagram"
                            class="inline-flex h-[36px] w-[36px] items-center justify-center rounded-[12px] border border-[#97a3b6] text-[#f8fbff] leading-none transition-all duration-200 hover:border-[#C6232F] hover:bg-[#C6232F] hover:text-white">
                            <svg viewBox="0 0 24 24" class="block h-[16px] w-[16px]" fill="none"
                                stroke="currentColor" stroke-width="1.9">
                                <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                <circle cx="12" cy="12" r="3.6"></circle>
                                <circle cx="17.2" cy="6.8" r="1"></circle>
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="font-heading text-[28px] uppercase leading-none text-white">Quick Links</h4>
                    <ul class="mt-4 grid gap-[8px]">
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Home</a>
                        </li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Shop</a>
                        </li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">How
                                It Works</a></li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Track
                                Order</a></li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">FAQs</a>
                        </li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Blog</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-heading text-[28px] uppercase leading-none text-white">Categories</h4>
                    <ul class="mt-4 grid gap-[8px]">
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Solar
                                Products</a></li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Electric
                                Scooters</a></li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Electric
                                Bikes</a></li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Personal
                                Care</a></li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Food</a>
                        </li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Appliances</a>
                        </li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Furniture</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-heading text-[28px] uppercase leading-none text-white">My Account</h4>
                    <ul class="mt-4 grid gap-[8px]">
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">My
                                Profile</a></li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Order
                                History</a></li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">My
                                Wishlist</a></li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Order
                                Tracking</a></li>
                        <li><a href="#"
                                class="text-[16px] leading-none text-[#8d99ae] no-underline transition-colors hover:text-white">Shopping
                                Cart</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-heading text-[28px] uppercase leading-none text-white">Stay Connected</h4>
                    <p class="mt-4 max-w-[275px] text-[15px] leading-[1.62] text-[#8d99ae]">
                        Stay updated with the latest products, promotions, and delivery updates to help your loved ones
                        in Cuba.
                    </p>

                    <form class="mt-4" action="#" method="post" onsubmit="return false;">
                        <input type="email" placeholder="Enter your email address" aria-label="Email address"
                            class="w-full rounded-[14px] border border-[#d6dce6] bg-white px-4 py-[16px] text-center text-[19px] leading-none text-[#1a2333] outline-none placeholder:text-[#8f96a5]" />
                        <button type="submit"
                            class="mt-3 w-full rounded-[14px] border border-transparent bg-[#C6232F] px-4 py-[16px] font-heading text-[19px] uppercase leading-none text-white transition-all duration-300 hover:border-white hover:bg-transparent">
                            Subscribe Now
                        </button>
                    </form>
                </div>
            </div>

            <div class="border-t border-[#1d2d49] py-3">
                <div
                    class="flex flex-wrap items-center justify-center gap-3 text-center md:justify-between md:text-left">
                    <p class="text-[14px] text-[#93a0b7]">
                        Copyright &copy; 2026 <span class="text-[#C6232F]">Send Love to Cuba.</span>
                        All Rights Reserved | Design By <span class="text-[#C6232F]">Bmybrand</span>
                    </p>

                    <div class="flex flex-wrap items-center justify-center gap-[5px]" aria-label="Payment methods">
                        <img src="{{ asset('assets/visa.png.svg') }}" alt="VISA"
                            class="h-8 w-auto rounded-[3px] bg-white p-[2px]" />
                        <img src="{{ asset('assets/mastercard.png.svg') }}" alt="Mastercard"
                            class="h-8 w-auto rounded-[3px] bg-white p-[2px]" />
                        <img src="{{ asset('assets/paypal.png.svg') }}" alt="PayPal"
                            class="h-8 w-auto rounded-[3px] bg-white p-[2px]" />
                        <img src="{{ asset('assets/payoneer.png.svg') }}" alt="Payoneer"
                            class="h-8 w-auto rounded-[3px] bg-white p-[2px]" />
                        <img src="{{ asset('assets/skrill.png.svg') }}" alt="Skrill"
                            class="h-8 w-auto rounded-[3px] bg-white p-[2px]" />
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
      const mobileSidebar = document.getElementById("mobile-sidebar");
      const mobileSidebarBackdrop = document.getElementById("mobile-sidebar-backdrop");
      const mobileSidebarPanel = document.getElementById("mobile-sidebar-panel");
      const sidebarCloseButton = document.getElementById("sidebar-close");
      const sidebarOpenButtons = [
        document.getElementById("menu-button"),
        document.getElementById("menu-button-mobile"),
      ].filter(Boolean);

      if (mobileSidebar && mobileSidebarBackdrop && mobileSidebarPanel && sidebarOpenButtons.length) {
        let sidebarIsOpen = false;
        let sidebarHideTimer;
        let previousBodyOverflow = "";
        let previousBodyPaddingRight = "";
        let lastFocusedElement = null;

        const updateSidebarButtonState = (isOpen) => {
          sidebarOpenButtons.forEach((button) => {
            button.setAttribute("aria-expanded", isOpen ? "true" : "false");
          });
        };

        const setSidebarA11yState = (isOpen) => {
          mobileSidebar.setAttribute("aria-hidden", isOpen ? "false" : "true");
          mobileSidebarPanel.setAttribute("role", "dialog");
          mobileSidebarPanel.setAttribute("aria-modal", "true");
        };

        const openSidebar = () => {
          if (sidebarIsOpen) {
            return;
          }

          sidebarIsOpen = true;
          lastFocusedElement = document.activeElement;
          window.clearTimeout(sidebarHideTimer);

          updateSidebarButtonState(true);
          setSidebarA11yState(true);

          mobileSidebar.classList.remove("hidden", "pointer-events-none");

          window.requestAnimationFrame(() => {
            mobileSidebarBackdrop.classList.remove("opacity-0");
            mobileSidebarPanel.classList.remove("translate-x-full");
          });

          previousBodyOverflow = document.body.style.overflow;
          previousBodyPaddingRight = document.body.style.paddingRight;

          const scrollbarWidth = Math.max(0, window.innerWidth - document.documentElement.clientWidth);
          if (scrollbarWidth > 0) {
            const computedPaddingRight = Number.parseFloat(window.getComputedStyle(document.body).paddingRight) || 0;
            document.body.style.paddingRight = `${computedPaddingRight + scrollbarWidth}px`;
          }

          document.body.style.overflow = "hidden";

          if (sidebarCloseButton) {
            sidebarCloseButton.focus();
          }
        };

        const closeSidebar = () => {
          if (!sidebarIsOpen) {
            return;
          }

          sidebarIsOpen = false;
          updateSidebarButtonState(false);
          setSidebarA11yState(false);

          mobileSidebarBackdrop.classList.add("opacity-0");
          mobileSidebarPanel.classList.add("translate-x-full");

          window.clearTimeout(sidebarHideTimer);
          sidebarHideTimer = window.setTimeout(() => {
            if (!sidebarIsOpen) {
              mobileSidebar.classList.add("hidden", "pointer-events-none");
            }
          }, 320);

          document.body.style.overflow = previousBodyOverflow;
          document.body.style.paddingRight = previousBodyPaddingRight;

          if (lastFocusedElement && typeof lastFocusedElement.focus === "function") {
            lastFocusedElement.focus();
          }
        };

        setSidebarA11yState(false);
        updateSidebarButtonState(false);

        sidebarOpenButtons.forEach((button) => {
          button.addEventListener("click", (event) => {
            event.preventDefault();
            openSidebar();
          });
        });

        if (sidebarCloseButton) {
          sidebarCloseButton.addEventListener("click", closeSidebar);
        }

        mobileSidebarBackdrop.addEventListener("click", closeSidebar);

        mobileSidebar.querySelectorAll("a").forEach((link) => {
          link.addEventListener("click", closeSidebar);
        });

        document.addEventListener("keydown", (event) => {
          if (event.key === "Escape") {
            closeSidebar();
          }
        });
      }
    </script>

    @yield('scripts')
  </body>

  </html>
