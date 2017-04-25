/* 

 Gulpfile for SASS -> CSS conversion, JS combination and minification of Bootstrap files and a custom theme.

 */

// Include Gulp
var gulp = require('gulp');

// Include Plugins
//var browserify = require('browserify');
var source = require('vinyl-source-stream');
var jshint = require('gulp-jshint');
var sass = require('gulp-ruby-sass');
var prefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minifycss = require('gulp-minify-css');
var size = require('gulp-size');
var bytediff = require('gulp-bytediff');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var jpegtran = require('imagemin-jpegtran');

// Copy the icon fonts to dist folder
gulp.task('copy_fonts', function () {
  gulp.src('frontend/fonts/**')
    .pipe(gulp.dest('public/fonts/bootstrap'));
});

gulp.task('optimize_images', function () {
    return gulp.src('frontend/img/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant(), jpegtran()]
        }))
        .pipe(gulp.dest('public/img'));
});

// Define Lint Task for JS
gulp.task('lint', function () {
  return gulp.src('frontend/js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

// Define a task for converting SASS files to CSS minifying and saving in dist/css folder:
gulp.task('sass', function () {
  return sass('frontend/sass/_bootstrap.scss')
    .pipe(prefixer('last 5 versions', 'ie 8'))
    .pipe(rename("styles.css"))
    .pipe(gulp.dest('public/css'))
    .pipe(bytediff.start())
    .pipe(minifycss())
    .pipe(rename("styles.min.css"))
    .pipe(gulp.dest('public/css'))
    .pipe(bytediff.stop());
});

// Concatenate & Minify JS
gulp.task('scripts', function () {
  return gulp.src([
    'frontend/js/transition.js',
    'frontend/js/alert.js',
    'frontend/js/button.js',
    'frontend/js/carousel.js',
    'frontend/js/collapse.js',
    'frontend/js/dropdown.js',
    'frontend/js/modal.js',
    'frontend/js/tooltip.js',
    'frontend/js/popover.js',
    'frontend/js/scrollspy.js',
    'frontend/js/tab.js',
    'frontend/js/affix.js',
    'frontend/js/stackblur.js',
    //'frontend/js/pushstream.js',
    'frontend/js/script.js'
  ])
    .pipe(concat('scripts.js'))
    .pipe(bytediff.start())
    .pipe(gulp.dest('public/js'))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('public/js'))
    .pipe(bytediff.stop());
});


// Define a task to watch changes in js and sass folders
gulp.task('watch', function () {
  gulp.watch('frontend/js/*.js', ['scripts']);
  gulp.watch(['frontend/sass/*.scss'], ['sass']);
});

// Define a default task
gulp.task('default', ['copy_fonts', 'optimize_images', 'sass', 'scripts','watch']);
//gulp.task('default', ['copy_fonts', 'sass', 'lint', 'scripts', 'build-ace', 'bro','scripts-admin','watch']);
