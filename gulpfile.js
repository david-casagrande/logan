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

gulp.task('vendor', function() {
  gulp.src(['node_modules/smooth-scroll/dist/js/smooth-scroll.js'])
    .pipe(concat('vendor.js'))
    .pipe(gulp.dest('./javascript'))
});

gulp.task('watch', function() {
  gulp.watch(scssPath, ['sass', 'vendor'])
});

gulp.task('default', ['watch', 'sass', 'vendor'])
