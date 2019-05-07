# laravelformbuilder

## Introduction
This is a simple form builder package. Which has only four types of input: (i) text, (ii)Checkbox, (iii)radio, (iv) dropdown.

## Installation

### Using Composer

```sh
composer require jaga/laravelformbuilder
```

Or manually by modifying `composer.json` file:

``` json
{
    "require": {
        "jaga/laravelformbuilder": "1.0.*"
    }
}
```

And run `composer install`

Then add Service provider to `config/app.php`

``` php
    'providers' => [
        // ...
        Jaga\LaravelFormBuilder\LaravelFormBuilderServiceProvider::class
    ]
```

And Facade (also in `config/app.php`)

``` php
    'aliases' => [
        // ...
        'Jforms' => Jaga\LaravelFormBuilder\Facades\Jforms::class
    ]

```
## Quick start

##### Input tag:
Just use this anywhere in your blade view as follows:
```
@include(“path.file-name”, [“data” => $data])
```
Where data is a key value array in the following structure:
```
$data = [
    “id” => “id1”,
    “classes => [“class1”, “class2”, … “classN”],
    “type” => “type”,
    “name” => “name”,
    “values” => [
        “prev_value” => “value” //(this is the previous posted value)
    ],
    “required” => true/false
];
```
