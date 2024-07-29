<h1>Listar usuarios</h1>
<?php
$sql = "SELECT * FROM usuarios";
$res = $conn->query($sql);
$qtd = $res->num_rows;
if($qtd > 0){
    echo "<table class='table table-hover table-striped table-bordered'>";
    echo "<tr>";
        echo "<th># </th>";
        echo "<th>Nome </th>";
        echo "<th>e-mail </th>";
        echo "<th>data de nascimento </th>";
        echo "<th>Ações </th>";

        echo "</tr>";
    
    while($row = $res->fetch_object()){
        echo "<tr>";
        echo "<td>".$row->id." </td>";
        echo "<td>".$row->nome." </td>";
        echo "<td>".$row->email." </td>";
        echo "<td>".$row->data_nasc." </td>";
        echo "<td> 
            <button onclick=\"location.href= '?page=editar&id=".$row->id."'\" class= 'btn btn-success'>Editar </button>
    
             <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{}\" class= 'btn btn-danger'>Excluir </button>
            

        </td>";
        echo "</tr>";
    
    };
    echo "</table>";

}else{
    echo "<p class='alert alert-danger'>Sem resultados! </p>";
}
?>