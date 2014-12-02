module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            build: {
                src: 'src/<%= pkg.name %>.js',
                dest: 'build/<%= pkg.name %>.min.js'
            }
        },
        bower: {
            dev: {
                dest: 'public/',
                js_dest: 'public/js/',
                css_dest: 'public/css/',
                fonts_dest: 'public/fonts/',
                options: {
                    expand: true
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-bower');
    // Default task(s).
    grunt.registerTask('default', ['bower']);

};