<?php

/**
 * @file
 * Lists available colors and color schemes for the Bartik theme.
 */

$info = [
  // Available colors and color labels used in theme.
  'fields' => [
    'footer_bg' => t('Footer background'),
    'footer_btn_bg'=>t('Footer button background'),
    'footer_text' => t('Footer Text'),
    'header_menus' => t('Header Menus'),
    'header_bg' => t('Header background'),
    'search_bg' => t('Search background'),
    'search_link' => t('Search Link'),
    //'content_black' => t('Content Area Black Text'),
    //'content_gray' => t('Content Area Gray Text'),
    'footer_border' => t('Footer Border'),
    'content_label' => t('Content description label'),
    'content_value' => t('Content description value'),
    'primary' => t('Primary'),
    'secondary'=>t('Secondary'),
    //'light' => t('Font Primary Color'),
    'primary_light' => t('Primary Light'),
    'bread_crumb' => t('breadcrumb')

  ],
  // Pre-defined color schemes.
  'schemes' => [
    'default' => [
      'title' => t('Law (default)'),
      'colors' => [
        'footer_bg' => '#841019',
        'footer_btn_bg' =>'#f5f3f3',
        'footer_text' => '#ffffff',
        'header_menus' => '#000000',
        'header_bg' => '#fffefe',
        'search_bg' => '#01a89f',
        'search_link' => '#fffffe',
        //'content_black' => '#141414',
        //'content_gray' => '#989898',
        'footer_border' => '#961728',
        'content_label' => '#9d9d9d',
        'content_value' => '#333333',
        'primary' => '#841018',
        'secondary' => '#07b9b0',
        //'light'=>'#fffffe',
        'primary_light' => '#b11018',
        'bread_crumb'=> '#0ca79f'
      ],
    ],
    // 'firehouse' => [
    //   'title' => t('Firehouse'),
    //   'colors' => [
    //     'top' => '#cd2d2d',
    //     'bottom' => '#d64e4e',
    //     'bg' => '#ffffff',
    //     'sidebar' => '#f1f4f0',
    //     'sidebarborders' => '#ededed',
    //     'footer' => '#1f1d1c',
    //     'titleslogan' => '#fffeff',
    //     'text' => '#888888',
    //     'link' => '#d6121f',
    //   ],
    // ],
    // 'ice' => [
    //   'title' => t('Ice'),
    //   'colors' => [
    //     'top' => '#d0d0d0',
    //     'bottom' => '#c2c4c5',
    //     'bg' => '#ffffff',
    //     'sidebar' => '#ffffff',
    //     'sidebarborders' => '#cccccc',
    //     'footer' => '#016b83',
    //     'titleslogan' => '#000000',
    //     'text' => '#4a4a4a',
    //     'link' => '#019dbf',
    //   ],
    // ],
    // 'plum' => [
    //   'title' => t('Plum'),
    //   'colors' => [
    //     'top' => '#4c1c58',
    //     'bottom' => '#593662',
    //     'bg' => '#fffdf7',
    //     'sidebar' => '#edede7',
    //     'sidebarborders' => '#e7e7e7',
    //     'footer' => '#2c2c28',
    //     'titleslogan' => '#ffffff',
    //     'text' => '#301313',
    //     'link' => '#9d408d',
    //   ],
    // ],
    // 'slate' => [
    //   'title' => t('Slate'),
    //   'colors' => [
    //     'top' => '#4a4a4a',
    //     'bottom' => '#4e4e4e',
    //     'bg' => '#ffffff',
    //     'sidebar' => '#ffffff',
    //     'sidebarborders' => '#d0d0d0',
    //     'footer' => '#161617',
    //     'titleslogan' => '#ffffff',
    //     'text' => '#3b3b3b',
    //     'link' => '#0073b6',
    //   ],
    // ],
  ],

  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => [
    'css/colors.css',
  ],

  // Files to copy.
  'copy' => [
    'logo.svg',
  ],

  // Gradient definitions.
  'gradients' => [
    [
      // (x, y, width, height).
      'dimension' => [0, 0, 0, 0],
      // Direction of gradient ('vertical' or 'horizontal').
      'direction' => 'vertical',
      // Keys of colors to use for the gradient.
      'colors' => ['top', 'bottom'],
    ],
  ],



];
