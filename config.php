<?php

return [
    'production' => false,
    'baseUrl' => 'https://artisanstatic.netlify.app',
    'site' => [
        'title' => 'AKD Showcase',
        'description' => 'Amalkong Development Projects showcase and blog.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Amalkong',
    ],
    'links' => [
        'twitter' => 'https://twitter.com/amalkong',
        'github' => 'https://github.com/amalkong',
        'stackoverflow' => 'https://stackoverflow.com/users/15254982/amalkong',
    ],
    'services' => [
        'cmsVersion' => '~2.10',
        'analytics' => 'G-G9P2RYX3P9',
        'disqus' => 'artisanstatic',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'artisanstatic',
            'apiKey' => '365895137117119',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => 'date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
        'projects' => [
            'path' => 'projects/{filename}',
            'sort' => 'date',
            'extends' => '_layouts.project',
            'section' => 'projectContent',
            'isPost' => false,
            'comments' => false,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
    ],
];
