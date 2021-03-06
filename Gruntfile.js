module.exports = function(grunt) {
    grunt.initConfig({
        clean: {
            build: ["build/*", "!build/adm/resources"],
            release: ["release/*"]
        },
        copy: {
            build: {
                expand: true,
                cwd: "source",
                src: ["**/*.html", "**/*.php", "**/*.pdf", "scripts/**/*.js", "images/**/*", "documents/**/*", "**/.htaccess"],
                dest: "build/"
            },
            bower: {
                expand: true,
                cwd: "bower_components",
                src: ["**/*"],
                dest: "build/lib"
            },
            extlib: {
                expand: true,
                cwd: "extlib",
                src: ["**/*"],
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
                files: ["source/**/*.html", "source/**/*.php", "source/scripts/**/*.js", "source/images/**/*"],
                tasks: ["copy:build"]
            },
            copy_bower: {
                options: {
                    livereload: true
                },
                files: ["bower_components/**/*"],
                tasks: ["copy:bower"]
            },
            copy_extlib: {
                options: {
                    livereload: true
                },
                files: ["extlib/**/*"],
                tasks: ["copy:extlib"]
            },
            sass: {
                options: {
                    livereload: true
                },
                files: ["source/styles/**/*.scss"],
                tasks: ["sass:build"]
            }
        }
    });

    grunt.loadNpmTasks("grunt-contrib-clean");
    grunt.loadNpmTasks("grunt-contrib-copy");
    grunt.loadNpmTasks("grunt-contrib-sass");
    grunt.loadNpmTasks("grunt-contrib-watch");

    grunt.registerTask("build", ["clean:build", "copy:build", "copy:bower", "copy:extlib", "sass:build"]);
    grunt.registerTask("dev", ["build", "watch"]);
};
