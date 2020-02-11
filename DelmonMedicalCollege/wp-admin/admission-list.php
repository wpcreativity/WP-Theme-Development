<?php
/**
 * Tools Administration Screen.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

require_once( ABSPATH . 'wp-admin/admin-header.php' );
global $wpdb;
$students = $wpdb->get_results("SELECT * FROM dn_admission_data"); ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<div class="wrap">
<h1>Admission List</h1></div>

<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Country</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Degree Type</th>
        </tr>
    </thead>
    <tbody>
    	<?php foreach($students as $student){ ?>
        <tr>
            <td><center><?php echo $student->first_name; ?> <?php echo $student->last_name; ?></center></td>
            <td><center><?php echo $student->email; ?></center></td>
            <td><center><?php echo $student->country; ?></center></td>
            <td><center><?php echo $student->address; ?></center></td>
            <td><center><?php echo $student->phone; ?></center></td>
            <td><center><?php echo $student->degree_type; ?></center></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php
include( ABSPATH . 'wp-admin/admin-footer.php' ); ?>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
    $('#table_id').DataTable({
    	"scrollY": true
    });
} );
</script>