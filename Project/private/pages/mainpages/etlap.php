<?php
$result = db_fetchAll('SELECT * FROM pizza');

$isPost = isset($_POST['submit']);
if($isPost){
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="etlap.csv"');
    $fields = array_keys($result[0]);
    $f = fopen('php://output', 'w');
    fputcsv($f, $fields, ';');
    foreach ($result as $line){
        fputcsv($f, $line, ';');
    }
}


?>
<div class="table-responsive">
    <table class="table align-middle table-light table-dark">
        <thead>
            <tr>
                <th></th>
                <th>Név</th>
                <th>Feltét</th>
                <th>Kicsi (22 cm)</th>
                <th>Nagy (28 cm)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $pizza): ?>
                <tr>
                    <td><?= $pizza['id'] ?> </td>
                    <td><?= $pizza['nev'] ?> </td>
                    <td><?= $pizza['feltet'] ?> </td>
                    <td><?= $pizza['kicsi_ar'].' ft' ?> </td>
                    <td><?= $pizza['nagy_ar'].' ft' ?> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php if (isAdmin($_SESSION)): ?>
    <a class="btn btn-primary" style="margin-bottom: 20px" href="?p=mainpages/etlapadd" role="button">Pizza hozzáadaása +</a>
<?php endif; ?>
<form method="post" enctype="multipart/form-data" style="color: white">
    <button type="submit" value="Upload File" name="submit" class="btn btn-primary">Étlap letöltése</button>
</form>
