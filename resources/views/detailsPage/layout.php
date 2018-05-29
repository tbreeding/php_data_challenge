<div class="container">
    <div class="inner">
    <h2><?= $studentDetails['name'] ?> - Details:</h2>
        <div class='details'>
            <div class='row'>
            <h4>Current Grade: </h4>
            <p><?= $studentDetails['currentGrade'] ?></p>
            </div>
            <div class='row'>
            <h4>Current GPA: </h4><p><?= $studentDetails['currentGPA'] ?></p>
            </div>
            <div class='row'>
            <h4>Home-room Teacher: </h4><p><?= $studentDetails['teacher'] ?></p>
            </div>
            <div class='row'>
            <h4>Emergency Contact: </h4><p><?= $studentDetails['guardian'] ?></p>
            </div>
            <div class='row'>
            <h4>Contact Number: </h4><p><?= $studentDetails['phone'] ?></p>
            </div>

        </div>
</div>
    
</div>

