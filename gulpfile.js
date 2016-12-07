var gulp = require('gulp'),
  sass = require('gulp-sass'),
  concat = require('gulp-concat'),
  notify = require('gulp-notify');

gulp.task('sass', function() {
  return gulp.src('./resources/scss/app.scss')
    .pipe(concat('wtr-styles.css'))
    .pipe(sass().on('error', notify.onError({
      message: 'Error: <%= error.message %>'
    })))
    .pipe(gulp.dest('./build/css/'));
});

gulp.task('default', ['sass'], function() {
  gulp.watch('./app/resources/scss/**/*.scss', ['sass']);
});
