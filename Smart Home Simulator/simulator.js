/*
Submit button creates a multidimensional array (array of arrays)
which the startSimulation function will access via a FOR loop, and
determine which devices should be on or off (runs automatically
every second).
*/

// Serialize all form data into an array
function serializeArray(form) {

	// Setup the serialized data
	var serialized = [];

	// Loop through each field in the form
	for (var i = 0; i < form.elements.length; i++) {

		var field = form.elements[i];

		// Don't serialize fields without a name, submits, buttons, file and reset inputs, and disabled fields
		if (!field.name || field.disabled || field.type === 'file' || field.type === 'reset' || field.type === 'submit' || field.type === 'button')
			continue;

		// If a multi-select, get all selections
		if (field.type === 'select-multiple') {
			for (var n = 0; n < field.options.length; n++) {
				if (field.options[n].selected && field.options !== null)
					continue;
				/* if (field.options[n].selected) continue; */
				serialized.push({
					name: field.name,
					value: field.options[n].value
				});
			}
		}

		// Convert field data to a query string
		else if ((field.type !== 'checkbox' && field.type !== 'radio') || field.checked) {
			serialized.push({
				name: field.name,
				value: field.value
			});
		}
	}
	return serialized;
}

var form = document.querySelector('.deviceActivation');
var data = serializeArray(form);
console.log(data);
