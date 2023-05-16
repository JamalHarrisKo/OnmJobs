/**
 * File: my-custom-rules/monday.js
 *
 * A contrived validation rule that ensures the input’s value is monday or mon.
 */


var file = function (node) {
  var update = (node.value) //updates node value when different file is entered
  console.log(node['_value'].length)
  for (var i = 0; i < node['_value'].length; i++) {
    if (node['_value'][i]['name'].split('.').pop().toLowerCase() !== 'pdf') {
      return false
    }
  }
  return true
}
file.force = true
export default file