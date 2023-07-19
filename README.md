# Press Wind

Minimal boilerplate theme for WordPress with PostCSS and Vite JS.

## 👉 [Complete documentation here](https://presswind-doc.wp-performance.com/)

## Dependencies
- [PostCSS](https://postcss.org/)
- [ViteJS](https://vitejs.dev/)

## Requirement
- Node JS (16)
- npm or yarn

## Quick Start
In the root of lineage-entertainmnet theme

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
