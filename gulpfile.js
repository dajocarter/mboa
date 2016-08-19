var gulp = require('gulp'),
  $ = require('gulp-load-plugins')(),
  merge = require('merge-stream'),
  browserSync = require('browser-sync').create();

var AUTOPREFIXER_BROWSERS = [
  "Android 2.3",
  "Android >= 4",
  "Chrome >= 20",
  "Firefox >= 24",
  "Explorer >= 8",
  "iOS >= 6",
  "Opera >= 12",
  "Safari >= 6"
];

gulp.task('images', function() {
  return gulp.src(['./src/img/*.{png,PNG,jpg,JPG,jpeg,JPEG,gif,GIF}'], {
      base: './src/img/'
    })
    .pipe($.newer('./dist/assets/img'))
    .pipe($.imagemin())
    .pipe(gulp.dest('./dist/assets/img'))
    .pipe(browserSync.stream());
});

gulp.task('icons', function() {
  return gulp.src(['./bower_components/Ionicons/fonts/*'])
  .pipe($.newer('./dist/assets/fonts'))
  .pipe(gulp.dest('./dist/assets/fonts'))
});

gulp.task('js', function() {
  var vendor = gulp.src([
    './node_modules/angular/angular.js',
    './node_modules/angular-ui-router/release/angular-ui-router.js',
    './node_modules/angular-animate/angular-animate.js',
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
    .pipe($.newer('./dist/assets/js'))
    .pipe($.concat('vendor.min.js'))
    .pipe(gulp.dest('./dist/assets/js'))
    .pipe(browserSync.stream());
  main
    .pipe($.newer('./dist/assets/js'))
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
    .pipe(gulp.dest('./dist/assets/js'))
    .pipe(browserSync.stream());

  return merge(vendor, main);
});

gulp.task('sass', function() {
  return gulp.src([
      './bower_components/bootstrap-sass-official/assets/stylesheets/bootstrap.scss',
      './bower_components/ionicons/scss/ionicons.scss',
      './bower_components/magnific-popup/dist/magnific-popup.css',
      './bower_components/animate-sass/_animate.scss',
      './src/scss/main.scss'
    ])
    .pipe($.sourcemaps.init())
    .pipe($.sass().on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: AUTOPREFIXER_BROWSERS
    }))
    .pipe($.concat('main.css'))
    //.pipe($.cssnano())
    .pipe($.rename({
      extname: '.min.css'
    }))
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest('./dist/assets/css'))
    .pipe(browserSync.stream());
});

gulp.task('templates', function() {
  return gulp.src('./dist/templates/**/*.html')
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
  gulp.watch(['./dist/index.html']).on('change', browserSync.reload);
  gulp.watch(['./dist/templates/**/*.html'], ['templates', 'js']);
  gulp.watch(['./src/img/*'], ['images']);
  gulp.watch(['./src/js/*.js'], ['js']);
  gulp.watch(['./src/scss/*.scss'], ['sass']);
});

gulp.task('browserSync', function() {
  browserSync.init({
    watchTask: true,
    server: 'dist'
  });
});

gulp.task('build', ['templates', 'js', 'sass', 'images', 'icons']);

gulp.task('default', ['build', 'browserSync', 'watch']);
