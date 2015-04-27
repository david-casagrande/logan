var concat = require('gulp-concat');
var gulp = require('gulp');
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

var scssPath = ['./scss/**/*.scss', './bower_components/foundation/scss/**/*.scss'];

gulp.task('sass', function() {
  gulp.src(scssPath)
    .pipe(sass({ imagePath: '../images' }))
    .pipe(gulp.dest('./css'))
});

gulp.task('watch', function() {
  gulp.watch(scssPath, ['sass'])
});

gulp.task('default', ['watch', 'sass'])
