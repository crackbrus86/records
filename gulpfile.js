var gulp = require("gulp");
const webpack = require("webpack");
const webpackStream = require("webpack-stream");
var webpackConfig = require("./webpack.config.js");

gulp.task("build::editRecords", () => {
    return gulp.src("./src/EdirRecordsPage/index.tsx")
    .pipe(webpackStream(webpackConfig), webpack)
    .pipe(gulp.dest('dist/'))
});

gulp.task("watch::editRecords", () => {
    return gulp.src("./src/EdirRecordsPage/index.tsx")
    .pipe(webpackStream({
        ...webpackConfig,
        watch: true
    }), webpack)
    .pipe(gulp.dest('dist/'))
});