<?php
global $hesk_settings, $hesklang;
/**
 * @var array $tickets
 * @var boolean $showStaffOnlyFields
 */

// This guard is used to ensure that users can't hit this outside of actual HESK code
if (!defined('IN_SCRIPT')) {
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $hesk_settings['hesk_title']; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $hesklang['ENCODING']; ?>">
    <style type="text/css">
        h1 {
            text-align: center;
        }
        
        body, table, td, p {
            color: black;
            font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
            font-size: <?php echo $hesk_settings['print_font_size']; ?>px;
            word-wrap: break-word;
            word-break: break-word;
        }

        table {
            border-collapse: collapse;
            font-size: smaller;
            border: 1px solid;
        }

        hr {
            border: 0;
            color: #9e9e9e;
            background-color: #9e9e9e;
            height: 1px;
            width: 100%;
            text-align: left;
        }
        
        th {
            text-align: left;
            border: 1px solid;
            padding: 5px;
        }
        
        td {
            border: 1px solid;
            padding: 5px;
        }
        
        #datetime {
            text-align: center;
            font-weight: bold;
        }
        
        #dgsclogo {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 2cm;
        }
    </style>
</head>
<body onload="window.print()">

<?php foreach ($tickets as $ticket): ?>

<div>
    <img id=dgsclogo src="https://opencuny.org/files/2024/08/dgsc-logo-square.png" alt="DGSC Logo">
</div>

<h1>DGSC Payment Request Form</h1>

<div id=datetime>
    Form submission date: <?php echo $ticket['dt']; ?><br>
    DGSC Form ID: <?php echo $ticket['trackid']; ?><br>
</div>

<!-- OPTIONAL FIELDS
<?php echo $hesklang['subject']; ?>:<br>
        <b><?php echo $ticket['subject']; ?></b><br>
    <?php if ($hesk_settings['sequential'] || $showStaffOnlyFields): ?>
        <?php echo $hesklang['seqid']; ?>:<br>
        <?php echo $ticket['id']; ?><br>
    <?php endif; ?>
        <?php echo $hesklang['trackID']; ?>:<br>
        <?php echo $ticket['trackid']; ?><br>
        <?php echo $hesklang['ticket_status']; ?>:<br>
        <?php echo $ticket['status']; ?><br>
        <?php echo $hesklang['created_on']; ?>:<br>
        <?php echo $ticket['dt']; ?><br>
        <?php echo $hesklang['last_update']; ?>:<br>
        <?php echo $ticket['lastchange']; ?><br>
    <?php if ($ticket['owner'] != ''): ?>
        <?php echo $hesklang['taso3']; ?><br>
        <?php echo $ticket['owner']; ?><br>
    <?php endif; ?> 
        <?php echo $hesklang['last_replier']; ?>:<br>
        <?php echo $ticket['repliername']; ?><br>
        <?php echo $hesklang['category']; ?>:<br>
        <?php echo $ticket['categoryName']; ?><br>
    <?php if ($showStaffOnlyFields): ?>
        <?php echo $hesklang['ts']; ?>:<br>
        <?php echo $ticket['time_worked']; ?><br>             
        <?php echo $hesklang['due_date']; ?>:<br>
        <?php echo $ticket['due_date']; ?><br>
        <?php echo $hesklang['ip']; ?>:<br>
        <?php echo $ticket['ip']; ?><br>   
        <?php echo $hesklang['email']; ?>:<br>
        <?php echo $ticket['email']; ?><br>
    <?php endif; ?>
-->

<h2>Form data</h2>

    <b><?php echo $hesklang['name']; ?>:</b><br>
    <?php echo $ticket['name']; ?><br>
    <br>
    <b><?php echo $hesklang['email']; ?>:</b><br>
    <?php echo $ticket['email']; ?><br>
    
    <?php foreach ($ticket['custom_fields'] as $customField): ?><br>
        <b><?php echo $customField['name']; ?></b><br>
        <?php echo $customField['value']; ?><br>
    <?php endforeach; ?><br>

    <b>Attachments</b><br>
    <?php 
    // The following code uses trim and RegEx to remove the trailing comma from the attachment list along with the built-in numbering, and to replace commas by line breaks so that we get an attachment list. 
        $str = $ticket['attachments'];
        $pattern = '/\d{1,}\#/';
        $pattern2='/,/';
        echo preg_replace(array($pattern, $pattern2), array('', '<br>'), rtrim($str, ","))
    ?>

<h2>Internal notes</h2>

    <?php if (count($ticket['notes'])): ?>
        <?php foreach ($ticket['notes'] as $note): ?>
            <p><?php echo $hesklang['noteby']; ?> <b><?php echo ($note['name'] ? $note['name'] : $hesklang['e_udel']); ?></b></i> - <?php echo hesk_date($note['dt'], true); ?><br>
            <?php echo strlen($note['message']) ? $note['message'] : '<i>no message</i>'; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if ($ticket['message_html'] != ''): ?>
        <p><?php echo $ticket['message_html']; ?></p>
    <?php endif; ?>

<h2>Messages</h2>

    <?php foreach ($ticket['replies'] as $reply): ?>
    Message by <b><?php echo $reply['name']; ?></b> - <?php echo $reply['dt']; ?><br>
    <p><?php echo $reply['message_html']; ?></p>
    <?php endforeach; ?>
    
<h2>Accounting codes</h2>

    <table>
        <tr>
            <th>GL Unit</th>
			<th>Operating Unit</th>
			<th>Fund</th>
			<th>Department</th>
			<th>Program</th>
			<th>Major Purpose</th>
			<th>Special Initiative</th>
			<th>Funding Source</th>
		</tr>
		<tr>
		    <td>GRD03</td>
			<td>9999</td>
			<td>12</td>
			<td>80333</td>
			<td>99999_GRD</td>
			<td>250</td>
			<td>9999</td>
			<td>217018_GRD</td>
		</tr>
		<tr>
		    <td>GL Business Unit</td>
			<td>OU not applicable</td>
			<td>Unrestricted Non-Tax Levy</td>
			<td>Doctoral Student Council</td>
			<td>PC not applicable</td>
			<td>Academic Support</td>
			<td>SI not applicable</td>
			<td>Doctoral Student Council</td>
		</tr>
	</table>
    
<?php endforeach; ?>
</body>
</html>