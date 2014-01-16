<<<<<<< HEAD
    <?php echo $this->render_table_name(); ?>
    <div class="xcrud-list-container">
        <table class="xcrud-list table table-striped table-hover table-bordered">
            <thead>
                <?php echo $this->render_grid_head('tr', 'th'); ?>
            </thead>
            <tbody>
                <?php echo $this->render_grid_body('tr', 'td'); ?>
            </tbody>
            <tfoot>
                <?php echo $this->render_grid_footer('tr', 'td'); ?>
            </tfoot>
        </table>
    </div>
        <div class="xcrud-nav">
            <?php echo $this->render_limitlist(false); ?>
            <?php echo $this->add_button('xcrud-button xcrud-green','icon-plus'); ?>
            <?php echo $this->csv_button('xcrud-button xcrud-purple','icon-file'); ?>
            <?php echo $this->print_button('xcrud-button xcrud-pink','icon-print');  ?>
            <?php echo $this->render_search(); ?>
            <div style="float: right;">
            <?php echo $this->render_pagination(); ?>
            <?php echo $this->render_benchmark(); ?>
            </div>
            
        </div>
=======
    <?php echo $this->render_table_name(); ?>
    <div class="xcrud-list-container">
        <table class="xcrud-list table table-striped table-hover table-bordered">
            <thead>
                <?php echo $this->render_grid_head('tr', 'th'); ?>
            </thead>
            <tbody>
                <?php echo $this->render_grid_body('tr', 'td'); ?>
            </tbody>
            <tfoot>
                <?php echo $this->render_grid_footer('tr', 'td'); ?>
            </tfoot>
        </table>
    </div>
        <div class="xcrud-nav">
            <?php echo $this->render_limitlist(false); ?>
            <?php echo $this->add_button('xcrud-button xcrud-green','icon-plus'); ?>
            <?php echo $this->csv_button('xcrud-button xcrud-purple','icon-file'); ?>
            <?php echo $this->print_button('xcrud-button xcrud-pink','icon-print');  ?>
            <?php echo $this->render_search(); ?>
            <div style="float: right;">
            <?php echo $this->render_pagination(); ?>
            <?php echo $this->render_benchmark(); ?>
            </div>
            
        </div>
>>>>>>> 5caa52047a26555b6f56377f2cfd640af1be1198
