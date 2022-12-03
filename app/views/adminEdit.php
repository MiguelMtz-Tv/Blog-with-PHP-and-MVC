<?php require_once RUTA_APP.'/views/inc/headerAdmin.php';?>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Editar Noticia</h1>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Editando la Noticia</h6>
                            </div>                            
                            
                            <div class="card-body">                            
                                <form action="<?= RUTA_URL ?>/admin/refreshNew" method="POST">
                                    <div class="form-group">
                                        <label for="inputTitulo">Titulo</label>
                                        <input id="inputTitulo" class="form-control" name="titulo" type="text" value="<?= $data['new']->titulo ?>" placeholder="Escribe un titulo para la noticia">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescripcion">Descripción</label>
                                        <textarea id="inputDescripcion" name="descripcion" rows="10" cols="80"><?= html_entity_decode($data['new']->descripcion) ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEncabezado">Encabezado</label>
                                        <input id="inputEncabezado" class="form-control" name="encabezado" type="text"  value="<?= $data['new']->encabezado?>" placeholder="Escribe un encabezado para la noticia">
                                    </div>
                                   <div class="form-group">
                                   <label>Seleccionar Etiqueta</label>
                                   </div>
                                   <input type="hidden" name="idNoticia" value="<?= $data['new']->idNoticia ?>">
                                    <button class="btn btn-primary" name="submit" type="submit">Actualizar Noticia</button>
                                    <a class="btn btn-default float-right" href="<?= RUTA_URL . '/admin' ?>">Cancelar</a>
                                </form>
                            </div>                         
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Blog Admin <?php echo date('Y'); ?></span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para terminar su sesión actual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="<?= RUTA_URL ?>logout.php">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>

<?php require_once RUTA_APP.'/views/inc/footerAdmin.php';?>