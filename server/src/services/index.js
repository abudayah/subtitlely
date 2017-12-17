const movies = require('./movies/movies.service.js');
const subtitles = require('./subtitles/subtitles.service.js');
module.exports = function () {
  const app = this; // eslint-disable-line no-unused-vars
  app.configure(movies);
  app.configure(subtitles);
};
