// gulpfile.js placeholder
// Based on previous configuration (BrowserSync + Sass + Babel)
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const babel = require('gulp-babel');
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const del = require('del');
const browserSync = require('browser-sync').create();
require('dotenv').config();

const paths = {
  scss: './assets/scss/**/*.scss',
  js: './assets/js/**/*.js',
  cssDist: './assets/dist/css',
  jsDist: './assets/dist/js'
};

// Sass compile
function styles() {
  return gulp.src('./assets/scss/main.scss')
    .pipe(plumber({ errorHandler: notify.onError('Sass Error: <%= error.message %>') }))
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.cssDist))
    .pipe(browserSync.stream());
}

// JS compile
function scripts() {
  return gulp.src('./assets/js/main.js')
    .pipe(plumber({ errorHandler: notify.onError('JS Error: <%= error.message %>') }))
    .pipe(sourcemaps.init())
    .pipe(babel({ presets: ['@babel/preset-env'] }))
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.jsDist))
    .pipe(browserSync.stream());
}

// Clean dist
function clean() {
  return del(['assets/dist/**/*']);
}

// BrowserSync
function serve() {
  browserSync.init({
    proxy: process.env.EVIGYM_WP_URL || 'http://evigym2.local',
    open: false,
    notify: false
  });
  gulp.watch(paths.scss, styles);
  gulp.watch(paths.js, scripts);
  gulp.watch('**/*.php').on('change', browserSync.reload);
}

exports.styles = styles;
exports.scripts = scripts;
exports.clean = clean;
exports.build = gulp.series(clean, gulp.parallel(styles, scripts));
exports.default = gulp.series(gulp.parallel(styles, scripts), serve);
