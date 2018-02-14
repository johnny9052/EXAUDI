


function save() {
    if (validateForm() === true) {
        Execute(scanInfo('sendEmail', true), 'Contact/CtlContact', '', 'cleanForm();');
    }
}