const gulp = require("gulp");
sass = require("gulp-sass")(require("sass"));
concat = require("gulp-concat");
uglify = require("gulp-uglify");
browserSync = require("browser-sync").create();
cssnano = require("gulp-cssnano");

//Compile, Minify CSS
function sassCompiler() {
	return gulp
		.src("scss/**/*.scss")
		.pipe(sass())
		.pipe(cssnano())
		.pipe(gulp.dest("css"))
		.pipe(browserSync.stream());
}
gulp.task("sassCompiler", sassCompiler);

//Compile, Minify External CSS
function pluginsCSS() {
	return gulp
		.src(["./css/plugins/menu-mobile.css"])
		.pipe(concat("plugins.min.css"))
		.pipe(cssnano())
		.pipe(gulp.dest("css/"))
		.pipe(browserSync.stream());
}
gulp.task('pluginsCSS', pluginsCSS)

//Compile, Minify and Concat JS
function appJS() {
	return gulp
		.src('js/scripts/*.js')
		.pipe(concat('app.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('js/'))
		.pipe(browserSync.stream());
}
gulp.task('appJS', appJS)

//Compile, Minify External JS
function pluginsJS() {
	return gulp
		.src(["./js/plugins/swiper-bundle.min.js", "./js/plugins/swiper-element-bundle.min.js"])
		.pipe(concat("plugins.min.js"))
		.pipe(uglify())
		.pipe(gulp.dest("js/"))
		.pipe(browserSync.stream());
}
gulp.task('pluginsJS', pluginsJS)

//Browser Watcher
gulp.task('browser-sync', function () {
	browserSync.init({
		proxy: "interioresedesigncombr.local",
	});
});

//Watching Files
function watch() {
	gulp.watch('*.php').on('change', browserSync.reload)
	gulp.watch('scss/**/*.scss', sassCompiler)
	gulp.watch('css/plugins/*.css', pluginsCSS)
	gulp.watch("js/scripts/*.js", appJS);
	gulp.watch('js/plugins/*.js', pluginsJS)
}
gulp.task('watch', watch)
gulp.task("default", gulp.task("default", gulp.parallel("watch", "browser-sync", "sassCompiler", "pluginsCSS", "appJS", "pluginsJS")));