$(document).ready(function() {

    $(document).on("click",".pag", function(event){
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        $('#hidden_page').val(page);
        fetch_data(page);
       });
});

function fetch_data(page){

    $.ajax({
        url:"/projekti/fetch_data?page="+page,
        dataType:"JSON",
        success:function(data){
            printProject(data);
            printPagination(data);
        },error:ajaxError
    })
}

function printPagination(data){
    var page=$('#hidden_page').val();
    pagIspis="";
    for(var i=1;i<=Math.ceil(data.total/6);i++){
        if(page==i){
            pagIspis+=`<li><a class="pag activePagination"  href="page=${i}">${i}</a></li>`;
        }else{
            pagIspis+=`<li><a class="pag"  href="page=${i}">${i}</a></li>`;
        }
    }

    $(".pagination").html(pagIspis);
}


function ajaxError(greska, status, statusText){
    console.error('GRESKA AJAX: ');
    console.log(status);
    console.log(statusText);
    if(greska.status == 500){
        console.log(greska.parseJSON);
        alert(greska.parseJSON.poruka);
    }
    else if(greska.status == 400){
        alert('Niste poslali ispravno parametre!')
    }
}

function printProject(data){
    let html = "";
    for(let item of data.data){
        html += `
        <div class="project">
            <a href="/projekat/${item.idProject}">
                <img src="images/${item.path}" alt="${item.alt}" />
                <div class="overlay">
                    <div class="imageText"><p>${limit(item.name)}</p></div>
                </div>
            </a>
        </div>
        `
    }
    $("#projectsContent").html(html);
}

function limit(element)
{
    html="";
    var max_chars = 20;

    if(element.length > max_chars) {
        html = element.substr(0, max_chars)+"...";
    }else{
        html=element;
    }

    return html;
}
