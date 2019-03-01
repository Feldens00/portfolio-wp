var gulp = require('gulp'); 
var concat = require('gulp-concat'); 
var uglify = require('gulp-uglify');
var uglifycss = require('gulp-uglifycss');
var sass = require('gulp-sass'); 
var watch = require('gulp-watch');

//task para o sass
gulp.task('style', function () {

   	return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss','src/css/*.scss'])
   		.pipe(sass().on('error', sass.logError))
   		.pipe(uglifycss())
      .pipe(concat('main.css')) 
      .pipe(gulp.dest('dist/css/'));
});

//task para o js
gulp.task('js', function () {

    return gulp.src('src/js/*.js')
	    .pipe(concat('main.js')) 
	    .pipe(uglify())
	    .pipe(gulp.dest('dist/js'));      
});

//task para o js
gulp.task('watch', function() {

		gulp.watch('src/css/*.scss', gulp.series('style'));
		gulp.watch('src/js/*.js', gulp.series('js'));
}); 