// See http://docs.sequelizejs.com/en/latest/docs/models-definition/
// for more of what you can do here.
const Sequelize = require('sequelize');
const DataTypes = Sequelize.DataTypes;

module.exports = function (app) {
  const sequelizeClient = app.get('sequelizeClient');
  const movies = sequelizeClient.define('movies', {
    id: {
      type: DataTypes.INTEGER,
      autoIncrement: true,
      primaryKey: true
    },
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
    },
    created_at: {
      type: DataTypes.INTEGER,
      allowNull: false,
      default: Date.now()
    },
    updated_at: {
      type: DataTypes.INTEGER,
      allowNull: false,
      default: Date.now()
    }
  }, {
    // TODO: UNIX Timestamp
    timestamps  : false,
    // underscored : true,
    // createdAt   : 'created_at',
    // updatedAt   : 'updated_at',
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
