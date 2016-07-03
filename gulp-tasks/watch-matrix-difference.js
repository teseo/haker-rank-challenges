// watch files to run tests on the fly once they are modified

module.exports = function(gulp) {
    gulp.task('watch-suite-matrix-difference', function () {
        return gulp.watch([
                'tests/MatrixDifferenceTest/MatrixDifferenceTest.php',
                'src/MatrixDifference/MatrixDifference.php'
            ], {base: './'},
            ['suite-matrix-difference']);
    });
}