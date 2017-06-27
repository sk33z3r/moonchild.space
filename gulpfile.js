var gulp = require('gulp');
var changed = require('gulp-changed');
var imagemin = require('gulp-imagemin');

gulp.task('imagemin', function() {
   var imgSrc = 'src_images/*.+(png|jpg|JPG|jpeg|gif)',
   imgDst = 'images';
   
   gulp.src(imgSrc)
   .pipe(changed(imgDst))
   .pipe(imagemin())
   .pipe(gulp.dest(imgDst));
});

gulp.task('default',['imagemin'],function(){
});