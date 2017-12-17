const assert = require('assert');
const app = require('../../src/app');

describe('\'subtitles\' service', () => {
  it('registered the service', () => {
    const service = app.service('subtitles');

    assert.ok(service, 'Registered the service');
  });
});
