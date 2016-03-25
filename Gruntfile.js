module.exports = function(grunt) {
	grunt.initConfig({		
		htmlmin:
		{
			dist:
			{
				options: {removeComments: true,	collapseWhitespace: true},
				files:
				{
					'build/index.php': 'build/index.php'
				}
			}
		},
		copy: {
			main: {
				cwd: 'src/',
				src: '**',
				dest: 'build/',
				expand: true
			}
		}, 
		useref:
		{
				html: 'build/**/*.php',
				temp: 'build'
		},
		
		clean:
		[
			'build/js/3rd', 
			'build/js', 
			'build/css'
		]
	});

	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-htmlmin');
	grunt.loadNpmTasks('grunt-useref');
	grunt.loadNpmTasks('grunt-contrib-clean');

	grunt.registerTask('generate-site', ['copy', 'useref', 'concat', 'uglify', 'cssmin', 'htmlmin', 'clean']);
};