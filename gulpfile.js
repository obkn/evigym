require('dotenv').config();

const { src, dest, watch, series, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const sourcemaps = require('gulp-sourcemaps');
const rename = require('gulp-rename');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const concat = require('gulp-concat');
const del = require('del');
const browserSync = require('browser-sync').create();

const paths = {
  scss: 'assets/scss/**/*.scss',
  js: 'assets/js/**/*.js',
  cssOut: 'assets/dist/css',
  jsOut: 'assets/dist/js'
};

function clean() {
  return del(['assets/dist']);
}

function styles() {
  return src('assets/scss/main.scss')
    .pipe(plumber({ errorHandler: notify.onError('SCSS Error: <%= error.message %>') }))
    .pipe(sourcemaps.init())
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(postcss([autoprefixer()]))
    .pipe(dest(paths.cssOut))
    .pipe(postcss([cssnano()]))
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('.'))
    .pipe(dest(paths.cssOut))
    .pipe(browserSync.stream());
}

function scripts() {
  return src(['assets/js/main.js'])
    .pipe(plumber({ errorHandler: notify.onError('JS Error: <%= error.message %>') }))
    .pipe(sourcemaps.init())
    .pipe(babel({ presets: ['@babel/preset-env'] }))
    .pipe(concat('main.js'))
    .pipe(dest(paths.jsOut))
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('.'))
    .pipe(dest(paths.jsOut))
    .pipe(browserSync.stream());
}

function serve() {
  browserSync.init({
    proxy: process.env.EVIGYM_WP_URL || 'http://localhost:8000',
    open: false,
    notify: false,
    files: ['**/*.php']
  });
  watch(paths.scss, styles);
  watch(paths.js, scripts);
  watch(['**/*.php']).on('change', browserSync.reload);
}

exports.clean = clean;
exports.styles = styles;
exports.scripts = scripts;
exports.build = series(clean, parallel(styles, scripts));
exports.default = series(exports.build, serve);
