<?php
$data = array(
    'class'=>'well'
);
echo form_open('',$data);
?>
<table>
    <tr>
        <td>
            <?php
            echo form_label('Title Post','title');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $data = array(
                'class'=>'span3',
                'style'=>'height: 25px'
            );
            echo form_input($data);
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php

            echo form_label('Note','note');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <textarea rows="10" cols="40" style="width: 1057px"></textarea>
        </td>
    </tr>
    <tr>
        <td align="center">
            <?php
            $data = array(
                'class'=>'btn',
                'value'=>'submit'
            );
            echo form_submit($data);
            ?>
            &nbsp;&nbsp;
            <?php
            $data = array(
                'class'=>'btn',
                'value'=>'cancel'
            );
            echo form_submit($data);
            ?>

        </td>

    </tr>
</table>

<?php echo form_close(); ?>