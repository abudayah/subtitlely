'use strict';
// Use this hook to manipulate incoming or outgoing data.
// For more information on hooks see: http://docs.feathersjs.com/api/hooks.html

const Hashids = require('hashids');

module.exports = function (options = {}) { // eslint-disable-line no-unused-vars
  return function hashid (hook) {
    
    const hashids = new Hashids();
    hook.data.hash_id = hashids.encode(hook.result.id);
    hook.result.hash_id = hashids.encode(hook.result.id);
    // console.log(hook); // eslint-disable-line no-console
    console.log(hook.data); // eslint-disable-line no-console
    console.log(hook.result); // eslint-disable-line no-console
    // console.log(`Hashing id => ${hook.result.id}: ${hook.data.hash_id}`); // eslint-disable-line no-console
    
    // Hooks can either return nothing or a promise
    // that resolves with the `hook` object for asynchronous operations
    return Promise.resolve(hook);
  };
};
