'use strict';
// Use this hook to manipulate incoming or outgoing data.
// For more information on hooks see: http://docs.feathersjs.com/api/hooks.html

module.exports = function (options = {}) { // eslint-disable-line no-unused-vars
  return function processMovie (hook) {
    // Hooks can either return nothing or a promise
    // that resolves with the `hook` object for asynchronous operations
    
    const title = hook.data.title.substring(0, 255).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
    const genre = hook.data.genre;
    const imdb_rating = hook.data.imdb_rating;
    const mpaa = hook.data.mpaa;
    const release_date = hook.data.release_date;
    
    hook.data = {
      title,
      genre,
      imdb_rating,
      mpaa,
      release_date
    };
    
    return Promise.resolve(hook);
  };
};
