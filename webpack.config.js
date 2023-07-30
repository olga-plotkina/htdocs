const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const TerserPlugin = require("terser-webpack-plugin");
const SvgSpritemapPlugin = require("svg-spritemap-webpack-plugin");
const CompressionPlugin = require("compression-webpack-plugin");
const zlib = require("zlib");

const srcPathTheme = "wp-content/themes/mario";
const srcPath = "wp-content/themes/mario/resources";
const distPath = "wp-content/themes/mario/assets";
const srcSCSSfile = "wp-content/themes/mario/resources/sass/app.scss";

function styleLoaderExcludePaths(list) {
  let pattern = list.join("|");
  pattern = pattern.replace(/\\/g, "\\\\");
  pattern = pattern.replace(/\//g, "\\/");
  pattern = pattern.replace(/\./g, "\\.");
  return new RegExp(`(${pattern})`, "i");
}

const host = path.normalize(process.cwd()).split(path.sep).pop();

const styleLoaders = {
  css: {
    loader: "css-loader",
    options: {
      url: false,
      importLoaders: 2, // так и не понял зачем
    },
  },
  postcss: {
    loader: "postcss-loader",
    options: {
      postcssOptions: {
        plugins: [
          require("autoprefixer")({
            cascade: false, // true нужен только для красоты
          }),
          require("css-mqpacker")({
            sort: require("sort-css-media-queries"),
          }),
        ],
      },
    },
  },
  sass: {
    loader: "sass-loader",
    options: {
      // sourceMap: true,
    },
  },
};

module.exports = (env) => {
  const isProduction = env.mode === "production";

  const webpackConfig = {
    mode: env.mode,
    devtool: isProduction ? false : "inline-source-map",
    resolve: {
      alias: {
        "resources#": path.resolve(srcPath),
      },
    },
    entry: {
      script: path.resolve(srcPath, "js/app.js"),
      style: path.resolve(srcPath, "sass/app.scss"),
    },
    output: {
      path: path.resolve(distPath),
      filename: "[name].js",
      // chunkFilename: isProduction ? '_async-modules/[name].[contenthash].js' : '_async-modules/[name].js',
      clean: true,
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: "[name].css",
      }),
      new SvgSpritemapPlugin(srcPath + "/svg/*.svg", {
        output: {
          filename: "sprite.svg",
          svgo: false,
        },
        sprite: {
          prefix: false,
          generate: {
            title: false,
          },
        },
      }),
    ],
    module: {
      rules: [
        {
          test: /\.js$/,
          use: {
            loader: "babel-loader",
            options: {
              // cacheDirectory: true,
            },
          },
        },
        {
          test: /\.(sc|c)ss$/,
          exclude: styleLoaderExcludePaths([path.resolve(srcSCSSfile)]),
          use: isProduction
            ? [
                "style-loader",
                styleLoaders.css,
                styleLoaders.postcss,
                styleLoaders.sass,
              ]
            : ["style-loader", styleLoaders.css, styleLoaders.sass],
        },
        {
          test: path.resolve(srcSCSSfile),
          use: isProduction
            ? [
                MiniCssExtractPlugin.loader,
                styleLoaders.css,
                styleLoaders.postcss,
                styleLoaders.sass,
              ]
            : [
                MiniCssExtractPlugin.loader,
                styleLoaders.css,
                styleLoaders.sass,
              ],
        },
      ],
    },
  };

  if (isProduction) {
    webpackConfig.plugins.push(
      new CompressionPlugin({
        // filename: '[path][base].gz',
        algorithm: "gzip", // Значение по-умолчанию. Оставил для наглядности
        compressionOptions: {
          level: 9, // Значение по-умолчанию. Максимальный уровень
        },
      })
    );

    webpackConfig.plugins.push(
      new CompressionPlugin({
        algorithm: "brotliCompress",
        compressionOptions: {
          params: {
            [zlib.constants.BROTLI_PARAM_QUALITY]:
              zlib.constants.BROTLI_MAX_QUALITY,
          },
        },
      })
    );

    webpackConfig.optimization = {
      minimize: true,
      minimizer: [
        new TerserPlugin({
          terserOptions: {
            format: {
              comments: false,
            },
          },
          extractComments: false,
        }),
      ],
      splitChunks: {
        cacheGroups: {
          defaultVendors: {
            filename: "[name].async-module.js",
          },
        },
      },
    };
  }

  if (env.watch) {
    const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
    webpackConfig.plugins.push(
      new BrowserSyncPlugin(
        {
          host: "localhost",
          //   proxy: `http://${host}:8888`,
          proxy: "localhost:8888",
          open: "external",
          port: 4000,
          files: [
            srcPathTheme + "/**/*.php",
            distPath + "/**/*.js",
            distPath + "/**/*.css",
          ],
        },
        {
          reload: false,
        }
      )
    );
  }

  return webpackConfig;
};
