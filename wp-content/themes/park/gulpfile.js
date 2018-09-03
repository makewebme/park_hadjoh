var gulp = require('gulp')
var scss = require('gulp-sass')
var plumber = require('gulp-plumber')
var notify = require('gulp-notify')
var uglify = require('gulp-uglify')
var webpack = require('webpack')
var webpackStream = require('webpack-stream')

// Styles
gulp.task('styles', function(){
  return gulp.src('scss/style.scss')
    .pipe(plumber({
      errorHandler: notify.onError(function (err) {
        return {
          title: 'Styles',
          message: err.message
        };
      })
    }))
    .pipe(scss({ outputStyle: 'compressed' }))
    .pipe(gulp.dest('css'))
})

// Scripts
gulp.task('scripts', function(){
  return gulp.src('js/_src/my-scripts.js')
    .pipe(plumber({
      errorHandler: notify.onError(function (err) {
        return {
          title: 'Scripts',
          message: err.message
        };
      })
    }))
    .pipe(webpackStream({
      output: {
        filename: 'my-scripts.js',
      },
      mode: 'development',
      module: {
        rules: [
          {
            test: /\.(js)$/,
            exclude: /(node_modules)/,
            loader: 'babel-loader',
            query: {
              presets: ['env']
            }
          }
        ]
      }
    }))
    .pipe(uglify())
    .pipe(gulp.dest('js'));
})

// Watcher
gulp.task('watch', function(){
  gulp.watch('scss/**/*.scss', gulp.series('styles'))
  gulp.watch('js/_src/**/*.js', gulp.series('scripts'))
})

// Default
gulp.task('default', gulp.series('styles', 'scripts', 'watch'))
