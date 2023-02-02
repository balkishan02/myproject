<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userapi $userapi
 */
?>

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Userapi'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userapi form content">
            <?= $this->Form->create($userapi) ?>
            <fieldset>
                <legend><?= __('Add Userapi') ?></legend>
                <?php
                    echo $this->Form->control('id');
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    echo $this->Form->control('role');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['id' => 'btn']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (){
        $('#btn').click(function (e){
            e.preventDefault();

            var username = $('#username').val();
            var password = $('#password').val();
            var role = $('#role').val();

            $.ajax({
                method: "POST",
                url: "<?= $this->Url->build(['controller' => 'Userapi', 'action' => 'add']); ?>",
                data: {
                    username: username,
                    password: password,
                    role: role
                }
            });
        });
    });
</script>
