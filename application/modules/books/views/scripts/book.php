<div class="element book" name="book_<?php echo $this->book->book ?>" rel="#book_info">
    <div class="photo" style="float:left; padding: 0em 1.0em 0em 0.3em;">
        <img src="<?php echo $this->book->getUrlPhoto() ?>" alt="<?php echo $this->book->title ?>" title="<?php echo $this->book->title ?>" />
    </div>
    <div>
        <p><span class="bold">Title: </span><?php echo $this->none($this->book->title) ?></p>
    <?php if (!empty($this->book->author)) { ?>
        <p><span class="bold">Author: </span><?php echo $this->book->author ?></p>
    <?php } ?>
        <p><span class="bold">Language: </span><?php echo $this->none($this->book->language) ?></p>
    </div>
</div>
