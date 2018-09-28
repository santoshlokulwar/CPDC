 
<?php include('nav2.html');?>

 <div class=" table-responsive" Style="width:80%;float:left;">
            <table class="table table-striped table-hover ">
                <tbody><tr>
                        <th>#</th>
                        <th>Sample heading</th>
                        <th>Sample heading</th>
                        <th style="width: 280px;">Actions</th>
                    </tr>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td>Sample content</td>
                            <td>Sample content</td>
                            <td>
                                ggj
                            </td>
                        </tr>
                    <?php } ?>

                </tbody></table>
        </div>