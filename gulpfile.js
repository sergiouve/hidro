const gulp          = require('gulp');
const gutil         = require('gulp-util');
const shell         = require('gulp-shell');
const sass          = require('gulp-sass');
const browserify    = require('browserify');
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

gulp.task('browserify', function() {
  return browserify('./src/js/app.js')
    .bundle()
    .pipe(source('app.js'))
    .pipe(gulp.dest('./assets/js/'));
});

gulp.task('serve', shell.task([
  'php -S localhost:3000'
]));

gulp.task('watch', function() {
  gulp.watch('./src/scss/**/*.scss', ['sass']);
});

gulp.task('images', () =>
  gulp.src('src/images/*')
    .pipe(imagemin())
    .pipe(gulp.dest('assets/images'))
);

gulp.task('default', ['sass', 'images', 'serve', 'watch']);
