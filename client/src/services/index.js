// /services/index.js
import rest from '@feathersjs/rest-client'
import feathers from '@feathersjs/client'

const restClient = rest('http://localhost:3030')

export const app = feathers()
  .configure(restClient.fetch(window.fetch))

// repeat this line for every service in our backend
export const movieService = app.service('movies')
export const subtitleService = app.service('subtitles')
