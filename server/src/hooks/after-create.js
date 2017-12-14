// Use this hook to manipulate incoming or outgoing data.
// For more information on hooks see: http://docs.feathersjs.com/api/hooks.html
const Hashids = require('hashids');

module.exports = function (options = {}) { // eslint-disable-line no-unused-vars
  return function afterCreate (hook) {
    // Hooks can either return nothing or a promise
    // that resolves with the `hook` object for asynchronous operations
    const hashids = new Hashids();
    const hash_id = hashids.encode(hook.result.id);
    
    hook.service.patch(hook.result.id, { hash_id });
    
    return Promise.resolve(hook);
  };
};
