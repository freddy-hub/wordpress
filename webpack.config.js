const path = require("path");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const CleanWebpackPlugin = require("clean-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const webpack = require("webpack");
const settings = {
  distPath: path.join(__dirname, "dist"),
  srcPath: path.join(__dirname, "src")
};

function srcPathExtend(subpath) {
  return path.join(settings.srcPath, subpath);
}

module.exports = (env, options) => {
  const isDevMode = options.mode === "development";

  return {
    externals: {
      jquery: "jQuery"
    },
    devtool: isDevMode ? "source-map" : false,
    resolve: {
      extensions: [".ts", ".tsx", ".js"]
    },
    entry: {
      app: "./src/js/app.js"
    },
    output: {
      filename: "./js/[name].min.js",
      path: path.resolve(__dirname)
    },
    module: {
      rules: [
        {
          test: /\.m?js$/,
          exclude: /(node_modules|bower_components)/,
          use: {
            loader: "babel-loader",
            options: {
              presets: ["babel-preset-env"]
            }
          }
        },
        {
          test: /\.tsx?$/,
          use: ["babel-loader", "ts-loader", "tslint-loader"]
        },
        {
          test: /\.js$/,
          exclude: /node_modules/,
          use: {
            loader: "babel-loader"
          }
        },
        {
          test: /\.scss$/,
          use: [
            MiniCssExtractPlugin.loader,
            {
              loader: "css-loader",
              options: {
                sourceMap: isDevMode
              }
            },
            {
              loader: "postcss-loader",
              options: {
                plugins: [require("autoprefixer")(), require("cssnano")()],
                sourceMap: isDevMode
              }
            },
            {
              loader: "sass-loader",
              options: {
                sourceMap: isDevMode
              }
            }
          ]
        },
        {
          test: /\.(ttf|eot|woff|woff2)$/,
          use: {
            loader: "file-loader",
            options: {
              name: "fonts/[name].[ext]"
            }
          }
        },
        {
          test: /\.(jpe?g|png|gif|svg|ico)$/i,
          use: [
            {
              loader: "file-loader",
              options: {
                outputPath: "assets/"
              }
            }
          ]
        }
      ]
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: "./style.css"
      }),
      new webpack.ProvidePlugin({
        $: "jquery",
        jQuery: "jquery"
      })
    ]
  };
};
