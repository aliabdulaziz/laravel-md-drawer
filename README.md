# laravel-email-verification
This Laravel package provides a simple drawer-based front-end layout.

## Requirements
- Laravel 5



## Screenshots
![Drawer Hidden](https://raw.githubusercontent.com/Aliabdulaziz/laravel-md-drawer/master/screenshots/01.PNG "Drawer is hidden")

![Drawer Button](https://raw.githubusercontent.com/Aliabdulaziz/laravel-md-drawer/master/screenshots/02.PNG "Drawer Button")

![Drawer Shown](https://raw.githubusercontent.com/Aliabdulaziz/laravel-md-drawer/master/screenshots/03.PNG "Drawer is shown")



## Installation 

### Install the package using composer


```shell
composer require aliabdulaziz/laravel-md-drawer
```

### Add the service provider (for Laravel < 5.5)

Go to: (Your Laravel App) --> config --> app.php

and add the following line under 'Package Service Providers' comment:

```php
Aliabdulaziz\LaravelMDDrawer\LaravelMDDrawerServiceProvider::class
```

### Publish views and asset files

```shell
php artisan vendor:publish --provider="Aliabdulaziz\LaravelMDDrawer\LaravelMDDrawerServiceProvider"
```



## Usage

use the package layout on your views:
```php
@extends('laravelmddrawer::app')
```

### example

```php
@extends('laravelmddrawer::app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```


## Customization

After publishing the package files, the package views will be located in:
(Your Laravel app) --> views --> vendor --> laravelmddrawer

these files are what you need to customize.

