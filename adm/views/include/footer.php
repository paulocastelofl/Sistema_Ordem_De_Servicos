</div>                
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>assets/DataTables/datatables.min.js"></script>
<script src="<?php echo URL; ?>assets/jquery/jquery.maskedinput.min.js"></script>
<script src="<?php echo URL; ?>assets/jquery/jquery.maskedinput.js"></script>
<script src="<?php echo URL; ?>assets/jquery/jquery.maskMoney.js"></script>



<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });

    $(document).ready(function () {
        $('#example').DataTable({
            "language": {
                "lengthMenu": "Exibir _MENU_ registros por página",
                "zeroRecords": "Nada encontrado - desculpe",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ total registros)",
                "search": "Buscar:"
            },
            "lengthMenu": [[10, 20, 40, -1], [10, 20, 40, "All"]],
            "order": [[0, "desc"]]

        });
    });

    $(document).ready(function () {
        $('#tab_dizimo').DataTable({
            "language": {
                "lengthMenu": "Exibir _MENU_ registros por página",
                "zeroRecords": "Nada encontrado - desculpe",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ total registros)",
                "search": "Buscar:"
            },
            "lengthMenu": [[10, 20, 40, -1], [10, 20, 40, "All"]],
            "order": [[0, "desc"]]

        });
    });

    $(function () {
        $('#valor').maskMoney();
    });

</script>

</body>
</html>