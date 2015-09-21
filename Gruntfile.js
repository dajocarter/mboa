'use strict';

module.exports = function(grunt) {

  require('time-grunt')(grunt);
  require('jit-grunt')(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    imagemin: {
      dynamic: {
        files: [{
            expand: true,
            cwd: 'src/img',
            src: ['*.png', '*.jpg', '*.jpeg', '*.gif'],
            dest: 'assets/img'
          }]
      }
    },
    concat: { 
      js: {
        options: {
          separator: ';'
        },
        src: ['src/js/vendor/jquery.min.js', 'src/js/vendor/bootstrap.min.js', 'src/js/vendor/jquery.magnific-popup.min.js', 'src/js/main.js'],
        /* add any js file directories here, but keep main.js last */
        dest: 'src/js/concat/main.js'
      }
    },
    uglify: {
      options: {
        mangle: false
      },
      js: {
        files: {
          'assets/js/main.min.js': ['src/js/concat/main.js']
        }
      }
    },
    sass: {
        dev: {
            options: {
                style: 'compressed'
            },
            files: {
                'src/css/imports.css':'src/scss/imports.scss',
                'src/css/main.css':'src/scss/main.scss'
            }
        }
    },
    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer-core')({browsers: ['last 4 versions', 'Firefox ESR', 'Opera 12.1']})
        ]
      },
      no_dest: {
        src: 'src/css/*.css'
      }
    },
    cssmin: {
      target: {
        files: [{
            expand: true,
            cwd: 'src/css',
            src: ['*.css', '!*.min.css'],
            dest: 'assets/css',
            ext: '.min.css'
          }]
      }
    },
    watch: {
        images: {
          files: ['src/img/*.png', 'src/img/*.jpg', 'src/img/*.jpeg', 'src/img/*.gif'],
          options: {
            atBegin: true,
            livereload: true
          },
          tasks: ['newer:imagemin:dynamic']
        },
        js: {
          files: ['src/js/*.js'],
          options: {
            atBegin: true,
            livereload: true
          },
          tasks: ['concat:js', 'uglify:js']
        },
        css: {
            files: 'src/scss/*.scss',
            options: {
              atBegin: true,
              livereload: true
            },
            tasks: ['sass:dev', 'postcss:no_dest', 'cssmin:target']
        }
    }
  });
    
  grunt.registerTask('default', ['watch']);
};