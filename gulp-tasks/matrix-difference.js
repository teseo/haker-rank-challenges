module.exports = function(gulp, plugins) {
    gulp.task('suite-matrix-difference', function() {
        var options = {debug: true};
        return gulp.src('phpunit.xml', {base: './'})
            .pipe(plugins.phpunit('./vendor/bin/phpunit --testsuite MatrixDifference',options));
    });
}