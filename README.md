# Using-drupal

**The Drupal 8.7 installation that works with [Gatsby's using-drupal example](https://github.com/gatsbyjs/gatsby/tree/master/examples/using-drupal).**

This Drupal installation includes:

- The `demo_umami` install profile with English and Spanish content.
- The core JSON:API module installed.
- The contrib GraphQL 3.x module installed.

This repo is the source code that powers the web server at [https://using-drupal.amazee.io](https://using-drupal.amazee.io/).

## Endpoints

The JSON:API endpoint is available at `/jsonapi`.

The GraphQL endpoint is available at `/graphql`.

## Setting up your own server

You can use this source code to run your own copy of the web server.

#### Prerequisites

1. Install the [Drush launcher](https://github.com/drush-ops/drush-launcher). Alternatively, when the installation instructions say to run `drush`, run `./vendor/bin/drush` instead.
2. Install [Composer](https://getcomposer.org/).

#### Drupal install

1. Clone this Git repository.
2. Go into the `backup` folder and copy the `files` folder to `web/sites/default`. i.e. The copy of the folder will now be located at `web/sites/default/files`.
3. Setup the Drupal install with `composer install`
4. Start the Drupal site with `drush serve`
5. Optionally, `drush uli --uri http://127.0.0.1:8888` will load the site in your browser and log you in as admin.
