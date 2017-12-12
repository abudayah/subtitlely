// See http://docs.sequelizejs.com/en/latest/docs/models-definition/
// for more of what you can do here.
const Sequelize = require('sequelize');
const DataTypes = Sequelize.DataTypes;

module.exports = function (app) {
  const sequelizeClient = app.get('sequelizeClient');
  const movies = sequelizeClient.define('movies', {
    hash_id: {
      type: DataTypes.STRING,
      allowNull: true
    },
    title: {
      type: DataTypes.STRING,
      allowNull: false
    },
    genre: {
      type: DataTypes.STRING,
      allowNull: false
    },
    imdb_rating: {
      type: DataTypes.FLOAT,
      allowNull: false
    },
    mpaa: {
      type: DataTypes.STRING,
      allowNull: true
    },
    release_date: {
      type: DataTypes.INTEGER,
      allowNull: false
    }
  }, {
    createdAt   : 'created_at',
    updatedAt   : 'updated_at',
    timestamps  : true,
    underscored : true,
    hooks: {
      beforeCount(options) {
        options.raw = true;
      }
    }
  });

  movies.associate = function (models) { // eslint-disable-line no-unused-vars
    // Define associations here
    // See http://docs.sequelizejs.com/en/latest/docs/associations/
  };

  return movies;
};
