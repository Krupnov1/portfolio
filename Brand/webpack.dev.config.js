"use strict"

const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');  

module.exports = {
    entry: {
        main: path.join(__dirname, "./src/public/index.js")
    },
    output: {
        path: path.join(__dirname, 'dist/public'),
        publicPath: "/",
        filename: "js/[name].js"
    },
    target: 'web',
    devtool: 'eval-source-map',
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: "babel-loader"
            },
            {
                test: /\.html$/,
                use: [
                    {
                        loader: "html-loader"
                    }
                ]
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            },
            {
                test: /\.(png|jpg|svg|gif)$/,
                use: ['file-loader']
            },
        ]
    },
    plugins: [
        new CleanWebpackPlugin(),
        
        new HtmlWebpackPlugin({
            template: './src/public/index.html',
            filename: 'index.html',
            excludeChunks: ['server']
        }),

        new CopyWebpackPlugin({
            patterns: [
                { 
                    from: path.resolve(__dirname, "src/public/images"), 
                    to: path.resolve(__dirname, "dist/public/images") 
                }, 
            ],
        })
    ]
};