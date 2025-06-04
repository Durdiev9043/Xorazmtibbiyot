<?php
return [
'supportedLocales' => [
    'en' => [
        'name' => 'English',
        'script' => 'Latn',
        'native' => 'English',
    ],
    'ru' => [
        'name' => 'Russian',
        'script' => 'Cyrl',
        'native' => 'Русский',
    ],
    'uz' => [
        'name' => 'Uzbek',
        'script' => 'Latn',
        'native' => 'O‘zbekcha',
    ],
],

    'useAcceptLanguageHeader' => true,

    // If `hideDefaultLocaleInURL` is true, then a url without locale
    // is identical with the same url with default locale.
    // For example, if `en` is default locale, then `/en/about` and `/about`
    // would be identical.
    //
    // If in addition the middleware `LaravelLocalizationRedirectFilter` is active, then
    // every url with default locale is redirected to url without locale.
    // For example, `/en/about` would be redirected to `/about`.
    // It is recommended to use `hideDefaultLocaleInURL` only in
    // combination with the middleware `LaravelLocalizationRedirectFilter`
    // to avoid duplicate content (SEO).
    //
    // If `useAcceptLanguageHeader` is true, then the first time
    // the locale will be determined from browser and redirect to that language.
    // After that, `hideDefaultLocaleInURL` behaves as usual.
    'hideDefaultLocaleInURL' => false,

    // If you want to display the locales in particular order in the language selector you should write the order here.
    //CAUTION: Please consider using the appropriate locale code otherwise it will not work
    //Example: 'localesOrder' => ['es','en'],
    'localesOrder' => [],

    // If you want to use custom language URL segments like 'at' instead of 'de-AT', you can map them to allow the
    // LanguageNegotiator to assign the desired locales based on HTTP Accept Language Header. For example, if you want
    // to use 'at' instead of 'de-AT', you would map 'de-AT' to 'at' (ie. ['de-AT' => 'at']).
    'localesMapping' => [],

    // Locale suffix for LC_TIME and LC_MONETARY
    // Defaults to most common ".UTF-8". Set to blank on Windows systems, change to ".utf8" on CentOS and similar.
    'utf8suffix' => env('LARAVELLOCALIZATION_UTF8SUFFIX', '.UTF-8'),

    // URLs which should not be processed, e.g. '/nova', '/nova/*', '/nova-api/*' or specific application URLs
    // Defaults to []
    'urlsIgnored' => ['/skipped'],

    'httpMethodsIgnored' => ['POST', 'PUT', 'PATCH', 'DELETE'],
    ];
?>
