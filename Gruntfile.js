module.exports = function(grunt) {
	require('load-grunt-tasks')(grunt);

	grunt.initConfig({

		htmlmin:
		{
			dist:
			{
				options: {
					removeComments: true,
					collapseWhitespace: true},
				files: {
					'dist/index.html': 'dist/index.html'
				}
			}
		},

		copy: {
			css: {
				cwd: 'src',
				src: 'assets/css/*.css',
				dest: 'dist/',
				expand: true
			},
			images: {
				cwd: 'src',
				src: 'assets/img/**/*',
				dest: 'dist/',
				expand: true
			},
			js: {
				cwd: 'src',
				src: 'assets/js/**/*',
				dest: 'dist/',
				expand: true
			},
			fonts: {
				cwd: 'node_modules/font-awesome/',
				src: 'fonts/**/*',
				dest: 'dist/assets/',
				expand: true
			},
			fonts_debug: {
				cwd: 'node_modules/font-awesome/',
				src: 'fonts/**/*',
				dest: 'src/assets/',
				expand: true
			}
		},

		useminPrepare: {
			html: 'dist/index.html'
		},

		usemin: {
			html: 'dist/index.html',
			options: {
				dest: 'dist'
			}
		},

		browserSync: {
			dev: {
				bsFiles: {
					src: [
						'src/assets/css/*.css',
						'src/*.html'
					]
				},
				options: {
					watchTask: true,
					server: {
						baseDir: './'
					}
				}
			}
		},

		watch: {
			sass: {
				files: 'assets/scss/**/*.scss',
				tasks: ['sass']
			}
		},

		clean: {
			dist: {
				src: ['dist', '.tmp']
			}
		},

		sass: {
			dist: {
				options: {
					style: 'expanded',
					sourcemap: 'file'
				},
				files: {
					'src/assets/css/style.css': 'src/assets/scss/style.scss'
				}
			}
		},

		replace: {
			html: {
				options: {
					patterns: [
						{
							match: /src="app/g,
							replacement: 'src="../.tmp/app'
						}
					]
				},
				files: [
					{expand: true, flatten: true, src: ['src/index.html'], dest: 'dist/'}
				]
			}
		},

		ngAnnotate: {
			options: {
				singleQuotes: true
			},
			app: {
				files: [{
					expand: true,
					cwd: 'src/app',
					src: '**/*.js',
					dest: '.tmp/app'
				}]
			}
		}

	});

	grunt.registerTask('default', ['debug']);

	grunt.registerTask('debug', [
		'sass',
		'copy:fonts_debug',
		'browserSync:dev',
		'watch'
	]);

	grunt.registerTask('build', [
		'clean:dist',
		'sass',
		'replace:html',
		'copy:css',
		'copy:js',
		'copy:images',
		'copy:fonts',
		'useminPrepare',
		'ngAnnotate:app',
		'concat:generated',
		'uglify:generated',
		'cssmin:generated',
		'usemin',
		'htmlmin'
	]);
};