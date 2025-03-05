

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



<script>
    function loginUser() {
        var xhr = new XMLHttpRequest();
        var form = document.getElementById("loginForm");
        var formData = new FormData(form);

        xhr.open("POST", "loginn.php", true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                document.getElementById("msg").value = xhr.responseText; // Display Message
            }
        };
        xhr.send(formData);
    }
</script>

