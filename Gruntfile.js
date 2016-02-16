'use strict';

module.exports = function(grunt) {

    // Load grunt tasks automatically
    require('load-grunt-tasks')(grunt);

    // Time how long tasks take. Can help when optimizing build times
    require('time-grunt')(grunt);

    grunt.initConfig({

        yeoman: {
            // Configurable paths
            app: 'wordpress/wp-content/themes/base',
            dist: 'dist'
        },

        watch: {
            js: {
                files: ['<%= yeoman.app %>/js/{,*/}*.js'],
                options: {
                    livereload: true
                }
            },
            sass: {
                files: ['<%= yeoman.app %>/*.scss', '<%= yeoman.app %>/css/{,*/}*.{scss,sass}'],
                tasks: ['sass:dev'],
                options: {
                    livereload: false
                }
            },
            styles: {
                files: ['<%= yeoman.app %>/css/{,*/}*.css'],
                tasks: ['autoprefixer'],
                options: {
                    livereload: true
                }
            }
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src: [
                        '<%= yeoman.app %>/**/*.php',
                        '<%= yeoman.app %>/css/*.css',
                        '<%= yeoman.app %>/js/{,*/}*.js'
                        ]
                },
                options: {
                    proxy: '127.0.0.1:9000', //our PHP server
                    port: 8080, // our new port
                    open: true,
                    watchTask: true
                }
            },
            vagrant: {
                bsFiles: {
                    src: [
                        '<%= yeoman.app %>/**/*.php',
                        '<%= yeoman.app %>/css/*.css',
                        '<%= yeoman.app %>/js/{,*/}*.js'
                        ]
                },
                options: {
                    proxy: 'localhost:8080', //localhost
                    port: 8085, // our new port - which is where vagrant is
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
                    '<%= yeoman.app %>/css/style.css': '<%= yeoman.app %>/css/style.scss'
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
    grunt.registerTask('mamp', ['php', 'browserSync', 'watch']);
    grunt.registerTask('vagrant', ['browserSync:vagrant', 'watch']);
};
