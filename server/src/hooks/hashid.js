'use strict';
// Use this hook to manipulate incoming or outgoing data.
// For more information on hooks see: http://docs.feathersjs.com/api/hooks.html
const Hashids = require('hashids');

module.exports = function (options = {}) { // eslint-disable-line no-unused-vars
  return function hashid (hook) {
    
    const hashids = new Hashids();
    const hash_id = hashids.encode(hook.result.id);
    
    hook.service.patch(hook.result.id, { hash_id });
    
    // Hooks can either return nothing or a promise
    // that resolves with the `hook` object for asynchronous operations
    return Promise.resolve(hook);
  };
};
