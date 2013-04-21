# Flyswatter Issue Tracker Bunder

A laravel bundle to add an issue tracker to your app

## Installation

### 1 - Install Bundle Files

Copy the `flyswatter` folder into your `bundles` directory.

### 2 - Register the Bundle

In /app/bundles.php, add the following:

```php
return array(

	/* Other bundles registrations... */

	'flyswatter' => array('handles' => 'issues'),

);
```

### 3 - Run the Bundle Migrations

If you haven't run any migrations yet, initialize the migrations table:

`php artisan migrate:install`

Next, run the following:

`php artisan migrate flyswatter`

### 4 - Publish the bundle assets

Run the following to publish flyswatter's assets:

`php artisan bundle:publish flyswatter`

