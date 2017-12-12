const assert = require('assert');
const hashid = require('../../src/hooks/hashid');

describe('\'hashid\' hook', () => {
  it('runs the hook and hash id: 347', () => {
    // A mock hook object
    const mock = {
      result: {
        id: 347
      }
    };
    // Initialize our hook with no options
    const hook = hashid();

    // Run the hook function (which returns a promise)
    // and compare the resulting hook object
    return hook(mock).then(result => {
      const { data } = result;
      assert.equal(result, mock, 'Returns the expected hook object');
      assert.equal(data.hash_id, 'l7J');
    });
  });
});
