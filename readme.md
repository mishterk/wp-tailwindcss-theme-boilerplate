A minimalistic boilerplate for build WordPress themes using [Laravel Mix](https://laravel.com/docs/5.8/mix).

## Getting started:

1. Clone into an empty theme directory
1. `cd` into your new theme directory
1. Run `npm install`
1. Open up the `webpack.mix.js` file and replace `http://localhost/` with your local development hostname
  - This will allow you to use live reload/injection while working on your CSS/JS
  
### To Start Development

Run `npm run dev`

### To Prepare Assets for Deployment

Run `npm run prod`

## Versioned Assets

Versioned assets will appear in a `build` directory alongside a manifest file which is used while 
[enqueuing scripts and styles](https://github.com/mishterk/wp-laravel-mix-theme-boilerplate/blob/master/includes/scripts-and-styles.php).

