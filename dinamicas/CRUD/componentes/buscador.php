<?php
require_once "../php/conn.php";
$conn = conexion();

$sql = "SELECT id,preguntas,respuestas FROM preguntasrespuestas";
$result = mysqli_query($conn, $sql);
?>
<style>
    #form1 {

        float: left;
        bottom: -50%;
    }
    #form2 {
        float: right;

    }
    .container {
        justify-content: space-between;
        flex-direction: column;
        height: 100vh;
        display: flex;
    }
    .container .btn-holder {
        justify-content: flex-end;
        display: flex;
    }

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
        width:80%;

        background:#E0E4E5;
        border:1px solid #292929;
        padding:25px;
        margin:auto;
        font-size:20px;

    }
    hr {
        margin-top: 5px;
        margin-bottom: 5px;
        border: 0;
        border-top: 1px solid #eee;
    }
    h2{
        font-size:24px;
    }
</style>
<br><br>
<div class="main-wrapper">
    <label>Buscador</label>
    <select id="buscadorvivo" class="form-control input-sm">
        <option value="0">Todos los Registros</option>
        <?php
        while ($row = mysqli_fetch_row($result)):
            ?>
            <option value="<?php echo $row[0] ?>">
                <?php echo $row[1] . " " . $row[2] ?>
            </option>

        <?php endwhile; ?>

    </select>
</div>



<script type="text/javascript">
    $(document).ready(function () {
        $('#buscadorvivo').select2();

        $('#buscadorvivo').change(function () {
            $.ajax({
                type: "post",
                data: 'valor=' + $('#buscadorvivo').val(),
                url: 'php/crearsession.php',
                success: function (r) {
                    $('#tabla').load('componentes/tabla.php');
                }
            });
        });
    });
</script>