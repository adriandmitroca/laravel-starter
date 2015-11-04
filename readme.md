# Laravel Starter
This package helps to save few hours of boring work that is repetable almost in every single project following best possible practices and using modern tools.

## Differences from fresh Laravel installation
- Ships with must-have development dependencies:
 * [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper) - better PHPStorm autocompletion
 * [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar) - development debug console
 * [Former](https://github.com/formers/former) - make Boostrap forms without writing single HTML line using Facades
- PHPStorm project files are removed from Git
- Ready for FTP deployments using [git-ftp](https://github.com/git-ftp/git-ftp)
- Bower integration within `resources/assets`directory
- Models moved to `app/Models` directory
- Created and autoloaded `app/Http/helpers.php` file that includes 3 additional functions for toggling navigation links and e-mail obfuscation
- Ready to go [Laravel Elixir](http://laravel.com/docs/5.1/elixir) setup that includes assets from Bower, BrowserSync and asset versioning
- SASS resources with already created project structure that attaches [Bootstrap](http://getbootstrap.com/) and his most common variables
- Core views (auth, errors, flash messages) and their structure with Bootstrap styling

## Get this in a minute
1. Clone this repo:
`git clone https://github.com/adriandmitroca/laravel-starter.git`
2. Install project dependencies:
`composer install` &
`bower install ` & `npm install`
3. Create `.env` file with your configuration credentials.
4. Generate your application key `php artisan key:generate`
5. Set up your database schema just with example users `php artisan migrate:refresh --seed`
6. Compile all assets: `gulp`
7. Make your app: `gulp watch`

## Contribution
I am open minded to any idea or a direction this starter could go to. If you have any idea feel free to contact me or make pull request with your improvement.
