// This file only includes the local config file if it exists. Prevents errors in build in remote environments where the
// local file isn't available.

const fs = require('fs');

// If we need to add default/fallback values at any point, add them here.
let config = {};

if (fs.existsSync('./local.json')) {
    config = require('./../../../local.json');
}

module.exports = config;