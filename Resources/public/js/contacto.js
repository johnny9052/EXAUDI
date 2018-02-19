$(document).ready(function () {
    showLoadBar(false);
});


function save() {    
    if (validateForm() === true) {
        showLoadBar(true);
        Execute(scanInfo('sendEmail', true), 'Contact/CtlContact', '', 'cleanForm();showLoadBar(false);');
    }
}