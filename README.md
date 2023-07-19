# Press Wind

Minimal boilerplate theme for WordPress with Tailwind CSS and Vite JS.

## 👉 [Complete documentation here](https://presswind-doc.wp-performance.com/)


## Concept

This theme is build for work with gutenberg.
It's thinked for use concept of pattern.
A example of pattern is in ```patterns``` directory.
The theme.json is used for the settings of theme.
The fonts pass by the new WP font loader. Not by CSS or TailwindCSS.

## PHP files

This theme has just the minimal php file.
With gutenberg blocks, it's normally sufficient


## Dependencies

- [PostCSS](https://postcss.org/)
- [TailwindCSS](https://tailwindcss.com/)
- [ViteJS](https://vitejs.dev/)


## Requirement

- Node JS (16)
- Npm or yarn


## Quick Start

In the root of press-wind theme

Install dependencies
```
npm i
```

In your ```wp-config.php``` file, add :
```
# for dev
define('WP_ENV', 'development');
# for production
define('WP_ENV', 'production');
```

### With Vitejs, you have a dev server include. When you change a file, the browser reload the page.

## Scripts

Launch dev mode
```
npm run dev
```

Build the assets
```
npm run build
```

Generate favicon

Add values in ```config/global.php``` file and run :

```
npm run favicon
```

## Enqueue Scripts and Styles

The script and the style are automatically enqueued in theme.
The "assets" code is in file : ```inc > assets.php```

## Disabled WP core functionality

In ```inc > disable.php```, lots of feature are disabled.
You can comment for not disable stuff for your project like you want.
