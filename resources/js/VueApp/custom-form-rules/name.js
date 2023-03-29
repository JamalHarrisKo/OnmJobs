/**
 * File: my-custom-rules/monday.js
 *
 * A contrived validation rule that ensures the input’s value is monday or mon.
 */
 const name = function (node) {
    return node.value !== 'nameless' && node.value !=='noname'
  }
  export default name