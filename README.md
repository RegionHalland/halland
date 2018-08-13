# Halland 🍲

Halland is a Wordpress theme based on [Sage](https://github.com/roots/sage). Halland is the starting point of websites built by Region Halland.

## Requirements

* [WordPress](https://wordpress.org/) >= 4.7
* [PHP](http://php.net/manual/en/install.php) >= 7.0
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 6.9.x
* [Yarn](https://yarnpkg.com/en/docs/install)

## Getting started

Clone this repository into the themes directory of [your Wordpress installation](https://github.com/RegionHalland/wordpress-boilerplate) and install dependencies:

1. Clone Halland into your themes directory and install dependencies:

```sh
$ cd <your site>/web/app/themes/
$ git clone https://github.com/RegionHalland/halland.git
$ cd halland
$ composer install && yarn
```

2. Update `resources/assets/config.json` settings:

- `devUrl` should reflect your local development hostname, for example `http://site.test`
- `publicPath` should reflect your WordPress directory structure (`/web/app/themes/halland` or `/wp-content/themes/halland` for non-[Bedrock](https://roots.io/bedrock/) installs)

3. Build commands

* `yarn start` — Compile assets when file changes are made, start Browsersync session
* `yarn build` — Compile and optimize the files in your assets directory
* `yarn build:production` — Compile assets for production

## Styleguide

Halland uses classes and component from our [styleguide](https://github.com/regionhalland/styleguide) by looking for the environment variable `COMPONENT_LIBRARY_URI`. If the variable can't be found, Halland uses the styleguide published on [Github Pages](https://regionhalland.github.io/styleguide).

If you get a CORS related error, allow requests by adding the following headers to your *local* version of the styleguide: 

1. SSH into your [Homestead](https://laravel.com/docs/5.6/homestead) server and edit the styleguides nginx config:

```sh
$ cd ~/Homestead
$ homestead ssh
$ sudo nano /etc/nginx/sites-enabled/styleguide.test
```

2. Place the headers in the server block of the nginx config, ie `/etc/nginx/sites-enabled/styleguide.test`:

```nginx
# Allow CORS
add_header 'Access-Control-Allow-Origin' '*' always;
add_header 'Access-Control-Allow-Credentials' 'true' always;
add_header 'Access-Control-Allow-Methods' 'GET, POST, PUT, DELETE, OPTIONS' always;
add_header 'Access-Control-Allow-Headers' 'Accept,Authorization,Cache-Control,Content-Type,DNT,If-Modified-Since,Keep-Alive,Origin,User-Agent,X-Requested-With' always;
```

3. Reload the nginx config.
```sh
$ sudo service nginx reload
```

## ACF Fields

Halland uses [Advanced Custom Fields](https://www.advancedcustomfields.com/) to create custom fields.

The field definitions can be imported manually from the Wordpress admin interface, but in [Vårdgivarwebben](https://github.com/regionhalland/vardgivare.regionhalland.se) we import them automatically using [ACF Export Manager](https://github.com/helsingborg-stad/acf-export-manager/).

### Register new fields

1. Start by 



## Halland as a parent theme

WIP

## Theme structure

The theme mostly follow the [Sage](https://roots.io/sage/docs/theme-installation/) structure, check out their docs to get a better understanding of how things are structured.

```shell
themes/halland/           # → Root
├── app/                  # → Theme PHP
│   ├── Acf/              # → ACF Fields
│   ├── controllers/      # → Controller files
│   ├── Theme/            # → Enqueue files, register sidebars
│   ├── Traits/           # → Traits used in the theme
│   ├── admin.php         # → Theme customizer setup
│   ├── filters.php       # → Theme filters
│   ├── helpers.php       # → Helper functions
│   └── setup.php         # → Theme setup
├── composer.json         # → Autoloading for `app/` files
├── composer.lock         # → Composer lock file (never edit)
├── dist/                 # → Built theme assets (never edit)
├── node_modules/         # → Node.js packages (never edit)
├── package.json          # → Node.js dependencies and scripts
├── resources/            # → Theme assets and templates
│   ├── assets/           # → Front-end assets
│   │   ├── config.json   # → Settings for compiled assets
│   │   ├── build/        # → Webpack and ESLint config
│   │   ├── fonts/        # → Theme fonts
│   │   ├── images/       # → Theme images
│   │   ├── scripts/      # → Theme JS
│   │   └── styles/       # → Theme stylesheets
│   ├── functions.php     # → Composer autoloader, theme includes
│   ├── index.php         # → Never manually edit
│   ├── screenshot.png    # → Theme screenshot for WP admin
│   ├── style.css         # → Theme meta information
│   └── views/            # → Theme templates
│       ├── layouts/      # → Base templates
│       └── partials/     # → Partial templates
└── vendor/               # → Composer packages (never edit)
```
