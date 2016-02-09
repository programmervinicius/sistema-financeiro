var gulp = require("gulp");
var less = require("gulp-less");
var path = require("path");

var paths = {
	css:"lib/css/assets/",
	less:"lib/css/less/*.less",
};

gulp.task('default', function () {
  return gulp.src(paths.less)
    .pipe(less({
      path: [ path.join(__dirname, 'less', 'includes') ],
      compress:true
    }))
    .pipe(gulp.dest(paths.css));
});

gulp.task("watch" , function(){
	gulp.watch(paths.less , ['default']);
});