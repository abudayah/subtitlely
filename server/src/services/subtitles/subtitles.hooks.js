const beforeCreate = require('../../hooks/before-create');
const afterCreate = require('../../hooks/after-create');

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
