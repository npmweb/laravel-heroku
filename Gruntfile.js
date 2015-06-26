/**
 * Requires npm, which is part of node.js <http://nodejs.org/>
 * To run:
 *   npm install
 *   grunt
 */
module.exports = function(grunt) {

  require('load-grunt-tasks')(grunt); // npm install --save-dev load-grunt-tasks

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    paths: {
      sass: 'resources/assets/scss',
      css: 'public/includes/css'
    },

    sass: {
      options: {
        outputStyle: 'compressed'
      },
      dist: {
        files: {
          '<%= paths.css %>/dist/main.min.css':
            '<%= paths.sass %>/main.scss'
        }
      }
    }

  });

  grunt.registerTask('default', [
    'sass'
  ]);
}
