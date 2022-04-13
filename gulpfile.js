var gulp         = require('gulp');
// var browserSync  = require('browser-sync').create();
var cleanCss = require('gulp-clean-css');
var rename   = require("gulp-rename");
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var sourcemaps = require("gulp-sourcemaps");
var plumber = require('gulp-plumber');
var sassGlob = require("gulp-sass-glob");

// ブラウザ起動
// gulp.task('browser-sync', function() {
//   browserSync.init({
//       server: {
//           baseDir: "./public/",
//           index: "index.php"
//       }
//   });
// });

// リロードの度に更新
// gulp.task('bs-reload', function () {
//   browserSync.reload();
// });

// CSSファイルの圧縮
gulp.task('mincss', function() {
  return gulp.src("./public/css/*.css")
    .pipe(cleanCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./public/css'));
});

// JSファイルの圧縮
gulp.task('scripts', function() {
  return gulp.src("./src/js**/*.js")
    .pipe(uglify())
    .pipe(rename({
        extname: '.min.js'
    }))
    .pipe(gulp.dest('./public'));
});

// SASSのコンパイル

gulp.task('sass', function() {
  gulp.src('./src/scss/**/*.scss')
    .pipe(sassGlob())
    .pipe(plumber())
    .pipe(sourcemaps.init()) //sassの前に.init()する
    .pipe(sass())
    .pipe(sass({outputStyle: 'expanded'}))
    // .pipe(sourcemaps.write("./public/")) //destの前に.write()する
    .pipe(gulp.dest('./public/css'))
    .pipe(rename({extname: '.min.css'})) // ファイル名を変える
    .pipe(cleanCss()) // minifyする
    .pipe(gulp.dest('./public/css'));
});

// 各種ファイルを監視
gulp.task( 'watch', function() {
  // gulp.watch( './*.html', gulp.task( 'bs-reload' ) );
  gulp.watch( './src/scss/**/*.scss', ['sass'] );
  gulp.watch( './src/js/*.js', ['scripts'] );
});

gulp.task('default', ['sass']);
gulp.task('default', ['scripts']);

gulp.task('default', ['watch']);
