<?php

?>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($result as $file): ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?= $file['src'] ?>" class="card-img-top" alt="...">
                    <div class="card-footer">
                        <small class="text-muted"><?= $file['created_at'] ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php if(isModerator()): ?>
    <div class="mb-3" style="margin-top: 30px">
        <form method="post" enctype="multipart/form-data" style="color: white">
            <label for="fileToUpload" class="form-label"></label><br/>
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control"/>
            <button type="submit" value="Upload File" name="submit" class="btn btn-primary">Kép feltöltése</button>
        </form>
    </div>
<?php endif; ?>