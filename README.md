# Press Wind

Minimal boilerplate theme for WordPress with PostCSS and Vite.

## 👉 [Complete documentation here](https://presswind-doc.wp-performance.com/)

## Dependencies
- [PostCSS](https://postcss.org/)
- [Vite](https://vitejs.dev/)

## Requirement
- Node JS (16)
- npm or yarn

## Quick Start
In the root of lineage-entertainment theme

Install dependencies
```
npm i
```

In your ```wp-config.php``` file, add:
```
# for dev
define('WP_ENV', 'development');
# for production
define('WP_ENV', 'production');
```

### With Vite you have a dev server included. When you change a file the browser reloads the page.

## Scripts

**Launch dev mode**
```
npm run dev
```

**Build the assets**
```
npm run build
```

**Generate favicon**

Add values in ```config/global.php``` file and run:

```
npm run favicon
```

## Enqueue Scripts and Styles
The script and the style are automatically enqueued in theme.
The "assets" code is in file : ```inc > assets.php```

## Disabled WP core functionality
In ```inc > disable.php```, lots of feature are disabled.
You can modify these as you like.
