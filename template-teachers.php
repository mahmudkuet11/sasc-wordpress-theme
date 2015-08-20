<?php
/*
* Template Name: Teachers template
*/
?>
<?php get_header(); ?>

<?php query_posts('post_type=teachers&order=ASC&post_status=publish&paged='.get_query_var('paged')); ?>
<?php
	$sl = 1;
?>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<div class="single_teacher" style="width:100%">
	<h3><?php echo $sl; ?>. <?php echo get_post_meta( $post->ID, '_cmb_teachers_name', true ); ?></h3>
<table id="teachers_info_table">
	<tr class="tr">
		<th>পদবী</th>
		<th>বিষয়</th>
		<th>বিভাগ</th>
		<th>ইনডেক্স নম্বর</th>
		<th>জন্ম তারিখ</th>
		<th>শিক্ষাগত যোগ্যতার বিবরনণ<br />(বিভাগ ও সন সহ)</th>
		<th>যোগদানের তারিখ</th>
		<th>প্রথম এমপিও ভূক্তির তারিখ</th>
		<th>মামলা</th>
	</tr>
	<tr class="tr">
		<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_post', true ); ?></td>
		<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_subject', true ); ?></td>
		<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_group', true ); ?></td>
		<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_index', true ); ?></td>
		<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_birthday', true ); ?></td>
		<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_qualification', true ); ?></td>
		<td>বর্তমান প্রতিষ্ঠানঃ <?php echo get_post_meta( $post->ID, '_cmb_teachers_joining_present', true ); ?>,<br />  পূর্ববর্তী প্রতিষ্ঠানঃ <?php echo get_post_meta( $post->ID, '_cmb_teachers_joining_past', true ); ?></td>
		<td>বর্তমান প্রতিষ্ঠানঃ <?php echo get_post_meta( $post->ID, '_cmb_teachers_mpo_present', true ); ?>,<br />  পূর্ববর্তী প্রতিষ্ঠানঃ <?php echo get_post_meta( $post->ID, '_cmb_teachers_mpo_past', true ); ?></td>
		<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_case', true ); ?></td>
	</tr>

</table>
<!--	<table>
		<tr>
			<td><b>পদবী:</b></td>
			<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_post', true ); ?></td>
		</tr>
		<tr>
			<td><b>বিষয়:</b></td>
			<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_subject', true ); ?></td>
		</tr>
		<tr>
			<td><b>বিভাগ:</b></td>
			<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_group', true ); ?></td>
		</tr>
		<tr>
			<td><b>ইনডেক্স নম্বর :</b></td>
			<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_index', true ); ?></td>
		</tr>
		<tr>
			<td><b>জন্ম তারিখ :</b></td>
			<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_birthday', true ); ?></td>
		</tr>
		<tr>
			<td><b>শিক্ষাগত যোগ্যতার বিবরনণ (বিভাগ ও সন সহ):</b></td>
			<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_qualification', true ); ?></td>
		</tr>
		<tr>
			<td><b>যোগদানের তারিখ:</b></td>
			<td>বর্তমান প্রতিষ্ঠানঃ <?php echo get_post_meta( $post->ID, '_cmb_teachers_joining_present', true ); ?>,  পূর্ববর্তী প্রতিষ্ঠানঃ <?php echo get_post_meta( $post->ID, '_cmb_teachers_joining_past', true ); ?></td>
		</tr>
		<tr>
			<td><b>প্রথম এমপিও ভূক্তির তারিখ:</b></td>
			<td>বর্তমান প্রতিষ্ঠানঃ <?php echo get_post_meta( $post->ID, '_cmb_teachers_mpo_present', true ); ?>,  পূর্ববর্তী প্রতিষ্ঠানঃ <?php echo get_post_meta( $post->ID, '_cmb_teachers_mpo_past', true ); ?></td>
		</tr>
		<tr>
			<td><b>মামলা:</b></td>
			<td><?php echo get_post_meta( $post->ID, '_cmb_teachers_case', true ); ?></td>
		</tr>
	</table>-->
</div>
<?php $sl++; ?>
<?php endwhile; ?>
<?php else: ?>
<marquee><h3>No Teachers Found !!!</h3></marquee>
<br /><br />
<?php endif; ?>

							
<div class="clear"></div>   									
  
<?php get_footer(); ?>