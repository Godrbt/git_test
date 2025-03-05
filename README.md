hi
robert
rajagiri college 
mca 
my name is greeshma

<script>
    function sendData(action) {
        var xhr = new XMLHttpRequest();
        var form = document.getElementById("userForm");
        var formData = new FormData(form);
        formData.append("action", action);
        xhr.send(formData);
    }

    function saveData() {
        sendData("save");
    }

    function deleteData() {
        sendData("delete");
    }

    function displayData() {
        sendData("display");
    }
</script>
