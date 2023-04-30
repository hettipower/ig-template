module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dist: {
        options: {                       // Target options
          style: 'expanded'
        },
      	files: {
      		'css/main.css' : 'scss/main.scss',
      	}
      }
    },
    watch: {
    	css: {
    		files: 'scss/**/*.scss',
    		tasks: ['sass', 'autoprefixer']
    	}
    },
    autoprefixer: {
      options: {
        browsers: ['last 2 version', 'ie 8', 'ie 9']
      },
      single_file: {
        src: 'css/main.css',
        dest: 'theme.css'
      },
    }
  });
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.registerTask('default',['watch', 'autoprefixer','uglify']);
}