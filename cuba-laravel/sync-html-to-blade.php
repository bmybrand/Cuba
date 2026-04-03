<?php

declare(strict_types=1);

/**
 * Regenerates layout-based Blade views from repo-root static HTML.
 * Run from cuba-laravel: php sync-html-to-blade.php
 */

$repoRoot = dirname(__DIR__);
$viewsDir = __DIR__ . '/resources/views';

$pages = [
    ['html' => 'sendlovetocuba.html', 'view' => 'sendlovetocuba'],
    ['html' => 'about.html', 'view' => 'about', 'strip_about_markers' => true],
    ['html' => 'shopproducts.html', 'view' => 'shopproducts'],
    ['html' => 'shop.html', 'view' => 'shop'],
    ['html' => 'catagories.html', 'view' => 'catagories'],
    ['html' => 'howitworks.html', 'view' => 'howitworks'],
    ['html' => "faq's.html", 'view' => "faq's"],
    ['html' => 'contact.html', 'view' => 'contact'],
    ['html' => 'cart.html', 'view' => 'cart'],
    ['html' => 'checkout.html', 'view' => 'checkout'],
    ['html' => 'wishlist.html', 'view' => 'wishlist'],
    ['html' => 'login.html', 'view' => 'login'],
];

$scriptMarkers = [
    'const checkoutSenderTab',
    'const collectionTabs',
    'const productTabs',
    'const currency',
    'const wishlistRows',
    'const faqTriggers',
    'const testimonialCarousel',
    'const dealCountdown',
    'const heroImage',
    'const foodPriceMinRange',
    'const qtyInput',
    'const relatedTrack',
];

