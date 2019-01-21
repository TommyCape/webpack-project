const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const RemoveStrictPlugin = require( 'remove-strict-webpack-plugin' );
var webpack = require('webpack');

module.exports = {
  entry: ['./public/assets/js/index.js','./public/assets/css/style.scss'],
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, './public/assets/js'),
  },
  devtool: "source-map",
  watch: true,
  watchOptions: {
    ignored: /node_modules/
  },
  performance: {
    hints: false
  },
  module: {
  rules: [
    {
        test: [/\.css$/, /\.scss$/],
        use: [
            "style-loader",
            {
            loader:"css-loader"
          },
              {
                loader:"sass-loader"
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
        outputPath:'../../font/',
        publicPath: '/templates/mellini/public/font'
      }
    },
    {
    test: /\.(png|jpg|gif|svg)$/,
    use: [
        {
         loader: 'file-loader',
         options: {
           outputPath:'../../images/',
           publicPath:'/templates/mellini/public/images'
         }
        }
      ]
    },
    {
      test: /\.js$/,
      exclude: /node_modules\/(?!(dom7|ssr-window|swiper)\/).*/,
      use:{
        loader: 'babel-loader'
      }
    }
  ]
},
  plugins: [
    new webpack.ProvidePlugin({
    $: 'jquery',
    jQuery: 'jquery'
  }),
//   new MiniCssExtractPlugin({
//     filename: "../css/style.min.css"
// }),
  new RemoveStrictPlugin()
]

};
