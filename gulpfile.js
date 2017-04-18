const gulp          = require('gulp');
const gutil         = require('gulp-util');
const sass          = require('gulp-sass');
const autoprefixer  = require('gulp-autoprefixer');
const imagemin      = require('gulp-imagemin');

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

gulp.task('materialize', function() {
  gulp.src('./src/vendors/materialize/sass/materialize.scss')
    .pipe(
      sass({ outputStyle: 'compressed' })
      .on('error', gutil.log))
    .pipe(autoprefixer({
      browsers: autoprefixBrowsers,
      cascade: false
    }))
    .pipe(gulp.dest('./assets/vendors'));
});

gulp.task('watch', function() {
  gulp.watch('./src/scss/**/*.scss', ['sass']);
});

gulp.task('images', () =>
  gulp.src('src/images/*')
    .pipe(imagemin())
    .pipe(gulp.dest('assets/images'))
);

gulp.task('default', ['sass', 'images', 'watch']);
