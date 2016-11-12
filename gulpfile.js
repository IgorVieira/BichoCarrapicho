const gulp = require('gulp')
const sass = require('gulp-sass')
const imagemin = require('gulp-imagemin')
const uglify = require('gulp-uglify')
const pump = require('pump')


gulp.task('image-optimize', () =>
    gulp.src('./assets/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./assets/dist/images/'))
);



gulp.task('js-compress', function (cb) {
  pump([
        gulp.src('./assets/js/**/*.js'),
        uglify(),
        gulp.dest('./assets/dist/compress-js/')
    ],
    cb
  );
});

gulp.task('sass', () => {
 	return gulp.src('./assets/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    //Compress Sass
    // .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./assets/dist/css/'));

});

gulp.task('sass-compress', function () {
 return gulp.src('./assets/sass/**/*.scss')
   .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
   .pipe(gulp.dest('./assets/dist/compress-sass'));
});

gulp.task('watch', () => {
    gulp.watch(['./assets/images/*'],['image-optimize'])
	 gulp.watch(['./assets/sass/**/*.scss'], ['sass'])
      gulp.watch(['./assets/sass/**/*.scss'], ['sass-compress'])
      gulp.watch(['./assets/js/**/.js'],['js-compress'])
})


gulp.task('default', () =>  {
	gulp.start('watch');
});