function extractTitle(string $html): string
{
    if (preg_match('/<title[^>]*>(.*?)<\/title>/is', $html, $m)) {
        return html_entity_decode(trim(strip_tags($m[1])), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }

    return 'Send Love to Cuba';
}

function titleToBladeSection(string $title): string
{
    if (str_contains($title, "'")) {
        $escaped = str_replace('"', '\\"', $title);

        return '@section("title", "' . $escaped . '")';
    }

    return "@section('title', '" . str_replace("'", "\\'", $title) . "')";
}

function extractHeadStyles(string $html): string
{
    if (! preg_match('/<head[^>]*>(.*?)<\/head>/is', $html, $headMatch)) {
        return '';
    }

    $head = $headMatch[1];
    if (! preg_match_all('/<style[^>]*>(.*?)<\/style>/is', $head, $styles)) {
        return '';
    }

    return trim(implode("\n\n", $styles[1]));
}

function extractMain(string $html): string
{
    if (! preg_match('/<main[^>]*>.*?<\/main>/is', $html, $m)) {
        throw new RuntimeException('No <main> found');
    }

    return $m[0];
}

function extractFooterScripts(string $html): string
{
    $footerPos = strrpos($html, '</footer>');
    if ($footerPos !== false) {
        $region = substr($html, $footerPos + strlen('</footer>'));
    } else {
        $mainPos = strrpos($html, '</main>');
        if ($mainPos === false) {
            return '';
        }
        $region = substr($html, $mainPos + strlen('</main>'));
    }

    $bodyEnd = strpos($region, '</body>');
    if ($bodyEnd !== false) {
        $region = substr($region, 0, $bodyEnd);
    }

    if (! preg_match_all('/<script(?![^>]*\bsrc\s*=)[^>]*>(.*?)<\/script>/is', $region, $scripts)) {
        return '';
    }

    return trim(implode("\n\n", $scripts[1]));
}

function stripSidebarPrefix(string $js, array $markers): string
{
    $js = trim($js);
    if ($js === '') {
        return '';
    }

    $best = null;
    foreach ($markers as $m) {
        $p = strpos($js, $m);
        if ($p !== false && ($best === null || $p < $best)) {
            $best = $p;
        }
    }

    if ($best !== null) {
        return trim(substr($js, $best));
    }

    if (str_contains($js, 'mobile-sidebar') || str_contains($js, 'menu-button')) {
        return '';
    }

    return $js;
}

function applyLaravelPlaceholders(string $html): string
{
    $html = preg_replace_callback(
        '/src="(?:\.\/)?assets\/([^"]+)"/',
        static function (array $m): string {
            $path = rawurldecode($m[1]);
            $escaped = str_replace(['\\', '"'], ['\\\\', '\\"'], $path);

            return 'src="{{ asset("assets/' . $escaped . '") }}"';
        },
        $html
    );

    $hrefPairs = [
        'href="sendlovetocuba.html#' => 'href="{{ url(\'/\') }}#',
        'href="shop.html#' => 'href="{{ url(\'/shop\') }}#',
        'href="catagories.html#' => 'href="{{ url(\'/categories\') }}#',
        'href="categories.html#' => 'href="{{ url(\'/categories\') }}#',
        'href="howitworks.html#' => 'href="{{ url(\'/how-it-works\') }}#',
        'href="how-it-works.html#' => 'href="{{ url(\'/how-it-works\') }}#',
        'href="faq\'s.html#' => 'href="{{ url(\'/faq\') }}#',
        'href="faq.html#' => 'href="{{ url(\'/faq\') }}#',
        'href="contact.html#' => 'href="{{ url(\'/contact\') }}#',
        'href="cart.html#' => 'href="{{ url(\'/cart\') }}#',
        'href="checkout.html#' => 'href="{{ url(\'/checkout\') }}#',
        'href="wishlist.html#' => 'href="{{ url(\'/wishlist\') }}#',
        'href="login.html#' => 'href="{{ url(\'/login\') }}#',
        'href="about.html#' => 'href="{{ url(\'/about\') }}#',
        'href="sendlovetocuba.html"' => 'href="{{ route(\'home\') }}"',
        'href="./sendlovetocuba.html"' => 'href="{{ route(\'home\') }}"',
        'href="shopproducts.html"' => 'href="{{ url(\'/shop\') }}"',
        'href="./shopproducts.html"' => 'href="{{ url(\'/shop\') }}"',
        'href="shop.html"' => 'href="{{ url(\'/shop\') }}"',
        'href="./shop.html"' => 'href="{{ url(\'/shop\') }}"',
        'href="about.html"' => 'href="{{ route(\'about\') }}"',
        'href="./about.html"' => 'href="{{ route(\'about\') }}"',
        'href="contact.html"' => 'href="{{ route(\'contact\') }}"',
        'href="./contact.html"' => 'href="{{ route(\'contact\') }}"',
        'href="catagories.html"' => 'href="{{ route(\'categories\') }}"',
        'href="./catagories.html"' => 'href="{{ route(\'categories\') }}"',
        'href="categories.html"' => 'href="{{ route(\'categories\') }}"',
        'href="howitworks.html"' => 'href="{{ route(\'howitworks\') }}"',
        'href="./howitworks.html"' => 'href="{{ route(\'howitworks\') }}"',
        'href="how-it-works.html"' => 'href="{{ route(\'howitworks\') }}"',
        'href="faq\'s.html"' => 'href="{{ route(\'faq\') }}"',
        'href="./faq\'s.html"' => 'href="{{ route(\'faq\') }}"',
        'href="faq.html"' => 'href="{{ route(\'faq\') }}"',
        'href="cart.html"' => 'href="{{ route(\'cart\') }}"',
        'href="Cart.html"' => 'href="{{ route(\'cart\') }}"',
        'href="./cart.html"' => 'href="{{ route(\'cart\') }}"',
        'href="checkout.html"' => 'href="{{ route(\'checkout\') }}"',
        'href="./checkout.html"' => 'href="{{ route(\'checkout\') }}"',
        'href="wishlist.html"' => 'href="{{ route(\'wishlist\') }}"',
        'href="./wishlist.html"' => 'href="{{ route(\'wishlist\') }}"',
        'href="login.html"' => 'href="{{ route(\'login\') }}"',
        'href="./login.html"' => 'href="{{ route(\'login\') }}"',
    ];

    foreach ($hrefPairs as $from => $to) {
        $html = str_replace($from, $to, $html);
    }

    $html = str_replace(
        ["window.location.href='shop.html'", 'window.location.href="shop.html"'],
        "window.location.href='{{ url('/shop') }}'",
        $html
    );

    $html = preg_replace(
        '/<p([^>]*class="[^"]*cart-inter[^"]*"[^>]*)>\s*Home\s*(<span class="mx-2">&gt;<\/span>)/i',
        '<p$1><a href="{{ route(\'home\') }}" class="underline-offset-2 hover:underline">Home</a> $2',
        $html
    );

    $html = preg_replace(
        '/<p([^>]*class="[^"]*text-white\/85[^"]*"[^>]*)>\s*Home\s*(<span class="mx-2">&gt;<\/span>)/i',
        '<p$1><a href="{{ route(\'home\') }}" class="underline-offset-2 hover:underline">Home</a> $2',
        $html
    );

    return $html;
}

function indentBlock(string $block, int $spaces): string
{
    $pad = str_repeat(' ', $spaces);
    $lines = preg_split('/\R/', $block);

    return implode("\n", array_map(static fn ($l) => $l === '' ? '' : $pad . $l, $lines));
}

foreach ($pages as $page) {
    $htmlPath = $repoRoot . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $page['html']);
    if (! is_readable($htmlPath)) {
        fwrite(STDERR, "Skip missing: {$page['html']}\n");
        continue;
    }

    $html = file_get_contents($htmlPath);
    if ($html === false) {
        throw new RuntimeException("Could not read {$htmlPath}");
    }

    $main = extractMain($html);
    if (! empty($page['strip_about_markers'] ?? false)) {
        $main = preg_replace('/^\s*<!--\s*ABOUT_SECTION_(START|END)\s*-->\s*\R?/m', '', $main);
        $main = preg_replace('/\R\s*<!--\s*ABOUT_SECTION_(START|END)\s*-->\s*/', "\n", $main);
    }

    $main = applyLaravelPlaceholders($main);

    $styles = extractHeadStyles($html);
    $rawScripts = extractFooterScripts($html);
    $scripts = stripSidebarPrefix($rawScripts, $scriptMarkers);
    $scripts = applyLaravelPlaceholders($scripts);

    $title = extractTitle($html);
    $titleLine = titleToBladeSection($title);

    $out = "@extends('layouts.app')\n\n";
    $out .= $titleLine . "\n\n";

    if ($styles !== '') {
        $out .= "@push('styles')\n";
        $out .= "    <style>\n";
        $out .= indentBlock($styles, 8) . "\n";
        $out .= "    </style>\n@endpush\n\n";
    }

    $out .= "@section('content')\n";
    $out .= indentBlock($main, 4) . "\n";
    $out .= "@endsection\n\n";

    $out .= "@section('scripts')\n";
    if ($scripts !== '') {
        $out .= "    <script>\n";
        $out .= indentBlock($scripts, 8) . "\n";
        $out .= "    </script>\n";
    }
    $out .= "@endsection\n";

    $viewFile = $viewsDir . '/' . $page['view'] . '.blade.php';
    file_put_contents($viewFile, $out);
    echo "Wrote {$page['view']}.blade.php\n";
}

echo "Done.\n";
