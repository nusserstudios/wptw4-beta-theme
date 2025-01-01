# Introduction

balefire is a minimal boilerplate theme for WordPress using [TailwindCSS Version 4 (Beta)](https://tailwindcss.com/docs/v4-beta).

## Getting started

### Using the installer

This theme uses the ESBuild version of balefire-tailwind.

Once your theme is ready, don't forget to cd into the directory.

You will be asked if you would like to have WordPress installed as well. Keep in mind that you still need a local development environment for PHP and MySQL.

### Regular method

* Clone repo `git clone git@github.com:nusserstudios/balefire-tailwind.git && cd balefire`
* Install PNPM `curl -fsSL https://get.pnpm.io/install.sh | sh -` more info [here](https://pnpm.io/)
* Run `rm -rf .git` to remove git (or `rmdir .git` for Windows)
* Run `pnpm i` to install dependencies (Set ZSH alias for pnpm alias pn="pnpm")
* Run `pnpm i` or `pn i` to install dependencies
* Run `pnpm production` or `pn production` to start developing
* Run `pnpm build` or `pn build` to run production build

### General

Production files are located in the `/dist` folder.

You will find the editable CSS and Javascript files within the `/assets` folder. SRC is where the build files are output to, if you change these, then the when you run `bun build` these files are recompiled, and your changes will be overwritten.

Before you use your theme in production, make sure you run `bun build`.

## NPM Scripts

Several NPM scripts are available in package.json under "scripts". Run these scripts using npm run script-name:

* build:css: Compiles Tailwind CSS from ./src/css/main.css to ./dist/css/app.css using the Tailwind CLI.
* watch: Watches for changes in your CSS files and recompiles Tailwind CSS automatically. Uses the same input/output paths as build:css.
* build:js: Builds your JavaScript using Vite's production configuration.
* build: Shorthand script that runs the CSS build process only (build:css).
* dev: Development mode that watches for CSS changes (watch:css).
* production: Full production build that compiles both CSS and JavaScript by running build:css and build:js sequentially.
* preview: Starts Vite's preview server to test your production build locally.

Each script can be executed through the terminal using npm run script-name (e.g., npm run dev for development mode).

## Block editor support

Block editor comes with support for the [block editor](https://wordpress.org/support/article/wordpress-editor/).

A basic setup for `theme.json` is included. This also means that you need to at least use WordPress 5.8.

To make the editing experience within the block editor more in line with the front end styling, a `editor-style.css` is generated.

### Define theme colors and font sizes

Several colors and font sizes are defined from the beginning. You can modify them in `theme.json`.

## Links

* [Tailwind CSS Documentation](https://tailwindcss.com/docs)

## License

MIT. Please see the [License File](/license) for more information.
