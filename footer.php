</div>
<?php $footer = file_get_contents("http://".$_SERVER['HTTP_HOST']."/static/footer"); echo $footer; ?>
</div>
<?php $pageend = file_get_contents("http://".$_SERVER['HTTP_HOST']."/static/pageend"); echo $pageend; ?>
</body>