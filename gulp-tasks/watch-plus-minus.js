// watch files to run tests on the fly once they are modified

module.exports = function(gulp) {
    gulp.task('watch-suite-plus-minus', function () {
        return gulp.watch([
                'tests/PlusMinusTest/PlusMinusTest.php',
                'src/PlusMinus/PlusMinus.php'
            ], {base: './'},
            ['suite-plus-minus']);
    });
}