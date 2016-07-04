module.exports = function(gulp, plugins) {
    gulp.task('suite-staircase', function() {
        var options = {debug: true, noConfiguration: true, testSuite: 'Staircase'};
        return gulp.src('phpunit.xml', {base: './'})
            .pipe(plugins.phpunit('./vendor/bin/phpunit',options));
    });
}