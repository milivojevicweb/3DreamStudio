$(document).ready(function() {
    $(document).on('keyup','input',checkProject);
    $(document).on('change','#profilePhoto',checkProject);
});


function checkProject(){
    var profilePhoto=$('#profilePhoto').val();
    var name=$('#projectName').val();
    var text=$('#projectText').val();
    var button=$("#submit");
    var reText=/[a-z]/;

    valid=true;

    if(profilePhoto == "") {
        valid = false;
        error("#imageButton");
    }else {
        success("#imageButton");

    }


    if(name == "") {
        valid = false;
        error("#projectName");

    }else if(!reText.test(name)) {
        valid = false;
        error("#projectName");
    }else {
        success("#projectName");
    }

    if(text == "") {
        valid = false;
        error("#projectText");
    }else if(!reText.test(text)) {
        valid = false;
        error("#projectText");
    }else {
        success("#projectText");
    }


    if(valid==false){
        $(button).prop( "disabled", true );
        $(button).addClass("buttonDisable");
    }else{
        $(button).prop( "disabled", false );
        $(button).removeClass("buttonDisable");
    }

}

function error(name){
    $(name).addClass("errorReg");
    $(name).removeClass("successReg");
}

function success(name){
    $(name).removeClass("errorReg");
    $(name).addClass("successReg");
}
