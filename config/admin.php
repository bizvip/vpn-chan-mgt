<?php

return [
    // 应用名称
    'name'           => '加速器渠道后台',

    // 应用 logo
    'logo'           => '/admin/logo.png',

    // 默认头像
    'default_avatar' => '/admin/default-avatar.png',

    // 底部信息
    'footer'         => '© 2023 加速器渠道后台',

    'directory' => app_path('Admin'),

    'bootstrap' => app_path('Admin/bootstrap.php'),

    'route' => [
        'prefix'     => 'admin-api',
        'domain'     => null,
        'namespace'  => 'App\\Admin\\Controllers',
        'middleware' => ['admin'],
    ],

    'auth' => [
        // 是否开启验证码
        'login_captcha' => true,
        // 是否开启鉴权
        'enable'        => true,
        // 用户模型
        'model'         => \Slowlyo\OwlAdmin\Models\AdminUser::class,
        'controller'    => \Slowlyo\OwlAdmin\Controllers\AuthController::class,
        'guard'         => 'sanctum',
        'except'        => [

        ],
    ],

    'upload' => [
        'disk'      => 'public',
        // 文件上传目录
        'directory' => [
            'image' => 'images',
            'file'  => 'files',
            'rich'  => 'rich',
        ],
    ],

    'https'                                => false,

    // 是否显示 [开发者工具]
    'show_development_tools'               => true,

    // 是否显示 [权限] 功能中的自动生成按钮
    'show_auto_generate_permission_button' => true,

    'dev_tools' => [
        'terminal' => [
            'php_alias'      => 'php',
            'composer_alias' => 'composer',
        ],
    ],

    // 扩展
    'extension' => [
        'dir' => base_path('extensions'),
    ],

    'layout' => [
        'header' => [
            // 是否显示 [搜索] 按钮
            'search'       => true,
            // 是否显示 [全屏] 按钮
            'full_screen'  => true,
            // 是否显示 [主题模式] 按钮
            'switch_theme' => true,
            // 是否显示 [主题配置] 按钮
            'theme_config' => true,
        ],
    ],
];
