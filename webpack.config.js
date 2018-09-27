const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
var webpack = require('webpack');

module.exports = {
  entry: ['./public/assets/js/cookie/jquery.cookiebar.js','./public/assets/js/jquery-ui/jquery-ui.min.js','./public/assets/js/photobox/photobox/jquery.photobox.js','./public/assets/js/lingue_calendario/jquery.ui.datepicker-ita.min.js','./public/assets/js/lingue_calendario/jquery.ui.datepicker-eng.min.js','./public/assets/js/index.js','./public/assets/css/style.scss'],
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, './public/assets/js'),
    publicPath: './'
  },
  devtool: "source-map",
  watch: true,
  watchOptions: {
    ignored: /node_modules/
  },
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
        outputPath:'../../font/'
      }
    },
    {
    test: /\.(png|jpg|gif|svg)$/,
    use: [
        {
         loader: 'file-loader',
         options: {
           outputPath:'../../images/'
         }
        }
      ]
    },
    {
      test: /\.js$/,
      exclude: /node_modules\/(?!(dom7|ssr-window|swiper)\/).*/,
      loader: 'babel-loader'
    }
  ]
},
  plugins: [
    new webpack.ProvidePlugin({
    $: 'jquery',
    jQuery: 'jquery'
  }),
  new MiniCssExtractPlugin({
    filename: "../css/style.min.css"
})
]

};
