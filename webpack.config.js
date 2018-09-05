const path = require('path');
var wb = require('webpack');

// var BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
module.exports = {
  entry: ['./node_modules/jquery-ui/themes/base/datepicker.css','./node_modules/jquery-ui/ui/widgets/datepicker.js','./public/assets/css/style.scss','./public/assets/js/index.js'],
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, './'),
     publicPath: '../'
  },
  // devtool: 'inline-source-map',
  devtool: "eval",
   // devServer: {
   //   contentBase: './public',
   //   watchContentBase: true
   // },
  watch: true,
  module: {
     rules: [
        {
            test: [/\.css$/, /\.scss$/],
            use: [
                "style-loader",
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
          test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
          loader: "url-loader?limit=10000&mimetype=application/font-woff"
        },
        {
          test: /\.woff?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
          loader: "url-loader?limit=10000&mimetype=application/font-woff"
        },
        {
          test: /\.ttf?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
          loader: "url-loader?limit=10000&mimetype=application/font-ttf"
        },
        {
          test: /\.eot?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
          loader: "url-loader?limit=10000&mimetype=application/font-eot"
        },
        {
          test: /\.otf?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
          loader: "url-loader?limit=10000&mimetype=application/font-otf"
        },
        {
          test: /\.js$/, // Check for all js files
          exclude: /node_modules\/(?!(dom7|ssr-window|swiper)\/).*/,
          loader: 'babel-loader'
        },
        {
        test: /\.(png|jpg|gif|svg)$/,
        use: [
            {
             loader: 'file-loader'//,
             // options: {
             //   name: '[path][name].[ext]',
             //   publicPath: '../'
             // }
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
    "window.jQuery": "jquery'",
    "window.$": "jquery"
  })
  // new BundleAnalyzerPlugin()
]
};
