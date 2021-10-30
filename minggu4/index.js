$(document).ready(function(){
        
        $('#submit').click(function(){
            let data = $('#form_mahasiswa').serialize();
            $.ajax({
                type: "POST",
                url: "create.php",
                data: data,
                cache: false,
                success: function(data) {
                    $('#read_data').load("read.php");
                }
            });
        });
    
        $('#cancel').click(function() {
            $('#update').hide();
            $('#id').hide();
            $('#id').val('');
        });

        $('#update').click(function() {
            let data = $('#form_mahasiswa').serialize();

            $.ajax({
                type: "POST",
                url: "update.php",
                data: data,
                cache: false,
                success: function(data){
                    $('#read_data').load("read.php");
                }
            });
        });
        $('#read_data').load("read.php");

        $('#delete').click(function(){

            let data = $('#delete_data').serialize();
            alert("hapus data"+data);
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