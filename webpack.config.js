const path = require('path');

module.exports = {
    entry: {
        editRecords: "./src/EditRecordsPage/index.tsx"
    },
    mode: "development",
    output: {
        path: path.resolve(__dirname, "dist"),
        filename: '[name]-bundle.js'
    },
    devtool: "source-map",
    resolve: {
        extensions: [".ts", ".tsx", ".js"]
    },
    module: {
        rules: [
            {test: /\.tsx?$/, loader: "awesome-typescript-loader", exclude: /node_modules/},
            {enforce: "pre", test: /\.js$/, loader: "source-map-loader"}
        ]
    },
    externals: {
        "react": "React",
        "react-dom": "ReactDOM"
    }
}