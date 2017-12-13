'use strict';

const processMovie = require('../../hooks/process-movie');
const hashid = require('../../hooks/hashid');

module.exports = {
  before: {
    all: [],
    find: [],
    get: [],
    create: [ processMovie() ],
    update: [],
    patch: [],
    remove: []
  },

  after: {
    all: [],
    find: [],
    get: [],
    create: [ hashid() ],
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
