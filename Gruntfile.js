'use strict';

module.exports = function(grunt) {

    grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		imagemin: {
			dynamic: {
				files: [{
				    expand: true,
				    cwd: 'src/img',
				    src: ['*.png', '*.jpg', '*.jpeg'],
				    dest: 'assets/img'
			    }]
			}
		},
		concat: {	
			js: {
				options: {
					separator: ';'
				},
				src: ['src/js/vendor/*.min.js', 'src/js/imports.js', 'src/js/main.js'],
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
		            'src/css/custom-grid.css':'src/scss/custom-grid.scss',
		            'src/css/main.css':'src/scss/main.scss'
		        }
		    }
		},
		autoprefixer: {
			options: {
				browsers: ['last 4 versions', 'Firefox ESR', 'Opera 12.1']
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
		    	files: ['src/img/*.png', 'src/img/*.jpg', 'src/img/*.jpeg'],
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
		        tasks: ['sass:dev', 'autoprefixer:no_dest', 'cssmin:target']
		    }
		}
    });
    
    grunt.loadNpmTasks('grunt-newer');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');
    
    grunt.registerTask('default', ['watch']);

};