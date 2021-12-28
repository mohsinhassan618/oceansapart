const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");
const outputDir = path.join(__dirname, '/assets/build/');


const isProd = process.env.NODE_ENV === 'production';


module.exports = {
    entry: ['./assets/src/index.js'],
    mode: isProd ? 'production' : 'development',
    devtool: "eval-source-map",
    output: {
        path: outputDir,
        filename: 'app.min.js'
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'app.min.css',
        }),
    ],
    optimization:{
        minimize: true,
        minimizer:[
            new CssMinimizerPlugin(),
            new TerserPlugin()
        ]
    },
    module: {
        rules: [
            {
            test: /\.(scss)$/,
            use: [{
                loader: "style-loader"
            }, {
                loader: MiniCssExtractPlugin.loader,
            }, {
                loader: "css-loader"
            }, {
                loader: "sass-loader",
                options: {
                    sassOptions: {
                        includePaths: ["./assets/scss", "./node_modules","./node_modules/foundation-sites/scss"]
                    }
                }
            }]
        },
            {
                test: /\.css$/i,
                use: [MiniCssExtractPlugin.loader, "css-loader"],
            }
        ]
    },
    devServer: {
        compress: true,
        contentBase: outputDir,
        port: process.env.PORT || 8000,
        historyApiFallback: true
    }
};
