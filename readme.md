A boilerplate for WordPress theme development using [TailwindCSS](https://tailwindcss.com/) and [Laravel Mix](https://laravel.com/docs/5.8/mix).

## Getting started:

1. Clone into an empty theme directory
1. `cd` into your new theme directory
1. Run `npm install`
1. Duplicate the `local-example.json` file and rename to `local.json`, then replace the `proxy` value with your local 
development hostname
   - This will allow you to use live reload/injection while working on your CSS/JS
1. Run `npm run dev` and start coding
   
## Commands

#### `npm run dev`

Assets will be compiled and BrowserSync will proxy the dev host allowing you to work while seeing your CSS and JS changes appear on the site as they are recompiled.

#### `npm run webpack`

Runs the development build

#### `npm run prod`

Runs the product build which includes asset file versioning and Purge CSS 

## Versioned Assets

Versioned assets will appear in a `build` directory alongside a manifest file which is used while 
[enqueuing scripts and styles](https://github.com/mishterk/wp-laravel-mix-theme-boilerplate/blob/master/includes/scripts-and-styles.php).
This saves you the need to adjust version parameters on your assets and makes it possible to remove parameters on 
asset URLs without losing the ability to force those assets to update in browsers.

## Purge CSS

Purge CSS is pretty darn excellent and is used to strip out any CSS that isn't being used during the production build. 

It does this by looking through specified template files to work out which CSS selectors have been used. If it can't 
find a CSS rule being used in the templates, it removes it from the final CSS. 

See the `paths` option in the `mix.purgeCss()` invocation in `webpack.mix.js` for the file paths being looked at. 

### How to tell Purge CSS to ignore things

The easiest way is to delineate your CSS with comments as per the example below. See 
[whitelisting](https://www.purgecss.com/whitelisting) for more options.   

```css
/* purgecss start ignore */
h1 {
  color: blue;
}

h3 {
  color: green;
}
/* purgecss end ignore */
```

