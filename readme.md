#Puppy package

## Quick start

### Required setup

In the `require` key of `composer.json` file add the following

```json
"bss-taiphung/bss_puppy": "dev-master"
```

Run the Composer update command

```bash
$ composer update
```

In your `config/app.php` add `'bss_taiphung\puppy\ServiceProviders\PuppyServiceProvider::class'` to the end of the `providers` array

```php
'providers' => array(
    ...
    'bss_taiphung\puppy\ServiceProviders\PuppyServiceProvider::class',

),
```

At the end of `config/app.php` add `'Puppy'  => bss_taiphung\puppy\Facades\PuppyFacade::class` to the `aliases` array

```php
'aliases' => array(

    ...
    'Puppy'  => bss_taiphung\puppy\Facades\PuppyFacade::class,

),
```

### Usage in detail

```php
Puppy::bark() => puppy is barking!
```

```php
Puppy::run() => puppy is running!
```