$ErrorActionPreference = "Stop"

$root = Split-Path -Parent $MyInvocation.MyCommand.Path
Set-Location $root

$mainFile = Join-Path $root "sendlovetocuba.html"
$aboutSourceFile = Join-Path $root "about.html"
$shopSourceFile = Join-Path $root "shopproducts.html"
$foodSourceFile = Join-Path $root "catagories.html"
$checkoutSourceFile = Join-Path $root "checkout.html"
$loginSourceFile = Join-Path $root "login.html"
$howItWorksSourceFile = Join-Path $root "howitworks.html"
$partialsDir = Join-Path $root "partials"

if (!(Test-Path $mainFile)) {
  throw "Main file not found: $mainFile"
}

if (!(Test-Path $aboutSourceFile)) {
  throw "About source file not found: $aboutSourceFile"
}

if (!(Test-Path $shopSourceFile)) {
  throw "Shop source file not found: $shopSourceFile"
}

if (!(Test-Path $foodSourceFile)) {
  throw "Food source file not found: $foodSourceFile"
}

if (!(Test-Path $checkoutSourceFile)) {
  throw "Checkout source file not found: $checkoutSourceFile"
}

if (!(Test-Path $loginSourceFile)) {
  throw "Login source file not found: $loginSourceFile"
}

if (!(Test-Path $howItWorksSourceFile)) {
  throw "How It Works source file not found: $howItWorksSourceFile"
}

$requiredPartials = @(
  "header.html",
  "hero.html",
  "about-banner.html",
  "shop-banner.html",
  "food-banner.html",
  "howitworks-banner.html",
  "howitworks-content.html",
  "checkout-banner.html",
  "checkout-content.html",
  "login-banner.html",
  "login-content.html",
  "food-catalog.html",
  "shop-category-grid.html",
  "shop-featured-products.html",
  "shop-catalog.html",
  "shop-by-category.html",
  "featured-products.html",
  "why-choose-us.html",
  "how-it-works.html",
  "product-collections.html",
  "testimonials.html",
  "service-features.html",
  "footer.html"
)

foreach ($partial in $requiredPartials) {
  $partialPath = Join-Path $partialsDir $partial
  if (!(Test-Path $partialPath)) {
    throw "Missing partial: $partialPath"
  }
}

$header = Get-Content (Join-Path $partialsDir "header.html")
$hero = Get-Content (Join-Path $partialsDir "hero.html")
$aboutBanner = Get-Content (Join-Path $partialsDir "about-banner.html")
$shopBanner = Get-Content (Join-Path $partialsDir "shop-banner.html")
$foodBanner = Get-Content (Join-Path $partialsDir "food-banner.html")
$howItWorksBanner = Get-Content (Join-Path $partialsDir "howitworks-banner.html")
$howItWorksContent = Get-Content (Join-Path $partialsDir "howitworks-content.html")
$checkoutBanner = Get-Content (Join-Path $partialsDir "checkout-banner.html")
$checkoutContent = Get-Content (Join-Path $partialsDir "checkout-content.html")
$loginBanner = Get-Content (Join-Path $partialsDir "login-banner.html")
$loginContent = Get-Content (Join-Path $partialsDir "login-content.html")
$foodCatalog = Get-Content (Join-Path $partialsDir "food-catalog.html")
$shopCategoryGrid = Get-Content (Join-Path $partialsDir "shop-category-grid.html")
$shopFeatured = Get-Content (Join-Path $partialsDir "shop-featured-products.html")
$shopCatalog = Get-Content (Join-Path $partialsDir "shop-catalog.html")
$shop = Get-Content (Join-Path $partialsDir "shop-by-category.html")
$featured = Get-Content (Join-Path $partialsDir "featured-products.html")
$why = Get-Content (Join-Path $partialsDir "why-choose-us.html")
$how = Get-Content (Join-Path $partialsDir "how-it-works.html")
$collections = Get-Content (Join-Path $partialsDir "product-collections.html")
$testimonials = Get-Content (Join-Path $partialsDir "testimonials.html")
$service = Get-Content (Join-Path $partialsDir "service-features.html")
$footer = Get-Content (Join-Path $partialsDir "footer.html")

function Get-MarkedSection {
  param(
    [string]$SourceFile,
    [string]$StartMarker,
    [string]$EndMarker
  )

  $lines = Get-Content $SourceFile
  $startLine = (Select-String -Path $SourceFile -Pattern $StartMarker | Select-Object -First 1).LineNumber
  $endLine = (Select-String -Path $SourceFile -Pattern $EndMarker | Select-Object -First 1).LineNumber

  if (-not $startLine -or -not $endLine -or $endLine -le $startLine) {
    throw "Could not find requested markers in $SourceFile"
  }

  return $lines[$startLine..($endLine - 2)]
}

$about = Get-MarkedSection -SourceFile $aboutSourceFile -StartMarker '<!-- ABOUT_SECTION_START -->' -EndMarker '<!-- ABOUT_SECTION_END -->'
$aboutContent = Get-MarkedSection -SourceFile $aboutSourceFile -StartMarker '<!-- ABOUT_SECTION_START -->' -EndMarker '</main>'

