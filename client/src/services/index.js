// /services/index.js
import rest from '@feathersjs/rest-client'
import feathers from '@feathersjs/client'
// import { hooks } from '@feathersjs/feathers'
// import axios from 'axios'
// import localstorage from 'feathers-localstorage'
// import authentication from 'feathers-authentication/client'

const restClient = rest('http://localhost:3030')

export const app = feathers()
  .configure(restClient.fetch(window.fetch))
  // .configure(hooks)
  // .configure(rest('http://baseUrl').axios(axios))
// repeat this line for every service in our backend
export const movieService = app.service('movies')
export const subtitleService = app.service('subtitles')
