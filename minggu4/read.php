<?php
    include "koneksi.php";
    
?>

<table id="data_mahasiswa" border="1" >
    <thead>
        <th>Id</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Aksi</th>
    </thead>
    <?php
    $Hasil = mysqli_query($con,"SELECT * FROM mahasiswa order by nim asc");
        
    while ($data = mysqli_fetch_array($Hasil)):
    ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td><?php echo $data['angkatan']; ?></td>
        <td>
            <button class="btn btn-primary"id="edit">Edit</button>
            <button class="btn btn-danger" id="delete">Delete</button>
        </td>
    </tr>
    <?php
    endwhile;
    ?>
</table>

<script>
    $(document).ready(function(){
        console.log("asdasdasd");
        $('#data_mahasiswa').on('click','#edit', function(){

            let current_row = $(this).closest('tr').find("td:first").html();

            $('#id').val(current_row);
            $('#update').show();
            $('#cancel').show();
            $('#id').show();
            $('#id_label').show();

        });

        $('#data_mahasiswa').on('click','#delete', function(){
            let current_row = $(this).closest('tr').find("td:first").html();
            // let data = $('#delete_data').serialize();
            let data = {id:current_row};
            alert("hapus data dengan id : "+current_row);
            console.log(data);
            $.ajax({
                type: "POST",
                url: "delete.php",
                data: data,
                cache: false,
                success: function(data){
                    $('#read_data').load("read.php");
                }
            });
            
        });

});
</script>