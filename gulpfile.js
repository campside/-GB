var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('css', function(){
    return gulp.src('./sass/*.sass')
        .pipe(sass())
        .pipe(gulp.dest('./css'))
});

gulp.task('default', [ 'css' ]);
