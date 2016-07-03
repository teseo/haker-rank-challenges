//Init dependencies
var gulp    = require('gulp');
var plugins = require('gulp-load-plugins')();

//clear screen task
gulp.task('clear', function () {
    gulp.src('').pipe(plugins.run('clear'));
});

//Matrix difference challenge tasks
require('./gulp-tasks/matrix-difference')(gulp, plugins);
require('./gulp-tasks/watch-matrix-difference')(gulp);

gulp.task('matrix-difference', [
    'clear',
    'suite-matrix-difference',
    'watch-suite-matrix-difference']);

// default task: clear screen, run test suites
gulp.task('default', ['matrix-difference']);