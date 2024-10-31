module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        uglify: {
            options: {
                report: 'min',
                sourceMap: function (path) {
                    return path.replace(/\.min\.js$/, ".map");
                },
                sourceMappingURL: function (path) {
                    return path.replace(/js\/(.+)\.min\.js$/, "$1.map");
                },
                sourceMapPrefix: 1,
            },

            dist: {
                files: {
                    'js/post-highlights.min.js': 'js/post-highlights.js',
                    'js/front-end.min.js': 'js/front-end.js',
                    'js/ph_settings.min.js': 'js/ph_settings.js',
                }
            }
        },
        
        watch: {
            scripts: {
                files: ['js/*.js'],
                tasks: ['uglify'],
                options: {
                    spawn: false,
                },
            } 
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    
    grunt.registerTask('default', ['watch']);
};
