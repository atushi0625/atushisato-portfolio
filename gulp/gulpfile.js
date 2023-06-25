// gulpfile.js
const { src, dest, watch, series, parallel, lastRun } = require("gulp");
const del = require('del');
//sass系
const sass = require("gulp-sass")(require("sass"));
const sassGlob = require("gulp-sass-glob-use-forward");
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssdeclsort = require("css-declaration-sorter");
const gcmq = require("gulp-group-css-media-queries");
const mode = require("gulp-mode")();
const browserSync = require("browser-sync");
const crypto = require("crypto");
const hash = crypto.randomBytes(8).toString("hex");
const replace = require("gulp-replace");

// 画像圧縮系プラグイン
const imageMin = require("gulp-imagemin");
const mozjpeg = require("imagemin-mozjpeg"); // 追加
const pngquant = require("imagemin-pngquant"); // 追加
const changed = require("gulp-changed"); // 追加

//入出力するフォルダ指定
const srcBase = "../src";
const distBase = "../dist";

const srcPath = {
  scss: srcBase + "/scss/**/*scss",
  html: srcBase + "/**/*.html",
  php: srcBase + "/**/*.php",
  img: srcBase + "/img/**",
  js: srcBase + "/js/**/*.js",
};

const distPath = {
  css: distBase + "/assets/css",
  html: distBase + "/",
  php: distBase + "/",
  img: distBase + "/assets/img",
  js: distBase + "/assets/js",
};


/**
 * clean
 */
const clean = (done) => {
  del([distBase + '/**'], {
    force: true
  });
  done();
}


// JS圧縮系
const webpackStream = require("webpack-stream");
const webpack = require("webpack");

const webpackConfig = require("./webpack.config");

const bundleJs = (done) => {
  webpackStream(webpackConfig, webpack)
    .on("error", function (e) {
      console.error(e);
      this.emit("end");
    })
    .pipe(dest("../dist/assets/scripts/"));
  done();
};

/*ソースフォルダ内の何らかのファイルを出力したい場合は*(ワイルドカード)を記述*/

/*Gulpで処理が終わった後にdistフォルダに出力される
phpファイルの場合はhtmlの部分をphpに変更する */
const copyFiles = (done) => {
  // src("../*.php").pipe(dest("../dist/"));
  src("../src/assets/**/*.php").pipe(dest("../dist/assets/"));
  done();
};

//postcss-cssnext ブラウザ対応条件 prefix 自動付与
const target_browser = [
  'last 2 versions',
  'ie >= 11',
  'iOS >= 7',
  'Android >= 4.4'
];


const compileSass = (done) => {
  const postcssPlugins = [
    autoprefixer({
      target_browser
    }),
    cssdeclsort({
      order: "alphabetical",
    }),
  ];
  src("../src/assets/styles/**/*.scss", {
    sourcemaps: true,
  })
    .pipe(
      plumber({
        errorHandler: notify.onError("Error: <%= error.message %>"),
      })
    )
    .pipe(
      sass({
        outputStyle: "compressed",
      })
    )
    .pipe(sassGlob())
    .pipe(
      notify({
        message: "Sassをコンパイルしました！",
        onLast: true,
      })
    )
    .pipe(postcss(postcssPlugins))
    .pipe(mode.production(gcmq()))
    .pipe(
      dest("../dist/assets/styles", {
        sourcemaps: "./sourcemaps",
      })
    );
  done();
};

const browserReload = (done) => {
  browserSync.reload();
  done();
};

const buildServer = (done) => {
  browserSync.init({
    port: 8080,
    proxy: 'http://atushisatoportfolio.local/',
    files: ["**/*"],
    open: true,
    watchOptions: {
      debounceDelay: 1000,
    },
  });
  done();
};

const imagemin = (done) => {
  src("../src/assets/images/**")
    .pipe(changed("../dist/assets/images/", { since: lastRun(imagemin) }))
    .pipe(
      imageMin([
        pngquant({
          quality: [0.6, 0.7],
          speed: 1,
        }),
        mozjpeg({ quality: 65, progressive: true }),
        imageMin.optipng({ optimizationLevel: 5 }),
        imageMin.gifsicle({ optimizationLevel: 3, interlaced: true }),
        imageMin.svgo({
          plugins: [{ removeViewBox: false }],
        }),
      ])
    )
    .pipe(dest("../dist/assets/images/"));

  done();
};

const cacheBusting = (done) => {
  src("../dist/**/**.php")
    .pipe(replace(/\.(js|css)\?ver/g, ".$1?ver=" + hash))
    .pipe(replace(/\.(webp|jpg|jpeg|png|svg|gif)/g, ".$1?ver=" + hash))
    .pipe(dest("../dist"));
  done();
};

const watchFiles = () => {
  watch("../src/assets/styles/**/*.scss", series(compileSass, browserReload));
  watch("../**/*.php", series(copyFiles, browserReload));
  watch("../src/assets/**/*.php", series(copyFiles, browserReload));
  watch("../src/assets/images/**/*", series(imagemin, browserReload));
  watch("../src/assets/scripts/**/*.js", series(bundleJs, browserReload));
};

module.exports = {
  clean: clean,
  copy: copyFiles,
  sass: compileSass,
  default: parallel(buildServer, watchFiles),
  bundle: bundleJs,
  imagemin: imagemin,
  build: series(clean, parallel(compileSass), bundleJs, imagemin, cacheBusting, copyFiles),
};

/* npx gulp copy */
/* npx gulp default */
/* npx gulp bundle */
/* npx gulp imagemin */

/* 開発用コマンド */
//npm run dev

/* 本番用コマンド */
//npm run build






