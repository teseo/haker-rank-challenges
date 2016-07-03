//Init dependencies
var gulp    = require('gulp');
var plugins = require('gulp-load-plugins')();

// run phpunit tests
require('./gulp-tasks/matrix-difference')(gulp, plugins);
require('./gulp-tasks/watch-matrix-difference')(gulp);

//clear screen everytime tasks is performed
gulp.task('clear', function () {
    gulp.src('').pipe(plugins.run('clear'));
});

// default task: clear screen, run test, watch files for modifications
gulp.task('default', [
    'clear',
    'suite-matrix-difference',
    'watch-suite-matrix-difference']);