module.exports = function(grunt) {
    grunt.initConfig({
        clean: {
            build: ["build/*"],
            release: ["release/*"]
        },
        copy: {
            build: {
                expand: true,
                cwd: "source",
                src: ["**/*.html", "scripts/**/*.js", "images/**/*"],
                dest: "build/"
            }
        },
        sass: {
            build: {
                options: {
                    style: "expanded"
                },
                files: [{
                    expand: true,
                    cwd: "source",
                    src: "styles/main.scss",
                    dest: "build/",
                    ext: ".css"
                }]
            }
        },
        watch: {
            copy: {
                options: {
                    livereload: true
                },
                files: ["**/*.html", "scripts/**/*.js", "images/**/*"],
                tasks: ["copy:build"]
            },
            sass: {
                options: {
                    livereload: true
                },
                files: ["styles/**/*.scss"],
                tasks: ["sass:build"]
            }
        }
    });

    grunt.loadNpmTasks("grunt-contrib-clean");
    grunt.loadNpmTasks("grunt-contrib-copy");
    grunt.loadNpmTasks("grunt-contrib-sass");
    grunt.loadNpmTasks("grunt-contrib-watch");

    grunt.registerTask("build", ["clean:build", "copy:build", "sass:build"]);
    grunt.registerTask("dev", ["build", "watch"]);
};
