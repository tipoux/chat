// Empêche le chargement de la page en Ajax

$(function(){
    $("#bouton").click(function(){
        var messageAjax = $("#idmessage").val();
        $.ajax({
            method: "post",
            url: "insert.php",
            data: { message: messageAjax }
        })
        $("#idmessage").val("");
    });
});

// Rafraichi les messages du chat toutes les 1 secondes

function playlist(){

$("#box").load("affichage.php");

$("#utilisateur").load("user.php");
}

setInterval('playlist()', 1000);


function tuerSession(){
    
    $.ajax({
        url : 'session_out.php',
        dataType : 'html', // On désire recevoir du HTML
        success : function (code_html, statut) {}
    });  
}

$(function () {

    $(window).unload(function() {
        tuerSession();
    });
});

//document.getElementById('box').scrollTop = document.getElementById('box').scrollHeight;
 
//    window.onbeforeunload = function () {
//        return "test";
//        document.location.href="chat.php" 
//    };
