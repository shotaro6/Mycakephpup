<h2>記事一覧</h2>

<ul>
<?php foreach ($posts as $post) : ?>
<li>
<?php
// debug($post);
//echo h($post)['Post']['title']);
//
echo $this->Html->link($post)['Post']['title'],'/post/view/'.$post)['Post']['id']);
?>	
</li>
<?php endforeach; ?>
</ul>

<h2>Add Post</h2>
<?php echo $this->Html->link('Add post', array('controller'=>'posts','action'=>'add'));