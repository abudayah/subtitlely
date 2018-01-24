// See http://docs.sequelizejs.com/en/latest/docs/models-definition/
// for more of what you can do here.
const Sequelize = require('sequelize');
const DataTypes = Sequelize.DataTypes;
// const Movies = require('./movies.model');

module.exports = function (app) {
  const sequelizeClient = app.get('sequelizeClient');
  const subtitles = sequelizeClient.define('subtitles', {
    id: {
      type: DataTypes.INTEGER,
      autoIncrement: true,
      primaryKey: true
    },
    hash_id: {
      type: DataTypes.STRING,
      allowNull: true
    },
    movie_id: {
      type: DataTypes.INTEGER,
      allowNull: false
    },
    language: {
      type: DataTypes.STRING,
      allowNull: false
    },
    source_url: {
      type: DataTypes.STRING,
      allowNull: true
    },
    season: {
      type: DataTypes.INTEGER,
      allowNull: true
    },
    episode: {
      type: DataTypes.INTEGER,
      allowNull: true
    },
    votes_up: {
      type: DataTypes.INTEGER,
      allowNull: true,
      default: 0
    },
    votes_down: {
      type: DataTypes.INTEGER,
      allowNull: true,
      default: 0
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
    timestamps  : false,
    hooks: {
      beforeCount(options) {
        options.raw = false;
      }
    }
  });

  subtitles.associate = function (models) { // eslint-disable-line no-unused-vars
    // Define associations here
    // See http://docs.sequelizejs.com/en/latest/docs/associations/
    subtitles.belongsTo(models.movies, {foreignKey: 'movie_id'});
  };

  return subtitles;
};
