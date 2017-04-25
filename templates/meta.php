<p><?php if ( in_category('wordpress') ) {
            echo "<i class='fa fa-wordpress cat-icon' title='Wordpress dev'></i> ";
            }
            ?>

            <?php if ( in_category('javascript') ) {
            echo "<i class='fa fa-code cat-icon' title='JavaScript dev'></i> ";
            }
            ?>
            <?php if ( in_category('games') ) {
            echo "<i class='fa fa-gamepad cat-icon' title='Game dev'></i> ";
            }
            ?>

            <?php if ( in_category('ios') ) {
            echo "<i class='fa fa-apple cat-icon' title='iOS dev dev'></i> ";
            }
            ?>
              <?php if ( in_category('basics') ) {
            echo "<span class='xiong-basics'>Basics</span>";
            }
            ?>
            <?php if ( in_category('intermediate') ) {
            echo "<span class='xiong-intermediate'>Intermediate</span>";
            }
            ?>
            <?php if ( in_category('advanced') ) {
            echo "<span class='xiong-advanced'>Advanced</span>";
            }
            ?>
            <?php if ( in_category('expert') ) {
            echo "<span class='xiong-expert'>Expert</span>";
            }
            ?>
            </p>