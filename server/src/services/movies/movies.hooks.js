'use strict';

const beforeCreate = require('../../hooks/before-create');
const afterCreate = require('../../hooks/after-create');

// @TODO @Yazan: what the hell is this ?
// const hydrate = require('feathers-sequelize/hooks/hydrate');
// function includeParser() {
//   return function (hook) {
//     const model = hook.app.service('subtitles').Model;
//     console.log(model); // eslint-disable-line
//     const association = { include:
//       [{ model: model, attributes: ['movie_id'] }]
//     };
//
//     switch (hook.type) {
//     case 'before':
//       hook.params.sequelize = Object.assign(association, { raw: false });
//       return Promise.resolve(hook);
//     case 'after':
//       hydrate( association ).call(this, hook);
//       break;
//     }
//   };
// }

module.exports = {
  before: {
    all: [],
    find: [],
    get: [],
    create: [ beforeCreate() ],
    update: [],
    patch: [],
    remove: []
  },

  after: {
    all: [],
    find: [],
    get: [],
    create: [ afterCreate() ],
    update: [],
    patch: [],
    remove: []
  },

  error: {
    all: [],
    find: [],
    get: [],
    create: [],
    update: [],
    patch: [],
    remove: []
  }
};
