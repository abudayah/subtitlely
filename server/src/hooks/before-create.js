// Use this hook to manipulate incoming or outgoing data.
// For more information on hooks see: http://docs.feathersjs.com/api/hooks.html

module.exports = function (options = {}) { // eslint-disable-line no-unused-vars
  return function beforeCreate (hook) {
    // Hooks can either return nothing or a promise
    // that resolves with the `hook` object for asynchronous operations
    hook.data.created_at = Math.round(Date.now() / 1000);
    hook.data.updated_at = Math.round(Date.now() / 1000);
    
    return Promise.resolve(hook);
  };
};
