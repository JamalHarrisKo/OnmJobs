/**
 * File: my-custom-rules/monday.js
 *
 * A contrived validation rule that ensures the input’s value is monday or mon.
 */


 var file = function (node) {
   var update = (node.value) //updates node value when different file is entered
  return (node['_value'][0]['name'].split('.').pop().toLowerCase()=='pdf')
    var filename = node['_value'][0]['name']
    var fileExtension = filename.split('.').pop().toLowerCase()
    if (fileExtension == 'pdf'){
      return true
    } else{
      node['_value'] = false
      return false
    }
  }
  file.force = true
  export default file