module.exports = function (options = {}) { // eslint-disable-line no-unused-vars
  return function afterCreate (hook) {
    
    const model = hook.app.service('movies');
    
    model.get(hook.result.movie_id, {
      query: {
        $select: [ 'total_subtitles' ]
      }
    }).then(movie => {
      model.patch(hook.result.movie_id, {
        total_subtitles: movie.total_subtitles + 1
      });
    });

    return Promise.resolve(hook);
  };
};
