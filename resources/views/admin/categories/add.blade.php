
<h1>aadd danh muc</h1>
<form method="POST" action="<?php echo route('categories.add'); ?> ">
<div>
    <input type="text" placeholder="Tên danh mục" name="category_name" />
</div>
<?php echo csrf_field(); ?>
<button type="submit">Thêm</button>

</form>