
<div id="tab_box">
	<table id="dataregister_table">
        <textarea cols="50">
            <?php
            foreach( $this->data_register_model->data as $d ):
                echo '[' .$d->timestamp . '] ' . $d->message. PHP_EOL;
            endforeach;
            ?>
        </textarea>
		<thead>
		<tr>
			<th>test</th>
			<th>test</th>
			<th>test</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>seba</td>
			<td>teba</td>
			<td>test</td>
		</tr>
		</tbody>
		<tfoot>
		<tr>
			<td id="dataregi_dwnl_btn" colspan="3"><button class="button button-primary">Download logfile</button></td>
		</tr>
		</tfoot>
	</table>
</div>