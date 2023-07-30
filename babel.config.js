module.exports = function (app) {
	app.cache(true);

	const presets = [
		'@babel/preset-env'
	];

	const plugins = [
		'@babel/plugin-syntax-dynamic-import',
		'@babel/plugin-transform-async-to-generator'
	];

	return {
		presets,
		plugins
	};
};
