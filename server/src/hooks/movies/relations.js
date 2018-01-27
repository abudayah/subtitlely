const hydrate = require('feathers-sequelize/hooks/hydrate');

module.exports = function (options = {}) { // eslint-disable-line no-unused-vars
  return function relations (hook) {

    const model = hook.app.service('subtitles').Model;
    const association = {
      include:[
        { model: model }
      ]
    };

    switch (hook.type) {
    case 'before':
      hook.params.sequelize = Object.assign(association, { raw: false });
      return Promise.resolve(hook);
    case 'after':
      hydrate( association ).call(this, hook);
      break;
    }

    return Promise.resolve(hook);
  };
};