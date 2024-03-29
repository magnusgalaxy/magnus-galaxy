<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Magnus Galaxy", // set false to total remove
            'titleBefore'  => true, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Magnus Galaxy is a website for developers interested in PHP, Laravel, Reactjs, Angular, and other programming languages. Find posts, updates, and tools for your projects.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['Magnus Galaxy', 'PHP', 'Laravel', 'Reactjs', 'Angular', 'programming languages'],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Magnus Galaxy', // set false to total remove
            'description' => 'Magnus Galaxy is a website for developers interested in PHP, Laravel, Reactjs, Angular, and other programming languages. Find posts, updates, and tools for your projects.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'site'        => '@magnusgalaxy',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Magnus Galaxy', // set false to total remove
            'description' => 'Magnus Galaxy is a website for developers interested in PHP, Laravel, Reactjs, Angular, and other programming languages. Find posts, updates, and tools for your projects.', // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
