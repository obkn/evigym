# Evigym WordPress Theme (SCSS + Gulp + BrowserSync)

## Requirements
- Node.js (LTS)
- WordPress running locally (e.g., http://localhost:8000)

## Install
```bash
cd wp-content/themes/evigym-wp
npm install
```

## Develop (watch + BrowserSync)
```bash
# Optionally set your WP URL (default: http://localhost:8000)
# echo 'EVIGYM_WP_URL=http://your-site.local' > .env
npm run dev
```

## Build once
```bash
npm run build
```

## Move Laravel HTML
- Copy markup from Laravel's shared head/footer into `header.php` / `footer.php`
- Create page templates (e.g., `page-concept.php`) and paste the page HTML
- SCSS entry: `assets/scss/main.scss` → builds to `assets/dist/css/main.css`
- JS entry: `assets/js/main.js` → builds to `assets/dist/js/main.js`
