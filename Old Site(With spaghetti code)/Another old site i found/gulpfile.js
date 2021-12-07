var gulp = require('gulp');
const minifyImg = require('gulp-imagemin');gulp.task('img', () => {
      gulp.src('img/**/*')
          .pipe(minifyImg())
          .pipe(gulp.dest('dist/img'));
  });
