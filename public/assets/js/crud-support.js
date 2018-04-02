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

function auxChangeEventTime(id, time) {
    $('#sensor-id').val(id);
    $('#event-time').val(time);
}

function auxUpdateMachine(id, name, status) {
    $('#machine-id').val(id);
    $('#machine-name').val(name);
    $('#machine-status').val(status);

    var machineStatus = $('#machine-status').val();

    $("#change-machine-status > option").each(function () {

        if (this.value == machineStatus) {
            $(this).attr("selected", "true");
        } else {
            $(this).removeAttr('disabled');
            $(this).removeAttr('selected');
        }
    });
}
