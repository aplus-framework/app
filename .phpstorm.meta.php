<?php namespace PHPSTORM_META;

// Configs
registerArgumentsSet(
    'configs',
    'anti-csrf',
    'autoloader',
    'cache',
    'console',
    'crypto',
    'database',
    'exceptions',
    'language',
    'locator',
    'logger',
    'mailer',
    'request',
    'response',
    'router',
    'routes',
    'session',
    'validation',
    'view',
);
expectedArguments(
    \config(),
    0,
    argumentsSet('configs')
);

// Helpers
registerArgumentsSet(
    'helpers',
);
expectedArguments(
    \helpers(),
    0,
    argumentsSet('helpers')
);

// Languages
registerArgumentsSet(
    'langs',
    'home.description',
    'home.title',
);
expectedArguments(
    \lang(),
    0,
    argumentsSet('langs')
);

// Routes
registerArgumentsSet(
    'routes',
    'home',
);
expectedArguments(
    \route_url(),
    0,
    argumentsSet('routes')
);

// Views
registerArgumentsSet(
    'views',
    'errors/404',
    'home/index',
);
expectedArguments(
    \Framework\MVC\Controller::render(),
    0,
    argumentsSet('views')
);
expectedArguments(
    \view(),
    0,
    argumentsSet('views')
);

registerArgumentsSet(
    'views_layouts',
    'default',
);
expectedArguments(
    \Framework\MVC\View::extends(),
    0,
    argumentsSet('views_layouts')
);
expectedArguments(
    \Framework\MVC\View::isExtending(),
    0,
    argumentsSet('views_layouts')
);

registerArgumentsSet(
    'views_includes',
);
expectedArguments(
    \Framework\MVC\View::include(),
    0,
    argumentsSet('views_includes')
);
