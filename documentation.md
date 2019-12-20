# App Project *documentation*

## Putting the app in debug mode:

```php
<?php

class App extends \Framework\MVC\App
{
	public const DEBUG = true;
}
```

## Overriding classes of services:

**app/Libraries/HTTP/Request.php**

```php
<?php namespace App\Libraries\HTTP;

class Request extends \Framework\HTTP\Request
{
	public function hello()
	{
		return __METHOD__;
	}
}
```

**App.php**

```php
<?php

use App\Libraries\HTTP\Request;

class App extends \Framework\MVC\App
{
	public const DEBUG = true;

	// php 7.4 // public static function request() : Request
	public static function request() : \Framework\HTTP\Request
	{
		return static::getService('request')
			?? static::setService('request', new Request());
	}
}
```

Now the `hello` method is available in your IDE:

```php
// App\Libraries\HTTP\Request::hello
echo \App::request()->hello();
```
