'use strict';

module.exports = function(grunt) {

    // Load grunt tasks automatically
    require('load-grunt-tasks')(grunt);

    // Time how long tasks take. Can help when optimizing build times
    require('time-grunt')(grunt);

    grunt.initConfig({

        yeoman: {
            // Configurable paths
            app: 'wordpress/wp-content/themes/hilton',
            dist: 'dist'
        },

        watch: {
            js: {
                files: ['<%= yeoman.app %>/js/{,*/}*.js'],
                options: {
                    livereload: true
                }
            },
            php: {
                files: ['<%= yeoman.app %>/**/*.php'],
                options: {
                    livereload: true
                }
            },
            sass: {
                files: ['<%= yeoman.app %>/*.scss', '<%= yeoman.app %>/styles/{,*/}*.{scss,sass}'],
                tasks: ['sass:dev'],
                options: {
                    livereload: false
                }
            },
            styles: {
                files: ['<%= yeoman.app %>/styles/{,*/}*.css'],
                tasks: ['autoprefixer'],
                options: {
                    livereload: true
                }
            }
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src: '<%= yeoman.app %>/*.php'
                },
                options: {
                    proxy: '127.0.0.1:9000', //our PHP server
                    port: 8080, // our new port
                    open: true,
                    watchTask: true
                }
            }
        },
        php: {
            dev: {
                options: {
                    port: 9000,
                    base: 'wordpress',
                    bin: '/Applications/MAMP/bin/php/php5.6.10/bin/php'
                }
            }
        },
        // Grunt-SASS
        sass: {
            dev: {
                files: {
                    '<%= yeoman.app %>/styles/style.css': '<%= yeoman.app %>/styles/style.scss'
                },
                options: {
                    outputStyle: 'compressed'
                }
            }
        },
        // Add vendor prefixed styles
        autoprefixer: {
            options: {
                browsers: ['last 3 versions', 'Firefox >= 27']
            },
            dev: {
                files: [{
                    expand: true,
                    cwd: '<%= yeoman.app %>',
                    src: '{,*/}*.css',
                    dest: '<%= yeoman.app %>'
                }]
            }

        }
    });

    grunt.registerTask('default', ['php', 'browserSync', 'watch']);
};
