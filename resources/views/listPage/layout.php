<div class="container">
    <div class="inner" id="list">
    <h2>Registered Student List: </h2>
    
    <div class="table">
        <div class="row header">
            <!-- create a Studentdetals controller file -->
            <h3 class="listItem">#</h3>
            <h3 class="listItem">Student Name</h3>
            <!-- <h3 class="listItem">Current GPA</h3>
            <h3 class="listItem">Home-room Teacher</h3>
            <h3 class="listItem">Emergency Contact</h3>
            <h3 class="listItem">Contact Number</h3> -->
        </div>
     <?php foreach($index as $key => $name) : ?>
        <?php $currStudent = $key; ?>
        <div class="row">
        <a href="<?= $site_url ?>?page=studentdetails&student=<?= $currStudent ?>"><p class="listItem"><?= $key ?></p></a>
        <a href="<?= $site_url ?>?page=studentdetails&student=<?= $currStudent ?>"><p class="listItem"><?= $name ?></p></a>
        </div>
    <?php endforeach ?>
    </div>
    </div>
</div>

