const path = require('path');

const resolvePath = p => path.resolve(__dirname, p)

module.exports = {
    webpack: {
        alias: {
            '@components': resolvePath('./src/components'),
            '@ui': resolvePath('./src/components/UI'),
            '@constants': resolvePath('./src/constants'),
            '@containers': resolvePath('./src/containers'),
            '@hoc-helpers': resolvePath('./src/hoc-helpers'),
            '@routes': resolvePath('./src/routes'),
            '@services': resolvePath('./src/services'),
            '@utils': resolvePath('./src/utils'),
        }
    },
}