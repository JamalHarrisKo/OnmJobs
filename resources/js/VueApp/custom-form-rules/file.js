/**
 * File: my-custom-rules/monday.js
 *
 * A contrived validation rule that ensures the input’s value is monday or mon.
 */


 var file = function (node) {
   var update = (node.value) //updates node value when different file is entered
  return (node['_value'][0]['name'].split('.').pop().toLowerCase()=='pdf')
  }
  file.force = true
  export default file