function Build-Page {
  param(
    [string]$SourceFile,
    [string]$OutputFile
  )

  $lines = Get-Content $SourceFile

  $bodyLine = (Select-String -Path $SourceFile -Pattern '^<body ' | Select-Object -First 1).LineNumber
  $scriptLine = (Select-String -Path $SourceFile -Pattern '^\s*<script>\s*$' | Where-Object { $_.LineNumber -gt $bodyLine } | Select-Object -First 1).LineNumber

  if (-not $bodyLine -or -not $scriptLine) {
    throw "Could not find expected body/script boundaries in $SourceFile"
  }

  $head = $lines[0..($bodyLine - 2)]
  $behavior = $lines[($scriptLine - 1)..($lines.Length - 1)]

  $newBody = @()
  $newBody += '<body class="bg-brand-bg font-body leading-[1.45] text-brand-ink">'
  $newBody += $header
  $newBody += ""
  $newBody += "  <main>"
  $newBody += $hero
  $newBody += $shop
  $newBody += $about
  $newBody += $featured
  $newBody += $why
  $newBody += $how
  $newBody += $collections
  $newBody += $testimonials
  $newBody += $service
  $newBody += "  </main>"
  $newBody += ""
  $newBody += $footer

  $out = @()
  $out += $head
  $out += $newBody
  $out += $behavior

  Set-Content -Path $OutputFile -Value $out
}

Build-Page -SourceFile $mainFile -OutputFile $mainFile

function Build-AboutPage {
  param(
    [string]$SourceFile,
    [string]$OutputFile
  )

  $lines = Get-Content $SourceFile

  $bodyLine = (Select-String -Path $SourceFile -Pattern '^<body ' | Select-Object -First 1).LineNumber
  $scriptLine = (Select-String -Path $SourceFile -Pattern '^\s*<script>\s*$' | Where-Object { $_.LineNumber -gt $bodyLine } | Select-Object -First 1).LineNumber

  if (-not $bodyLine -or -not $scriptLine) {
    throw "Could not find expected body/script boundaries in $SourceFile"
  }

  $head = $lines[0..($bodyLine - 2)]
  $behavior = $lines[($scriptLine - 1)..($lines.Length - 1)]

  $newBody = @()
  $newBody += '<body class="bg-brand-bg font-body leading-[1.45] text-brand-ink">'
  $newBody += $header
  $newBody += "  <main>"
  $newBody += $aboutBanner
  $newBody += "<!-- ABOUT_SECTION_START -->"
  $newBody += $aboutContent
  $newBody += "<!-- ABOUT_SECTION_END -->"
  $newBody += "  </main>"

  $out = @()
  $out += $head
  $out += $newBody
  $out += $behavior

  Set-Content -Path $OutputFile -Value $out
}

Build-AboutPage -SourceFile $aboutSourceFile -OutputFile $aboutSourceFile

function Build-ShopPage {
  param(
    [string]$SourceFile,
    [string]$OutputFile
  )

  $lines = Get-Content $SourceFile
  $bodyLine = (Select-String -Path $SourceFile -Pattern '^<body ' | Select-Object -First 1).LineNumber
  $scriptLine = (Select-String -Path $SourceFile -Pattern '^\s*<script>\s*$' | Where-Object { $_.LineNumber -gt $bodyLine } | Select-Object -First 1).LineNumber

  if (-not $bodyLine -or -not $scriptLine) {
    throw "Could not find expected body/script boundaries in $SourceFile"
  }

  $head = $lines[0..($bodyLine - 2)]
  $behavior = $lines[($scriptLine - 1)..($lines.Length - 1)]

  $newBody = @()
  $newBody += '<body class="bg-brand-bg font-body leading-[1.45] text-brand-ink">'
  $newBody += $header
  $newBody += "  <main>"
  $newBody += $shopBanner
  $newBody += $shopCategoryGrid
  $newBody += $featured
  $newBody += $shopCatalog
  $newBody += $service
  $newBody += "  </main>"
  $newBody += ""
  $newBody += $footer

  $out = @()
  $out += $head
  $out += $newBody
  $out += $behavior

  Set-Content -Path $OutputFile -Value $out
}

Build-ShopPage -SourceFile $shopSourceFile -OutputFile $shopSourceFile

