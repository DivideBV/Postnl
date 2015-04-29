module.exports = function(grunt) {
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    phpcs: {
      application: {
        src: ['src/']
      },
      options: {
        bin: 'vendor/bin/phpcs',
        extensions: 'php',
        ignore: '/node_modules,/vendor',
        standard: 'PSR2'
      }
    },
    phplint: {
      good: ['src/**/*.php'],
    },
    phpdocumentor: {
      dist: {
        options: {
          directory : './src/',
          target : 'docs'
        }
      }
    }
  });

  // PHP code linter.
  grunt.loadNpmTasks('grunt-phplint');
  grunt.registerTask('lint', ['phplint:good']);

  // PHP code sniffer.
  grunt.loadNpmTasks('grunt-phpcs');
  grunt.registerTask('cs', ['phpcs']);

  // PHP documentor.
  grunt.loadNpmTasks('grunt-phpdocumentor');
  grunt.registerTask('doc', ['phpdocumentor']);

  // Default task, running linter and codesniffer.
  grunt.registerTask('default', ['phplint:good', 'phpcs']);
};
