// utils
var deepMerge = require('../utils/deepMerge');

/**
 * BrowserSync
 * configuration
 * object
 *
 */
module.exports = deepMerge({
	proxy: 'livincamping.local',
	host: 'livincamping.local',
	open: 'external',
});
