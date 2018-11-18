$("button").click(function(){
    $.getJSON("/genus/caracatita/notes", function(result){
        $.each(result, function(i, field){
            $("div").append(field + " ");
        });
    });
});