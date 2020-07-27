function showPassword() {
    var input = document.getElementById("passwordBox");
    if (input.type === "password") {
        input.type = "text";
        document.getElementById("eyeIcon").innerHTML = '<i class="fa fa-eye-slash pointerOnHover"></i>';
        document.getElementById("eyeIcon").title = "cacher le mot de passe";
    } else {
        input.type = "password";
        document.getElementById("eyeIcon").innerHTML = '<i class="fa fa-eye pointerOnHover"></i>';
        document.getElementById("eyeIcon").title = "Aficher le mot de passe";
    }
}

function changeButtonState(buttonID, buttonText, color) {
    submitButton = document.getElementById(buttonID);
    if (submitButton.disabled === false) {
        submitButton.innerHTML = '<div class="spinner-border text-' + color + '"></div>';
        submitButton.disabled = true;

    } else {
        submitButton.innerHTML = buttonText
        submitButton.disabled = false;
    }
}

function login() {
    email = $("#emailBox").val();
    password = $("#passwordBox").val();
    console.log(password);
    changeButtonState("submitButton", "connexion");
    var options = {
        url: "php/api.php", //type de données attendue
        type: "POST",
        dataType: "json", //type de requette GET ou POST
        data: {
            operation: "login",
            email: email,
            password: password
        },
        success: function(data, status, xhr) {
            changeButtonState("submitButton", "connexion", "primary");
            if (data.error) {
                text = data.error.message;
            } else {
                text = "Une erreur s'est produite";
            }
            document.getElementById("errorField").innerHTML = text;
            console.log(data)
            if (data.role == "admin") {
                window.location.href = "admin/";
            }
            if (data.role == "client") {
                window.location.href = "public/";
            }
        },
        error: function(xhr, status, error) {
            changeButtonState("submitButton", "connexion", "primary");
            document.getElementById("errorField").innerHTML = "Une erreur s'est produite"
        }
    };
    $.ajax(options);

}
addUser = () => {
    $("#addUserButton").attr("disabled", true);
    email = $("#emailBox").val();
    password = $("#passwordBox").val();
    name = $("#nameBox").val();
    role = $("#roleBox").val();
    var options = {
        url: "../php/api.php", //type de données attendue
        type: "POST",
        dataType: "json", //type de requette GET ou POST
        data: {
            operation: "addUser",
            email: email,
            password: password,
            name: name,
            role: role
        },
        success: function(data, status, xhr) {
            if (data.error.message) {
                document.getElementById("addUserForm").reset();
                document.getElementById("addUserError").innerHTML = data.error.message;
                $('#addUserError').attr('class', 'alert alert-danger');
                $("#addUserButton").attr("disabled", false);
            }
            if (data.success) {
                document.getElementById("addUserForm").reset();
                document.getElementById("addUserError").innerHTML = "Utilisateur ajouté avec succes"
                $('#addUserError').attr('class', 'alert alert-success');
                $("#addUserButton").attr("disabled", false);
                setTimeout($('#addUSer').modal('hide'), 3000)
            }
        },
        error: function(xhr, status, error) {
            console.log(error);
        }
    };
    $.ajax(options);
}