/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    //Setting up slim
    slim: {
      dist: {
        options: {                       // Target options
        pretty: true
      },
        files: [{
          expand: true,
          cwd: 'slim',
          src: ['{,*/}*.slim'],
          dest: 'www',
          ext: '.html'
        }]
      }
    },
    compass: {
      dist: {
        options: {
          config: 'config.rb'
        }
      }
    },

    watch: {
      //Watching all the .slim files in the project
      slimfiles: {
      files: '{,*/}*.slim',
      tasks:['slim']
      },
      scssfiles: {
        files: '{,*/}*.scss',
        tasks:['compass']
      }
    }
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-slim');
  grunt.loadNpmTasks('grunt-contrib-compass');

  // Default task.
  grunt.registerTask('default', ['watch']);



};
