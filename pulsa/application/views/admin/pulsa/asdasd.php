<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <?php $this->load->view("admin/_partials/navbar.php") ?>

    </nav>

    <div id="wrapper">

        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">
                <label for="operator">operator*</label>
                <input class="form-control" type="text" name="operator" id="operator" placeholder="operator" />
                <div class="invalid-feedback">
                    <?php echo form_error('operator') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="nomor">nomor*</label>
                <input class="form-control" type="text" name="nomor" id="nomor" placeholder="Nomor HP" />
                <div class="invalid-feedback">
                    <?php echo form_error('nomor') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="nominal">nominal*</label>
                <input class="form-control" type="nimber" name="nominal" id="nominal" placeholder="Nominal" />
                <div class="invalid-feedback">
                    <?php echo form_error('nominal') ?>
                </div>
            </div>

            <input class="btn btn-success" type="submit" name="btn" id="save" value="Save" />
            </form>

            </tbody>
            </table>
        </div>
    </div>
    </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <?php $this->load->view("admin/_partials/js.php") ?>
    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>
</body>

</html>