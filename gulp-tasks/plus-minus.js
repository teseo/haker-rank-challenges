module.exports = function(gulp, plugins) {
    gulp.task('suite-plus-minus', function() {
        var options = {debug: true};
        return gulp.src('phpunit.xml', {base: './'})
            .pipe(plugins.phpunit('./vendor/bin/phpunit --testsuite PlusMinus',options));
    });
}