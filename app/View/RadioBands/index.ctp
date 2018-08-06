<div class="row">
<div class="span3">
    <H3>Actions</H3>
    <div class="well">
    <ul>
        <li><?php echo $this->PoundcakeHTML->link('New Radio Band', array('action' => 'add')); ?></li>
        <li><?php echo $this->PoundcakeHTML->link('Setup',array('controller'=>'admin','action' => 'setup')); ?></li>
    </ul>
    </div>
</div><!-- /.span3 .sb-fixed -->

<div class="span9">
	<h2>Radio Bands</h2>
	<table class="table table-condensed table-striped table-hover">
            <thead>
                <tr>
                    <th class="index-item"><?php echo $this->Paginator->sort('name'); ?></th>
                    <th class="index-action"><?php echo 'Actions'; ?></th>
                </tr>
            </thead>
            <tbody>
	<?php
	foreach ($radiobands as $radioband): ?>
	<tr>
            <td class="index-item"><?php echo $radioband['RadioBand']['name'];?></td>
            <td class="index-action">
            <?php
                echo $this->PoundcakeHTML->link('Edit', array('action' => 'edit', $radioband['RadioBand']['id']));
                echo '&nbsp;';
                echo $this->PoundcakeHTML->postLinkIfAllowed('Delete',
                    array('controller'=>'radiobands','action'=>'delete', $radioband['RadioBand']['id']),
                    array('method' => 'post','class'=>'confirm','data-dialog_msg'=>'Confirm delete of '.$radioband['RadioBand']['name'] ),
                    null
                );
            ?>
            </td>
	</tr>
        <?php endforeach; ?>
            </tbody>
        </table>

	
	<?php
            // include pagination
            echo $this->element('Common/pagination');
        ?>
</div> <!-- /.span9 -->
</div> <!-- /.row -->