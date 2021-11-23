<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Rentall </title>

   <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 
 
 <script> 
        $(document).ready( function(){ 
                $('.editbtn').on('click', function(){ 
                        $('#editmodal').modal('show')

                        $tr = $(this).closest('tr');

                        var data = $tr.children("td").map(function(){
                                return $(this).text();
                        }).get();

                        console.log(data);

                        $('titulo').val(data[0]);
                        $('categoria').val(data[1]);
                        $('preco').val(data[2]);
                        $('modelo').val(data[3]);
                        $('marca').val(data[4]);
                        $('descricao').val(data[5]);
                        $('upload').val(data[6]);
                });
        }); 
 </script>

</head>
<body>
    
