// watch files to run tests on the fly once they are modified

module.exports = function(gulp) {
    gulp.task('watch-suite-staircase', function () {
        return gulp.watch([
                'tests/StaircaseTest/StaircaseTest.php',
                'src/Staircase/Staircase.php'
            ], {base: './'},
            ['suite-staircase']);
    });
}