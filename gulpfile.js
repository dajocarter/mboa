var gulp = require('gulp'),
  $ = require('gulp-load-plugins')(),
  browserSync = require('browser-sync').create();

var AUTOPREFIXER_BROWSERS = [
  'ie >= 10',
  'ie_mob >= 10',
  'ff >= 30',
  'chrome >= 34',
  'safari >= 7',
  'opera >= 23',
  'ios >= 7',
  'android >= 4.4',
  'bb >= 10'
];

gulp.task('images', function() {
  return gulp.src(['./src/img/*.{png,PNG,jpg,JPG,jpeg,JPEG,gif,GIF}'], {
      base: '.'
    })
    .pipe($.newer('./src/img'))
    .pipe($.imagemin())
    .pipe(gulp.dest('./assets/img'))
    .pipe(browserSync.stream());
});

gulp.task('javascript', function() {
  return gulp.src(['./src/js/vendor/jquery.min.js', './src/js/vendor/bootstrap.min.js', './src/js/vendor/jquery.magnific-popup.min.js', './src/js/vendor/velocity.min.js', './src/js/vendor/firebase.js', './src/js/main.js'])
    .pipe($.concat('main.js'))
    .pipe($.uglify(false))
    .pipe($.rename('main.min.js'))
    .pipe(gulp.dest('assets/js'))
    .pipe(browserSync.stream());
});

gulp.task('styles', function() {
  return gulp.src(['./src/scss/main.scss'])
    .pipe($.sourcemaps.init())
    .pipe($.sass().on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: AUTOPREFIXER_BROWSERS
    }))
    .pipe($.cssnano())
    .pipe($.rename('main.min.css'))
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest('./assets/css'))
    .pipe(browserSync.stream());
});

gulp.task('watch', function() {
  gulp.watch(['./A550/*.php', './A560/**/*.php']).on('change', browserSync.reload);
  gulp.watch(['./src/img/*'], ['images']);
  gulp.watch(['./src/js/*.js'], ['javascript']);
  gulp.watch(['./src/scss/*.scss'], ['styles']);
});

gulp.task('browserSync', function() {
  browserSync.init({
    watchTask: true
  });
});

gulp.task('default', ['browserSync', 'watch']);