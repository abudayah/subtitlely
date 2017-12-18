'use strict';

const beforeCreate = require('../../hooks/before-create');
const afterCreate = require('../../hooks/after-create');

// @TODO @Yazan: man this shit is working :)
// Postman: http://localhost:3030/movies/50
const hydrate = require('feathers-sequelize/hooks/hydrate');
function includeParser() {
  return function (hook) {
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
  };
}

// @REVIEW to search a query just write this
// http://localhost:3030/movies?title[$like]=%The%
// docs => https://docs.feathersjs.com/api/databases/querying.html
//
// function search () {
//   return function (hook) {
//     console.log(hook.params.query); // eslint-disable-line
//     const model = hook.app.service('subtitles').Model;
//     hook.params.query.q = hook.params.q;
//     hook.params.sequelize = {
//       title: {
//         $like: hook.params.query.q
//       },
//       include: [
//         {
//           model: model,
//           // attributes: ['title'],
//         }
//       ]
//     };
//   };
// }

module.exports = {
  before: {
    all: [],
    find: [],
    get: [ includeParser() ],
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
