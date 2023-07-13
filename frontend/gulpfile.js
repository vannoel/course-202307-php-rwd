const gulp = require('gulp');

const path_libs = './libs'

gulp.task('copyVendor', function(done) { 
  /* jQuery */
  gulp.src(['node_modules/jquery/dist/jquery.min.js'])
    .pipe(gulp.dest(path_libs+'/jquery/'));

  /* fontawesome */
  gulp.src(['node_modules/@fortawesome/fontawesome-free/css/**/*'])
    .pipe(gulp.dest(path_libs+'/fontawesome/css'));
  gulp.src(['node_modules/@fortawesome/fontawesome-free/webfonts/**/*'])
    .pipe(gulp.dest(path_libs+'/fontawesome/webfonts'));

  /* swiper */
  gulp.src(['node_modules/swiper/swiper-bundle.min.css'])
    .pipe(gulp.dest(path_libs+'/swiper/'));
  gulp.src(['node_modules/swiper/swiper-bundle.min.js'])
    .pipe(gulp.dest(path_libs+'/swiper/'));

  /* gsap */
  gulp.src(['node_modules/gsap/dist/gsap.min.js'])
    .pipe(gulp.dest(path_libs+'/gsap/'));
  
  done();
});