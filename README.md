# FormTool Skeleton

This skeleton will provide you a boost start with our [FormTool](https://github.com/iam-deep/form-tool) package, which is also a dependency for this package. This skeleton is based on Laravel 10.9.0, AdminLTE 2.x and pre-installed FormTool package.

*This package still under primary development.*

## Steps to Setup

### Step 1:
Download or clone this skeleton and set it up *(git command will only run if you have git installed)*
```
git clone https://github.com/iam-deep/form-tool-skeleton.git your-project-name
cd your-project-name
composer install
```

### Step 2:
Copy .env file and generate key, you can run this command in the root directory

```
cp .env.example .env
php artisan key:generate
```

### Step 3:
Copy the vendor config file only
```
php artisan vendor:publish --provider="Deep\FormTool\FormToolServiceProvider" --tag=config
```

### Step 4:
Create database and **setup the database connection** in the .env file

### Step 5:
Modify login email and password in "database\seeders\UserSeeder.php"<br>
Default credential:
> Email: `admin@gmail.com`
>
> Password: `form12345`

### Step 6:
Run the migration with seeder:
```
php artisan migrate --seed
```
Great! You are done now open your project.


## How to update the skeleton?
You need to manually update the files.
<!-- DON'T USE THE BELOW METHOD

You can just always download, copy and replace all the files.<br>
Here is a hacky way with the git clone process that will work from your project's root directory:

Windows:
```
git clone https://github.com/iam-deep/form-tool-skeleton.git temp
xcopy /e /c /y temp .
rmdir temp -Recurse -Force
```
Mac/Linux:
```
git clone https://github.com/iam-deep/form-tool-skeleton.git temp
mv -rf temp/.* ../
rm -rf temp
```
Here we are cloning this repository into a temp folder. Then coping/moving all the files into our project and then deleted the temp folder.
-->

## How to update the FormTool?
```
composer update iam-deep/form-tool
```

## What's modified from a fresh Laravel project?
- Modified "app/Providers/AppServiceProvider.php"
- Modified "app/Http/Controllers/Controller.php"
- Under "database" directory
  - Added "create_demo_pages_table" migration *(For demo purpose, you can delete this)*
  - Modified seeders/DatabaseSeeder.php
  - Added UserSeeder.php under "database/seeders"
  - Added UserGroupsSeeder.php under "database/seeders"
- Added Controllers:
  - Admin/ActionsLogController.php
  - Admin/AdminControllers.php
  - Admin/ChangePasswordController.php
  - Admin/DashboardController.php
  - Admin/DemoController.php *(For demo purpose, you can delete this)*
  - Admin/SettingsController.php
  - Admin/UserGroupsController.php
  - Admin/UsersController.php
- Added Models:
  - Admin/DemoModel.php *(For demo purpose, you can delete this)*
- Added Views:
  - admin/actions_log/index.blade.php
  - admin/actions_log/show.blade.php
  - admin/dashboard.blade.php
  - admin/user_groups_form.blade.php
- Added custom input type in "app/Http/InputTypes"
  - StatusType.php
  - YesNoCheckbox.php
- Modified "routes/web.php"
- Added assets under "public/assets" directory
- Modified README.md

## Disclaimer
This package is in early access.
Please do not use yet, or use it just for local development needs