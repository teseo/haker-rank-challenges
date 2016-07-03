module.exports = function(gulp, plugins) {
    gulp.task('suite-plus-minus', function() {
        var options = {debug: true, noConfiguration: true, testSuite: 'PlusMinus'};
        return gulp.src('phpunit.xml', {base: './'})
            .pipe(plugins.phpunit('./vendor/bin/phpunit',options));
    });
}