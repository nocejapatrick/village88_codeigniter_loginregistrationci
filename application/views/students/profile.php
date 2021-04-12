<?php 
    $student = $this->session->userdata('user');
?>
<div class="container">
    <h1>Welcome <?= $student->info->first_name.' '.$student->info->last_name ?></h1>
    <a href="/students/logout">Logout</a>
</div>