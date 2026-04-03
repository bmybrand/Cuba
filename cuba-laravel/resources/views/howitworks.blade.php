@extends('layouts.app')

@section('title', 'How It Works - Send Love to Cuba')

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

            #how-it-works-timeline .hiw-timeline-vline {
              background: linear-gradient(
                to bottom,
                transparent 0%,
                #e4e7ee 12%,
                #e4e7ee 88%,
                transparent 100%
              );
            }

            #how-it-works-timeline .hiw-scroll-card {
              opacity: 0.42;
              transform: translateY(10px);
              transition:
                opacity 220ms ease,
                transform 280ms ease,
                box-shadow 280ms ease,
                border-color 280ms ease;
            }

            #how-it-works-timeline .hiw-scroll-card.is-active {
              opacity: 1;
              transform: translateY(0);
              border-color: #efb4bc;
              box-shadow: 0 18px 38px rgba(17, 24, 39, 0.08), 0 1px 0 rgba(228, 38, 53, 0.14);
            }

            #how-it-works-timeline .hiw-scroll-dot {
              background: #173a75;
              transition:
                background-color 220ms ease,
                transform 220ms ease,
                box-shadow 220ms ease;
            }

            #how-it-works-timeline .hiw-scroll-dot.is-active {
              background: #C6232F;
              transform: scale(1.06);
            }

            /* Arms live only in the 2rem node column: outer edge → dot center (no overlap into cards). */
            @media (min-width: 1024px) {
              #how-it-works-timeline .hiw-node-cell--arm-left::before {
                content: "";
                position: absolute;
                left: 0;
                top: 50%;
                width: calc(50% - 0.5rem);
                height: 2px;
                transform: translateY(-50%);
                background: #e4e7ee;
                z-index: 2;
                pointer-events: none;
              }

              #how-it-works-timeline .hiw-node-cell--arm-right::before {
                content: "";
                position: absolute;
                right: 0;
                top: 50%;
                width: calc(50% - 0.5rem);
                height: 2px;
                transform: translateY(-50%);
                background: #e4e7ee;
                z-index: 2;
                pointer-events: none;
              }
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
          <img src="{{ asset("assets/howitworks.svg") }}" alt="How it works banner" class="absolute inset-0 h-full w-full object-cover" />
          <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(9,18,34,0.86),rgba(9,18,34,0.76),rgba(9,18,34,0.86))]"></div>
          <div class="relative mx-auto max-w-[1540px] px-10 text-center md:px-16 xl:px-24">
            <h1 class="font-heading text-[clamp(56px,7vw,102px)] uppercase leading-[0.88] text-white">How It Works</h1>
            <p class="mt-4 text-[17px] text-white/85"><a href="{{ route('home') }}" class="underline-offset-2 hover:underline">Home</a> <span class="mx-2">&gt;</span> How It Works</p>
          </div>
        </section>
        <section class="bg-white py-[72px] md:py-[96px]">
          <div class="mx-auto max-w-[1540px] px-10 md:px-16 xl:px-24">
            <div class="mx-auto max-w-[860px] text-center">
              <span class="inline-flex min-h-[42px] items-center gap-[14px] rounded-full border border-[#f3cfd5] bg-[#fff1f3] px-[14px] py-[4px] text-[15px] font-medium leading-none text-[#C6232F]">
                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
                <span>How It Works</span>
                <span class="h-2 w-2 rounded-full bg-[#C6232F]"></span>
              </span>
              <h2 class="mx-auto mt-5 max-w-[720px] font-heading text-[clamp(2.05rem,3.7vw,3.5rem)] font-medium uppercase leading-[0.92] text-[#091322]">
                How Sending Products
                <span class="block">To Cuba Works</span>
              </h2>
            </div>

            <div id="how-it-works-timeline" class="relative mx-auto mt-16 w-full pb-2">
              <div class="pointer-events-none absolute inset-y-0 left-1/2 z-[1] hidden w-px -translate-x-1/2 hiw-timeline-vline lg:block" aria-hidden="true"></div>

              <div class="space-y-12 lg:space-y-14">
                <div class="grid items-center gap-8 lg:grid-cols-[minmax(0,1fr)_3rem_minmax(0,1fr)] lg:gap-0 xl:grid-cols-[minmax(0,1fr)_4rem_minmax(0,1fr)]">
                  <div class="flex w-full items-center">
                    <article class="hiw-scroll-card relative z-[2] min-h-[168px] w-[90%] justify-self-start rounded-[24px] border border-[#f4edef] border-b-[#efb4bc] bg-[#f7f7f8] px-5 py-6 shadow-[0_1px_0_rgba(228,38,53,0.14)] md:px-6 md:py-7">
                      <div class="flex items-start gap-5">
                        <span class="grid h-[60px] w-[60px] shrink-0 place-items-center rounded-full border border-dashed border-brand-red">
                          <img src="{{ asset("assets/Reliable Delivery.svg") }}" alt="Reliable Delivery" class="h-7 w-7 object-contain" />
                        </span>
                        <div class="min-w-0 flex-1">
                          <h3 class="font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Choose Products</h3>
                          <p class="mt-2 max-w-none text-[15px] leading-[1.55] text-[#6d7380]">Browse a wide selection of essential items including food, appliances, solar kits, and everyday necessities. Carefully choose the products your loved ones need most, all available for reliable delivery across Cuba.</p>
                        </div>
                      </div>
                    </article>
                    <span class="hidden h-px flex-1 bg-[#e5e7eb] lg:mr-[-1.5rem] lg:block xl:mr-[-2rem]"></span>
                  </div>

                  <div class="relative z-[5] hidden min-h-[4rem] w-full items-center justify-center lg:flex">
                    <span class="hiw-scroll-dot relative z-[5] h-6 w-6 shrink-0 rounded-full bg-[#173a75] ring-2 ring-[#e5e7eb]"></span>
                  </div>

                  <div></div>
                </div>

                <div class="grid items-center gap-8 lg:grid-cols-[minmax(0,1fr)_3rem_minmax(0,1fr)] lg:gap-0 xl:grid-cols-[minmax(0,1fr)_4rem_minmax(0,1fr)]">
                  <div></div>

                  <div class="relative z-[5] hidden min-h-[4rem] w-full items-center justify-center lg:flex">
                    <span class="hiw-scroll-dot relative z-[5] h-6 w-6 shrink-0 rounded-full bg-[#173a75] ring-2 ring-[#e5e7eb]"></span>
                  </div>

                  <div class="flex w-full items-center justify-end">
                    <span class="hidden h-px flex-1 bg-[#e5e7eb] lg:ml-[-1.5rem] lg:block xl:ml-[-2rem]"></span>
                    <article class="hiw-scroll-card relative z-[2] min-h-[168px] w-[90%] justify-self-end rounded-[24px] border border-[#f4edef] border-b-[#efb4bc] bg-[#f7f7f8] px-5 py-6 shadow-[0_1px_0_rgba(228,38,53,0.14)] md:px-6 md:py-7 lg:ml-auto">
                      <div class="flex items-start gap-5">
                        <span class="grid h-[60px] w-[60px] shrink-0 place-items-center rounded-full border border-dashed border-brand-red">
                          <img src="{{ asset("assets/Reliable Delivery.svg") }}" alt="Reliable Delivery" class="h-7 w-7 object-contain" />
                        </span>
                        <div class="min-w-0 flex-1">
                          <h3 class="font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Add To Cart &amp; Checkout</h3>
                          <p class="mt-2 max-w-none text-[15px] leading-[1.55] text-[#6d7380]">Select your desired items and proceed to a secure checkout process. Review your order, apply any discounts if available, and complete your purchase with trusted safe payment options.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>

                <div class="grid items-center gap-8 lg:grid-cols-[minmax(0,1fr)_3rem_minmax(0,1fr)] lg:gap-0 xl:grid-cols-[minmax(0,1fr)_4rem_minmax(0,1fr)]">
                  <div class="flex w-full items-center">
                    <article class="hiw-scroll-card relative z-[2] min-h-[168px] w-[90%] justify-self-start rounded-[24px] border border-[#f4edef] border-b-[#efb4bc] bg-[#f7f7f8] px-5 py-6 shadow-[0_1px_0_rgba(228,38,53,0.14)] md:px-6 md:py-7">
                      <div class="flex items-start gap-5">
                        <span class="grid h-[60px] w-[60px] shrink-0 place-items-center rounded-full border border-dashed border-brand-red">
                          <img src="{{ asset("assets/Reliable Delivery.svg") }}" alt="Reliable Delivery" class="h-7 w-7 object-contain" />
                        </span>
                        <div class="min-w-0 flex-1">
                          <h3 class="font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Provide Recipient Details</h3>
                          <p class="mt-2 max-w-none text-[15px] leading-[1.55] text-[#6d7380]">Enter accurate delivery information for your loved one in Cuba, including address and contact details. This ensures a smooth and hassle-free delivery experience without delays.</p>
                        </div>
                      </div>
                    </article>
                    <span class="hidden h-px flex-1 bg-[#e5e7eb] lg:mr-[-1.5rem] lg:block xl:mr-[-2rem]"></span>
                  </div>

                  <div class="relative z-[5] hidden min-h-[4rem] w-full items-center justify-center lg:flex">
                    <span class="hiw-scroll-dot relative z-[5] h-6 w-6 shrink-0 rounded-full bg-[#173a75] ring-2 ring-[#e5e7eb]"></span>
                  </div>

                  <div></div>
                </div>

                <div class="grid items-center gap-8 lg:grid-cols-[minmax(0,1fr)_3rem_minmax(0,1fr)] lg:gap-0 xl:grid-cols-[minmax(0,1fr)_4rem_minmax(0,1fr)]">
                  <div></div>

                  <div class="relative z-[5] hidden min-h-[4rem] w-full items-center justify-center lg:flex">
                    <span class="hiw-scroll-dot relative z-[5] h-6 w-6 shrink-0 rounded-full bg-[#173a75] ring-2 ring-[#e5e7eb]"></span>
                  </div>

                  <div class="flex w-full items-center justify-end">
                    <span class="hidden h-px flex-1 bg-[#e5e7eb] lg:ml-[-1.5rem] lg:block xl:ml-[-2rem]"></span>
                    <article class="hiw-scroll-card relative z-[2] min-h-[168px] w-[90%] justify-self-end rounded-[24px] border border-[#f4edef] border-b-[#efb4bc] bg-[#f7f7f8] px-5 py-6 shadow-[0_1px_0_rgba(228,38,53,0.14)] md:px-6 md:py-7 lg:ml-auto">
                      <div class="flex items-start gap-5">
                        <span class="grid h-[60px] w-[60px] shrink-0 place-items-center rounded-full border border-dashed border-brand-red">
                          <img src="{{ asset("assets/Reliable Delivery.svg") }}" alt="Reliable Delivery" class="h-7 w-7 object-contain" />
                        </span>
                        <div class="min-w-0 flex-1">
                          <h3 class="font-heading text-[1.45rem] uppercase leading-[0.96] text-[#101827]">Delivery &amp; Tracking</h3>
                          <p class="mt-2 max-w-none text-[15px] leading-[1.55] text-[#6d7380]">Browse a wide selection of essential items including food, appliances, solar kits, and everyday necessities. Carefully choose the products your loved ones need most, all available for reliable delivery across Cuba.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
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

          {
            const timeline = document.querySelector("#how-it-works-timeline");
            const timelineCards = timeline ? Array.from(timeline.querySelectorAll(".hiw-scroll-card")) : [];
            const timelineDots = timeline ? Array.from(timeline.querySelectorAll(".hiw-scroll-dot")) : [];

            if (timelineCards.length) {
              let timelineRafId = null;

              const updateTimelineCards = () => {
                const viewportCenter = window.innerHeight * 0.5;
                let activeCard = timelineCards[0];
                let nearest = Number.POSITIVE_INFINITY;

                timelineCards.forEach((card) => {
                  const rect = card.getBoundingClientRect();
                  const cardCenter = rect.top + rect.height / 2;
                  const distance = Math.abs(cardCenter - viewportCenter);

                  if (distance < nearest) {
                    nearest = distance;
                    activeCard = card;
                  }
                });

                timelineCards.forEach((card) => {
                  card.classList.toggle("is-active", card === activeCard);
                });

                timelineDots.forEach((dot, index) => {
                  dot.classList.toggle("is-active", timelineCards[index] === activeCard);
                });
              };

              const queueTimelineCardsUpdate = () => {
                if (timelineRafId !== null) {
                  return;
                }

                timelineRafId = window.requestAnimationFrame(() => {
                  timelineRafId = null;
                  updateTimelineCards();
                });
              };

              window.addEventListener("scroll", queueTimelineCardsUpdate, { passive: true });
              window.addEventListener("resize", queueTimelineCardsUpdate);
              updateTimelineCards();
            }
          }
    </script>
@endsection
