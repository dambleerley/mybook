<!-- Modal -->
<div class="modal fade" id="deletar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="b bi-exclamation-triangle"></i> Cuidado!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Você realmente deseja apagar este livro da sua biblioteca?
        </p>
      </div>
      <div class="modal-footer">
        <form action="Scripts/DeleteLivro.php" method="post">
          <input type="hidden" name="id" value="<?php echo $_GET['livro'];?>">
          <button type="submit" class="btn btn-danger"><i class="b bi-trash"></i> Apagar livro</button>
        </form>
      </div>
    </div>
  </div>
</div>