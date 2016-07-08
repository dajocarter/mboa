var gulp = require('gulp'),
  $ = require('gulp-load-plugins')(),
  merge = require('merge-stream'),
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
      base: './src/img/'
    })
    .pipe($.newer('./assets/img'))
    .pipe($.imagemin())
    .pipe(gulp.dest('./assets/img'))
    .pipe(browserSync.stream());
});

gulp.task('js', function() {
  var vendor = gulp.src([
    './bower_components/jquery/dist/jquery.js',
    './bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
    './bower_components/magnific-popup/dist/jquery.magnific-popup.js',
    './bower_components/firebase/firebase-debug.js'
  ]);
  var main = gulp.src([
    './src/js/main.js',
    './src/js/templates.js',
    './src/js/router.js',
    './src/js/filters.js',
    './src/js/directives/*.js',
    './src/js/controllers.js',
    './src/js/factories/*.js'
  ]);

  vendor
    .pipe($.newer('./assets/js'))
    .pipe($.concat('vendor.js'))
    .pipe($.uglify(false))
    .on('error', $.notify.onError({
      title: "Uglify Error:",
      message: "<%= error.message %>"
    }))
    .pipe($.rename({
      extname: '.min.js'
    }))
    .pipe(gulp.dest('./assets/js'))
    .pipe(browserSync.stream());
  main
    .pipe($.newer('./assets/js'))
    .pipe($.concat('main.js'))
    .pipe($.ngAnnotate({
      add: true
    }))
    .on('error', $.notify.onError({
      title: "ngAnnotate Error",
      message: "<%= error.message %>"
    }))
    .pipe($.uglify(false))
    .on('error', $.notify.onError({
      title: "Uglify Error:",
      message: "<%= error.message %>"
    }))
    .pipe($.rename({
      extname: '.min.js'
    }))
    .pipe(gulp.dest('./assets/js'))
    .pipe(browserSync.stream());

  return merge(vendor, main);
});

gulp.task('sass', function() {
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

gulp.task('templates', function() {
  return gulp.src('templates/**/*.html')
    .pipe($.htmlmin({
      removeComments: true,
      collapseWhitespace: true
    }))
    .pipe($.angularTemplatecache('templates.js', {
      module: 'mboa'
    }))
    .pipe(gulp.dest('./src/js'))
    .pipe(browserSync.stream());
});

gulp.task('watch', function() {
  gulp.watch(['./index.html']).on('change', browserSync.reload);
  gulp.watch(['./templates/**/*.html'], ['templates', 'js']);
  gulp.watch(['./src/img/*'], ['images']);
  gulp.watch(['./src/js/*.js'], ['js']);
  gulp.watch(['./src/scss/*.scss'], ['sass']);
});

gulp.task('browserSync', function() {
  browserSync.init({
    watchTask: true,
    server: {
      basedir: './'
    }
  });
});

gulp.task('default', ['browserSync', 'watch']);
