// Initializes the `subtitles` service on path `/subtitles`
const createService = require('feathers-sequelize');
const createModel = require('../../models/subtitles.model');
const hooks = require('./subtitles.hooks');
const filters = require('./subtitles.filters');

module.exports = function () {
  const app = this;
  const Model = createModel(app);
  const paginate = app.get('paginate');

  const options = {
    name: 'subtitles',
    Model,
    paginate
  };

  // Initialize our service with any options it requires
  app.use('/subtitles', createService(options));

  // Get our initialized service so that we can register hooks and filters
  const service = app.service('subtitles');

  service.hooks(hooks);

  if (service.filter) {
    service.filter(filters);
  }
};
