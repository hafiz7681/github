<?php
require 'functions.php';

if(hapus($_GET['id']) > 0) {
  echo "<script>
    document.location.href = 'index.php';
  </script>";
} else {
  echo "<script>
    alert('Data gagal dihapus!');
    document.location.href = 'index.php';
  </script>";
}

?>