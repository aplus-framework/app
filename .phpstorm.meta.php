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

registerArgumentsSet(
    'configs_anti_csrf',
    'default',
);
expectedArguments(
    \App::antiCsrf(),
    0,
    argumentsSet('configs_anti_csrf')
);

registerArgumentsSet(
    'configs_autoloader',
    'default',
);
expectedArguments(
    \App::autoloader(),
    0,
    argumentsSet('configs_autoloader')
);

registerArgumentsSet(
    'configs_cache',
    'default',
);
expectedArguments(
    \App::cache(),
    0,
    argumentsSet('configs_cache')
);

registerArgumentsSet(
    'configs_console',
    'default',
);
expectedArguments(
    \App::console(),
    0,
    argumentsSet('configs_console')
);

registerArgumentsSet(
    'configs_crypto',
    'default',
);
expectedArguments(
    \App::crypto(),
    0,
    argumentsSet('configs_crypto')
);

registerArgumentsSet(
    'configs_database',
    'default',
);
expectedArguments(
    \App::database(),
    0,
    argumentsSet('configs_database')
);

registerArgumentsSet(
    'configs_exceptions',
    'default',
);
expectedArguments(
    \App::exceptions(),
    0,
    argumentsSet('configs_exceptions')
);

registerArgumentsSet(
    'configs_language',
    'default',
);
expectedArguments(
    \App::language(),
    0,
    argumentsSet('configs_language')
);

registerArgumentsSet(
    'configs_locator',
    'default',
);
expectedArguments(
    \App::locator(),
    0,
    argumentsSet('configs_locator')
);

registerArgumentsSet(
    'configs_logger',
    'default',
);
expectedArguments(
    \App::logger(),
    0,
    argumentsSet('configs_logger')
);

registerArgumentsSet(
    'configs_mailer',
    'default',
);
expectedArguments(
    \App::mailer(),
    0,
    argumentsSet('configs_mailer')
);

registerArgumentsSet(
    'configs_request',
    'default',
);
expectedArguments(
    \App::request(),
    0,
    argumentsSet('configs_request')
);

registerArgumentsSet(
    'configs_response',
    'default',
);
expectedArguments(
    \App::response(),
    0,
    argumentsSet('configs_response')
);

registerArgumentsSet(
    'configs_router',
    'default',
);
expectedArguments(
    \App::router(),
    0,
    argumentsSet('configs_router')
);

registerArgumentsSet(
    'configs_routes',
    'default',
);
expectedArguments(
    \App::routes(),
    0,
    argumentsSet('configs_routes')
);

registerArgumentsSet(
    'configs_session',
    'default',
);
expectedArguments(
    \App::session(),
    0,
    argumentsSet('configs_session')
);

registerArgumentsSet(
    'configs_validation',
    'default',
);
expectedArguments(
    \App::validation(),
    0,
    argumentsSet('configs_validation')
);

registerArgumentsSet(
    'configs_view',
    'default',
);
expectedArguments(
    \App::view(),
    0,
    argumentsSet('configs_view')
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
    \Framework\Routing\Router::getNamedRoute(),
    0,
    argumentsSet('routes')
);
expectedArguments(
    \Framework\Routing\Router::hasNamedRoute(),
    0,
    argumentsSet('routes')
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
