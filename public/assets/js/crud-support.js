function hiddenDelete(id) {
    $('#id-delete').val(id);
}

function hiddenUpdate(id, statusName) {
    $('#status-id').val(id);
    $('#status-name').val(statusName);
}

function auxDeleteMachine(id) {
    $('#machine-id-todelete').val(id);
}

function auxUpdateMachine(id, name, status) {
    $('#machine-id').val(id);
    $('#machine-name').val(name);
    $('#machine-status').val(status);

    var machineStatus = $('#machine-status').val();

    $("#change-machine-status > option").each(function () {
        console.log("VALUE == " + this.value);
        console.log(" - -- - - -- -- - ");

        if (this.value == machineStatus) {
            $(this).attr("disabled", "true");
            $(this).attr("selected", "true");
        } else {
            $(this).removeAttr('disabled');
            $(this).removeAttr('selected');
        }
    });
}
