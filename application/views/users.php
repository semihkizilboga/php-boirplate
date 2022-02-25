<style>
    div.dt-buttons {
        position: relative;
        text-align: left;
        float: left;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card p-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kullanıcı İşlemleri</h1>
            <div class="dropdown">

                <button data-toggle="modal" data-target="#new" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-user fa-sm text-white-50"></i> &nbspYeni Ekle</button>
                <div class="modal fade" id="new" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Yeni Kullanıcı Ekle</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <form action="">
                                  
                              </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Kullanıcı Adı</th>
                        <th>E-Posta Adresi</th>
                        <th>Telefon Numarası</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data['users'] as $item) { ?>
                            <tr>
                                <td><?= $item['user_id'] ?></td>
                                <td><?= $item['user_username'] ?></td>
                                <td><?= $item['user_email'] ?></td>
                                <td>Row 1 Data 2</td>
                                <td><a href="users/delete/<?= $item['user_id'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>