<?php
    $EE =& get_instance();
?>

<div class="tg" id="channels">
    <h2>Bundle Details</h2>
    <table class="data NSM_Stripeable">
        <tr>
            <th scope="row">Title</th>
            <td><input
				type="text"
				value="<?= form_prep($data['title']) ?>"
				name="<?=$input_prefix?>[title]"
			/></td>
        </tr>
        <tr>
            <th scope="row">Description</th>
            <td><textarea
				type="text"
				name="<?=$input_prefix?>[description]"
			><?= form_prep($data['description']) ?></textarea></td>
        </tr>
        <tr>
            <th scope="row">Version</th>
            <td><input
				type="text"
				value="<?= form_prep($data['version']) ?>"
				name="<?=$input_prefix?>[version]"
			/></td>
        </tr>
        <tr>
            <th scope="row">Download URL</th>
            <td><input
				type="text"
				value="<?= form_prep($data['download_url']) ?>"
				name="<?=$input_prefix?>[download_url]"
			/></td>
        </tr>
        <tr>
            <th scope="row">Post Import Instructions</th>
            <td><textarea
				type="text"
				name="<?=$input_prefix?>[post_import_instructions]"
			><?= form_prep($data['post_import_instructions']) ?></textarea></td>
        </tr>
    </table>
</div>

<div class="tg" id="channels">
	<h2>Which channels would you like to export?</h2>
	<div class="alert info">Check any of the options below to import the channel, it's related categories, statuses and custom fields as defined in the XML config.</div>

    <ul class="menu tabs">
		<?php foreach ($channels as $count => $channel) : ?>
			<li><a href="#channel_prefs-<?= $channel['channel_id'] ?>"><?=  $channel['channel_title'] ?></a></li>
		<?php endforeach; ?>
		<li><a href="#channel_prefs-show_all"><?= lang("Show all"); ?></a></li>
	</ul>

	<?php foreach ($channels as $count => $channel) : ?>
	<div id="channel_prefs-<?= $channel['channel_id'] ?>">
	<table class="data NSM_MagicCheckboxes">
	    <thead>
	        <tr>
	            <th scope="col">Attribute</th>
	            <th scope="col" style="width:20px">ID</th>
	            <th scope="col">Title</th>
	            <th scope="col" style="width:70px">Export <input type="checkbox" style="float:right" /></th>
	        </tr>
	    </thead>
	    <tbody>
            <tr class="odd">
                <th scope="row">Channel Title:</th>
                <td></td>
                <td><?= $channel['channel_title'] ?></td>
                <td rowspan="4"><input
                    type="checkbox"
                    style="float:right"
                    name="<?=$input_prefix?>[channels][<?php print($channel['channel_id']); ?>][enabled]"
                    value=""
                /></td>
            </tr>
            <tr class="odd">
                <th scope="row">Field Group:</th>
                <td></td>
                <td><?php print($channel['field_group_name']); ?></td>
            </tr>
            <tr class="odd">
                <th scope="row">Status Group:</th>
                <td></td>
                <td>
                    <?php print($channel['status_group_name']); ?><br />
                </td>
            </tr>
            <tr class="odd">
                <th scope="row">Category Groups:</th>
                <td></td>
                <td>
                    <?php foreach($channel['channel_category_group'] as $cat_count => $category_group): ?>
                    <?php endforeach; ?>
                </td>
            </tr>
            <tr class="odd">
                <th scope="row">Entries:</th>
                <td></td>
                <td></td>
                <td rowspan="4"><input
                    type="checkbox"
                    style="float:right"
                    name="<?=$input_prefix?>[channels][<?php print($channel['channel_id']); ?>][entries]"
                    value=""
                /></td>
            </tr>
        </tbody>
	</table>
    </div>
	<?php endforeach; ?>
</div>

<div class="action" style="text-align:right">
	<input type="submit" class="submit" value="Begin Export" />
</div>