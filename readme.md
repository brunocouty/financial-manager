# About Financial Manager - ON DEV

This is a module to manage yours finances of a simple way. You can add registers, create categories to registers, see your data processed in charts, filter the registers in a specific range and much more! 

I use this package with ***Laravel Framework*** but you can ***use with any PHP application***!

## Available Languages

- English;
- Español (Spanish);
- Português do Brasil (Brazilian Portuguese);

## Requirements:

- Laravel >= 5.1;
- PHP >= 7.1;
- guzzlehttp/guzzle;

## Installation

Install with composer:

```
composer install brunocouty/financial-manager
```
Add the service provider in your array "*providers*", at "*config/app.php*":

```php
\BrunoCouty\FinancialManager\FinancialManagerServiceProvider::class,
```

And add the alias, on array "*aliases*":

```php
'FinancialManager' => \BrunoCouty\FinancialManager\FinancialManagerFacade::class,
```

Add this line in your routes (in middleware 'auth'):

```php
Route::group(['middleware' => 'auth'], function () { // REQUIRED!
    FinancialManager::routes();
});
```

***IMPORTANT NOTE:*** This module uses the user's info to work, so use the middleware 'auth' is required.

## What "vendors" this module use?

- Bootstrap [http://getbootstrap.com/](http://getbootstrap.com/);
- Bootstrap DatePicker [https://github.com/uxsolutions/bootstrap-datepicker](https://github.com/uxsolutions/bootstrap-datepicker);
- Font Awesome [http://fontawesome.io/](http://fontawesome.io/);
- jQuery [https://jquery.com/](https://jquery.com/);


## Like this content? Pay me a coffee!

Yeah! You like of this package? Pay me a coffee and help me to keep this package updated!

When you are my support, you have access to **exclusive posts** with a lot that cool things about PHP, Laravel, AngularJS, VueJS, Ionic, and much more! You will see haw create your own PHP Packages, resolve mistakes on your code... The great content!

Help me with only $1 / month and you will have access to my private content! 
And more, you need help to code your project? I can help you! Access my [Patreon Profile](https://www.patreon.com/brunocouty), I can help you via e-mail or skype!

[https://www.patreon.com/brunocouty](https://www.patreon.com/brunocouty)