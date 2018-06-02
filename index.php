<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Data User Berhasil Ditambahkan";
            } else {
                echo "Penambahan gagal!";
            }
        ?>
    </p>
<?php endif; ?>