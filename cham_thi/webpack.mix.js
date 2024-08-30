let mix = require('laravel-mix');
require('dotenv').config();
const webpack = require('webpack');

mix
    .js([
        'resources/js/bootstrap.js', //require files
        'resources/js/app.js',
    ], 'dist/main.js')
    .webpackConfig({
        plugins: [
            new webpack.DefinePlugin({
                'process.env': {
                    MIX_PUSHER_APP_KEY: JSON.stringify(process.env.MIX_PUSHER_APP_KEY),
                    MIX_PUSHER_APP_CLUSTER: JSON.stringify(process.env.MIX_PUSHER_APP_CLUSTER),
                }
            })
        ]
    })
    .version()
