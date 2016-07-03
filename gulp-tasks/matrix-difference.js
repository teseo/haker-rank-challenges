module.exports = function(gulp, plugins) {
    gulp.task('suite-matrix-difference', function() {
        var options = {debug: true, noConfiguration: true, testSuite: 'MatrixDifference'};
        return gulp.src('phpunit.xml', {base: './'})
            .pipe(plugins.phpunit('./vendor/bin/phpunit',options));
    });
}