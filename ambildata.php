<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM jasaweb") or die(mysqli_error($koneksi));
if ($query) {
        $posts = array();
        if (mysqli_num_rows($query)) {
                while ($post = mysqli_fetch_assoc($query)) {
                        $posts[] = $post;
                }
        }
        $data = json_encode(array('results' => $posts));
        echo $data;
}
