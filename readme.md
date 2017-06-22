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

Run the migrations required:

```
php artisan migrate
```

## Configuration

You can custom the views and resources of this module. Publish the files:

```
php artisan vendor:publish
```

The files that will be published:

```
Copied Directory [/modules/brunocouty/financial-manager/src/resources/assets] To [/public/vendor/financial-manager]
Copied File [/modules/brunocouty/financial-manager/src/config/financial-manager.php] To [/config/financial-manager.php]
Copied Directory [/modules/brunocouty/financial-manager/src/resources/views] To [/resources/views]
Publishing complete.
```

There're important informations on configuration file "*/config/financial-manager.php*" to you set:

```
'google-key' => env('GOOGLE_KEY', ''), // Google API key - used for generate google charts
'https' => env('HTTPS_PROTOCOL', false), // Define if the protocol is "https" 
'theme' => 'default' // default, bootstrap, superhero, lumen, slate, amelia
```

***IMPORTANT NOTE:*** This module uses the user's info to work, so use the middleware 'auth' is required.

## What "vendors" this module use?

- Bootstrap [http://getbootstrap.com/](http://getbootstrap.com/);
- Bootstrap DatePicker [https://github.com/uxsolutions/bootstrap-datepicker](https://github.com/uxsolutions/bootstrap-datepicker);
- Font Awesome [http://fontawesome.io/](http://fontawesome.io/);
- jQuery [https://jquery.com/](https://jquery.com/);
- SweetAlert2 [https://limonte.github.io/sweetalert2/](https://limonte.github.io/sweetalert2/);


## Like this content? Pay me a coffee!

Yeah! You like of this package? Pay me a coffee and help me to keep this package updated!

When you are my support, you have access to **exclusive posts** with a lot that cool things about PHP, Laravel, AngularJS, VueJS, Ionic, and much more! You will see haw create your own PHP Packages, resolve mistakes on your code... The great content!

Help me with only $1 / month and you will have access to my private content! 
And more, you need help to code your project? I can help you! Access my [Patreon Profile](https://www.patreon.com/brunocouty), I can help you via e-mail or skype!

[https://www.patreon.com/brunocouty](https://www.patreon.com/brunocouty)