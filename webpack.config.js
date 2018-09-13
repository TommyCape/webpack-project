const path = require('path');
var wb = require('webpack');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
// var BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
module.exports = {
  entry: ['./public/assets/js/jquery-ui/jquery-ui.min.js','./public/assets/js/photobox/photobox/jquery.photobox.js','./public/assets/js/index.js','./public/assets/css/style.scss'],
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, './'),
     publicPath: '/templates/warmthotel'
  },
   devtool: "source-map",
  // watch: true,
  module: {
     rules: [
        {
            test: [/\.css$/, /\.scss$/],
            use: [
                MiniCssExtractPlugin.loader,
                {
                loader:"css-loader",
                options: {
                  sourceMap: true
                }
              },
                  {
                    loader:"sass-loader",
                    options: {
                    sourceMap: true
                    }
                  },
                    {
                      loader: 'postcss-loader',
                      options: {
                      ident: 'postcss',
                      plugins: [
                      require('autoprefixer')({
                      'browsers': ['> 1%', 'last 5 versions', 'Firefox ESR', 'Opera 12.1', 'IE >= 9']
                      })
                    ]
                  }
                }
            ]
        },
        {
        test: /\.(eot|otf|ttf|woff|woff2)$/,
        loader: 'url-loader',
          options: {
            limit: 10000,
            outputPath:'/public/images/'
          }
        },
        {
          test: /\.js$/, // Check for all js files
          exclude:  /(node_modules|bower_components)/,
          loader: 'babel-loader'
        },
        {
        test: /\.(png|jpg|gif|svg)$/,
        use: [
            {
             loader: 'file-loader',
             options: {
               outputPath:'/public/images/'
             //   name: '[path][name].[ext]',
             //   publicPath: '../'
             }
            }
          ]
        },
        {
          test: /\.svg$/,
          use: [
            {
              loader: 'svg-url-loader'
            }
          ],
        }
     ]
},
plugins:[
  new wb.ProvidePlugin({
    $: 'jquery',
    jQuery: 'jquery',
  }),
  new MiniCssExtractPlugin({
    filename: "public/assets/css/style.min.css"
  })
]
};
