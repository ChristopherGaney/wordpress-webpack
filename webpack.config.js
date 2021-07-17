/**
 * This is a main entrypoint for Webpack config.
 *
 * @since 1.0.0
 */
const path = require( 'path' );


// Paths to find our files and provide BrowserSync functionality.
const projectPaths = {
    projectDir:        __dirname, // Current project directory absolute path.
    projectJsPath:     path.resolve( __dirname, 'src/assets/js' ),
    projectImagesPath: path.resolve( __dirname, 'src/assets/images' ),
    projectOutput:     path.resolve( __dirname, 'dist/assets' ),
    projectWebpack:    path.resolve( __dirname, 'webpack' ),
};

// Files to bundle
const projectFiles = {
    // BrowserSync settings
    browserSync: {
        enable: false, // enable or disable browserSync
        host:   'localhost',
        port:   3000,
        mode:   'proxy', // proxy | server
        server: { baseDir: [ 'public' ] }, // can be ignored if using proxy
        proxy:  'https://wp-strap.lndo.site',
        // BrowserSync will automatically watch for changes to any files connected to our entry,
        // including both JS and Sass files. We can use this property to tell BrowserSync to watch
        // for other types of files, in this case PHP files, in our project.
        files:  '**/**/**.php',
        reload: false, // Set false to prevent BrowserSync from reloading and let Webpack Dev Server take care of this
        // browse to http://localhost:3000/ during development,
    },
    // JS configurations for development and production
    projectJs: {
        eslint:   false, // enable or disable eslint  | this is only enabled in development env.
        filename: 'js/[name].min.js',
        entry:    {
            app: projectPaths.projectJsPath + '/app.js'
        },
        rules:    {
            test: /\.m?js$/,
        }
    },
    //Source Maps configurations
    projectSourceMaps: {
        // Sourcemaps are nice for debugging but takes lots of time to compile,
        // so we disable this by default and can be enabled when necessary
        enable: true,
        env:    'dev', // dev | dev-prod | prod
        // ^ Enabled only for development on default, use "prod" to enable only for production
        // or "dev-prod" to enable it for both production and development
        devtool: 'source-map' // type of sourcemap, see more info here: https://webpack.js.org/configuration/devtool/
        // ^ If "source-map" is too slow, then use "cheap-source-map" which struck a good balance between build performance and debuggability.
    },
    // Images configurations for development and production
    projectImages: {
        rules: {
            test: /\.(jpe?g|png|gif|svg)$/i,
        },
        // Optimization settings
        minimizerOptions: {
            // Lossless optimization with custom option
            // Feel free to experiment with options for better result for you
            // More info here: https://webpack.js.org/plugins/image-minimizer-webpack-plugin/
            plugins: [
                [ 'gifsicle', { interlaced: true } ],
                [ 'jpegtran', { progressive: true } ],
                [ 'optipng', { optimizationLevel: 5 } ],
                [ 'svgo', {
                    plugins: [
                        { removeViewBox: false, },
                    ],
                }, ],
            ],
        }
    }
}

// Merging the projectFiles & projectPaths objects
const projectOptions = {
    ...projectPaths, ...projectFiles,
    projectConfig: {
        // add extra options here
    }
}

// Get the development or production setup based
// on the script from package.json
module.exports = env => {
    if ( env.NODE_ENV === 'production' ) {
        return require( './webpack/config.production' )( projectOptions );
    } else {
        return require( './webpack/config.development' )( projectOptions );
    }
};
