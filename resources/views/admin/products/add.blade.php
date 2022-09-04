<h1>aadd sps</h1>
<form method="POST" action="<?php echo route('categories.add'); ?> ">
<div>
    <input type="text" placeholder="Tên anr phaarm" name="category_name" />
</div>
<?php echo csrf_field(); ?>
<button type="submit">Thêm</button>

</form>