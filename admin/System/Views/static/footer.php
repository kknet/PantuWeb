
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->

    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."".Config::$adminpath ?>/System/Views/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."".Config::$adminpath ?>/System/Views/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."".Config::$adminpath ?>/System/Views/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."".Config::$adminpath ?>/System/Views/assets/libs/js/main-js.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."".Config::$adminpath ?>/System/Views/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."".Config::$adminpath ?>/System/Views/assets/vendor/charts/morris-bundle/morris.js"></script>
    <script>
    $(document).ready( function () {
    $('#files_DT').DataTable();
} );
</script>

<script>
<?php


?>

Morris.Line({
                element: 'montly_downloads_chart',
                behaveLikeLine: false,
                data: [
                    <?php echo ThemeFunctions::getChartData("Montly"); ?>
                ],

                xkey: 'x',
                ykeys: ['a'],
                parseTime: false,
                labels: ["Downloads"],
                   lineColors: ['#5969ff'],
                     resize: true,
                        gridTextSize: '14px'
            });

            Morris.Area({
                            element: 'music_downloads_chart',
                            behaveLikeLine: false,
                            data: [
                                <?php echo ThemeFunctions::getChartData("Music"); ?>
                            ],

                            xkey: 'x',
                            ykeys: ['a'],
                            parseTime: false,
                            labels: ["Downloads"],
                               lineColors: ['#25d5f2'],
                                 resize: true,
                                    gridTextSize: '14px'
                        });

                        Morris.Area({
                                        element: 'video_downloads_chart',
                                        behaveLikeLine: false,
                                        data: [
                                            <?php echo ThemeFunctions::getChartData("Video"); ?>
                                        ],

                                        xkey: 'x',
                                        ykeys: ['a'],
                                        parseTime: false,
                                        labels: ["Downloads"],
                                           lineColors: ['#ff407b'],
                                             resize: true,
                                                gridTextSize: '14px'
                                    });


</script>
</body>

</html>
