var gulp          = require('gulp');
var gutil         = require('gulp-util');
var sass          = require('gulp-sass');
var autoprefixer  = require('gulp-autoprefixer');

let autoprefixBrowsers = ['> 1%', 'last 2 versions', 'firefox >= 4', 'safari 7', 'safari 8', 'IE 8', 'IE 9', 'IE 10', 'IE 11'];

gulp.task('sass', function() {
  gulp.src('./src/scss/main.scss')
    .pipe(
      sass({ outputStyle: 'expanded' })
      .on('error', gutil.log))
    .pipe(autoprefixer({
      browsers: autoprefixBrowsers,
      cascade: false
    }))
    .pipe(gulp.dest('./assets/styles'));
});

gulp.task('watch', function() {
  gulp.watch('./src/scss/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);
