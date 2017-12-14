const movies = require('./movies/movies.service.js');
const subtitle = require('./subtitle/subtitle.service.js');
module.exports = function () {
  const app = this; // eslint-disable-line no-unused-vars
  app.configure(movies);
  app.configure(subtitle);
};
