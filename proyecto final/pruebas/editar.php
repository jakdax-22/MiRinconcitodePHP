<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Registros</title>
        <link type="text/css" href="bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                text-align: left;
                padding: 4px;
            }
            tr:nth-child(even){
                background-color: #f2f2f2
            }
            th {
                background-color: #4CAF50;
                color: white;
            }
            .main-wrapper{
                width:50%;

                background:#E0E4E5;
                border:1px solid #292929;
                padding:25px;
            }
            hr {
                margin-top: 5px;
                margin-bottom: 5px;
                border: 0;
                border-top: 1px solid #eee;
            }
        </style>
    </head>

    <body>
        <div class="main-wrapper">
            <h2>Editar Registros </h2>
            <br><br>
            <?php
            include("function.php");
            $id = $_GET['id'];
            select_id('preguntasrespuestas', 'id', $id);
            ?>
            <form action="" method="post">


                <textarea rows="5" cols="60" name="preguntas" value="" ><?php echo $row->preguntas; ?></textarea>
                <textarea rows="5" cols="60" name="respuestas" value=""><?php echo $row->respuestas; ?></textarea>
                <br>
                <button class="btn btn-primary" type="submit" name="submit">Editar </button>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $field = array("preguntas" => $_POST['preguntas'], "respuestas" => $_POST['respuestas']);
                $tbl = "preguntasrespuestas";
                edit($tbl, $field, 'id', $id);
                header("location:index.php");
            }
            ?>
        </div>
    </body>
</html>