// // gulpfile.js
// const { src, dest, watch, series, parallel, lastRun } = require("gulp");
// //sass系
// const sass = require("gulp-sass")(require("sass"));
// const sassGlob = require("gulp-sass-glob-use-forward");
// const plumber = require("gulp-plumber");
// const notify = require("gulp-notify");
// const postcss = require("gulp-postcss");
// const autoprefixer = require("autoprefixer");
// const cssdeclsort = require("css-declaration-sorter");
// const gcmq = require("gulp-group-css-media-queries");
// const mode = require("gulp-mode")();
// const browserSync = require("browser-sync");
// const crypto = require("crypto");
// const hash = crypto.randomBytes(8).toString("hex");
// const replace = require("gulp-replace");

// // 画像圧縮系プラグイン
// const imageMin = require("gulp-imagemin");
// const mozjpeg = require("imagemin-mozjpeg"); // 追加
// const pngquant = require("imagemin-pngquant"); // 追加
// const changed = require("gulp-changed"); // 追加

// //入出力するフォルダ指定
// const srcBase = "../src";
// const distBase = "../dist";

// const srcPath = {
//   scss: srcBase + "/styles/**/*scss",
//   html: srcBase + "/**/*.html",
//   php: srcBase + "/**/*.php",
//   img: srcBase + "/images/**",
//   js: srcBase + "/scripts/**/*.js",
// };

// const distPath = {
//   css: distBase + "/assets/styles",
//   html: distBase + "/",
//   php: distBase + "/",
//   img: distBase + "/assets/images",
//   js: distBase + "/assets/scripts",
// };


// // JS圧縮系
// const webpackStream = require("webpack-stream");
// const webpack = require("webpack");

// const webpackConfig = require("./webpack.config");

// const bundleJs = (done) => {
//   webpackStream(webpackConfig, webpack)
//     .on("error", function (e) {
//       console.error(e);
//       this.emit("end");
//     })
//     .pipe(dest("../dist/assets/scripts"));
//   done();
// };

// /*ソースフォルダ内の何らかのファイルを出力したい場合は*(ワイルドカード)を記述*/

// /*Gulpで処理が終わった後にdistフォルダに出力される
// phpファイルの場合はhtmlの部分をphpに変更する */
// const copyFiles = (done) => {
//   src("../*.php").pipe(dest("../dist/"));
//   src("../src/assets/**/*.php").pipe(dest("../dist/assets/"));
//   done();
// };

// const compileSass = (done) => {
//   const postcssPlugins = [
//     autoprefixer({
//       grid: "autoplace",
//       cascade: false,
//     }),
//     cssdeclsort({
//       order: "alphabetical",
//     }),
//   ];
//   src("../src/assets/styles/**/*.scss", {
//     sourcemaps: true,
//   })
//     .pipe(
//       plumber({
//         errorHandler: notify.onError("Error: <%= error.message %>"),
//       })
//     )
//     .pipe(
//       sass({
//         outputStyle: "expanded",
//       })
//     )
//     .pipe(sassGlob())
//     .pipe(
//       notify({
//         message: "Sassをコンパイルしました！",
//         onLast: true,
//       })
//     )
//     .pipe(postcss(postcssPlugins))
//     .pipe(mode.production(gcmq()))
//     .pipe(
//       dest("../dist/assets/styles", {
//         sourcemaps: "./sourcemaps",
//       })
//     );
//   done();
// };

// const buildServer = (done) => {
//   browserSync.init({
//     port: 8080,
//     proxy: 'http://atushisatoportfolio.local/',
//     files: ["**/*"],
//     open: true,
//     watchOptions: {
//       debounceDelay: 1000,
//     },
//   });
//   done();
// };


// const imagemin = (done) => {
//   src("../src/assets/images/**")
//     .pipe(changed("../dist/assets/images/", { since: lastRun(imagemin) }))
//     .pipe(
//       imageMin([
//         pngquant({
//           quality: [0.6, 0.7],
//           speed: 1,
//         }),
//         mozjpeg({ quality: 65, progressive: true }),
//         imageMin.optipng({ optimizationLevel: 5 }),
//         imageMin.gifsicle({ optimizationLevel: 3, interlaced: true }),
//         imageMin.svgo({
//           plugins: [{ removeViewBox: false }],
//         }),
//       ])
//     )
//     .pipe(dest("../dist/assets/images/"));

//   done();
// };

// const cacheBusting = (done) => {
//   src("../dist/**/**.php")
//     .pipe(replace(/\.(js|css)\?ver/g, ".$1?ver=" + hash))
//     .pipe(replace(/\.(webp|jpg|jpeg|png|svg|gif)/g, ".$1?ver=" + hash))
//     .pipe(dest("../dist"));
//   done();
// };

// const watchFiles = () => {
//   watch("../src/assets/styles/**/*.scss", series(compileSass, browserReload));
//   watch("../**/*.php", series(copyFiles, browserReload));
//   watch("../src/assets/**/*.php", series(copyFiles, browserReload));
//   watch("../src/assets/images/**/*", series(imagemin, browserReload));
//   watch("../src/assets/scripts/**/*.js", series(bundleJs, browserReload));
// };

// module.exports = {
//   copy: copyFiles,
//   sass: compileSass,
//   default: parallel(buildServer, watchFiles),
//   bundle: bundleJs,
//   imagemin: imagemin,
//   build: series(parallel(compileSass), imagemin, cacheBusting, copyFiles),
// };

// /* npx gulp copy */
// /* npx gulp default */
// /* npx gulp bundle */
// /* npx gulp imagemin */

// /* 開発用コマンド */
// //npm run dev

// /* 本番用コマンド */
// //npm run build
