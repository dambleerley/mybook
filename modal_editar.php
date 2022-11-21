<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Atualizar a capa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./Scripts/AtualizarCapa.php" enctype="multipart/form-data" method="post">
            <?php $id = $_GET['livro'];?>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <label for="capa">Capa <i class="b bi-image"></i></label>
            <input type="file" name="capa" required class="form-control">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary"><i class="b bi-save"></i> Atualizar capa</button>
          </div>
        </form>
    </div>
  </div>
</div>