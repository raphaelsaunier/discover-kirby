'use strict';

var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var browserSync = require('browser-sync');
var reload = browserSync.reload;

gulp.task('watch', function () {
  $.connectPhp.server({}, function () {
    browserSync({
      proxy: 'localhost:8000',
      open: false,
      port: 3003,
      notify: false,
    });
  });

  return gulp.watch([
    'assets/js/*',
    'content/**/*',
    'site/templates/*',
    'site/snippets/*',
  ]).on('change', reload);
});

gulp.task('default', ['watch']);

