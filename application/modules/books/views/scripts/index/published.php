<h1><?php echo $this->translate->_('Books published') ?></h1>
<div id="column3">
    <form method="post" action="" accept-charset="utf-8">
        <div class="tool-panel">
            <input type="submit" name="unpublish" value="<?php echo $this->translate->_('Unpublish the book') ?>" />
        </div>
        <table>
            <tr>
                <th style="width:20px;">&nbsp;</th>
                <th><?php echo $this->translate->_('Title') ?></th>
                <th><?php echo $this->translate->_('Author') ?></th>
                <th><?php echo $this->translate->_('Publisher') ?></th>
                <th style="width:50px;"><?php echo $this->translate->_('Year') ?></th>
                <th><?php echo $this->translate->_('Language') ?></th>
                <th><?php echo $this->translate->_('Path') ?></th>
                <th style="width:30px;"><img src="/media/img/icons/database.png" alt="" title="" /></th>
                <th style="width:30px;"><img src="/media/img/icons/photo.png" alt="" title="" /></th>
                <th style="width:30px;"><img src="/media/img/icons/book_edit.png" alt="" title="" /></th>
            </tr>
            <?php foreach ($this->books as $key => $book) { ?>
                <tr class="<?= $key % 2 == 0 ? 'even' : 'odd' ?>">
                    <td class="center"><input type="checkbox" name="books[]" value="<?php echo $book->hash ?>" /></td>
                    <td class="left"><?php echo $book->title ?></td>
                    <td class="left"><?php echo $book->author ?></td>
                    <td class="center"><?php echo $book->publisher ?></td>
                    <td class="center"><?php echo $book->year ?></td>
                    <td class="center"><?php echo $book->language ?></td>
                    <td class="left"><?php echo $book->getPath() ?></td>
                    <td class="center">
                    <?php if ($book->inDisk()) { ?>
                        <img src="/media/img/icons/tick.png" alt="" title="" />
                    <?php } else { ?>
                        <img src="/media/img/icons/cross.png" alt="" title="" />
                    <?php } ?>
                    </td>
                    <td class="center">
                    <?php if ($book->hasThumb()) { ?>
                        <img src="/media/img/icons/tick.png" alt="" title="" />
                    <?php } ?>
                    </td>
                    <td class="center"><a class="update_book" name="edit_<?php echo $book->hash ?>" rel="#update_book"><img src="/media/img/icons/pencil.png" alt="<?php echo $this->translate->_('Edit') ?>" title="<?php echo $this->translate->_('Edit') ?>" /></a></td>
                </tr>
            <?php } ?>
        </table>
        <div id="box" style="background-color:#000000; background-image: url('/media/img/toolbar.png'); height: 0px;"></div>
        <div class="tool-panel">
            <input type="submit" name="unpublish" value="<?php echo $this->translate->_('Unpublish the book') ?>" />
        </div>
    </form>
</div>
<div class="overlay" id="update_book">
    <div id="thumb" style="float:left; margin: 0em 1.3em 0em 0em; height: 400px; width: 300px;"></div>
    <div style="float:left;">
        <h1><?php echo $this->translate->_('Book information') ?></h1>
        <div id="form"><?php echo $this->form ?></div>
    </div>
</div>
