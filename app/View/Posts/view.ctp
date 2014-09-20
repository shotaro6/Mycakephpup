<h2><?php echo h($post['Post']['title']); ?></h2>

<p><?php echo h($post['Post']['body']); ?></p>

<h2>Comments</h2>

<ul>
<?php foreach ($post['Comment'] as $Comment): ?>
<li id="comment_<?php echo h($comment['id']); ?>">
<?php echo h($comment['body']) ?> by <?php echo h($comment['commenter']); ?> 
<?php
    echo $this->Html->link('削除','#',array('class'=>'delete', 'data-commnet-id'=>$comment['id']));
?>
</li>
<?php endforeach; ?>
</ul>

<h2>Add Comment</h2>

<?php
echo $this->Form->create('Comment', array('action'=>'add'));
echo $this->Form->input('Commenter');
echo $this->Form->input('body', array('rows'=>));
echo $this->Form->input('Comment.post_id', array('type'=>'hidden', 'value'=>$post['Post']['id']));
echo $this->Form->end('post comment');
?>

<script>
$(function() {
	$('a.delete').click(function(e) {
		if (confirm('sure?')) {
			$.post('/blog/comments/delete/'+$(this).data('commnet-id'),{}, function(res) {
                $('#commnet_'+res.id).fadeOut(); 
			}, "json");
		}
		return false;
	});
});
</script>



