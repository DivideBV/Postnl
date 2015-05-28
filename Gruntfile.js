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
    },
    exec: {
      apigen: 'vendor/apigen/apigen/bin/apigen generate -s src/ -d docs/ --template-theme=bootstrap'
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
  grunt.registerTask('phpdoc', ['phpdocumentor']);

  // Apigen
  grunt.loadNpmTasks('grunt-exec');
  grunt.registerTask('doc', ['exec:apigen']);

  // Default task, running linter and codesniffer.
  grunt.registerTask('default', ['phplint:good', 'phpcs']);
};
