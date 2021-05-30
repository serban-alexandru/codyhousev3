# Curateship

## 1. Migrate all tables

php artisan migrate

## 2. Users and Admin module seeder

```
php artisan module:seed Users
```

This will seed all called classes at `Modules/Users/Database/Seeders/UsersDatabaseSeeder.php`.

Seed dummy users from factory

```
php artisan db:seed --class=Modules\\Users\\Database\\Seeders\\TestUsersSeeder
```

This will create dummy users specified on `Modules/Users/Database/Seeders/TestUsersSeeder.php`

## Settings seed

```
php artisan module:seed Admin 
```
This will add default settings content (logo, seo title data ) into settings table

## 3 Install modules
npm install
composer update

## 4. Login Using
admin@mailinator.com
helloworld

## 5. Run setup
1. php artisan serve
2. npm run gulp watch

----------------------------------

## Creating a Component

Components are reusable bits of code that function individually.

eg. create a Button

1. Run the following command
php artisan make:component Button
This command generates only two files:
- Button.php
- button.blade.phpButton.php

Button.php
- located at app/View/Components/Button.php.
- this is where you can put the logic of your component. This is a PHP class where you can manage the data of your component that you can pass on the view. The render method on this file is where the view file is called.

button.blade.php
- located at resources/views/components/button.blade.php.
- this is UI file of your component.

2. Displaying components
In displaying blade components, you have to prepend it withx- then the name of the blade file without the .blade.php extension.
eg. display the newly created Button component
In any view file of your Laravel project, you may call the button component with the following:
<x-button />
You may also display the component with:
<x-button></x-button>

3. Attributes
You may also add attributes on the component and access it on the component's class.
eg.
<x-button type="success">

Now on the Button.php class, you can access the "success" value on the contructor __construct() by specifying the attribute at parameter.
eg.
public function __construct($type) {
}

The $type variable has the value "success" on this case.

4. Passing data from component's class to the view of the component
To pass a value from a class to the view, you need to declare a class property inside the component's class.

eg.
public $button_type;
Now inside the __construct method, you can set this property.

eg.
public function __construct($type) {
    $this->button_type = $type;
}

5. Accessing component property on the view file
On the button.blade.php, you can access the button type with $button_type.

eg. content of resources/views/components/button.blade.php

<button class="{{ $button_type }}">This is a button</button>

Laravel's doc for more info https://laravel.com/docs/7.x/blade#components.

## Compiling scripts and SASS

"npm run gulp sass"
"npm run gulp scripts"


## Make components
php artisan make:component COMPONENT_NAME
    
## Server Installation
    
1. Log in to Plesk
2. Click on Git
3. Click Add repository
4. Enter the remote repository or using the SSH protocol.
5. Set destination directory.
6. Copy the generated SSH public key to your Git repository for read access only.
7. Click Ok
8. Once all files are deployed to production, copy .env.example file to .env and update all setting.
APP_ENV=production
APP_DEBUG=false
APP_URL:https://curateship.com
Also update DB setting and Mailer setting.
    
Step2: Configure Plesk
Log in to Plesk.
Click on Domains and navigate the domain to setup.
Click on Hosting Settings.
Change the Document root to the public folder in your app. Usually, this is httpdocs/public
Click OK.
    
Step3: Run commands for deployments
- php artisan migrate
- php artisan module:seed Users
- php artisan module:seed Admin
- Install modules
- composer update
- php artisan key:generate
- php artisan config:cache
- php artisan serve