function Build-FoodPage {
  param(
    [string]$SourceFile,
    [string]$OutputFile
  )

  $lines = Get-Content $SourceFile
  $bodyLine = (Select-String -Path $SourceFile -Pattern '^<body ' | Select-Object -First 1).LineNumber
  $scriptLine = (Select-String -Path $SourceFile -Pattern '^\s*<script>\s*$' | Where-Object { $_.LineNumber -gt $bodyLine } | Select-Object -First 1).LineNumber

  if (-not $bodyLine -or -not $scriptLine) {
    throw "Could not find expected body/script boundaries in $SourceFile"
  }

  $head = $lines[0..($bodyLine - 2)]
  $behavior = $lines[($scriptLine - 1)..($lines.Length - 1)]

  $newBody = @()
  $newBody += '<body class="bg-brand-bg font-body leading-[1.45] text-brand-ink">'
  $newBody += $header
  $newBody += "  <main>"
  $newBody += $foodBanner
  $newBody += $foodCatalog
  $newBody += $service
  $newBody += "  </main>"
  $newBody += ""
  $newBody += $footer

  $out = @()
  $out += $head
  $out += $newBody
  $out += $behavior

  Set-Content -Path $OutputFile -Value $out
}

Build-FoodPage -SourceFile $foodSourceFile -OutputFile $foodSourceFile

function Build-CheckoutPage {
  param(
    [string]$SourceFile,
    [string]$OutputFile
  )

  $lines = Get-Content $SourceFile
  $bodyLine = (Select-String -Path $SourceFile -Pattern '^<body ' | Select-Object -First 1).LineNumber
  $scriptLine = (Select-String -Path $SourceFile -Pattern '^\s*<script>\s*$' | Where-Object { $_.LineNumber -gt $bodyLine } | Select-Object -First 1).LineNumber

  if (-not $bodyLine -or -not $scriptLine) {
    throw "Could not find expected body/script boundaries in $SourceFile"
  }

  $head = $lines[0..($bodyLine - 2)]
  $behavior = $lines[($scriptLine - 1)..($lines.Length - 1)]

  $newBody = @()
  $newBody += '<body class="bg-brand-bg font-body leading-[1.45] text-brand-ink">'
  $newBody += $header
  $newBody += "  <main>"
  $newBody += $checkoutBanner
  $newBody += $checkoutContent
  $newBody += $service
  $newBody += "  </main>"
  $newBody += ""
  $newBody += $footer

  $out = @()
  $out += $head
  $out += $newBody
  $out += $behavior

  Set-Content -Path $OutputFile -Value $out
}

Build-CheckoutPage -SourceFile $checkoutSourceFile -OutputFile $checkoutSourceFile

function Build-LoginPage {
  param(
    [string]$SourceFile,
    [string]$OutputFile
  )

  $lines = Get-Content $SourceFile
  $bodyLine = (Select-String -Path $SourceFile -Pattern '^<body ' | Select-Object -First 1).LineNumber
  $scriptLine = (Select-String -Path $SourceFile -Pattern '^\s*<script>\s*$' | Where-Object { $_.LineNumber -gt $bodyLine } | Select-Object -First 1).LineNumber

  if (-not $bodyLine -or -not $scriptLine) {
    throw "Could not find expected body/script boundaries in $SourceFile"
  }

  $head = $lines[0..($bodyLine - 2)]
  $behavior = $lines[($scriptLine - 1)..($lines.Length - 1)]

  $newBody = @()
  $newBody += '<body class="bg-brand-bg font-body leading-[1.45] text-brand-ink">'
  $newBody += $header
  $newBody += "  <main>"
  $newBody += $loginBanner
  $newBody += $loginContent
  $newBody += $service
  $newBody += "  </main>"
  $newBody += ""
  $newBody += $footer

  $out = @()
  $out += $head
  $out += $newBody
  $out += $behavior

  Set-Content -Path $OutputFile -Value $out
}

Build-LoginPage -SourceFile $loginSourceFile -OutputFile $loginSourceFile

function Build-HowItWorksPage {
  param(
    [string]$SourceFile,
    [string]$OutputFile
  )

  $lines = Get-Content $SourceFile
  $bodyLine = (Select-String -Path $SourceFile -Pattern '^<body ' | Select-Object -First 1).LineNumber
  $scriptLine = (Select-String -Path $SourceFile -Pattern '^\s*<script>\s*$' | Where-Object { $_.LineNumber -gt $bodyLine } | Select-Object -First 1).LineNumber

  if (-not $bodyLine -or -not $scriptLine) {
    throw "Could not find expected body/script boundaries in $SourceFile"
  }

  $head = $lines[0..($bodyLine - 2)]
  $behavior = $lines[($scriptLine - 1)..($lines.Length - 1)]

  $newBody = @()
  $newBody += '<body class="bg-brand-bg font-body leading-[1.45] text-brand-ink">'
  $newBody += $header
  $newBody += "  <main>"
  $newBody += $howItWorksBanner
  $newBody += $howItWorksContent
  $newBody += $service
  $newBody += "  </main>"
  $newBody += ""
  $newBody += $footer

  $out = @()
  $out += $head
  $out += $newBody
  $out += $behavior

  Set-Content -Path $OutputFile -Value $out
}

Build-HowItWorksPage -SourceFile $howItWorksSourceFile -OutputFile $howItWorksSourceFile

Write-Host "Built sendlovetocuba.html, about.html, shopproducts.html, catagories.html, checkout.html, login.html, and howitworks.html from partials."
