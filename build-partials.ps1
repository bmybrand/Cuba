$ErrorActionPreference = "Stop"

$root = Split-Path -Parent $MyInvocation.MyCommand.Path
Set-Location $root

$mainFile = Join-Path $root "sendlovetocuba.html"
$secondaryFile = Join-Path $root "sendlovetocuba2.html"
$partialsDir = Join-Path $root "partials"

if (!(Test-Path $mainFile)) {
  throw "Main file not found: $mainFile"
}

if (!(Test-Path $secondaryFile)) {
  throw "Secondary file not found: $secondaryFile"
}

$requiredPartials = @(
  "header.html",
  "hero.html",
  "shop-by-category.html",
  "about.html",
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
$shop = Get-Content (Join-Path $partialsDir "shop-by-category.html")
$about = Get-Content (Join-Path $partialsDir "about.html")
$featured = Get-Content (Join-Path $partialsDir "featured-products.html")
$why = Get-Content (Join-Path $partialsDir "why-choose-us.html")
$how = Get-Content (Join-Path $partialsDir "how-it-works.html")
$collections = Get-Content (Join-Path $partialsDir "product-collections.html")
$testimonials = Get-Content (Join-Path $partialsDir "testimonials.html")
$service = Get-Content (Join-Path $partialsDir "service-features.html")
$footer = Get-Content (Join-Path $partialsDir "footer.html")

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
Build-Page -SourceFile $secondaryFile -OutputFile $secondaryFile

Write-Host "Built sendlovetocuba.html and sendlovetocuba2.html from partials."
