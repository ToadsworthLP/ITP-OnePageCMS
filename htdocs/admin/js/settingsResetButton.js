// This is somehow the only way to override a color picker form field value with an empty string
function resetField(formFieldName) {
    let target = $("[name='" + formFieldName + "']");

    target[0].form.onsubmit = function () {
        target[0].form.innerHTML += "<input type='hidden' name='" + formFieldName + "' value=''>";
    };
}
