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
If you have any question, please contact this email `jagabandhu020@gmail.com` and follow [Sample example codes](#sample-example-codes) section. 

##### Input tag:
Just use this anywhere in your blade view as follows:
```
@include(“jaga::form_input”, [“data” => $data])
```
Where data is a key value array in the following structure:
```
$data = [
    “id” => “id1”,
    “classes => [“class1”, “class2”, … “classN”],
    “type” => “text”,
    “name” => “name_input”,
    “values” => [
        “prev_value” => “value” //(this is the previous posted value)
    ],
    “required” => true/false
];
```
##### Select tag:
```
@include(“jaga::form_select”, [“data” => $data])
```
Where data is:
```
$data = [
    “id” => “select_id”,
    “classes => [“class1”, “class2”, … “classN”],
    “name” => “name”,
    “values” => [
        “value1” => “value1_name”,
        “value2” => “value2_name”,
        …
         “valueN” => “valueN_name”
    ],
    “active” => “valueX” or “null”,
    “required” => true/false
];
```
In the case of the active value being “null”, a default value has to be generated and put at the top of the options list, otherwise the “active” value is to be placed at the top of the options list.

##### Radio
```
@include(“jaga::form_radio”, [“data” => $data])
```
Where data is:
```
$data = [
    “classes => [“class1”, “class2”, … “classN”],
    “name” => “name”,
    “values” => [
        “value1” => “value1_name”,
        “value2” => “value2_name”,
        …
         “valueN” => “valueN_name”
    ],
    “active” => “valueX” or “null”
];
```
In the case of the active value not being “null”, the active value has to be selected.

##### Checkbox
```
@include(“jaga::form_checkbox”, [“data” => $data])
```
Where data is:
```
$data = [
    “id” => “id1”,
    “classes => [“class1”, “class2”, … “classN”],
    “name” => “name”,
    “values” => [
        “value1” => “value1_name”,
        “value2” => “value2_name”,
        …
         “valueN” => “valueN_name”
    ]
];
```
### Sample example codes
Use these sample codes in anywhere in your view file:
```
<!-- package test form starts-->
<form action="" method="get">

<?php
$data = [            
    "id" => "input_id",
    "classes" => ["class1", "class2"],
    "type" => "text",
    "name" => "name_input",
    "values" => [
        "prev_value" => "Sujon"
    ],
    "required" => true
];
?>
@include('jaga::form_input', ["data"=>$data])
<hr />
<?php
$data = [
    "id" => "select_id",
    "classes" => ["class1", "class2"],
    "name" => "name_select",
    "values" => [
        "value1" => "value1_name",
        "value2" => "value2_name"
    ],
    "active" => "value2",
    "required" => true
];
?>
@include('jaga::form_select', ["data"=>$data])
<hr />
<?php
$data = [
    "id" => "radio_id",
    "classes" => ["class1", "class2"],
    "name" => "name_radio",
    "values" => [
        "value1" => "value1_name",
        "value2" => "value2_name"
    ],
    "active" => "value2"
];
?>
@include('jaga::form_radio', $data)
<hr />
<?php
$data = [
    "id" => "checkbox_id",
    "classes" => ["class1", "class2"],
    "name" => "name_checkbox",
    "values" => [
        "value1" => "value1_name",
        "value2" => "value2_name"
    ]
];
?>
@include('jaga::form_checkbox', ["data"=>$data])
<hr />
</form>
<!-- package test form ends-->
```
```
Thank you for stay with me.
